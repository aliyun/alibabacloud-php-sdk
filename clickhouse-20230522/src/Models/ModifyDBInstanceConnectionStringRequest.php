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
     * @example cc-xxxxx
     *
     * @var string
     */
    public $DBInstanceId;

    /**
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
        'connectionString'       => 'ConnectionString',
        'connectionStringPrefix' => 'ConnectionStringPrefix',
        'DBInstanceId'           => 'DBInstanceId',
        'disablePorts'           => 'DisablePorts',
        'regionId'               => 'RegionId',
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
        if (null !== $this->connectionStringPrefix) {
            $res['ConnectionStringPrefix'] = $this->connectionStringPrefix;
        }
        if (null !== $this->DBInstanceId) {
            $res['DBInstanceId'] = $this->DBInstanceId;
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
        if (isset($map['DisablePorts'])) {
            $model->disablePorts = $map['DisablePorts'];
        }
        if (isset($map['RegionId'])) {
            $model->regionId = $map['RegionId'];
        }

        return $model;
    }
}
