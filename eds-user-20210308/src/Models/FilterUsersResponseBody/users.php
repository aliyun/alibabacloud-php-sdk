<?php

// This file is auto-generated, don't edit it. Thanks.

namespace AlibabaCloud\SDK\Edsuser\V20210308\Models\FilterUsersResponseBody;

use AlibabaCloud\Dara\Model;
use AlibabaCloud\SDK\Edsuser\V20210308\Models\FilterUsersResponseBody\users\externalInfo;
use AlibabaCloud\SDK\Edsuser\V20210308\Models\FilterUsersResponseBody\users\orgList;
use AlibabaCloud\SDK\Edsuser\V20210308\Models\FilterUsersResponseBody\users\supportLoginIdps;
use AlibabaCloud\SDK\Edsuser\V20210308\Models\FilterUsersResponseBody\users\userSetPropertiesModels;

class users extends Model
{
    /**
     * @var string
     */
    public $autoLockTime;

    /**
     * @var int
     */
    public $desktopCount;

    /**
     * @var int
     */
    public $desktopGroupCount;

    /**
     * @var string
     */
    public $email;

    /**
     * @var bool
     */
    public $enableAdminAccess;

    /**
     * @var string
     */
    public $endUserId;

    /**
     * @var externalInfo
     */
    public $externalInfo;

    /**
     * @var int
     */
    public $id;

    /**
     * @var bool
     */
    public $isTenantManager;

    /**
     * @var orgList[]
     */
    public $orgList;

    /**
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
     * @var string
     */
    public $phone;

    /**
     * @var string
     */
    public $realNickName;

    /**
     * @var string
     */
    public $remark;

    /**
     * @var int
     */
    public $status;

    /**
     * @var supportLoginIdps[]
     */
    public $supportLoginIdps;

    /**
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

    public function validate()
    {
        if (null !== $this->externalInfo) {
            $this->externalInfo->validate();
        }
        if (\is_array($this->orgList)) {
            Model::validateArray($this->orgList);
        }
        if (\is_array($this->supportLoginIdps)) {
            Model::validateArray($this->supportLoginIdps);
        }
        if (\is_array($this->userSetPropertiesModels)) {
            Model::validateArray($this->userSetPropertiesModels);
        }
        parent::validate();
    }

    public function toArray($noStream = false)
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
            $res['ExternalInfo'] = null !== $this->externalInfo ? $this->externalInfo->toArray($noStream) : $this->externalInfo;
        }

        if (null !== $this->id) {
            $res['Id'] = $this->id;
        }

        if (null !== $this->isTenantManager) {
            $res['IsTenantManager'] = $this->isTenantManager;
        }

        if (null !== $this->orgList) {
            if (\is_array($this->orgList)) {
                $res['OrgList'] = [];
                $n1 = 0;
                foreach ($this->orgList as $item1) {
                    $res['OrgList'][$n1] = null !== $item1 ? $item1->toArray($noStream) : $item1;
                    ++$n1;
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
            if (\is_array($this->supportLoginIdps)) {
                $res['SupportLoginIdps'] = [];
                $n1 = 0;
                foreach ($this->supportLoginIdps as $item1) {
                    $res['SupportLoginIdps'][$n1] = null !== $item1 ? $item1->toArray($noStream) : $item1;
                    ++$n1;
                }
            }
        }

        if (null !== $this->userSetPropertiesModels) {
            if (\is_array($this->userSetPropertiesModels)) {
                $res['UserSetPropertiesModels'] = [];
                $n1 = 0;
                foreach ($this->userSetPropertiesModels as $item1) {
                    $res['UserSetPropertiesModels'][$n1] = null !== $item1 ? $item1->toArray($noStream) : $item1;
                    ++$n1;
                }
            }
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
                $n1 = 0;
                foreach ($map['OrgList'] as $item1) {
                    $model->orgList[$n1] = orgList::fromMap($item1);
                    ++$n1;
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
                $n1 = 0;
                foreach ($map['SupportLoginIdps'] as $item1) {
                    $model->supportLoginIdps[$n1] = supportLoginIdps::fromMap($item1);
                    ++$n1;
                }
            }
        }

        if (isset($map['UserSetPropertiesModels'])) {
            if (!empty($map['UserSetPropertiesModels'])) {
                $model->userSetPropertiesModels = [];
                $n1 = 0;
                foreach ($map['UserSetPropertiesModels'] as $item1) {
                    $model->userSetPropertiesModels[$n1] = userSetPropertiesModels::fromMap($item1);
                    ++$n1;
                }
            }
        }

        return $model;
    }
}
