<?php

// This file is auto-generated, don't edit it. Thanks.

namespace AlibabaCloud\SDK\Rds\V20140815\Models\GetDBInstanceTopologyResponseBody;

use AlibabaCloud\SDK\Rds\V20140815\Models\GetDBInstanceTopologyResponseBody\data\connections;
use AlibabaCloud\SDK\Rds\V20140815\Models\GetDBInstanceTopologyResponseBody\data\nodes;
use AlibabaCloud\Tea\Model;

class data extends Model
{
    /**
     * @var nodes[]
     */
    public $nodes;

    /**
     * @var string
     */
    public $DBInstanceName;

    /**
     * @var connections[]
     */
    public $connections;
    protected $_name = [
        'nodes'          => 'Nodes',
        'DBInstanceName' => 'DBInstanceName',
        'connections'    => 'Connections',
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
        if (null !== $this->DBInstanceName) {
            $res['DBInstanceName'] = $this->DBInstanceName;
        }
        if (null !== $this->connections) {
            $res['Connections'] = [];
            if (null !== $this->connections && \is_array($this->connections)) {
                $n = 0;
                foreach ($this->connections as $item) {
                    $res['Connections'][$n++] = null !== $item ? $item->toMap() : $item;
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
        if (isset($map['Nodes'])) {
            if (!empty($map['Nodes'])) {
                $model->nodes = [];
                $n            = 0;
                foreach ($map['Nodes'] as $item) {
                    $model->nodes[$n++] = null !== $item ? nodes::fromMap($item) : $item;
                }
            }
        }
        if (isset($map['DBInstanceName'])) {
            $model->DBInstanceName = $map['DBInstanceName'];
        }
        if (isset($map['Connections'])) {
            if (!empty($map['Connections'])) {
                $model->connections = [];
                $n                  = 0;
                foreach ($map['Connections'] as $item) {
                    $model->connections[$n++] = null !== $item ? connections::fromMap($item) : $item;
                }
            }
        }

        return $model;
    }
}
