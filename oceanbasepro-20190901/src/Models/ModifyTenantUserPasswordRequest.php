<?php

// This file is auto-generated, don't edit it. Thanks.

namespace AlibabaCloud\SDK\OceanBasePro\V20190901\Models;

use AlibabaCloud\Tea\Model;

class ModifyTenantUserPasswordRequest extends Model
{
    /**
     * @description The ID of the OceanBase cluster.
     *
     * @example ob317v4uif****
     *
     * @var string
     */
    public $instanceId;

    /**
     * @description The ID of the tenant.
     *
     * @example ob2mr3oae0****
     *
     * @var string
     */
    public $tenantId;

    /**
     * @description The name of the database account.
     * You cannot use reserved keywords, such as SYS and root.
     * @example pay_test
     *
     * @var string
     */
    public $userName;

    /**
     * @description The password of the database account.
     * It must be 10 to 32 characters in length and contain three types of the following characters: uppercase letters, lowercase letters, digits, and special characters. The special characters are ! @ # $ % \ ^ \ & \ * ( ) _ + - =
     * @example !Aliyun4Oceanbase
     *
     * @var string
     */
    public $userPassword;
    protected $_name = [
        'instanceId'   => 'InstanceId',
        'tenantId'     => 'TenantId',
        'userName'     => 'UserName',
        'userPassword' => 'UserPassword',
    ];

    public function validate()
    {
    }

    public function toMap()
    {
        $res = [];
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
