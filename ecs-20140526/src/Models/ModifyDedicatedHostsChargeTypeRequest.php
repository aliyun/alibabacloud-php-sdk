<?php

// This file is auto-generated, don't edit it. Thanks.

namespace AlibabaCloud\SDK\Ecs\V20140526\Models;

use AlibabaCloud\Tea\Model;

class ModifyDedicatedHostsChargeTypeRequest extends Model
{
    /**
     * @description Specifies whether to enable automatic payment. Valid values:
     *
     *   true: enables automatic payment. Make sure that your account balance is sufficient. Otherwise, your order becomes invalid and must be canceled.
     *   false: An order is generated but no payment is made.
     *
     * >  If your account balance is insufficient, you can set the `AutoPay` parameter to `false` to generate an unpaid order. Then, you can pay for the order.
     * @example false
     *
     * @var bool
     */
    public $autoPay;

    /**
     * @description The client token that is used to ensure the idempotence of the request. You can use the client to generate the value, but you must make sure that the value is unique among different requests. The `ClientToken` value can contain only ASCII characters and cannot exceed 64 characters in length. For more information, see [How to ensure idempotence](~~25693~~).
     *
     * @example e4567-e89b-12d3-a456-426655440000
     *
     * @var string
     */
    public $clientToken;

    /**
     * @description The new billing method for the dedicated host. Valid values:
     *
     *   PrePaid: changes the billing method from pay-as-you-go to subscription.
     *   PostPaid: changes the billing method from subscription to pay-as-you-go.
     *
     * Default value: PrePaid.
     * @example PrePaid
     *
     * @var string
     */
    public $dedicatedHostChargeType;

    /**
     * @description The IDs of dedicated hosts. The value can be a JSON array that consists of up to 20 dedicated host IDs. Separate the dedicated host IDs with commas (,).
     *
     * @example ["dh-bp181e5064b5sotr****","dh-bp18064b5sotrr9c****"]
     *
     * @var string
     */
    public $dedicatedHostIds;

    /**
     * @description Specifies whether to return the billing details of the order when the billing method is changed from subscription to pay-as-you-go.
     *
     * Default value: false.
     * @example false
     *
     * @var bool
     */
    public $detailFee;

    /**
     * @description Specifies whether to check the validity of the request without actually making the request. Valid values:
     *
     *   true: The validity of the request is checked but the request is not made. Check items include whether your AccessKey pair is valid, whether RAM users are granted required permissions, and whether the required parameters are specified. If the check fails, the corresponding error is returned. If the check succeeds, the `DryRunOperation` error code is returned.
     *   false: The validity of the request is checked. If the check succeeds, a 2XX HTTP status code is returned, and the request is made.
     *
     * Default value: false.
     * @example false
     *
     * @var bool
     */
    public $dryRun;

    /**
     * @var string
     */
    public $ownerAccount;

    /**
     * @var int
     */
    public $ownerId;

    /**
     * @description The renewal duration of the subscription dedicated host. Valid values:
     *
     *   When `PeriodUnit` is set to Week, valid values of `Period` are 1, 2, 3, and 4.
     *   When `PeriodUnit` is set to Month, valid values of `Period` are 1, 2, 3, 4, 5, 6, 7, 8, 9, 12, 24, 36, 48, and 60.
     *
     * @example 1
     *
     * @var int
     */
    public $period;

    /**
     * @description The unit of the renewal duration (`Period`). Valid values:
     *
     *   Week
     *   Month
     *
     * Default value: Month.
     * @example Month
     *
     * @var string
     */
    public $periodUnit;

    /**
     * @description The region ID of the dedicated host. You can call the [DescribeRegions](~~25609~~) operation to query the most recent region list.
     *
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
        'autoPay'                 => 'AutoPay',
        'clientToken'             => 'ClientToken',
        'dedicatedHostChargeType' => 'DedicatedHostChargeType',
        'dedicatedHostIds'        => 'DedicatedHostIds',
        'detailFee'               => 'DetailFee',
        'dryRun'                  => 'DryRun',
        'ownerAccount'            => 'OwnerAccount',
        'ownerId'                 => 'OwnerId',
        'period'                  => 'Period',
        'periodUnit'              => 'PeriodUnit',
        'regionId'                => 'RegionId',
        'resourceOwnerAccount'    => 'ResourceOwnerAccount',
        'resourceOwnerId'         => 'ResourceOwnerId',
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
        if (null !== $this->clientToken) {
            $res['ClientToken'] = $this->clientToken;
        }
        if (null !== $this->dedicatedHostChargeType) {
            $res['DedicatedHostChargeType'] = $this->dedicatedHostChargeType;
        }
        if (null !== $this->dedicatedHostIds) {
            $res['DedicatedHostIds'] = $this->dedicatedHostIds;
        }
        if (null !== $this->detailFee) {
            $res['DetailFee'] = $this->detailFee;
        }
        if (null !== $this->dryRun) {
            $res['DryRun'] = $this->dryRun;
        }
        if (null !== $this->ownerAccount) {
            $res['OwnerAccount'] = $this->ownerAccount;
        }
        if (null !== $this->ownerId) {
            $res['OwnerId'] = $this->ownerId;
        }
        if (null !== $this->period) {
            $res['Period'] = $this->period;
        }
        if (null !== $this->periodUnit) {
            $res['PeriodUnit'] = $this->periodUnit;
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
     * @return ModifyDedicatedHostsChargeTypeRequest
     */
    public static function fromMap($map = [])
    {
        $model = new self();
        if (isset($map['AutoPay'])) {
            $model->autoPay = $map['AutoPay'];
        }
        if (isset($map['ClientToken'])) {
            $model->clientToken = $map['ClientToken'];
        }
        if (isset($map['DedicatedHostChargeType'])) {
            $model->dedicatedHostChargeType = $map['DedicatedHostChargeType'];
        }
        if (isset($map['DedicatedHostIds'])) {
            $model->dedicatedHostIds = $map['DedicatedHostIds'];
        }
        if (isset($map['DetailFee'])) {
            $model->detailFee = $map['DetailFee'];
        }
        if (isset($map['DryRun'])) {
            $model->dryRun = $map['DryRun'];
        }
        if (isset($map['OwnerAccount'])) {
            $model->ownerAccount = $map['OwnerAccount'];
        }
        if (isset($map['OwnerId'])) {
            $model->ownerId = $map['OwnerId'];
        }
        if (isset($map['Period'])) {
            $model->period = $map['Period'];
        }
        if (isset($map['PeriodUnit'])) {
            $model->periodUnit = $map['PeriodUnit'];
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
