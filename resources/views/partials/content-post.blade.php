<article @php post_class() @endphp>
  <header>
    <link href="https://fonts.googleapis.com/css2?family=Montserrat:wght@300&family=PT+Serif:ital@1&display=swap" rel="stylesheet">
  </header>

    <blockquote>
      {{ the_field('текст_для_слайдера') }}
      <footer>
        <cite class="footer-font"> {{ the_field('текст_для_слайдера_футер') }} </cite>
      </footer>
    </blockquote>

</article>
