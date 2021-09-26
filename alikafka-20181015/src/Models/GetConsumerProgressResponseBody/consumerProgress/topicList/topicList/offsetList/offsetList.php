<?php

// This file is auto-generated, don't edit it. Thanks.

namespace AlibabaCloud\SDK\Alikafka\V20181015\Models\GetConsumerProgressResponseBody\consumerProgress\topicList\topicList\offsetList;

use AlibabaCloud\Tea\Model;

class offsetList extends Model
{
    /**
     * @var int
     */
    public $partition;

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
    protected $_name = [
        'partition'      => 'Partition',
        'brokerOffset'   => 'BrokerOffset',
        'consumerOffset' => 'ConsumerOffset',
        'lastTimestamp'  => 'LastTimestamp',
    ];

    public function validate()
    {
    }

    public function toMap()
    {
        $res = [];
        if (null !== $this->partition) {
            $res['Partition'] = $this->partition;
        }
        if (null !== $this->brokerOffset) {
            $res['BrokerOffset'] = $this->brokerOffset;
        }
        if (null !== $this->consumerOffset) {
            $res['ConsumerOffset'] = $this->consumerOffset;
        }
        if (null !== $this->lastTimestamp) {
            $res['LastTimestamp'] = $this->lastTimestamp;
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
        if (isset($map['Partition'])) {
            $model->partition = $map['Partition'];
        }
        if (isset($map['BrokerOffset'])) {
            $model->brokerOffset = $map['BrokerOffset'];
        }
        if (isset($map['ConsumerOffset'])) {
            $model->consumerOffset = $map['ConsumerOffset'];
        }
        if (isset($map['LastTimestamp'])) {
            $model->lastTimestamp = $map['LastTimestamp'];
        }

        return $model;
    }
}
