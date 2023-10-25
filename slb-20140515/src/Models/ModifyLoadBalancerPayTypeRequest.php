<?php

// This file is auto-generated, don't edit it. Thanks.

namespace AlibabaCloud\SDK\Slb\V20140515\Models;

use AlibabaCloud\Tea\Model;

class ModifyLoadBalancerPayTypeRequest extends Model
{
    /**
     * @description Specifies whether to enable automatic payment. Valid values:
     *
     *   **true**: yes
     *   **false** (default): no
     *
     * >  This parameter is valid only when the `PayType` parameter is set to **PrePay**. This parameter is valid only for pay-as-you-go instances.
     * @example false
     *
     * @var bool
     */
    public $autoPay;

    /**
     * @description The subscription duration.
     *
     *   If **PricingCycle** is set to **month**, the valid values are **1** to **9**.
     *   If **PricingCycle** is set to **year**, the valid values are **1** to **3**.
     *
     * >  This parameter is valid only when the **PayType** parameter is set to **PrePay**. This parameter is valid only for pay-as-you-go instances.
     * @example 1
     *
     * @var int
     */
    public $duration;

    /**
     * @description The ID of the CLB instance.
     *
     * @example lb-bp1b6c719dfa08ex*****
     *
     * @var string
     */
    public $loadBalancerId;

    /**
     * @var string
     */
    public $ownerAccount;

    /**
     * @var int
     */
    public $ownerId;

    /**
     * @description The billing method of the CLB instance. Valid values:
     *
     *   **PayOnDemand** (default): pay-as-you-go
     *
     * To change the billing method of a pay-as-you-go CLB instance to subscription, you must set the parameter to **PrePay**. In addition, the previous billing method of the CLB instance must be **PayOnDemand**.
     * @example PrePay
     *
     * @var string
     */
    public $payType;

    /**
     * @description The billing cycle.
     *
     * Valid values: **year** and **month**.
     *
     * >  This parameter is valid only when the **PayType** parameter is set to **PrePay**. This parameter is valid only for pay-as-you-go instances.
     * @example month
     *
     * @var string
     */
    public $pricingCycle;

    /**
     * @description The ID of the region where the CLB instance is deployed.
     *
     * You can query the region ID from the [Regions and zones](~~40654~~) list or by calling the [DescribeRegions](~~25609~~) operation.
     * @example cn-hangzhou
     *
     * @var string
     */
    public $regionId;

    /**
     * @var string
     */
    public $resourceOwnerAccount;

    /**
     * @var int
     */
    public $resourceOwnerId;
    protected $_name = [
        'autoPay'              => 'AutoPay',
        'duration'             => 'Duration',
        'loadBalancerId'       => 'LoadBalancerId',
        'ownerAccount'         => 'OwnerAccount',
        'ownerId'              => 'OwnerId',
        'payType'              => 'PayType',
        'pricingCycle'         => 'PricingCycle',
        'regionId'             => 'RegionId',
        'resourceOwnerAccount' => 'ResourceOwnerAccount',
        'resourceOwnerId'      => 'ResourceOwnerId',
    ];

    public function validate()
    {
    }

    public function toMap()
    {
        $res = [];
        if (null !== $this->autoPay) {
            $res['AutoPay'] = $this->autoPay;
        }
        if (null !== $this->duration) {
            $res['Duration'] = $this->duration;
        }
        if (null !== $this->loadBalancerId) {
            $res['LoadBalancerId'] = $this->loadBalancerId;
        }
        if (null !== $this->ownerAccount) {
            $res['OwnerAccount'] = $this->ownerAccount;
        }
        if (null !== $this->ownerId) {
            $res['OwnerId'] = $this->ownerId;
        }
        if (null !== $this->payType) {
            $res['PayType'] = $this->payType;
        }
        if (null !== $this->pricingCycle) {
            $res['PricingCycle'] = $this->pricingCycle;
        }
        if (null !== $this->regionId) {
            $res['RegionId'] = $this->regionId;
        }
        if (null !== $this->resourceOwnerAccount) {
            $res['ResourceOwnerAccount'] = $this->resourceOwnerAccount;
        }
        if (null !== $this->resourceOwnerId) {
            $res['ResourceOwnerId'] = $this->resourceOwnerId;
        }

        return $res;
    }

    /**
     * @param array $map
     *
     * @return ModifyLoadBalancerPayTypeRequest
     */
    public static function fromMap($map = [])
    {
        $model = new self();
        if (isset($map['AutoPay'])) {
            $model->autoPay = $map['AutoPay'];
        }
        if (isset($map['Duration'])) {
            $model->duration = $map['Duration'];
        }
        if (isset($map['LoadBalancerId'])) {
            $model->loadBalancerId = $map['LoadBalancerId'];
        }
        if (isset($map['OwnerAccount'])) {
            $model->ownerAccount = $map['OwnerAccount'];
        }
        if (isset($map['OwnerId'])) {
            $model->ownerId = $map['OwnerId'];
        }
        if (isset($map['PayType'])) {
            $model->payType = $map['PayType'];
        }
        if (isset($map['PricingCycle'])) {
            $model->pricingCycle = $map['PricingCycle'];
        }
        if (isset($map['RegionId'])) {
            $model->regionId = $map['RegionId'];
        }
        if (isset($map['ResourceOwnerAccount'])) {
            $model->resourceOwnerAccount = $map['ResourceOwnerAccount'];
        }
        if (isset($map['ResourceOwnerId'])) {
            $model->resourceOwnerId = $map['ResourceOwnerId'];
        }

        return $model;
    }
}
