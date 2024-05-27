@extends('layouts.master')

@section('title')
    Register
@endsection

@section('content')
<h2>Buat Account Baru!</h2>
    <h3>Sign Up Form </h3>
    <form action="/welcome" method="post">
        @csrf
      <label for="fname">First name:</label><br>
      <input type="text" id="fname" name="fname"><br><br>
      <label for="lname">Last name:</label><br>
      <input type="text" id="lname" name="lname"><br><br>
    
      <label for="gender">Gender:</label><br>
      <input type="radio" id="man" name="gender" value="man">
      <label for="man">Man</label><br>
      <input type="radio" id="woman" name="gender" value="woman">
      <label for="woman">Woman</label><br>
      <input type="radio" id="other" name="gender" value="other">
      <label for="other">Other</label><br><br>
      
      <label for="nationality">Nationality:</label>
      <select id="nationality" name="nationality"><br><br>
        <option value="indonesia" selected>Indonesia</option>
        <option value="singapore">Singapura</option>
        <option value="malaysia">Malaysia</option>
        <option value="thailand">Thailand</option>
      </select><br><br>

      <label for="language">Language Spoken:</label><br>
      <input type="checkbox" id="indonesia" name="language" value="indonesia">
      <label for="indonesian">Bahasa Indonesia</label><br>
      <input type="checkbox" id="english" name="language" value="english">
      <label for="english">English</label><br>
      <input type="checkbox" id="arabic" name="language" value="arabic">
      <label for="arabic">Arabic</label><br>
      <input type="checkbox" id="japanese" name="language" value="japanese">
      <label for="japanese">Japanese</label><br><br>

      <label for="bio">Bio:</label><br><br>
      <textarea id="bio" name="bio" rows="10" cols="30"></textarea><br>
      <input type="submit" value="Sign Up">
    </form>
@endsection