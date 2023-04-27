<?php

// This file is auto-generated, don't edit it. Thanks.

namespace AlibabaCloud\SDK\Dmsenterprise\V20181101\Models\GetUserActiveTenantResponseBody;

use AlibabaCloud\Tea\Model;

class tenant extends Model
{
    /**
     * @description The error code.
     *
     * @example ACTIVE
     *
     * @var string
     */
    public $status;

    /**
     * @description The operation that you want to perform. Set the value to **GetUserActiveTenant**.
     *
     * @example test_name
     *
     * @var string
     */
    public $tenantName;

    /**
     * @description The ID of the request.
     *
     * @example 3***
     *
     * @var int
     */
    public $tid;
    protected $_name = [
        'status'     => 'Status',
        'tenantName' => 'TenantName',
        'tid'        => 'Tid',
    ];

    public function validate()
    {
    }

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
     * @return tenant
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
