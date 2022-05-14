<form action="login-check.php" method="POST">

                <div class="form-group">
                <label for="email">Email</label>
                <input type="email" name="email" onKeyUp="kontrol()" class="form-control" placeholder="Email 'email@mail.com'" required="required">
                </div>

                <div class="form-group">
                    <label for="password">Password</label>
                    <input type="password" name="password" class="form-control" placeholder="Şifre 'Password'" required="required">
                </div>
                
                <button class="btn btn-outline-primary col-12" type="submit">Gönder</button>
                <br> <br>
                <button class="btn btn-outline-danger col-12" type="reset">Temizle</button>

                </form>