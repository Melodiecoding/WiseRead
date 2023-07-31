<?php
/**
 * Plugin Name:       Wise Reader
 * Plugin URI:        
 * Description:       FakerPress is a clean way to generate fake data to your WordPress installation, great for developers who need testing
 * Version:           0.0.1
 * Author:            
 * Author URI:        
 * License:           GPL-3.0+
 * License URI:       http://www.gnu.org/licenses/gpl-3.0.txt
 * Domain Path:       /languages
 * GitHub Plugin URI: https://github.com/
 */

// ARI = 4.71 * (Nombre de caractères / Nombre de mots) + 0.5 * (Nombre de mots / Nombre de phrases) - 21.43
// FKGL = 0.39 * (Nombre de mots / nombre de phrases) + 11.8 * (Nombre de syllabes / Nombre de mots) - 15.59
// Gunning = 0.4 (Nombre de mots / Nombre de phrases + 100 * Nombre de mot avec 3+ syllabes / Nombre de mots)

// TABLEAU DES NIVEAUX D'ÉTUDES (ANGLAIS/FRANÇAIS)
// Score	Niveau Scolaire
// 1	    1st grade (CP, 11ème)
// 2	    2nd grade (CE1, 10ème)
// 3	    3rd grade (CE2, 9ème)
// 4	    4th grade (CM1, 8ème)
// 5	    5th grade (CM2, 7ème)
// 6	    6th grade (6ème)
// 7	    7th grade (5ème)
// 8	    8th grade (4ème)
// 9	    9th grade (3ème)
// 10	    10th grade (2nde)
// 11	    11th grade (1ère)
// 12	    12th grade (Terminale)
// 13-14	Bachelor (Université, BAC+1, BAC+2)
// 15+	    Master/PhD (Master, Doctorat)

// Necessaire pour que les `using` marchent
require "vendor/autoload.php";


