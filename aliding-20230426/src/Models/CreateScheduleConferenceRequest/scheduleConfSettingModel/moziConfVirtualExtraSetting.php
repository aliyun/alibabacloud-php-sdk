<?php

// This file is auto-generated, don't edit it. Thanks.

namespace AlibabaCloud\SDK\Aliding\V20230426\Models\CreateScheduleConferenceRequest\scheduleConfSettingModel;

use AlibabaCloud\Dara\Model;
use AlibabaCloud\SDK\Aliding\V20230426\Models\CreateScheduleConferenceRequest\scheduleConfSettingModel\moziConfVirtualExtraSetting\moziConfExtensionAppSettings;

class moziConfVirtualExtraSetting extends Model
{
    /**
     * @var string
     */
    public $cloudRecordOwnerUserId;
    /**
     * @var int
     */
    public $enableChat;
    /**
     * @var bool
     */
    public $enableWebAnonymousJoin;
    /**
     * @var int
     */
    public $joinBeforeHost;
    /**
     * @var int
     */
    public $lockMediaStatusMicMute;
    /**
     * @var int
     */
    public $lockNick;
    /**
     * @var string
     */
    public $minutesOwnerUserId;
    /**
     * @var moziConfExtensionAppSettings[]
     */
    public $moziConfExtensionAppSettings;
    /**
     * @var bool
     */
    public $pushAllMeetingRecords;
    /**
     * @var bool
     */
    public $pushCloudRecordCard;
    /**
     * @var bool
     */
    public $pushMinutesCard;
    /**
     * @var int
     */
    public $waitingRoom;
    protected $_name = [
        'cloudRecordOwnerUserId'       => 'CloudRecordOwnerUserId',
        'enableChat'                   => 'EnableChat',
        'enableWebAnonymousJoin'       => 'EnableWebAnonymousJoin',
        'joinBeforeHost'               => 'JoinBeforeHost',
        'lockMediaStatusMicMute'       => 'LockMediaStatusMicMute',
        'lockNick'                     => 'LockNick',
        'minutesOwnerUserId'           => 'MinutesOwnerUserId',
        'moziConfExtensionAppSettings' => 'MoziConfExtensionAppSettings',
        'pushAllMeetingRecords'        => 'PushAllMeetingRecords',
        'pushCloudRecordCard'          => 'PushCloudRecordCard',
        'pushMinutesCard'              => 'PushMinutesCard',
        'waitingRoom'                  => 'WaitingRoom',
    ];

    public function validate()
    {
        if (\is_array($this->moziConfExtensionAppSettings)) {
            Model::validateArray($this->moziConfExtensionAppSettings);
        }
        parent::validate();
    }

    public function toArray($noStream = false)
    {
        $res = [];
        if (null !== $this->cloudRecordOwnerUserId) {
            $res['CloudRecordOwnerUserId'] = $this->cloudRecordOwnerUserId;
        }

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

        if (null !== $this->minutesOwnerUserId) {
            $res['MinutesOwnerUserId'] = $this->minutesOwnerUserId;
        }

        if (null !== $this->moziConfExtensionAppSettings) {
            if (\is_array($this->moziConfExtensionAppSettings)) {
                $res['MoziConfExtensionAppSettings'] = [];
                $n1                                  = 0;
                foreach ($this->moziConfExtensionAppSettings as $item1) {
                    $res['MoziConfExtensionAppSettings'][$n1++] = null !== $item1 ? $item1->toArray($noStream) : $item1;
                }
            }
        }

        if (null !== $this->pushAllMeetingRecords) {
            $res['PushAllMeetingRecords'] = $this->pushAllMeetingRecords;
        }

        if (null !== $this->pushCloudRecordCard) {
            $res['PushCloudRecordCard'] = $this->pushCloudRecordCard;
        }

        if (null !== $this->pushMinutesCard) {
            $res['PushMinutesCard'] = $this->pushMinutesCard;
        }

        if (null !== $this->waitingRoom) {
            $res['WaitingRoom'] = $this->waitingRoom;
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
        if (isset($map['CloudRecordOwnerUserId'])) {
            $model->cloudRecordOwnerUserId = $map['CloudRecordOwnerUserId'];
        }

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

        if (isset($map['MinutesOwnerUserId'])) {
            $model->minutesOwnerUserId = $map['MinutesOwnerUserId'];
        }

        if (isset($map['MoziConfExtensionAppSettings'])) {
            if (!empty($map['MoziConfExtensionAppSettings'])) {
                $model->moziConfExtensionAppSettings = [];
                $n1                                  = 0;
                foreach ($map['MoziConfExtensionAppSettings'] as $item1) {
                    $model->moziConfExtensionAppSettings[$n1++] = moziConfExtensionAppSettings::fromMap($item1);
                }
            }
        }

        if (isset($map['PushAllMeetingRecords'])) {
            $model->pushAllMeetingRecords = $map['PushAllMeetingRecords'];
        }

        if (isset($map['PushCloudRecordCard'])) {
            $model->pushCloudRecordCard = $map['PushCloudRecordCard'];
        }

        if (isset($map['PushMinutesCard'])) {
            $model->pushMinutesCard = $map['PushMinutesCard'];
        }

        if (isset($map['WaitingRoom'])) {
            $model->waitingRoom = $map['WaitingRoom'];
        }

        return $model;
    }
}
