<!DOCTYPE html>
<html>

<head>
<style>
ul {
  list-style-type: none;
  margin: 0;
  padding: 0;
  overflow: hidden;
}

li {
  float: left;
}

li a {
  display: block;
  padding: 8px;
  background-color: #dddddd;
}
</style>
<?php wp_head() ?>
</head>

<body>

<div class="container-fluid">
  <header class="blog-header py-3">
    <div class="row flex-nowrap justify-content-between align-items-center">
      <div class="col-4 pt-1">
        <a class="link-secondary" href="#">Subscribe</a>
      </div>
      <div class="col-2 text-center">
<img src="https://i.imgur.com/nr2PM3P.jpeg" alt="Italian Trulli width=" height="100">
        
      </div>
      <div class="col-4 d-flex justify-content-end align-items-center">
        <a class="link-secondary" href="#" aria-label="Search">
          <svg xmlns="http://www.w3.org/2000/svg" width="20" height="20" fill="none" stroke="currentColor" stroke-linecap="round" stroke-linejoin="round" stroke-width="2" class="mx-3" role="img" viewBox="0 0 24 24"><title>Search</title><circle cx="10.5" cy="10.5" r="7.5"></circle><path d="M21 21l-5.2-5.2"></path></svg>
        </a>
        <a class="btn btn-sm btn-outline-secondary" href="#">Sign up</a>
      </div>
    </div>
  </header>

  <div class="nav-scroller py-1 mb-2">
    <nav class="nav d-flex justify-content-between">
      <a id="a1" class="p-2 link-secondary" href="http://localhost/wordpress/?page_id=172">Home</a>
      <a id="a2" class="p-2 link-secondary" href="http://localhost/wordpress/?page_id=311">Programs</a>
      <a id="a3" class="p-2 link-secondary" href="http://localhost/wordpress/?page_id=543">Photos</a>
      <a id="a4" class="p-2 link-secondary" href="http://localhost/wordpress/?page_id=417">About</a>
      <a id="a5" class="p-2 link-secondary" href="http://localhost/wordpress/?page_id=724">News</a>
      <a id="a6" class="p-2 link-secondary" href="http://localhost/wordpress/?page_id=428">Members</a>
    </nav>
  </div>
</div>