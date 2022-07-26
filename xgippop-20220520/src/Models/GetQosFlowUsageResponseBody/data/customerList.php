<?php

// This file is auto-generated, don't edit it. Thanks.

namespace AlibabaCloud\SDK\XgipPop\V20220520\Models\GetQosFlowUsageResponseBody\data;

use AlibabaCloud\Tea\Model;

class customerList extends Model
{
    /**
     * @var int
     */
    public $aliUid;

    /**
     * @var string
     */
    public $appId;

    /**
     * @var int
     */
    public $dsDay;

    /**
     * @var int
     */
    public $dsMonth;

    /**
     * @var string
     */
    public $endTime;

    /**
     * @var string
     */
    public $instanceId;

    /**
     * @var string
     */
    public $itemCode;

    /**
     * @var string
     */
    public $message;

    /**
     * @var string
     */
    public $name;

    /**
     * @var string
     */
    public $operator;

    /**
     * @var int
     */
    public $orderNum;

    /**
     * @var string
     */
    public $productId;

    /**
     * @var string
     */
    public $productName;

    /**
     * @var string
     */
    public $provice;

    /**
     * @var string
     */
    public $qosRequestId;

    /**
     * @var string
     */
    public $remark;

    /**
     * @var string
     */
    public $specType;

    /**
     * @var string
     */
    public $startTime;

    /**
     * @var string
     */
    public $status;

    /**
     * @var int
     */
    public $totalPrice;

    /**
     * @var int
     */
    public $totolTime;
    protected $_name = [
        'aliUid'       => 'AliUid',
        'appId'        => 'AppId',
        'dsDay'        => 'DsDay',
        'dsMonth'      => 'DsMonth',
        'endTime'      => 'EndTime',
        'instanceId'   => 'InstanceId',
        'itemCode'     => 'ItemCode',
        'message'      => 'Message',
        'name'         => 'Name',
        'operator'     => 'Operator',
        'orderNum'     => 'OrderNum',
        'productId'    => 'ProductId',
        'productName'  => 'ProductName',
        'provice'      => 'Provice',
        'qosRequestId' => 'QosRequestId',
        'remark'       => 'Remark',
        'specType'     => 'SpecType',
        'startTime'    => 'StartTime',
        'status'       => 'Status',
        'totalPrice'   => 'TotalPrice',
        'totolTime'    => 'TotolTime',
    ];

    public function validate()
    {
    }

    public function toMap()
    {
        $res = [];
        if (null !== $this->aliUid) {
            $res['AliUid'] = $this->aliUid;
        }
        if (null !== $this->appId) {
            $res['AppId'] = $this->appId;
        }
        if (null !== $this->dsDay) {
            $res['DsDay'] = $this->dsDay;
        }
        if (null !== $this->dsMonth) {
            $res['DsMonth'] = $this->dsMonth;
        }
        if (null !== $this->endTime) {
            $res['EndTime'] = $this->endTime;
        }
        if (null !== $this->instanceId) {
            $res['InstanceId'] = $this->instanceId;
        }
        if (null !== $this->itemCode) {
            $res['ItemCode'] = $this->itemCode;
        }
        if (null !== $this->message) {
            $res['Message'] = $this->message;
        }
        if (null !== $this->name) {
            $res['Name'] = $this->name;
        }
        if (null !== $this->operator) {
            $res['Operator'] = $this->operator;
        }
        if (null !== $this->orderNum) {
            $res['OrderNum'] = $this->orderNum;
        }
        if (null !== $this->productId) {
            $res['ProductId'] = $this->productId;
        }
        if (null !== $this->productName) {
            $res['ProductName'] = $this->productName;
        }
        if (null !== $this->provice) {
            $res['Provice'] = $this->provice;
        }
        if (null !== $this->qosRequestId) {
            $res['QosRequestId'] = $this->qosRequestId;
        }
        if (null !== $this->remark) {
            $res['Remark'] = $this->remark;
        }
        if (null !== $this->specType) {
            $res['SpecType'] = $this->specType;
        }
        if (null !== $this->startTime) {
            $res['StartTime'] = $this->startTime;
        }
        if (null !== $this->status) {
            $res['Status'] = $this->status;
        }
        if (null !== $this->totalPrice) {
            $res['TotalPrice'] = $this->totalPrice;
        }
        if (null !== $this->totolTime) {
            $res['TotolTime'] = $this->totolTime;
        }

        return $res;
    }

    /**
     * @param array $map
     *
     * @return customerList
     */
    public static function fromMap($map = [])
    {
        $model = new self();
        if (isset($map['AliUid'])) {
            $model->aliUid = $map['AliUid'];
        }
        if (isset($map['AppId'])) {
            $model->appId = $map['AppId'];
        }
        if (isset($map['DsDay'])) {
            $model->dsDay = $map['DsDay'];
        }
        if (isset($map['DsMonth'])) {
            $model->dsMonth = $map['DsMonth'];
        }
        if (isset($map['EndTime'])) {
            $model->endTime = $map['EndTime'];
        }
        if (isset($map['InstanceId'])) {
            $model->instanceId = $map['InstanceId'];
        }
        if (isset($map['ItemCode'])) {
            $model->itemCode = $map['ItemCode'];
        }
        if (isset($map['Message'])) {
            $model->message = $map['Message'];
        }
        if (isset($map['Name'])) {
            $model->name = $map['Name'];
        }
        if (isset($map['Operator'])) {
            $model->operator = $map['Operator'];
        }
        if (isset($map['OrderNum'])) {
            $model->orderNum = $map['OrderNum'];
        }
        if (isset($map['ProductId'])) {
            $model->productId = $map['ProductId'];
        }
        if (isset($map['ProductName'])) {
            $model->productName = $map['ProductName'];
        }
        if (isset($map['Provice'])) {
            $model->provice = $map['Provice'];
        }
        if (isset($map['QosRequestId'])) {
            $model->qosRequestId = $map['QosRequestId'];
        }
        if (isset($map['Remark'])) {
            $model->remark = $map['Remark'];
        }
        if (isset($map['SpecType'])) {
            $model->specType = $map['SpecType'];
        }
        if (isset($map['StartTime'])) {
            $model->startTime = $map['StartTime'];
        }
        if (isset($map['Status'])) {
            $model->status = $map['Status'];
        }
        if (isset($map['TotalPrice'])) {
            $model->totalPrice = $map['TotalPrice'];
        }
        if (isset($map['TotolTime'])) {
            $model->totolTime = $map['TotolTime'];
        }

        return $model;
    }
}
