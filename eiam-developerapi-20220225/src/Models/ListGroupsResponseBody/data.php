<?php

// This file is auto-generated, don't edit it. Thanks.

namespace AlibabaCloud\SDK\Eiamdeveloperapi\V20220225\Models\ListGroupsResponseBody;

use AlibabaCloud\Tea\Model;

class data extends Model
{
    /**
     * @example 1652085686179
     *
     * @var int
     */
    public $createTime;

    /**
     * @example description_demo
     *
     * @var string
     */
    public $description;

    /**
     * @example group_ufdsasn35ea5lmthk267xxxxx
     *
     * @var string
     */
    public $groupExternalId;

    /**
     * @example group_ufdsasn35ea5lmthk267xxxxx
     *
     * @var string
     */
    public $groupId;

    /**
     * @example name_test
     *
     * @var string
     */
    public $groupName;

    /**
     * @example idaas_ue2jvisn35ea5lmthk267xxxxx
     *
     * @var string
     */
    public $groupSourceId;

    /**
     * @example build_in
     *
     * @var string
     */
    public $groupSourceType;

    /**
     * @example idaas_ue2jvisn35ea5lmthk267xxxxx
     *
     * @var string
     */
    public $instanceId;

    /**
     * @example 1652085686179
     *
     * @var int
     */
    public $updateTime;
    protected $_name = [
        'createTime' => 'createTime',
        'description' => 'description',
        'groupExternalId' => 'groupExternalId',
        'groupId' => 'groupId',
        'groupName' => 'groupName',
        'groupSourceId' => 'groupSourceId',
        'groupSourceType' => 'groupSourceType',
        'instanceId' => 'instanceId',
        'updateTime' => 'updateTime',
    ];

    public function validate() {}

    public function toMap()
    {
        $res = [];
        if (null !== $this->createTime) {
            $res['createTime'] = $this->createTime;
        }
        if (null !== $this->description) {
            $res['description'] = $this->description;
        }
        if (null !== $this->groupExternalId) {
            $res['groupExternalId'] = $this->groupExternalId;
        }
        if (null !== $this->groupId) {
            $res['groupId'] = $this->groupId;
        }
        if (null !== $this->groupName) {
            $res['groupName'] = $this->groupName;
        }
        if (null !== $this->groupSourceId) {
            $res['groupSourceId'] = $this->groupSourceId;
        }
        if (null !== $this->groupSourceType) {
            $res['groupSourceType'] = $this->groupSourceType;
        }
        if (null !== $this->instanceId) {
            $res['instanceId'] = $this->instanceId;
        }
        if (null !== $this->updateTime) {
            $res['updateTime'] = $this->updateTime;
        }

        return $res;
    }

    /**
     * @param array $map
     *
     * @return data
     */
    public static function fromMap($map = [])
    {
        $model = new self();
        if (isset($map['createTime'])) {
            $model->createTime = $map['createTime'];
        }
        if (isset($map['description'])) {
            $model->description = $map['description'];
        }
        if (isset($map['groupExternalId'])) {
            $model->groupExternalId = $map['groupExternalId'];
        }
        if (isset($map['groupId'])) {
            $model->groupId = $map['groupId'];
        }
        if (isset($map['groupName'])) {
            $model->groupName = $map['groupName'];
        }
        if (isset($map['groupSourceId'])) {
            $model->groupSourceId = $map['groupSourceId'];
        }
        if (isset($map['groupSourceType'])) {
            $model->groupSourceType = $map['groupSourceType'];
        }
        if (isset($map['instanceId'])) {
            $model->instanceId = $map['instanceId'];
        }
        if (isset($map['updateTime'])) {
            $model->updateTime = $map['updateTime'];
        }

        return $model;
    }
}
