<?php

// This file is auto-generated, don't edit it. Thanks.

namespace AlibabaCloud\SDK\Linkvisual\V20230630\Models\EnableStorageOrderResponseBody;

use AlibabaCloud\Tea\Model;

class data extends Model
{
    /**
     * @var string
     */
    public $commodityCode;

    /**
     * @var int
     */
    public $copies;

    /**
     * @var string
     */
    public $endTime;

    /**
     * @var string
     */
    public $endTimeUTC;

    /**
     * @var string
     */
    public $identityId;

    /**
     * @var string
     */
    public $iotId;

    /**
     * @var string
     */
    public $orderId;

    /**
     * @var int
     */
    public $orderType;

    /**
     * @var string
     */
    public $outOrderNo;

    /**
     * @var int
     */
    public $paymentStatus;

    /**
     * @var int
     */
    public $preConsume;

    /**
     * @var string
     */
    public $price;

    /**
     * @var int
     */
    public $recordType;

    /**
     * @var string
     */
    public $specification;

    /**
     * @var string
     */
    public $startTime;

    /**
     * @var string
     */
    public $startTimeUTC;

    /**
     * @var int
     */
    public $status;

    /**
     * @var string
     */
    public $userId;

    /**
     * @var string
     */
    public $userName;
    protected $_name = [
        'commodityCode' => 'CommodityCode',
        'copies'        => 'Copies',
        'endTime'       => 'EndTime',
        'endTimeUTC'    => 'EndTimeUTC',
        'identityId'    => 'IdentityId',
        'iotId'         => 'IotId',
        'orderId'       => 'OrderId',
        'orderType'     => 'OrderType',
        'outOrderNo'    => 'OutOrderNo',
        'paymentStatus' => 'PaymentStatus',
        'preConsume'    => 'PreConsume',
        'price'         => 'Price',
        'recordType'    => 'RecordType',
        'specification' => 'Specification',
        'startTime'     => 'StartTime',
        'startTimeUTC'  => 'StartTimeUTC',
        'status'        => 'Status',
        'userId'        => 'UserId',
        'userName'      => 'UserName',
    ];

    public function validate()
    {
    }

    public function toMap()
    {
        $res = [];
        if (null !== $this->commodityCode) {
            $res['CommodityCode'] = $this->commodityCode;
        }
        if (null !== $this->copies) {
            $res['Copies'] = $this->copies;
        }
        if (null !== $this->endTime) {
            $res['EndTime'] = $this->endTime;
        }
        if (null !== $this->endTimeUTC) {
            $res['EndTimeUTC'] = $this->endTimeUTC;
        }
        if (null !== $this->identityId) {
            $res['IdentityId'] = $this->identityId;
        }
        if (null !== $this->iotId) {
            $res['IotId'] = $this->iotId;
        }
        if (null !== $this->orderId) {
            $res['OrderId'] = $this->orderId;
        }
        if (null !== $this->orderType) {
            $res['OrderType'] = $this->orderType;
        }
        if (null !== $this->outOrderNo) {
            $res['OutOrderNo'] = $this->outOrderNo;
        }
        if (null !== $this->paymentStatus) {
            $res['PaymentStatus'] = $this->paymentStatus;
        }
        if (null !== $this->preConsume) {
            $res['PreConsume'] = $this->preConsume;
        }
        if (null !== $this->price) {
            $res['Price'] = $this->price;
        }
        if (null !== $this->recordType) {
            $res['RecordType'] = $this->recordType;
        }
        if (null !== $this->specification) {
            $res['Specification'] = $this->specification;
        }
        if (null !== $this->startTime) {
            $res['StartTime'] = $this->startTime;
        }
        if (null !== $this->startTimeUTC) {
            $res['StartTimeUTC'] = $this->startTimeUTC;
        }
        if (null !== $this->status) {
            $res['Status'] = $this->status;
        }
        if (null !== $this->userId) {
            $res['UserId'] = $this->userId;
        }
        if (null !== $this->userName) {
            $res['UserName'] = $this->userName;
        }

        return $res;
    }

    /**
     * @param array $map
     *
     * @return data
     */
    public static function fromMap($map = [])
    {
        $model = new self();
        if (isset($map['CommodityCode'])) {
            $model->commodityCode = $map['CommodityCode'];
        }
        if (isset($map['Copies'])) {
            $model->copies = $map['Copies'];
        }
        if (isset($map['EndTime'])) {
            $model->endTime = $map['EndTime'];
        }
        if (isset($map['EndTimeUTC'])) {
            $model->endTimeUTC = $map['EndTimeUTC'];
        }
        if (isset($map['IdentityId'])) {
            $model->identityId = $map['IdentityId'];
        }
        if (isset($map['IotId'])) {
            $model->iotId = $map['IotId'];
        }
        if (isset($map['OrderId'])) {
            $model->orderId = $map['OrderId'];
        }
        if (isset($map['OrderType'])) {
            $model->orderType = $map['OrderType'];
        }
        if (isset($map['OutOrderNo'])) {
            $model->outOrderNo = $map['OutOrderNo'];
        }
        if (isset($map['PaymentStatus'])) {
            $model->paymentStatus = $map['PaymentStatus'];
        }
        if (isset($map['PreConsume'])) {
            $model->preConsume = $map['PreConsume'];
        }
        if (isset($map['Price'])) {
            $model->price = $map['Price'];
        }
        if (isset($map['RecordType'])) {
            $model->recordType = $map['RecordType'];
        }
        if (isset($map['Specification'])) {
            $model->specification = $map['Specification'];
        }
        if (isset($map['StartTime'])) {
            $model->startTime = $map['StartTime'];
        }
        if (isset($map['StartTimeUTC'])) {
            $model->startTimeUTC = $map['StartTimeUTC'];
        }
        if (isset($map['Status'])) {
            $model->status = $map['Status'];
        }
        if (isset($map['UserId'])) {
            $model->userId = $map['UserId'];
        }
        if (isset($map['UserName'])) {
            $model->userName = $map['UserName'];
        }

        return $model;
    }
}
