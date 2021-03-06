@extends('layout.app')

@section('content')





<div class="container">
    <div class="text-center p-4 text-white bg-info mt-4 mb-4 rounded">
        <h2>Laravel CRUD With Firebase</h2>
    </div>
    <div class="row">
        <div class="col-lg-8">



<!-- Modal -->

    <div class="card">
      <div class="modal-content">
        <div class="modal-header">
          <h5 class="modal-title"">Student List</h5>
        </div>
        <div class="modal-body">
            <table class="table">
                <thead>
                  <tr>
                    <th scope="col">#</th>
                    <th scope="col">First Name</th>
                    <th scope="col">Last Name</th>
                    <th scope="col">Gender</th>
                    <th scope="col">Class</th>
                  </tr>
                </thead>
                <tbody>
                  <tr>
                    <td>Mark</td>
                    <td>Otto</td>
                    <td>Otto</td>
                    <td>Otto</td>
                    <td>Otto</td>
                  </tr>
                </tbody>
              </table>
        </div>
      </div>
    </div>

        </div>
        <div class="col-lg-4">
            <div class="card">
                <div class="modal-content">
                  <div class="modal-header">
                    <h5 class="modal-title""> Add Student</h5>

                  </div>
                  <div class="modal-body">
                    <form action="" method="post" id="createStudentFrom">
                    <div class="mb-3">
                        <input type="text" class="form-control" name="fristname" placeholder="Frist Name">
                    </div>
                    <div class="mb-3">
                        <input type="text" class="form-control" name="lastname" placeholder="Last Name">
                    </div>
                    <div class="mb-3">

                        <select class="form-control" name="gender" id="">
                            <option value="">Male</option>
                            <option value="">Female</option>
                            <option value="">Other's</option>
                        </select>
                    </div>
                    <div class="mb-3">
                        <input type="text" class="form-control" name="class" placeholder="Class">
                    </div>
                    <button id="Create" type="submit" class="btn btn-primary">Create</button>
                    </form>
                  </div>

                </div>
              </div>
        </div>
    </div>
</div>
@endsection

@push('script')

<script>

   $(document).ready(function(){

    //1 Firebase Condition
        const firebaseConfig = {

        apiKey: "{{ config('services.firebase.apiKey') }}",
        authDomain: "{{ config('services.firebase.authDomain') }}",
        projectId: "{{ config('services.firebase.projectId') }}",
        storageBucket: "{{ config('services.firebase.storageBucket') }}",
        messagingSenderId: "{{ config('services.firebase.messagingSenderId') }}",
        appId: "{{ config('services.firebase.appId') }}",
        measurementId: "{{ config('services.firebase.measurementId') }}"

        };
          // Initialize Firebase
        const app = initializeApp(firebaseConfig);
        const analytics = getAnalytics(app);


    //2 CreateStudent Funciton



    //3 Edite Student Function




    //4 Update Student Function


    //5 Delete Student Function


    // Session Alert




    // Clear input Data From Input Fild












   });



</script>

@endpush
