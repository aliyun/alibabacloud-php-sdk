<?php

// This file is auto-generated, don't edit it. Thanks.

namespace AlibabaCloud\SDK\OceanBasePro\V20190901\Models\DescribeTenantResponseBody\tenant;

use AlibabaCloud\Tea\Model;

class tenantZones extends Model
{
    /**
     * @var string
     */
    public $region;

    /**
     * @var string
     */
    public $tenantZoneId;

    /**
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
