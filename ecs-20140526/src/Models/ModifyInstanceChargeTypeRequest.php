<?php

// This file is auto-generated, don't edit it. Thanks.

namespace AlibabaCloud\SDK\Ecs\V20140526\Models;

use AlibabaCloud\Tea\Model;

class ModifyInstanceChargeTypeRequest extends Model
{
    /**
     * @description Specifies whether to automatically complete the payment. Valid values:
     *
     *   true: The payment is automatically completed. Make sure that the balance in your account is sufficient. Otherwise, your order becomes invalid and is canceled.
     *   false: An order is generated but no payment is made.
     *
     * > If your account balance is insufficient, you can set the AutoPay parameter to false to generate an unpaid order. Then, you can log on to the ECS console to pay for the order.
     * @example false
     *
     * @var bool
     */
    public $autoPay;

    /**
     * @description The client token that is used to ensure the idempotence of the request. You can use the client to generate the token, but make sure that the token is unique among different requests. The **token** can contain only ASCII characters and cannot exceed 64 characters in length. For more information, see [How to ensure idempotence](~~25693~~).
     *
     * @example 123e4567-e89b-12d3-a456-426655440000
     *
     * @var string
     */
    public $clientToken;

    /**
     * @description Specifies whether to perform a dry run. Valid values:
     *
     *   true: performs a dry run. The system checks the AccessKey pair, the permissions of the RAM user, and the required parameters. If the request fails the dry run, an error message is returned. If the request passes the dry run, the `DryRunOperation` error code is returned.
     *   false: performs a dry run and sends the request. If the request passes the dry run, a 2xx HTTP status code is returned and the operation is performed.
     *
     * Default value: false.
     * @example false
     *
     * @var bool
     */
    public $dryRun;

    /**
     * @description Specifies whether to change the billing method of all data disks attached to the instance from pay-as-you-go to subscription.
     *
     * Default value: false.
     * @example false
     *
     * @var bool
     */
    public $includeDataDisks;

    /**
     * @description The new billing method. Valid values:
     *
     *   PrePaid: the subscription billing method
     *   PostPaid: the pay-as-you-go billing method
     *
     * Default value: PrePaid.
     * @example PrePaid
     *
     * @var string
     */
    public $instanceChargeType;

    /**
     * @description The ID of the instance. The value can be a JSON array that consists of up to 20 instance IDs. Separate the instance IDs with commas (,).
     *
     * @example ["i-bp67acfmxazb4p****","i-bp67acfmxazb4d****"]
     *
     * @var string
     */
    public $instanceIds;

    /**
     * @description Specifies whether to return cost details of the order after the billing method is changed from subscription to pay-as-you-go.
     *
     * Default value: false.
     * @example false
     *
     * @var bool
     */
    public $isDetailFee;

    /**
     * @var string
     */
    public $ownerAccount;

    /**
     * @var int
     */
    public $ownerId;

    /**
     * @description The renewal duration of the subscription instance. If the instance is hosted on a dedicated host, the renewal duration of the instance cannot exceed the subscription duration of the dedicated host. Valid values:
     *
     * Valid values when the `PeriodUnit` parameter is set to Month: `1, 2, 3, 4, 5, 6, 7, 8, 9, and 12`.
     * @example 1
     *
     * @var int
     */
    public $period;

    /**
     * @description The unit of the renewal duration specified by the `Period` parameter. Valid values:
     *
     * Default value: Month.
     * @example Month
     *
     * @var string
     */
    public $periodUnit;

    /**
     * @description The region ID of the instance. You can call the [DescribeRegions](~~25609~~) operation to query the most recent list of regions.
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
        'autoPay'              => 'AutoPay',
        'clientToken'          => 'ClientToken',
        'dryRun'               => 'DryRun',
        'includeDataDisks'     => 'IncludeDataDisks',
        'instanceChargeType'   => 'InstanceChargeType',
        'instanceIds'          => 'InstanceIds',
        'isDetailFee'          => 'IsDetailFee',
        'ownerAccount'         => 'OwnerAccount',
        'ownerId'              => 'OwnerId',
        'period'               => 'Period',
        'periodUnit'           => 'PeriodUnit',
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
        if (null !== $this->clientToken) {
            $res['ClientToken'] = $this->clientToken;
        }
        if (null !== $this->dryRun) {
            $res['DryRun'] = $this->dryRun;
        }
        if (null !== $this->includeDataDisks) {
            $res['IncludeDataDisks'] = $this->includeDataDisks;
        }
        if (null !== $this->instanceChargeType) {
            $res['InstanceChargeType'] = $this->instanceChargeType;
        }
        if (null !== $this->instanceIds) {
            $res['InstanceIds'] = $this->instanceIds;
        }
        if (null !== $this->isDetailFee) {
            $res['IsDetailFee'] = $this->isDetailFee;
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
     * @return ModifyInstanceChargeTypeRequest
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
        if (isset($map['DryRun'])) {
            $model->dryRun = $map['DryRun'];
        }
        if (isset($map['IncludeDataDisks'])) {
            $model->includeDataDisks = $map['IncludeDataDisks'];
        }
        if (isset($map['InstanceChargeType'])) {
            $model->instanceChargeType = $map['InstanceChargeType'];
        }
        if (isset($map['InstanceIds'])) {
            $model->instanceIds = $map['InstanceIds'];
        }
        if (isset($map['IsDetailFee'])) {
            $model->isDetailFee = $map['IsDetailFee'];
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
