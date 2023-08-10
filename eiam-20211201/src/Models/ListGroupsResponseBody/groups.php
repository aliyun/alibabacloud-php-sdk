<?php

// This file is auto-generated, don't edit it. Thanks.

namespace AlibabaCloud\SDK\Eiam\V20211201\Models\ListGroupsResponseBody;

use AlibabaCloud\Tea\Model;

class groups extends Model
{
    /**
     * @description The time at which the group was created. This value is a UNIX timestamp representing the number of milliseconds that have elapsed since January 1, 1970, 00:00:00 UTC.
     *
     * @example 1652085686179
     *
     * @var int
     */
    public $createTime;

    /**
     * @description The description of the group.
     *
     * @example test group
     *
     * @var string
     */
    public $description;

    /**
     * @description The external ID of the group, which can be used to associate the group with an external system. By default, the external ID is the group ID.
     *
     * @example group_d6sbsuumeta4h66ec3il7yxxxx
     *
     * @var string
     */
    public $groupExternalId;

    /**
     * @description The group ID.
     *
     * @example group_d6sbsuumeta4h66ec3il7yxxxx
     *
     * @var string
     */
    public $groupId;

    /**
     * @description The name of the group.
     *
     * @example group_name
     *
     * @var string
     */
    public $groupName;

    /**
     * @description The source ID of the group. If the group was imported from other services, this value indicates the external source ID. By default, the source ID is the instance ID.
     *
     * @example idaas_ue2jvisn35ea5lmthk267xxxxx
     *
     * @var string
     */
    public $groupSourceId;

    /**
     * @description The source type of the group. Only build_in may be returned, which indicates that the group was created in IDaaS.
     *
     *
     * @example build_in
     *
     * @var string
     */
    public $groupSourceType;

    /**
     * @description The instance ID.
     *
     * @example idaas_ue2jvisn35ea5lmthk267xxxxx
     *
     * @var string
     */
    public $instanceId;

    /**
     * @description The time at which the group was last updated. This value is a UNIX timestamp representing the number of milliseconds that have elapsed since January 1, 1970, 00:00:00 UTC.
     *
     * @example 1652085686179
     *
     * @var int
     */
    public $updateTime;
    protected $_name = [
        'createTime'      => 'CreateTime',
        'description'     => 'Description',
        'groupExternalId' => 'GroupExternalId',
        'groupId'         => 'GroupId',
        'groupName'       => 'GroupName',
        'groupSourceId'   => 'GroupSourceId',
        'groupSourceType' => 'GroupSourceType',
        'instanceId'      => 'InstanceId',
        'updateTime'      => 'UpdateTime',
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
        if (null !== $this->description) {
            $res['Description'] = $this->description;
        }
        if (null !== $this->groupExternalId) {
            $res['GroupExternalId'] = $this->groupExternalId;
        }
        if (null !== $this->groupId) {
            $res['GroupId'] = $this->groupId;
        }
        if (null !== $this->groupName) {
            $res['GroupName'] = $this->groupName;
        }
        if (null !== $this->groupSourceId) {
            $res['GroupSourceId'] = $this->groupSourceId;
        }
        if (null !== $this->groupSourceType) {
            $res['GroupSourceType'] = $this->groupSourceType;
        }
        if (null !== $this->instanceId) {
            $res['InstanceId'] = $this->instanceId;
        }
        if (null !== $this->updateTime) {
            $res['UpdateTime'] = $this->updateTime;
        }

        return $res;
    }

    /**
     * @param array $map
     *
     * @return groups
     */
    public static function fromMap($map = [])
    {
        $model = new self();
        if (isset($map['CreateTime'])) {
            $model->createTime = $map['CreateTime'];
        }
        if (isset($map['Description'])) {
            $model->description = $map['Description'];
        }
        if (isset($map['GroupExternalId'])) {
            $model->groupExternalId = $map['GroupExternalId'];
        }
        if (isset($map['GroupId'])) {
            $model->groupId = $map['GroupId'];
        }
        if (isset($map['GroupName'])) {
            $model->groupName = $map['GroupName'];
        }
        if (isset($map['GroupSourceId'])) {
            $model->groupSourceId = $map['GroupSourceId'];
        }
        if (isset($map['GroupSourceType'])) {
            $model->groupSourceType = $map['GroupSourceType'];
        }
        if (isset($map['InstanceId'])) {
            $model->instanceId = $map['InstanceId'];
        }
        if (isset($map['UpdateTime'])) {
            $model->updateTime = $map['UpdateTime'];
        }

        return $model;
    }
}
