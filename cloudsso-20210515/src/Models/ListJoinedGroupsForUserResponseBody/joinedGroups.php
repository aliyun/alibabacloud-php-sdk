<?php

// This file is auto-generated, don't edit it. Thanks.

namespace AlibabaCloud\SDK\Cloudsso\V20210515\Models\ListJoinedGroupsForUserResponseBody;

use AlibabaCloud\Tea\Model;

class joinedGroups extends Model
{
    /**
     * @description The description of the group.
     *
     * @example This is a group.
     *
     * @var string
     */
    public $description;

    /**
     * @description The ID of the group.
     *
     * @example g-00jqzghi2n3o5hkh****
     *
     * @var string
     */
    public $groupId;

    /**
     * @description The name of the group.
     *
     * @example TestGroup
     *
     * @var string
     */
    public $groupName;

    /**
     * @description The time when the user was added to the user group.
     *
     * @example 2021-11-01T06:58:18Z
     *
     * @var string
     */
    public $joinTime;

    /**
     * @description The type of the group. Valid values:
     *
     *   Manual: The group is manually created.
     *   Synchronized: The user is synchronized from an external identity provider (IdP).
     *
     * @example Manual
     *
     * @var string
     */
    public $provisionType;

    /**
     * @description The ID of the user.
     *
     * @example u-00q8wbq42wiltcrk****
     *
     * @var string
     */
    public $userId;
    protected $_name = [
        'description'   => 'Description',
        'groupId'       => 'GroupId',
        'groupName'     => 'GroupName',
        'joinTime'      => 'JoinTime',
        'provisionType' => 'ProvisionType',
        'userId'        => 'UserId',
    ];

    public function validate()
    {
    }

    public function toMap()
    {
        $res = [];
        if (null !== $this->description) {
            $res['Description'] = $this->description;
        }
        if (null !== $this->groupId) {
            $res['GroupId'] = $this->groupId;
        }
        if (null !== $this->groupName) {
            $res['GroupName'] = $this->groupName;
        }
        if (null !== $this->joinTime) {
            $res['JoinTime'] = $this->joinTime;
        }
        if (null !== $this->provisionType) {
            $res['ProvisionType'] = $this->provisionType;
        }
        if (null !== $this->userId) {
            $res['UserId'] = $this->userId;
        }

        return $res;
    }

    /**
     * @param array $map
     *
     * @return joinedGroups
     */
    public static function fromMap($map = [])
    {
        $model = new self();
        if (isset($map['Description'])) {
            $model->description = $map['Description'];
        }
        if (isset($map['GroupId'])) {
            $model->groupId = $map['GroupId'];
        }
        if (isset($map['GroupName'])) {
            $model->groupName = $map['GroupName'];
        }
        if (isset($map['JoinTime'])) {
            $model->joinTime = $map['JoinTime'];
        }
        if (isset($map['ProvisionType'])) {
            $model->provisionType = $map['ProvisionType'];
        }
        if (isset($map['UserId'])) {
            $model->userId = $map['UserId'];
        }

        return $model;
    }
}
