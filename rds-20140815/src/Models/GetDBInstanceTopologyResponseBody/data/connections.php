<?php

// This file is auto-generated, don't edit it. Thanks.

namespace AlibabaCloud\SDK\Rds\V20140815\Models\GetDBInstanceTopologyResponseBody\data;

use AlibabaCloud\Tea\Model;

class connections extends Model
{
    /**
     * @description The endpoint of the instance.
     *
     * @example rm-m5ezban**********.mysql.rds.aliyuncs.com
     *
     * @var string
     */
    public $connectionString;

    /**
     * @description The ID of the instance.
     *
     * @example rm-m5ezban**********
     *
     * @var string
     */
    public $DBInstanceName;

    /**
     * @description The network type of the endpoint. Valid values:
     *
     *   **vpc**
     *   **public**
     *
     * @example vpc
     *
     * @var string
     */
    public $netType;

    /**
     * @description The zone ID of the instance.
     *
     * @example cn-qingdao-c
     *
     * @var string
     */
    public $zoneId;
    protected $_name = [
        'connectionString' => 'ConnectionString',
        'DBInstanceName'   => 'DBInstanceName',
        'netType'          => 'NetType',
        'zoneId'           => 'ZoneId',
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
        if (null !== $this->DBInstanceName) {
            $res['DBInstanceName'] = $this->DBInstanceName;
        }
        if (null !== $this->netType) {
            $res['NetType'] = $this->netType;
        }
        if (null !== $this->zoneId) {
            $res['ZoneId'] = $this->zoneId;
        }

        return $res;
    }

    /**
     * @param array $map
     *
     * @return connections
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
        if (isset($map['NetType'])) {
            $model->netType = $map['NetType'];
        }
        if (isset($map['ZoneId'])) {
            $model->zoneId = $map['ZoneId'];
        }

        return $model;
    }
}
