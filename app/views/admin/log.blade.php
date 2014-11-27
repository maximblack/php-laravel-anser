<div id="admin-log-container" class="row">
    <div class="column large-4 large-centered">
        <div id="admin-logo-container" class="row">
            <div id="admin-logo" class="column small-12">
                <img src="{{URL::asset('assets/img/logo.png')}}" alt="Anser Construct">
            </div>
        </div>
        <div class="row">
            <div id="admin-log" class="column small-12">
                <form action="{{URL::to('admin/login')}}" method="post">
                   <div class="row">
                       <div class="column small-12">
                           <label>email</label>
                           <input type="text" name="email" placeholder="email">
                       </div>
                   </div>
                    <div class="row">
                        <div class="column small-12">
                            <label>пароль</label>
                            <input type="password" name="password" placeholder="пароль">
                        </div>
                    </div>
                   <div class="row">
                       <div class="column small-12">
                           <input type="submit" class="button right" value="Войти в админку">
                       </div>
                   </div>
                </form>
            </div>
        </div>
    </div>
</div>