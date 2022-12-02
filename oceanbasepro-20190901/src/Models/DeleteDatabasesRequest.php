<?php

// This file is auto-generated, don't edit it. Thanks.

namespace AlibabaCloud\SDK\OceanBasePro\V20190901\Models;

use AlibabaCloud\Tea\Model;

class DeleteDatabasesRequest extends Model
{
    /**
     * @var string
     */
    public $databaseNames;

    /**
     * @var string
     */
    public $instanceId;

    /**
     * @var string
     */
    public $tenantId;
    protected $_name = [
        'databaseNames' => 'DatabaseNames',
        'instanceId'    => 'InstanceId',
        'tenantId'      => 'TenantId',
    ];

    public function validate()
    {
    }

    public function toMap()
    {
        $res = [];
        if (null !== $this->databaseNames) {
            $res['DatabaseNames'] = $this->databaseNames;
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
     * @return DeleteDatabasesRequest
     */
    public static function fromMap($map = [])
    {
        $model = new self();
        if (isset($map['DatabaseNames'])) {
            $model->databaseNames = $map['DatabaseNames'];
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
