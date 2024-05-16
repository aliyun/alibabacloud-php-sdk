<?php

// This file is auto-generated, don't edit it. Thanks.

namespace AlibabaCloud\SDK\Dataworkspublic\V20200518\Models\DsgUserGroupAddOrUpdateRequest;

use AlibabaCloud\Tea\Model;

class userGroups extends Model
{
    /**
     * @description This parameter is required.
     *
     * @var string[]
     */
    public $accounts;

    /**
     * @example 123
     *
     * @var int
     */
    public $id;

    /**
     * @description This parameter is required.
     *
     * @example yun_group
     *
     * @var string
     */
    public $name;

    /**
     * @description This parameter is required.
     *
     * @example user1
     *
     * @var string
     */
    public $owner;

    /**
     * @example dev_project
     *
     * @var string
     */
    public $projectName;

    /**
     * @description This parameter is required.
     *
     * @example 1
     *
     * @var int
     */
    public $userGroupType;
    protected $_name = [
        'accounts'      => 'Accounts',
        'id'            => 'Id',
        'name'          => 'Name',
        'owner'         => 'Owner',
        'projectName'   => 'ProjectName',
        'userGroupType' => 'UserGroupType',
    ];

    public function validate()
    {
    }

    public function toMap()
    {
        $res = [];
        if (null !== $this->accounts) {
            $res['Accounts'] = $this->accounts;
        }
        if (null !== $this->id) {
            $res['Id'] = $this->id;
        }
        if (null !== $this->name) {
            $res['Name'] = $this->name;
        }
        if (null !== $this->owner) {
            $res['Owner'] = $this->owner;
        }
        if (null !== $this->projectName) {
            $res['ProjectName'] = $this->projectName;
        }
        if (null !== $this->userGroupType) {
            $res['UserGroupType'] = $this->userGroupType;
        }

        return $res;
    }

    /**
     * @param array $map
     *
     * @return userGroups
     */
    public static function fromMap($map = [])
    {
        $model = new self();
        if (isset($map['Accounts'])) {
            if (!empty($map['Accounts'])) {
                $model->accounts = $map['Accounts'];
            }
        }
        if (isset($map['Id'])) {
            $model->id = $map['Id'];
        }
        if (isset($map['Name'])) {
            $model->name = $map['Name'];
        }
        if (isset($map['Owner'])) {
            $model->owner = $map['Owner'];
        }
        if (isset($map['ProjectName'])) {
            $model->projectName = $map['ProjectName'];
        }
        if (isset($map['UserGroupType'])) {
            $model->userGroupType = $map['UserGroupType'];
        }

        return $model;
    }
}
