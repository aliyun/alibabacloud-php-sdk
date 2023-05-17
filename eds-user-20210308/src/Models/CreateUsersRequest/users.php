<?php

// This file is auto-generated, don't edit it. Thanks.

namespace AlibabaCloud\SDK\Edsuser\V20210308\Models\CreateUsersRequest;

use AlibabaCloud\Tea\Model;

class users extends Model
{
    /**
     * @description The name of the end user.
     *
     * @example username@example.com
     *
     * @var string
     */
    public $email;

    /**
     * @description Details of the convenience user that failed to be created.
     *
     * @example test1
     *
     * @var string
     */
    public $endUserId;

    /**
     * @description The error message returned.
     *
     * @example 1111****
     *
     * @var string
     */
    public $orgId;

    /**
     * @description The error code returned if the request failed.
     *
     * @example Normal
     *
     * @var string
     */
    public $ownerType;

    /**
     * @description The mobile number of the end user.
     *
     * @example password1
     *
     * @var string
     */
    public $password;

    /**
     * @description The email address of the end user.
     *
     * @example 1381111****
     *
     * @var string
     */
    public $phone;

    /**
     * @example remark1
     *
     * @var string
     */
    public $remark;
    protected $_name = [
        'email'     => 'Email',
        'endUserId' => 'EndUserId',
        'orgId'     => 'OrgId',
        'ownerType' => 'OwnerType',
        'password'  => 'Password',
        'phone'     => 'Phone',
        'remark'    => 'Remark',
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
        if (isset($map['Remark'])) {
            $model->remark = $map['Remark'];
        }

        return $model;
    }
}
