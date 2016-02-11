@include('components.header')
<div class="container">
    <form class="form-horizontal" method="post" action="login">
        <fieldset>
            <legend>Login</legend>
            <input type="hidden" name="_token" value="{{ csrf_token() }}">
            <div class="form-group">
                <label for="email" class="col-md-2 control-label">Email</label>
                <div class="col-md-10">
                    <input type="email" class="form-control" id="email" name="email" placeholder="Email">
                </div>
            </div>
            <div class="form-group">
                <label for="password" class="col-md-2 control-label">Password</label>
                <div class="col-md-10">
                    <input type="password" class="form-control" id="password" name="password" placeholder="Password">
                </div>
            </div>
            <div class="form-group">
                <div class="col-md-offset-2 col-md-10">
                    <div class="togglebutton">
                        <label>
                            <input type="checkbox" name="remember" checked="">Remember me
                        </label>
                    </div>
                </div>
            </div>
            <div class="form-group">
                <div class="col-md-10 col-md-offset-2">
                    <button type="submit" class="btn btn-primary btn-raised">Submit</button>
                </div>
            </div>
        </fieldset>
    </form>
</div>


@include('components.footer')