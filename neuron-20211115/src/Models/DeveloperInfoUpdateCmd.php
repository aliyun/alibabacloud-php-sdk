<?php

// This file is auto-generated, don't edit it. Thanks.

namespace AlibabaCloud\SDK\Neuron\V20211115\Models;

use AlibabaCloud\Dara\Model;

class DeveloperInfoUpdateCmd extends Model
{
    /**
     * @var string
     */
    public $accountId;

    /**
     * @var string
     */
    public $email;

    /**
     * @var int
     */
    public $enterpriseId;

    /**
     * @var string
     */
    public $name;

    /**
     * @var string
     */
    public $phone;
    protected $_name = [
        'accountId' => 'accountId',
        'email' => 'email',
        'enterpriseId' => 'enterpriseId',
        'name' => 'name',
        'phone' => 'phone',
    ];

    public function validate()
    {
        parent::validate();
    }

    public function toArray($noStream = false)
    {
        $res = [];
        if (null !== $this->accountId) {
            $res['accountId'] = $this->accountId;
        }

        if (null !== $this->email) {
            $res['email'] = $this->email;
        }

        if (null !== $this->enterpriseId) {
            $res['enterpriseId'] = $this->enterpriseId;
        }

        if (null !== $this->name) {
            $res['name'] = $this->name;
        }

        if (null !== $this->phone) {
            $res['phone'] = $this->phone;
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
        if (isset($map['accountId'])) {
            $model->accountId = $map['accountId'];
        }

        if (isset($map['email'])) {
            $model->email = $map['email'];
        }

        if (isset($map['enterpriseId'])) {
            $model->enterpriseId = $map['enterpriseId'];
        }

        if (isset($map['name'])) {
            $model->name = $map['name'];
        }

        if (isset($map['phone'])) {
            $model->phone = $map['phone'];
        }

        return $model;
    }
}
