<?php

// This file is auto-generated, don't edit it. Thanks.

namespace AlibabaCloud\SDK\Gpdb\V20160503\Models;

use AlibabaCloud\Tea\Model;

class ModifyDBInstanceConnectionStringRequest extends Model
{
    /**
     * @description The new endpoint of the instance.
     *
     * @example gp-test
     *
     * @var string
     */
    public $connectionStringPrefix;

    /**
     * @description The original endpoint of the instance.
     *
     * @example gp-t4n2qg19bnn98****-master.gpdb.rds.aliyuncs.com
     *
     * @var string
     */
    public $currentConnectionString;

    /**
     * @description The ID of the instance.
     *
     * @example gp-t4n2qg19bnn98****
     *
     * @var string
     */
    public $DBInstanceId;

    /**
     * @description The new port number of the instance.
     *
     * @example 5432
     *
     * @var string
     */
    public $port;
    protected $_name = [
        'connectionStringPrefix'  => 'ConnectionStringPrefix',
        'currentConnectionString' => 'CurrentConnectionString',
        'DBInstanceId'            => 'DBInstanceId',
        'port'                    => 'Port',
    ];

    public function validate()
    {
    }

    public function toMap()
    {
        $res = [];
        if (null !== $this->connectionStringPrefix) {
            $res['ConnectionStringPrefix'] = $this->connectionStringPrefix;
        }
        if (null !== $this->currentConnectionString) {
            $res['CurrentConnectionString'] = $this->currentConnectionString;
        }
        if (null !== $this->DBInstanceId) {
            $res['DBInstanceId'] = $this->DBInstanceId;
        }
        if (null !== $this->port) {
            $res['Port'] = $this->port;
        }

        return $res;
    }

    /**
     * @param array $map
     *
     * @return ModifyDBInstanceConnectionStringRequest
     */
    public static function fromMap($map = [])
    {
        $model = new self();
        if (isset($map['ConnectionStringPrefix'])) {
            $model->connectionStringPrefix = $map['ConnectionStringPrefix'];
        }
        if (isset($map['CurrentConnectionString'])) {
            $model->currentConnectionString = $map['CurrentConnectionString'];
        }
        if (isset($map['DBInstanceId'])) {
            $model->DBInstanceId = $map['DBInstanceId'];
        }
        if (isset($map['Port'])) {
            $model->port = $map['Port'];
        }

        return $model;
    }
}
