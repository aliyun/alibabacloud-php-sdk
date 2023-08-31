<?php

// This file is auto-generated, don't edit it. Thanks.

namespace AlibabaCloud\SDK\Edsuser\V20210308\Models\DescribeUsersResponseBody;

use AlibabaCloud\Tea\Model;

class users extends Model
{
    /**
     * @description The email address.
     *
     * @example username@example.com
     *
     * @var string
     */
    public $email;

    /**
     * @description The name of the user.
     *
     * @example alice
     *
     * @var string
     */
    public $endUserId;

    /**
     * @description The ID of the user.
     *
     * @example 4205**
     *
     * @var int
     */
    public $id;

    /**
     * @description Indicates whether the user is an administrator. If the convenience user is of the administrator-activated type, you must specify a user administrator. Notifications such as password reset on a client are sent to the email address or mobile phone of the user administrator. For more information, see [Create a convenience user](~~214472~~).
     *
     * @example true
     *
     * @var bool
     */
    public $isTenantManager;

    /**
     * @description The nickname of the user.
     *
     * @example Lee
     *
     * @var string
     */
    public $nickName;

    /**
     * @description The ID of the organization to which the user belongs.
     *
     * @example org-4mdgc1cocc59z****
     *
     * @var string
     */
    public $orgId;

    /**
     * @description The type of the convenience account.
     *
     *   The administrator-activated type. The administrator specifies the username and the password of the convenience account. User notifications such as password reset are sent to the email address or mobile number of the administrator.
     *   The user-activated type. The administrator specifies the username and the email address or mobile number of a user. Activation notifications are sent to the email address or mobile number of the user.
     *
     * Valid values:
     *
     *   CreateFromManager
     *
     * <!-- -->
     *
     *   Normal: user-activated
     *
     * <!-- -->
     * @example Normal
     *
     * @var string
     */
    public $ownerType;

    /**
     * @description The mobile number of the user. If you leave this parameter empty, the value of this parameter is not returned.
     *
     * @example 1381111****
     *
     * @var string
     */
    public $phone;

    /**
     * @description The remarks on the user.
     *
     * @var string
     */
    public $remark;

    /**
     * @description The status of the user.
     *
     * @example 0
     *
     * @var int
     */
    public $status;

    /**
     * @description The user ID that is globally unique.
     *
     * @example 41fd1254d8f7****
     *
     * @var string
     */
    public $wyId;
    protected $_name = [
        'email'           => 'Email',
        'endUserId'       => 'EndUserId',
        'id'              => 'Id',
        'isTenantManager' => 'IsTenantManager',
        'nickName'        => 'NickName',
        'orgId'           => 'OrgId',
        'ownerType'       => 'OwnerType',
        'phone'           => 'Phone',
        'remark'          => 'Remark',
        'status'          => 'Status',
        'wyId'            => 'WyId',
    ];

    public function validate()
    {
    }

    public function toMap()
    {
        $res = [];
        if (null !== $this->email) {
            $res['Email'] = $this->email;
        }
        if (null !== $this->endUserId) {
            $res['EndUserId'] = $this->endUserId;
        }
        if (null !== $this->id) {
            $res['Id'] = $this->id;
        }
        if (null !== $this->isTenantManager) {
            $res['IsTenantManager'] = $this->isTenantManager;
        }
        if (null !== $this->nickName) {
            $res['NickName'] = $this->nickName;
        }
        if (null !== $this->orgId) {
            $res['OrgId'] = $this->orgId;
        }
        if (null !== $this->ownerType) {
            $res['OwnerType'] = $this->ownerType;
        }
        if (null !== $this->phone) {
            $res['Phone'] = $this->phone;
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
        if (isset($map['Email'])) {
            $model->email = $map['Email'];
        }
        if (isset($map['EndUserId'])) {
            $model->endUserId = $map['EndUserId'];
        }
        if (isset($map['Id'])) {
            $model->id = $map['Id'];
        }
        if (isset($map['IsTenantManager'])) {
            $model->isTenantManager = $map['IsTenantManager'];
        }
        if (isset($map['NickName'])) {
            $model->nickName = $map['NickName'];
        }
        if (isset($map['OrgId'])) {
            $model->orgId = $map['OrgId'];
        }
        if (isset($map['OwnerType'])) {
            $model->ownerType = $map['OwnerType'];
        }
        if (isset($map['Phone'])) {
            $model->phone = $map['Phone'];
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
