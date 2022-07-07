<?php

// This file is auto-generated, don't edit it. Thanks.

namespace AlibabaCloud\SDK\Sae\V20190506\Models\DescribeApplicationInstancesResponseBody\data;

use AlibabaCloud\Tea\Model;

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
    public $packageVersion;

    /**
     * @var string
     */
    public $vSwitchId;
    protected $_name = [
        'createTimeStamp'           => 'CreateTimeStamp',
        'debugStatus'               => 'DebugStatus',
        'eip'                       => 'Eip',
        'finishTimeStamp'           => 'FinishTimeStamp',
        'groupId'                   => 'GroupId',
        'imageUrl'                  => 'ImageUrl',
        'instanceContainerIp'       => 'InstanceContainerIp',
        'instanceContainerRestarts' => 'InstanceContainerRestarts',
        'instanceContainerStatus'   => 'InstanceContainerStatus',
        'instanceHealthStatus'      => 'InstanceHealthStatus',
        'instanceId'                => 'InstanceId',
        'packageVersion'            => 'PackageVersion',
        'vSwitchId'                 => 'VSwitchId',
    ];

    public function validate()
    {
    }

    public function toMap()
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
        if (null !== $this->packageVersion) {
            $res['PackageVersion'] = $this->packageVersion;
        }
        if (null !== $this->vSwitchId) {
            $res['VSwitchId'] = $this->vSwitchId;
        }

        return $res;
    }

    /**
     * @param array $map
     *
     * @return instances
     */
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
        if (isset($map['PackageVersion'])) {
            $model->packageVersion = $map['PackageVersion'];
        }
        if (isset($map['VSwitchId'])) {
            $model->vSwitchId = $map['VSwitchId'];
        }

        return $model;
    }
}
