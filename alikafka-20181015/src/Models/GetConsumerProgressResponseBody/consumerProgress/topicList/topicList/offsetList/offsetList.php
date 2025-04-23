<?php

// This file is auto-generated, don't edit it. Thanks.

namespace AlibabaCloud\SDK\Alikafka\V20181015\Models\GetConsumerProgressResponseBody\consumerProgress\topicList\topicList\offsetList;

use AlibabaCloud\Dara\Model;

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
        'brokerOffset' => 'BrokerOffset',
        'consumerOffset' => 'ConsumerOffset',
        'lastTimestamp' => 'LastTimestamp',
        'partition' => 'Partition',
    ];

    public function validate()
    {
        parent::validate();
    }

    public function toArray($noStream = false)
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

    public function toMap($noStream = false)
    {
        return $this->toArray($noStream);
    }

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
