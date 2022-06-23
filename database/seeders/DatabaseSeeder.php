<?php

namespace Database\Seeders;

use Illuminate\Database\Seeder;
use Illuminate\Support\Facades\DB;

use App\Models\Team;

class DatabaseSeeder extends Seeder
{
    /**
     * Seed the application's database.
     *
     * @return void
     */
    public function run()
    {
        \App\Models\User::factory(10)->create();

        DB::table('teams')->insert(['name' => 'Katar', 'gruppe' => 'A', 'flagge' => 'qat.png' ]);
        DB::table('teams')->insert(['name' => 'Ecuador', 'gruppe' => 'A', 'flagge' => 'ecu.png' ]);
        DB::table('teams')->insert(['name' => 'Senegal', 'gruppe' => 'A', 'flagge' => 'sen.png' ]);
        DB::table('teams')->insert(['name' => 'Niederlande', 'gruppe' => 'A', 'flagge' => 'ned.png' ]);
        DB::table('teams')->insert(['name' => 'England', 'gruppe' => 'B', 'flagge' => 'eng.png' ]);
        DB::table('teams')->insert(['name' => 'Iran', 'gruppe' => 'B', 'flagge' => 'irn.png' ]);
        DB::table('teams')->insert(['name' => 'USA', 'gruppe' => 'B', 'flagge' => 'usa.png' ]);
        DB::table('teams')->insert(['name' => 'Wales', 'gruppe' => 'B', 'flagge' => 'wal.png' ]);
        DB::table('teams')->insert(['name' => 'Argentinien', 'gruppe' => 'C', 'flagge' => 'arg.png' ]);
        DB::table('teams')->insert(['name' => 'Saudi-Arabien', 'gruppe' => 'C', 'flagge' => 'sau.png' ]);
        DB::table('teams')->insert(['name' => 'Mexico', 'gruppe' => 'C', 'flagge' => 'mex.png' ]);
        DB::table('teams')->insert(['name' => 'Polen', 'gruppe' => 'C', 'flagge' => 'pol.png' ]);
        DB::table('teams')->insert(['name' => 'Frankreich', 'gruppe' => 'D', 'flagge' => 'fra.png' ]);
        DB::table('teams')->insert(['name' => 'Australien', 'gruppe' => 'D', 'flagge' => 'aus.png' ]);
        DB::table('teams')->insert(['name' => 'Dänemark', 'gruppe' => 'D', 'flagge' => 'den.png' ]);
        DB::table('teams')->insert(['name' => 'Tunesien', 'gruppe' => 'D', 'flagge' => 'tun.png' ]);
        DB::table('teams')->insert(['name' => 'Spanien', 'gruppe' => 'E', 'flagge' => 'esp.png' ]);
        DB::table('teams')->insert(['name' => 'Costa Rica', 'gruppe' => 'E', 'flagge' => 'cri.png' ]);
        DB::table('teams')->insert(['name' => 'Deutschland', 'gruppe' => 'E', 'flagge' => 'ger.png' ]);
        DB::table('teams')->insert(['name' => 'Japan', 'gruppe' => 'E', 'flagge' => 'jpn.png' ]);
        DB::table('teams')->insert(['name' => 'Belgien', 'gruppe' => 'F', 'flagge' => 'bel.png' ]);
        DB::table('teams')->insert(['name' => 'Kanada', 'gruppe' => 'F', 'flagge' => 'can.png' ]);
        DB::table('teams')->insert(['name' => 'Marokko', 'gruppe' => 'F', 'flagge' => 'mar.png' ]);
        DB::table('teams')->insert(['name' => 'Kroatien', 'gruppe' => 'F', 'flagge' => 'hrv.png' ]);
        DB::table('teams')->insert(['name' => 'Brasilien', 'gruppe' => 'G', 'flagge' => 'bra.png' ]);
        DB::table('teams')->insert(['name' => 'Serbien', 'gruppe' => 'G', 'flagge' => 'srb.png' ]);
        DB::table('teams')->insert(['name' => 'Schweiz', 'gruppe' => 'G', 'flagge' => 'che.png' ]);
        DB::table('teams')->insert(['name' => 'Kamerun', 'gruppe' => 'G', 'flagge' => 'cmr.png' ]);
        DB::table('teams')->insert(['name' => 'Portugal', 'gruppe' => 'H', 'flagge' => 'prt.png' ]);
        DB::table('teams')->insert(['name' => 'Ghana', 'gruppe' => 'H', 'flagge' => 'gha.png' ]);
        DB::table('teams')->insert(['name' => 'Uruguay', 'gruppe' => 'H', 'flagge' => 'ury.png' ]);
        DB::table('teams')->insert(['name' => 'Südkorea', 'gruppe' => 'H', 'flagge' => 'kor.png' ]);
        
        DB::table('spiele')->insert(['heim_id' => 3, 'gast_id' => 4, 'zeit' => '2022-11-21 11:00:00', 'gruppe' => 'A' ]);
        DB::table('spiele')->insert(['heim_id' => 5, 'gast_id' => 6, 'zeit' => '2022-11-21 14:00:00', 'gruppe' => 'B' ]);
        DB::table('spiele')->insert(['heim_id' => 1, 'gast_id' => 2, 'zeit' => '2022-11-21 17:00:00', 'gruppe' => 'A' ]);
        DB::table('spiele')->insert(['heim_id' => 8, 'gast_id' => 7, 'zeit' => '2022-11-21 20:00:00', 'gruppe' => 'B' ]);
        DB::table('spiele')->insert(['heim_id' => 9, 'gast_id' => 10, 'zeit' => '2022-11-22 11:00:00', 'gruppe' => 'C' ]);
        DB::table('spiele')->insert(['heim_id' => 15, 'gast_id' => 16, 'zeit' => '2022-11-22 14:00:00', 'gruppe' => 'D' ]);
        DB::table('spiele')->insert(['heim_id' => 11, 'gast_id' => 12, 'zeit' => '2022-11-22 17:00:00', 'gruppe' => 'C' ]);
        DB::table('spiele')->insert(['heim_id' => 13, 'gast_id' => 14, 'zeit' => '2022-11-22 20:00:00', 'gruppe' => 'D' ]);
        DB::table('spiele')->insert(['heim_id' => 23, 'gast_id' => 24, 'zeit' => '2022-11-23 11:00:00', 'gruppe' => 'F' ]);
        DB::table('spiele')->insert(['heim_id' => 19, 'gast_id' => 20, 'zeit' => '2022-11-23 14:00:00', 'gruppe' => 'E' ]);
        DB::table('spiele')->insert(['heim_id' => 17, 'gast_id' => 18, 'zeit' => '2022-11-23 17:00:00', 'gruppe' => 'E' ]);
        DB::table('spiele')->insert(['heim_id' => 21, 'gast_id' => 22, 'zeit' => '2022-11-23 20:00:00', 'gruppe' => 'F' ]);
        DB::table('spiele')->insert(['heim_id' => 27, 'gast_id' => 28, 'zeit' => '2022-11-24 11:00:00', 'gruppe' => 'G' ]);
        DB::table('spiele')->insert(['heim_id' => 31, 'gast_id' => 32, 'zeit' => '2022-11-24 14:00:00', 'gruppe' => 'H' ]);
        DB::table('spiele')->insert(['heim_id' => 29, 'gast_id' => 30, 'zeit' => '2022-11-24 17:00:00', 'gruppe' => 'H' ]);
        DB::table('spiele')->insert(['heim_id' => 25, 'gast_id' => 26, 'zeit' => '2022-11-24 20:00:00', 'gruppe' => 'G' ]);

        DB::table('spiele')->insert(['heim_id' => 8, 'gast_id' => 6, 'zeit' => '2022-11-25 11:00:00', 'gruppe' => 'B' ]);
        DB::table('spiele')->insert(['heim_id' => 1, 'gast_id' => 3, 'zeit' => '2022-11-25 14:00:00', 'gruppe' => 'A' ]);
        DB::table('spiele')->insert(['heim_id' => 4, 'gast_id' => 2, 'zeit' => '2022-11-25 17:00:00', 'gruppe' => 'A' ]);
        DB::table('spiele')->insert(['heim_id' => 5, 'gast_id' => 7, 'zeit' => '2022-11-25 20:00:00', 'gruppe' => 'B' ]);
        DB::table('spiele')->insert(['heim_id' => 16, 'gast_id' => 14, 'zeit' => '2022-11-26 11:00:00', 'gruppe' => 'D' ]);
        DB::table('spiele')->insert(['heim_id' => 12, 'gast_id' => 10, 'zeit' => '2022-11-26 14:00:00', 'gruppe' => 'C' ]);
        DB::table('spiele')->insert(['heim_id' => 13, 'gast_id' => 15, 'zeit' => '2022-11-26 17:00:00', 'gruppe' => 'D' ]);
        DB::table('spiele')->insert(['heim_id' => 9, 'gast_id' => 11, 'zeit' => '2022-11-26 20:00:00', 'gruppe' => 'C' ]);
        DB::table('spiele')->insert(['heim_id' => 20, 'gast_id' => 18, 'zeit' => '2022-11-27 11:00:00', 'gruppe' => 'E' ]);
        DB::table('spiele')->insert(['heim_id' => 21, 'gast_id' => 23, 'zeit' => '2022-11-27 14:00:00', 'gruppe' => 'F' ]);
        DB::table('spiele')->insert(['heim_id' => 24, 'gast_id' => 22, 'zeit' => '2022-11-27 17:00:00', 'gruppe' => 'F' ]);
        DB::table('spiele')->insert(['heim_id' => 17, 'gast_id' => 19, 'zeit' => '2022-11-27 20:00:00', 'gruppe' => 'E' ]);
        DB::table('spiele')->insert(['heim_id' => 28, 'gast_id' => 26, 'zeit' => '2022-11-28 11:00:00', 'gruppe' => 'G' ]);
        DB::table('spiele')->insert(['heim_id' => 32, 'gast_id' => 30, 'zeit' => '2022-11-28 14:00:00', 'gruppe' => 'H' ]);
        DB::table('spiele')->insert(['heim_id' => 25, 'gast_id' => 27, 'zeit' => '2022-11-28 17:00:00', 'gruppe' => 'G' ]);
        DB::table('spiele')->insert(['heim_id' => 29, 'gast_id' => 31, 'zeit' => '2022-11-28 20:00:00', 'gruppe' => 'H' ]);

        /*$teams = array ('Web Design','HTML','Freebies','Javaskript','CSS','Tutorials');
        foreach($teams as $t) {
            Team::factory()->create([
                'name' => $t,
            ]);
        }*/
    }
}
