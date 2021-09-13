<?php

// This file is auto-generated, don't edit it. Thanks.

namespace AlibabaCloud\SDK\CCC\V20200701\Models\ListUsersResponseBody\data;

use AlibabaCloud\SDK\CCC\V20200701\Models\ListUsersResponseBody\data\list_\personalOutboundNumberList;
use AlibabaCloud\SDK\CCC\V20200701\Models\ListUsersResponseBody\data\list_\skillLevelList;
use AlibabaCloud\Tea\Model;

class list_ extends Model
{
    /**
     * @var string
     */
    public $displayName;

    /**
     * @var string
     */
    public $loginName;

    /**
     * @var string
     */
    public $email;

    /**
     * @var string
     */
    public $workMode;

    /**
     * @var string
     */
    public $mobile;

    /**
     * @var string
     */
    public $userId;

    /**
     * @var string
     */
    public $roleName;

    /**
     * @var string
     */
    public $roleId;

    /**
     * @var bool
     */
    public $primaryAccount;

    /**
     * @var personalOutboundNumberList[]
     */
    public $personalOutboundNumberList;

    /**
     * @var skillLevelList[]
     */
    public $skillLevelList;
    protected $_name = [
        'displayName'                => 'DisplayName',
        'loginName'                  => 'LoginName',
        'email'                      => 'Email',
        'workMode'                   => 'WorkMode',
        'mobile'                     => 'Mobile',
        'userId'                     => 'UserId',
        'roleName'                   => 'RoleName',
        'roleId'                     => 'RoleId',
        'primaryAccount'             => 'PrimaryAccount',
        'personalOutboundNumberList' => 'PersonalOutboundNumberList',
        'skillLevelList'             => 'SkillLevelList',
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
        if (null !== $this->loginName) {
            $res['LoginName'] = $this->loginName;
        }
        if (null !== $this->email) {
            $res['Email'] = $this->email;
        }
        if (null !== $this->workMode) {
            $res['WorkMode'] = $this->workMode;
        }
        if (null !== $this->mobile) {
            $res['Mobile'] = $this->mobile;
        }
        if (null !== $this->userId) {
            $res['UserId'] = $this->userId;
        }
        if (null !== $this->roleName) {
            $res['RoleName'] = $this->roleName;
        }
        if (null !== $this->roleId) {
            $res['RoleId'] = $this->roleId;
        }
        if (null !== $this->primaryAccount) {
            $res['PrimaryAccount'] = $this->primaryAccount;
        }
        if (null !== $this->personalOutboundNumberList) {
            $res['PersonalOutboundNumberList'] = [];
            if (null !== $this->personalOutboundNumberList && \is_array($this->personalOutboundNumberList)) {
                $n = 0;
                foreach ($this->personalOutboundNumberList as $item) {
                    $res['PersonalOutboundNumberList'][$n++] = null !== $item ? $item->toMap() : $item;
                }
            }
        }
        if (null !== $this->skillLevelList) {
            $res['SkillLevelList'] = [];
            if (null !== $this->skillLevelList && \is_array($this->skillLevelList)) {
                $n = 0;
                foreach ($this->skillLevelList as $item) {
                    $res['SkillLevelList'][$n++] = null !== $item ? $item->toMap() : $item;
                }
            }
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
        if (isset($map['LoginName'])) {
            $model->loginName = $map['LoginName'];
        }
        if (isset($map['Email'])) {
            $model->email = $map['Email'];
        }
        if (isset($map['WorkMode'])) {
            $model->workMode = $map['WorkMode'];
        }
        if (isset($map['Mobile'])) {
            $model->mobile = $map['Mobile'];
        }
        if (isset($map['UserId'])) {
            $model->userId = $map['UserId'];
        }
        if (isset($map['RoleName'])) {
            $model->roleName = $map['RoleName'];
        }
        if (isset($map['RoleId'])) {
            $model->roleId = $map['RoleId'];
        }
        if (isset($map['PrimaryAccount'])) {
            $model->primaryAccount = $map['PrimaryAccount'];
        }
        if (isset($map['PersonalOutboundNumberList'])) {
            if (!empty($map['PersonalOutboundNumberList'])) {
                $model->personalOutboundNumberList = [];
                $n                                 = 0;
                foreach ($map['PersonalOutboundNumberList'] as $item) {
                    $model->personalOutboundNumberList[$n++] = null !== $item ? personalOutboundNumberList::fromMap($item) : $item;
                }
            }
        }
        if (isset($map['SkillLevelList'])) {
            if (!empty($map['SkillLevelList'])) {
                $model->skillLevelList = [];
                $n                     = 0;
                foreach ($map['SkillLevelList'] as $item) {
                    $model->skillLevelList[$n++] = null !== $item ? skillLevelList::fromMap($item) : $item;
                }
            }
        }

        return $model;
    }
}
