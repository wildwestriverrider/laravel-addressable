<?php

use Illuminate\Database\Seeder;
use Wildwestriverrider\LaravelAddressable\Models\UsState;

class UsStateSeeder extends Seeder
{
    /**
     * Run the database seeds.
     */
    public function run(): void
    {
        $states = [
            [
                'abbr' => 'AL',
                'name' => 'Alabama',
                'capitol' => 'Montgomery',
            ],
            [
                'abbr' => 'AK',
                'name' => 'Alaska',
                'capitol' => 'Juneau',
            ],
            [
                'abbr' => 'AZ',
                'name' => 'Arizona',
                'capitol' => 'Phoenix',
            ],
            [
                'abbr' => 'AR',
                'name' => 'Arkansas',
                'capitol' => 'Little Rock',
            ],
            [
                'abbr' => 'CA',
                'name' => 'California',
                'capitol' => 'Sacramento',
            ],
            [
                'abbr' => 'CO',
                'name' => 'Colorado',
                'capitol' => 'Denver',
            ],
            [
                'abbr' => 'CT',
                'name' => 'Connecticut',
                'capitol' => 'Hartford',
            ],
            [
                'abbr' => 'DE',
                'name' => 'Delaware',
                'capitol' => 'Dover',
            ],
            [
                'abbr' => 'FL',
                'name' => 'Florida',
                'capitol' => 'Tallahassee',
            ],
            [
                'abbr' => 'GA',
                'name' => 'Georgia',
                'capitol' => 'Atlanta',
            ],
            [
                'abbr' => 'HI',
                'name' => 'Hawaii',
                'capitol' => 'Honolulu',
            ],
            [
                'abbr' => 'ID',
                'name' => 'Idaho',
                'capitol' => 'Boise',
            ],
            [
                'abbr' => 'IL',
                'name' => 'Illinois',
                'capitol' => 'Springfield',
            ],
            [
                'abbr' => 'IN',
                'name' => 'Indiana',
                'capitol' => 'Indianapolis',
            ],
            [
                'abbr' => 'IA',
                'name' => 'Iowa',
                'capitol' => 'Des Moines',
            ],
            [
                'abbr' => 'KS',
                'name' => 'Kansas',
                'capitol' => 'Topeka',
            ],
            [
                'abbr' => 'KY',
                'name' => 'Kentucky',
                'capitol' => 'Frankfort',
            ],
            [
                'abbr' => 'LA',
                'name' => 'Louisiana',
                'capitol' => 'Baton Rouge',
            ],
            [
                'abbr' => 'ME',
                'name' => 'Maine',
                'capitol' => 'Augusta',
            ],
            [
                'abbr' => 'MD',
                'name' => 'Maryland',
                'capitol' => 'Annapolis',
            ],
            [
                'abbr' => 'MA',
                'name' => 'Massachusetts',
                'capitol' => 'Boston',
            ],
            [
                'abbr' => 'MI',
                'name' => 'Michigan',
                'capitol' => 'Lansing',
            ],
            [
                'abbr' => 'MN',
                'name' => 'Minnesota',
                'capitol' => 'Saint Paul',
            ],
            [
                'abbr' => 'MS',
                'name' => 'Mississippi',
                'capitol' => 'Jackson',
            ],
            [
                'abbr' => 'MO',
                'name' => 'Missouri',
                'capitol' => 'Jefferson City',
            ],
            [
                'abbr' => 'MT',
                'name' => 'Montana',
                'capitol' => 'Helena',
            ],
            [
                'abbr' => 'NE',
                'name' => 'Nebraska',
                'capitol' => 'Lincoln',
            ],
            [
                'abbr' => 'NV',
                'name' => 'Nevada',
                'capitol' => 'Carson City',
            ],
            [
                'abbr' => 'NH',
                'name' => 'New Hampshire',
                'capitol' => 'Concord',
            ],
            [
                'abbr' => 'NJ',
                'name' => 'New Jersey',
                'capitol' => 'Trenton',
            ],
            [
                'abbr' => 'NM',
                'name' => 'New Mexico',
                'capitol' => 'Santa Fe',
            ],
            [
                'abbr' => 'NY',
                'name' => 'New York',
                'capitol' => 'Albany',
            ],
            [
                'abbr' => 'NC',
                'name' => 'North Carolina',
                'capitol' => 'Raleigh',
            ],
            [
                'abbr' => 'ND',
                'name' => 'North Dakota',
                'capitol' => 'Bismark',
            ],
            [
                'abbr' => 'OH',
                'name' => 'Ohio',
                'capitol' => 'Columbus',
            ],
            [
                'abbr' => 'OK',
                'name' => 'Oklahoma',
                'capitol' => 'Oklahoma City',
            ],
            [
                'abbr' => 'OR',
                'name' => 'Oregon',
                'capitol' => 'Salem',
            ],
            [
                'abbr' => 'PA',
                'name' => 'Pennsylvania',
                'capitol' => 'Harrisburg',
            ],
            [
                'abbr' => 'RI',
                'name' => 'Rhode Island',
                'capitol' => 'Providence',
            ],
            [
                'abbr' => 'SC',
                'name' => 'South Carolina',
                'capitol' => 'Colombia',
            ],
            [
                'abbr' => 'SD',
                'name' => 'South Dakota',
                'capitol' => 'Pierre',
            ],
            [
                'abbr' => 'TN',
                'name' => 'Tennessee',
                'capitol' => 'Nashville',
            ],
            [
                'abbr' => 'TX',
                'name' => 'Texas',
                'capitol' => 'Austin',
            ],
            [
                'abbr' => 'UT',
                'name' => 'Utah',
                'capitol' => 'Salt Lake City',
            ],
            [
                'abbr' => 'VT',
                'name' => 'Vermont',
                'capitol' => 'Montpelier',
            ],
            [
                'abbr' => 'VA',
                'name' => 'Virginia',
                'capitol' => 'Richmond',
            ],
            [
                'abbr' => 'WA',
                'name' => 'Washington',
                'capitol' => 'Olympia',
            ],
            [
                'abbr' => 'WV',
                'name' => 'West Virginia',
                'capitol' => 'Charleston',
            ],
            [
                'abbr' => 'WI',
                'name' => 'Wisconsin',
                'capitol' => 'Madison',
            ],
            [
                'abbr' => 'WY',
                'name' => 'Wyoming',
                'capitol' => 'Cheyenne',
            ],
        ];

        collect($states)->each(function ($item) {
            UsState::query()->create([
                'name' => $item['name'],
                'abbr' => $item['abbr'],
                'capitol' => $item['capitol'],
            ]);
        });
    }
}
