<?php
use Phalcon\Validation;
use Phalcon\Validation\Validator\Email as EmailValidator;
use Phalcon\Validation\Validator\Uniqueness as UniquenessValidator;
class Data extends \Phalcon\Mvc\Model 
{

    /**
     *
     * @var string
     * @Primary
     * @Column(type="string", length=256, nullable=false)
     */
    public $uniqueid;

    /**
     *
     * @var string
     * @Column(type="string", length=256, nullable=false)
     */
    public $firstname;

    /**
     *
     * @var string
     * @Column(type="string", length=256, nullable=false)
     */
    public $lastname;

    /**
     *
     * @var string
     * @Column(type="string", length=256, nullable=false)
     */
    public $email;

    /**
     *
     * @var string
     * @Column(type="string", length=1, nullable=false)
     */
    public $gender;

    /**
     *
     * @var string
     * @Column(type="string", length=256, nullable=false)
     */
    public $education;

    /**
     *
     * @var string
     * @Column(type="string", length=256, nullable=false)
     */
    public $skills;

    /**
     * Validations and business logic
     *
     * @return boolean
     */
    public function validation()
    {
        $validator = new Validation(); 

        $validator->add(
            'email',
            new UniquenessValidator([
                'model' => $this,
                'message' => '<h1>That email is already registered</h1>'
            ])
        );

        return $this->validate($validator);
    }
        

    /**
     * Initialize method for model.
     */
    public function initialize()
    {
        $this->setSchema("users");
    }

    /**
     * Returns table name mapped in the model.
     *
     * @return string
     */
    public function getSource()
    {
        return 'data';
    }

    /**
     * Allows to query a set of records that match the specified conditions
     *
     * @param mixed $parameters
     * @return Data[]|Data
     */
    public static function find($parameters = null)
    {
        return parent::find($parameters);
    }

    /**
     * Allows to query the first record that match the specified conditions
     *
     * @param mixed $parameters
     * @return Data
     */
    public static function findFirst($parameters = null)
    {
        return parent::findFirst($parameters);
    }
    // get all the data stored in the table
    public function getData()
    {
        return parent::find();
    }

}
