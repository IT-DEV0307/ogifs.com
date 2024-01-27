@extends('template.layouts.main')

@section('section')

<style>
    .sounds {
        display: grid;
        grid-template-columns: repeat(6, 1fr);
        grid-column-gap: 0px;
        grid-row-gap: 0px;
        gap: 10px;
    }

    .footer-bg {
        display: none !important;
    }

    .heart-after {
        color: #E5194D !important;
    }

    .border-r {
        background-color: #161617;
        border-radius: 15px;
    }

    .fs-20 {
        font-size: 20px;
    }

    .text-dark-pink {
        color: #E5194D;
    }

    .black-shaded {
        background-color: #080808;
    }

    .pink-btn {
        padding: 5px 15px 5px 15px;
        background-color: #E5194D;
        color: white;
        border-radius: 15px;
        border: none;
    }

    .follow-after::after {
        content: '';
        position: absolute;
        width: 56px;
        height: 3px;
        border-radius: 3px;
        background-color: #E5194D;
        top: 32px;
        left: 1%;
    }

    .center-space {
        display: flex;
        flex-direction: column;
        justify-content: space-between;
    }

    .heart-after::after {
        content: '';
        position: absolute;
        width: 30px;
        height: 4px;
        top: 23px;
        left: 1%;
        background-color: #E5194D;
        border-radius: 3px;
    }

    .link-after::after {
        content: '';
        position: absolute;
        width: 35px;
        height: 4px;
        top: 23px;
        left: 1%;
        background-color: #E5194D;
        border-radius: 3px;
    }

    .reddit-after::after {
        content: '';
        position: absolute;
        width: 30px;
        height: 4px;
        top: 23px;
        left: 1%;
        background-color: #E5194D;
        border-radius: 3px;
    }

    .twitter-after::after {
        content: '';
        position: absolute;
        width: 32px;
        height: 4px;
        top: 23px;
        left: 1%;
        background-color: #E5194D;
        border-radius: 3px;
    }

    .discord-after::after {
        content: '';
        position: absolute;
        width: 40px;
        height: 4px;
        top: 23px;
        left: 1%;
        background-color: #E5194D;
        border-radius: 3px;
    }

    .code-after::after {
        content: '';
        position: absolute;
        width: 40px;
        height: 4px;
        top: 23px;
        left: 1%;
        background-color: #E5194D;
        border-radius: 3px;
    }

    .flag-after::after {
        content: '';
        position: absolute;
        width: 30px;
        height: 4px;
        top: 23px;
        left: 1%;
        background-color: #E5194D;
        border-radius: 3px;
    }

    .cross-adj {
        top: 68px;
        left: 91%;
    }

    .customWidth {
        width: 50px !important;
    }

    .imageWidth {
        width: 300px !important;
        height: 200px !important;
        border-radius: 20px !important;
        object-position: center !important;
    }

    .modal_scroll {
        max-height: 465px;
        overflow-y: scroll;
        scroll-snap-type: y mandatory;
    }

    .modal_scroll section {
        scroll-snap-align: start;
    }

    .likes-adj {
        bottom: 5px;
        left: 4%;
    }
    .views-adj {
        top: 5px;
        right: 4%;
    }

    .views-adj-2 {
        right: 4%;
        top: 5px;
    }


    @media(max-width: 900px) {

        .heart-after::after,
        .link-after::after,
        .reddit-after::after,
        .twitter-after::after,
        .discord-after::after,
        .code-after::after,
        .flag-after::after {
            display: none;
        }
    }

    @media(max-width: 600px) {
        .cross-adj {
            top: 0px;
            left: 88%;
        }

        .views-adj {
            font-size: 8px;
        }

        .views-adj-2 {
            font-size: 8px;
        }

        .likes-adj {
            font-size: 8px;
        }

        .heart-after::after,
        .link-after::after,
        .reddit-after::after,
        .twitter-after::after,
        .discord-after::after,
        .code-after::after,
        .flag-after::after {
            display: none;
        }

        .pink-btn {
            padding: 3px 8px 3px 8px;
        }
    }

    @media(max-width: 450px) {
        .follow-after::after {
            top: 19px;
        }
    }

    /* Custom Bootstrap 5 Pagination Styles for Dark Background */
