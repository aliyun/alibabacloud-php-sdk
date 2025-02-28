<?php

// This file is auto-generated, don't edit it. Thanks.

namespace AlibabaCloud\SDK\Rds\V20140815\Models;

use AlibabaCloud\Dara\Model;
use AlibabaCloud\SDK\Rds\V20140815\Models\DescribeReadDBInstanceDelayResponseBody\items;

class DescribeReadDBInstanceDelayResponseBody extends Model
{
    /**
     * @var string
     */
    public $DBInstanceId;
    /**
     * @var int
     */
    public $delayTime;
    /**
     * @var items
     */
    public $items;
    /**
     * @var string
     */
    public $readDBInstanceId;
    /**
     * @var string
     */
    public $requestId;
    protected $_name = [
        'DBInstanceId'     => 'DBInstanceId',
        'delayTime'        => 'DelayTime',
        'items'            => 'Items',
        'readDBInstanceId' => 'ReadDBInstanceId',
        'requestId'        => 'RequestId',
    ];

    public function validate()
    {
        if (null !== $this->items) {
            $this->items->validate();
        }
        parent::validate();
    }

    public function toArray($noStream = false)
    {
        $res = [];
        if (null !== $this->DBInstanceId) {
            $res['DBInstanceId'] = $this->DBInstanceId;
        }

        if (null !== $this->delayTime) {
            $res['DelayTime'] = $this->delayTime;
        }

        if (null !== $this->items) {
            $res['Items'] = null !== $this->items ? $this->items->toArray($noStream) : $this->items;
        }

        if (null !== $this->readDBInstanceId) {
            $res['ReadDBInstanceId'] = $this->readDBInstanceId;
        }

        if (null !== $this->requestId) {
            $res['RequestId'] = $this->requestId;
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

        if (isset($map['DelayTime'])) {
            $model->delayTime = $map['DelayTime'];
        }

        if (isset($map['Items'])) {
            $model->items = items::fromMap($map['Items']);
        }

        if (isset($map['ReadDBInstanceId'])) {
            $model->readDBInstanceId = $map['ReadDBInstanceId'];
        }

        if (isset($map['RequestId'])) {
            $model->requestId = $map['RequestId'];
        }

        return $model;
    }
}
