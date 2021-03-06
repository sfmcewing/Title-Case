<?php

    require_once "src/TitleCaseGenerator.php";

    class TitleCaseGeneratorTest extends PHPUnit_Framework_TestCase
    {

        function test_makeTitleCase_oneWord ()
        {

            //Arrange

            $test_TitleCaseGenerator = new TitleCaseGenerator;
            $input = "beowulf";

            // Act
            $result = $test_TitleCaseGenerator->makeTitleCase($input);

            // Assert
            $this->assertEquals("Beowulf", $result);
        }

        function test_makeTitleCase_multipleWords()
        {

            // Arrange
            $test_TitleCaseGenerator = new TitleCaseGenerator;
            $input = "little mermaid";

            // Act
            $result = $test_TitleCaseGenerator->makeTitleCase($input);

            // Assert
            $this->assertEquals("Little Mermaid", $result);
        }

        function test_makeTitleCase_designatedWords()
        {
            //Arrange
            $test_TitleCaseGenerator = new TitleCaseGenerator;
            $input = "return of the king";

            //Act
            $result = $test_TitleCaseGenerator->makeTitleCase($input);

            //Assert
            $this->assertEquals("Return of the King", $result);
        }

        function test_makeTitleCase_designatedFirstWord()
        {
            //Arrange
            $test_TitleCaseGenerator = new TitleCaseGenerator;
            $input = "the two towers";

            //Act
            $result = $test_TitleCaseGenerator->makeTitleCase($input);

            //Assert
            $this->assertEquals("The Two Towers", $result);

        }

        function test_makeTitleCase_mixedCase()
        {
            //Arrange
            $test_TitleCaseGenerator = new TitleCaseGenerator;
            $input = "THe TwO ToWErS";

            //Act
            $result = $test_TitleCaseGenerator->makeTitleCase($input);
            //Assert
            $this->assertEquals("The Two Towers", $result);
        }

    }





?>
