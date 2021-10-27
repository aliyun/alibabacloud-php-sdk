<?php

// This file is auto-generated, don't edit it. Thanks.

namespace AlibabaCloud\SDK\Polardbx\V20200202\Models\DescribeDBInstanceTopologyResponseBody\data\logicInstanceTopology\items;

use AlibabaCloud\Tea\Model;

class connectionIp extends Model
{
    /**
     * @var string
     */
    public $connectionString;

    /**
     * @var int
     */
    public $DBInstanceNetType;

    /**
     * @var string
     */
    public $port;
    protected $_name = [
        'connectionString'  => 'ConnectionString',
        'DBInstanceNetType' => 'DBInstanceNetType',
        'port'              => 'Port',
    ];

    public function validate()
    {
    }

    public function toMap()
    {
        $res = [];
        if (null !== $this->connectionString) {
            $res['ConnectionString'] = $this->connectionString;
        }
        if (null !== $this->DBInstanceNetType) {
            $res['DBInstanceNetType'] = $this->DBInstanceNetType;
        }
        if (null !== $this->port) {
            $res['Port'] = $this->port;
        }

        return $res;
    }

    /**
     * @param array $map
     *
     * @return connectionIp
     */
    public static function fromMap($map = [])
    {
        $model = new self();
        if (isset($map['ConnectionString'])) {
            $model->connectionString = $map['ConnectionString'];
        }
        if (isset($map['DBInstanceNetType'])) {
            $model->DBInstanceNetType = $map['DBInstanceNetType'];
        }
        if (isset($map['Port'])) {
            $model->port = $map['Port'];
        }

        return $model;
    }
}
