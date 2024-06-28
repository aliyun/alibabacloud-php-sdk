<?php

// This file is auto-generated, don't edit it. Thanks.

namespace AlibabaCloud\SDK\BssOpenApi\V20171214\Models;

use AlibabaCloud\SDK\BssOpenApi\V20171214\Models\ModifyInstanceRequest\parameter;
use AlibabaCloud\Tea\Model;

class ModifyInstanceRequest extends Model
{
    /**
     * @description The client token that is used to ensure the idempotence of the request. You can use the client to generate the value, but you must ensure that it is unique among different requests.
     *
     * @example JAKSJFHFAKJSF
     *
     * @var string
     */
    public $clientToken;

    /**
     * @description The ID of the instance for which you want to modify the configurations.
     *
     * @example rm-akjhkdsjhfskjfhd
     *
     * @var string
     */
    public $instanceId;

    /**
     * @description The type of configuration modifications. Valid values:
     *
     *   Upgrade: upgrades the configurations of the instance.
     *   Downgrade: downgrades the configurations of the instance.
     *
     * This parameter is required.
     * @example Upgrade
     *
     * @var string
     */
    public $modifyType;

    /**
     * @var int
     */
    public $ownerId;

    /**
     * @description The details about the parameters.
     *
     * @var parameter[]
     */
    public $parameter;

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
     * @description The type of the service to which the instance belongs.
     *
     * @example rds
     *
     * @var string
     */
    public $productType;

    /**
     * @description The billing method. Valid values:
     *
     *   Subscription: subscription
     *   PayAsYouGo: pay-as-you-go
     *
     * This parameter is required.
     * @example Subscription
     *
     * @var string
     */
    public $subscriptionType;
    protected $_name = [
        'clientToken'      => 'ClientToken',
        'instanceId'       => 'InstanceId',
        'modifyType'       => 'ModifyType',
        'ownerId'          => 'OwnerId',
        'parameter'        => 'Parameter',
        'productCode'      => 'ProductCode',
        'productType'      => 'ProductType',
        'subscriptionType' => 'SubscriptionType',
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
        if (null !== $this->modifyType) {
            $res['ModifyType'] = $this->modifyType;
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
        if (null !== $this->subscriptionType) {
            $res['SubscriptionType'] = $this->subscriptionType;
        }

        return $res;
    }

    /**
     * @param array $map
     *
     * @return ModifyInstanceRequest
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
        if (isset($map['ModifyType'])) {
            $model->modifyType = $map['ModifyType'];
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
        if (isset($map['SubscriptionType'])) {
            $model->subscriptionType = $map['SubscriptionType'];
        }

        return $model;
    }
}
