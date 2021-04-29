<?php

// This file is auto-generated, don't edit it. Thanks.

namespace AlibabaCloud\SDK\Rds\V20140815\Models;

use AlibabaCloud\SDK\Rds\V20140815\Models\DescribeReadDBInstanceDelayResponseBody\items;
use AlibabaCloud\Tea\Model;

class DescribeReadDBInstanceDelayResponseBody extends Model
{
    /**
     * @var string
     */
    public $requestId;

    /**
     * @var string
     */
    public $DBInstanceId;

    /**
     * @var string
     */
    public $readDBInstanceId;

    /**
     * @var items
     */
    public $items;

    /**
     * @var int
     */
    public $delayTime;
    protected $_name = [
        'requestId'        => 'RequestId',
        'DBInstanceId'     => 'DBInstanceId',
        'readDBInstanceId' => 'ReadDBInstanceId',
        'items'            => 'Items',
        'delayTime'        => 'DelayTime',
    ];

    public function validate()
    {
    }

    public function toMap()
    {
        $res = [];
        if (null !== $this->requestId) {
            $res['RequestId'] = $this->requestId;
        }
        if (null !== $this->DBInstanceId) {
            $res['DBInstanceId'] = $this->DBInstanceId;
        }
        if (null !== $this->readDBInstanceId) {
            $res['ReadDBInstanceId'] = $this->readDBInstanceId;
        }
        if (null !== $this->items) {
            $res['Items'] = null !== $this->items ? $this->items->toMap() : null;
        }
        if (null !== $this->delayTime) {
            $res['DelayTime'] = $this->delayTime;
        }

        return $res;
    }

    /**
     * @param array $map
     *
     * @return DescribeReadDBInstanceDelayResponseBody
     */
    public static function fromMap($map = [])
    {
        $model = new self();
        if (isset($map['RequestId'])) {
            $model->requestId = $map['RequestId'];
        }
        if (isset($map['DBInstanceId'])) {
            $model->DBInstanceId = $map['DBInstanceId'];
        }
        if (isset($map['ReadDBInstanceId'])) {
            $model->readDBInstanceId = $map['ReadDBInstanceId'];
        }
        if (isset($map['Items'])) {
            $model->items = items::fromMap($map['Items']);
        }
        if (isset($map['DelayTime'])) {
            $model->delayTime = $map['DelayTime'];
        }

        return $model;
    }
}
