<?php

// This file is auto-generated, don't edit it. Thanks.

namespace AlibabaCloud\SDK\CCC\V20200701\Models\ListUsersResponseBody\data;

use AlibabaCloud\Dara\Model;
use AlibabaCloud\SDK\CCC\V20200701\Models\ListUsersResponseBody\data\list_\personalOutboundNumberList;
use AlibabaCloud\SDK\CCC\V20200701\Models\ListUsersResponseBody\data\list_\skillLevelList;

class list_ extends Model
{
    /**
     * @var string
     */
    public $deviceExt;

    /**
     * @var string
     */
    public $deviceId;

    /**
     * @var string
     */
    public $deviceState;

    /**
     * @var string
     */
    public $displayId;

    /**
     * @var string
     */
    public $displayName;

    /**
     * @var string
     */
    public $email;

    /**
     * @var string
     */
    public $extension;

    /**
     * @var string
     */
    public $loginName;

    /**
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
     * @var bool
     */
    public $primaryAccount;

    /**
     * @var int
     */
    public $ramId;

    /**
     * @var string
     */
    public $roleId;

    /**
     * @var string
     */
    public $roleName;

    /**
     * @var skillLevelList[]
     */
    public $skillLevelList;

    /**
     * @var string
     */
    public $userId;

    /**
     * @var string
     */
    public $workMode;
    protected $_name = [
        'deviceExt' => 'DeviceExt',
        'deviceId' => 'DeviceId',
        'deviceState' => 'DeviceState',
        'displayId' => 'DisplayId',
        'displayName' => 'DisplayName',
        'email' => 'Email',
        'extension' => 'Extension',
        'loginName' => 'LoginName',
        'mobile' => 'Mobile',
        'personalOutboundNumberList' => 'PersonalOutboundNumberList',
        'primary' => 'Primary',
        'primaryAccount' => 'PrimaryAccount',
        'ramId' => 'RamId',
        'roleId' => 'RoleId',
        'roleName' => 'RoleName',
        'skillLevelList' => 'SkillLevelList',
        'userId' => 'UserId',
        'workMode' => 'WorkMode',
    ];

    public function validate()
    {
        if (\is_array($this->personalOutboundNumberList)) {
            Model::validateArray($this->personalOutboundNumberList);
        }
        if (\is_array($this->skillLevelList)) {
            Model::validateArray($this->skillLevelList);
        }
        parent::validate();
    }

    public function toArray($noStream = false)
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
            if (\is_array($this->personalOutboundNumberList)) {
                $res['PersonalOutboundNumberList'] = [];
                $n1 = 0;
                foreach ($this->personalOutboundNumberList as $item1) {
                    $res['PersonalOutboundNumberList'][$n1] = null !== $item1 ? $item1->toArray($noStream) : $item1;
                    ++$n1;
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
            if (\is_array($this->skillLevelList)) {
                $res['SkillLevelList'] = [];
                $n1 = 0;
                foreach ($this->skillLevelList as $item1) {
                    $res['SkillLevelList'][$n1] = null !== $item1 ? $item1->toArray($noStream) : $item1;
                    ++$n1;
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

    public function toMap($noStream = false)
    {
        return $this->toArray($noStream);
    }

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
                $n1 = 0;
                foreach ($map['PersonalOutboundNumberList'] as $item1) {
                    $model->personalOutboundNumberList[$n1] = personalOutboundNumberList::fromMap($item1);
                    ++$n1;
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
                $n1 = 0;
                foreach ($map['SkillLevelList'] as $item1) {
                    $model->skillLevelList[$n1] = skillLevelList::fromMap($item1);
                    ++$n1;
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
