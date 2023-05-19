<?php

// This file is auto-generated, don't edit it. Thanks.

namespace AlibabaCloud\SDK\OceanBasePro\V20190901\Models;

use AlibabaCloud\Tea\Model;

class ModifyTenantUserPasswordRequest extends Model
{
    /**
     * @description 加密方式。
     *
     * @example RSA
     *
     * @var string
     */
    public $encryptionType;

    /**
     * @example ob317v4uif****
     *
     * @var string
     */
    public $instanceId;

    /**
     * @description ```
     * &UserName=pay_test
     * &TenantId=ob2mr3oae0****
     * &UserPassword=!Aliyun4Oceanbase
     * &InstanceId=ob317v4uif****
     * ```
     * @example ob2mr3oae0****
     *
     * @var string
     */
    public $tenantId;

    /**
     * @description The ID of the OceanBase cluster.
     *
     * @example pay_test
     *
     * @var string
     */
    public $userName;

    /**
     * @description You can call this operation to change the logon password of a specified account in a tenant.
     *
     * @example !Aliyun4Oceanbase
     *
     * @var string
     */
    public $userPassword;
    protected $_name = [
        'encryptionType' => 'EncryptionType',
        'instanceId'     => 'InstanceId',
        'tenantId'       => 'TenantId',
        'userName'       => 'UserName',
        'userPassword'   => 'UserPassword',
    ];

    public function validate()
    {
    }

    public function toMap()
    {
        $res = [];
        if (null !== $this->encryptionType) {
            $res['EncryptionType'] = $this->encryptionType;
        }
        if (null !== $this->instanceId) {
            $res['InstanceId'] = $this->instanceId;
        }
        if (null !== $this->tenantId) {
            $res['TenantId'] = $this->tenantId;
        }
        if (null !== $this->userName) {
            $res['UserName'] = $this->userName;
        }
        if (null !== $this->userPassword) {
            $res['UserPassword'] = $this->userPassword;
        }

        return $res;
    }

    /**
     * @param array $map
     *
     * @return ModifyTenantUserPasswordRequest
     */
    public static function fromMap($map = [])
    {
        $model = new self();
        if (isset($map['EncryptionType'])) {
            $model->encryptionType = $map['EncryptionType'];
        }
        if (isset($map['InstanceId'])) {
            $model->instanceId = $map['InstanceId'];
        }
        if (isset($map['TenantId'])) {
            $model->tenantId = $map['TenantId'];
        }
        if (isset($map['UserName'])) {
            $model->userName = $map['UserName'];
        }
        if (isset($map['UserPassword'])) {
            $model->userPassword = $map['UserPassword'];
        }

        return $model;
    }
}
