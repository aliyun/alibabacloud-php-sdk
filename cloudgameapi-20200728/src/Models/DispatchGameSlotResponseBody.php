<?php

// This file is auto-generated, don't edit it. Thanks.

namespace AlibabaCloud\SDK\CloudGameAPI\V20200728\Models;

use AlibabaCloud\Tea\Model;

class DispatchGameSlotResponseBody extends Model
{
    /**
     * @var string
     */
    public $gameSession;

    /**
     * @var int
     */
    public $queueCode;

    /**
     * @var string
     */
    public $requestId;

    /**
     * @var int
     */
    public $queueState;

    /**
     * @var string
     */
    public $message;

    /**
     * @var string
     */
    public $regionName;

    /**
     * @var string
     */
    public $userId;

    /**
     * @var string
     */
    public $gameId;
    protected $_name = [
        'gameSession' => 'GameSession',
        'queueCode'   => 'QueueCode',
        'requestId'   => 'RequestId',
        'queueState'  => 'QueueState',
        'message'     => 'Message',
        'regionName'  => 'RegionName',
        'userId'      => 'UserId',
        'gameId'      => 'GameId',
    ];

    public function validate()
    {
    }

    public function toMap()
    {
        $res = [];
        if (null !== $this->gameSession) {
            $res['GameSession'] = $this->gameSession;
        }
        if (null !== $this->queueCode) {
            $res['QueueCode'] = $this->queueCode;
        }
        if (null !== $this->requestId) {
            $res['RequestId'] = $this->requestId;
        }
        if (null !== $this->queueState) {
            $res['QueueState'] = $this->queueState;
        }
        if (null !== $this->message) {
            $res['Message'] = $this->message;
        }
        if (null !== $this->regionName) {
            $res['RegionName'] = $this->regionName;
        }
        if (null !== $this->userId) {
            $res['UserId'] = $this->userId;
        }
        if (null !== $this->gameId) {
            $res['GameId'] = $this->gameId;
        }

        return $res;
    }

    /**
     * @param array $map
     *
     * @return DispatchGameSlotResponseBody
     */
    public static function fromMap($map = [])
    {
        $model = new self();
        if (isset($map['GameSession'])) {
            $model->gameSession = $map['GameSession'];
        }
        if (isset($map['QueueCode'])) {
            $model->queueCode = $map['QueueCode'];
        }
        if (isset($map['RequestId'])) {
            $model->requestId = $map['RequestId'];
        }
        if (isset($map['QueueState'])) {
            $model->queueState = $map['QueueState'];
        }
        if (isset($map['Message'])) {
            $model->message = $map['Message'];
        }
        if (isset($map['RegionName'])) {
            $model->regionName = $map['RegionName'];
        }
        if (isset($map['UserId'])) {
            $model->userId = $map['UserId'];
        }
        if (isset($map['GameId'])) {
            $model->gameId = $map['GameId'];
        }

        return $model;
    }
}
