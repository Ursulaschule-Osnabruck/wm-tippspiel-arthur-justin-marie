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
        
        DB::table('spiele')->insert(['heim_id' => ' ', 'gast_id' => ' ', 'zeit' => ' ', 'gruppe' ]);

        /*$teams = array ('Web Design','HTML','Freebies','Javaskript','CSS','Tutorials');
        foreach($teams as $t) {
            Team::factory()->create([
                'name' => $t,
            ]);
        }*/
    }
}
