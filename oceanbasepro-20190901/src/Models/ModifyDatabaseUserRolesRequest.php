<?php

// This file is auto-generated, don't edit it. Thanks.

namespace AlibabaCloud\SDK\OceanBasePro\V20190901\Models;

use AlibabaCloud\Tea\Model;

class ModifyDatabaseUserRolesRequest extends Model
{
    /**
     * @description The ID of the tenant.
     *
     * This parameter is required.
     * @example sms_pre
     *
     * @var string
     */
    public $databaseName;

    /**
     * @description The account information.
     *
     * @example ob317v4uif****
     *
     * @var string
     */
    public $instanceId;

    /**
     * @description A list of usernames and their respective roles.
     *
     * This parameter is required.
     * @example ob2mr3oae0****
     *
     * @var string
     */
    public $tenantId;

    /**
     * @description The ID of the OceanBase cluster.
     *
     * This parameter is required.
     * @example [{"UserName":"omstest","Role":"readwrite"}]
     *
     * @var string
     */
    public $users;
    protected $_name = [
        'databaseName' => 'DatabaseName',
        'instanceId'   => 'InstanceId',
        'tenantId'     => 'TenantId',
        'users'        => 'Users',
    ];

    public function validate()
    {
    }

    public function toMap()
    {
        $res = [];
        if (null !== $this->databaseName) {
            $res['DatabaseName'] = $this->databaseName;
        }
        if (null !== $this->instanceId) {
            $res['InstanceId'] = $this->instanceId;
        }
        if (null !== $this->tenantId) {
            $res['TenantId'] = $this->tenantId;
        }
        if (null !== $this->users) {
            $res['Users'] = $this->users;
        }

        return $res;
    }

    /**
     * @param array $map
     *
     * @return ModifyDatabaseUserRolesRequest
     */
    public static function fromMap($map = [])
    {
        $model = new self();
        if (isset($map['DatabaseName'])) {
            $model->databaseName = $map['DatabaseName'];
        }
        if (isset($map['InstanceId'])) {
            $model->instanceId = $map['InstanceId'];
        }
        if (isset($map['TenantId'])) {
            $model->tenantId = $map['TenantId'];
        }
        if (isset($map['Users'])) {
            $model->users = $map['Users'];
        }

        return $model;
    }
}
