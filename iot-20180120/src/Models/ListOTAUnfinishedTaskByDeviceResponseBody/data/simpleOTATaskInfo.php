<?php

// This file is auto-generated, don't edit it. Thanks.

namespace AlibabaCloud\SDK\Iot\V20180120\Models\ListOTAUnfinishedTaskByDeviceResponseBody\data;

use AlibabaCloud\Tea\Model;

class simpleOTATaskInfo extends Model
{
    /**
     * @example 1.0.1
     *
     * @var string
     */
    public $destVersion;

    /**
     * @example light
     *
     * @var string
     */
    public $deviceName;

    /**
     * @example q3j9OYBjUAZMv1hlMgdo03****
     *
     * @var string
     */
    public $firmwareId;

    /**
     * @example nadRdeffljdEndlfadgadfse****
     *
     * @var string
     */
    public $iotId;

    /**
     * @example 7glPHmaDYLAYMD1HHutT02****
     *
     * @var string
     */
    public $jobId;

    /**
     * @example WifiConfigModify
     *
     * @var string
     */
    public $moduleName;

    /**
     * @example a1GUfrM****
     *
     * @var string
     */
    public $productKey;

    /**
     * @example MyProduct
     *
     * @var string
     */
    public $productName;

    /**
     * @example 1.0.0
     *
     * @var string
     */
    public $srcVersion;

    /**
     * @example y3tOmCDNgpR8F9jnVEzC01****
     *
     * @var string
     */
    public $taskId;

    /**
     * @example CONFIRM
     *
     * @var string
     */
    public $taskStatus;

    /**
     * @example 2019-11-04T03:38:22.000Z
     *
     * @var string
     */
    public $utcCreate;

    /**
     * @example 2021-11-04T03:38:22.000Z
     *
     * @var string
     */
    public $utcModified;
    protected $_name = [
        'destVersion' => 'DestVersion',
        'deviceName'  => 'DeviceName',
        'firmwareId'  => 'FirmwareId',
        'iotId'       => 'IotId',
        'jobId'       => 'JobId',
        'moduleName'  => 'ModuleName',
        'productKey'  => 'ProductKey',
        'productName' => 'ProductName',
        'srcVersion'  => 'SrcVersion',
        'taskId'      => 'TaskId',
        'taskStatus'  => 'TaskStatus',
        'utcCreate'   => 'UtcCreate',
        'utcModified' => 'UtcModified',
    ];

    public function validate()
    {
    }

    public function toMap()
    {
        $res = [];
        if (null !== $this->destVersion) {
            $res['DestVersion'] = $this->destVersion;
        }
        if (null !== $this->deviceName) {
            $res['DeviceName'] = $this->deviceName;
        }
        if (null !== $this->firmwareId) {
            $res['FirmwareId'] = $this->firmwareId;
        }
        if (null !== $this->iotId) {
            $res['IotId'] = $this->iotId;
        }
        if (null !== $this->jobId) {
            $res['JobId'] = $this->jobId;
        }
        if (null !== $this->moduleName) {
            $res['ModuleName'] = $this->moduleName;
        }
        if (null !== $this->productKey) {
            $res['ProductKey'] = $this->productKey;
        }
        if (null !== $this->productName) {
            $res['ProductName'] = $this->productName;
        }
        if (null !== $this->srcVersion) {
            $res['SrcVersion'] = $this->srcVersion;
        }
        if (null !== $this->taskId) {
            $res['TaskId'] = $this->taskId;
        }
        if (null !== $this->taskStatus) {
            $res['TaskStatus'] = $this->taskStatus;
        }
        if (null !== $this->utcCreate) {
            $res['UtcCreate'] = $this->utcCreate;
        }
        if (null !== $this->utcModified) {
            $res['UtcModified'] = $this->utcModified;
        }

        return $res;
    }

    /**
     * @param array $map
     *
     * @return simpleOTATaskInfo
     */
    public static function fromMap($map = [])
    {
        $model = new self();
        if (isset($map['DestVersion'])) {
            $model->destVersion = $map['DestVersion'];
        }
        if (isset($map['DeviceName'])) {
            $model->deviceName = $map['DeviceName'];
        }
        if (isset($map['FirmwareId'])) {
            $model->firmwareId = $map['FirmwareId'];
        }
        if (isset($map['IotId'])) {
            $model->iotId = $map['IotId'];
        }
        if (isset($map['JobId'])) {
            $model->jobId = $map['JobId'];
        }
        if (isset($map['ModuleName'])) {
            $model->moduleName = $map['ModuleName'];
        }
        if (isset($map['ProductKey'])) {
            $model->productKey = $map['ProductKey'];
        }
        if (isset($map['ProductName'])) {
            $model->productName = $map['ProductName'];
        }
        if (isset($map['SrcVersion'])) {
            $model->srcVersion = $map['SrcVersion'];
        }
        if (isset($map['TaskId'])) {
            $model->taskId = $map['TaskId'];
        }
        if (isset($map['TaskStatus'])) {
            $model->taskStatus = $map['TaskStatus'];
        }
        if (isset($map['UtcCreate'])) {
            $model->utcCreate = $map['UtcCreate'];
        }
        if (isset($map['UtcModified'])) {
            $model->utcModified = $map['UtcModified'];
        }

        return $model;
    }
}
