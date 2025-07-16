<?php

// This file is auto-generated, don't edit it. Thanks.

namespace AlibabaCloud\SDK\Polardbx\V20200202\Models\ModifyDBInstanceConnectionStringResponseBody;

use AlibabaCloud\Tea\Model;

class data extends Model
{
    /**
     * @example test2.polarx.huhehaote.rds.aliyuncs.com
     *
     * @var string
     */
    public $connectionString;

    /**
     * @example pxc-unrf5ssig0ecg8
     *
     * @var string
     */
    public $DBInstanceName;

    /**
     * @example 1
     *
     * @var string
     */
    public $DBInstanceNetType;

    /**
     * @example 3300
     *
     * @var string
     */
    public $port;
    protected $_name = [
        'connectionString' => 'ConnectionString',
        'DBInstanceName' => 'DBInstanceName',
        'DBInstanceNetType' => 'DBInstanceNetType',
        'port' => 'Port',
    ];

    public function validate() {}

    public function toMap()
    {
        $res = [];
        if (null !== $this->connectionString) {
            $res['ConnectionString'] = $this->connectionString;
        }
        if (null !== $this->DBInstanceName) {
            $res['DBInstanceName'] = $this->DBInstanceName;
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
     * @return data
     */
    public static function fromMap($map = [])
    {
        $model = new self();
        if (isset($map['ConnectionString'])) {
            $model->connectionString = $map['ConnectionString'];
        }
        if (isset($map['DBInstanceName'])) {
            $model->DBInstanceName = $map['DBInstanceName'];
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
