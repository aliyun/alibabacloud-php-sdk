<?php

// This file is auto-generated, don't edit it. Thanks.

namespace AlibabaCloud\SDK\OceanBasePro\V20190901\Models\DescribeInstanceTopologyResponseBody\instanceTopology;

use AlibabaCloud\SDK\OceanBasePro\V20190901\Models\DescribeInstanceTopologyResponseBody\instanceTopology\zones\nodes;
use AlibabaCloud\SDK\OceanBasePro\V20190901\Models\DescribeInstanceTopologyResponseBody\instanceTopology\zones\zoneResource;
use AlibabaCloud\Tea\Model;

class zones extends Model
{
    /**
     * @description The ID of the region.
     *
     * @var nodes[]
     */
    public $nodes;

    /**
     * @description The zone information of the cluster.
     *
     * @example cn-hangzhou
     *
     * @var string
     */
    public $region;

    /**
     * @description The information about the memory resources of the node.
     *
     * @example 200 GB
     *
     * @var string
     */
    public $zoneDisk;

    /**
     * @description The information of the tenant.
     *
     * @example cn-hangzhou-i
     *
     * @var string
     */
    public $zoneId;

    /**
     * @description Example 1
     *
     * @var zoneResource
     */
    public $zoneResource;
    protected $_name = [
        'nodes'        => 'Nodes',
        'region'       => 'Region',
        'zoneDisk'     => 'ZoneDisk',
        'zoneId'       => 'ZoneId',
        'zoneResource' => 'ZoneResource',
    ];

    public function validate()
    {
    }

    public function toMap()
    {
        $res = [];
        if (null !== $this->nodes) {
            $res['Nodes'] = [];
            if (null !== $this->nodes && \is_array($this->nodes)) {
                $n = 0;
                foreach ($this->nodes as $item) {
                    $res['Nodes'][$n++] = null !== $item ? $item->toMap() : $item;
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
            $res['ZoneResource'] = null !== $this->zoneResource ? $this->zoneResource->toMap() : null;
        }

        return $res;
    }

    /**
     * @param array $map
     *
     * @return zones
     */
    public static function fromMap($map = [])
    {
        $model = new self();
        if (isset($map['Nodes'])) {
            if (!empty($map['Nodes'])) {
                $model->nodes = [];
                $n            = 0;
                foreach ($map['Nodes'] as $item) {
                    $model->nodes[$n++] = null !== $item ? nodes::fromMap($item) : $item;
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
