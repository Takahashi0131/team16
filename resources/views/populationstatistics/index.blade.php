<!DOCTYPE html>
<html>
<head>
    <title>113年度社會福利公務統計一覽表-中低收入人口普查資料</title>
    <style>
        table {
            width: 100%;
            border-collapse: collapse;
        }
        th, td {
            border: 1px solid #000;
            text-align: center;
            padding: 12px;
        }
        th {
            background-color: #f2f2f2;
            font-weight: bold;
        }
        h1 {
            text-align: center;
            font-family: Arial, sans-serif;
        }
    </style>
</head>
<body>
    <h1>113年度社會福利公務統計一覽表-中低收入人口普查資料</h1>
    <table>
        <tr>
            <th>總數</th>
            <th>113-1期的戶數統計整數</th>
            <th>113-1期的戶數統計男性數</th>
            <th>113-1期的戶數統計女性數</th>
            <th>113-1期的人口總數</th>
            <th>113-1期的人口統計男性數</th>
            <th>113-1期的人口統計女性數</th>
            <th>113-2期的戶數統計整數</th>
            <th>113-2期的戶數統計男性數</th>
            <th>113-2期的戶數統計女性數</th>
            <th>113-2期的人口總數</th>
            <th>113-2期的人口統計男性數</th>
            <th>113-2期的人口統計女性數</th>
        </tr>
        @foreach ( $Population_statistics as $Population_statistic )
        <tr>
            <td>{{ $Population_statistic->region }} </td>
            <td>{{ $Population_statistic->household_count_113_1 }} </td>
            <td>{{ $Population_statistic->household_count_male_113_1 }} </td>
            <td>{{ $Population_statistic->household_count_female_113_1 }} </td>
            <td>{{ $Population_statistic->population_count_113_1 }} </td>
            <td>{{ $Population_statistic->population_count_male_113_1 }} </td>
            <td>{{ $Population_statistic->population_count_female_113_1 }} </td>
            <td>{{ $Population_statistic->household_count_113_2 }} </td>
            <td>{{ $Population_statistic->household_count_male_113_2 }} </td>
            <td>{{ $Population_statistic->household_count_female_113_2 }} </td>
            <td>{{ $Population_statistic->population_count_113_2 }} </td>
            <td>{{ $Population_statistic->population_count_male_113_2 }} </td>
            <td>{{ $Population_statistic->population_count_female_113_2 }} </td>
        </tr>
        @endforeach
    </table>
</body>
</html>
