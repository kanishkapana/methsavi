@include('common.header')
<div class='body-container'>
    <div class='padding-20'>
        <span class='bold-text font-size-18'>Projects List</span>
        <div class='padding-20'>
            <div class='padding-10'>
                <div class='project-list-img-div'>
                    <img class='cursor-point projects-arrow' src='{{ URL::asset('assets/img/green.png') }}' width="20px" height="20px">
                    <span class='cursor-point bold-text'>100 Libraries For Schools</span>
                </div>
                <div class='project-list-div' class='padding-10'>
                    <!-- <span>
                        There are no projects yet
                    </span> -->
                    <span class='project-list hidden'>
                        <ul>
                            <li><a target="_blank" href='/projects/project/1/1'>Library 1</a></li>
                            <li><a target="_blank" href='/projects/project/1/2'>Library 2</a></li>
                            <li><a target="_blank" href='/projects/project/1/3'>Library 3</a></li>
                        </ul>
                    </span>
                </div>
            </div>
            <div class='padding-10'>
                <div class='project-list-img-div'>
                    <img class='cursor-point projects-arrow' src='{{ URL::asset('assets/img/green.png') }}' width="20px" height="20px">
                    <span class='cursor-point bold-text'>Scholarships Programme For Students</span>
                </div>
                <div class='project-list-div' class='padding-10'>
                    <!-- <span>
                        There are no projects yet
                    </span> -->
                    <span class='project-list hidden'>
                        <ul>
                            <li><a target="_blank" href='/projects/project/2/1'>Scholarship 1</a></li>
                            <li><a target="_blank" href='/projects/project/2/2'>Scholarship 2</a></li>
                            <li><a target="_blank" href='/projects/project/2/3'>Scholarship 3</a></li>
                        </ul>
                    </span>
                </div>
            </div>
        <!--<div>
               <span class='bold-text'><a href='#'>Educational Workshops</a></span>
               <div class='padding-10'>
                   test
               </div>
           </div>
           <div>
               <span class='bold-text'><a href='#'>Data Portal</a></span>
               <div class='padding-10'>
                   test
               </div>
           </div>
           <div>
               <span class='bold-text'><a href='#'>Counselling service</a></span>
               <div class='padding-10'>
                   test
               </div>
           </div> -->
        </div>
    </div>
</div>
@include('common.footer')