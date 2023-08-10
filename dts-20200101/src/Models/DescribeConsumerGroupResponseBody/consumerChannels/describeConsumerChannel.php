<?php

// This file is auto-generated, don't edit it. Thanks.

namespace AlibabaCloud\SDK\Dts\V20200101\Models\DescribeConsumerGroupResponseBody\consumerChannels;

use AlibabaCloud\Tea\Model;

class describeConsumerChannel extends Model
{
    /**
     * @description The ID of the consumer group.
     *
     * @example dtspis1110z232****
     *
     * @var string
     */
    public $consumerGroupID;

    /**
     * @description The name of the consumer group.
     *
     * @example consumergrouptest
     *
     * @var string
     */
    public $consumerGroupName;

    /**
     * @description The username of the consumer group.
     *
     * @example test
     *
     * @var string
     */
    public $consumerGroupUserName;

    /**
     * @description The consumption checkpoint, which is the time when the latest data record was consumed by the change tracking client. The format is *yyyy-MM-dd*T*HH:mm:ss*Z. The time is displayed in UTC.
     *
     * @example 2019-10-02T12:00:00Z
     *
     * @var string
     */
    public $consumptionCheckpoint;

    /**
     * @description The message delay, which is the current time minus the timestamp of the earliest unconsumed message in the change tracking instance. Unit: seconds.
     *
     * >  If the return value of this parameter is **-1**, no client is connected to the consumer group.
     * @example 172714
     *
     * @var int
     */
    public $messageDelay;

    /**
     * @description The total number of unconsumed messages, which is the number of unconsumed data records plus the number of heartbeat messages.
     *
     * >  If the return value of this parameter is **-1**, no client is connected to the consumer group.
     * @example 186600
     *
     * @var int
     */
    public $unconsumedData;
    protected $_name = [
        'consumerGroupID'       => 'ConsumerGroupID',
        'consumerGroupName'     => 'ConsumerGroupName',
        'consumerGroupUserName' => 'ConsumerGroupUserName',
        'consumptionCheckpoint' => 'ConsumptionCheckpoint',
        'messageDelay'          => 'MessageDelay',
        'unconsumedData'        => 'UnconsumedData',
    ];

    public function validate()
    {
    }

    public function toMap()
    {
        $res = [];
        if (null !== $this->consumerGroupID) {
            $res['ConsumerGroupID'] = $this->consumerGroupID;
        }
        if (null !== $this->consumerGroupName) {
            $res['ConsumerGroupName'] = $this->consumerGroupName;
        }
        if (null !== $this->consumerGroupUserName) {
            $res['ConsumerGroupUserName'] = $this->consumerGroupUserName;
        }
        if (null !== $this->consumptionCheckpoint) {
            $res['ConsumptionCheckpoint'] = $this->consumptionCheckpoint;
        }
        if (null !== $this->messageDelay) {
            $res['MessageDelay'] = $this->messageDelay;
        }
        if (null !== $this->unconsumedData) {
            $res['UnconsumedData'] = $this->unconsumedData;
        }

        return $res;
    }

    /**
     * @param array $map
     *
     * @return describeConsumerChannel
     */
    public static function fromMap($map = [])
    {
        $model = new self();
        if (isset($map['ConsumerGroupID'])) {
            $model->consumerGroupID = $map['ConsumerGroupID'];
        }
        if (isset($map['ConsumerGroupName'])) {
            $model->consumerGroupName = $map['ConsumerGroupName'];
        }
        if (isset($map['ConsumerGroupUserName'])) {
            $model->consumerGroupUserName = $map['ConsumerGroupUserName'];
        }
        if (isset($map['ConsumptionCheckpoint'])) {
            $model->consumptionCheckpoint = $map['ConsumptionCheckpoint'];
        }
        if (isset($map['MessageDelay'])) {
            $model->messageDelay = $map['MessageDelay'];
        }
        if (isset($map['UnconsumedData'])) {
            $model->unconsumedData = $map['UnconsumedData'];
        }

        return $model;
    }
}
