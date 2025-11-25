<?php

// This file is auto-generated, don't edit it. Thanks.

namespace AlibabaCloud\SDK\Ons\V20190214\Models\OnsGroupListResponseBody\data;

use AlibabaCloud\Dara\Model;
use AlibabaCloud\SDK\Ons\V20190214\Models\OnsGroupListResponseBody\data\subscribeInfoDo\tags;

class subscribeInfoDo extends Model
{
    /**
     * @var int
     */
    public $createTime;

    /**
     * @var string
     */
    public $groupId;

    /**
     * @var string
     */
    public $groupType;

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
    public $owner;

    /**
     * @var string
     */
    public $remark;

    /**
     * @var tags
     */
    public $tags;

    /**
     * @var int
     */
    public $updateTime;
    protected $_name = [
        'createTime' => 'CreateTime',
        'groupId' => 'GroupId',
        'groupType' => 'GroupType',
        'independentNaming' => 'IndependentNaming',
        'instanceId' => 'InstanceId',
        'owner' => 'Owner',
        'remark' => 'Remark',
        'tags' => 'Tags',
        'updateTime' => 'UpdateTime',
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

        if (null !== $this->groupId) {
            $res['GroupId'] = $this->groupId;
        }

        if (null !== $this->groupType) {
            $res['GroupType'] = $this->groupType;
        }

        if (null !== $this->independentNaming) {
            $res['IndependentNaming'] = $this->independentNaming;
        }

        if (null !== $this->instanceId) {
            $res['InstanceId'] = $this->instanceId;
        }

        if (null !== $this->owner) {
            $res['Owner'] = $this->owner;
        }

        if (null !== $this->remark) {
            $res['Remark'] = $this->remark;
        }

        if (null !== $this->tags) {
            $res['Tags'] = null !== $this->tags ? $this->tags->toArray($noStream) : $this->tags;
        }

        if (null !== $this->updateTime) {
            $res['UpdateTime'] = $this->updateTime;
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

        if (isset($map['GroupId'])) {
            $model->groupId = $map['GroupId'];
        }

        if (isset($map['GroupType'])) {
            $model->groupType = $map['GroupType'];
        }

        if (isset($map['IndependentNaming'])) {
            $model->independentNaming = $map['IndependentNaming'];
        }

        if (isset($map['InstanceId'])) {
            $model->instanceId = $map['InstanceId'];
        }

        if (isset($map['Owner'])) {
            $model->owner = $map['Owner'];
        }

        if (isset($map['Remark'])) {
            $model->remark = $map['Remark'];
        }

        if (isset($map['Tags'])) {
            $model->tags = tags::fromMap($map['Tags']);
        }

        if (isset($map['UpdateTime'])) {
            $model->updateTime = $map['UpdateTime'];
        }

        return $model;
    }
}
