/**
 * Created by PhpStorm.
 * User: ikubanov
 * Date: 21.09.18
 * Time: 20:53
 */

<h2>{{$title}}</h2>
<ol>
    <li><a href="{{route('admin.index')}}">{{$parent}}</a></li>
    <li class="active">{{$active}}</li>
</ol>