<?php

// This file is auto-generated, don't edit it. Thanks.

namespace AlibabaCloud\SDK\Edsuser\V20210308\Models\DescribeUsersResponseBody;

use AlibabaCloud\SDK\Edsuser\V20210308\Models\DescribeUsersResponseBody\users\extras;
use AlibabaCloud\SDK\Edsuser\V20210308\Models\DescribeUsersResponseBody\users\groups;
use AlibabaCloud\SDK\Edsuser\V20210308\Models\DescribeUsersResponseBody\users\orgs;
use AlibabaCloud\SDK\Edsuser\V20210308\Models\DescribeUsersResponseBody\users\properties;
use AlibabaCloud\Tea\Model;

class users extends Model
{
    /**
     * @description The work address of the convenience user.
     *
     * @example Hangzhou \\*\\*\\*
     *
     * @var string
     */
    public $address;

    /**
     * @description The profile picture of the convenience user.
     *
     * @example https://cdn.*****
     *
     * @var string
     */
    public $avatar;

    /**
     * @description The email address of the convenience user.
     *
     * @example username@example.com
     *
     * @var string
     */
    public $email;

    /**
     * @var bool
     */
    public $enableAdminAccess;

    /**
     * @description The username of the convenience user.
     *
     * @example alice
     *
     * @var string
     */
    public $endUserId;

    /**
     * @var string
     */
    public $externalName;

    /**
     * @var extras
     */
    public $extras;

    /**
     * @description The user groups to which the convenience user belongs.
     *
     * @var groups[]
     */
    public $groups;

    /**
     * @description The ID of the convenience user.
     *
     * @example 4205**
     *
     * @var int
     */
    public $id;

    /**
     * @description Indicates whether the convenience user is an administrator. If the convenience user is of the administrator-activated type, you must specify a user administrator. Notifications such as password reset on a client are sent to the email address or mobile number of the user administrator. For more information, see [Create a convenience user](https://help.aliyun.com/document_detail/214472.html).
     *
     * @example true
     *
     * @var bool
     */
    public $isTenantManager;

    /**
     * @description The employee number of the convenience user.
     *
     * @example A10000**
     *
     * @var string
     */
    public $jobNumber;

    /**
     * @description The nickname of the convenience user.
     *
     * @example Lee
     *
     * @var string
     */
    public $nickName;

    /**
     * @description The ID of the organization to which the convenience user belongs.
     *
     * >  This parameter will be deprecated in the future.
     *
     * @example org-4mdgc1cocc59z****
     *
     * @var string
     */
    public $orgId;

    /**
     * @description The organizations to which the convenience user belongs.
     *
     * @var orgs[]
     */
    public $orgs;

    /**
     * @description The type of the convenience account.
     *
     *   Administrator-activated type: The administrator specifies the username and password of the convenience account. User notifications such as password reset notifications are sent to the email address or mobile number of the administrator.
     *   User-activated type: The administrator specifies the username and the email address or mobile number of a convenience user. Notifications such as activation notifications that contain the default password are sent to the email address or mobile number of the convenience user.
     *
     * Valid values:
     *
     *   CreateFromManager
     *
     * <!-- -->
     *
     * :
     *
     * <!-- -->
     *
     * administrator-activated
     *
     * <!-- -->
     *
     *   Normal
     *
     * <!-- -->
     *
     * :
     *
     * <!-- -->
     *
     * user-activated
     *
     * <!-- -->
     *
     * @example Normal
     *
     * @var string
     */
    public $ownerType;

    /**
     * @description The mobile number of the convenience user. If you leave this parameter empty, the value of this parameter is not returned.
     *
     * @example 1381111****
     *
     * @var string
     */
    public $phone;

    /**
     * @var properties[]
     */
    public $properties;

    /**
     * @var string
     */
    public $realNickName;

    /**
     * @description The remarks on the convenience user.
     *
     * @example TestUser
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
     * @description The globally unique ID of the convenience user.
     *
     * @example 41fd1254d8f7****
     *
     * @var string
     */
    public $wyId;
    protected $_name = [
        'address' => 'Address',
        'avatar' => 'Avatar',
        'email' => 'Email',
        'enableAdminAccess' => 'EnableAdminAccess',
        'endUserId' => 'EndUserId',
        'externalName' => 'ExternalName',
        'extras' => 'Extras',
        'groups' => 'Groups',
        'id' => 'Id',
        'isTenantManager' => 'IsTenantManager',
        'jobNumber' => 'JobNumber',
        'nickName' => 'NickName',
        'orgId' => 'OrgId',
        'orgs' => 'Orgs',
        'ownerType' => 'OwnerType',
        'phone' => 'Phone',
        'properties' => 'Properties',
        'realNickName' => 'RealNickName',
        'remark' => 'Remark',
        'status' => 'Status',
        'wyId' => 'WyId',
    ];

