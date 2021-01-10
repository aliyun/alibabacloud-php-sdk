<?php

// This file is auto-generated, don't edit it. Thanks.

namespace AlibabaCloud\SDK\Live\V20161101\Models;

use AlibabaCloud\Tea\Model;

class CreateCasterRequest extends Model
{
    /**
     * @var int
     */
    public $ownerId;

    /**
     * @var string
     */
    public $casterName;

    /**
     * @var string
     */
    public $clientToken;

    /**
     * @var int
     */
    public $normType;

    /**
     * @var string
     */
    public $chargeType;

    /**
     * @var string
     */
    public $purchaseTime;

    /**
     * @var string
     */
    public $expireTime;

    /**
     * @var string
     */
    public $casterTemplate;
    protected $_name = [
        'ownerId'        => 'OwnerId',
        'casterName'     => 'CasterName',
        'clientToken'    => 'ClientToken',
        'normType'       => 'NormType',
        'chargeType'     => 'ChargeType',
        'purchaseTime'   => 'PurchaseTime',
        'expireTime'     => 'ExpireTime',
        'casterTemplate' => 'CasterTemplate',
    ];

    public function validate()
    {
    }

    public function toMap()
    {
        $res = [];
        if (null !== $this->ownerId) {
            $res['OwnerId'] = $this->ownerId;
        }
        if (null !== $this->casterName) {
            $res['CasterName'] = $this->casterName;
        }
        if (null !== $this->clientToken) {
            $res['ClientToken'] = $this->clientToken;
        }
        if (null !== $this->normType) {
            $res['NormType'] = $this->normType;
        }
        if (null !== $this->chargeType) {
            $res['ChargeType'] = $this->chargeType;
        }
        if (null !== $this->purchaseTime) {
            $res['PurchaseTime'] = $this->purchaseTime;
        }
        if (null !== $this->expireTime) {
            $res['ExpireTime'] = $this->expireTime;
        }
        if (null !== $this->casterTemplate) {
            $res['CasterTemplate'] = $this->casterTemplate;
        }

        return $res;
    }

    /**
     * @param array $map
     *
     * @return CreateCasterRequest
     */
    public static function fromMap($map = [])
    {
        $model = new self();
        if (isset($map['OwnerId'])) {
            $model->ownerId = $map['OwnerId'];
        }
        if (isset($map['CasterName'])) {
            $model->casterName = $map['CasterName'];
        }
        if (isset($map['ClientToken'])) {
            $model->clientToken = $map['ClientToken'];
        }
        if (isset($map['NormType'])) {
            $model->normType = $map['NormType'];
        }
        if (isset($map['ChargeType'])) {
            $model->chargeType = $map['ChargeType'];
        }
        if (isset($map['PurchaseTime'])) {
            $model->purchaseTime = $map['PurchaseTime'];
        }
        if (isset($map['ExpireTime'])) {
            $model->expireTime = $map['ExpireTime'];
        }
        if (isset($map['CasterTemplate'])) {
            $model->casterTemplate = $map['CasterTemplate'];
        }

        return $model;
    }
}
