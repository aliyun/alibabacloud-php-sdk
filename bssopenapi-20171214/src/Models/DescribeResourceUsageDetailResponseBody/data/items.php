<?php

// This file is auto-generated, don't edit it. Thanks.

namespace AlibabaCloud\SDK\BssOpenApi\V20171214\Models\DescribeResourceUsageDetailResponseBody\data;

use AlibabaCloud\Tea\Model;

class items extends Model
{
    /**
     * @var string
     */
    public $status;

    /**
     * @var float
     */
    public $usagePercentage;

    /**
     * @var string
     */
    public $resourceInstanceId;

    /**
     * @var float
     */
    public $totalQuantity;

    /**
     * @var string
     */
    public $reservationCost;

    /**
     * @var string
     */
    public $regionNo;

    /**
     * @var string
     */
    public $userId;

    /**
     * @var string
     */
    public $statusName;

    /**
     * @var string
     */
    public $capacityUnit;

    /**
     * @var string
     */
    public $potentialSavedCost;

    /**
     * @var string
     */
    public $currency;

    /**
     * @var string
     */
    public $zoneName;

    /**
     * @var string
     */
    public $instanceSpec;

    /**
     * @var string
     */
    public $endTime;

    /**
     * @var string
     */
    public $postpaidCost;

    /**
     * @var string
     */
    public $imageType;

    /**
     * @var string
     */
    public $startTime;

    /**
     * @var string
     */
    public $region;

    /**
     * @var float
     */
    public $deductQuantity;

    /**
     * @var string
     */
    public $savedCost;

    /**
     * @var string
     */
    public $zone;

    /**
     * @var string
     */
    public $userName;

    /**
     * @var int
     */
    public $quantity;
    protected $_name = [
        'status'             => 'Status',
        'usagePercentage'    => 'UsagePercentage',
        'resourceInstanceId' => 'ResourceInstanceId',
        'totalQuantity'      => 'TotalQuantity',
        'reservationCost'    => 'ReservationCost',
        'regionNo'           => 'RegionNo',
        'userId'             => 'UserId',
        'statusName'         => 'StatusName',
        'capacityUnit'       => 'CapacityUnit',
        'potentialSavedCost' => 'PotentialSavedCost',
        'currency'           => 'Currency',
        'zoneName'           => 'ZoneName',
        'instanceSpec'       => 'InstanceSpec',
        'endTime'            => 'EndTime',
        'postpaidCost'       => 'PostpaidCost',
        'imageType'          => 'ImageType',
        'startTime'          => 'StartTime',
        'region'             => 'Region',
        'deductQuantity'     => 'DeductQuantity',
        'savedCost'          => 'SavedCost',
        'zone'               => 'Zone',
        'userName'           => 'UserName',
        'quantity'           => 'Quantity',
    ];

    public function validate()
    {
    }

    public function toMap()
    {
        $res = [];
        if (null !== $this->status) {
            $res['Status'] = $this->status;
        }
        if (null !== $this->usagePercentage) {
            $res['UsagePercentage'] = $this->usagePercentage;
        }
        if (null !== $this->resourceInstanceId) {
            $res['ResourceInstanceId'] = $this->resourceInstanceId;
        }
        if (null !== $this->totalQuantity) {
            $res['TotalQuantity'] = $this->totalQuantity;
        }
        if (null !== $this->reservationCost) {
            $res['ReservationCost'] = $this->reservationCost;
        }
        if (null !== $this->regionNo) {
            $res['RegionNo'] = $this->regionNo;
        }
        if (null !== $this->userId) {
            $res['UserId'] = $this->userId;
        }
        if (null !== $this->statusName) {
            $res['StatusName'] = $this->statusName;
        }
        if (null !== $this->capacityUnit) {
            $res['CapacityUnit'] = $this->capacityUnit;
        }
        if (null !== $this->potentialSavedCost) {
            $res['PotentialSavedCost'] = $this->potentialSavedCost;
        }
        if (null !== $this->currency) {
            $res['Currency'] = $this->currency;
        }
        if (null !== $this->zoneName) {
            $res['ZoneName'] = $this->zoneName;
        }
        if (null !== $this->instanceSpec) {
            $res['InstanceSpec'] = $this->instanceSpec;
        }
        if (null !== $this->endTime) {
            $res['EndTime'] = $this->endTime;
        }
        if (null !== $this->postpaidCost) {
            $res['PostpaidCost'] = $this->postpaidCost;
        }
        if (null !== $this->imageType) {
            $res['ImageType'] = $this->imageType;
        }
        if (null !== $this->startTime) {
            $res['StartTime'] = $this->startTime;
        }
        if (null !== $this->region) {
            $res['Region'] = $this->region;
        }
        if (null !== $this->deductQuantity) {
            $res['DeductQuantity'] = $this->deductQuantity;
        }
        if (null !== $this->savedCost) {
            $res['SavedCost'] = $this->savedCost;
        }
        if (null !== $this->zone) {
            $res['Zone'] = $this->zone;
        }
        if (null !== $this->userName) {
            $res['UserName'] = $this->userName;
        }
        if (null !== $this->quantity) {
            $res['Quantity'] = $this->quantity;
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
        if (isset($map['Status'])) {
            $model->status = $map['Status'];
        }
        if (isset($map['UsagePercentage'])) {
            $model->usagePercentage = $map['UsagePercentage'];
        }
        if (isset($map['ResourceInstanceId'])) {
            $model->resourceInstanceId = $map['ResourceInstanceId'];
        }
        if (isset($map['TotalQuantity'])) {
            $model->totalQuantity = $map['TotalQuantity'];
        }
        if (isset($map['ReservationCost'])) {
            $model->reservationCost = $map['ReservationCost'];
        }
        if (isset($map['RegionNo'])) {
            $model->regionNo = $map['RegionNo'];
        }
        if (isset($map['UserId'])) {
            $model->userId = $map['UserId'];
        }
        if (isset($map['StatusName'])) {
            $model->statusName = $map['StatusName'];
        }
        if (isset($map['CapacityUnit'])) {
            $model->capacityUnit = $map['CapacityUnit'];
        }
        if (isset($map['PotentialSavedCost'])) {
            $model->potentialSavedCost = $map['PotentialSavedCost'];
        }
        if (isset($map['Currency'])) {
            $model->currency = $map['Currency'];
        }
        if (isset($map['ZoneName'])) {
            $model->zoneName = $map['ZoneName'];
        }
        if (isset($map['InstanceSpec'])) {
            $model->instanceSpec = $map['InstanceSpec'];
        }
        if (isset($map['EndTime'])) {
            $model->endTime = $map['EndTime'];
        }
        if (isset($map['PostpaidCost'])) {
            $model->postpaidCost = $map['PostpaidCost'];
        }
        if (isset($map['ImageType'])) {
            $model->imageType = $map['ImageType'];
        }
        if (isset($map['StartTime'])) {
            $model->startTime = $map['StartTime'];
        }
        if (isset($map['Region'])) {
            $model->region = $map['Region'];
        }
        if (isset($map['DeductQuantity'])) {
            $model->deductQuantity = $map['DeductQuantity'];
        }
        if (isset($map['SavedCost'])) {
            $model->savedCost = $map['SavedCost'];
        }
        if (isset($map['Zone'])) {
            $model->zone = $map['Zone'];
        }
        if (isset($map['UserName'])) {
            $model->userName = $map['UserName'];
        }
        if (isset($map['Quantity'])) {
            $model->quantity = $map['Quantity'];
        }

        return $model;
    }
}
