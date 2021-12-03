<?php

// This file is auto-generated, don't edit it. Thanks.

namespace AlibabaCloud\SDK\CloudGameAPI\V20200728\Models;

use AlibabaCloud\Tea\Model;

class StopGameSessionResponseBody extends Model
{
    /**
     * @var string
     */
    public $gameId;

    /**
     * @var string
     */
    public $gameSession;

    /**
     * @var string
     */
    public $message;

    /**
     * @var int
     */
    public $queueCode;

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
    protected $_name = [
        'gameId'      => 'GameId',
        'gameSession' => 'GameSession',
        'message'     => 'Message',
        'queueCode'   => 'QueueCode',
        'queueState'  => 'QueueState',
        'requestId'   => 'RequestId',
        'success'     => 'Success',
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
        if (null !== $this->gameSession) {
            $res['GameSession'] = $this->gameSession;
        }
        if (null !== $this->message) {
            $res['Message'] = $this->message;
        }
        if (null !== $this->queueCode) {
            $res['QueueCode'] = $this->queueCode;
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

        return $res;
    }

    /**
     * @param array $map
     *
     * @return StopGameSessionResponseBody
     */
    public static function fromMap($map = [])
    {
        $model = new self();
        if (isset($map['GameId'])) {
            $model->gameId = $map['GameId'];
        }
        if (isset($map['GameSession'])) {
            $model->gameSession = $map['GameSession'];
        }
        if (isset($map['Message'])) {
            $model->message = $map['Message'];
        }
        if (isset($map['QueueCode'])) {
            $model->queueCode = $map['QueueCode'];
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

        return $model;
    }
}
