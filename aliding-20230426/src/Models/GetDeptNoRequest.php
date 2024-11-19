<?php

// This file is auto-generated, don't edit it. Thanks.

namespace AlibabaCloud\SDK\Aliding\V20230426\Models;

use AlibabaCloud\SDK\Aliding\V20230426\Models\GetDeptNoRequest\tenantContext;
use AlibabaCloud\Tea\Model;

class GetDeptNoRequest extends Model
{
    /**
     * @var tenantContext
     */
    public $tenantContext;

    /**
     * @description This parameter is required.
     *
     * @example 012345
     *
     * @var string
     */
    public $deptId;
    protected $_name = [
        'tenantContext' => 'TenantContext',
        'deptId'        => 'deptId',
    ];

    public function validate()
    {
    }

    public function toMap()
    {
        $res = [];
        if (null !== $this->tenantContext) {
            $res['TenantContext'] = null !== $this->tenantContext ? $this->tenantContext->toMap() : null;
        }
        if (null !== $this->deptId) {
            $res['deptId'] = $this->deptId;
        }

        return $res;
    }

    /**
     * @param array $map
     *
     * @return GetDeptNoRequest
     */
    public static function fromMap($map = [])
    {
        $model = new self();
        if (isset($map['TenantContext'])) {
            $model->tenantContext = tenantContext::fromMap($map['TenantContext']);
        }
        if (isset($map['deptId'])) {
            $model->deptId = $map['deptId'];
        }

        return $model;
    }
}
