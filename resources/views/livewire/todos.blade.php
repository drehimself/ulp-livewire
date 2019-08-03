<div>


    <div class="mb-4">
        <input type="text" name="addTodo" class="form-control form-control-lg" id="addTodo" placeholder="What needs to be done?"  wire:model="title" wire:keydown.enter="addTodo">
        {{-- <button class="btn btn-primary" wire:click="addTodo" type="submit">Add</button> --}}
        @if ($errors->has('title'))
            <div style="color:red;">{{ $errors->first('title') }}</div>
        @endif
    </div>


    <ul class="list-group">
        @foreach ($todos as $todo)
            <li class="list-group-item d-flex justify-content-between align-items-center">
              <div>
                <input type="checkbox" wire:change="toggleTodo({{$todo->id}})" class="mr-4" {{$todo->completed ? 'checked' : ''}}>
                <a
                    href="#"
                    class="{{ $todo->completed ? 'completed' : ''}}"
                    onclick="updateTodoPrompt('{{$todo->title}}') || event.stopImmediatePropagation()"
                    wire:click="updateTodo({{$todo->id}}, todoUpdated)"
                >
                    {{ $todo->title }}
                </a>
              </div>
              <div>

                  <button
                    class="btn btn-sm btn-danger"
                    onclick="confirm('Are you sure?') || event.stopImmediatePropagation()"
                    wire:click="deleteTodo({{ $todo->id }})">
                &times;</button>

              </div>
            </li>

        @endforeach
    </ul>


    <script>
        let todoUpdated = '';

        function updateTodoPrompt(title) {
          event.preventDefault();
          todoUpdated = '';
          const todo = prompt('Update Todo', title);

          if (todo === null || todo.trim() === '') {
            console.log('cancel or empty');
            todoUpdated = '';
            return false;
          }

          todoUpdated = todo;
          return true;
        }
    </script>

</div>
