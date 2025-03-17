<?php

// This file is auto-generated, don't edit it. Thanks.

namespace AlibabaCloud\SDK\Dmsenterprise\V20181101\Models\ListUserTenantsResponseBody;

use AlibabaCloud\Tea\Model;

class tenantList extends Model
{
    /**
     * @description The status of the tenant. Valid values:
     *
     *   **ACTIVE**: The tenant is used to access DMS.
     *   **IN_ACTIVE**: The tenant is not used.
     *
     * @example ACTIVE
     *
     * @var string
     */
    public $status;

    /**
     * @description The name of the tenant.
     *
     * @example test_name
     *
     * @var string
     */
    public $tenantName;

    /**
     * @description The ID of the tenant.
     *
     * @example 3***
     *
     * @var int
     */
    public $tid;
    protected $_name = [
        'status' => 'Status',
        'tenantName' => 'TenantName',
        'tid' => 'Tid',
    ];

    public function validate() {}

    public function toMap()
    {
        $res = [];
        if (null !== $this->status) {
            $res['Status'] = $this->status;
        }
        if (null !== $this->tenantName) {
            $res['TenantName'] = $this->tenantName;
        }
        if (null !== $this->tid) {
            $res['Tid'] = $this->tid;
        }

        return $res;
    }

    /**
     * @param array $map
     *
     * @return tenantList
     */
    public static function fromMap($map = [])
    {
        $model = new self();
        if (isset($map['Status'])) {
            $model->status = $map['Status'];
        }
        if (isset($map['TenantName'])) {
            $model->tenantName = $map['TenantName'];
        }
        if (isset($map['Tid'])) {
            $model->tid = $map['Tid'];
        }

        return $model;
    }
}
