<?php

// This file is auto-generated, don't edit it. Thanks.

namespace AlibabaCloud\SDK\Edsuser\V20210308\Models\FilterUsersResponseBody;

use AlibabaCloud\SDK\Edsuser\V20210308\Models\FilterUsersResponseBody\users\externalInfo;
use AlibabaCloud\SDK\Edsuser\V20210308\Models\FilterUsersResponseBody\users\orgList;
use AlibabaCloud\SDK\Edsuser\V20210308\Models\FilterUsersResponseBody\users\supportLoginIdps;
use AlibabaCloud\SDK\Edsuser\V20210308\Models\FilterUsersResponseBody\users\userSetPropertiesModels;
use AlibabaCloud\Tea\Model;

class users extends Model
{
    /**
     * @var string
     */
    public $autoLockTime;

    /**
     * @description The number of cloud desktops that are assigned to the convenience user.
     *
     * @example 1
     *
     * @var int
     */
    public $desktopCount;

    /**
     * @description The number of cloud desktop pools that are assigned to the convenience user. This value is returned if you set `IncludeDesktopGroupCount` to `true`.
     *
     * @example 2
     *
     * @var int
     */
    public $desktopGroupCount;

    /**
     * @description The email address of the convenience user.
     *
     * @example testName@example.com
     *
     * @var string
     */
    public $email;

    /**
     * @description Indicates whether the convenience user is a local administrator.
     *
     * Valid values:
     *
     *   true
     *
     * <!-- -->
     *
     * <!-- -->
     *
     * <!-- -->
     *
     *   false
     *
     * <!-- -->
     *
     * <!-- -->
     *
     * <!-- -->
     *
     * @example true
     *
     * @var bool
     */
    public $enableAdminAccess;

    /**
     * @description The username of the convenience user.
     *
     * @example testName
     *
     * @var string
     */
    public $endUserId;

    /**
     * @description The additional information about the convenience user.
     *
     * @var externalInfo
     */
    public $externalInfo;

    /**
     * @description The ID of the convenience user.
     *
     * @example 12345
     *
     * @var int
     */
    public $id;

    /**
     * @description Indicates whether the convenience user is a tenant administrator.
     *
     * Valid values:
     *
     *   true
     *
     * <!-- -->
     *
     * <!-- -->
     *
     * <!-- -->
     *
     *   false
     *
     * <!-- -->
     *
     * <!-- -->
     *
     * <!-- -->
     *
     * @example true
     *
     * @var bool
     */
    public $isTenantManager;

    /**
     * @var orgList[]
     */
    public $orgList;

    /**
     * @description The type of the account ownership.
     *
     * Valid values:
     *
     *   CreateFromManager: administrator-activated
     *   Normal: user-activated
     *
     * @example Normal
     *
     * @var string
     */
    public $ownerType;

    /**
     * @var int
     */
    public $passwordExpireDays;

    /**
     * @var int
     */
    public $passwordExpireRestDays;

    /**
     * @description The mobile number of the convenience user.
     *
     * @example 1381111****
     *
     * @var string
     */
    public $phone;

    /**
     * @description The nickname of the convenience user.
     *
     * @example Oliver
     *
     * @var string
     */
    public $realNickName;

    /**
     * @description The remarks on the convenience user.
     *
     * @example 1
     *
     * @var string
     */
    public $remark;

    /**
     * @description The status of the convenience user.
     *
     * Valid values:
     *
     *   0: The convenience user is normal.
     *
     * <!-- -->
     *
     * <!-- -->
     *
     * <!-- -->
     *
     *   9: The convenience user is locked.
     *
     * <!-- -->
     *
     * <!-- -->
     *
     * <!-- -->
     *
     * @example 0
     *
     * @var int
     */
    public $status;

    /**
     * @var supportLoginIdps[]
     */
    public $supportLoginIdps;

    /**
     * @description The information about the properties.
     *
     * @var userSetPropertiesModels[]
     */
    public $userSetPropertiesModels;
    protected $_name = [
        'autoLockTime' => 'AutoLockTime',
        'desktopCount' => 'DesktopCount',
        'desktopGroupCount' => 'DesktopGroupCount',
        'email' => 'Email',
        'enableAdminAccess' => 'EnableAdminAccess',
        'endUserId' => 'EndUserId',
        'externalInfo' => 'ExternalInfo',
        'id' => 'Id',
        'isTenantManager' => 'IsTenantManager',
        'orgList' => 'OrgList',
        'ownerType' => 'OwnerType',
        'passwordExpireDays' => 'PasswordExpireDays',
        'passwordExpireRestDays' => 'PasswordExpireRestDays',
        'phone' => 'Phone',
        'realNickName' => 'RealNickName',
        'remark' => 'Remark',
        'status' => 'Status',
        'supportLoginIdps' => 'SupportLoginIdps',
        'userSetPropertiesModels' => 'UserSetPropertiesModels',
    ];

    public function validate() {}

