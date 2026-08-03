<?php

// This file is auto-generated, don't edit it. Thanks.

namespace AlibabaCloud\SDK\AirticketOpen\V20230117\Models\CreateAndPayRequest;

use AlibabaCloud\Dara\Model;

class contact extends Model
{
    /**
     * @var string
     */
    public $email;

    /**
     * @var string
     */
    public $firstName;

    /**
     * @var string
     */
    public $lastName;

    /**
     * @var string
     */
    public $phone;

    /**
     * @var string
     */
    public $tracerId;
    protected $_name = [
        'email' => 'Email',
        'firstName' => 'FirstName',
        'lastName' => 'LastName',
        'phone' => 'Phone',
        'tracerId' => 'TracerId',
    ];

    public function validate()
    {
        parent::validate();
    }

    public function toArray($noStream = false)
    {
        $res = [];
        if (null !== $this->email) {
            $res['Email'] = $this->email;
        }

        if (null !== $this->firstName) {
            $res['FirstName'] = $this->firstName;
        }

        if (null !== $this->lastName) {
            $res['LastName'] = $this->lastName;
        }

        if (null !== $this->phone) {
            $res['Phone'] = $this->phone;
        }

        if (null !== $this->tracerId) {
            $res['TracerId'] = $this->tracerId;
        }

        return $res;
    }

    public function toMap($noStream = false)
    {
        return $this->toArray($noStream);
    }

    public static function fromMap($map = [])
    {
        $model = new self();
        if (isset($map['Email'])) {
            $model->email = $map['Email'];
        }

        if (isset($map['FirstName'])) {
            $model->firstName = $map['FirstName'];
        }

        if (isset($map['LastName'])) {
            $model->lastName = $map['LastName'];
        }

        if (isset($map['Phone'])) {
            $model->phone = $map['Phone'];
        }

        if (isset($map['TracerId'])) {
            $model->tracerId = $map['TracerId'];
        }

        return $model;
    }
}
