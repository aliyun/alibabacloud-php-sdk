<?php

// This file is auto-generated, don't edit it. Thanks.

namespace AlibabaCloud\SDK\BssOpenApi\V20171214\Models;

use AlibabaCloud\SDK\BssOpenApi\V20171214\Models\RenewChangeInstanceRequest\parameter;
use AlibabaCloud\Tea\Model;

class RenewChangeInstanceRequest extends Model
{
    /**
     * @example JASIOFKVNVIXXXXXX
     *
     * @var string
     */
    public $clientToken;

    /**
     * @description This parameter is required.
     *
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
     * @var parameter[]
     */
    public $parameter;

    /**
     * @description This parameter is required.
     *
     * @example rds
     *
     * @var string
     */
    public $productCode;

    /**
     * @example rds
     *
     * @var string
     */
    public $productType;

    /**
     * @description This parameter is required.
     *
     * @example 2
     *
     * @var int
     */
    public $renewPeriod;
    protected $_name = [
        'clientToken' => 'ClientToken',
        'instanceId'  => 'InstanceId',
        'ownerId'     => 'OwnerId',
        'parameter'   => 'Parameter',
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
        if (null !== $this->parameter) {
            $res['Parameter'] = [];
            if (null !== $this->parameter && \is_array($this->parameter)) {
                $n = 0;
                foreach ($this->parameter as $item) {
                    $res['Parameter'][$n++] = null !== $item ? $item->toMap() : $item;
                }
            }
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
     * @return RenewChangeInstanceRequest
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
        if (isset($map['Parameter'])) {
            if (!empty($map['Parameter'])) {
                $model->parameter = [];
                $n                = 0;
                foreach ($map['Parameter'] as $item) {
                    $model->parameter[$n++] = null !== $item ? parameter::fromMap($item) : $item;
                }
            }
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
