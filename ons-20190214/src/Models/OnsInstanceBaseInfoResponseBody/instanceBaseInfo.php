<?php

// This file is auto-generated, don't edit it. Thanks.

namespace AlibabaCloud\SDK\Ons\V20190214\Models\OnsInstanceBaseInfoResponseBody;

use AlibabaCloud\SDK\Ons\V20190214\Models\OnsInstanceBaseInfoResponseBody\instanceBaseInfo\endpoints;
use AlibabaCloud\Tea\Model;

class instanceBaseInfo extends Model
{
    /**
     * @example 1570701259403
     *
     * @var string
     */
    public $createTime;

    /**
     * @description The endpoints that correspond to different protocols.
     *
     * @var endpoints
     */
    public $endpoints;

    /**
     * @description Indicates whether the instance uses a namespace. Valid values:
     *
     *   **true**: The instance uses a separate namespace. The name of each resource must be unique in the instance. The names of resources in different instances can be the same.
     *   **false**: The instance does not use a separate namespace. The name of each resource must be globally unique within and across all instances.
     *
     * @example true
     *
     * @var bool
     */
    public $independentNaming;

    /**
     * @description The ID of the instance.
     *
     * @example MQ_INST_138015630679****_BAAy1Hac
     *
     * @var string
     */
    public $instanceId;

    /**
     * @description The name of the instance.
     *
     * The name must be 3 to 64 characters in length and can contain letters, digits, hyphens (-), and underscores (\_).
     * @example test
     *
     * @var string
     */
    public $instanceName;

    /**
     * @description The status of the instance. Valid values:
     *
     *   **0**: The instance is being deployed. This value is valid only for Enterprise Platinum Edition instances.
     *   **2**: The instance has overdue payments. This value is valid only for Standard Edition instances.
     *   **5**: The instance is running. This value is valid for Standard Edition instances and Enterprise Platinum Edition instances.
     *   **7**: The instance is being upgraded and is running. This value is valid only for Enterprise Platinum Edition instances.
     *
     * @example 5
     *
     * @var int
     */
    public $instanceStatus;

    /**
     * @description The instance type. Valid values:
     *
     *   **1**: The instance is a Standard Edition instance that uses the pay-as-you-go billing method.
     *   **2**: The instance is an Enterprise Platinum Edition instance that uses the subscription billing method.
     *
     * For information about the editions and specifications of Message Queue for Apache RocketMQ instances, see [Instance editions](~~185261~~).
     * @example 2
     *
     * @var int
     */
    public $instanceType;

    /**
     * @description The maximum transactions per second (TPS) for sending and receiving messages. Valid values: 5000, 10000, 20000, 50000, 100000, 200000, 300000, 500000, 800000, and 1000000.
     *
     * >  This parameter is available only for Message Queue for Apache RocketMQ instances of the Enterprise Platinum Edition.
     * @example 10000
     *
     * @var int
     */
    public $maxTps;

    /**
     * @description The point in time when the Enterprise Platinum Edition instance expires.
     *
     * @example 1603555200000
     *
     * @var int
     */
    public $releaseTime;

    /**
     * @description The description of the instance.
     *
     * @example onspre-cn-m7r1r5f****
     *
     * @var string
     */
    public $remark;

    /**
     * @description The maximum number of topics that can be created on the instance. Valid values: 25, 50, 100, 300, and 500.
     *
     * >  This parameter is available only for Message Queue for Apache RocketMQ instances of the Enterprise Platinum Edition.
     * @example 50
     *
     * @var int
     */
    public $topicCapacity;

    /**
     * @example ons-cn-m7r1r5f****
     *
     * @var string
     */
    public $spInstanceId;

    /**
     * @example 1
     *
     * @var int
     */
    public $spInstanceType;
    protected $_name = [
        'createTime'        => 'CreateTime',
        'endpoints'         => 'Endpoints',
        'independentNaming' => 'IndependentNaming',
        'instanceId'        => 'InstanceId',
        'instanceName'      => 'InstanceName',
        'instanceStatus'    => 'InstanceStatus',
        'instanceType'      => 'InstanceType',
        'maxTps'            => 'MaxTps',
        'releaseTime'       => 'ReleaseTime',
        'remark'            => 'Remark',
        'topicCapacity'     => 'TopicCapacity',
        'spInstanceId'      => 'spInstanceId',
        'spInstanceType'    => 'spInstanceType',
    ];

    public function validate()
    {
    }

    public function toMap()
    {
        $res = [];
        if (null !== $this->createTime) {
            $res['CreateTime'] = $this->createTime;
        }
        if (null !== $this->endpoints) {
            $res['Endpoints'] = null !== $this->endpoints ? $this->endpoints->toMap() : null;
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

    /**
     * @param array $map
     *
     * @return instanceBaseInfo
     */
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
