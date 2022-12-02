<?php

// This file is auto-generated, don't edit it. Thanks.

namespace AlibabaCloud\SDK\OceanBasePro\V20190901\Models;

use AlibabaCloud\Tea\Model;

class DeleteTenantsRequest extends Model
{
    /**
     * @var string
     */
    public $instanceId;

    /**
     * @var string
     */
    public $tenantIds;
    protected $_name = [
        'instanceId' => 'InstanceId',
        'tenantIds'  => 'TenantIds',
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
        if (null !== $this->tenantIds) {
            $res['TenantIds'] = $this->tenantIds;
        }

        return $res;
    }

    /**
     * @param array $map
     *
     * @return DeleteTenantsRequest
     */
    public static function fromMap($map = [])
    {
        $model = new self();
        if (isset($map['InstanceId'])) {
            $model->instanceId = $map['InstanceId'];
        }
        if (isset($map['TenantIds'])) {
            $model->tenantIds = $map['TenantIds'];
        }

        return $model;
    }
}
