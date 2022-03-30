<?php

class Qcm {

    public $questions = [];
    public $appreciation = [];

    function ajouterQuestion($question){
        array_push($this->questions , $question);
    }

    function setAppreciation($appreciation){
        $this->appreciation = $appreciation;
    }
}

class Question{
    public $intitule;
    public $reponses =[];
    public $explication;

    function __construct($intitule  )
    {
        $this->intitule = $intitule;



    }
    function ajouterReponse($reponse)
    {
        array_push($this->reponses, $reponse);
    }

    function setExplications($explication){
        $this->explication = $explication;
    }
}

class Reponse {
    public $intitule;
    public $boolgreat;
    static $BONNE_REPONSE = true;

    function __construct($intitule, $boolgreat=false){

        $this->intitule = $intitule;
        $this->boolgreat = $boolgreat;

    }

}





$qcm = new Qcm();

$question1 = new Question('POO signifie');
$question1->ajouterReponse(new Reponse('Php Orienté Objet'));
$question1->ajouterReponse(new Reponse('ProgrammatiOn Orientée'));
$question1->ajouterReponse(new Reponse('Programmation Orientée Objet', Reponse::$BONNE_REPONSE));
$question1->setExplications('Sans commentaires si vous avez eu faux :-°');

$qcm->ajouterQuestion($question1);

$qcm->setAppreciation(array(
    '0-10' => 'Pas top du tout ...',
    '10-20' => 'Très bien ...'
));

// $qcm->generer();

echo '<pre>' . var_export($qcm, true) . '</pre>';
