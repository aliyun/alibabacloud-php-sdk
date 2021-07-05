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
     * @var string
     */
    public $DBInstanceId;

    /**
     * @var readonlyInstanceDelay
     */
    public $readonlyInstanceDelay;

    /**
     * @var readDelayTimes
     */
    public $readDelayTimes;

    /**
     * @var readDBInstanceNames
     */
    public $readDBInstanceNames;
    protected $_name = [
        'DBInstanceId'          => 'DBInstanceId',
        'readonlyInstanceDelay' => 'ReadonlyInstanceDelay',
        'readDelayTimes'        => 'ReadDelayTimes',
        'readDBInstanceNames'   => 'ReadDBInstanceNames',
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
        if (null !== $this->readonlyInstanceDelay) {
            $res['ReadonlyInstanceDelay'] = null !== $this->readonlyInstanceDelay ? $this->readonlyInstanceDelay->toMap() : null;
        }
        if (null !== $this->readDelayTimes) {
            $res['ReadDelayTimes'] = null !== $this->readDelayTimes ? $this->readDelayTimes->toMap() : null;
        }
        if (null !== $this->readDBInstanceNames) {
            $res['ReadDBInstanceNames'] = null !== $this->readDBInstanceNames ? $this->readDBInstanceNames->toMap() : null;
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
        if (isset($map['ReadonlyInstanceDelay'])) {
            $model->readonlyInstanceDelay = readonlyInstanceDelay::fromMap($map['ReadonlyInstanceDelay']);
        }
        if (isset($map['ReadDelayTimes'])) {
            $model->readDelayTimes = readDelayTimes::fromMap($map['ReadDelayTimes']);
        }
        if (isset($map['ReadDBInstanceNames'])) {
            $model->readDBInstanceNames = readDBInstanceNames::fromMap($map['ReadDBInstanceNames']);
        }

        return $model;
    }
}
