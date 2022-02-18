@props(['post'=>$post])
 
<div class="mx-2 pt-4  ">

<div class="bg-gradient-to-r from-cyan-500 to-gray-800 px-2 rounded-md">
    <div class="flex justify-between flex-row">
        <div class="flex justify-around flex-row">
            <div class="time">
                <a href="{{route('post.userPost',['user'=>$post->user])}}" class="pr-3  font-extrabold">{{$post->user->name}}</a>

            </div>   <div class="time" class="font-extrabold m-6 p-5 w-10">
                {{$post->created_at->diffForHumans()}}
            </div>
            
        </div>
        
        @can('delete',$post)
        <div class="delete">
            <form action="{{route('post.distroy',$post)}}" method="post">
                @csrf
                @method('DELETE')


                <button type="submit">
                    <img src="https://img.icons8.com/external-xnimrodx-lineal-color-xnimrodx/25/000000/external-trash-city-scape-xnimrodx-lineal-color-xnimrodx.png" />
            </form>

        </div>
        @endcan

    </div>
    <div class="ml-2">
        {{$post->body}}
    </div>
    <div class=" flex justify-between flex-row">
        <div class="flex flex-row">

            {{$post->like->count()}} 
            {{Str::plural('like',$post->like->count())}}

            @auth
            @if(!$post->likedby(auth()->user()))
            <form action="{{route('likes.store',$post)}}" method="post">
                @csrf
                <button type="submit">
                    <svg xmlns="http://www.w3.org/2000/svg" x="0px" y="0px" width="24" height="24" viewBox="0 0 172 172" style=" fill:#000000;">
                        <g fill="none" fill-rule="nonzero" stroke="none" stroke-width="1" stroke-linecap="butt" stroke-linejoin="miter" stroke-miterlimit="10" stroke-dasharray="" stroke-dashoffset="0" font-family="none" font-weight="none" font-size="none" text-anchor="none" style="mix-blend-mode: normal">
                            <path d="M0,172v-172h172v172z" fill="none"></path>
                            <g fill="#d5b01e">
                                <path d="M83.69043,15.63509c-3.02511,0.27681 -5.71855,2.48157 -6.4388,5.66895l-3.97526,17.52474l-19.42838,21.58398c-2.37217,2.63017 -3.68132,6.04788 -3.68132,9.58822v66.16569c0,7.91917 6.41417,14.33333 14.33333,14.33333h57.55729c5.3105,0 10.11855,-3.12668 12.27572,-7.97851l21.514,-48.417c1.19683,-2.68033 1.81966,-5.58608 1.81966,-8.52441v-6.74674c0,-7.88333 -6.45,-14.33333 -14.33333,-14.33333h-50.16667c0,0 7.16667,-16.99015 7.16667,-29.64648c0,-11.55983 -7.43598,-16.61916 -13.56348,-18.8265c-1.02304,-0.37088 -2.07106,-0.4842 -3.07943,-0.39193zM25.08333,64.5c-5.934,0 -10.75,4.816 -10.75,10.75v64.5c0,5.934 4.816,10.75 10.75,10.75c5.934,0 10.75,-4.816 10.75,-10.75v-64.5c0,-5.934 -4.816,-10.75 -10.75,-10.75z"></path>
                            </g>
                        </g>
                    </svg>
                </button>
            </form>
            @else
            <form action="{{route('likes.destroy',$post)}}" method="post">
                @csrf
                @method('DELETE')
                <button type="submit">
                    <svg xmlns="http://www.w3.org/2000/svg" x="0px" y="0px" width="20" height="20" viewBox="0 0 172 172" style=" fill:#000000;">
                        <g fill="none" fill-rule="nonzero" stroke="none" stroke-width="1" stroke-linecap="butt" stroke-linejoin="miter" stroke-miterlimit="10" stroke-dasharray="" stroke-dashoffset="0" font-family="none" font-weight="none" font-size="none" text-anchor="none" style="mix-blend-mode: normal">
                            <path d="M0,172v-172h172v172z" fill="none"></path>
                            <g fill="#12547f">
                                <path d="M150.5105,-0.021c-5.9555,0 -10.75,4.7945 -10.75,10.75v102.125c0,5.9555 4.7945,10.75 10.75,10.75h10.75c5.9555,0 10.75,-4.7945 10.75,-10.75v-102.125c0,-5.9555 -4.7945,-10.75 -10.75,-10.75zM40.17603,5.375c-9.11607,-0.00194 -17.24497,5.73834 -20.29272,14.32983l-18.32959,51.95483c-2.95747,8.2202 -1.68584,17.36893 3.40137,24.47095c4.99406,7.16197 13.18879,11.4124 21.91992,11.36938h30.79077c-6.27842,12.48618 -10.60154,25.86271 -12.81812,39.66162c-1.01407,6.15374 0.72887,12.44212 4.76611,17.1958c4.10561,4.85544 10.14437,7.65202 16.50293,7.64258c10.47615,0.05776 19.45042,-7.48525 21.19556,-17.81518c2.15,-12.70112 8.33503,-35.40193 26.04565,-46.71631h15.64209v-93.59009l-3.7583,-3.78979c-3.02824,-3.03513 -7.14496,-4.73248 -11.43237,-4.71362z"></path>
                            </g>
                        </g>
                    </svg> 
                </button>
            </form>
                @endif
                @endauth
        </div>
    </div>

</div>
</div>