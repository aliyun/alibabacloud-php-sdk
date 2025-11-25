<?php

// This file is auto-generated, don't edit it. Thanks.

namespace AlibabaCloud\SDK\Ons\V20190214\Models\OnsInstanceBaseInfoResponseBody;

use AlibabaCloud\Dara\Model;
use AlibabaCloud\SDK\Ons\V20190214\Models\OnsInstanceBaseInfoResponseBody\instanceBaseInfo\endpoints;

class instanceBaseInfo extends Model
{
    /**
     * @var string
     */
    public $createTime;

    /**
     * @var endpoints
     */
    public $endpoints;

    /**
     * @var bool
     */
    public $independentNaming;

    /**
     * @var string
     */
    public $instanceId;

    /**
     * @var string
     */
    public $instanceName;

    /**
     * @var int
     */
    public $instanceStatus;

    /**
     * @var int
     */
    public $instanceType;

    /**
     * @var int
     */
    public $maxTps;

    /**
     * @var int
     */
    public $releaseTime;

    /**
     * @var string
     */
    public $remark;

    /**
     * @var int
     */
    public $topicCapacity;

    /**
     * @var string
     */
    public $spInstanceId;

    /**
     * @var int
     */
    public $spInstanceType;
    protected $_name = [
        'createTime' => 'CreateTime',
        'endpoints' => 'Endpoints',
        'independentNaming' => 'IndependentNaming',
        'instanceId' => 'InstanceId',
        'instanceName' => 'InstanceName',
        'instanceStatus' => 'InstanceStatus',
        'instanceType' => 'InstanceType',
        'maxTps' => 'MaxTps',
        'releaseTime' => 'ReleaseTime',
        'remark' => 'Remark',
        'topicCapacity' => 'TopicCapacity',
        'spInstanceId' => 'spInstanceId',
        'spInstanceType' => 'spInstanceType',
    ];

    public function validate()
    {
        if (null !== $this->endpoints) {
            $this->endpoints->validate();
        }
        parent::validate();
    }

    public function toArray($noStream = false)
    {
        $res = [];
        if (null !== $this->createTime) {
            $res['CreateTime'] = $this->createTime;
        }

        if (null !== $this->endpoints) {
            $res['Endpoints'] = null !== $this->endpoints ? $this->endpoints->toArray($noStream) : $this->endpoints;
        }

        if (null !== $this->independentNaming) {
            $res['IndependentNaming'] = $this->independentNaming;
        }

        if (null !== $this->instanceId) {
            $res['InstanceId'] = $this->instanceId;
        }

        if (null !== $this->instanceName) {
            $res['InstanceName'] = $this->instanceName;
        }

        if (null !== $this->instanceStatus) {
            $res['InstanceStatus'] = $this->instanceStatus;
        }

        if (null !== $this->instanceType) {
            $res['InstanceType'] = $this->instanceType;
        }

        if (null !== $this->maxTps) {
            $res['MaxTps'] = $this->maxTps;
        }

        if (null !== $this->releaseTime) {
            $res['ReleaseTime'] = $this->releaseTime;
        }

        if (null !== $this->remark) {
            $res['Remark'] = $this->remark;
        }

        if (null !== $this->topicCapacity) {
            $res['TopicCapacity'] = $this->topicCapacity;
        }

        if (null !== $this->spInstanceId) {
            $res['spInstanceId'] = $this->spInstanceId;
        }

        if (null !== $this->spInstanceType) {
            $res['spInstanceType'] = $this->spInstanceType;
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

        if (isset($map['Endpoints'])) {
            $model->endpoints = endpoints::fromMap($map['Endpoints']);
        }

        if (isset($map['IndependentNaming'])) {
            $model->independentNaming = $map['IndependentNaming'];
        }

        if (isset($map['InstanceId'])) {
            $model->instanceId = $map['InstanceId'];
        }

        if (isset($map['InstanceName'])) {
            $model->instanceName = $map['InstanceName'];
        }

        if (isset($map['InstanceStatus'])) {
            $model->instanceStatus = $map['InstanceStatus'];
        }

        if (isset($map['InstanceType'])) {
            $model->instanceType = $map['InstanceType'];
        }

        if (isset($map['MaxTps'])) {
            $model->maxTps = $map['MaxTps'];
        }

        if (isset($map['ReleaseTime'])) {
            $model->releaseTime = $map['ReleaseTime'];
        }

        if (isset($map['Remark'])) {
            $model->remark = $map['Remark'];
        }

        if (isset($map['TopicCapacity'])) {
            $model->topicCapacity = $map['TopicCapacity'];
        }

        if (isset($map['spInstanceId'])) {
            $model->spInstanceId = $map['spInstanceId'];
        }

        if (isset($map['spInstanceType'])) {
            $model->spInstanceType = $map['spInstanceType'];
        }

        return $model;
    }
}