//              .=.,
//             ;c =\
//           __|  _/
//         .'-'-._/-'-._
//        /..   ____    \
//       /' _  [<_->] )  \
//      (  / \--\_>/-/'._ )
//       \-;_/\__;__/ _/ _/
//        '._}|==o==\{_\/
//         /  /-._.--\  \_
//        // /   /|   \ \ \
//       / | |   | \;  |  \ \
//      / /  | :/   \: \   \_\
//     /  |  /.'|   /: |    \ \
//     |  |  |--| . |--|     \_\
//     / _/   \ | : | /___--._) \
//    |_(---'-| >-'-| |       '-'
//           /_/     \_\
// ⠀⣰⠐⢲⠉⠉⢻⣄⣀⠀⠀⠀⠀⠀⠀⠀⠀⠀⠀⠀⠀⠀⠀⠀⠀⠀⠀⠀⠀⠀⠀⠀⠀⠀⠀⠀⠀⠀⠀⠀⠀⠀⠀⠀⠀⠀⠀⠀⠀⠀⠀⠀⠀⠀⠀⠀⠀⠀⠀⠀⠀⠀⠀⠀⠀
// ⡟⠙⡄⠀⡇⠀⢸⡀⠘⣦⠀⠀⠀⠀⠀⠀⠀⠀⠀⠀⠀⠀⠀⠀⠀⠀⠀⠀⠀⠀⠀⠀⠀⠀⠀⠀⠀⠀⠀⠀⠀⠀⠀⠀⠀⠀⠀⠀⠀⠀⠀⠀⠀⠀⠀⠀⠀⠀⠀⠀⠀⠀⠀⠀⠀
// ⢱⠀⢳⡀⠹⡆⠈⢧⠀⠸⣆⠀⠀⠀⠀⠀⠀⠀⠀⠀⠀⠀⠀⠀⠀⠀⠀⠀⠀⠀⠀⠀⠀⠀⠀⠀⠀⠀⠀⠀⠀⠀⠀⠀⠀⠀⠀⠀⠀⠀⠀⠀⠀⠀⠀⠀⠀⠀⠀⠀⠀⠀⠀⠀⠀
// ⠘⣦⣀⣓⣀⣙⣂⣈⣧⠀⢸⡟⣷⡆⠀⠀⠀⠀⠀⠀⠀⠀⠀⠀⠀⠀⠀⠀⠀⠀⠀⠀⠀⠀⠀⠀⠀⠀⠀⠀⠀⠀⠀⠀⠀⠀⠀⠀⠀⠀⠀⠀⠀⠀⠀⠀⠀⠀⠀⠀⠀⠀⠀⠀⠀
// ⢸⡇⠀⢀⣀⡠⠤⠤⣤⡴⡏⠀⢸⣃⠀⠀⠀⠀⠀⠀⠀⠀⠀⠀⠀⠀⠀⠀⠀⠀⠀⠀⠀⠀⠀⠀⠀⠀⠀⠀⠀⠀⠀⠀⠀⠀⠀⠀⠀⠀⠀⠀⠀⠀⠀⠀⠀⠀⠀⠀⠀⠀⠀⠀⠀
// ⠘⣧⡀⠉⠁⠀⣠⠞⠉⠁⠙⠀⠈⣿⠀⠀⠀⠀⠀⠀⠀⠀⠀⠀⠀⠀⢀⣠⣀⠀⠀⠀⠀⠀⠀⠀⠀⠀⠀⠀⠀⠀⠀⠀⠀⠀⠀⠀⠀⠀⠀⠀⠀⠀⠀⠀⠀⠀⠀⠀⠀⠀⠀⠀⠀
// ⠀⠈⣽⡶⢤⠘⣧⠀⠀⠀⠀⢀⡞⠁⠀⠀⠀⠀⠀⠀⠀⠀⠀⠀⠀⢠⣿⣿⣿⣿⣷⣄⣀⠀⠀⠀⠀⠀⠀⠀⠀⠀⠀⠀⠀⠀⠀⠀⠀⠀⠀⠀⠀⠀⠀⠀⠀⠀⠀⠀⠀⠀⠀⠀⠀
// ⠀⣴⠃⠹⣄⠀⠈⠙⠒⢲⣾⣍⠀⠀⠀⠀⠀⠀⠀⠀⠀⠀⠀⠀⠀⣿⢻⣿⣿⣿⣿⣿⣿⣿⣦⠀⠀⠀⠀⠀⠀⠀⠀⠀⠀⠀⠀⠀⠀⠀⠀⠀⠀⠀⠀⠀⠀⠀⠀⠀⠀⠀⠀⠀⠀
// ⠀⣿⠀⠀⠈⠓⠶⠶⠖⠋⠀⠙⣧⣀⣤⠖⠋⠉⠙⠳⡀⠀⠀⠀⣰⣇⣠⣻⣷⡏⠙⠉⠀⣨⣿⠀⠀⠀⠀⠀⠀⠀⠀⠀⠀⠀⠀⠀⠀⠀⠀⠀⠀⠀⠀⠀⠀⠀⠀⠀⠀⠀⠀⠀⠀
// ⠀⣿⠀⠀⠀⠀⠀⠀⠀⠀⠀⠀⢸⡿⣖⠒⠦⣄⠀⠀⠹⣦⣀⣀⣿⠉⠭⠷⡆⠠⢴⣒⠂⢹⣿⡀⠀⠀⠀⠀⠀⠀⠀⠀⠀⠀⠀⠀⠀⠀⠀⠀⠀⠀⠀⠀⠀⠀⠀⠀⠀⠀⠀⠀⠀
// ⠀⣿⠀⠀⠀⠀⠀⠀⠀⠀⠀⢀⡼⠁⠙⣆⠀⠈⢳⡄⠀⢸⡀⢹⣿⠀⠀⣸⡁⠀⠀⠈⠀⢸⣫⡿⠀⠀⠀⠀⠀⠀⠀⠀⠀⠀⠀⠀⠀⠀⠀⠀⠀⠀⠀⠀⠀⠀⠀⠀⠀⠀⠀⠀⠀
// ⠀⠈⠻⣦⡀⠀⠀⠀⠀⠀⠀⠈⠁⠀⠀⠸⠆⠀⠀⢹⡄⠀⡇⢀⡇⠀⢠⠬⣈⣀⠀⠀⠀⢀⣻⠃⠀⠀⠀⠀⠀⠀⠀⠀⠀⠀⠀⠀⠀⠀⠀⠀⠀⠀⠀⠀⠀⠀⠀⠀⠀⠀⠀⠀⠀
// ⠀⠀⠀⠈⠻⣧⡄⠀⠀⠀⠀⠀⠀⠀⠀⠀⠀⠀⠀⠀⣇⠀⡇⢸⡀⠀⠈⠉⠒⠉⠁⠀⠀⡞⣏⠀⠀⠀⠀⠀⠀⠀⠀⠀⠀⠀⠀⠀⠀⠀⠀⠀⠀⠀⠀⠀⠀⠀⠀⠀⠀⠀⠀⠀⠀
// ⠀⠀⠀⠀⠀⠘⣷⣆⠀⠀⠀⠀⠀⠀⠀⠀⠀⠀⠀⠀⢸⣀⡇⢈⣧⠀⠀⠀⠀⠀⠀⠀⣴⠃⣿⠉⠉⠙⣆⣀⣀⡀⠀⠀⠀⠀⠀⠀⠀⠀⠀⠀⢀⣠⠴⠖⠛⠉⠉⠙⠲⣤⡀⠀⠀
// ⠀⠀⠀⠀⠀⠀⠈⠻⣦⡀⠀⠀⠀⠀⢠⠀⠀⠀⠀⠀⠸⣿⠀⣸⠉⠣⢤⣧⣀⣀⡴⠋⠁⡔⣟⣧⠀⠀⢸⠀⠀⢹⣤⣀⠀⠀⠀⠀⠀⣠⡴⠚⠋⠀⠀⠀⠀⠀⠀⠀⠀⠀⠙⢦⠀
// ⠀⠀⠀⠀⠀⠀⠀⠀⠈⣿⠶⢤⣀⣀⢸⠀⠀⠀⠀⠀⠀⠉⠺⣃⠀⠀⢰⠀⠀⠀⠀⠀⣼⠀⠘⢸⠀⠀⡞⠀⢀⡞⠀⠈⠳⣄⣠⠖⠋⠁⠀⠀⠀⠀⠀⠀⠀⠀⠀⠀⠀⠀⠀⠀⠳
// ⠀⠀⠀⠀⠀⠀⠀⠀⠀⢸⡄⠀⠀⠈⠛⡆⠀⠀⠀⠀⠀⠀⠀⠈⠓⢤⣈⢷⠀⠀⠀⡼⠁⠀⢀⡟⢀⡾⠀⡠⠋⠀⠀⠀⠀⣿⢀⣀⣠⠤⠤⢴⠖⠛⠛⠉⠉⠁⠀⠀⠀⠀⠀⠈⠉
// ⠀⠀⠀⠀⠀⠀⠀⠀⠀⠸⣧⠀⠀⠀⠀⡇⠀⠀⠀⠀⠀⠀⠀⣀⣀⡀⠈⠛⢧⣄⡞⠀⠀⢀⡞⣠⢎⣴⠊⠁⠀⠀⠀⠀⠀⡿⠉⠉⠀⠀⠀⠸⣄⡀⠀⠀⠀⠀⠀⠀⠀⠀⠀⠀⠀
// ⠀⠀⠀⠀⠀⠀⠀⠀⠀⠀⢻⡄⠀⠀⠀⢧⠀⠀⢀⣠⢴⣒⠿⣗⣢⠍⠓⠶⢤⣀⡉⠓⠶⠾⠭⠟⠉⠀⠀⠀⠀⡄⠀⣠⡾⠁⠀⠀⠀⠀⠀⠀⠀⠙⠳⣄⠀⠀⠀⠀⠀⠀⠀⠀⠀
// ⠀⠀⠀⠀⠀⠀⠀⠀⠀⠀⠀⢻⣄⠀⠀⢸⡄⠀⠘⢧⠻⠖⠋⢁⡠⠐⠒⠒⠢⢬⡉⢻⣒⠤⣄⠀⠀⠀⠀⠀⣼⠷⠛⢧⣄⣀⣤⠴⠚⣗⡦⣤⡀⠀⠀⠘⡇⠀⠀⠀⠀⠀⠀⠀⠀
// ⠀⠀⠀⠀⠀⠀⠀⠀⠀⠀⠀⠀⠙⢧⡀⠀⠻⣄⠀⠀⠱⣄⠀⠈⠓⠦⠤⣀⣀⠀⠈⢦⠈⣠⣾⡀⠀⠀⢀⡾⠁⠀⢀⠞⠁⠀⠀⢀⣦⡈⣳⢼⡇⠀⠀⠀⡷⠀⠀⠀⠀⠀⠀⠀⠀
// ⠀⠀⠀⠀⠀⠀⠀⠀⠀⠀⠀⠀⠀⠈⠛⢮⡀⠈⠁⠤⣀⡈⠳⣜⠿⠓⣒⠀⠤⢉⡛⠣⣬⣽⣣⠷⢀⣴⠟⠒⠶⠤⢼⣀⠙⠒⣛⣽⠿⠵⣿⠟⠁⠀⠀⣰⠇⠀⠀⠀⠀⠀⠀⠀⠀
// ⠀⠀⠀⠀⠀⠀⠀⠀⠀⠀⠀⠀⠀⠀⠀⠈⠻⢦⡀⠀⠈⠉⠓⠮⢷⡠⡬⣶⡒⣺⣥⢔⣛⣩⣤⣿⣿⣦⡆⠀⠀⠀⠀⠈⠉⠉⠉⠛⠛⠛⠋⠀⠀⢀⣴⠏⠀⠀⠀⠀⠀⠀⠀⠀⠀
// ⠀⠀⠀⠀⠀⠀⠀⠀⠀⠀⠀⠀⠀⠀⠀⠀⠀⠀⢻⡦⢄⣀⠀⠀⠀⠙⠛⠛⠉⢉⣉⢽⣿⣠⡿⠟⠋⠁⠙⢶⡒⠛⠓⠲⠦⣤⣀⣀⠀⠀⠀⣀⡴⠟⠁⠀⠀⠀⠀⠀⠀⠀⠀⠀⠀
// ⠀⠀⠀⠀⠀⠀⠀⠀⠀⠀⠀⠀⠀⠀⠀⠀⠀⠀⠈⣿⣶⣬⣻⣷⡂⠐⣖⠈⣉⣷⣤⣾⡿⠋⠀⠀⠀⠀⠀⠈⠻⣄⠀⠀⠀⠀⠈⠉⠉⠉⠉⠁⠀⠀⠀⠀⠀⠀⠀⠀⠀⠀⠀⠀⠀
// ⠀⠀⠀⠀⠀⠀⠀⠀⠀⠀⠀⠀⠀⠀⠀⠀⠀⠀⠀⠙⣿⢿⣿⣿⣿⣿⣿⣿⣿⣿⣿⡟⠀⠀⠀⠀⠀⠀⠀⠀⠀⠘⢷⠀⠀⠀⠀⠀⠀⠀⠀⠀⠀⠀⠀⠀⠀⠀⠀⠀⠀⠀⠀⠀⠀
// ⠀⠀⠀⠀⠀⠀⠀⠀⠀⠀⠀⠀⠀⠀⠀⠀⠀⠀⠀⠀⠸⣦⡀⠈⠉⠉⠉⠉⠉⠉⢻⡷⡄⠀⠀⠀⠀⠀⠀⠀⠀⠀⠈⢧⠀⠀⠀⠀⠀⠀⠀⠀⠀⠀⠀⠀⠀⠀⠀⠀⠀⠀⠀⠀⠀
// ⠀⠀⠀⠀⠀⠀⠀⠀⠀⠀⠀⠀⠀⠀⠀⠀⠀⠀⠀⠀⠀⠈⠻⢦⡀⠀⠀⠀⠀⠀⠀⢷⠙⢦⡀⠀⠀⠀⠀⠀⠀⠀⠀⠘⡇⠀⠀⠀⠀⠀⠀⠀⠀⠀⠀⠀⠀⠀⠀⠀⠀⠀⠀⠀⠀
// ⠀⠀⠀⠀⠀⠀⠀⠀⠀⠀⠀⠀⠀⠀⠀⠀⠀⠀⠀⠀⠀⠀⠀⠀⠈⠓⢦⣄⠀⠰⡄⠈⣦⠀⠻⣄⠀⠀⠀⠀⠀⠀⠀⠀⢻⠀⠀⠀⠀⠀⠀⠀⠀⠀⠀⠀⠀⠀⠀⠀⠀⠀⠀⠀⠀
// ⠀⠀⠀⠀⠀⠀⠀⠀⠀⠀⠀⠀⠀⠀⠀⠀⠀⠀⠀⠀⠀⠀⠀⠀⠀⠀⠘⣎⢙⡒⢷⣤⣼⣆⠐⣿⣦⠀⠀⠀⠀⠀⠀⠀⡿⠀⠀⠀⠀⠀⠀⠀⠀⠀⠀⠀⠀⠀⠀⠀⠀⠀⠀⠀⠀
// ⠀⠀⠀⠀⠀⠀⠀⠀⠀⠀⠀⠀⠀⠀⠀⠀⠀⠀⠀⠀⠀⠀⠀⠀⠀⠀⠀⠙⠿⣽⣹⡻⠀⠘⠷⡹⡎⠳⡀⠀⠀⠀⠀⣸⡇⠀⠀⠀⠀⠀⠀⠀⠀⠀⠀⠀⠀⠀⠀⠀⠀⠀⠀⠀⠀
// ⠀⠀⠀⠀⠀⠀⠀⠀⠀⠀⠀⠀⠀⠀⠀⠀⠀⠀⠀⠀⠀⠀⠀⠀⠀⠀⠀⠀⠀⠀⠀⠉⠙⣇⠀⢷⣻⡀⠘⠳⣤⣄⣀⡟⠀⠀⠀⠀⠀⠀⠀⠀⠀⠀⠀⠀⠀⠀⠀⠀⠀⠀⠀⠀⠀
// ⠀⠀⠀⠀⠀⠀⠀⠀⠀⠀⠀⠀⠀⠀⠀⠀⠀⠀⠀⠀⠀⠀⠀⠀⠀⠀⠀⠀⠀⠀⠀⠀⠀⠿⡆⠈⢇⢧⠀⠀⢻⡀⠀⠀⠀⠀⠀⠀⠀⠀⠀⠀⠀⠀⠀⠀⠀⠀⠀⠀⠀⠀⠀⠀⠀
// ⠀⠀⠀⠀⠀⠀⠀⠀⠀⠀⠀⠀⠀⠀⠀⠀⠀⠀⠀⠀⠀⠀⠀⠀⠀⠀⠀⠀⠀⠀⠀⠀⠀⠀⠙⢦⣸⡄⠳⣄⢈⡇⠀⠀⠀⠀⠀⠀⠀⠀⠀⠀⠀⠀⠀⠀⠀⠀⠀⠀⠀⠀⠀⠀⠀

