<?php

// This file is auto-generated, don't edit it. Thanks.

namespace AlibabaCloud\SDK\OceanBasePro\V20190901\Models;

use AlibabaCloud\Tea\Model;

class ModifyTenantUserDescriptionRequest extends Model
{
    /**
     * @description The operation that you want to perform.
     * Set the value to **ModifyTenantUserDescription**.
     *
     * This parameter is required.
     * @example this is a test database
     *
     * @var string
     */
    public $description;

    /**
     * @description The ID of the OceanBase cluster.
     *
     * This parameter is required.
     * @example ob317v4uif****
     *
     * @var string
     */
    public $instanceId;

    /**
     * @description The ID of the tenant.
     *
     * This parameter is required.
     * @example ob2mr3oae0****
     *
     * @var string
     */
    public $tenantId;

    /**
     * @description The description of the database.
     *
     * This parameter is required.
     * @example pay_test
     *
     * @var string
     */
    public $userName;
    protected $_name = [
        'description' => 'Description',
        'instanceId'  => 'InstanceId',
        'tenantId'    => 'TenantId',
        'userName'    => 'UserName',
    ];

    public function validate()
    {
    }

    public function toMap()
    {
        $res = [];
        if (null !== $this->description) {
            $res['Description'] = $this->description;
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

        return $res;
    }

    /**
     * @param array $map
     *
     * @return ModifyTenantUserDescriptionRequest
     */
    public static function fromMap($map = [])
    {
        $model = new self();
        if (isset($map['Description'])) {
            $model->description = $map['Description'];
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

        return $model;
    }
}
