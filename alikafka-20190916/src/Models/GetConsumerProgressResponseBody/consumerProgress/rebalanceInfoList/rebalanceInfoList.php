<?php

// This file is auto-generated, don't edit it. Thanks.

namespace AlibabaCloud\SDK\Alikafka\V20190916\Models\GetConsumerProgressResponseBody\consumerProgress\rebalanceInfoList;

use AlibabaCloud\Tea\Model;

class rebalanceInfoList extends Model
{
    /**
     * @description The number of rebalances.
     *
     * @example 100
     *
     * @var int
     */
    public $generation;

    /**
     * @description The group ID of the subscriber.
     *
     * @example falcon-uat
     *
     * @var string
     */
    public $groupId;

    /**
     * @description The time when the last rebalance occurred. Unit: milliseconds.
     *
     * @example 1709199270
     *
     * @var int
     */
    public $lastRebalanceTimestamp;

    /**
     * @description The cause of the rebalance.
     *
     * @example removing member consumer-1-cd14eb9c-379b-4b8e-9bbd-76f147f8536f on LeaveGroup
     *
     * @var string
     */
    public $reason;

    /**
     * @description Indicates whether new members are added to the consumer group in the rebalance.
     *
     * @example true
     *
     * @var bool
     */
    public $rebalanceSuccess;

    /**
     * @description The duration of the rebalance. Unit: milliseconds.
     *
     * @example 1
     *
     * @var int
     */
    public $rebalanceTimeConsuming;
    protected $_name = [
        'generation'             => 'Generation',
        'groupId'                => 'GroupId',
        'lastRebalanceTimestamp' => 'LastRebalanceTimestamp',
        'reason'                 => 'Reason',
        'rebalanceSuccess'       => 'RebalanceSuccess',
        'rebalanceTimeConsuming' => 'RebalanceTimeConsuming',
    ];

    public function validate()
    {
    }

    public function toMap()
    {
        $res = [];
        if (null !== $this->generation) {
            $res['Generation'] = $this->generation;
        }
        if (null !== $this->groupId) {
            $res['GroupId'] = $this->groupId;
        }
        if (null !== $this->lastRebalanceTimestamp) {
            $res['LastRebalanceTimestamp'] = $this->lastRebalanceTimestamp;
        }
        if (null !== $this->reason) {
            $res['Reason'] = $this->reason;
        }
        if (null !== $this->rebalanceSuccess) {
            $res['RebalanceSuccess'] = $this->rebalanceSuccess;
        }
        if (null !== $this->rebalanceTimeConsuming) {
            $res['RebalanceTimeConsuming'] = $this->rebalanceTimeConsuming;
        }

        return $res;
    }

    /**
     * @param array $map
     *
     * @return rebalanceInfoList
     */
    public static function fromMap($map = [])
    {
        $model = new self();
        if (isset($map['Generation'])) {
            $model->generation = $map['Generation'];
        }
        if (isset($map['GroupId'])) {
            $model->groupId = $map['GroupId'];
        }
        if (isset($map['LastRebalanceTimestamp'])) {
            $model->lastRebalanceTimestamp = $map['LastRebalanceTimestamp'];
        }
        if (isset($map['Reason'])) {
            $model->reason = $map['Reason'];
        }
        if (isset($map['RebalanceSuccess'])) {
            $model->rebalanceSuccess = $map['RebalanceSuccess'];
        }
        if (isset($map['RebalanceTimeConsuming'])) {
            $model->rebalanceTimeConsuming = $map['RebalanceTimeConsuming'];
        }

        return $model;
    }
}
