<?php

// This file is auto-generated, don't edit it. Thanks.

namespace AlibabaCloud\SDK\Ons\V20190214\Models\OnsInstanceInServiceListResponseBody\data;

use AlibabaCloud\SDK\Ons\V20190214\Models\OnsInstanceInServiceListResponseBody\data\instanceVO\tags;
use AlibabaCloud\Tea\Model;

class instanceVO extends Model
{
    /**
     * @description The time when the instance was created. The value of this parameter is a UNIX timestamp in milliseconds.
     *
     * @example 1640847284000
     *
     * @var int
     */
    public $createTime;

    /**
     * @var int
     */
    public $groupCount;

    /**
     * @description Indicates whether the instance uses a namespace. Valid values:
     *
     *   **true**: The instance uses a separate namespace. The name of each resource must be unique in the instance. The names of resources in different instances can be the same.
     *   **false**: The instance does not use a separate namespace. The name of each resource must be globally unique within the instance and across all instances.
     *
     * @example true
     *
     * @var bool
     */
    public $independentNaming;

    /**
     * @description The ID of the instance
     *
     * @example MQ_INST_188077086902****_BXSuW61e
     *
     * @var string
     */
    public $instanceId;

    /**
     * @description The name of the instance.
     *
     * The name must be 3 to 64 characters in length and can contain letters, digits, hyphens (-), and underscores (\_).
     * @example test1
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
     *   **1**: Standard Edition instances
     *   **2**: Enterprise Platinum Edition instances
     *
     * For more information about the instance editions and differences between the editions, see [Instance editions](~~185261~~).
     * @example 2
     *
     * @var int
     */
    public $instanceType;

    /**
     * @description The time when the instance expires. If the instance is an Enterprise Platinum Edition instance, this parameter is returned.
     *
     * @example 1551024000000
     *
     * @var int
     */
    public $releaseTime;

    /**
     * @description The tags that are attached to the instance you want to query.
     *
     * @var tags
     */
    public $tags;

    /**
     * @var int
     */
    public $topicCount;
    protected $_name = [
        'createTime'        => 'CreateTime',
        'groupCount'        => 'GroupCount',
        'independentNaming' => 'IndependentNaming',
        'instanceId'        => 'InstanceId',
        'instanceName'      => 'InstanceName',
        'instanceStatus'    => 'InstanceStatus',
        'instanceType'      => 'InstanceType',
        'releaseTime'       => 'ReleaseTime',
        'tags'              => 'Tags',
        'topicCount'        => 'TopicCount',
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
        if (null !== $this->groupCount) {
            $res['GroupCount'] = $this->groupCount;
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
        if (null !== $this->releaseTime) {
            $res['ReleaseTime'] = $this->releaseTime;
        }
        if (null !== $this->tags) {
            $res['Tags'] = null !== $this->tags ? $this->tags->toMap() : null;
        }
        if (null !== $this->topicCount) {
            $res['TopicCount'] = $this->topicCount;
        }

        return $res;
    }

    /**
     * @param array $map
     *
     * @return instanceVO
     */
    public static function fromMap($map = [])
    {
        $model = new self();
        if (isset($map['CreateTime'])) {
            $model->createTime = $map['CreateTime'];
        }
        if (isset($map['GroupCount'])) {
            $model->groupCount = $map['GroupCount'];
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
        if (isset($map['ReleaseTime'])) {
            $model->releaseTime = $map['ReleaseTime'];
        }
        if (isset($map['Tags'])) {
            $model->tags = tags::fromMap($map['Tags']);
        }
        if (isset($map['TopicCount'])) {
            $model->topicCount = $map['TopicCount'];
        }

        return $model;
    }
}