use DaveChild\TextStatistics as TS;
$textStatistics = new TS\TextStatistics();
$text = 'Il était une fois un petit oiseau qui rêvait de voler plus haut que les nuages.
Dans une forêt magique, vivait une licorne aux couleurs scintillantes.
Au fond du jardin, se cachait un lapin espiègle qui aimait grignoter les carottes.
Princesse Emma devait résoudre trois énigmes pour sauver son royaume enchanté.
Le petit garçon nommé Tim découvrit une carte au trésor sous son lit.
Sous le lit de Léa, une porte secrète s\'ouvrait sur un monde de fées et de lutins.
Le courageux petit chien Max protégeait son quartier contre les vilains chats.
Dans la vallée des arc-en-ciels, les bonbons poussaient sur les arbres.
La sorcière Agathe avait un chat noir qui se transformait en dragon les soirs de pleine lune.
Le robot Sam-10 avait pour mission de sauver la planète grâce à son laser puissant.';

function get_reading_grade($text){
    global $textStatistics;
    // $W = $textStatistics->wordCount($text);
    $grade_number = $textStatistics->fleschKincaidGradeLevel($text);
    return get_grade_text($grade_number);
}

const FRENCH_GRADES = [
    "CP", "CE1", "CE2", "CM1", "CM2", 
    "6ème", "5ème", "4ème", "3ème",
    "2nde", "1ère", "Terminale",
];

