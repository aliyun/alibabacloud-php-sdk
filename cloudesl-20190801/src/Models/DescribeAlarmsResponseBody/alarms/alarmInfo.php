<?php

// This file is auto-generated, don't edit it. Thanks.

namespace AlibabaCloud\SDK\Cloudesl\V20190801\Models\DescribeAlarmsResponseBody\alarms;

use AlibabaCloud\Tea\Model;

class alarmInfo extends Model
{
    /**
     * @var string
     */
    public $alarmId;

    /**
     * @var string
     */
    public $alarmStatus;

    /**
     * @var string
     */
    public $alarmTime;

    /**
     * @var string
     */
    public $alarmType;

    /**
     * @var string
     */
    public $companyId;

    /**
     * @var string
     */
    public $dealTime;

    /**
     * @var int
     */
    public $dealUserId;

    /**
     * @var string
     */
    public $deviceBarCode;

    /**
     * @var string
     */
    public $deviceMac;

    /**
     * @var string
     */
    public $deviceType;

    /**
     * @var string
     */
    public $errorType;

    /**
     * @var string
     */
    public $itemBarCode;

    /**
     * @var string
     */
    public $itemTitle;

    /**
     * @var string
     */
    public $model;

    /**
     * @var string
     */
    public $storeId;

    /**
     * @var string
     */
    public $vendor;
    protected $_name = [
        'alarmId'       => 'AlarmId',
        'alarmStatus'   => 'AlarmStatus',
        'alarmTime'     => 'AlarmTime',
        'alarmType'     => 'AlarmType',
        'companyId'     => 'CompanyId',
        'dealTime'      => 'DealTime',
        'dealUserId'    => 'DealUserId',
        'deviceBarCode' => 'DeviceBarCode',
        'deviceMac'     => 'DeviceMac',
        'deviceType'    => 'DeviceType',
        'errorType'     => 'ErrorType',
        'itemBarCode'   => 'ItemBarCode',
        'itemTitle'     => 'ItemTitle',
        'model'         => 'Model',
        'storeId'       => 'StoreId',
        'vendor'        => 'Vendor',
    ];

    public function validate()
    {
    }

    public function toMap()
    {
        $res = [];
        if (null !== $this->alarmId) {
            $res['AlarmId'] = $this->alarmId;
        }
        if (null !== $this->alarmStatus) {
            $res['AlarmStatus'] = $this->alarmStatus;
        }
        if (null !== $this->alarmTime) {
            $res['AlarmTime'] = $this->alarmTime;
        }
        if (null !== $this->alarmType) {
            $res['AlarmType'] = $this->alarmType;
        }
        if (null !== $this->companyId) {
            $res['CompanyId'] = $this->companyId;
        }
        if (null !== $this->dealTime) {
            $res['DealTime'] = $this->dealTime;
        }
        if (null !== $this->dealUserId) {
            $res['DealUserId'] = $this->dealUserId;
        }
        if (null !== $this->deviceBarCode) {
            $res['DeviceBarCode'] = $this->deviceBarCode;
        }
        if (null !== $this->deviceMac) {
            $res['DeviceMac'] = $this->deviceMac;
        }
        if (null !== $this->deviceType) {
            $res['DeviceType'] = $this->deviceType;
        }
        if (null !== $this->errorType) {
            $res['ErrorType'] = $this->errorType;
        }
        if (null !== $this->itemBarCode) {
            $res['ItemBarCode'] = $this->itemBarCode;
        }
        if (null !== $this->itemTitle) {
            $res['ItemTitle'] = $this->itemTitle;
        }
        if (null !== $this->model) {
            $res['Model'] = $this->model;
        }
        if (null !== $this->storeId) {
            $res['StoreId'] = $this->storeId;
        }
        if (null !== $this->vendor) {
            $res['Vendor'] = $this->vendor;
        }

        return $res;
    }

    /**
     * @param array $map
     *
     * @return alarmInfo
     */
    public static function fromMap($map = [])
    {
        $model = new self();
        if (isset($map['AlarmId'])) {
            $model->alarmId = $map['AlarmId'];
        }
        if (isset($map['AlarmStatus'])) {
            $model->alarmStatus = $map['AlarmStatus'];
        }
        if (isset($map['AlarmTime'])) {
            $model->alarmTime = $map['AlarmTime'];
        }
        if (isset($map['AlarmType'])) {
            $model->alarmType = $map['AlarmType'];
        }
        if (isset($map['CompanyId'])) {
            $model->companyId = $map['CompanyId'];
        }
        if (isset($map['DealTime'])) {
            $model->dealTime = $map['DealTime'];
        }
        if (isset($map['DealUserId'])) {
            $model->dealUserId = $map['DealUserId'];
        }
        if (isset($map['DeviceBarCode'])) {
            $model->deviceBarCode = $map['DeviceBarCode'];
        }
        if (isset($map['DeviceMac'])) {
            $model->deviceMac = $map['DeviceMac'];
        }
        if (isset($map['DeviceType'])) {
            $model->deviceType = $map['DeviceType'];
        }
        if (isset($map['ErrorType'])) {
            $model->errorType = $map['ErrorType'];
        }
        if (isset($map['ItemBarCode'])) {
            $model->itemBarCode = $map['ItemBarCode'];
        }
        if (isset($map['ItemTitle'])) {
            $model->itemTitle = $map['ItemTitle'];
        }
        if (isset($map['Model'])) {
            $model->model = $map['Model'];
        }
        if (isset($map['StoreId'])) {
            $model->storeId = $map['StoreId'];
        }
        if (isset($map['Vendor'])) {
            $model->vendor = $map['Vendor'];
        }

        return $model;
    }
}