    public function toMap()
    {
        $res = [];
        if (null !== $this->autoLockTime) {
            $res['AutoLockTime'] = $this->autoLockTime;
        }
        if (null !== $this->desktopCount) {
            $res['DesktopCount'] = $this->desktopCount;
        }
        if (null !== $this->desktopGroupCount) {
            $res['DesktopGroupCount'] = $this->desktopGroupCount;
        }
        if (null !== $this->email) {
            $res['Email'] = $this->email;
        }
        if (null !== $this->enableAdminAccess) {
            $res['EnableAdminAccess'] = $this->enableAdminAccess;
        }
        if (null !== $this->endUserId) {
            $res['EndUserId'] = $this->endUserId;
        }
        if (null !== $this->externalInfo) {
            $res['ExternalInfo'] = null !== $this->externalInfo ? $this->externalInfo->toMap() : null;
        }
        if (null !== $this->id) {
            $res['Id'] = $this->id;
        }
        if (null !== $this->isTenantManager) {
            $res['IsTenantManager'] = $this->isTenantManager;
        }
        if (null !== $this->orgList) {
            $res['OrgList'] = [];
            if (null !== $this->orgList && \is_array($this->orgList)) {
                $n = 0;
                foreach ($this->orgList as $item) {
                    $res['OrgList'][$n++] = null !== $item ? $item->toMap() : $item;
                }
            }
        }
        if (null !== $this->ownerType) {
            $res['OwnerType'] = $this->ownerType;
        }
        if (null !== $this->passwordExpireDays) {
            $res['PasswordExpireDays'] = $this->passwordExpireDays;
        }
        if (null !== $this->passwordExpireRestDays) {
            $res['PasswordExpireRestDays'] = $this->passwordExpireRestDays;
        }
        if (null !== $this->phone) {
            $res['Phone'] = $this->phone;
        }
        if (null !== $this->realNickName) {
            $res['RealNickName'] = $this->realNickName;
        }
        if (null !== $this->remark) {
            $res['Remark'] = $this->remark;
        }
        if (null !== $this->status) {
            $res['Status'] = $this->status;
        }
        if (null !== $this->supportLoginIdps) {
            $res['SupportLoginIdps'] = [];
            if (null !== $this->supportLoginIdps && \is_array($this->supportLoginIdps)) {
                $n = 0;
                foreach ($this->supportLoginIdps as $item) {
                    $res['SupportLoginIdps'][$n++] = null !== $item ? $item->toMap() : $item;
                }
            }
        }
        if (null !== $this->userSetPropertiesModels) {
            $res['UserSetPropertiesModels'] = [];
            if (null !== $this->userSetPropertiesModels && \is_array($this->userSetPropertiesModels)) {
                $n = 0;
                foreach ($this->userSetPropertiesModels as $item) {
                    $res['UserSetPropertiesModels'][$n++] = null !== $item ? $item->toMap() : $item;
                }
            }
        }

        return $res;
    }

    /**
     * @param array $map
     *
     * @return users
     */
    public static function fromMap($map = [])
    {
        $model = new self();
        if (isset($map['AutoLockTime'])) {
            $model->autoLockTime = $map['AutoLockTime'];
        }
        if (isset($map['DesktopCount'])) {
            $model->desktopCount = $map['DesktopCount'];
        }
        if (isset($map['DesktopGroupCount'])) {
            $model->desktopGroupCount = $map['DesktopGroupCount'];
        }
        if (isset($map['Email'])) {
            $model->email = $map['Email'];
        }
        if (isset($map['EnableAdminAccess'])) {
            $model->enableAdminAccess = $map['EnableAdminAccess'];
        }
        if (isset($map['EndUserId'])) {
            $model->endUserId = $map['EndUserId'];
        }
        if (isset($map['ExternalInfo'])) {
            $model->externalInfo = externalInfo::fromMap($map['ExternalInfo']);
        }
        if (isset($map['Id'])) {
            $model->id = $map['Id'];
        }
        if (isset($map['IsTenantManager'])) {
            $model->isTenantManager = $map['IsTenantManager'];
        }
        if (isset($map['OrgList'])) {
            if (!empty($map['OrgList'])) {
                $model->orgList = [];
                $n = 0;
                foreach ($map['OrgList'] as $item) {
                    $model->orgList[$n++] = null !== $item ? orgList::fromMap($item) : $item;
                }
            }
        }
        if (isset($map['OwnerType'])) {
            $model->ownerType = $map['OwnerType'];
        }
        if (isset($map['PasswordExpireDays'])) {
            $model->passwordExpireDays = $map['PasswordExpireDays'];
        }
        if (isset($map['PasswordExpireRestDays'])) {
            $model->passwordExpireRestDays = $map['PasswordExpireRestDays'];
        }
        if (isset($map['Phone'])) {
            $model->phone = $map['Phone'];
        }
        if (isset($map['RealNickName'])) {
            $model->realNickName = $map['RealNickName'];
        }
        if (isset($map['Remark'])) {
            $model->remark = $map['Remark'];
        }
        if (isset($map['Status'])) {
            $model->status = $map['Status'];
        }
        if (isset($map['SupportLoginIdps'])) {
            if (!empty($map['SupportLoginIdps'])) {
                $model->supportLoginIdps = [];
                $n = 0;
                foreach ($map['SupportLoginIdps'] as $item) {
                    $model->supportLoginIdps[$n++] = null !== $item ? supportLoginIdps::fromMap($item) : $item;
                }
            }
        }
        if (isset($map['UserSetPropertiesModels'])) {
            if (!empty($map['UserSetPropertiesModels'])) {
                $model->userSetPropertiesModels = [];
                $n = 0;
                foreach ($map['UserSetPropertiesModels'] as $item) {
                    $model->userSetPropertiesModels[$n++] = null !== $item ? userSetPropertiesModels::fromMap($item) : $item;
                }
            }
        }

        return $model;
    }
}
