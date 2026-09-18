<?php

// This file is auto-generated, don't edit it. Thanks.

namespace AlibabaCloud\SDK\AlikafkaKopilot\V20260414\Models;

use AlibabaCloud\Dara\Model;

class KopilotListConversationChatMessagesRequest extends Model
{
    /**
     * @var int
     */
    public $beforeTurnId;

    /**
     * @var int
     */
    public $pageSize;

    /**
     * @var string
     */
    public $regionId;

    /**
     * @var string
     */
    public $sessionId;

    /**
     * @var string
     */
    public $taskCursor;

    /**
     * @var int
     */
    public $taskPageSize;
    protected $_name = [
        'beforeTurnId' => 'BeforeTurnId',
        'pageSize' => 'PageSize',
        'regionId' => 'RegionId',
        'sessionId' => 'SessionId',
        'taskCursor' => 'TaskCursor',
        'taskPageSize' => 'TaskPageSize',
    ];

    public function validate()
    {
        parent::validate();
    }

    public function toArray($noStream = false)
    {
        $res = [];
        if (null !== $this->beforeTurnId) {
            $res['BeforeTurnId'] = $this->beforeTurnId;
        }

        if (null !== $this->pageSize) {
            $res['PageSize'] = $this->pageSize;
        }

        if (null !== $this->regionId) {
            $res['RegionId'] = $this->regionId;
        }

        if (null !== $this->sessionId) {
            $res['SessionId'] = $this->sessionId;
        }

        if (null !== $this->taskCursor) {
            $res['TaskCursor'] = $this->taskCursor;
        }

        if (null !== $this->taskPageSize) {
            $res['TaskPageSize'] = $this->taskPageSize;
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
        if (isset($map['BeforeTurnId'])) {
            $model->beforeTurnId = $map['BeforeTurnId'];
        }

        if (isset($map['PageSize'])) {
            $model->pageSize = $map['PageSize'];
        }

        if (isset($map['RegionId'])) {
            $model->regionId = $map['RegionId'];
        }

        if (isset($map['SessionId'])) {
            $model->sessionId = $map['SessionId'];
        }

        if (isset($map['TaskCursor'])) {
            $model->taskCursor = $map['TaskCursor'];
        }

        if (isset($map['TaskPageSize'])) {
            $model->taskPageSize = $map['TaskPageSize'];
        }

        return $model;
    }
}
