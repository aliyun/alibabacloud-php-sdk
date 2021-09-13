<?php

// This file is auto-generated, don't edit it. Thanks.

namespace AlibabaCloud\SDK\CCC\V20200701\Models\ListUserLevelsOfSkillGroupResponseBody\data;

use AlibabaCloud\Tea\Model;

class list_ extends Model
{
    /**
     * @var string
     */
    public $displayName;

    /**
     * @var int
     */
    public $skillLevel;

    /**
     * @var string
     */
    public $loginName;

    /**
     * @var string
     */
    public $userId;

    /**
     * @var string
     */
    public $skillGroupId;

    /**
     * @var string
     */
    public $skillGroupName;

    /**
     * @var string
     */
    public $roleName;

    /**
     * @var string
     */
    public $roleId;
    protected $_name = [
        'displayName'    => 'DisplayName',
        'skillLevel'     => 'SkillLevel',
        'loginName'      => 'LoginName',
        'userId'         => 'UserId',
        'skillGroupId'   => 'SkillGroupId',
        'skillGroupName' => 'SkillGroupName',
        'roleName'       => 'RoleName',
        'roleId'         => 'RoleId',
    ];

    public function validate()
    {
    }

    public function toMap()
    {
        $res = [];
        if (null !== $this->displayName) {
            $res['DisplayName'] = $this->displayName;
        }
        if (null !== $this->skillLevel) {
            $res['SkillLevel'] = $this->skillLevel;
        }
        if (null !== $this->loginName) {
            $res['LoginName'] = $this->loginName;
        }
        if (null !== $this->userId) {
            $res['UserId'] = $this->userId;
        }
        if (null !== $this->skillGroupId) {
            $res['SkillGroupId'] = $this->skillGroupId;
        }
        if (null !== $this->skillGroupName) {
            $res['SkillGroupName'] = $this->skillGroupName;
        }
        if (null !== $this->roleName) {
            $res['RoleName'] = $this->roleName;
        }
        if (null !== $this->roleId) {
            $res['RoleId'] = $this->roleId;
        }

        return $res;
    }

    /**
     * @param array $map
     *
     * @return list_
     */
    public static function fromMap($map = [])
    {
        $model = new self();
        if (isset($map['DisplayName'])) {
            $model->displayName = $map['DisplayName'];
        }
        if (isset($map['SkillLevel'])) {
            $model->skillLevel = $map['SkillLevel'];
        }
        if (isset($map['LoginName'])) {
            $model->loginName = $map['LoginName'];
        }
        if (isset($map['UserId'])) {
            $model->userId = $map['UserId'];
        }
        if (isset($map['SkillGroupId'])) {
            $model->skillGroupId = $map['SkillGroupId'];
        }
        if (isset($map['SkillGroupName'])) {
            $model->skillGroupName = $map['SkillGroupName'];
        }
        if (isset($map['RoleName'])) {
            $model->roleName = $map['RoleName'];
        }
        if (isset($map['RoleId'])) {
            $model->roleId = $map['RoleId'];
        }

        return $model;
    }
}
