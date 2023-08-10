<?php

// This file is auto-generated, don't edit it. Thanks.

namespace AlibabaCloud\SDK\Dts\V20200101\Models\DescribeConsumerChannelResponseBody;

use AlibabaCloud\Tea\Model;

class consumerChannels extends Model
{
    /**
     * @description The ID of the consumer group.
     *
     * @example dtsor2y66j4219****
     *
     * @var string
     */
    public $consumerGroupId;

    /**
     * @description The name of the consumer group.
     *
     * @var string
     */
    public $consumerGroupName;

    /**
     * @description The username of the consumer group.
     *
     * @example dtstest
     *
     * @var string
     */
    public $consumerGroupUserName;

    /**
     * @description The consumption checkpoint, which is the time when the latest data record was consumed by the change tracking client. The time is displayed in the yyyy-MM-ddTHH:mm:ssZ format in UTC.
     *
     * @example 2021-06-20T12:00:00Z
     *
     * @var string
     */
    public $consumptionCheckpoint;

    /**
     * @description The message latency, which is the timestamp of the latest data consumed by the downstream client minus the timestamp of the latest data tracked by the change tracking task. The value is a UNIX timestamp. Unit: seconds.
     *
     * For example, the latest data in the source database is generated at 10:00. The change tracking task reads the data generated at 09:55, and the downstream client consumes the data generated at 09:30. In this case, the message latency is the UNIX timestamp difference between 09:55 and 09:30.
     *
     * >  If the return value of this parameter is **-1**, no client is connected to the consumer group.
     * @example 1500
     *
     * @var int
     */
    public $messageDelay;

    /**
     * @description The total number of unconsumed messages, which is the number of unconsumed data records plus the number of heartbeat messages.
     *
     * >  If the return value of this parameter is -1, no client is connected to the consumer group.
     * @example 186600
     *
     * @var int
     */
    public $unconsumedData;
    protected $_name = [
        'consumerGroupId'       => 'ConsumerGroupId',
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
        if (null !== $this->consumerGroupId) {
            $res['ConsumerGroupId'] = $this->consumerGroupId;
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
     * @return consumerChannels
     */
    public static function fromMap($map = [])
    {
        $model = new self();
        if (isset($map['ConsumerGroupId'])) {
            $model->consumerGroupId = $map['ConsumerGroupId'];
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
