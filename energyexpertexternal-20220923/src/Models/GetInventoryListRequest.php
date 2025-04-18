<?php

// This file is auto-generated, don't edit it. Thanks.

namespace AlibabaCloud\SDK\EnergyExpertExternal\V20220923\Models;

use AlibabaCloud\Dara\Model;

class GetInventoryListRequest extends Model
{
    /**
     * @var string
     */
    public $code;

    /**
     * @var string
     */
    public $emissionType;

    /**
     * @var string
     */
    public $group;

    /**
     * @var string
     */
    public $methodType;

    /**
     * @var int
     */
    public $productId;

    /**
     * @var int
     */
    public $productType;
    protected $_name = [
        'code' => 'code',
        'emissionType' => 'emissionType',
        'group' => 'group',
        'methodType' => 'methodType',
        'productId' => 'productId',
        'productType' => 'productType',
    ];

    public function validate()
    {
        parent::validate();
    }

    public function toArray($noStream = false)
    {
        $res = [];
        if (null !== $this->code) {
            $res['code'] = $this->code;
        }

        if (null !== $this->emissionType) {
            $res['emissionType'] = $this->emissionType;
        }

        if (null !== $this->group) {
            $res['group'] = $this->group;
        }

        if (null !== $this->methodType) {
            $res['methodType'] = $this->methodType;
        }

        if (null !== $this->productId) {
            $res['productId'] = $this->productId;
        }

        if (null !== $this->productType) {
            $res['productType'] = $this->productType;
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
        if (isset($map['code'])) {
            $model->code = $map['code'];
        }

        if (isset($map['emissionType'])) {
            $model->emissionType = $map['emissionType'];
        }

        if (isset($map['group'])) {
            $model->group = $map['group'];
        }

        if (isset($map['methodType'])) {
            $model->methodType = $map['methodType'];
        }

        if (isset($map['productId'])) {
            $model->productId = $map['productId'];
        }

        if (isset($map['productType'])) {
            $model->productType = $map['productType'];
        }

        return $model;
    }
}
