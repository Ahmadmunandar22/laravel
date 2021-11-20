<html>
    <body>
        @includeif('hi')
        @includewhen($isExist, 'child')
        @includeunless($isExist, 'child')
        @include('halo', ['name'=>'jongkoding parent', 'array'=>['hari','rabu']])
    </body>
</html>