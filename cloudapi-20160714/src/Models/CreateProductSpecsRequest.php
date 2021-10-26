<?php

// This file is auto-generated, don't edit it. Thanks.

namespace AlibabaCloud\SDK\CloudAPI\V20160714\Models;

use AlibabaCloud\Tea\Model;

class CreateProductSpecsRequest extends Model
{
    /**
     * @var string
     */
    public $securityToken;

    /**
     * @var int
     */
    public $productId;

    /**
     * @var string
     */
    public $name;

    /**
     * @var int
     */
    public $type;

    /**
     * @var bool
     */
    public $isHide;

    /**
     * @var int
     */
    public $unit;

    /**
     * @var int
     */
    public $rpsValue;

    /**
     * @var int
     */
    public $quotaValue;

    /**
     * @var int
     */
    public $lifeCycle;
    protected $_name = [
        'securityToken' => 'SecurityToken',
        'productId'     => 'ProductId',
        'name'          => 'Name',
        'type'          => 'Type',
        'isHide'        => 'IsHide',
        'unit'          => 'Unit',
        'rpsValue'      => 'RpsValue',
        'quotaValue'    => 'QuotaValue',
        'lifeCycle'     => 'LifeCycle',
    ];

    public function validate()
    {
    }

    public function toMap()
    {
        $res = [];
        if (null !== $this->securityToken) {
            $res['SecurityToken'] = $this->securityToken;
        }
        if (null !== $this->productId) {
            $res['ProductId'] = $this->productId;
        }
        if (null !== $this->name) {
            $res['Name'] = $this->name;
        }
        if (null !== $this->type) {
            $res['Type'] = $this->type;
        }
        if (null !== $this->isHide) {
            $res['IsHide'] = $this->isHide;
        }
        if (null !== $this->unit) {
            $res['Unit'] = $this->unit;
        }
        if (null !== $this->rpsValue) {
            $res['RpsValue'] = $this->rpsValue;
        }
        if (null !== $this->quotaValue) {
            $res['QuotaValue'] = $this->quotaValue;
        }
        if (null !== $this->lifeCycle) {
            $res['LifeCycle'] = $this->lifeCycle;
        }

        return $res;
    }

    /**
     * @param array $map
     *
     * @return CreateProductSpecsRequest
     */
    public static function fromMap($map = [])
    {
        $model = new self();
        if (isset($map['SecurityToken'])) {
            $model->securityToken = $map['SecurityToken'];
        }
        if (isset($map['ProductId'])) {
            $model->productId = $map['ProductId'];
        }
        if (isset($map['Name'])) {
            $model->name = $map['Name'];
        }
        if (isset($map['Type'])) {
            $model->type = $map['Type'];
        }
        if (isset($map['IsHide'])) {
            $model->isHide = $map['IsHide'];
        }
        if (isset($map['Unit'])) {
            $model->unit = $map['Unit'];
        }
        if (isset($map['RpsValue'])) {
            $model->rpsValue = $map['RpsValue'];
        }
        if (isset($map['QuotaValue'])) {
            $model->quotaValue = $map['QuotaValue'];
        }
        if (isset($map['LifeCycle'])) {
            $model->lifeCycle = $map['LifeCycle'];
        }

        return $model;
    }
}
