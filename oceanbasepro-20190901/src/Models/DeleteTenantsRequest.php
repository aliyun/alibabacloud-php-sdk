<?php

// This file is auto-generated, don't edit it. Thanks.

namespace AlibabaCloud\SDK\OceanBasePro\V20190901\Models;

use AlibabaCloud\Tea\Model;

class DeleteTenantsRequest extends Model
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
     * @description The list of tenant IDs.
     * It is a JSON array. Each object in the array is a tenant name string.
     * @example ["ob2mr3oae0****", "ob2mr3oae1****"]
     *
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
