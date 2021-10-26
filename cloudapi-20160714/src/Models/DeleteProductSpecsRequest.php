<?php

// This file is auto-generated, don't edit it. Thanks.

namespace AlibabaCloud\SDK\CloudAPI\V20160714\Models;

use AlibabaCloud\Tea\Model;

class DeleteProductSpecsRequest extends Model
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
     * @var string[]
     */
    public $specCode;
    protected $_name = [
        'securityToken' => 'SecurityToken',
        'productId'     => 'ProductId',
        'specCode'      => 'SpecCode',
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
        if (null !== $this->specCode) {
            $res['SpecCode'] = $this->specCode;
        }

        return $res;
    }

    /**
     * @param array $map
     *
     * @return DeleteProductSpecsRequest
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
        if (isset($map['SpecCode'])) {
            if (!empty($map['SpecCode'])) {
                $model->specCode = $map['SpecCode'];
            }
        }

        return $model;
    }
}
