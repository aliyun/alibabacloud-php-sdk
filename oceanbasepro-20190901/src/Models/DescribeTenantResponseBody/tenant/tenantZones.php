<?php

// This file is auto-generated, don't edit it. Thanks.

namespace AlibabaCloud\SDK\OceanBasePro\V20190901\Models\DescribeTenantResponseBody\tenant;

use AlibabaCloud\Dara\Model;
use AlibabaCloud\SDK\OceanBasePro\V20190901\Models\DescribeTenantResponseBody\tenant\tenantZones\tenantZoneReplicas;

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
     * @var tenantZoneReplicas[]
     */
    public $tenantZoneReplicas;

    /**
     * @var string
     */
    public $tenantZoneRole;
    protected $_name = [
        'region' => 'Region',
        'tenantZoneId' => 'TenantZoneId',
        'tenantZoneReplicas' => 'TenantZoneReplicas',
        'tenantZoneRole' => 'TenantZoneRole',
    ];

    public function validate()
    {
        if (\is_array($this->tenantZoneReplicas)) {
            Model::validateArray($this->tenantZoneReplicas);
        }
        parent::validate();
    }

    public function toArray($noStream = false)
    {
        $res = [];
        if (null !== $this->region) {
            $res['Region'] = $this->region;
        }

        if (null !== $this->tenantZoneId) {
            $res['TenantZoneId'] = $this->tenantZoneId;
        }

        if (null !== $this->tenantZoneReplicas) {
            if (\is_array($this->tenantZoneReplicas)) {
                $res['TenantZoneReplicas'] = [];
                $n1 = 0;
                foreach ($this->tenantZoneReplicas as $item1) {
                    $res['TenantZoneReplicas'][$n1++] = null !== $item1 ? $item1->toArray($noStream) : $item1;
                }
            }
        }

        if (null !== $this->tenantZoneRole) {
            $res['TenantZoneRole'] = $this->tenantZoneRole;
        }

        return $res;
    }

    public function toMap($noStream = false)
    {
        return $this->toArray($noStream);
    }

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
                $n1 = 0;
                foreach ($map['TenantZoneReplicas'] as $item1) {
                    $model->tenantZoneReplicas[$n1++] = tenantZoneReplicas::fromMap($item1);
                }
            }
        }

        if (isset($map['TenantZoneRole'])) {
            $model->tenantZoneRole = $map['TenantZoneRole'];
        }

        return $model;
    }
}
