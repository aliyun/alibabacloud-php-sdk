<?php

// This file is auto-generated, don't edit it. Thanks.

namespace AlibabaCloud\SDK\CCC\V20200701\Models\ListUsersResponseBody\data;

use AlibabaCloud\SDK\CCC\V20200701\Models\ListUsersResponseBody\data\list_\personalOutboundNumberList;
use AlibabaCloud\SDK\CCC\V20200701\Models\ListUsersResponseBody\data\list_\skillLevelList;
use AlibabaCloud\Tea\Model;

class list_ extends Model
{
    /**
     * @example 8033****
     *
     * @var string
     */
    public $deviceExt;

    /**
     * @example ACC-YUNBS-1.0.10-****
     *
     * @var string
     */
    public $deviceId;

    /**
     * @example OFFLINE
     *
     * @var string
     */
    public $deviceState;

    /**
     * @example 1001
     *
     * @var string
     */
    public $displayId;

    /**
     * @var string
     */
    public $displayName;

    /**
     * @example username@example.com
     *
     * @var string
     */
    public $email;

    /**
     * @example 8031****
     *
     * @var string
     */
    public $extension;

    /**
     * @example agent
     *
     * @var string
     */
    public $loginName;

    /**
     * @example 1382114****
     *
     * @var string
     */
    public $mobile;

    /**
     * @var personalOutboundNumberList[]
     */
    public $personalOutboundNumberList;

    /**
     * @var bool
     */
    public $primary;

    /**
     * @example false
     *
     * @var bool
     */
    public $primaryAccount;

    /**
     * @example 21234502254620****
     *
     * @var int
     */
    public $ramId;

    /**
     * @example Admin@ccc-test
     *
     * @var string
     */
    public $roleId;

    /**
     * @example Admin
     *
     * @var string
     */
    public $roleName;

    /**
     * @var skillLevelList[]
     */
    public $skillLevelList;

    /**
     * @example agent@ccc-test
     *
     * @var string
     */
    public $userId;

    /**
     * @example ON_SITE
     *
     * @var string
     */
    public $workMode;
    protected $_name = [
        'deviceExt'                  => 'DeviceExt',
        'deviceId'                   => 'DeviceId',
        'deviceState'                => 'DeviceState',
        'displayId'                  => 'DisplayId',
        'displayName'                => 'DisplayName',
        'email'                      => 'Email',
        'extension'                  => 'Extension',
        'loginName'                  => 'LoginName',
        'mobile'                     => 'Mobile',
        'personalOutboundNumberList' => 'PersonalOutboundNumberList',
        'primary'                    => 'Primary',
        'primaryAccount'             => 'PrimaryAccount',
        'ramId'                      => 'RamId',
        'roleId'                     => 'RoleId',
        'roleName'                   => 'RoleName',
        'skillLevelList'             => 'SkillLevelList',
        'userId'                     => 'UserId',
        'workMode'                   => 'WorkMode',
    ];

    public function validate()
    {
    }

    public function toMap()
    {
        $res = [];
        if (null !== $this->deviceExt) {
            $res['DeviceExt'] = $this->deviceExt;
        }
        if (null !== $this->deviceId) {
            $res['DeviceId'] = $this->deviceId;
        }
        if (null !== $this->deviceState) {
            $res['DeviceState'] = $this->deviceState;
        }
        if (null !== $this->displayId) {
            $res['DisplayId'] = $this->displayId;
        }
        if (null !== $this->displayName) {
            $res['DisplayName'] = $this->displayName;
        }
        if (null !== $this->email) {
            $res['Email'] = $this->email;
        }
        if (null !== $this->extension) {
            $res['Extension'] = $this->extension;
        }
        if (null !== $this->loginName) {
            $res['LoginName'] = $this->loginName;
        }
        if (null !== $this->mobile) {
            $res['Mobile'] = $this->mobile;
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
        if (null !== $this->primary) {
            $res['Primary'] = $this->primary;
        }
        if (null !== $this->primaryAccount) {
            $res['PrimaryAccount'] = $this->primaryAccount;
        }
        if (null !== $this->ramId) {
            $res['RamId'] = $this->ramId;
        }
        if (null !== $this->roleId) {
            $res['RoleId'] = $this->roleId;
        }
        if (null !== $this->roleName) {
            $res['RoleName'] = $this->roleName;
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
        if (null !== $this->userId) {
            $res['UserId'] = $this->userId;
        }
        if (null !== $this->workMode) {
            $res['WorkMode'] = $this->workMode;
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
        if (isset($map['DeviceExt'])) {
            $model->deviceExt = $map['DeviceExt'];
        }
        if (isset($map['DeviceId'])) {
            $model->deviceId = $map['DeviceId'];
        }
        if (isset($map['DeviceState'])) {
            $model->deviceState = $map['DeviceState'];
        }
        if (isset($map['DisplayId'])) {
            $model->displayId = $map['DisplayId'];
        }
        if (isset($map['DisplayName'])) {
            $model->displayName = $map['DisplayName'];
        }
        if (isset($map['Email'])) {
            $model->email = $map['Email'];
        }
        if (isset($map['Extension'])) {
            $model->extension = $map['Extension'];
        }
        if (isset($map['LoginName'])) {
            $model->loginName = $map['LoginName'];
        }
        if (isset($map['Mobile'])) {
            $model->mobile = $map['Mobile'];
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
        if (isset($map['Primary'])) {
            $model->primary = $map['Primary'];
        }
        if (isset($map['PrimaryAccount'])) {
            $model->primaryAccount = $map['PrimaryAccount'];
        }
        if (isset($map['RamId'])) {
            $model->ramId = $map['RamId'];
        }
        if (isset($map['RoleId'])) {
            $model->roleId = $map['RoleId'];
        }
        if (isset($map['RoleName'])) {
            $model->roleName = $map['RoleName'];
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
        if (isset($map['UserId'])) {
            $model->userId = $map['UserId'];
        }
        if (isset($map['WorkMode'])) {
            $model->workMode = $map['WorkMode'];
        }

        return $model;
    }
}
