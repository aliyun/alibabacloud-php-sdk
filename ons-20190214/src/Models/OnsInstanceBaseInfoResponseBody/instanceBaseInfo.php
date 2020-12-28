<?php

// This file is auto-generated, don't edit it. Thanks.

namespace AlibabaCloud\SDK\Ons\V20190214\Models\OnsInstanceBaseInfoResponseBody;

use AlibabaCloud\SDK\Ons\V20190214\Models\OnsInstanceBaseInfoResponseBody\instanceBaseInfo\endpoints;
use AlibabaCloud\Tea\Model;

class instanceBaseInfo extends Model
{
    /**
     * @var endpoints
     */
    public $endpoints;

    /**
     * @var bool
     */
    public $independentNaming;

    /**
     * @var int
     */
    public $maxTps;

    /**
     * @var string
     */
    public $remark;

    /**
     * @var string
     */
    public $instanceName;

    /**
     * @var int
     */
    public $releaseTime;

    /**
     * @var int
     */
    public $topicCapacity;

    /**
     * @var int
     */
    public $instanceStatus;

    /**
     * @var string
     */
    public $instanceId;

    /**
     * @var int
     */
    public $instanceType;
    protected $_name = [
        'endpoints'         => 'Endpoints',
        'independentNaming' => 'IndependentNaming',
        'maxTps'            => 'MaxTps',
        'remark'            => 'Remark',
        'instanceName'      => 'InstanceName',
        'releaseTime'       => 'ReleaseTime',
        'topicCapacity'     => 'TopicCapacity',
        'instanceStatus'    => 'InstanceStatus',
        'instanceId'        => 'InstanceId',
        'instanceType'      => 'InstanceType',
    ];

    public function validate()
    {
    }

    public function toMap()
    {
        $res = [];
        if (null !== $this->endpoints) {
            $res['Endpoints'] = null !== $this->endpoints ? $this->endpoints->toMap() : null;
        }
        if (null !== $this->independentNaming) {
            $res['IndependentNaming'] = $this->independentNaming;
        }
        if (null !== $this->maxTps) {
            $res['MaxTps'] = $this->maxTps;
        }
        if (null !== $this->remark) {
            $res['Remark'] = $this->remark;
        }
        if (null !== $this->instanceName) {
            $res['InstanceName'] = $this->instanceName;
        }
        if (null !== $this->releaseTime) {
            $res['ReleaseTime'] = $this->releaseTime;
        }
        if (null !== $this->topicCapacity) {
            $res['TopicCapacity'] = $this->topicCapacity;
        }
        if (null !== $this->instanceStatus) {
            $res['InstanceStatus'] = $this->instanceStatus;
        }
        if (null !== $this->instanceId) {
            $res['InstanceId'] = $this->instanceId;
        }
        if (null !== $this->instanceType) {
            $res['InstanceType'] = $this->instanceType;
        }

        return $res;
    }

    /**
     * @param array $map
     *
     * @return instanceBaseInfo
     */
    public static function fromMap($map = [])
    {
        $model = new self();
        if (isset($map['Endpoints'])) {
            $model->endpoints = endpoints::fromMap($map['Endpoints']);
        }
        if (isset($map['IndependentNaming'])) {
            $model->independentNaming = $map['IndependentNaming'];
        }
        if (isset($map['MaxTps'])) {
            $model->maxTps = $map['MaxTps'];
        }
        if (isset($map['Remark'])) {
            $model->remark = $map['Remark'];
        }
        if (isset($map['InstanceName'])) {
            $model->instanceName = $map['InstanceName'];
        }
        if (isset($map['ReleaseTime'])) {
            $model->releaseTime = $map['ReleaseTime'];
        }
        if (isset($map['TopicCapacity'])) {
            $model->topicCapacity = $map['TopicCapacity'];
        }
        if (isset($map['InstanceStatus'])) {
            $model->instanceStatus = $map['InstanceStatus'];
        }
        if (isset($map['InstanceId'])) {
            $model->instanceId = $map['InstanceId'];
        }
        if (isset($map['InstanceType'])) {
            $model->instanceType = $map['InstanceType'];
        }

        return $model;
    }
}
