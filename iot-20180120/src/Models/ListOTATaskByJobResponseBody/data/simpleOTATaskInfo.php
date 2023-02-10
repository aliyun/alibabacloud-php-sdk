<?php

// This file is auto-generated, don't edit it. Thanks.

namespace AlibabaCloud\SDK\Iot\V20180120\Models\ListOTATaskByJobResponseBody\data;

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
     * @example testDevice2
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
     * @example 0.00
     *
     * @var string
     */
    public $progress;

    /**
     * @example 1.0.0
     *
     * @var string
     */
    public $srcVersion;

    /**
     * @example report version is not conform
     *
     * @var string
     */
    public $taskDesc;

    /**
     * @example y3tOmCDNgpR8F9jnVEzC01****
     *
     * @var string
     */
    public $taskId;

    /**
     * @example FAILED
     *
     * @var string
     */
    public $taskStatus;

    /**
     * @example 1440
     *
     * @var string
     */
    public $timeout;

    /**
     * @example 2019-11-04T03:38:22.000Z
     *
     * @var string
     */
    public $utcCreate;

    /**
     * @example 2019-11-04T03:38:22.000Z
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
        'productKey'  => 'ProductKey',
        'productName' => 'ProductName',
        'progress'    => 'Progress',
        'srcVersion'  => 'SrcVersion',
        'taskDesc'    => 'TaskDesc',
        'taskId'      => 'TaskId',
        'taskStatus'  => 'TaskStatus',
        'timeout'     => 'Timeout',
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
        if (null !== $this->productKey) {
            $res['ProductKey'] = $this->productKey;
        }
        if (null !== $this->productName) {
            $res['ProductName'] = $this->productName;
        }
        if (null !== $this->progress) {
            $res['Progress'] = $this->progress;
        }
        if (null !== $this->srcVersion) {
            $res['SrcVersion'] = $this->srcVersion;
        }
        if (null !== $this->taskDesc) {
            $res['TaskDesc'] = $this->taskDesc;
        }
        if (null !== $this->taskId) {
            $res['TaskId'] = $this->taskId;
        }
        if (null !== $this->taskStatus) {
            $res['TaskStatus'] = $this->taskStatus;
        }
        if (null !== $this->timeout) {
            $res['Timeout'] = $this->timeout;
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
        if (isset($map['ProductKey'])) {
            $model->productKey = $map['ProductKey'];
        }
        if (isset($map['ProductName'])) {
            $model->productName = $map['ProductName'];
        }
        if (isset($map['Progress'])) {
            $model->progress = $map['Progress'];
        }
        if (isset($map['SrcVersion'])) {
            $model->srcVersion = $map['SrcVersion'];
        }
        if (isset($map['TaskDesc'])) {
            $model->taskDesc = $map['TaskDesc'];
        }
        if (isset($map['TaskId'])) {
            $model->taskId = $map['TaskId'];
        }
        if (isset($map['TaskStatus'])) {
            $model->taskStatus = $map['TaskStatus'];
        }
        if (isset($map['Timeout'])) {
            $model->timeout = $map['Timeout'];
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
