<?php

// This file is auto-generated, don't edit it. Thanks.

namespace AlibabaCloud\SDK\Alikafka\V20190916\Models\GetConsumerProgressResponseBody\consumerProgress\topicList\topicList\offsetList;

use AlibabaCloud\Tea\Model;

class offsetList extends Model
{
    /**
     * @description The consumer offset in the partition of the topic.
     *
     * @example 9
     *
     * @var int
     */
    public $brokerOffset;

    /**
     * @description The time when the last consumed message in the partition was generated.
     *
     * @example 9
     *
     * @var int
     */
    public $consumerOffset;

    /**
     * @description Queries the consumption status of a specified consumer group.
     *
     * @example 1566874931649
     *
     * @var int
     */
    public $lastTimestamp;

    /**
     * @description The latest offset in the partition of the topic.
     *
     * @example 0
     *
     * @var int
     */
    public $partition;
    protected $_name = [
        'brokerOffset'   => 'BrokerOffset',
        'consumerOffset' => 'ConsumerOffset',
        'lastTimestamp'  => 'LastTimestamp',
        'partition'      => 'Partition',
    ];

    public function validate()
    {
    }

    public function toMap()
    {
        $res = [];
        if (null !== $this->brokerOffset) {
            $res['BrokerOffset'] = $this->brokerOffset;
        }
        if (null !== $this->consumerOffset) {
            $res['ConsumerOffset'] = $this->consumerOffset;
        }
        if (null !== $this->lastTimestamp) {
            $res['LastTimestamp'] = $this->lastTimestamp;
        }
        if (null !== $this->partition) {
            $res['Partition'] = $this->partition;
        }

        return $res;
    }

    /**
     * @param array $map
     *
     * @return offsetList
     */
    public static function fromMap($map = [])
    {
        $model = new self();
        if (isset($map['BrokerOffset'])) {
            $model->brokerOffset = $map['BrokerOffset'];
        }
        if (isset($map['ConsumerOffset'])) {
            $model->consumerOffset = $map['ConsumerOffset'];
        }
        if (isset($map['LastTimestamp'])) {
            $model->lastTimestamp = $map['LastTimestamp'];
        }
        if (isset($map['Partition'])) {
            $model->partition = $map['Partition'];
        }

        return $model;
    }
}
