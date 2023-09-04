<?php

// This file is auto-generated, don't edit it. Thanks.

namespace AlibabaCloud\SDK\BssOpenApi\V20171214\Models\DescribeResourceUsageDetailResponseBody\data;

use AlibabaCloud\Tea\Model;

class items extends Model
{
    /**
     * @description The unit that is used to measure the resources deducted from deduction plans.
     *
     * @var string
     */
    public $capacityUnit;

    /**
     * @description The currency in which deduction plans were priced.
     *
     * @example CNY
     *
     * @var string
     */
    public $currency;

    /**
     * @description The amount of the resources deducted from deduction plans.
     *
     * @example 1
     *
     * @var float
     */
    public $deductQuantity;

    /**
     * @description The end of the time range in which the usage details were queried.
     *
     * @example 2021-04-01 01:00:00
     *
     * @var string
     */
    public $endTime;

    /**
     * @description The operating system.
     *
     * @example linux
     *
     * @var string
     */
    public $imageType;

    /**
     * @description The specifications of a deduction plan.
     *
     * @example ecs.t5-lc2m1.nano
     *
     * @var string
     */
    public $instanceSpec;

    /**
     * @description The equivalent of pay-as-you-go costs.
     *
     * @example 0.06
     *
     * @var string
     */
    public $postpaidCost;

    /**
     * @description The potential net savings.
     *
     * @example 0.13
     *
     * @var string
     */
    public $potentialSavedCost;

    /**
     * @description The number of deduction plans.
     *
     * @example 2
     *
     * @var int
     */
    public $quantity;

    /**
     * @description The region.
     *
     * @var string
     */
    public $region;

    /**
     * @description The code of the region.
     *
     * @example cn-hangzhou-dg-a01
     *
     * @var string
     */
    public $regionNo;

    /**
     * @description The fee of purchased deduction plans.
     *
     * @example 0
     *
     * @var string
     */
    public $reservationCost;

    /**
     * @description The ID of a deduction plan.
     *
     * @example ecsri-bp147nnfz21225k9mpix00
     *
     * @var string
     */
    public $resourceInstanceId;

    /**
     * @description The net savings.
     *
     * @example 0.06
     *
     * @var string
     */
    public $savedCost;

    /**
     * @description The beginning of the time range in which the usage details were queried.
     *
     * @example 2021-04-01 00:00:00
     *
     * @var string
     */
    public $startTime;

    /**
     * @description The status of the deduction plan.
     *
     * @example Valid
     *
     * @var string
     */
    public $status;

    /**
     * @description The name of the state.
     *
     * @var string
     */
    public $statusName;

    /**
     * @description The total capacity of deduction plans.
     *
     * @example 2
     *
     * @var float
     */
    public $totalQuantity;

    /**
     * @description The usage of deduction plans.
     *
     * @example 0.5
     *
     * @var float
     */
    public $usagePercentage;

    /**
     * @description The ID of the account.
     *
     * @example 123745698925000
     *
     * @var string
     */
    public $userId;

    /**
     * @description The username of the account.
     *
     * @example test@aliyun.com
     *
     * @var string
     */
    public $userName;

    /**
     * @description The code of the zone.
     *
     * @example cn-hangzhou-i
     *
     * @var string
     */
    public $zone;

    /**
     * @description The zone.
     *
     * @var string
     */
    public $zoneName;
    protected $_name = [
        'capacityUnit'       => 'CapacityUnit',
        'currency'           => 'Currency',
        'deductQuantity'     => 'DeductQuantity',
        'endTime'            => 'EndTime',
        'imageType'          => 'ImageType',
        'instanceSpec'       => 'InstanceSpec',
        'postpaidCost'       => 'PostpaidCost',
        'potentialSavedCost' => 'PotentialSavedCost',
        'quantity'           => 'Quantity',
        'region'             => 'Region',
        'regionNo'           => 'RegionNo',
        'reservationCost'    => 'ReservationCost',
        'resourceInstanceId' => 'ResourceInstanceId',
        'savedCost'          => 'SavedCost',
        'startTime'          => 'StartTime',
        'status'             => 'Status',
        'statusName'         => 'StatusName',
        'totalQuantity'      => 'TotalQuantity',
        'usagePercentage'    => 'UsagePercentage',
        'userId'             => 'UserId',
        'userName'           => 'UserName',
        'zone'               => 'Zone',
        'zoneName'           => 'ZoneName',
    ];

    public function validate()
    {
    }