.pagination {
    background-color: #343a40; /* Set the background color to your dark background color */
}
.pagination p{
    background-color: #343a40; /* Set the background color to your dark background color */
    color:#FFF !important;

}

.pagination .page-item:not(.disabled):not(.active) .page-link {
    color: #fff; /* Set the text color for inactive links */
    background-color: #343a40; /* Set the background color for inactive links */
    border-color: #343a40; /* Set the border color for inactive links */
}

.pagination .page-item:not(.disabled):not(.active) .page-link:hover {
    color: #fff; /* Set the text color for hover state */
    background-color: #495057; /* Set the background color for hover state */
    border-color: #495057; /* Set the border color for hover state */
}

.pagination .page-item.active .page-link {
    color: #fff; /* Set the text color for active link */
    background-color: #007bff; /* Set the background color for active link */
    border-color: #007bff; /* Set the border color for active link */
}

.pagination .page-item.disabled .page-link {
    color: white; /* Set the text color for disabled link */
    background-color: #343a40; /* Set the background color for disabled link */
    border-color: #343a40; /* Set the border color for disabled link */
}
.pagi_ p{
    color:#FFF !important;
}

</style>

@php
$adds = \App\Models\Adds::find(1);
@endphp

<section>
    <div class="wrapper">
        <div class="d-flex align-items-center gap-3 my-4">
            <div>
                <svg xmlns="http://www.w3.org/2000/svg" width="33" height="33" viewBox="0 0 33 33" fill="none">
                    <path d="M16.5433 30.0872C24.2753 30.0872 30.5433 23.8192 30.5433 16.0872C30.5433 8.35517 24.2753 2.08716 16.5433 2.08716C8.81135 2.08716 2.54333 8.35517 2.54333 16.0872C2.54333 23.8192 8.81135 30.0872 16.5433 30.0872Z" fill="#8C18F1" />
                    <path d="M24.5432 10.7538C24.0277 10.2383 23.192 10.2383 22.6765 10.7538L15.2503 18.18C14.8598 18.5706 14.2266 18.5706 13.8361 18.18L11.7432 16.0871C11.2277 15.5717 10.392 15.5717 9.87658 16.0871C9.36111 16.6026 9.36111 17.4383 9.87658 17.9538L13.8361 21.9134C14.2266 22.3039 14.8598 22.3039 15.2503 21.9134L24.5432 12.6205C25.0587 12.105 25.0587 11.2693 24.5432 10.7538Z" fill="white" />
                </svg>
            </div>
            <div>
                <h3 class="text-white">
                    {{ $title }}
                </h3>
            </div>
        </div>
        <div class="filter__sections d-flex justify-content-center mt-4">
            <ul class="nav nav-pills mb-3" id="pills-tab" role="tablist">
                <li class="nav-item" role="presentation">
                    <a href="{{ Route('gallery') }}" class="nav-link nav-link-1">All</a>
                </li>
                <li class="nav-item" role="presentation">
                    <a href="{{ Route('gallery', ['type' => 'image']) }}" class="nav-link nav-link-2">Images</a>
                </li>
                <li class="nav-item" role="presentation">
                    <a href="{{ Route('gallery', ['type' => 'gif']) }}" class="nav-link nav-link-3">GIFs</a>
                </li>
            </ul>
        </div>
        @php if(isset($_GET["type"])) { $type=$_GET["type"]; 
                    $postss=\App\Models\gifs::where("status", 1)->where("type", $type)
                    ->orderBy("created_at", "Desc")
                    ->with("userInfo", "tags", "likes")
                    ->paginate(15);

                    } else {
                    $postss = \App\Models\gifs::where("status", 1)
                    ->with("userInfo", "tags", "likes", "views")
                    ->orderBy("created_at", "Desc")
                    ->paginate(15);
                    }
                    @endphp

        <div class="text-center text-white pagi_">
            {{ $postss->links('pagination::bootstrap-5') }}
        </div>
        <div class="gallery-filters mt-3">
            <!--<div class="the-filter-gallery mt-3">-->
            <!--    <div class="mosaicflow">-->
            <!--        @foreach($postss as $postdetail)-->
            <!--        <a href="{{Route('detail.page', ['id' => $postdetail->id])}}" class="mosaicflow__item position-relative" onclick="countView({{ $postdetail->id }})">-->
            <!--            <img src="{{ asset('/Gifs/'.$postdetail->gif) }}" style="width:100%">-->



            <!--            <div class="position-absolute text-purple likes-adj">-->
            <!--                <i class="fa-solid fa-heart"></i> <span>{{ count($postdetail->likes) }}</span>-->
            <!--            </div>-->
            <!--            <div class="position-absolute text-purple views-adj">-->
            <!--                <i class="fa-solid fa-eye"></i> <span>{{ count($postdetail->views) }}</span>-->
            <!--            </div>-->
            <!--        </a>-->
            <!--        @endforeach-->
            <!--    </div>-->
            <!--</div>-->
                 <div class="the-filter-gallery mt-3">
                <div class="mosaicflow">
                    @foreach($postss as $postdetail)
                    <a href="{{Route('detail.page', ['id' => $postdetail->id])}}" class="mosaicflow__item" onclick="countView({{ $postdetail->id }})">
                        <div class="position-relative">
                            @if (in_array(pathinfo($postdetail->gif, PATHINFO_EXTENSION), ['mp4', 'avi', 'mov', 'mkv']))
                                {{-- Video --}}
                                <video width="100%" height="100%"  loop muted autoplay playsinline>
                                    <source src="{{ asset('/Gifs/'.$postdetail->gif) }}" type="video/mp4">
                                    Your browser does not support the video tag.
                                </video>
                            @else
                                {{-- Image --}}
                                <img src="{{ asset('/Gifs/'.$postdetail->gif) }}">
                            @endif

                            <div class="position-absolute text-purple likes-adj">
                                <i class="fa-solid fa-heart"></i> <span>{{ count($postdetail->likes) }}</span>
                            </div>
                            <div class="position-absolute text-purple views-adj">
                                <i class="fa-solid fa-eye"></i> <span>{{ count($postdetail->views) }}</span>
                            </div>
                        </div>
                        
                    </a>
                    @endforeach
                </div>
            </div>
        </div>
    </div>
