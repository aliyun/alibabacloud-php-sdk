<?php

// This file is auto-generated, don't edit it. Thanks.

namespace AlibabaCloud\SDK\Rds\V20140815\Models\CalculateDBInstanceWeightResponseBody\items;

use AlibabaCloud\Tea\Model;

class DBInstanceWeight extends Model
{
    /**
     * @description The ID of instance.
     *
     * @example rm-uf6wjk5xxxxxxx
     *
     * @var string
     */
    public $DBInstanceId;

    /**
     * @description The role of the instance. Valid values:
     *
     *   **Master**: primary instance
     *   **Readonly**: read-only instance
     *
     * @example Master
     *
     * @var string
     */
    public $DBInstanceType;

    /**
     * @description The threshold for the latency of data replication from the primary instance to the read-only instances. The read-only instances start to synchronize data from the primary instance after the time specified by the **ReadonlyInstanceSQLDelayedTime** parameter elapses. Unit: seconds.
     *
     * @example 30
     *
     * @var string
     */
    public $readonlyInstanceSQLDelayedTime;

    /**
     * @description The read weight that ApsaraDB RDS calculates in real time for the instance.
     *
     * @example 100
     *
     * @var string
     */
    public $weight;
    protected $_name = [
        'DBInstanceId'                   => 'DBInstanceId',
        'DBInstanceType'                 => 'DBInstanceType',
        'readonlyInstanceSQLDelayedTime' => 'ReadonlyInstanceSQLDelayedTime',
        'weight'                         => 'Weight',
    ];

    public function validate()
    {
    }

    public function toMap()
    {
        $res = [];
        if (null !== $this->DBInstanceId) {
            $res['DBInstanceId'] = $this->DBInstanceId;
        }
        if (null !== $this->DBInstanceType) {
            $res['DBInstanceType'] = $this->DBInstanceType;
        }
        if (null !== $this->readonlyInstanceSQLDelayedTime) {
            $res['ReadonlyInstanceSQLDelayedTime'] = $this->readonlyInstanceSQLDelayedTime;
        }
        if (null !== $this->weight) {
            $res['Weight'] = $this->weight;
        }

        return $res;
    }

    /**
     * @param array $map
     *
     * @return DBInstanceWeight
     */
    public static function fromMap($map = [])
    {
        $model = new self();
        if (isset($map['DBInstanceId'])) {
            $model->DBInstanceId = $map['DBInstanceId'];
        }
        if (isset($map['DBInstanceType'])) {
            $model->DBInstanceType = $map['DBInstanceType'];
        }
        if (isset($map['ReadonlyInstanceSQLDelayedTime'])) {
            $model->readonlyInstanceSQLDelayedTime = $map['ReadonlyInstanceSQLDelayedTime'];
        }
        if (isset($map['Weight'])) {
            $model->weight = $map['Weight'];
        }

        return $model;
    }
}
