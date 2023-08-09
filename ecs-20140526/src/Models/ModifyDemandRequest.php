<?php

// This file is auto-generated, don't edit it. Thanks.

namespace AlibabaCloud\SDK\Ecs\V20140526\Models;

use AlibabaCloud\Tea\Model;

class ModifyDemandRequest extends Model
{
    /**
     * @description The number of instances. Valid values: 1 to 100000.
     *
     * @example 1
     *
     * @var int
     */
    public $amount;

    /**
     * @description The client token that is used to ensure the idempotence of the request. You can use the client to generate the token, but you must make sure that the token is unique among different requests. The token can only contain ASCII characters and cannot exceed 64 characters in length. For more information, see [How to ensure idempotence](~~25693~~).
     *
     * @example 473469C7-AA6F-4DC5-B3DB-A3DC0DE3C83E
     *
     * @var string
     */
    public $clientToken;

    /**
     * @description The description of the demand. The description must be 2 to 256 characters in length. It cannot start with http:// or https://.
     *
     * @example testDemandDescription
     *
     * @var string
     */
    public $demandDescription;

    /**
     * @description The ID of the demand that you want to modify.
     *
     * @example ed-bp11n21kq00sl71p****
     *
     * @var string
     */
    public $demandId;

    /**
     * @description The name of the demand. The name must be 2 to 128 characters in length. The name must start with a letter but cannot start with [http:// or https://](http://https://). It can contain letters, digits, colons (:), underscores (\_), periods (.), and hyphens (-).
     *
     * The default value is the instance type name.
     * @example testDemandName
     *
     * @var string
     */
    public $demandName;

    /**
     * @description The end time of the subscription period. Specify the time in the [ISO 8601](~~25696~~)standard in the yyyy-MM-dd HH:mm:ss format. The time must be in UTC.
     *
     * in most cases, the interval between StartTime and EndTime cannot be more than 10 days.
     * @example 2019-12-10 12:05:00
     *
     * @var string
     */
    public $endTime;

    /**
     * @description The billing method of the instance. Valid values:
     *
     *   PrePaid: subscription
     *   PostPaid (default): pay-as-you-go
     *
     * @example PrePaid
     *
     * @var string
     */
    public $instanceChargeType;

    /**
     * @description The instance type. For more information, see [Instance families](~~25378~~). You can also call the [DescribeInstanceTypes](~~25620~~) operation to query the performance data of the specified instance type. To learn how to select instance types, see [Select instance types](~~58291~~).
     *
     * @example ecs.c6.large
     *
     * @var string
     */
    public $instanceType;

    /**
     * @var string
     */
    public $ownerAccount;

    /**
     * @var int
     */
    public $ownerId;

    /**
     * @description The subscription period of the resource. Unit: month. You must specify this parameter. This parameter is valid only if you set `InstanceChargeType` to PrePaid. Valid values:
     *
     *   Valid values when PeriodUnit is set to Week: 1, 2, 3, and 4.
     *   Valid values when PeriodUnit is set to Month: 1, 2, 3, 4, 5, 6, 7, 8, 9, 12, 24, 36, 48, and 60.
     *
     * @example 1
     *
     * @var int
     */
    public $period;

    /**
     * @description The unit of the subscription period of the resource. Valid values:
     *
     *   Day
     *   Week
     *   Month. This is the default value.
     *
     * @example Month
     *
     * @var string
     */
    public $periodUnit;

    /**
     * @description The region ID of the instance. You can call the [DescribeRegions](~~25609~~) operation to query the most recent region list.
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

    /**
     * @description The start time of the subscription period. Specify the time in the [ISO 8601](~~25696~~) standard in the yyyy-MM-dd HH:mm:ss format. The time must be in UTC.
     *
     * In most cases, the interval between StartTime and EndTime cannot be more than 10 days.
     * @example 2019-12-01 12:05:00
     *
     * @var string
     */
    public $startTime;

    /**
     * @description The zone ID of the instance. You can call the [DescribeZones](~~25610~~) operation to query the most recent zone list.
     *
     * This parameter is empty by default. If you leave this parameter empty, the system randomly selects a zone.
     * @example cn-hangzhou-g
     *
     * @var string
     */
    public $zoneId;
    protected $_name = [
        'amount'               => 'Amount',
        'clientToken'          => 'ClientToken',
        'demandDescription'    => 'DemandDescription',
        'demandId'             => 'DemandId',
        'demandName'           => 'DemandName',
        'endTime'              => 'EndTime',
        'instanceChargeType'   => 'InstanceChargeType',
        'instanceType'         => 'InstanceType',
        'ownerAccount'         => 'OwnerAccount',
        'ownerId'              => 'OwnerId',
        'period'               => 'Period',
        'periodUnit'           => 'PeriodUnit',
        'regionId'             => 'RegionId',
        'resourceOwnerAccount' => 'ResourceOwnerAccount',
        'resourceOwnerId'      => 'ResourceOwnerId',
        'startTime'            => 'StartTime',
        'zoneId'               => 'ZoneId',
    ];

    public function validate()
    {
    }

    public function toMap()
    {
        $res = [];
        if (null !== $this->amount) {
            $res['Amount'] = $this->amount;
        }
        if (null !== $this->clientToken) {
            $res['ClientToken'] = $this->clientToken;
        }
        if (null !== $this->demandDescription) {
            $res['DemandDescription'] = $this->demandDescription;
        }
        if (null !== $this->demandId) {
            $res['DemandId'] = $this->demandId;
        }
        if (null !== $this->demandName) {
            $res['DemandName'] = $this->demandName;
        }
        if (null !== $this->endTime) {
            $res['EndTime'] = $this->endTime;
        }
        if (null !== $this->instanceChargeType) {
            $res['InstanceChargeType'] = $this->instanceChargeType;
        }
        if (null !== $this->instanceType) {
            $res['InstanceType'] = $this->instanceType;
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
        if (null !== $this->startTime) {
            $res['StartTime'] = $this->startTime;
        }
        if (null !== $this->zoneId) {
            $res['ZoneId'] = $this->zoneId;
        }

        return $res;
    }

    /**
     * @param array $map
     *
     * @return ModifyDemandRequest
     */
    public static function fromMap($map = [])
    {
        $model = new self();
        if (isset($map['Amount'])) {
            $model->amount = $map['Amount'];
        }
        if (isset($map['ClientToken'])) {
            $model->clientToken = $map['ClientToken'];
        }
        if (isset($map['DemandDescription'])) {
            $model->demandDescription = $map['DemandDescription'];
        }
        if (isset($map['DemandId'])) {
            $model->demandId = $map['DemandId'];
        }
        if (isset($map['DemandName'])) {
            $model->demandName = $map['DemandName'];
        }
        if (isset($map['EndTime'])) {
            $model->endTime = $map['EndTime'];
        }
        if (isset($map['InstanceChargeType'])) {
            $model->instanceChargeType = $map['InstanceChargeType'];
        }
        if (isset($map['InstanceType'])) {
            $model->instanceType = $map['InstanceType'];
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
        if (isset($map['StartTime'])) {
            $model->startTime = $map['StartTime'];
        }
        if (isset($map['ZoneId'])) {
            $model->zoneId = $map['ZoneId'];
        }

        return $model;
    }
}
