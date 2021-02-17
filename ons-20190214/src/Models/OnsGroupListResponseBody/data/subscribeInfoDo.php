<?php

// This file is auto-generated, don't edit it. Thanks.

namespace AlibabaCloud\SDK\Ons\V20190214\Models\OnsGroupListResponseBody\data;

use AlibabaCloud\SDK\Ons\V20190214\Models\OnsGroupListResponseBody\data\subscribeInfoDo\tags;
use AlibabaCloud\Tea\Model;

class subscribeInfoDo extends Model
{
    /**
     * @var string
     */
    public $owner;

    /**
     * @var int
     */
    public $updateTime;

    /**
     * @var bool
     */
    public $independentNaming;

    /**
     * @var string
     */
    public $groupId;

    /**
     * @var string
     */
    public $remark;

    /**
     * @var int
     */
    public $createTime;

    /**
     * @var tags
     */
    public $tags;

    /**
     * @var string
     */
    public $instanceId;

    /**
     * @var string
     */
    public $groupType;
    protected $_name = [
        'owner'             => 'Owner',
        'updateTime'        => 'UpdateTime',
        'independentNaming' => 'IndependentNaming',
        'groupId'           => 'GroupId',
        'remark'            => 'Remark',
        'createTime'        => 'CreateTime',
        'tags'              => 'Tags',
        'instanceId'        => 'InstanceId',
        'groupType'         => 'GroupType',
    ];

    public function validate()
    {
    }

    public function toMap()
    {
        $res = [];
        if (null !== $this->owner) {
            $res['Owner'] = $this->owner;
        }
        if (null !== $this->updateTime) {
            $res['UpdateTime'] = $this->updateTime;
        }
        if (null !== $this->independentNaming) {
            $res['IndependentNaming'] = $this->independentNaming;
        }
        if (null !== $this->groupId) {
            $res['GroupId'] = $this->groupId;
        }
        if (null !== $this->remark) {
            $res['Remark'] = $this->remark;
        }
        if (null !== $this->createTime) {
            $res['CreateTime'] = $this->createTime;
        }
        if (null !== $this->tags) {
            $res['Tags'] = null !== $this->tags ? $this->tags->toMap() : null;
        }
        if (null !== $this->instanceId) {
            $res['InstanceId'] = $this->instanceId;
        }
        if (null !== $this->groupType) {
            $res['GroupType'] = $this->groupType;
        }

        return $res;
    }

    /**
     * @param array $map
     *
     * @return subscribeInfoDo
     */
    public static function fromMap($map = [])
    {
        $model = new self();
        if (isset($map['Owner'])) {
            $model->owner = $map['Owner'];
        }
        if (isset($map['UpdateTime'])) {
            $model->updateTime = $map['UpdateTime'];
        }
        if (isset($map['IndependentNaming'])) {
            $model->independentNaming = $map['IndependentNaming'];
        }
        if (isset($map['GroupId'])) {
            $model->groupId = $map['GroupId'];
        }
        if (isset($map['Remark'])) {
            $model->remark = $map['Remark'];
        }
        if (isset($map['CreateTime'])) {
            $model->createTime = $map['CreateTime'];
        }
        if (isset($map['Tags'])) {
            $model->tags = tags::fromMap($map['Tags']);
        }
        if (isset($map['InstanceId'])) {
            $model->instanceId = $map['InstanceId'];
        }
        if (isset($map['GroupType'])) {
            $model->groupType = $map['GroupType'];
        }

        return $model;
    }
}
