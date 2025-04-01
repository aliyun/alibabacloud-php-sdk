<?php

// This file is auto-generated, don't edit it. Thanks.

namespace AlibabaCloud\SDK\OceanBasePro\V20190901\Models\DescribeInstanceTopologyResponseBody;

use AlibabaCloud\Dara\Model;
use AlibabaCloud\SDK\OceanBasePro\V20190901\Models\DescribeInstanceTopologyResponseBody\instanceTopology\replicas;
use AlibabaCloud\SDK\OceanBasePro\V20190901\Models\DescribeInstanceTopologyResponseBody\instanceTopology\tenants;
use AlibabaCloud\SDK\OceanBasePro\V20190901\Models\DescribeInstanceTopologyResponseBody\instanceTopology\zones;

class instanceTopology extends Model
{
    /**
     * @var replicas[]
     */
    public $replicas;

    /**
     * @var tenants[]
     */
    public $tenants;

    /**
     * @var zones[]
     */
    public $zones;
    protected $_name = [
        'replicas' => 'Replicas',
        'tenants' => 'Tenants',
        'zones' => 'Zones',
    ];

    public function validate()
    {
        if (\is_array($this->replicas)) {
            Model::validateArray($this->replicas);
        }
        if (\is_array($this->tenants)) {
            Model::validateArray($this->tenants);
        }
        if (\is_array($this->zones)) {
            Model::validateArray($this->zones);
        }
        parent::validate();
    }

    public function toArray($noStream = false)
    {
        $res = [];
        if (null !== $this->replicas) {
            if (\is_array($this->replicas)) {
                $res['Replicas'] = [];
                $n1 = 0;
                foreach ($this->replicas as $item1) {
                    $res['Replicas'][$n1++] = null !== $item1 ? $item1->toArray($noStream) : $item1;
                }
            }
        }

        if (null !== $this->tenants) {
            if (\is_array($this->tenants)) {
                $res['Tenants'] = [];
                $n1 = 0;
                foreach ($this->tenants as $item1) {
                    $res['Tenants'][$n1++] = null !== $item1 ? $item1->toArray($noStream) : $item1;
                }
            }
        }

        if (null !== $this->zones) {
            if (\is_array($this->zones)) {
                $res['Zones'] = [];
                $n1 = 0;
                foreach ($this->zones as $item1) {
                    $res['Zones'][$n1++] = null !== $item1 ? $item1->toArray($noStream) : $item1;
                }
            }
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
        if (isset($map['Replicas'])) {
            if (!empty($map['Replicas'])) {
                $model->replicas = [];
                $n1 = 0;
                foreach ($map['Replicas'] as $item1) {
                    $model->replicas[$n1++] = replicas::fromMap($item1);
                }
            }
        }

        if (isset($map['Tenants'])) {
            if (!empty($map['Tenants'])) {
                $model->tenants = [];
                $n1 = 0;
                foreach ($map['Tenants'] as $item1) {
                    $model->tenants[$n1++] = tenants::fromMap($item1);
                }
            }
        }

        if (isset($map['Zones'])) {
            if (!empty($map['Zones'])) {
                $model->zones = [];
                $n1 = 0;
                foreach ($map['Zones'] as $item1) {
                    $model->zones[$n1++] = zones::fromMap($item1);
                }
            }
        }

        return $model;
    }
}
