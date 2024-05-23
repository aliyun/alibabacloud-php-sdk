<?php

// This file is auto-generated, don't edit it. Thanks.

namespace AlibabaCloud\SDK\OceanBasePro\V20190901\Models;

use AlibabaCloud\Tea\Model;

class ModifyDatabaseDescriptionRequest extends Model
{
    /**
     * @description Example 1
     *
     * This parameter is required.
     * @example sms_pre
     *
     * @var string
     */
    public $databaseName;

    /**
     * @description This parameter is required.
     *
     * @example this is a test database
     *
     * @var string
     */
    public $description;

    /**
     * @description The description of the database.
     *
     * This parameter is required.
     * @example ob317v4uif****
     *
     * @var string
     */
    public $instanceId;

    /**
     * @description The operation that you want to perform.
     * Set the value to **ModifyDatabaseDescription**.
     *
     * This parameter is required.
     * @example ob2mr3oae0****
     *
     * @var string
     */
    public $tenantId;
    protected $_name = [
        'databaseName' => 'DatabaseName',
        'description'  => 'Description',
        'instanceId'   => 'InstanceId',
        'tenantId'     => 'TenantId',
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
        if (null !== $this->description) {
            $res['Description'] = $this->description;
        }
        if (null !== $this->instanceId) {
            $res['InstanceId'] = $this->instanceId;
        }
        if (null !== $this->tenantId) {
            $res['TenantId'] = $this->tenantId;
        }

        return $res;
    }

    /**
     * @param array $map
     *
     * @return ModifyDatabaseDescriptionRequest
     */
    public static function fromMap($map = [])
    {
        $model = new self();
        if (isset($map['DatabaseName'])) {
            $model->databaseName = $map['DatabaseName'];
        }
        if (isset($map['Description'])) {
            $model->description = $map['Description'];
        }
        if (isset($map['InstanceId'])) {
            $model->instanceId = $map['InstanceId'];
        }
        if (isset($map['TenantId'])) {
            $model->tenantId = $map['TenantId'];
        }

        return $model;
    }
}
