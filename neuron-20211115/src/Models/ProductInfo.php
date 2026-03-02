<?php

// This file is auto-generated, don't edit it. Thanks.

namespace AlibabaCloud\SDK\Neuron\V20211115\Models;

use AlibabaCloud\Dara\Model;

class ProductInfo extends Model
{
    /**
     * @var string
     */
    public $accountId;

    /**
     * @var int
     */
    public $companyId;

    /**
     * @var int
     */
    public $id;

    /**
     * @var bool
     */
    public $isAuthorized;

    /**
     * @var string
     */
    public $name;
    protected $_name = [
        'accountId' => 'accountId',
        'companyId' => 'companyId',
        'id' => 'id',
        'isAuthorized' => 'isAuthorized',
        'name' => 'name',
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

        if (null !== $this->companyId) {
            $res['companyId'] = $this->companyId;
        }

        if (null !== $this->id) {
            $res['id'] = $this->id;
        }

        if (null !== $this->isAuthorized) {
            $res['isAuthorized'] = $this->isAuthorized;
        }

        if (null !== $this->name) {
            $res['name'] = $this->name;
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

        if (isset($map['companyId'])) {
            $model->companyId = $map['companyId'];
        }

        if (isset($map['id'])) {
            $model->id = $map['id'];
        }

        if (isset($map['isAuthorized'])) {
            $model->isAuthorized = $map['isAuthorized'];
        }

        if (isset($map['name'])) {
            $model->name = $map['name'];
        }

        return $model;
    }
}
