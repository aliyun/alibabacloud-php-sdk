<?php

// This file is auto-generated, don't edit it. Thanks.

namespace AlibabaCloud\SDK\Edsuser\V20210308\Models\CreateUsersRequest;

use AlibabaCloud\Tea\Model;

class users extends Model
{
    /**
     * @description The email address of the end user. The email address is used to receive notifications about events such as desktop assignment. You must specify an email address or a mobile number to receive notifications.
     *
     * @example username@example.com
     *
     * @var string
     */
    public $email;

    /**
     * @description The name of the end user. The name must be 3 to 24 characters in length, and can contain lowercase letters, digits, and underscores (\_).
     *
     * @example test1
     *
     * @var string
     */
    public $endUserId;

    /**
     * @description The organization to which the end user belongs.
     *
     * @example 1111****
     *
     * @var string
     */
    public $orgId;

    /**
     * @description The type of the account ownership.
     *
     * @example Normal
     *
     * @var string
     */
    public $ownerType;

    /**
     * @description The password of the end user.
     *
     * @example password1
     *
     * @var string
     */
    public $password;

    /**
     * @description Mobile numbers are not supported on the international site (alibabacloud.com).
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
     * @description The remarks of the end user.
     *
     * @example remark1
     *
     * @var string
     */
    public $remark;
    protected $_name = [
        'email'        => 'Email',
        'endUserId'    => 'EndUserId',
        'orgId'        => 'OrgId',
        'ownerType'    => 'OwnerType',
        'password'     => 'Password',
        'phone'        => 'Phone',
        'realNickName' => 'RealNickName',
        'remark'       => 'Remark',
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
        if (null !== $this->orgId) {
            $res['OrgId'] = $this->orgId;
        }
        if (null !== $this->ownerType) {
            $res['OwnerType'] = $this->ownerType;
        }
        if (null !== $this->password) {
            $res['Password'] = $this->password;
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
        if (isset($map['OrgId'])) {
            $model->orgId = $map['OrgId'];
        }
        if (isset($map['OwnerType'])) {
            $model->ownerType = $map['OwnerType'];
        }
        if (isset($map['Password'])) {
            $model->password = $map['Password'];
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

        return $model;
    }
}
