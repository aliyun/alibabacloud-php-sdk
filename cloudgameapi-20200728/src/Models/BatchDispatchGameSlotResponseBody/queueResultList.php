<?php

// This file is auto-generated, don't edit it. Thanks.

namespace AlibabaCloud\SDK\CloudGameAPI\V20200728\Models\BatchDispatchGameSlotResponseBody;

use AlibabaCloud\Tea\Model;

class queueResultList extends Model
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
    public $regionName;

    /**
     * @var string
     */
    public $userId;
    protected $_name = [
        'gameId'      => 'GameId',
        'gameSession' => 'GameSession',
        'message'     => 'Message',
        'queueCode'   => 'QueueCode',
        'queueState'  => 'QueueState',
        'regionName'  => 'RegionName',
        'userId'      => 'UserId',
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
        if (null !== $this->regionName) {
            $res['RegionName'] = $this->regionName;
        }
        if (null !== $this->userId) {
            $res['UserId'] = $this->userId;
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
        if (isset($map['RegionName'])) {
            $model->regionName = $map['RegionName'];
        }
        if (isset($map['UserId'])) {
            $model->userId = $map['UserId'];
        }

        return $model;
    }
}
