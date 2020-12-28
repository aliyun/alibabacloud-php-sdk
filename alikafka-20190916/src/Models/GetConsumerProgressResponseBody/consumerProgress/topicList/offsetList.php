<?php

// This file is auto-generated, don't edit it. Thanks.

namespace AlibabaCloud\SDK\Alikafka\V20190916\Models\GetConsumerProgressResponseBody\consumerProgress\topicList;

use AlibabaCloud\Tea\Model;

class offsetList extends Model
{
    /**
     * @var int
     */
    public $brokerOffset;

    /**
     * @var int
     */
    public $consumerOffset;

    /**
     * @var int
     */
    public $lastTimestamp;

    /**
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
