<?php

// This file is auto-generated, don't edit it. Thanks.

namespace AlibabaCloud\SDK\Ons\V20190214\Models\OnsInstanceInServiceListResponseBody\data;

use AlibabaCloud\Dara\Model;
use AlibabaCloud\SDK\Ons\V20190214\Models\OnsInstanceInServiceListResponseBody\data\instanceVO\tags;

class instanceVO extends Model
{
    /**
     * @var int
     */
    public $createTime;

    /**
     * @var int
     */
    public $groupCount;

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
    public $releaseTime;

    /**
     * @var tags
     */
    public $tags;

    /**
     * @var int
     */
    public $topicCount;
    protected $_name = [
        'createTime' => 'CreateTime',
        'groupCount' => 'GroupCount',
        'independentNaming' => 'IndependentNaming',
        'instanceId' => 'InstanceId',
        'instanceName' => 'InstanceName',
        'instanceStatus' => 'InstanceStatus',
        'instanceType' => 'InstanceType',
        'releaseTime' => 'ReleaseTime',
        'tags' => 'Tags',
        'topicCount' => 'TopicCount',
    ];

    public function validate()
    {
        if (null !== $this->tags) {
            $this->tags->validate();
        }
        parent::validate();
    }

    public function toArray($noStream = false)
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
            $res['Tags'] = null !== $this->tags ? $this->tags->toArray($noStream) : $this->tags;
        }

        if (null !== $this->topicCount) {
            $res['TopicCount'] = $this->topicCount;
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
