<?php

// This file is auto-generated, don't edit it. Thanks.

namespace AlibabaCloud\SDK\Appstreamcenter\V20210903\Models\GetConnectionTicketResponseBody;

use AlibabaCloud\Tea\Model;

class bindQueueInfo extends Model
{
    /**
     * @var string
     */
    public $queueStatus;

    /**
     * @var int
     */
    public $rank;

    /**
     * @var int
     */
    public $readyTimeout;

    /**
     * @var int
     */
    public $remainingTime;

    /**
     * @var string
     */
    public $requestKey;

    /**
     * @var string
     */
    public $targetId;

    /**
     * @var int
     */
    public $waitTime;
    protected $_name = [
        'queueStatus' => 'QueueStatus',
        'rank' => 'Rank',
        'readyTimeout' => 'ReadyTimeout',
        'remainingTime' => 'RemainingTime',
        'requestKey' => 'RequestKey',
        'targetId' => 'TargetId',
        'waitTime' => 'WaitTime',
    ];

    public function validate() {}

    public function toMap()
    {
        $res = [];
        if (null !== $this->queueStatus) {
            $res['QueueStatus'] = $this->queueStatus;
        }
        if (null !== $this->rank) {
            $res['Rank'] = $this->rank;
        }
        if (null !== $this->readyTimeout) {
            $res['ReadyTimeout'] = $this->readyTimeout;
        }
        if (null !== $this->remainingTime) {
            $res['RemainingTime'] = $this->remainingTime;
        }
        if (null !== $this->requestKey) {
            $res['RequestKey'] = $this->requestKey;
        }
        if (null !== $this->targetId) {
            $res['TargetId'] = $this->targetId;
        }
        if (null !== $this->waitTime) {
            $res['WaitTime'] = $this->waitTime;
        }

        return $res;
    }

    /**
     * @param array $map
     *
     * @return bindQueueInfo
     */
    public static function fromMap($map = [])
    {
        $model = new self();
        if (isset($map['QueueStatus'])) {
            $model->queueStatus = $map['QueueStatus'];
        }
        if (isset($map['Rank'])) {
            $model->rank = $map['Rank'];
        }
        if (isset($map['ReadyTimeout'])) {
            $model->readyTimeout = $map['ReadyTimeout'];
        }
        if (isset($map['RemainingTime'])) {
            $model->remainingTime = $map['RemainingTime'];
        }
        if (isset($map['RequestKey'])) {
            $model->requestKey = $map['RequestKey'];
        }
        if (isset($map['TargetId'])) {
            $model->targetId = $map['TargetId'];
        }
        if (isset($map['WaitTime'])) {
            $model->waitTime = $map['WaitTime'];
        }

        return $model;
    }
}
