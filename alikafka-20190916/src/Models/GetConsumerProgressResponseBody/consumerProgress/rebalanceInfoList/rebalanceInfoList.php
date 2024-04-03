<?php

// This file is auto-generated, don't edit it. Thanks.

namespace AlibabaCloud\SDK\Alikafka\V20190916\Models\GetConsumerProgressResponseBody\consumerProgress\rebalanceInfoList;

use AlibabaCloud\Tea\Model;

class rebalanceInfoList extends Model
{
    /**
     * @var int
     */
    public $generation;

    /**
     * @var string
     */
    public $groupId;

    /**
     * @var int
     */
    public $lastRebalanceTimestamp;

    /**
     * @var string
     */
    public $reason;

    /**
     * @var bool
     */
    public $rebalanceSuccess;

    /**
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
