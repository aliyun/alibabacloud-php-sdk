<?php

// This file is auto-generated, don't edit it. Thanks.

namespace AlibabaCloud\SDK\BssOpenApi\V20171214\Models\DescribeResourceUsageDetailResponseBody\data;

use AlibabaCloud\Tea\Model;

class items extends Model
{
    /**
     * @var string
     */
    public $capacityUnit;

    /**
     * @var string
     */
    public $currency;

    /**
     * @var float
     */
    public $deductQuantity;

    /**
     * @var string
     */
    public $endTime;

    /**
     * @var string
     */
    public $imageType;

    /**
     * @var string
     */
    public $instanceSpec;

    /**
     * @var string
     */
    public $postpaidCost;

    /**
     * @var string
     */
    public $potentialSavedCost;

    /**
     * @var int
     */
    public $quantity;

    /**
     * @var string
     */
    public $region;

    /**
     * @var string
     */
    public $regionNo;

    /**
     * @var string
     */
    public $reservationCost;

    /**
     * @var string
     */
    public $resourceInstanceId;

    /**
     * @var string
     */
    public $savedCost;

    /**
     * @var string
     */
    public $startTime;

    /**
     * @var string
     */
    public $status;

    /**
     * @var string
     */
    public $statusName;

    /**
     * @var float
     */
    public $totalQuantity;

    /**
     * @var float
     */
    public $usagePercentage;

    /**
     * @var string
     */
    public $userId;

    /**
     * @var string
     */
    public $userName;

    /**
     * @var string
     */
    public $zone;

    /**
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
