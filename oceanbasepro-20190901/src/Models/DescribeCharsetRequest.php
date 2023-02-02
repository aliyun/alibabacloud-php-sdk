<?php

// This file is auto-generated, don't edit it. Thanks.

namespace AlibabaCloud\SDK\OceanBasePro\V20190901\Models;

use AlibabaCloud\Tea\Model;

class DescribeCharsetRequest extends Model
{
    /**
     * @description The tenant mode.
     * For more information, see [DescribeInstanceTenantModes](~~410354~~).
     * @example Oracle
     *
     * @var string
     */
    public $tenantMode;
    protected $_name = [
        'tenantMode' => 'TenantMode',
    ];

    public function validate()
    {
    }

    public function toMap()
    {
        $res = [];
        if (null !== $this->tenantMode) {
            $res['TenantMode'] = $this->tenantMode;
        }

        return $res;
    }

    /**
     * @param array $map
     *
     * @return DescribeCharsetRequest
     */
    public static function fromMap($map = [])
    {
        $model = new self();
        if (isset($map['TenantMode'])) {
            $model->tenantMode = $map['TenantMode'];
        }

        return $model;
    }
}
