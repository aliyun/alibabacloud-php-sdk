<?php

// This file is auto-generated, don't edit it. Thanks.

namespace AlibabaCloud\SDK\Ecs\V20140526\Models\DescribeCapacityReservationsResponseBody\capacityReservationSet;

use AlibabaCloud\SDK\Ecs\V20140526\Models\DescribeCapacityReservationsResponseBody\capacityReservationSet\capacityReservationItem\allocatedResources;
use AlibabaCloud\SDK\Ecs\V20140526\Models\DescribeCapacityReservationsResponseBody\capacityReservationSet\capacityReservationItem\tags;
use AlibabaCloud\Tea\Model;

class capacityReservationItem extends Model
{
    /**
     * @description Details of the allocated resources.
     *
     * @var allocatedResources
     */
    public $allocatedResources;

    /**
     * @var string
     */
    public $capacityReservationOwnerId;

    /**
     * @description The description of the capacity reservation.
     *
     * @example This is description.
     *
     * @var string
     */
    public $description;

    /**
     * @description The time when the capacity reservation expires.
     *
     * @example 2021-02-19T03:02Z
     *
     * @var string
     */
    public $endTime;

    /**
     * @description The release mode of the capacity reservation. Valid values:
     *
     *   Limited: The capacity reservation is automatically released at the specified time.
     *   Unlimited: The capacity reservation is manually released. You can release the capacity reservation anytime.
     *
     * @example Unlimited
     *
     * @var string
     */
    public $endTimeType;

    /**
     * @description The billing method of instances in the capacity reservation. Valid values:
     *
     *   PostPaid: pay-as-you-go.
     *   PrePaid: subscription.
     *
     * @example PostPaid
     *
     * @var string
     */
    public $instanceChargeType;

    /**
     * @description The operating system type of the instances. Valid values:
     *
     *   windows: Windows operating systems.
     *   linux: Linux operating systems.
     *
     * @example linux
     *
     * @var string
     */
    public $platform;

    /**
     * @description The ID of the capacity reservation.
     *
     * @example crp-bp1gubrkqutenqdd****
     *
     * @var string
     */
    public $privatePoolOptionsId;

    /**
     * @description The type of the private pool generated after the capacity reservation takes effect. Valid values:
     *
     *   Open: open private pool.
     *   Target: targeted private pool.
     *
     * @example Open
     *
     * @var string
     */
    public $privatePoolOptionsMatchCriteria;

    /**
     * @description The name of the capacity reservation.
     *
     * @example crpTestName
     *
     * @var string
     */
    public $privatePoolOptionsName;

    /**
     * @description The region ID of the capacity reservation.
     *
     * @example cn-hangzhou
     *
     * @var string
     */
    public $regionId;

    /**
     * @description The ID of the reserved instance used with the capacity reservation.
     *
     * @example ri-bpzhex2ulpzf53****
     *
     * @var string
     */
    public $reservedInstanceId;

    /**
     * @description The ID of the resource group to which the capacity reservation belongs.
     *
     * @example rg-bp67acfmxazb4p****
     *
     * @var string
     */
    public $resourceGroupId;

    /**
     * @description The ID of the savings plan used with the capacity reservation.
     *
     * @example spn-c29b5e18pJMT****
     *
     * @var string
     */
    public $savingPlanId;

    /**
     * @description The time when the capacity reservation takes effect.
     *
     * @example 2021-02-19T02:01Z
     *
     * @var string
     */
    public $startTime;

    /**
     * @description The mode in which the capacity reservation takes effect. Valid values:
     *
     *   Now: The capacity reservation takes effect as soon as it is created.
     *   Later: The capacity reservation takes effect at the specified time.
     *
     * @example Now
     *
     * @var string
     */
    public $startTimeType;

    /**
     * @description The state of the capacity reservation. Valid values:
     *
     *   Pending: The capacity reservation is being initialized.
     *   Preparing: The capacity reservation is being prepared.
     *   Prepared: The capacity reservation is to take effect.
     *   Active: The capacity reservation is in effect.
     *   Released: The capacity reservation has been released manually or automatically when it expired.
     *
     * @example Active
     *
     * @var string
     */
    public $status;

    /**
     * @description The tags of the capacity reservation.
     *
     * @var tags
     */
    public $tags;

    /**
     * @description > This parameter is in invitational preview and is not publicly available.
     *
     * @example null
     *
     * @var string
     */
    public $timeSlot;
    protected $_name = [
        'allocatedResources'              => 'AllocatedResources',
        'capacityReservationOwnerId'      => 'CapacityReservationOwnerId',
        'description'                     => 'Description',
        'endTime'                         => 'EndTime',
        'endTimeType'                     => 'EndTimeType',
        'instanceChargeType'              => 'InstanceChargeType',
        'platform'                        => 'Platform',
        'privatePoolOptionsId'            => 'PrivatePoolOptionsId',
        'privatePoolOptionsMatchCriteria' => 'PrivatePoolOptionsMatchCriteria',
        'privatePoolOptionsName'          => 'PrivatePoolOptionsName',
        'regionId'                        => 'RegionId',
        'reservedInstanceId'              => 'ReservedInstanceId',
        'resourceGroupId'                 => 'ResourceGroupId',
        'savingPlanId'                    => 'SavingPlanId',
        'startTime'                       => 'StartTime',
        'startTimeType'                   => 'StartTimeType',
        'status'                          => 'Status',
        'tags'                            => 'Tags',
        'timeSlot'                        => 'TimeSlot',
    ];

