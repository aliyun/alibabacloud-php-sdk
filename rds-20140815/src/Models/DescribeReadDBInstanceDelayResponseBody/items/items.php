<?php

// This file is auto-generated, don't edit it. Thanks.

namespace AlibabaCloud\SDK\Rds\V20140815\Models\DescribeReadDBInstanceDelayResponseBody\items;

use AlibabaCloud\Dara\Model;
use AlibabaCloud\SDK\Rds\V20140815\Models\DescribeReadDBInstanceDelayResponseBody\items\items\readDBInstanceNames;
use AlibabaCloud\SDK\Rds\V20140815\Models\DescribeReadDBInstanceDelayResponseBody\items\items\readDelayTimes;
use AlibabaCloud\SDK\Rds\V20140815\Models\DescribeReadDBInstanceDelayResponseBody\items\items\readonlyInstanceDelay;

class items extends Model
{
    /**
     * @var string
     */
    public $DBInstanceId;
    /**
     * @var readDBInstanceNames
     */
    public $readDBInstanceNames;
    /**
     * @var readDelayTimes
     */
    public $readDelayTimes;
    /**
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
        if (null !== $this->readDBInstanceNames) {
            $this->readDBInstanceNames->validate();
        }
        if (null !== $this->readDelayTimes) {
            $this->readDelayTimes->validate();
        }
        if (null !== $this->readonlyInstanceDelay) {
            $this->readonlyInstanceDelay->validate();
        }
        parent::validate();
    }

    public function toArray($noStream = false)
    {
        $res = [];
        if (null !== $this->DBInstanceId) {
            $res['DBInstanceId'] = $this->DBInstanceId;
        }

        if (null !== $this->readDBInstanceNames) {
            $res['ReadDBInstanceNames'] = null !== $this->readDBInstanceNames ? $this->readDBInstanceNames->toArray($noStream) : $this->readDBInstanceNames;
        }

        if (null !== $this->readDelayTimes) {
            $res['ReadDelayTimes'] = null !== $this->readDelayTimes ? $this->readDelayTimes->toArray($noStream) : $this->readDelayTimes;
        }

        if (null !== $this->readonlyInstanceDelay) {
            $res['ReadonlyInstanceDelay'] = null !== $this->readonlyInstanceDelay ? $this->readonlyInstanceDelay->toArray($noStream) : $this->readonlyInstanceDelay;
        }

        return $res;
    }

    public function toMap($noStream = false)
    {
        return $this->toArray($noStream);
    }

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
