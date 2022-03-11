<?php

// This file is auto-generated, don't edit it. Thanks.

namespace AlibabaCloud\SDK\Dts\V20200101\Models\DescribeConsumerGroupResponseBody\consumerChannels;

use AlibabaCloud\Tea\Model;

class describeConsumerChannel extends Model
{
    /**
     * @var string
     */
    public $consumerGroupID;

    /**
     * @var string
     */
    public $consumerGroupName;

    /**
     * @var string
     */
    public $consumerGroupUserName;

    /**
     * @var string
     */
    public $consumptionCheckpoint;

    /**
     * @var int
     */
    public $messageDelay;

    /**
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
