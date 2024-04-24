<?php

// This file is auto-generated, don't edit it. Thanks.

namespace AlibabaCloud\SDK\Aliding\V20230426\Models\UpdateScheduleConfSettingsRequest\scheduleConfSettingModel;

use AlibabaCloud\Tea\Model;

class moziConfVirtualExtraSetting extends Model
{
    /**
     * @example 1
     *
     * @var int
     */
    public $enableChat;

    /**
     * @var bool
     */
    public $enableWebAnonymousJoin;

    /**
     * @example 1
     *
     * @var int
     */
    public $joinBeforeHost;

    /**
     * @example 1
     *
     * @var int
     */
    public $lockMediaStatusMicMute;

    /**
     * @example 1
     *
     * @var int
     */
    public $lockNick;

    /**
     * @example 1
     *
     * @var int
     */
    public $waitingRoom;
    protected $_name = [
        'enableChat'             => 'EnableChat',
        'enableWebAnonymousJoin' => 'EnableWebAnonymousJoin',
        'joinBeforeHost'         => 'JoinBeforeHost',
        'lockMediaStatusMicMute' => 'LockMediaStatusMicMute',
        'lockNick'               => 'LockNick',
        'waitingRoom'            => 'WaitingRoom',
    ];

    public function validate()
    {
    }

    public function toMap()
    {
        $res = [];
        if (null !== $this->enableChat) {
            $res['EnableChat'] = $this->enableChat;
        }
        if (null !== $this->enableWebAnonymousJoin) {
            $res['EnableWebAnonymousJoin'] = $this->enableWebAnonymousJoin;
        }
        if (null !== $this->joinBeforeHost) {
            $res['JoinBeforeHost'] = $this->joinBeforeHost;
        }
        if (null !== $this->lockMediaStatusMicMute) {
            $res['LockMediaStatusMicMute'] = $this->lockMediaStatusMicMute;
        }
        if (null !== $this->lockNick) {
            $res['LockNick'] = $this->lockNick;
        }
        if (null !== $this->waitingRoom) {
            $res['WaitingRoom'] = $this->waitingRoom;
        }

        return $res;
    }

    /**
     * @param array $map
     *
     * @return moziConfVirtualExtraSetting
     */
    public static function fromMap($map = [])
    {
        $model = new self();
        if (isset($map['EnableChat'])) {
            $model->enableChat = $map['EnableChat'];
        }
        if (isset($map['EnableWebAnonymousJoin'])) {
            $model->enableWebAnonymousJoin = $map['EnableWebAnonymousJoin'];
        }
        if (isset($map['JoinBeforeHost'])) {
            $model->joinBeforeHost = $map['JoinBeforeHost'];
        }
        if (isset($map['LockMediaStatusMicMute'])) {
            $model->lockMediaStatusMicMute = $map['LockMediaStatusMicMute'];
        }
        if (isset($map['LockNick'])) {
            $model->lockNick = $map['LockNick'];
        }
        if (isset($map['WaitingRoom'])) {
            $model->waitingRoom = $map['WaitingRoom'];
        }

        return $model;
    }
}
