<?php

// This file is auto-generated, don't edit it. Thanks.

namespace AlibabaCloud\SDK\Edsuser\V20210308\Models\FilterUsersResponseBody;

use AlibabaCloud\SDK\Edsuser\V20210308\Models\FilterUsersResponseBody\users\externalInfo;
use AlibabaCloud\SDK\Edsuser\V20210308\Models\FilterUsersResponseBody\users\userSetPropertiesModels;
use AlibabaCloud\Tea\Model;

class users extends Model
{
    /**
     * @description The number of cloud desktops that are assigned to the user.
     *
     * @example 1
     *
     * @var int
     */
    public $desktopCount;

    /**
     * @description The number of authorized desktop groups that are owned by the user. This value is returned if you set `IncludeDesktopGroupCount` to `true`.
     *
     * @example 2
     *
     * @var int
     */
    public $desktopGroupCount;

    /**
     * @description The email address.
     *
     * @example testName@example.com
     *
     * @var string
     */
    public $email;

    /**
     * @description Indicates whether the user is a local administrator.
     *
     * Valid values:
     *
     *   true
     *
     * <!-- -->
     *
     *   false
     *
     * <!-- -->
     * @example true
     *
     * @var bool
     */
    public $enableAdminAccess;

    /**
     * @description The username.
     *
     * @example testName
     *
     * @var string
     */
    public $endUserId;

    /**
     * @description The additional information about the user.
     *
     * @var externalInfo
     */
    public $externalInfo;

    /**
     * @description The user ID.
     *
     * @example 12345
     *
     * @var int
     */
    public $id;

    /**
     * @description Indicates whether the user is a tenant administrator.
     *
     * Valid values:
     *
     *   true
     *
     * <!-- -->
     *
     *   false
     *
     * <!-- -->
     * @example true
     *
     * @var bool
     */
    public $isTenantManager;

    /**
     * @description The type of the account ownership.
     *
     * Valid values:
     *
     *   CreateFromManager
     *
     * <!-- -->
     *
     *   Normal
     *
     * <!-- -->
     * @example Normal
     *
     * @var string
     */
    public $ownerType;

    /**
     * @description The mobile number.
     *
     * @example 1381111****
     *
     * @var string
     */
    public $phone;

    /**
     * @var string
     */
    public $realNickName;

    /**
     * @description The remarks.
     *
     * @example 1
     *
     * @var string
     */
    public $remark;

    /**
     * @description The user status.
     *
     * Valid values:
     *
     *   0: The user status is normal.
     *
     * <!-- -->
     *
     *   9: The user is locked.
     *
     * <!-- -->
     * @example 0
     *
     * @var int
     */
    public $status;

    /**
     * @description Details of the properties.
     *
     * @var userSetPropertiesModels[]
     */
    public $userSetPropertiesModels;
    protected $_name = [
        'desktopCount'            => 'DesktopCount',
        'desktopGroupCount'       => 'DesktopGroupCount',
        'email'                   => 'Email',
        'enableAdminAccess'       => 'EnableAdminAccess',
        'endUserId'               => 'EndUserId',
        'externalInfo'            => 'ExternalInfo',
        'id'                      => 'Id',
        'isTenantManager'         => 'IsTenantManager',
        'ownerType'               => 'OwnerType',
        'phone'                   => 'Phone',
        'realNickName'            => 'RealNickName',
        'remark'                  => 'Remark',
        'status'                  => 'Status',
        'userSetPropertiesModels' => 'UserSetPropertiesModels',
    ];

    public function validate()
    {
    }

    public function toMap()
    {
        $res = [];
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
        if (null !== $this->ownerType) {
            $res['OwnerType'] = $this->ownerType;
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
        if (isset($map['OwnerType'])) {
            $model->ownerType = $map['OwnerType'];
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
        if (isset($map['UserSetPropertiesModels'])) {
            if (!empty($map['UserSetPropertiesModels'])) {
                $model->userSetPropertiesModels = [];
                $n                              = 0;
                foreach ($map['UserSetPropertiesModels'] as $item) {
                    $model->userSetPropertiesModels[$n++] = null !== $item ? userSetPropertiesModels::fromMap($item) : $item;
                }
            }
        }

        return $model;
    }
}
