<?php

// This file is auto-generated, don't edit it. Thanks.

namespace AlibabaCloud\SDK\Vcs\V20200515\Models\UpdateUserGroupResponse;

use AlibabaCloud\Tea\Model;

class data extends Model
{
    /**
     * @var int
     */
    public $userGroupId;

    /**
     * @var string
     */
    public $isvSubId;

    /**
     * @var string
     */
    public $userGroupName;

    /**
     * @var int
     */
    public $userCount;

    /**
     * @var string
     */
    public $parentUserGroupId;
    protected $_name = [
        'userGroupId'       => 'UserGroupId',
        'isvSubId'          => 'IsvSubId',
        'userGroupName'     => 'UserGroupName',
        'userCount'         => 'UserCount',
        'parentUserGroupId' => 'ParentUserGroupId',
    ];

    public function validate()
    {
        Model::validateRequired('userGroupId', $this->userGroupId, true);
        Model::validateRequired('isvSubId', $this->isvSubId, true);
        Model::validateRequired('userGroupName', $this->userGroupName, true);
        Model::validateRequired('userCount', $this->userCount, true);
        Model::validateRequired('parentUserGroupId', $this->parentUserGroupId, true);
    }

    public function toMap()
    {
        $res = [];
        if (null !== $this->userGroupId) {
            $res['UserGroupId'] = $this->userGroupId;
        }
        if (null !== $this->isvSubId) {
            $res['IsvSubId'] = $this->isvSubId;
        }
        if (null !== $this->userGroupName) {
            $res['UserGroupName'] = $this->userGroupName;
        }
        if (null !== $this->userCount) {
            $res['UserCount'] = $this->userCount;
        }
        if (null !== $this->parentUserGroupId) {
            $res['ParentUserGroupId'] = $this->parentUserGroupId;
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
        if (isset($map['UserGroupId'])) {
            $model->userGroupId = $map['UserGroupId'];
        }
        if (isset($map['IsvSubId'])) {
            $model->isvSubId = $map['IsvSubId'];
        }
        if (isset($map['UserGroupName'])) {
            $model->userGroupName = $map['UserGroupName'];
        }
        if (isset($map['UserCount'])) {
            $model->userCount = $map['UserCount'];
        }
        if (isset($map['ParentUserGroupId'])) {
            $model->parentUserGroupId = $map['ParentUserGroupId'];
        }

        return $model;
    }
}
