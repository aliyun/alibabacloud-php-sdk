<?php

// This file is auto-generated, don't edit it. Thanks.

namespace AlibabaCloud\SDK\Sae\V20190506\Models\DescribeApplicationInstancesResponseBody\data;

use AlibabaCloud\Dara\Model;
use AlibabaCloud\SDK\Sae\V20190506\Models\DescribeApplicationInstancesResponseBody\data\instances\sidecarContainersStatus;

class instances extends Model
{
    /**
     * @var int
     */
    public $createTimeStamp;

    /**
     * @var bool
     */
    public $debugStatus;

    /**
     * @var string
     */
    public $eip;

    /**
     * @var int
     */
    public $finishTimeStamp;

    /**
     * @var string
     */
    public $groupId;

    /**
     * @var string
     */
    public $imageUrl;

    /**
     * @var string
     */
    public $instanceContainerIp;

    /**
     * @var int
     */
    public $instanceContainerRestarts;

    /**
     * @var string
     */
    public $instanceContainerStatus;

    /**
     * @var string
     */
    public $instanceHealthStatus;

    /**
     * @var string
     */
    public $instanceId;

    /**
     * @var string
     */
    public $mainContainerStatus;

    /**
     * @var string
     */
    public $packageVersion;

    /**
     * @var sidecarContainersStatus[]
     */
    public $sidecarContainersStatus;

    /**
     * @var int
     */
    public $timestamp;

    /**
     * @var string
     */
    public $trafficStatus;

    /**
     * @var string
     */
    public $unhealthyMessage;

    /**
     * @var string
     */
    public $vSwitchId;
    protected $_name = [
        'createTimeStamp' => 'CreateTimeStamp',
        'debugStatus' => 'DebugStatus',
        'eip' => 'Eip',
        'finishTimeStamp' => 'FinishTimeStamp',
        'groupId' => 'GroupId',
        'imageUrl' => 'ImageUrl',
        'instanceContainerIp' => 'InstanceContainerIp',
        'instanceContainerRestarts' => 'InstanceContainerRestarts',
        'instanceContainerStatus' => 'InstanceContainerStatus',
        'instanceHealthStatus' => 'InstanceHealthStatus',
        'instanceId' => 'InstanceId',
        'mainContainerStatus' => 'MainContainerStatus',
        'packageVersion' => 'PackageVersion',
        'sidecarContainersStatus' => 'SidecarContainersStatus',
        'timestamp' => 'Timestamp',
        'trafficStatus' => 'TrafficStatus',
        'unhealthyMessage' => 'UnhealthyMessage',
        'vSwitchId' => 'VSwitchId',
    ];

    public function validate()
    {
        if (\is_array($this->sidecarContainersStatus)) {
            Model::validateArray($this->sidecarContainersStatus);
        }
        parent::validate();
    }

