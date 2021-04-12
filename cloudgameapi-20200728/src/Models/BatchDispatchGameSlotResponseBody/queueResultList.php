<?php

// This file is auto-generated, don't edit it. Thanks.

namespace AlibabaCloud\SDK\CloudGameAPI\V20200728\Models\BatchDispatchGameSlotResponseBody;

use AlibabaCloud\Tea\Model;

class queueResultList extends Model
{
    /**
     * @var string
     */
    public $regionName;

    /**
     * @var string
     */
    public $gameSession;

    /**
     * @var string
     */
    public $userId;

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
    public $gameId;

    /**
     * @var int
     */
    public $queueCode;
    protected $_name = [
        'regionName'  => 'RegionName',
        'gameSession' => 'GameSession',
        'userId'      => 'UserId',
        'queueState'  => 'QueueState',
        'message'     => 'Message',
        'gameId'      => 'GameId',
        'queueCode'   => 'QueueCode',
    ];

    public function validate()
    {
    }

    public function toMap()
    {
        $res = [];
        if (null !== $this->regionName) {
            $res['RegionName'] = $this->regionName;
        }
        if (null !== $this->gameSession) {
            $res['GameSession'] = $this->gameSession;
        }
        if (null !== $this->userId) {
            $res['UserId'] = $this->userId;
        }
        if (null !== $this->queueState) {
            $res['QueueState'] = $this->queueState;
        }
        if (null !== $this->message) {
            $res['Message'] = $this->message;
        }
        if (null !== $this->gameId) {
            $res['GameId'] = $this->gameId;
        }
        if (null !== $this->queueCode) {
            $res['QueueCode'] = $this->queueCode;
        }

        return $res;
    }

    /**
     * @param array $map
     *
     * @return queueResultList
     */
    public static function fromMap($map = [])
    {
        $model = new self();
        if (isset($map['RegionName'])) {
            $model->regionName = $map['RegionName'];
        }
        if (isset($map['GameSession'])) {
            $model->gameSession = $map['GameSession'];
        }
        if (isset($map['UserId'])) {
            $model->userId = $map['UserId'];
        }
        if (isset($map['QueueState'])) {
            $model->queueState = $map['QueueState'];
        }
        if (isset($map['Message'])) {
            $model->message = $map['Message'];
        }
        if (isset($map['GameId'])) {
            $model->gameId = $map['GameId'];
        }
        if (isset($map['QueueCode'])) {
            $model->queueCode = $map['QueueCode'];
        }

        return $model;
    }
}
