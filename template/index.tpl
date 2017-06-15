<!doctype html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport"
          content="width=device-width, user-scalable=no, initial-scale=1.0, maximum-scale=1.0, minimum-scale=1.0">
    <meta http-equiv="X-UA-Compatible" content="ie=edge">
    <title>Document</title>
</head>
<body>

{*Laat de waarde zien die in de variabele 'naam' zit*}



  <table>
    <tr>
      <th>id</th>
      <th>titel</th>
      <th>tekst</th>
      <th>datum</th>
    </tr>
    {foreach $blogs as $blog}
      <tr>
        <td>{$blog.idblog}</td>
        <td>{$blog.titel}</td>
        <td>{$blog.tekst}</td>
        <td>{$blog.datum}</td>
      </tr>
      {/foreach}
  </table>

</body>
</html>
