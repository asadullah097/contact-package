<!DOCTYPE html>
<html>
    <head>
        <title>Contact Us page</title>
        <link rel="stylesheet" href="https://maxcdn.bootstrapcdn.com/bootstrap/4.0.0/css/bootstrap.min.css" integrity="sha384-Gn5384xqQ1aoWXA+058RXPxPg6fy4IWvTNh0E263XmFcJlSAwiGgFAW/dAiS6JXm" crossorigin="anonymous">
    </head>
    <body>
        <div class="container">
            <div class="row">
                <div class="col-md-2"></div>
                <div class="col-md-8">
                    <p><br></p>
                    <div class="card" >
                        <div class="card-header">
                            Contact Form
                          </div>
                        <div class="card-body">
                         
                        <form action="{{route('contact')}}" method="post">
                           {{ csrf_field() }}
                        <div class="form-group">
                            <label for="exampleInputPassword1">Name</label>
                            <input type="text" class="form-control" id="exampleInputPassword1" name="name" placeholder="Name">
                          </div>
                        <div class="form-group">
                          <label for="exampleInputEmail1">Email address</label>
                          <input type="email" class="form-control" id="exampleInputEmail1" name="email"  aria-describedby="emailHelp" placeholder="Enter email">
                          <small id="emailHelp" class="form-text text-muted">We'll never share your email with anyone else.</small>
                        </div>
                      
                        <div class="form-group">
                        <label for="exampleInputPassword1">Subject</label>
                        <input type="text" class="form-control" id="exampleInputPassword1"  name="subject" placeholder="subject">
                      </div>
                      <div class="form-group">
                      <label for="exampleInputPassword1">Message</label>
                     <textarea class="form-control" rows="5" name="message"></textarea>
                    </div>
                        <button type="submit" class="btn btn-primary">Submit</button>
                      </form>
                        </div>
                    </div>
                </div>
            </div>
        </div>
    </body>
</html>