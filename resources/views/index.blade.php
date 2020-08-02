@extends('layouts.app')

@section('content')
  @include('partials.page-header')

  @if (!have_posts())
    <div class="alert alert-warning">
      {{ __('Sorry, no results were found.', 'sage') }}
    </div>
    {!! get_search_form(false) !!}
  @endif

  <div class="owl-carousel owl-theme">
    <?php
    $query = new WP_Query( [
      'posts_per_page' => -1,
      'orderby' => 'ID',
      'order' => 'ASC'
      ] );
    ?>
    @while ($query->have_posts()) @php $query->the_post() @endphp
      @include('partials.content-'.get_post_type())
    @endwhile
    <?php wp_reset_postdata(); ?>
  </div>
  {!! get_the_posts_navigation() !!}
@endsection
