<?php

// This file is auto-generated, don't edit it. Thanks.

namespace AlibabaCloud\SDK\Dmsenterprise\V20181101\Models\GetUserActiveTenantResponseBody;

use AlibabaCloud\Tea\Model;

class tenant extends Model
{
    /**
     * @var string
     */
    public $status;

    /**
     * @var int
     */
    public $tid;

    /**
     * @var string
     */
    public $tenantName;
    protected $_name = [
        'status'     => 'Status',
        'tid'        => 'Tid',
        'tenantName' => 'TenantName',
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
        if (null !== $this->tid) {
            $res['Tid'] = $this->tid;
        }
        if (null !== $this->tenantName) {
            $res['TenantName'] = $this->tenantName;
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
        if (isset($map['Tid'])) {
            $model->tid = $map['Tid'];
        }
        if (isset($map['TenantName'])) {
            $model->tenantName = $map['TenantName'];
        }

        return $model;
    }
}
