<html>
    <head>
        <title>113年度社會福利公務統計一覽表-中低收人口普查資料</title>
    </head>
    <body>
        <h1>113年度社會福利公務統計一覽表-中低收人口普查資料</h1>
        @foreach ($population_statistics as $population_statistic )
           {{ $population_statistics->region}}<br/>
           {{$population_statistics->household_count_113_1}}<br/>
           {{$population_statistics->household_count_male_113_1}}<br/>
           {{$population_statistics->household_count_female_113_1}}<br/>
         --------------------------<br/>


        @endforeach
    </body>
</html>
