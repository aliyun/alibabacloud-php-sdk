<?php

// This file is auto-generated, don't edit it. Thanks.

namespace AlibabaCloud\SDK\OceanBasePro\V20190901\Models\DescribeInstanceTopologyResponseBody\instanceTopology;

use AlibabaCloud\Dara\Model;
use AlibabaCloud\SDK\OceanBasePro\V20190901\Models\DescribeInstanceTopologyResponseBody\instanceTopology\zones\nodes;
use AlibabaCloud\SDK\OceanBasePro\V20190901\Models\DescribeInstanceTopologyResponseBody\instanceTopology\zones\zoneResource;

class zones extends Model
{
    /**
     * @var nodes[]
     */
    public $nodes;

    /**
     * @var string
     */
    public $region;

    /**
     * @var string
     */
    public $zoneDisk;

    /**
     * @var string
     */
    public $zoneId;

    /**
     * @var zoneResource
     */
    public $zoneResource;
    protected $_name = [
        'nodes' => 'Nodes',
        'region' => 'Region',
        'zoneDisk' => 'ZoneDisk',
        'zoneId' => 'ZoneId',
        'zoneResource' => 'ZoneResource',
    ];

    public function validate()
    {
        if (\is_array($this->nodes)) {
            Model::validateArray($this->nodes);
        }
        if (null !== $this->zoneResource) {
            $this->zoneResource->validate();
        }
        parent::validate();
    }

    public function toArray($noStream = false)
    {
        $res = [];
        if (null !== $this->nodes) {
            if (\is_array($this->nodes)) {
                $res['Nodes'] = [];
                $n1 = 0;
                foreach ($this->nodes as $item1) {
                    $res['Nodes'][$n1++] = null !== $item1 ? $item1->toArray($noStream) : $item1;
                }
            }
        }

        if (null !== $this->region) {
            $res['Region'] = $this->region;
        }

        if (null !== $this->zoneDisk) {
            $res['ZoneDisk'] = $this->zoneDisk;
        }

        if (null !== $this->zoneId) {
            $res['ZoneId'] = $this->zoneId;
        }

        if (null !== $this->zoneResource) {
            $res['ZoneResource'] = null !== $this->zoneResource ? $this->zoneResource->toArray($noStream) : $this->zoneResource;
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
        if (isset($map['Nodes'])) {
            if (!empty($map['Nodes'])) {
                $model->nodes = [];
                $n1 = 0;
                foreach ($map['Nodes'] as $item1) {
                    $model->nodes[$n1++] = nodes::fromMap($item1);
                }
            }
        }

        if (isset($map['Region'])) {
            $model->region = $map['Region'];
        }

        if (isset($map['ZoneDisk'])) {
            $model->zoneDisk = $map['ZoneDisk'];
        }

        if (isset($map['ZoneId'])) {
            $model->zoneId = $map['ZoneId'];
        }

        if (isset($map['ZoneResource'])) {
            $model->zoneResource = zoneResource::fromMap($map['ZoneResource']);
        }

        return $model;
    }
}
