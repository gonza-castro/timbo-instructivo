<!DOCTYPE html>
<html lang="en">
<head>
  <meta charset="UTF-8">
  <title>Timbo Docs</title>
  <meta http-equiv="X-UA-Compatible" content="IE=edge,chrome=1" />
  <meta name="description" content="Description">
  <meta name="viewport" content="width=device-width, user-scalable=no, initial-scale=1.0, maximum-scale=1.0, minimum-scale=1.0">
  <link rel="stylesheet" href="//unpkg.com/docsify/lib/themes/vue.css">
  <!-- Custom theme styles -->
  <style>
    section.cover .cover-main>p:last-child a {
      border-color: #fff;
      color: #fff;
    }
    section.cover .cover-main>p:last-child a:hover {
      border-color: #eee;
      color: #eee;
    }
    section.cover .cover-main>p:last-child a:last-child {
      background-color: #fff;
      color: #4683c4;
    }

    section.cover .cover-main>p:last-child a:last-child:hover {
      background-color: #eee;
    }
  </style>
</head>
<body>
  <div id="app"></div>
  <script>
    window.$docsify = {
      repo: '',
      coverpage: true,
      auto2top: true,
      logo: '/images/logo-timbo-small.png',
      name: 'Timbo',
      themeColor: '#4683c4',
      loadSidebar: true,
      maxLevel: 4,
      subMaxLevel: 3
    }
  </script>
  
  <?php
    echo "echo";
  ?>
  
  <script src="//unpkg.com/docsify/lib/docsify.min.js"></script>
</body>
</html>
