<?php
// ⠀⠀⠀⠀⠀⠀⠀⠀⠀⠀⠀⠀⠀⠀⠀⠀⠀⠀⠀⠀⠀⠀⠀⠀⠀⠀⠀⠀⠀⠀⠀⠀⠀⠀⠀⠀⠀⠀⠀⠀⠀⠀⣀⡀⠀⠀⠀⢀⢀⠀⠀⠀⠀⠀⠀⠀⠀⠀⠀⠀⠀⠀⠀⠀⠀
// ⠀⠀⠀⠀⠀⠀⠀⠀⠀⠀⠀⠀⠀⠀⠀⠀⠀⠀⠀⠀⠀⠀⠀⠀⠀⠀⠀⢀⣠⣤⣴⣶⣶⣶⣦⣤⣤⣤⣤⣶⣾⣿⣿⣿⡗⠲⠲⠿⠿⠿⠷⠦⠤⣤⡀⠀⠀⠀⠀⠀⠀⠀⠀⠀⠀
// ⢀⣤⣶⣦⠤⠤⣄⣀⣀⣀⣀⠀⠀⠀⠀⠀⠀⠀⠀⠀⠀⠀⠀⠀⠀⠀⢠⠟⢉⡽⠟⠛⠛⠛⠛⣻⡿⠷⣄⠈⢿⠀⠸⡆⡇⠀⠀⠀⠀⠀⠀⠀⠀⠈⢧⠀⠀⠀⠀⠀⠀⠀⠀⠀⠀
// ⠸⣿⣿⡿⠀⠀⠀⠀⠀⠀⠈⠉⠉⠉⠙⠒⠒⠒⠒⠠⠤⠤⠤⣄⣀⣰⣯⣴⣯⣤⣄⣀⣠⠖⠋⠁⠀⠀⢸⠀⣾⠀⢀⣷⣸⠀⣤⣤⣄⣠⣶⡄⣶⣦⠸⡄⠀⠀⠀⠀⠀⠀⠀⠀⠀
// ⠀⠈⠉⠙⠓⠒⠒⠲⠤⠤⠤⢤⣀⣀⣀⠀⠀⠀⠀⠀⠀⠀⠀⠀⠀⠀⠈⠙⣿⣆⠀⠈⠳⡄⠀⠀⠀⠀⢸⠀⡇⠀⢻⢹⡀⠀⣿⡄⢻⣿⣄⣻⣿⡘⣧⢻⠀⠀⠀⠀⠀⠀⠀⠀⠀
// ⠀⠀⠀⠀⠀⠀⠀⠀⠀⠀⠀⠀⠀⠀⠀⠉⠉⠉⠑⠒⠒⠒⠦⣤⣤⣤⣀⡴⣿⠏⠀⠀⢀⠇⠀⠀⠀⠀⡆⢸⠇⠀⠈⠛⡟⢆⠘⣧⠈⣿⢹⣻⡿⢷⣽⠈⣧⣄⣀⣀⣀⣀⠀⠀⠀
// ⠀⠀⠀⠀⠀⠀⠀⠀⠀⠀⠀⠀⠀⠀⠀⠀⠀⠀⠀⠀⠀⠀⣴⣋⣀⠈⣿⣚⣓⣒⣒⣚⣉⠲⣤⣄⣀⣰⣷⠟⠀⠀⠀⠀⢹⢸⠀⠙⢿⣟⣈⣿⠧⠤⠝⠒⠋⠉⠁⠀⠈⣿⡄⠀⠀
// ⠀⠀⠀⠀⠀⠀⠀⠀⠀⠀⠀⠀⠀⠀⢀⣤⠶⠶⢶⣿⣿⣿⣿⣽⣿⣻⣿⣿⣛⣻⣿⢿⣿⣟⣿⣿⣿⣿⣿⠖⠒⣲⣶⣶⠾⠶⠓⠋⠉⠉⠀⠀⠀⠀⠀⠀⠀⠀⠀⠀⠀⢘⡆⠀⠀
// ⠀⠀⠀⠀⠀⠀⠀⠀⠀⠀⠀⠀⢀⣴⡿⠁⣀⣴⣋⠉⣹⡇⣠⣿⠿⣿⡟⠉⠉⠉⠁⠉⠉⠉⠉⣛⡛⠛⣿⢛⣿⣿⡄⠀⠀⠀⠀⠀⠀⠀⠀⠀⢀⣀⣀⡤⠤⢴⣶⣾⣟⡽⠿⢤⣀
// ⠀⠀⠀⠀⠀⠀⠀⠀⠀⠀⢀⡴⠋⠁⠘⠛⢻⣿⣿⠵⢫⣾⡿⠁⠀⣿⠀⠀⠀⠀⠀⠀⠀⠀⢺⣿⣿⡏⢹⠸⣿⣿⣃⣀⣠⣤⠴⠖⠒⠒⣿⣏⣩⠤⠾⢷⣖⣉⣉⣉⣷⡶⠖⢚⣿
// ⠀⠀⠀⢀⣴⠞⠉⠉⠉⠉⢉⡽⠛⣳⡶⠂⠀⠀⣠⣼⡿⠋⠀⠀⠀⣿⡀⠀⠀⠀⠀⠀⠀⠀⠀⣿⠁⠉⣿⡏⠉⠉⢀⣀⠬⢿⣶⡒⠊⠉⠉⢙⣿⣦⡤⠔⠛⣿⠉⢀⣴⣷⣾⣿⣿
// ⠀⠀⠀⣾⠁⠀⠀⠀⠀⡰⠋⣀⣴⡟⠁⠀⢠⣾⣿⣏⣀⣀⣀⣀⣀⣿⡇⠀⠀⣠⠾⠛⠉⠉⠉⠐⢒⡾⠛⠳⣄⡀⠀⠀⠀⣀⣉⢿⡶⠒⠋⠉⠀⣿⡄⣀⣴⣿⣾⣿⣿⣿⣿⣿⢹
// ⠀⠀⠀⢷⣄⣀⣀⣀⣀⡇⣼⣿⡟⠀⠠⣤⠀⠉⠉⡉⣉⡉⠉⠛⠛⠿⠇⠀⣰⠋⠀⠀⠀⠀⠀⢠⠋⠀⠀⢀⡠⠝⢷⠊⠉⠁⠀⠀⣧⠀⠀⣠⣴⣿⣿⣿⣿⣿⣿⣿⣿⣿⣿⠇⠀
// ⠀⠀⠀⠀⢈⣿⣿⣿⣿⣿⣿⣿⣿⣍⠉⠻⠶⠶⣾⠦⠤⠬⣿⣄⣀⣼⣲⣾⡿⠀⠀⠀⠀⠀⠀⡇⠀⣠⠞⢉⣠⣤⣾⣷⣶⣶⣦⣤⣿⣾⣿⣿⣿⣿⣿⣿⣿⣿⣿⣿⣿⡿⠟⠀⠀
// ⠀⠀⠀⠀⠘⣿⣿⣿⣿⣿⣿⣿⣧⠉⠳⣄⠀⠀⠀⠀⠀⠀⠀⠉⠉⠛⢹⣿⢿⣶⣤⣤⣤⣄⣤⡁⢰⠃⣴⣿⣿⣿⠛⣿⣿⣿⣿⣿⣿⣿⣿⣿⣿⣿⣾⡿⣿⣿⡿⠟⠉⠀⠀⠀⠀
// ⠀⠀⠀⠀⠀⠘⢿⣿⣿⣿⣿⣿⣿⣷⣶⣾⣷⣶⣶⣶⣤⣤⣤⣄⣀⣀⣀⠀⠀⠹⣿⣿⣿⣿⣿⣿⣿⣾⣿⣿⢸⣿⣿⣿⣿⣿⣿⣿⣿⣿⣿⣿⣿⠿⣯⣿⠟⠉⠀⠀⠀⠀⠀⠀⠀
// ⠀⠀⠀⠀⠀⠀⠀⠈⠛⠿⣿⣿⣿⣿⣿⣿⣿⣿⣿⣿⡿⠟⠉⠀⠀⠀⠈⠉⠉⠙⢿⣿⣿⣿⣿⣿⣿⣿⣿⣿⣼⣿⢿⣿⣿⣿⣿⣿⣿⣿⣿⣿⣿⠿⠋⠀⠀⠀⠀⠀⠀⠀⠀⠀⠀
// ⠀⠀⠀⠀⠀⠀⠀⠀⠀⠀⠀⠉⠉⠛⠛⠛⠛⠛⠛⠁⠀⠀⠀⠀⠀⠀⠀⠀⠀⠀⠈⠙⠿⣿⣿⣿⣿⣿⣿⣿⣿⣿⣿⣿⣿⣿⣿⣿⣿⣿⠟⠋⠁⠀⠀⠀⠀⠀⠀⠀⠀⠀⠀⠀⠀
// ⠀⠀⠀⠀⠀⠀⠀⠀⠀⠀⠀⠀⠀⠀⠀⠀⠀⠀⠀⠀⠀⠀⠀⠀⠀⠀⠀⠀⠀⠀⠀⠀⠀⠈⠙⠿⢿⣿⣿⣿⣿⣿⣿⣿⣿⣿⣿⠟⠋⠁⠀⠀⠀⠀⠀⠀⠀⠀⠀⠀⠀⠀⠀⠀⠀
// ⠀⠀⠀⠀⠀⠀⠀⠀⠀⠀⠀⠀⠀⠀⠀⠀⠀⠀⠀⠀⠀⠀⠀⠀⠀⠀⠀⠀⠀⠀⠀⠀⠀⠀⠀⠀⠀⠀⠉⠉⠉⠛⠛⠻⠟⠋⠀⠀⠀⠀⠀⠀⠀⠀⠀⠀⠀⠀⠀⠀⠀⠀⠀⠀⠀
/**
 * Class SampleTest
 *
 * @package Wise_Reader
 */

/**
 * Sample test case.
 */
class SampleTest extends WP_UnitTestCase {

	/**
	 * A single example test.
	 */
	public function testGetReadingGrade()
    {
        $text = 'Il était une fois un petit oiseau qui rêvait de voler plus haut que les nuages.';
        $expectedGrade = 'CE1'; // Le résultat attendu pour le texte donné

        $result = get_reading_grade($text);

        $this->assertEquals($expectedGrade, $result);
    }

    public function testComputeReadingGrade()
    {
        $post = new WP_Post((object) array('post_content' => 'Il était une fois un petit oiseau qui rêvait de voler plus haut que les nuages.'));
        $expectedGrade = 'CE1'; // Le résultat attendu pour le texte donné

        $result = compute_reading_grade($post);

        $this->assertEquals($expectedGrade, $result);

        // Vérifiez également si la méta donnée a été correctement enregistrée dans $post->reading_grade
        $this->assertEquals($expectedGrade, get_post_meta($post->ID, READING_LEVEL_META_KEY, true));
    }
	
}
