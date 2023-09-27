<?php

// This file is auto-generated, don't edit it. Thanks.

namespace AlibabaCloud\SDK\CloudAPI\V20180601\Models;

use AlibabaCloud\Tea\Model;

class CreateInstanceRequest extends Model
{
    /**
     * @var int
     */
    public $accountQuantity;

    /**
     * @var string
     */
    public $expiredOn;

    /**
     * @var string
     */
    public $securityToken;

    /**
     * @var string
     */
    public $skuId;

    /**
     * @var string
     */
    public $token;
    protected $_name = [
        'accountQuantity' => 'AccountQuantity',
        'expiredOn'       => 'ExpiredOn',
        'securityToken'   => 'SecurityToken',
        'skuId'           => 'SkuId',
        'token'           => 'Token',
    ];

    public function validate()
    {
    }

    public function toMap()
    {
        $res = [];
        if (null !== $this->accountQuantity) {
            $res['AccountQuantity'] = $this->accountQuantity;
        }
        if (null !== $this->expiredOn) {
            $res['ExpiredOn'] = $this->expiredOn;
        }
        if (null !== $this->securityToken) {
            $res['SecurityToken'] = $this->securityToken;
        }
        if (null !== $this->skuId) {
            $res['SkuId'] = $this->skuId;
        }
        if (null !== $this->token) {
            $res['Token'] = $this->token;
        }

        return $res;
    }

    /**
     * @param array $map
     *
     * @return CreateInstanceRequest
     */
    public static function fromMap($map = [])
    {
        $model = new self();
        if (isset($map['AccountQuantity'])) {
            $model->accountQuantity = $map['AccountQuantity'];
        }
        if (isset($map['ExpiredOn'])) {
            $model->expiredOn = $map['ExpiredOn'];
        }
        if (isset($map['SecurityToken'])) {
            $model->securityToken = $map['SecurityToken'];
        }
        if (isset($map['SkuId'])) {
            $model->skuId = $map['SkuId'];
        }
        if (isset($map['Token'])) {
            $model->token = $map['Token'];
        }

        return $model;
    }
}
