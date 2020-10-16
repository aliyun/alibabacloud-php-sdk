<?php

// This file is auto-generated, don't edit it. Thanks.

namespace AlibabaCloud\SDK\Vcs\V20200515\Models\ListUserGroupsResponse;

use AlibabaCloud\Tea\Model;

class data extends Model
{
    /**
     * @var string
     */
    public $creator;

    /**
     * @var string
     */
    public $userGroupName;

    /**
     * @var string
     */
    public $isvSubId;

    /**
     * @var int
     */
    public $userGroupId;

    /**
     * @var int
     */
    public $userCount;

    /**
     * @var string
     */
    public $createTime;

    /**
     * @var string
     */
    public $updateTime;

    /**
     * @var int
     */
    public $parentUserGroupId;
    protected $_name = [
        'creator'           => 'Creator',
        'userGroupName'     => 'UserGroupName',
        'isvSubId'          => 'IsvSubId',
        'userGroupId'       => 'UserGroupId',
        'userCount'         => 'UserCount',
        'createTime'        => 'CreateTime',
        'updateTime'        => 'UpdateTime',
        'parentUserGroupId' => 'ParentUserGroupId',
    ];

    public function validate()
    {
        Model::validateRequired('creator', $this->creator, true);
        Model::validateRequired('userGroupName', $this->userGroupName, true);
        Model::validateRequired('isvSubId', $this->isvSubId, true);
        Model::validateRequired('userGroupId', $this->userGroupId, true);
        Model::validateRequired('userCount', $this->userCount, true);
        Model::validateRequired('createTime', $this->createTime, true);
        Model::validateRequired('updateTime', $this->updateTime, true);
        Model::validateRequired('parentUserGroupId', $this->parentUserGroupId, true);
    }

    public function toMap()
    {
        $res = [];
        if (null !== $this->creator) {
            $res['Creator'] = $this->creator;
        }
        if (null !== $this->userGroupName) {
            $res['UserGroupName'] = $this->userGroupName;
        }
        if (null !== $this->isvSubId) {
            $res['IsvSubId'] = $this->isvSubId;
        }
        if (null !== $this->userGroupId) {
            $res['UserGroupId'] = $this->userGroupId;
        }
        if (null !== $this->userCount) {
            $res['UserCount'] = $this->userCount;
        }
        if (null !== $this->createTime) {
            $res['CreateTime'] = $this->createTime;
        }
        if (null !== $this->updateTime) {
            $res['UpdateTime'] = $this->updateTime;
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
        if (isset($map['Creator'])) {
            $model->creator = $map['Creator'];
        }
        if (isset($map['UserGroupName'])) {
            $model->userGroupName = $map['UserGroupName'];
        }
        if (isset($map['IsvSubId'])) {
            $model->isvSubId = $map['IsvSubId'];
        }
        if (isset($map['UserGroupId'])) {
            $model->userGroupId = $map['UserGroupId'];
        }
        if (isset($map['UserCount'])) {
            $model->userCount = $map['UserCount'];
        }
        if (isset($map['CreateTime'])) {
            $model->createTime = $map['CreateTime'];
        }
        if (isset($map['UpdateTime'])) {
            $model->updateTime = $map['UpdateTime'];
        }
        if (isset($map['ParentUserGroupId'])) {
            $model->parentUserGroupId = $map['ParentUserGroupId'];
        }

        return $model;
    }
}
