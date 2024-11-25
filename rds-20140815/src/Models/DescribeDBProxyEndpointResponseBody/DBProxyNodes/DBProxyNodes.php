<?php

// This file is auto-generated, don't edit it. Thanks.

namespace AlibabaCloud\SDK\Rds\V20140815\Models\DescribeDBProxyEndpointResponseBody\DBProxyNodes;

use AlibabaCloud\Tea\Model;

class DBProxyNodes extends Model
{
    /**
     * @description The number of CPU cores of the node.
     *
     * @example 2
     *
     * @var string
     */
    public $cpuCores;

    /**
     * @description The ID of the node in the zone.
     *
     * @example pn-xxxxxxx01
     *
     * @var string
     */
    public $nodeId;

    /**
     * @description The zone ID of the node.
     *
     * @example cn-hangzhou-c
     *
     * @var string
     */
    public $zoneId;
    protected $_name = [
        'cpuCores' => 'cpuCores',
        'nodeId'   => 'nodeId',
        'zoneId'   => 'zoneId',
    ];

    public function validate()
    {
    }

    public function toMap()
    {
        $res = [];
        if (null !== $this->cpuCores) {
            $res['cpuCores'] = $this->cpuCores;
        }
        if (null !== $this->nodeId) {
            $res['nodeId'] = $this->nodeId;
        }
        if (null !== $this->zoneId) {
            $res['zoneId'] = $this->zoneId;
        }

        return $res;
    }

    /**
     * @param array $map
     *
     * @return DBProxyNodes
     */
    public static function fromMap($map = [])
    {
        $model = new self();
        if (isset($map['cpuCores'])) {
            $model->cpuCores = $map['cpuCores'];
        }
        if (isset($map['nodeId'])) {
            $model->nodeId = $map['nodeId'];
        }
        if (isset($map['zoneId'])) {
            $model->zoneId = $map['zoneId'];
        }

        return $model;
    }
}