    public function toMap()
    {
        $res = [];
        if (null !== $this->capacityUnit) {
            $res['CapacityUnit'] = $this->capacityUnit;
        }
        if (null !== $this->currency) {
            $res['Currency'] = $this->currency;
        }
        if (null !== $this->deductQuantity) {
            $res['DeductQuantity'] = $this->deductQuantity;
        }
        if (null !== $this->endTime) {
            $res['EndTime'] = $this->endTime;
        }
        if (null !== $this->imageType) {
            $res['ImageType'] = $this->imageType;
        }
        if (null !== $this->instanceSpec) {
            $res['InstanceSpec'] = $this->instanceSpec;
        }
        if (null !== $this->postpaidCost) {
            $res['PostpaidCost'] = $this->postpaidCost;
        }
        if (null !== $this->potentialSavedCost) {
            $res['PotentialSavedCost'] = $this->potentialSavedCost;
        }
        if (null !== $this->quantity) {
            $res['Quantity'] = $this->quantity;
        }
        if (null !== $this->region) {
            $res['Region'] = $this->region;
        }
        if (null !== $this->regionNo) {
            $res['RegionNo'] = $this->regionNo;
        }
        if (null !== $this->reservationCost) {
            $res['ReservationCost'] = $this->reservationCost;
        }
        if (null !== $this->resourceInstanceId) {
            $res['ResourceInstanceId'] = $this->resourceInstanceId;
        }
        if (null !== $this->savedCost) {
            $res['SavedCost'] = $this->savedCost;
        }
        if (null !== $this->startTime) {
            $res['StartTime'] = $this->startTime;
        }
        if (null !== $this->status) {
            $res['Status'] = $this->status;
        }
        if (null !== $this->statusName) {
            $res['StatusName'] = $this->statusName;
        }
        if (null !== $this->totalQuantity) {
            $res['TotalQuantity'] = $this->totalQuantity;
        }
        if (null !== $this->usagePercentage) {
            $res['UsagePercentage'] = $this->usagePercentage;
        }
        if (null !== $this->userId) {
            $res['UserId'] = $this->userId;
        }
        if (null !== $this->userName) {
            $res['UserName'] = $this->userName;
        }
        if (null !== $this->zone) {
            $res['Zone'] = $this->zone;
        }
        if (null !== $this->zoneName) {
            $res['ZoneName'] = $this->zoneName;
        }

        return $res;
    }

    /**
     * @param array $map
     *
     * @return items
     */
    public static function fromMap($map = [])
    {
        $model = new self();
        if (isset($map['CapacityUnit'])) {
            $model->capacityUnit = $map['CapacityUnit'];
        }
        if (isset($map['Currency'])) {
            $model->currency = $map['Currency'];
        }
        if (isset($map['DeductQuantity'])) {
            $model->deductQuantity = $map['DeductQuantity'];
        }
        if (isset($map['EndTime'])) {
            $model->endTime = $map['EndTime'];
        }
        if (isset($map['ImageType'])) {
            $model->imageType = $map['ImageType'];
        }
        if (isset($map['InstanceSpec'])) {
            $model->instanceSpec = $map['InstanceSpec'];
        }
        if (isset($map['PostpaidCost'])) {
            $model->postpaidCost = $map['PostpaidCost'];
        }
        if (isset($map['PotentialSavedCost'])) {
            $model->potentialSavedCost = $map['PotentialSavedCost'];
        }
        if (isset($map['Quantity'])) {
            $model->quantity = $map['Quantity'];
        }
        if (isset($map['Region'])) {
            $model->region = $map['Region'];
        }
        if (isset($map['RegionNo'])) {
            $model->regionNo = $map['RegionNo'];
        }
        if (isset($map['ReservationCost'])) {
            $model->reservationCost = $map['ReservationCost'];
        }
        if (isset($map['ResourceInstanceId'])) {
            $model->resourceInstanceId = $map['ResourceInstanceId'];
        }
        if (isset($map['SavedCost'])) {
            $model->savedCost = $map['SavedCost'];
        }
        if (isset($map['StartTime'])) {
            $model->startTime = $map['StartTime'];
        }
        if (isset($map['Status'])) {
            $model->status = $map['Status'];
        }
        if (isset($map['StatusName'])) {
            $model->statusName = $map['StatusName'];
        }
        if (isset($map['TotalQuantity'])) {
            $model->totalQuantity = $map['TotalQuantity'];
        }
        if (isset($map['UsagePercentage'])) {
            $model->usagePercentage = $map['UsagePercentage'];
        }
        if (isset($map['UserId'])) {
            $model->userId = $map['UserId'];
        }
        if (isset($map['UserName'])) {
            $model->userName = $map['UserName'];
        }
        if (isset($map['Zone'])) {
            $model->zone = $map['Zone'];
        }
        if (isset($map['ZoneName'])) {
            $model->zoneName = $map['ZoneName'];
        }

        return $model;
    }
}
