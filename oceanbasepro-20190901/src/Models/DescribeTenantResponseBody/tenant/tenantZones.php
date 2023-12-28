<?php

// This file is auto-generated, don't edit it. Thanks.

namespace AlibabaCloud\SDK\OceanBasePro\V20190901\Models\DescribeTenantResponseBody\tenant;

use AlibabaCloud\SDK\OceanBasePro\V20190901\Models\DescribeTenantResponseBody\tenant\tenantZones\tenantZoneReplicas;
use AlibabaCloud\Tea\Model;

class tenantZones extends Model
{
    /**
     * @description 是否允许开启读写分离地址
     *
     * @example cn-hangzhou
     *
     * @var string
     */
    public $region;

    /**
     * @description The intranet port for accessing the tenant.
     *
     * @example cn-hangzhou-i
     *
     * @var string
     */
    public $tenantZoneId;

    /**
     * @var tenantZoneReplicas[]
     */
    public $tenantZoneReplicas;

    /**
     * @description The character set.
     *
     * @example ReadOnly
     *
     * @var string
     */
    public $tenantZoneRole;
    protected $_name = [
        'region'             => 'Region',
        'tenantZoneId'       => 'TenantZoneId',
        'tenantZoneReplicas' => 'TenantZoneReplicas',
        'tenantZoneRole'     => 'TenantZoneRole',
    ];

    public function validate()
    {
    }

    public function toMap()
    {
        $res = [];
        if (null !== $this->region) {
            $res['Region'] = $this->region;
        }
        if (null !== $this->tenantZoneId) {
            $res['TenantZoneId'] = $this->tenantZoneId;
        }
        if (null !== $this->tenantZoneReplicas) {
            $res['TenantZoneReplicas'] = [];
            if (null !== $this->tenantZoneReplicas && \is_array($this->tenantZoneReplicas)) {
                $n = 0;
                foreach ($this->tenantZoneReplicas as $item) {
                    $res['TenantZoneReplicas'][$n++] = null !== $item ? $item->toMap() : $item;
                }
            }
        }
        if (null !== $this->tenantZoneRole) {
            $res['TenantZoneRole'] = $this->tenantZoneRole;
        }

        return $res;
    }

    /**
     * @param array $map
     *
     * @return tenantZones
     */
    public static function fromMap($map = [])
    {
        $model = new self();
        if (isset($map['Region'])) {
            $model->region = $map['Region'];
        }
        if (isset($map['TenantZoneId'])) {
            $model->tenantZoneId = $map['TenantZoneId'];
        }
        if (isset($map['TenantZoneReplicas'])) {
            if (!empty($map['TenantZoneReplicas'])) {
                $model->tenantZoneReplicas = [];
                $n                         = 0;
                foreach ($map['TenantZoneReplicas'] as $item) {
                    $model->tenantZoneReplicas[$n++] = null !== $item ? tenantZoneReplicas::fromMap($item) : $item;
                }
            }
        }
        if (isset($map['TenantZoneRole'])) {
            $model->tenantZoneRole = $map['TenantZoneRole'];
        }

        return $model;
    }
}
