<?php

// This file is auto-generated, don't edit it. Thanks.

namespace AlibabaCloud\SDK\OceanBasePro\V20190901\Models\DescribeInstanceTopologyResponseBody\instanceTopology\tenants;

use AlibabaCloud\SDK\OceanBasePro\V20190901\Models\DescribeInstanceTopologyResponseBody\instanceTopology\tenants\tenantZones\units;
use AlibabaCloud\Tea\Model;

class tenantZones extends Model
{
    /**
     * @description The maximum disk usage, in percentage.
     *
     * @example true
     *
     * @var string
     */
    public $isPrimaryTenantZone;

    /**
     * @description The server with the highest disk usage.
     *
     * @example cn-hangzhou-h
     *
     * @var string
     */
    public $tenantZoneId;

    /**
     * @description The information of zones.
     *
     * @example ReadWrite
     *
     * @var string
     */
    public $tenantZoneRole;

    /**
     * @description The information about the storage resources.
     *
     * @var units[]
     */
    public $units;
    protected $_name = [
        'isPrimaryTenantZone' => 'IsPrimaryTenantZone',
        'tenantZoneId'        => 'TenantZoneId',
        'tenantZoneRole'      => 'TenantZoneRole',
        'units'               => 'Units',
    ];

    public function validate()
    {
    }

    public function toMap()
    {
        $res = [];
        if (null !== $this->isPrimaryTenantZone) {
            $res['IsPrimaryTenantZone'] = $this->isPrimaryTenantZone;
        }
        if (null !== $this->tenantZoneId) {
            $res['TenantZoneId'] = $this->tenantZoneId;
        }
        if (null !== $this->tenantZoneRole) {
            $res['TenantZoneRole'] = $this->tenantZoneRole;
        }
        if (null !== $this->units) {
            $res['Units'] = [];
            if (null !== $this->units && \is_array($this->units)) {
                $n = 0;
                foreach ($this->units as $item) {
                    $res['Units'][$n++] = null !== $item ? $item->toMap() : $item;
                }
            }
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
        if (isset($map['IsPrimaryTenantZone'])) {
            $model->isPrimaryTenantZone = $map['IsPrimaryTenantZone'];
        }
        if (isset($map['TenantZoneId'])) {
            $model->tenantZoneId = $map['TenantZoneId'];
        }
        if (isset($map['TenantZoneRole'])) {
            $model->tenantZoneRole = $map['TenantZoneRole'];
        }
        if (isset($map['Units'])) {
            if (!empty($map['Units'])) {
                $model->units = [];
                $n            = 0;
                foreach ($map['Units'] as $item) {
                    $model->units[$n++] = null !== $item ? units::fromMap($item) : $item;
                }
            }
        }

        return $model;
    }
}
