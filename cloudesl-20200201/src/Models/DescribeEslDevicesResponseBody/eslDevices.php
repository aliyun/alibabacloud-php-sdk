<?php

// This file is auto-generated, don't edit it. Thanks.

namespace AlibabaCloud\SDK\Cloudesl\V20200201\Models\DescribeEslDevicesResponseBody;

use AlibabaCloud\Tea\Model;

class eslDevices extends Model
{
    /**
     * @example 100
     *
     * @var int
     */
    public $batteryLevel;

    /**
     * @example 18bc5a63****
     *
     * @var string
     */
    public $eslBarCode;

    /**
     * @example 54
     *
     * @var int
     */
    public $eslSignal;

    /**
     * @example ESL_STATUS_ONLINE
     *
     * @var string
     */
    public $eslStatus;

    /**
     * @example 2020-03-16T07:04:16Z
     *
     * @var string
     */
    public $lastCommunicateTime;

    /**
     * @example 7
     *
     * @var string
     */
    public $layoutId;

    /**
     * @var string
     */
    public $layoutName;

    /**
     * @example 18:bc:5a:63:**:**
     *
     * @var string
     */
    public $mac;

    /**
     * @example AESL0213
     *
     * @var string
     */
    public $model;

    /**
     * @example 200
     *
     * @var int
     */
    public $screenHeight;

    /**
     * @example 200
     *
     * @var int
     */
    public $screenWidth;

    /**
     * @example s-dxsxx****
     *
     * @var string
     */
    public $storeId;

    /**
     * @example ESL_TYPE_E_INK
     *
     * @var string
     */
    public $type;

    /**
     * @example THREE_COLOR
     *
     * @var string
     */
    public $typeEncode;
    protected $_name = [
        'batteryLevel'        => 'BatteryLevel',
        'eslBarCode'          => 'EslBarCode',
        'eslSignal'           => 'EslSignal',
        'eslStatus'           => 'EslStatus',
        'lastCommunicateTime' => 'LastCommunicateTime',
        'layoutId'            => 'LayoutId',
        'layoutName'          => 'LayoutName',
        'mac'                 => 'Mac',
        'model'               => 'Model',
        'screenHeight'        => 'ScreenHeight',
        'screenWidth'         => 'ScreenWidth',
        'storeId'             => 'StoreId',
        'type'                => 'Type',
        'typeEncode'          => 'TypeEncode',
    ];

    public function validate()
    {
    }

    public function toMap()
    {
        $res = [];
        if (null !== $this->batteryLevel) {
            $res['BatteryLevel'] = $this->batteryLevel;
        }
        if (null !== $this->eslBarCode) {
            $res['EslBarCode'] = $this->eslBarCode;
        }
        if (null !== $this->eslSignal) {
            $res['EslSignal'] = $this->eslSignal;
        }
        if (null !== $this->eslStatus) {
            $res['EslStatus'] = $this->eslStatus;
        }
        if (null !== $this->lastCommunicateTime) {
            $res['LastCommunicateTime'] = $this->lastCommunicateTime;
        }
        if (null !== $this->layoutId) {
            $res['LayoutId'] = $this->layoutId;
        }
        if (null !== $this->layoutName) {
            $res['LayoutName'] = $this->layoutName;
        }
        if (null !== $this->mac) {
            $res['Mac'] = $this->mac;
        }
        if (null !== $this->model) {
            $res['Model'] = $this->model;
        }
        if (null !== $this->screenHeight) {
            $res['ScreenHeight'] = $this->screenHeight;
        }
        if (null !== $this->screenWidth) {
            $res['ScreenWidth'] = $this->screenWidth;
        }
        if (null !== $this->storeId) {
            $res['StoreId'] = $this->storeId;
        }
        if (null !== $this->type) {
            $res['Type'] = $this->type;
        }
        if (null !== $this->typeEncode) {
            $res['TypeEncode'] = $this->typeEncode;
        }

        return $res;
    }

    /**
     * @param array $map
     *
     * @return eslDevices
     */
    public static function fromMap($map = [])
    {
        $model = new self();
        if (isset($map['BatteryLevel'])) {
            $model->batteryLevel = $map['BatteryLevel'];
        }
        if (isset($map['EslBarCode'])) {
            $model->eslBarCode = $map['EslBarCode'];
        }
        if (isset($map['EslSignal'])) {
            $model->eslSignal = $map['EslSignal'];
        }
        if (isset($map['EslStatus'])) {
            $model->eslStatus = $map['EslStatus'];
        }
        if (isset($map['LastCommunicateTime'])) {
            $model->lastCommunicateTime = $map['LastCommunicateTime'];
        }
        if (isset($map['LayoutId'])) {
            $model->layoutId = $map['LayoutId'];
        }
        if (isset($map['LayoutName'])) {
            $model->layoutName = $map['LayoutName'];
        }
        if (isset($map['Mac'])) {
            $model->mac = $map['Mac'];
        }
        if (isset($map['Model'])) {
            $model->model = $map['Model'];
        }
        if (isset($map['ScreenHeight'])) {
            $model->screenHeight = $map['ScreenHeight'];
        }
        if (isset($map['ScreenWidth'])) {
            $model->screenWidth = $map['ScreenWidth'];
        }
        if (isset($map['StoreId'])) {
            $model->storeId = $map['StoreId'];
        }
        if (isset($map['Type'])) {
            $model->type = $map['Type'];
        }
        if (isset($map['TypeEncode'])) {
            $model->typeEncode = $map['TypeEncode'];
        }

        return $model;
    }
}
