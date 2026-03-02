<?php

// This file is auto-generated, don't edit it. Thanks.

namespace AlibabaCloud\SDK\Neuron\V20211115\Models;

use AlibabaCloud\Dara\Model;

class EnvInfoDO extends Model
{
    /**
     * @var string
     */
    public $env;

    /**
     * @var string
     */
    public $envType;

    /**
     * @var string
     */
    public $orgType;

    /**
     * @var int
     */
    public $productId;

    /**
     * @var string
     */
    public $productName;

    /**
     * @var string
     */
    public $region;
    protected $_name = [
        'env' => 'env',
        'envType' => 'envType',
        'orgType' => 'orgType',
        'productId' => 'productId',
        'productName' => 'productName',
        'region' => 'region',
    ];

    public function validate()
    {
        parent::validate();
    }

    public function toArray($noStream = false)
    {
        $res = [];
        if (null !== $this->env) {
            $res['env'] = $this->env;
        }

        if (null !== $this->envType) {
            $res['envType'] = $this->envType;
        }

        if (null !== $this->orgType) {
            $res['orgType'] = $this->orgType;
        }

        if (null !== $this->productId) {
            $res['productId'] = $this->productId;
        }

        if (null !== $this->productName) {
            $res['productName'] = $this->productName;
        }

        if (null !== $this->region) {
            $res['region'] = $this->region;
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
        if (isset($map['env'])) {
            $model->env = $map['env'];
        }

        if (isset($map['envType'])) {
            $model->envType = $map['envType'];
        }

        if (isset($map['orgType'])) {
            $model->orgType = $map['orgType'];
        }

        if (isset($map['productId'])) {
            $model->productId = $map['productId'];
        }

        if (isset($map['productName'])) {
            $model->productName = $map['productName'];
        }

        if (isset($map['region'])) {
            $model->region = $map['region'];
        }

        return $model;
    }
}