</section>

<script src="https://ajax.googleapis.com/ajax/libs/jquery/3.7.1/jquery.min.js"></script>

<script>
    function countView(e) {
        var getIP = new Promise(function(resolve, reject) {
            $.getJSON("https://api.ipify.org?format=json", function(data) {
                resolve(data.ip);
            });
        });

        var postId = e;

        getIP.then(function(ip) {
            // Add your logic here that depends on the IP address
            $.ajax({
                url: "{{ Route('viewCount') }}"
                , method: "GET"
                , data: {
                    id: postId
                    , ip: ip
                , }
                , success: function(response) {
                }
            });
        });
    }

</script>

@if(session("followed"))
<script>
    Toastify({
        text: "Followed"
        , duration: 3000
        , close: true
        , gravity: "top", // `top` or `bottom`
        position: "right", // `left`, `center` or `right`
        stopOnFocus: true, // Prevents dismissing of toast on hover
        style: {
            background: "#d63384"
        , }
        , onClick: function() {} // Callback after click
    }).showToast();

</script>
@endif

@if(session("unfollowed"))
<script>
    Toastify({
        text: "Unfollowed"
        , duration: 3000
        , close: true
        , gravity: "top", // `top` or `bottom`
        position: "right", // `left`, `center` or `right`
        stopOnFocus: true, // Prevents dismissing of toast on hover
        style: {
            background: "#d63384"
        , }
        , onClick: function() {} // Callback after click
    }).showToast();

