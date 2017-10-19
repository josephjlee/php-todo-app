<?php require 'partials/header.php'; ?>
  <div class="container">

    <h2 class=mt-4>All Todo</h2>
    <ul class="list-group">
      <?php 
        foreach ($todos as $todo) {
          echo "<li class='list-group-item'>{$todo->text}</li>";
        }
       ?>
    </ul>
    <h4 class="mt-4">Create todo</h4>
    <form class="form form-inline" action="/todo-create">
      <div class="form-group">
        <div class="input-group">
          <input type="text" name="todo" class="form-control">
          <button type="submit" class="input-group-addon">Add todo</button>
        </div>
      </div>
    </form>


  </div>
<?php require 'partials/footer.php'; ?>