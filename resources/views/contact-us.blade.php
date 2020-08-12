@extends('layouts.front')
@section('extra_styles')
<style>
* {
  box-sizing: border-box;
}

/* Style inputs */
input[type=text], select, textarea {
  width: 100%;
  padding: 12px;
  border: 1px solid #ccc;
  margin-top: 6px;
  margin-bottom: 16px;
  resize: vertical;
}

input[type=submit] {
  background-color: #4CAF50;
  color: white;
  padding: 12px 20px;
  border: none;
  cursor: pointer;
}

input[type=submit]:hover {
  background-color: #45a049;
}

/* Style the container/contact section */
.container {
  border-radius: 5px;
  background-color: #f2f2f2;
  padding: 10px;
}

/* Create two columns that float next to eachother */
.column {
  float: left;
  width: 50%;
  margin-top: 6px;
  padding: 20px;
}

/* Clear floats after the columns */
.row:after {
  content: "";
  display: table;
  clear: both;
}

}
</style>
@endsection
@section('content')
<div class="container">
  <div style="text-align:center">
    <h2>Get in Touch</h2>
    <p>Want to get in touch? We'd love to hear from you. Here's how you can reach us...</p>
  </div>
  <div class="row">
    <div class="column">
      <img src="/images/HeadQuarter.png" style="width:100%">
    </div>
    <div class="column">
      <form action="">
        <label for="name">Your Name</label>
        <input type="text" id="name" name="name" placeholder="Your name..">
        <label for="email">Email</label>
        <input type="text" id="email" name="email" placeholder="Your email..">
		<label for="mobile_number">Mobile Number</label>
        <input type="text" id="mobile_number" name="mobile_number" placeholder="Your Contact Number..">

        <label for="message">Message</label>
        <textarea id="message" name="subject" placeholder="Write something.." style="height:170px"></textarea>
        <input type="submit" value="Submit">
      </form>
    </div>
  </div>
</div>
@endsection