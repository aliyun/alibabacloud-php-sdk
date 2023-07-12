<?php

// This file is auto-generated, don't edit it. Thanks.

namespace AlibabaCloud\SDK\Iot\V20180120\Models\ListOTATaskByJobResponse\data;

use AlibabaCloud\Tea\Model;

class simpleOTATaskInfo extends Model
{
    /**
     * @var string
     */
    public $destVersion;

    /**
     * @var string
     */
    public $deviceName;

    /**
     * @var string
     */
    public $firmwareId;

    /**
     * @var string
     */
    public $iotId;

    /**
     * @var string
     */
    public $jobId;

    /**
     * @var string
     */
    public $productKey;

    /**
     * @var string
     */
    public $productName;

    /**
     * @var string
     */
    public $progress;

    /**
     * @var string
     */
    public $srcVersion;

    /**
     * @var string
     */
    public $taskDesc;

    /**
     * @var string
     */
    public $taskId;

    /**
     * @var string
     */
    public $taskStatus;

    /**
     * @var string
     */
    public $timeout;

    /**
     * @var string
     */
    public $utcCreate;

    /**
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
        Model::validateRequired('destVersion', $this->destVersion, true);
        Model::validateRequired('deviceName', $this->deviceName, true);
        Model::validateRequired('firmwareId', $this->firmwareId, true);
        Model::validateRequired('iotId', $this->iotId, true);
        Model::validateRequired('jobId', $this->jobId, true);
        Model::validateRequired('productKey', $this->productKey, true);
        Model::validateRequired('productName', $this->productName, true);
        Model::validateRequired('progress', $this->progress, true);
        Model::validateRequired('srcVersion', $this->srcVersion, true);
        Model::validateRequired('taskDesc', $this->taskDesc, true);
        Model::validateRequired('taskId', $this->taskId, true);
        Model::validateRequired('taskStatus', $this->taskStatus, true);
        Model::validateRequired('timeout', $this->timeout, true);
        Model::validateRequired('utcCreate', $this->utcCreate, true);
        Model::validateRequired('utcModified', $this->utcModified, true);
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