    public function validate()
    {
    }

    public function toMap()
    {
        $res = [];
        if (null !== $this->allocatedResources) {
            $res['AllocatedResources'] = null !== $this->allocatedResources ? $this->allocatedResources->toMap() : null;
        }
        if (null !== $this->capacityReservationOwnerId) {
            $res['CapacityReservationOwnerId'] = $this->capacityReservationOwnerId;
        }
        if (null !== $this->description) {
            $res['Description'] = $this->description;
        }
        if (null !== $this->endTime) {
            $res['EndTime'] = $this->endTime;
        }
        if (null !== $this->endTimeType) {
            $res['EndTimeType'] = $this->endTimeType;
        }
        if (null !== $this->instanceChargeType) {
            $res['InstanceChargeType'] = $this->instanceChargeType;
        }
        if (null !== $this->platform) {
            $res['Platform'] = $this->platform;
        }
        if (null !== $this->privatePoolOptionsId) {
            $res['PrivatePoolOptionsId'] = $this->privatePoolOptionsId;
        }
        if (null !== $this->privatePoolOptionsMatchCriteria) {
            $res['PrivatePoolOptionsMatchCriteria'] = $this->privatePoolOptionsMatchCriteria;
        }
        if (null !== $this->privatePoolOptionsName) {
            $res['PrivatePoolOptionsName'] = $this->privatePoolOptionsName;
        }
        if (null !== $this->regionId) {
            $res['RegionId'] = $this->regionId;
        }
        if (null !== $this->reservedInstanceId) {
            $res['ReservedInstanceId'] = $this->reservedInstanceId;
        }
        if (null !== $this->resourceGroupId) {
            $res['ResourceGroupId'] = $this->resourceGroupId;
        }
        if (null !== $this->savingPlanId) {
            $res['SavingPlanId'] = $this->savingPlanId;
        }
        if (null !== $this->startTime) {
            $res['StartTime'] = $this->startTime;
        }
        if (null !== $this->startTimeType) {
            $res['StartTimeType'] = $this->startTimeType;
        }
        if (null !== $this->status) {
            $res['Status'] = $this->status;
        }
        if (null !== $this->tags) {
            $res['Tags'] = null !== $this->tags ? $this->tags->toMap() : null;
        }
        if (null !== $this->timeSlot) {
            $res['TimeSlot'] = $this->timeSlot;
        }

        return $res;
    }

    /**
     * @param array $map
     *
     * @return capacityReservationItem
     */
    public static function fromMap($map = [])
    {
        $model = new self();
        if (isset($map['AllocatedResources'])) {
            $model->allocatedResources = allocatedResources::fromMap($map['AllocatedResources']);
        }
        if (isset($map['CapacityReservationOwnerId'])) {
            $model->capacityReservationOwnerId = $map['CapacityReservationOwnerId'];
        }
        if (isset($map['Description'])) {
            $model->description = $map['Description'];
        }
        if (isset($map['EndTime'])) {
            $model->endTime = $map['EndTime'];
        }
        if (isset($map['EndTimeType'])) {
            $model->endTimeType = $map['EndTimeType'];
        }
        if (isset($map['InstanceChargeType'])) {
            $model->instanceChargeType = $map['InstanceChargeType'];
        }
        if (isset($map['Platform'])) {
            $model->platform = $map['Platform'];
        }
        if (isset($map['PrivatePoolOptionsId'])) {
            $model->privatePoolOptionsId = $map['PrivatePoolOptionsId'];
        }
        if (isset($map['PrivatePoolOptionsMatchCriteria'])) {
            $model->privatePoolOptionsMatchCriteria = $map['PrivatePoolOptionsMatchCriteria'];
        }
        if (isset($map['PrivatePoolOptionsName'])) {
            $model->privatePoolOptionsName = $map['PrivatePoolOptionsName'];
        }
        if (isset($map['RegionId'])) {
            $model->regionId = $map['RegionId'];
        }
        if (isset($map['ReservedInstanceId'])) {
            $model->reservedInstanceId = $map['ReservedInstanceId'];
        }
        if (isset($map['ResourceGroupId'])) {
            $model->resourceGroupId = $map['ResourceGroupId'];
        }
        if (isset($map['SavingPlanId'])) {
            $model->savingPlanId = $map['SavingPlanId'];
        }
        if (isset($map['StartTime'])) {
            $model->startTime = $map['StartTime'];
        }
        if (isset($map['StartTimeType'])) {
            $model->startTimeType = $map['StartTimeType'];
        }
        if (isset($map['Status'])) {
            $model->status = $map['Status'];
        }
        if (isset($map['Tags'])) {
            $model->tags = tags::fromMap($map['Tags']);
        }
        if (isset($map['TimeSlot'])) {
            $model->timeSlot = $map['TimeSlot'];
        }

        return $model;
    }
}