function get_grade_text($textScore) {
    $score = intval($textScore);
    // un score ne peut pas être inferieur a un
    if ($score < 1) {
        $score = 1;
    }

    if ($score <= count(FRENCH_GRADES)) {
        // le score a une correspondance dans le tableau
        return FRENCH_GRADES[$score-1];
    }

    if (13 <= $score && $score <= 14) {
        return "Université (BAC+1/BAC+2)";
    }
    if (15 <= $score) {
        return "Master, Doctorat";
    }
}

const READING_LEVEL_META_KEY = 'reading_level';

function save_reading_grade($post_id, WP_Post $post, bool $update) {
    // Do not execute when the add button is used
    if (!$update) { return; }
    // Do not execute when the post is a revision
    if (wp_is_post_revision($post_id)) { return; }
    // Do not execute on autosaves
    if (defined('DOING_AUTOSAVE') and DOING_AUTOSAVE) { return; }
    // Only for articles
    if ($post->post_type != 'post') { return; }

    compute_reading_grade($post);    
}

function compute_reading_grade(WP_Post $post) {
    // Remove HTML tags
    $stripped_content = strip_tags($post->post_content);

    $reading_grade = get_reading_grade($stripped_content);
    // Update reading grade of the post
    update_post_meta($post->ID, READING_LEVEL_META_KEY, $reading_grade);

    return $reading_grade;
}

// Add an action on the post
add_action('save_post', 'save_reading_grade', accepted_args: 3);

function add_wise_reader( $title, $id = null ){
    // variable who get post's id
    $post = get_post($id);
    // Return reading_time only for articles/posts
    if ( $post->post_type != 'post' ) { return $title; }

    // Get meta data of post
    $reading_time = get_post_meta($id, READING_LEVEL_META_KEY, single: true);

    if ( empty($reading_time) ){ 
        $reading_time = compute_reading_grade($post);
    }

    return "$title <span style='font-size : 1rem; font-weight : normal;'><br>Niveau de lecture : $reading_time </span>";
}

add_filter('the_title', 'add_wise_reader', accepted_args: 2);