    public function toArray($noStream = false)
    {
        $res = [];
        if (null !== $this->createTimeStamp) {
            $res['CreateTimeStamp'] = $this->createTimeStamp;
        }

        if (null !== $this->debugStatus) {
            $res['DebugStatus'] = $this->debugStatus;
        }

        if (null !== $this->eip) {
            $res['Eip'] = $this->eip;
        }

        if (null !== $this->finishTimeStamp) {
            $res['FinishTimeStamp'] = $this->finishTimeStamp;
        }

        if (null !== $this->groupId) {
            $res['GroupId'] = $this->groupId;
        }

        if (null !== $this->imageUrl) {
            $res['ImageUrl'] = $this->imageUrl;
        }

        if (null !== $this->instanceContainerIp) {
            $res['InstanceContainerIp'] = $this->instanceContainerIp;
        }

        if (null !== $this->instanceContainerRestarts) {
            $res['InstanceContainerRestarts'] = $this->instanceContainerRestarts;
        }

        if (null !== $this->instanceContainerStatus) {
            $res['InstanceContainerStatus'] = $this->instanceContainerStatus;
        }

        if (null !== $this->instanceHealthStatus) {
            $res['InstanceHealthStatus'] = $this->instanceHealthStatus;
        }

        if (null !== $this->instanceId) {
            $res['InstanceId'] = $this->instanceId;
        }

        if (null !== $this->mainContainerStatus) {
            $res['MainContainerStatus'] = $this->mainContainerStatus;
        }

        if (null !== $this->packageVersion) {
            $res['PackageVersion'] = $this->packageVersion;
        }

        if (null !== $this->sidecarContainersStatus) {
            if (\is_array($this->sidecarContainersStatus)) {
                $res['SidecarContainersStatus'] = [];
                $n1 = 0;
                foreach ($this->sidecarContainersStatus as $item1) {
                    $res['SidecarContainersStatus'][$n1] = null !== $item1 ? $item1->toArray($noStream) : $item1;
                    ++$n1;
                }
            }
        }

        if (null !== $this->timestamp) {
            $res['Timestamp'] = $this->timestamp;
        }

        if (null !== $this->trafficStatus) {
            $res['TrafficStatus'] = $this->trafficStatus;
        }

        if (null !== $this->unhealthyMessage) {
            $res['UnhealthyMessage'] = $this->unhealthyMessage;
        }

        if (null !== $this->vSwitchId) {
            $res['VSwitchId'] = $this->vSwitchId;
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
        if (isset($map['CreateTimeStamp'])) {
            $model->createTimeStamp = $map['CreateTimeStamp'];
        }

        if (isset($map['DebugStatus'])) {
            $model->debugStatus = $map['DebugStatus'];
        }

        if (isset($map['Eip'])) {
            $model->eip = $map['Eip'];
        }

        if (isset($map['FinishTimeStamp'])) {
            $model->finishTimeStamp = $map['FinishTimeStamp'];
        }

        if (isset($map['GroupId'])) {
            $model->groupId = $map['GroupId'];
        }

        if (isset($map['ImageUrl'])) {
            $model->imageUrl = $map['ImageUrl'];
        }

        if (isset($map['InstanceContainerIp'])) {
            $model->instanceContainerIp = $map['InstanceContainerIp'];
        }

        if (isset($map['InstanceContainerRestarts'])) {
            $model->instanceContainerRestarts = $map['InstanceContainerRestarts'];
        }

        if (isset($map['InstanceContainerStatus'])) {
            $model->instanceContainerStatus = $map['InstanceContainerStatus'];
        }

        if (isset($map['InstanceHealthStatus'])) {
            $model->instanceHealthStatus = $map['InstanceHealthStatus'];
        }

        if (isset($map['InstanceId'])) {
            $model->instanceId = $map['InstanceId'];
        }

        if (isset($map['MainContainerStatus'])) {
            $model->mainContainerStatus = $map['MainContainerStatus'];
        }

        if (isset($map['PackageVersion'])) {
            $model->packageVersion = $map['PackageVersion'];
        }

        if (isset($map['SidecarContainersStatus'])) {
            if (!empty($map['SidecarContainersStatus'])) {
                $model->sidecarContainersStatus = [];
                $n1 = 0;
                foreach ($map['SidecarContainersStatus'] as $item1) {
                    $model->sidecarContainersStatus[$n1] = sidecarContainersStatus::fromMap($item1);
                    ++$n1;
                }
            }
        }

        if (isset($map['Timestamp'])) {
            $model->timestamp = $map['Timestamp'];
        }

        if (isset($map['TrafficStatus'])) {
            $model->trafficStatus = $map['TrafficStatus'];
        }

        if (isset($map['UnhealthyMessage'])) {
            $model->unhealthyMessage = $map['UnhealthyMessage'];
        }

        if (isset($map['VSwitchId'])) {
            $model->vSwitchId = $map['VSwitchId'];
        }

        return $model;
    }
}
