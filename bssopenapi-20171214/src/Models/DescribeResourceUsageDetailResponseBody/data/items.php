<?php

// This file is auto-generated, don't edit it. Thanks.

namespace AlibabaCloud\SDK\BssOpenApi\V20171214\Models\DescribeResourceUsageDetailResponseBody\data;

use AlibabaCloud\Tea\Model;

class items extends Model
{
    /**
     * @description The type of deduction plans whose usage details are queried. Valid values: RI and SCU.
     *
     * @var string
     */
    public $capacityUnit;

    /**
     * @description The number of deduction plans.
     *
     * @example CNY
     *
     * @var string
     */
    public $currency;

    /**
     * @description The ID of the request.
     *
     * @example 1
     *
     * @var float
     */
    public $deductQuantity;

    /**
     * @description The currency in which deduction plans were priced.
     *
     * @example 2021-04-01 01:00:00
     *
     * @var string
     */
    public $endTime;

    /**
     * @description The status of the deduction plan.
     *
     * @example linux
     *
     * @var string
     */
    public $imageType;

    /**
     * @description The fee of purchased deduction plans.
     *
     * @example ecs.t5-lc2m1.nano
     *
     * @var string
     */
    public $instanceSpec;

    /**
     * @description The beginning of the time range in which the usage details were queried.
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
     * @example 2
     *
     * @var int
     */
    public $quantity;

    /**
     * @description The total number of entries returned.
     *
     * @var string
     */
    public $region;

    /**
     * @description The code of the zone.
     *
     * @example cn-hangzhou-dg-a01
     *
     * @var string
     */
    public $regionNo;

    /**
     * @description The end of the time range to query. The end is excluded from the time range. If you do not set this parameter, the end time is the current time. Specify the time in the format of yyyy-MM-dd HH:mm:ss.
     *
     * @example 0
     *
     * @var string
     */
    public $reservationCost;

    /**
     * @description The region.
     *
     * @example ecsri-bp147nnfz21225k9mpix00
     *
     * @var string
     */
    public $resourceInstanceId;

    /**
     * @description The unit that is used to measure the resources deducted from deduction plans.
     *
     * @example 0.06
     *
     * @var string
     */
    public $savedCost;

    /**
     * @description The token that is used to retrieve the next page of results. You do not need to set this parameter if you query usage details within a specific time range for the first time. The response returns a token that you can use to query usage details that are displayed on the next page. If a null value is returned for the NextToken parameter, no more usage details can be queried.
     *
     * @example 2021-04-01 00:00:00
     *
     * @var string
     */
    public $startTime;

    /**
     * @description The code of the region.
     *
     * @example Valid
     *
     * @var string
     */
    public $status;

    /**
     * @description The time granularity at which usage details are queried. Valid values: MONTH, DAY, and HOUR.
     *
     * @var string
     */
    public $statusName;

    /**
     * @description The username of the account.
     *
     * @example 2
     *
     * @var float
     */
    public $totalQuantity;

    /**
     * @description The returned data.
     *
     * @example 0.5
     *
     * @var float
     */
    public $usagePercentage;

    /**
     * @description The net savings.
     *
     * @example 123745698925000
     *
     * @var string
     */
    public $userId;

    /**
     * @example test@aliyun.com
     *
     * @var string
     */
    public $userName;

    /**
     * @example cn-hangzhou-i
     *
     * @var string
     */
    public $zone;

    /**
     * @description The specifications of a deduction plan.
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
