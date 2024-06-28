<?php

// This file is auto-generated, don't edit it. Thanks.

namespace AlibabaCloud\SDK\BssOpenApi\V20171214\Models;

use AlibabaCloud\Tea\Model;

class RenewInstanceRequest extends Model
{
    /**
     * @description The client token that is used to ensure the idempotence of the request.
     *
     * @example ASKJHKLASJHAFSLKJH
     *
     * @var string
     */
    public $clientToken;

    /**
     * @description The ID of the instance
     *
     * This parameter is required.
     * @example rm-skjdhaskjdh
     *
     * @var string
     */
    public $instanceId;

    /**
     * @var int
     */
    public $ownerId;

    /**
     * @description The code of the service to which the instance belongs.
     *
     * This parameter is required.
     * @example rds
     *
     * @var string
     */
    public $productCode;

    /**
     * @description The type of the service.
     *
     * @example rds
     *
     * @var string
     */
    public $productType;

    /**
     * @description The duration of the subscription renewal. Unit: months. Valid values:
     *
     *   1 to 9
     *   12
     *   24
     *   36
     *
     * This parameter is required.
     * @example 6
     *
     * @var int
     */
    public $renewPeriod;
    protected $_name = [
        'clientToken' => 'ClientToken',
        'instanceId'  => 'InstanceId',
        'ownerId'     => 'OwnerId',
        'productCode' => 'ProductCode',
        'productType' => 'ProductType',
        'renewPeriod' => 'RenewPeriod',
    ];

    public function validate()
    {
    }

    public function toMap()
    {
        $res = [];
        if (null !== $this->clientToken) {
            $res['ClientToken'] = $this->clientToken;
        }
        if (null !== $this->instanceId) {
            $res['InstanceId'] = $this->instanceId;
        }
        if (null !== $this->ownerId) {
            $res['OwnerId'] = $this->ownerId;
        }
        if (null !== $this->productCode) {
            $res['ProductCode'] = $this->productCode;
        }
        if (null !== $this->productType) {
            $res['ProductType'] = $this->productType;
        }
        if (null !== $this->renewPeriod) {
            $res['RenewPeriod'] = $this->renewPeriod;
        }

        return $res;
    }

    /**
     * @param array $map
     *
     * @return RenewInstanceRequest
     */
    public static function fromMap($map = [])
    {
        $model = new self();
        if (isset($map['ClientToken'])) {
            $model->clientToken = $map['ClientToken'];
        }
        if (isset($map['InstanceId'])) {
            $model->instanceId = $map['InstanceId'];
        }
        if (isset($map['OwnerId'])) {
            $model->ownerId = $map['OwnerId'];
        }
        if (isset($map['ProductCode'])) {
            $model->productCode = $map['ProductCode'];
        }
        if (isset($map['ProductType'])) {
            $model->productType = $map['ProductType'];
        }
        if (isset($map['RenewPeriod'])) {
            $model->renewPeriod = $map['RenewPeriod'];
        }

        return $model;
    }
}
