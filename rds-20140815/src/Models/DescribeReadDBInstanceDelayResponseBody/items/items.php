<?php

// This file is auto-generated, don't edit it. Thanks.

namespace AlibabaCloud\SDK\Rds\V20140815\Models\DescribeReadDBInstanceDelayResponseBody\items;

use AlibabaCloud\SDK\Rds\V20140815\Models\DescribeReadDBInstanceDelayResponseBody\items\items\readDBInstanceNames;
use AlibabaCloud\SDK\Rds\V20140815\Models\DescribeReadDBInstanceDelayResponseBody\items\items\readDelayTimes;
use AlibabaCloud\SDK\Rds\V20140815\Models\DescribeReadDBInstanceDelayResponseBody\items\items\readonlyInstanceDelay;
use AlibabaCloud\Tea\Model;

class items extends Model
{
    /**
     * @description The ID of the primary instance.
     *
     * @example rm-bp*****
     *
     * @var string
     */
    public $DBInstanceId;

    /**
     * @description An array that consists of information about the read-only instance.
     *
     * >  This parameter is returned only when the primary instance runs the MySQL database engine.
     * @var readDBInstanceNames
     */
    public $readDBInstanceNames;

    /**
     * @description An array that consists of latencies.
     *
     * >  This parameter is returned only when the primary instance runs the MySQL database engine.
     * @var readDelayTimes
     */
    public $readDelayTimes;

    /**
     * @description An array that consists of information about the write-ahead log (WAL) latency.
     *
     * >  This parameter is returned only when the primary instance runs the PostgreSQL database engine.
     * @var readonlyInstanceDelay
     */
    public $readonlyInstanceDelay;
    protected $_name = [
        'DBInstanceId'          => 'DBInstanceId',
        'readDBInstanceNames'   => 'ReadDBInstanceNames',
        'readDelayTimes'        => 'ReadDelayTimes',
        'readonlyInstanceDelay' => 'ReadonlyInstanceDelay',
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
        if (null !== $this->readDBInstanceNames) {
            $res['ReadDBInstanceNames'] = null !== $this->readDBInstanceNames ? $this->readDBInstanceNames->toMap() : null;
        }
        if (null !== $this->readDelayTimes) {
            $res['ReadDelayTimes'] = null !== $this->readDelayTimes ? $this->readDelayTimes->toMap() : null;
        }
        if (null !== $this->readonlyInstanceDelay) {
            $res['ReadonlyInstanceDelay'] = null !== $this->readonlyInstanceDelay ? $this->readonlyInstanceDelay->toMap() : null;
        }

        return $res;
    }

    /**
     * @param array $map
     *
     * @return items
     */
    public static function fromMap($map = [])
    {
        $model = new self();
        if (isset($map['DBInstanceId'])) {
            $model->DBInstanceId = $map['DBInstanceId'];
        }
        if (isset($map['ReadDBInstanceNames'])) {
            $model->readDBInstanceNames = readDBInstanceNames::fromMap($map['ReadDBInstanceNames']);
        }
        if (isset($map['ReadDelayTimes'])) {
            $model->readDelayTimes = readDelayTimes::fromMap($map['ReadDelayTimes']);
        }
        if (isset($map['ReadonlyInstanceDelay'])) {
            $model->readonlyInstanceDelay = readonlyInstanceDelay::fromMap($map['ReadonlyInstanceDelay']);
        }

        return $model;
    }
}
