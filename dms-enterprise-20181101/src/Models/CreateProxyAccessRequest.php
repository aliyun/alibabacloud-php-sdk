<?php

// This file is auto-generated, don't edit it. Thanks.

namespace AlibabaCloud\SDK\Dmsenterprise\V20181101\Models;

use AlibabaCloud\Tea\Model;

class CreateProxyAccessRequest extends Model
{
    /**
     * @description The database account.
     *
     * @example xxx
     *
     * @var string
     */
    public $indepAccount;

    /**
     * @description The password that is used to log on to the database.
     *
     * @example xxx
     *
     * @var string
     */
    public $indepPassword;

    /**
     * @description The ID of the security protection agent. You can call the [ListProxies](https://www.alibabacloud.com/help/en/data-management-service/latest/listproxies) or [GetProxy](https://www.alibabacloud.com/help/en/data-management-service/latest/getproxy) operation to obtain this parameter.
     *
     * This parameter is required.
     * @example 1
     *
     * @var int
     */
    public $proxyId;

    /**
     * @description The ID of the tenant. You can call the [GetUserActiveTenant](https://www.alibabacloud.com/help/en/data-management-service/latest/getuseractivetenant) or [ListUserTenants](https://www.alibabacloud.com/help/en/data-management-service/latest/listusertenants) operation to obtain this parameter.
     *
     * @example 1
     *
     * @var int
     */
    public $tid;

    /**
     * @description The ID of the user. You can call the [ListUsers](https://www.alibabacloud.com/help/en/data-management-service/latest/listusers) or [GetUser](https://www.alibabacloud.com/help/en/data-management-service/latest/getuser) operation to obtain this parameter.
     *
     * This parameter is required.
     * @example 1
     *
     * @var int
     */
    public $userId;
    protected $_name = [
        'indepAccount'  => 'IndepAccount',
        'indepPassword' => 'IndepPassword',
        'proxyId'       => 'ProxyId',
        'tid'           => 'Tid',
        'userId'        => 'UserId',
    ];

    public function validate()
    {
    }

    public function toMap()
    {
        $res = [];
        if (null !== $this->indepAccount) {
            $res['IndepAccount'] = $this->indepAccount;
        }
        if (null !== $this->indepPassword) {
            $res['IndepPassword'] = $this->indepPassword;
        }
        if (null !== $this->proxyId) {
            $res['ProxyId'] = $this->proxyId;
        }
        if (null !== $this->tid) {
            $res['Tid'] = $this->tid;
        }
        if (null !== $this->userId) {
            $res['UserId'] = $this->userId;
        }

        return $res;
    }

    /**
     * @param array $map
     *
     * @return CreateProxyAccessRequest
     */
    public static function fromMap($map = [])
    {
        $model = new self();
        if (isset($map['IndepAccount'])) {
            $model->indepAccount = $map['IndepAccount'];
        }
        if (isset($map['IndepPassword'])) {
            $model->indepPassword = $map['IndepPassword'];
        }
        if (isset($map['ProxyId'])) {
            $model->proxyId = $map['ProxyId'];
        }
        if (isset($map['Tid'])) {
            $model->tid = $map['Tid'];
        }
        if (isset($map['UserId'])) {
            $model->userId = $map['UserId'];
        }

        return $model;
    }
}
