
<!-- Bootstrap CSS -->
<link rel="stylesheet" href="https://stackpath.bootstrapcdn.com/bootstrap/4.3.1/css/bootstrap.min.css" integrity="sha384-ggOyR0iXCbMQv3Xipma34MD+dH/1fQ784/j6cY/iJTQUOhcWr7x9JvoRxT2MZw1T" crossorigin="anonymous">

<style media="screen">
:root {
  --var-padding: 1em;
  --highlight: hsl(230, 38%, 46%);
  --highlight-dark: hsl(230, 38%, 36%);
  --logo-width: 6em;
  --logo-offset: 1em;
  --main-column-width: 25em;
}

* {
  box-sizing: border-box;
  &::before,
  &::after {
    border-box: inherit;
  }
}

.app {
  position: relative;
  padding-left: .5em;
  max-width: 60em;
  background: hsl(220, 35%, 76%) 100% linear-gradient(hsl(252, 2%, 42%) 0%, hsl(0, 5%, 30%) 50%, hsl(220, 35%, 76%) 50%, hsl(220, 35%, 76%) 100%);
  background-size: auto 10em ;
  background-repeat: repeat-x;
  background-position: center top;
}

.button {
background-color: #4CAF50; /* Green */
border: none;
color: white;
padding: 20px 32px;
text-align: center;
text-decoration: none;
display: inline-block;
font-size: 13px;
margin: 4px 2px;
cursor: pointer;
-webkit-transition-duration: 0.4s; /* Safari */
transition-duration: 0.4s;
}

.button2:hover {
box-shadow: 0 12px 16px 0 rgba(0,0,0,0.24),0 17px 50px 0 rgba(0,0,0,0.19);
}

header {
  position: relative;
  height: 8em;
  grid-row: 1 / 3;
  grid-column: 2;
  background: url("https://s3-us-west-2.amazonaws.com/s.cdpn.io/154571/bla.jpg");
  background-size: cover;
  background-position: right center;

  a {
    position: absolute;
    top: var(--logo-offset);
    left: var(--logo-offset);
    display: block;
    width: var(--logo-width);
  }

  img {
    display: block;
    max-width: 100%;
  }
}

nav {
  display: flex;
  padding: 1.5em var(--var-padding);
  grid-row: 1;
  grid-column: 1;
  background: #fff;

  a {
    display: block;
    color: #333;
    text-decoration: none;
    border-bottom: 1px solid #333;
  }

  a + a {
    margin-left: 2em;
  }

  a:hover,
  a:focus {
    border-color: var(--highlight);
    border-width: 2px;
  }

  a[aria-current] {
    border-bottom: 2px solid var(--highlight);
  }
}

main {
  padding: var(--var-padding);
  grid-row: 2;
  grid-column: 1;
  background: #fff;

  h1 {
    margin-top: 0;
    font-weight: normal;

    span {
      display: block;
      color: var(--highlight);
      font-weight: bolder;
    }

    sub {
      font-size: .5em;
    }
  }

  a {
    color: var(--highlight);
    text-decoration: none;

    &::after {
      margin-left: 1.5em;
      content: '→';
      vertical-align: baseline;
    }

    &:hover,
    &:focus {
      color: var(--highlight-dark);
    }

    &:hover::after,
    &:focus::after {
      margin-left: 2em;
    }
  }
}

html {
  min-height: 100vh;
  font-family: sans-serif;
  line-height: 1.5;
  background: linear-gradient(45deg, hsl(30, 6%, 94%), hsl(20, 9%, 80%));
  background-repeat: no-repeat;
  background-size: cover;
}

body {
  margin: 0;
}

@media (min-width: 37.5em) {
  :root {
    --var-padding: 3em;
  }

  body {
    margin: 1em;
  }

  .app {
    display: grid;
    margin: 3em auto;
    grid-template-rows: 5em auto;
    grid-template-columns: 1.4fr 1fr;
    padding-left: 2em;
    background-size: auto;

    &::after {
      position: absolute;
      right: 1em;
      left: 1em;
      bottom: 0;
      z-index: -1;
      width: 95%;
      height: 200px;
      content: '';
      box-shadow: 0 0 5em hsl(22, 23%, 40%);
    }
  }

  header {
    height: auto;

    a {
      right: var(--logo-offset);
      left: auto;
    }
  }

  nav {
    justify-content: space-between;


  }

  main {
    min-width: var(--main-column-width);
  }
}
</style>
