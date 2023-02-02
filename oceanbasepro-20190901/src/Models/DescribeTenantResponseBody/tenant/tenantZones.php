<?php

// This file is auto-generated, don't edit it. Thanks.

namespace AlibabaCloud\SDK\OceanBasePro\V20190901\Models\DescribeTenantResponseBody\tenant;

use AlibabaCloud\Tea\Model;

class tenantZones extends Model
{
    /**
     * @description The region where the zone of the tenant resides.
     *
     * @example cn-hangzhou
     *
     * @var string
     */
    public $region;

    /**
     * @description The ID of the zone.
     *
     * @example cn-hangzhou-i
     *
     * @var string
     */
    public $tenantZoneId;

    /**
     * @description The role of the zone of the tenant.
     *
     * @example ReadOnly
     *
     * @var string
     */
    public $tenantZoneRole;
    protected $_name = [
        'region'         => 'Region',
        'tenantZoneId'   => 'TenantZoneId',
        'tenantZoneRole' => 'TenantZoneRole',
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
        if (isset($map['TenantZoneRole'])) {
            $model->tenantZoneRole = $map['TenantZoneRole'];
        }

        return $model;
    }
}
