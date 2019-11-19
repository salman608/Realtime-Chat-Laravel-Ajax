<div class="user-wrapper" id="message-wrapper"  style='background:#eeeeee;border:1px solid #dddddd;' >



  <ul class="messages">
    @foreach ($messages as $message)

    <li class="message clearfix">
      <div class="{{ ($message->from == Auth::id()) ? 'sent' : 'received' }}">
        <p>{{ $message->message }}</p>
        <p class="data">{{ date('d M y ,h:i a', strtotime($message->created_at )) }}</p>
      </div>
    </li>
    @endforeach
  </ul>

</div>

<div class="input-text">
  <input type="text" name="message" class="submit" value="">
</div>