</script>
@endif

@if(session("reported"))
<script>
    Toastify({
        text: "Reported Successfully"
        , duration: 3000
        , close: true
        , gravity: "top", // `top` or `bottom`
        position: "right", // `left`, `center` or `right`
        stopOnFocus: true, // Prevents dismissing of toast on hover
        style: {
            background: "#d63384"
        , }
        , onClick: function() {} // Callback after click
    }).showToast();

</script>
@endif

@if(session("liked"))
<script>
    Toastify({
        text: "Liked successfully"
        , duration: 3000
        , close: true
        , gravity: "top", // `top` or `bottom`
        position: "right", // `left`, `center` or `right`
        stopOnFocus: true, // Prevents dismissing of toast on hover
        style: {
            background: "#d63384"
        , }
        , onClick: function() {} // Callback after click
    }).showToast();

</script>
@endif

@if(session("likedAlready"))
<script>
    Toastify({
        text: "Already Liked"
        , duration: 3000
        , close: true
        , gravity: "top", // `top` or `bottom`
        position: "right", // `left`, `center` or `right`
        stopOnFocus: true, // Prevents dismissing of toast on hover
        style: {
            background: "#d63384"
        , }
        , onClick: function() {} // Callback after click
    }).showToast();

</script>
@endif

{{-- Script working for like function  --}}
<script>

    $('.fa-heart').click(function(e){
        $(this).toggleClass('heart-after');
    });
    $('.fa-flag').click(function(e){
        $(this).toggleClass('heart-after');
    });

    function likeFunction(e) {
        var id = e;

        $.ajax({
            url: "{{ Route('user.like') }}"
            , method: "GET"
            , data: {
                id: id
            , }
            , success: function(response) {
                console.log(response);
                if (response.status == "liked") {

                }

                if (response.status == "unLiked") {
                    $(".like" + id).toggleClass("heart-after");
                    Toastify({
                        text: "Unliked"
                        , duration: 3000
                        , close: true
                        , gravity: "bottom"
                        , position: "center"
                        , stopOnFocus: true
                        , style: {
                            background: "linear-gradient(to right, #00b09b, #96c93d)"
                        }, // Remove the misplaced comma here
                        onClick: function() {}
                    }).showToast();
                }
            }
        })
    }

</script>
{{-- End Script  --}}

{{-- Function Working For reporting  --}}
<script>
    function reporting(e) {
        var id = e;

        $.ajax({
            url: "{{ Route('post.report') }}",
            method: "GET",
            data:{
                id: id,
            },
            success:function(response)
            {
                console.log("reported");
            }
        });
    }

</script>
{{-- End Function Working  --}}

<!-- This function is working for follow working -->

<script>
    function followWorking(e)
    {
        var id = e;

        $.ajax({
           url: "{{ Route('user.follow') }}",
           method: "GET",
           data:{
               id: id,
           },
           success:function(response)
           {
                if(response.error == 404)
                {
                    alert("Please login to continue");
                }

                if(response.error == 200)
                {

                    $('.followIcon').click(function(e){
                        $(this).toggleClass('heart-after');
                    });

                    $(".followIcon").click(function(e){
                        $(this).text("Follow");
                    });

                    alert("Unfollowed Successfully ");

                }

                if(response.error == 201)
                {
                    $('.followIcon').click(function(e){
                        $(this).toggleClass('heart-after');
                    });

                    $(".followIcon").click(function(e){
                        $(this).text("Unfollow");
                    });

                    alert("Followed Successfully ");

                }
           }
        });
    }
</script>
<!-- End Function Working -->

@endsection
