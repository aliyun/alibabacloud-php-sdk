<?php

// This file is auto-generated, don't edit it. Thanks.

namespace AlibabaCloud\SDK\Drds\V20190123\Models\DescribeRDSPerformanceResponseBody;

use AlibabaCloud\SDK\Drds\V20190123\Models\DescribeRDSPerformanceResponseBody\data\values;
use AlibabaCloud\Tea\Model;

class data extends Model
{
    /**
     * @description The name of the monitoring metric.
     *
     * @example cpuusage
     *
     * @var string
     */
    public $key;

    /**
     * @description The name of the node.
     *
     * >  This parameter is returned only when the storage type of the database is PolarDB for MySQL. If the storage type of the database is ApsaraDB RDS for MySQL, this parameter is not returned.
     * @example pi-*************
     *
     * @var string
     */
    public $nodeName;

    /**
     * @description The number of nodes.
     *
     * @example 1
     *
     * @var int
     */
    public $nodeNum;

    /**
     * @description The unit of the monitoring metric.
     *
     * @example %
     *
     * @var string
     */
    public $unit;

    /**
     * @description The details of the monitoring metric data.
     *
     * @var values[]
     */
    public $values;
    protected $_name = [
        'key'      => 'Key',
        'nodeName' => 'NodeName',
        'nodeNum'  => 'NodeNum',
        'unit'     => 'Unit',
        'values'   => 'Values',
    ];

    public function validate()
    {
    }

    public function toMap()
    {
        $res = [];
        if (null !== $this->key) {
            $res['Key'] = $this->key;
        }
        if (null !== $this->nodeName) {
            $res['NodeName'] = $this->nodeName;
        }
        if (null !== $this->nodeNum) {
            $res['NodeNum'] = $this->nodeNum;
        }
        if (null !== $this->unit) {
            $res['Unit'] = $this->unit;
        }
        if (null !== $this->values) {
            $res['Values'] = [];
            if (null !== $this->values && \is_array($this->values)) {
                $n = 0;
                foreach ($this->values as $item) {
                    $res['Values'][$n++] = null !== $item ? $item->toMap() : $item;
                }
            }
        }

        return $res;
    }

    /**
     * @param array $map
     *
     * @return data
     */
    public static function fromMap($map = [])
    {
        $model = new self();
        if (isset($map['Key'])) {
            $model->key = $map['Key'];
        }
        if (isset($map['NodeName'])) {
            $model->nodeName = $map['NodeName'];
        }
        if (isset($map['NodeNum'])) {
            $model->nodeNum = $map['NodeNum'];
        }
        if (isset($map['Unit'])) {
            $model->unit = $map['Unit'];
        }
        if (isset($map['Values'])) {
            if (!empty($map['Values'])) {
                $model->values = [];
                $n             = 0;
                foreach ($map['Values'] as $item) {
                    $model->values[$n++] = null !== $item ? values::fromMap($item) : $item;
                }
            }
        }

        return $model;
    }
}
