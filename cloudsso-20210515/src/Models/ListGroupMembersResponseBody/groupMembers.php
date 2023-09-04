<?php

// This file is auto-generated, don't edit it. Thanks.

namespace AlibabaCloud\SDK\Cloudsso\V20210515\Models\ListGroupMembersResponseBody;

use AlibabaCloud\Tea\Model;

class groupMembers extends Model
{
    /**
     * @description The description of the user.
     *
     * @example This is a user.
     *
     * @var string
     */
    public $description;

    /**
     * @description The display name of the user.
     *
     * @example Alice
     *
     * @var string
     */
    public $displayName;

    /**
     * @description The email address of the user.
     *
     * @example AliceLee@example.com
     *
     * @var string
     */
    public $email;

    /**
     * @description The ID of the group.
     *
     * @example g-00jqzghi2n3o5hkh****
     *
     * @var string
     */
    public $groupId;

    /**
     * @description The time when the user was added to the user group.
     *
     * @example 2021-11-01T06:58:18Z
     *
     * @var string
     */
    public $joinTime;

    /**
     * @description The type of the user. Valid values:
     *
     *   Manual: The user is manually created.
     *   Synchronized: The user is synchronized from an external identity provider (IdP).
     *
     * @example Manual
     *
     * @var string
     */
    public $provisionType;

    /**
     * @description The status of the user. Valid values:
     *
     *   Enabled: The logon of the user is enabled.
     *   Disabled: The logon of the user is disabled.
     *
     * @example Enabled
     *
     * @var string
     */
    public $status;

    /**
     * @description The ID of the user.
     *
     * @example u-00q8wbq42wiltcrk****
     *
     * @var string
     */
    public $userId;

    /**
     * @description The name of the user.
     *
     * @example Alice
     *
     * @var string
     */
    public $userName;
    protected $_name = [
        'description'   => 'Description',
        'displayName'   => 'DisplayName',
        'email'         => 'Email',
        'groupId'       => 'GroupId',
        'joinTime'      => 'JoinTime',
        'provisionType' => 'ProvisionType',
        'status'        => 'Status',
        'userId'        => 'UserId',
        'userName'      => 'UserName',
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
        if (null !== $this->displayName) {
            $res['DisplayName'] = $this->displayName;
        }
        if (null !== $this->email) {
            $res['Email'] = $this->email;
        }
        if (null !== $this->groupId) {
            $res['GroupId'] = $this->groupId;
        }
        if (null !== $this->joinTime) {
            $res['JoinTime'] = $this->joinTime;
        }
        if (null !== $this->provisionType) {
            $res['ProvisionType'] = $this->provisionType;
        }
        if (null !== $this->status) {
            $res['Status'] = $this->status;
        }
        if (null !== $this->userId) {
            $res['UserId'] = $this->userId;
        }
        if (null !== $this->userName) {
            $res['UserName'] = $this->userName;
        }

        return $res;
    }

    /**
     * @param array $map
     *
     * @return groupMembers
     */
    public static function fromMap($map = [])
    {
        $model = new self();
        if (isset($map['Description'])) {
            $model->description = $map['Description'];
        }
        if (isset($map['DisplayName'])) {
            $model->displayName = $map['DisplayName'];
        }
        if (isset($map['Email'])) {
            $model->email = $map['Email'];
        }
        if (isset($map['GroupId'])) {
            $model->groupId = $map['GroupId'];
        }
        if (isset($map['JoinTime'])) {
            $model->joinTime = $map['JoinTime'];
        }
        if (isset($map['ProvisionType'])) {
            $model->provisionType = $map['ProvisionType'];
        }
        if (isset($map['Status'])) {
            $model->status = $map['Status'];
        }
        if (isset($map['UserId'])) {
            $model->userId = $map['UserId'];
        }
        if (isset($map['UserName'])) {
            $model->userName = $map['UserName'];
        }

        return $model;
    }
}
