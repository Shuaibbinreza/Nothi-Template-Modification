<!DOCTYPE html>
<html lang="en">

<head>
    <title>Bootstrap Example</title>
    <meta charset="utf-8">
    <meta name="viewport" content="width=device-width, initial-scale=1">
    <link rel="stylesheet" href="https://maxcdn.bootstrapcdn.com/bootstrap/3.4.1/css/bootstrap.min.css">
    <script src="https://ajax.googleapis.com/ajax/libs/jquery/3.7.1/jquery.min.js"></script>
    <script src="https://maxcdn.bootstrapcdn.com/bootstrap/3.4.1/js/bootstrap.min.js"></script>
</head>

<body>
    <div class="fixed-top">
        @include('header');
        {{-- @include('sidenav'); --}}
    </div>

        <div class="row">
            <div class="col-sm-2">
                @include('sidenav');
            </div>
            <div class="col-sm-10">
                {{-- <div class="section" id="office_sarok">
                    @include('welcome')
                </div>
                
                <div class="section bg-primary" id="sorkari-potro" style="width: 100%">
                    @include('sorkari-potro')
                </div> --}}
                <div class="section" id="sorkari-potro">
                    @include('sorkari-potro');
                </div>
            </div>
        </div>
        <script>
            function showSection(sectionId) {
              // Hide all sections
              var sections = document.getElementsByClassName('section');
              for (var i = 0; i < sections.length; i++) {
                sections[i].style.display = 'none';
              }
            
              // Show the selected section
              document.getElementById(sectionId).style.display = 'block';
            
              // Store the active tab ID in localStorage
              localStorage.setItem('activeTab', sectionId);
            }
            
            // Retrieve the active tab ID from localStorage and show the corresponding section
            var activeTabId = localStorage.getItem('activeTab');
            if (activeTabId) {
              showSection(activeTabId);
            } else {
              // If no active tab is stored, default to the home section
              showSection('office-sarok');
            }
        </script>
</body>

</html>
