
   
<?php

// namespace App\DataFixtures;

use App\Entity\Answer;
use App\Entity\Question;
use App\Factory\AnswerFactory;
use App\Factory\QuestionFactory;
use Doctrine\Bundle\FixturesBundle\Fixture;
use Doctrine\Persistence\ObjectManager;

class AppFixtures extends Fixture
{
    public function load(ObjectManager $manager): void
    {
        QuestionFactory::createMany(20);
        AnswerFactory::createMany(100);
        AnswerFactory::new()->needsApproval()->many(20)->create();
        AnswerFactory::new()->spam()->many(20)->create();
    }
}