    public function validate() {}

    public function toMap()
    {
        $res = [];
        if (null !== $this->address) {
            $res['Address'] = $this->address;
        }
        if (null !== $this->avatar) {
            $res['Avatar'] = $this->avatar;
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
        if (null !== $this->externalName) {
            $res['ExternalName'] = $this->externalName;
        }
        if (null !== $this->extras) {
            $res['Extras'] = null !== $this->extras ? $this->extras->toMap() : null;
        }
        if (null !== $this->groups) {
            $res['Groups'] = [];
            if (null !== $this->groups && \is_array($this->groups)) {
                $n = 0;
                foreach ($this->groups as $item) {
                    $res['Groups'][$n++] = null !== $item ? $item->toMap() : $item;
                }
            }
        }
        if (null !== $this->id) {
            $res['Id'] = $this->id;
        }
        if (null !== $this->isTenantManager) {
            $res['IsTenantManager'] = $this->isTenantManager;
        }
        if (null !== $this->jobNumber) {
            $res['JobNumber'] = $this->jobNumber;
        }
        if (null !== $this->nickName) {
            $res['NickName'] = $this->nickName;
        }
        if (null !== $this->orgId) {
            $res['OrgId'] = $this->orgId;
        }
        if (null !== $this->orgs) {
            $res['Orgs'] = [];
            if (null !== $this->orgs && \is_array($this->orgs)) {
                $n = 0;
                foreach ($this->orgs as $item) {
                    $res['Orgs'][$n++] = null !== $item ? $item->toMap() : $item;
                }
            }
        }
        if (null !== $this->ownerType) {
            $res['OwnerType'] = $this->ownerType;
        }
        if (null !== $this->phone) {
            $res['Phone'] = $this->phone;
        }
        if (null !== $this->properties) {
            $res['Properties'] = [];
            if (null !== $this->properties && \is_array($this->properties)) {
                $n = 0;
                foreach ($this->properties as $item) {
                    $res['Properties'][$n++] = null !== $item ? $item->toMap() : $item;
                }
            }
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
        if (null !== $this->wyId) {
            $res['WyId'] = $this->wyId;
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
        if (isset($map['Address'])) {
            $model->address = $map['Address'];
        }
        if (isset($map['Avatar'])) {
            $model->avatar = $map['Avatar'];
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
        if (isset($map['ExternalName'])) {
            $model->externalName = $map['ExternalName'];
        }
        if (isset($map['Extras'])) {
            $model->extras = extras::fromMap($map['Extras']);
        }
        if (isset($map['Groups'])) {
            if (!empty($map['Groups'])) {
                $model->groups = [];
                $n = 0;
                foreach ($map['Groups'] as $item) {
                    $model->groups[$n++] = null !== $item ? groups::fromMap($item) : $item;
                }
            }
        }
        if (isset($map['Id'])) {
            $model->id = $map['Id'];
        }
        if (isset($map['IsTenantManager'])) {
            $model->isTenantManager = $map['IsTenantManager'];
        }
        if (isset($map['JobNumber'])) {
            $model->jobNumber = $map['JobNumber'];
        }
        if (isset($map['NickName'])) {
            $model->nickName = $map['NickName'];
        }
        if (isset($map['OrgId'])) {
            $model->orgId = $map['OrgId'];
        }
        if (isset($map['Orgs'])) {
            if (!empty($map['Orgs'])) {
                $model->orgs = [];
                $n = 0;
                foreach ($map['Orgs'] as $item) {
                    $model->orgs[$n++] = null !== $item ? orgs::fromMap($item) : $item;
                }
            }
        }
        if (isset($map['OwnerType'])) {
            $model->ownerType = $map['OwnerType'];
        }
        if (isset($map['Phone'])) {
            $model->phone = $map['Phone'];
        }
        if (isset($map['Properties'])) {
            if (!empty($map['Properties'])) {
                $model->properties = [];
                $n = 0;
                foreach ($map['Properties'] as $item) {
                    $model->properties[$n++] = null !== $item ? properties::fromMap($item) : $item;
                }
            }
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
        if (isset($map['WyId'])) {
            $model->wyId = $map['WyId'];
        }

        return $model;
    }
}
