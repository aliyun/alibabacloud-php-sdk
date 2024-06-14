<?php

// This file is auto-generated, don't edit it. Thanks.

namespace AlibabaCloud\SDK\OceanBasePro\V20190901\Models\DescribeInstanceTopologyResponseBody;

use AlibabaCloud\SDK\OceanBasePro\V20190901\Models\DescribeInstanceTopologyResponseBody\instanceTopology\replicas;
use AlibabaCloud\SDK\OceanBasePro\V20190901\Models\DescribeInstanceTopologyResponseBody\instanceTopology\tenants;
use AlibabaCloud\SDK\OceanBasePro\V20190901\Models\DescribeInstanceTopologyResponseBody\instanceTopology\zones;
use AlibabaCloud\Tea\Model;

class instanceTopology extends Model
{
    /**
     * @var replicas[]
     */
    public $replicas;

    /**
     * @description The total number of CPU cores for the node.
     *
     * @var tenants[]
     */
    public $tenants;

    /**
     * @description The information about resource units.
     *
     * @var zones[]
     */
    public $zones;
    protected $_name = [
        'replicas' => 'Replicas',
        'tenants'  => 'Tenants',
        'zones'    => 'Zones',
    ];

    public function validate()
    {
    }

    public function toMap()
    {
        $res = [];
        if (null !== $this->replicas) {
            $res['Replicas'] = [];
            if (null !== $this->replicas && \is_array($this->replicas)) {
                $n = 0;
                foreach ($this->replicas as $item) {
                    $res['Replicas'][$n++] = null !== $item ? $item->toMap() : $item;
                }
            }
        }
        if (null !== $this->tenants) {
            $res['Tenants'] = [];
            if (null !== $this->tenants && \is_array($this->tenants)) {
                $n = 0;
                foreach ($this->tenants as $item) {
                    $res['Tenants'][$n++] = null !== $item ? $item->toMap() : $item;
                }
            }
        }
        if (null !== $this->zones) {
            $res['Zones'] = [];
            if (null !== $this->zones && \is_array($this->zones)) {
                $n = 0;
                foreach ($this->zones as $item) {
                    $res['Zones'][$n++] = null !== $item ? $item->toMap() : $item;
                }
            }
        }

        return $res;
    }

    /**
     * @param array $map
     *
     * @return instanceTopology
     */
    public static function fromMap($map = [])
    {
        $model = new self();
        if (isset($map['Replicas'])) {
            if (!empty($map['Replicas'])) {
                $model->replicas = [];
                $n               = 0;
                foreach ($map['Replicas'] as $item) {
                    $model->replicas[$n++] = null !== $item ? replicas::fromMap($item) : $item;
                }
            }
        }
        if (isset($map['Tenants'])) {
            if (!empty($map['Tenants'])) {
                $model->tenants = [];
                $n              = 0;
                foreach ($map['Tenants'] as $item) {
                    $model->tenants[$n++] = null !== $item ? tenants::fromMap($item) : $item;
                }
            }
        }
        if (isset($map['Zones'])) {
            if (!empty($map['Zones'])) {
                $model->zones = [];
                $n            = 0;
                foreach ($map['Zones'] as $item) {
                    $model->zones[$n++] = null !== $item ? zones::fromMap($item) : $item;
                }
            }
        }

        return $model;
    }
}
