<?php

// This file is auto-generated, don't edit it. Thanks.

namespace AlibabaCloud\SDK\CloudGameAPI\V20200728\Models;

use AlibabaCloud\Tea\Model;

class BatchStopGameSessionsResponseBody extends Model
{
    /**
     * @var string
     */
    public $gameId;

    /**
     * @var string
     */
    public $message;

    /**
     * @var string
     */
    public $projectId;

    /**
     * @var int
     */
    public $queueState;

    /**
     * @var string
     */
    public $requestId;

    /**
     * @var bool
     */
    public $success;

    /**
     * @var string
     */
    public $trackInfo;
    protected $_name = [
        'gameId'     => 'GameId',
        'message'    => 'Message',
        'projectId'  => 'ProjectId',
        'queueState' => 'QueueState',
        'requestId'  => 'RequestId',
        'success'    => 'Success',
        'trackInfo'  => 'TrackInfo',
    ];

    public function validate()
    {
    }

    public function toMap()
    {
        $res = [];
        if (null !== $this->gameId) {
            $res['GameId'] = $this->gameId;
        }
        if (null !== $this->message) {
            $res['Message'] = $this->message;
        }
        if (null !== $this->projectId) {
            $res['ProjectId'] = $this->projectId;
        }
        if (null !== $this->queueState) {
            $res['QueueState'] = $this->queueState;
        }
        if (null !== $this->requestId) {
            $res['RequestId'] = $this->requestId;
        }
        if (null !== $this->success) {
            $res['Success'] = $this->success;
        }
        if (null !== $this->trackInfo) {
            $res['TrackInfo'] = $this->trackInfo;
        }

        return $res;
    }

    /**
     * @param array $map
     *
     * @return BatchStopGameSessionsResponseBody
     */
    public static function fromMap($map = [])
    {
        $model = new self();
        if (isset($map['GameId'])) {
            $model->gameId = $map['GameId'];
        }
        if (isset($map['Message'])) {
            $model->message = $map['Message'];
        }
        if (isset($map['ProjectId'])) {
            $model->projectId = $map['ProjectId'];
        }
        if (isset($map['QueueState'])) {
            $model->queueState = $map['QueueState'];
        }
        if (isset($map['RequestId'])) {
            $model->requestId = $map['RequestId'];
        }
        if (isset($map['Success'])) {
            $model->success = $map['Success'];
        }
        if (isset($map['TrackInfo'])) {
            $model->trackInfo = $map['TrackInfo'];
        }

        return $model;
    }
}
