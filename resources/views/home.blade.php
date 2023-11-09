<x-layout>

    <table class="table">
        <thead>
          <tr>
            <th scope="col">#</th>
            <th scope="col"><a href="/short">First</a></th>
            <th scope="col">Last</th>
            <th scope="col">Handle</th>
          </tr>
        </thead>
        <tbody>
            @foreach ($skins as $skin)
            <tr>
              <th scope="row">0</th>
              <td>{{ $skin }}</td>
              <td>0</td>
              <td>0</td>
            </tr>
            @endforeach

        </tbody>
      </table>


</x-layout>
