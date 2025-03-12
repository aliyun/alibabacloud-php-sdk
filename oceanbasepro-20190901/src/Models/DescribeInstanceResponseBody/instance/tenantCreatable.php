<?php

// This file is auto-generated, don't edit it. Thanks.

namespace AlibabaCloud\SDK\OceanBasePro\V20190901\Models\DescribeInstanceResponseBody\instance;

use AlibabaCloud\Tea\Model;

class tenantCreatable extends Model
{
    /**
     * @description The reason why you cannot create a tenant in the cluster.
     *
     * @example CPU_NOT_ENOUGH,  MEMORY_NOT_ENOUGH, TENANT_COUNT_EXCEEDS_LIMIT
     *
     * @var string
     */
    public $disableCreateTenantReason;

    /**
     * @description Specifies whether a tenant can be created.
     *
     * @example true
     *
     * @var bool
     */
    public $enableCreateTenant;
    protected $_name = [
        'disableCreateTenantReason' => 'DisableCreateTenantReason',
        'enableCreateTenant'        => 'EnableCreateTenant',
    ];

    public function validate()
    {
    }

    public function toMap()
    {
        $res = [];
        if (null !== $this->disableCreateTenantReason) {
            $res['DisableCreateTenantReason'] = $this->disableCreateTenantReason;
        }
        if (null !== $this->enableCreateTenant) {
            $res['EnableCreateTenant'] = $this->enableCreateTenant;
        }

        return $res;
    }

    /**
     * @param array $map
     *
     * @return tenantCreatable
     */
    public static function fromMap($map = [])
    {
        $model = new self();
        if (isset($map['DisableCreateTenantReason'])) {
            $model->disableCreateTenantReason = $map['DisableCreateTenantReason'];
        }
        if (isset($map['EnableCreateTenant'])) {
            $model->enableCreateTenant = $map['EnableCreateTenant'];
        }

        return $model;
    }
}
