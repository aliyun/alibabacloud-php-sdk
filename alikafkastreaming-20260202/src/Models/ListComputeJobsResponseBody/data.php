<?php

// This file is auto-generated, don't edit it. Thanks.

namespace AlibabaCloud\SDK\AlikafkaStreaming\V20260202\Models\ListComputeJobsResponseBody;

use AlibabaCloud\Dara\Model;

class data extends Model
{
    /**
     * @var string
     */
    public $createTime;

    /**
     * @var float
     */
    public $cuLimit;

    /**
     * @var float
     */
    public $cuReserved;

    /**
     * @var float
     */
    public $cuUsed;

    /**
     * @var int
     */
    public $debugMode;

    /**
     * @var string
     */
    public $instanceId;

    /**
     * @var string
     */
    public $jobName;

    /**
     * @var string
     */
    public $owner;

    /**
     * @var string
     */
    public $regionId;

    /**
     * @var string
     */
    public $remark;

    /**
     * @var string
     */
    public $status;
    protected $_name = [
        'createTime' => 'CreateTime',
        'cuLimit' => 'CuLimit',
        'cuReserved' => 'CuReserved',
        'cuUsed' => 'CuUsed',
        'debugMode' => 'DebugMode',
        'instanceId' => 'InstanceId',
        'jobName' => 'JobName',
        'owner' => 'Owner',
        'regionId' => 'RegionId',
        'remark' => 'Remark',
        'status' => 'Status',
    ];

    public function validate()
    {
        parent::validate();
    }

    public function toArray($noStream = false)
    {
        $res = [];
        if (null !== $this->createTime) {
            $res['CreateTime'] = $this->createTime;
        }

        if (null !== $this->cuLimit) {
            $res['CuLimit'] = $this->cuLimit;
        }

        if (null !== $this->cuReserved) {
            $res['CuReserved'] = $this->cuReserved;
        }

        if (null !== $this->cuUsed) {
            $res['CuUsed'] = $this->cuUsed;
        }

        if (null !== $this->debugMode) {
            $res['DebugMode'] = $this->debugMode;
        }

        if (null !== $this->instanceId) {
            $res['InstanceId'] = $this->instanceId;
        }

        if (null !== $this->jobName) {
            $res['JobName'] = $this->jobName;
        }

        if (null !== $this->owner) {
            $res['Owner'] = $this->owner;
        }

        if (null !== $this->regionId) {
            $res['RegionId'] = $this->regionId;
        }

        if (null !== $this->remark) {
            $res['Remark'] = $this->remark;
        }

        if (null !== $this->status) {
            $res['Status'] = $this->status;
        }

        return $res;
    }

    public function toMap($noStream = false)
    {
        return $this->toArray($noStream);
    }

    public static function fromMap($map = [])
    {
        $model = new self();
        if (isset($map['CreateTime'])) {
            $model->createTime = $map['CreateTime'];
        }

        if (isset($map['CuLimit'])) {
            $model->cuLimit = $map['CuLimit'];
        }

        if (isset($map['CuReserved'])) {
            $model->cuReserved = $map['CuReserved'];
        }

        if (isset($map['CuUsed'])) {
            $model->cuUsed = $map['CuUsed'];
        }

        if (isset($map['DebugMode'])) {
            $model->debugMode = $map['DebugMode'];
        }

        if (isset($map['InstanceId'])) {
            $model->instanceId = $map['InstanceId'];
        }

        if (isset($map['JobName'])) {
            $model->jobName = $map['JobName'];
        }

        if (isset($map['Owner'])) {
            $model->owner = $map['Owner'];
        }

        if (isset($map['RegionId'])) {
            $model->regionId = $map['RegionId'];
        }

        if (isset($map['Remark'])) {
            $model->remark = $map['Remark'];
        }

        if (isset($map['Status'])) {
            $model->status = $map['Status'];
        }

        return $model;
    }
}
