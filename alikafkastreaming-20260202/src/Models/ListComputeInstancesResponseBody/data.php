<?php

// This file is auto-generated, don't edit it. Thanks.

namespace AlibabaCloud\SDK\AlikafkaStreaming\V20260202\Models\ListComputeInstancesResponseBody;

use AlibabaCloud\Dara\Model;

class data extends Model
{
    /**
     * @var string
     */
    public $createTime;

    /**
     * @var int
     */
    public $cu;

    /**
     * @var string
     */
    public $instanceId;

    /**
     * @var string
     */
    public $instanceName;

    /**
     * @var string
     */
    public $serviceStatus;

    /**
     * @var int
     */
    public $totalJobs;

    /**
     * @var int
     */
    public $totalRunningJobs;
    protected $_name = [
        'createTime' => 'CreateTime',
        'cu' => 'Cu',
        'instanceId' => 'InstanceId',
        'instanceName' => 'InstanceName',
        'serviceStatus' => 'ServiceStatus',
        'totalJobs' => 'TotalJobs',
        'totalRunningJobs' => 'TotalRunningJobs',
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

        if (null !== $this->cu) {
            $res['Cu'] = $this->cu;
        }

        if (null !== $this->instanceId) {
            $res['InstanceId'] = $this->instanceId;
        }

        if (null !== $this->instanceName) {
            $res['InstanceName'] = $this->instanceName;
        }

        if (null !== $this->serviceStatus) {
            $res['ServiceStatus'] = $this->serviceStatus;
        }

        if (null !== $this->totalJobs) {
            $res['TotalJobs'] = $this->totalJobs;
        }

        if (null !== $this->totalRunningJobs) {
            $res['TotalRunningJobs'] = $this->totalRunningJobs;
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

        if (isset($map['Cu'])) {
            $model->cu = $map['Cu'];
        }

        if (isset($map['InstanceId'])) {
            $model->instanceId = $map['InstanceId'];
        }

        if (isset($map['InstanceName'])) {
            $model->instanceName = $map['InstanceName'];
        }

        if (isset($map['ServiceStatus'])) {
            $model->serviceStatus = $map['ServiceStatus'];
        }

        if (isset($map['TotalJobs'])) {
            $model->totalJobs = $map['TotalJobs'];
        }

        if (isset($map['TotalRunningJobs'])) {
            $model->totalRunningJobs = $map['TotalRunningJobs'];
        }

        return $model;
    }
}
