<?php

// This file is auto-generated, don't edit it. Thanks.

namespace AlibabaCloud\SDK\Rds\V20140815\Models\ModifyDBProxyInstanceRequest;

use AlibabaCloud\Tea\Model;

class DBProxyNodes extends Model
{
    /**
     * @example 1
     *
     * @var string
     */
    public $cpuCores;

    /**
     * @example 2
     *
     * @var string
     */
    public $nodeCounts;

    /**
     * @example cn-hagnzhou-c
     *
     * @var string
     */
    public $zoneId;
    protected $_name = [
        'cpuCores'   => 'cpuCores',
        'nodeCounts' => 'nodeCounts',
        'zoneId'     => 'zoneId',
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
        if (null !== $this->nodeCounts) {
            $res['nodeCounts'] = $this->nodeCounts;
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
        if (isset($map['nodeCounts'])) {
            $model->nodeCounts = $map['nodeCounts'];
        }
        if (isset($map['zoneId'])) {
            $model->zoneId = $map['zoneId'];
        }

        return $model;
    }
}
