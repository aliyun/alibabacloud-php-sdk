<?php

// This file is auto-generated, don't edit it. Thanks.

namespace AlibabaCloud\SDK\AirticketOpen\V20230117\Models\ChangeDetailResponseBody\data;

use AlibabaCloud\Dara\Model;

class changePassengers extends Model
{
    /**
     * @var string
     */
    public $document;

    /**
     * @var string
     */
    public $firstName;

    /**
     * @var string
     */
    public $lastName;
    protected $_name = [
        'document' => 'document',
        'firstName' => 'first_name',
        'lastName' => 'last_name',
    ];

    public function validate()
    {
        parent::validate();
    }

    public function toArray($noStream = false)
    {
        $res = [];
        if (null !== $this->document) {
            $res['document'] = $this->document;
        }

        if (null !== $this->firstName) {
            $res['first_name'] = $this->firstName;
        }

        if (null !== $this->lastName) {
            $res['last_name'] = $this->lastName;
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
        if (isset($map['document'])) {
            $model->document = $map['document'];
        }

        if (isset($map['first_name'])) {
            $model->firstName = $map['first_name'];
        }

        if (isset($map['last_name'])) {
            $model->lastName = $map['last_name'];
        }

        return $model;
    }
}
