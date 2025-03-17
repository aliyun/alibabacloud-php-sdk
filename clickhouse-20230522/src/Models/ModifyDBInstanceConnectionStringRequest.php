<?php

// This file is auto-generated, don't edit it. Thanks.

namespace AlibabaCloud\SDK\Clickhouse\V20230522\Models;

use AlibabaCloud\Tea\Model;

class ModifyDBInstanceConnectionStringRequest extends Model
{
    /**
     * @description The endpoint of the cluster.
     *
     * @example cc-2ze34****-clickhouse..clickhouseserver.pre.rds.aliyuncs.com
     *
     * @var string
     */
    public $connectionString;

    /**
     * @description The prefix of the endpoint that is used to connect to the database.
     *
     * @example cc-****-clickhouse
     *
     * @var string
     */
    public $connectionStringPrefix;

    /**
     * @description The cluster ID.
     *
     * This parameter is required.
     *
     * @example cc-xxxxx
     *
     * @var string
     */
    public $DBInstanceId;

    /**
     * @var string
     */
    public $DBInstanceNetType;

    /**
     * @description *   The database ports that you want to disable. Separate multiple ports with commas (,).
     *
     *   This parameter is supported only for clusters whose minor engine version is 24.10.1.11098_1 or later.
     **Note** If you create a cluster whose minor engine version is earlier than 24.10.1.11098_1 and you update the minor engine version to 24.10.1.11098_1 or later, the cluster still does not support this parameter.
     * @example 9001,8123
     *
     * @var string
     */
    public $disablePorts;

    /**
     * @description The region ID.
     *
     * @example cn-hangzhou
     *
     * @var string
     */
    public $regionId;
    protected $_name = [
        'connectionString' => 'ConnectionString',
        'connectionStringPrefix' => 'ConnectionStringPrefix',
        'DBInstanceId' => 'DBInstanceId',
        'DBInstanceNetType' => 'DBInstanceNetType',
        'disablePorts' => 'DisablePorts',
        'regionId' => 'RegionId',
    ];

    public function validate() {}

    public function toMap()
    {
        $res = [];
        if (null !== $this->connectionString) {
            $res['ConnectionString'] = $this->connectionString;
        }
        if (null !== $this->connectionStringPrefix) {
            $res['ConnectionStringPrefix'] = $this->connectionStringPrefix;
        }
        if (null !== $this->DBInstanceId) {
            $res['DBInstanceId'] = $this->DBInstanceId;
        }
        if (null !== $this->DBInstanceNetType) {
            $res['DBInstanceNetType'] = $this->DBInstanceNetType;
        }
        if (null !== $this->disablePorts) {
            $res['DisablePorts'] = $this->disablePorts;
        }
        if (null !== $this->regionId) {
            $res['RegionId'] = $this->regionId;
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
        if (isset($map['ConnectionString'])) {
            $model->connectionString = $map['ConnectionString'];
        }
        if (isset($map['ConnectionStringPrefix'])) {
            $model->connectionStringPrefix = $map['ConnectionStringPrefix'];
        }
        if (isset($map['DBInstanceId'])) {
            $model->DBInstanceId = $map['DBInstanceId'];
        }
        if (isset($map['DBInstanceNetType'])) {
            $model->DBInstanceNetType = $map['DBInstanceNetType'];
        }
        if (isset($map['DisablePorts'])) {
            $model->disablePorts = $map['DisablePorts'];
        }
        if (isset($map['RegionId'])) {
            $model->regionId = $map['RegionId'];
        }

        return $model;
    }
}
