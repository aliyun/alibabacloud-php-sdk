<?php

// This file is auto-generated, don't edit it. Thanks.

namespace AlibabaCloud\SDK\Dmsenterprise\V20181101\Models;

use AlibabaCloud\Tea\Model;

class CreateProxyRequest extends Model
{
    /**
     * @description The ID of the database instance. You can call the [ListInstances](https://www.alibabacloud.com/help/en/data-management-service/latest/listinstances) or [GetInstance](https://www.alibabacloud.com/help/en/data-management-service/latest/getinstance) operation to query the database instance ID.
     *
     * This parameter is required.
     * @example 183****
     *
     * @var int
     */
    public $instanceId;

    /**
     * @description The password of the database account.
     *
     * This parameter is required.
     * @example ******
     *
     * @var string
     */
    public $password;

    /**
     * @description The ID of the tenant. You can call the [GetUserActiveTenant](https://www.alibabacloud.com/help/en/data-management-service/latest/getuseractivetenant) operation to query the tenant ID.
     *
     * @example 3***
     *
     * @var int
     */
    public $tid;

    /**
     * @description The username of the database account.
     *
     * This parameter is required.
     * @example username
     *
     * @var string
     */
    public $username;
    protected $_name = [
        'instanceId' => 'InstanceId',
        'password'   => 'Password',
        'tid'        => 'Tid',
        'username'   => 'Username',
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
        if (null !== $this->password) {
            $res['Password'] = $this->password;
        }
        if (null !== $this->tid) {
            $res['Tid'] = $this->tid;
        }
        if (null !== $this->username) {
            $res['Username'] = $this->username;
        }

        return $res;
    }

    /**
     * @param array $map
     *
     * @return CreateProxyRequest
     */
    public static function fromMap($map = [])
    {
        $model = new self();
        if (isset($map['InstanceId'])) {
            $model->instanceId = $map['InstanceId'];
        }
        if (isset($map['Password'])) {
            $model->password = $map['Password'];
        }
        if (isset($map['Tid'])) {
            $model->tid = $map['Tid'];
        }
        if (isset($map['Username'])) {
            $model->username = $map['Username'];
        }

        return $model;
    }
}
