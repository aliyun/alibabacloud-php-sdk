<?php

// This file is auto-generated, don't edit it. Thanks.

namespace AlibabaCloud\SDK\Aliding\V20230426\Models\UpdateScheduleConfSettingsRequest;

use AlibabaCloud\Dara\Model;
use AlibabaCloud\SDK\Aliding\V20230426\Models\UpdateScheduleConfSettingsRequest\scheduleConfSettingModel\moziConfOpenRecordSetting;
use AlibabaCloud\SDK\Aliding\V20230426\Models\UpdateScheduleConfSettingsRequest\scheduleConfSettingModel\moziConfVirtualExtraSetting;

class scheduleConfSettingModel extends Model
{
    /**
     * @var string[]
     */
    public $cohostUserIds;

    /**
     * @var string
     */
    public $confAllowedCorpId;

    /**
     * @var string
     */
    public $hostUserId;

    /**
     * @var int
     */
    public $lockRoom;

    /**
     * @var moziConfOpenRecordSetting
     */
    public $moziConfOpenRecordSetting;

    /**
     * @var moziConfVirtualExtraSetting
     */
    public $moziConfVirtualExtraSetting;

    /**
     * @var int
     */
    public $muteOnJoin;

    /**
     * @var int
     */
    public $screenShareForbidden;
    protected $_name = [
        'cohostUserIds' => 'CohostUserIds',
        'confAllowedCorpId' => 'ConfAllowedCorpId',
        'hostUserId' => 'HostUserId',
        'lockRoom' => 'LockRoom',
        'moziConfOpenRecordSetting' => 'MoziConfOpenRecordSetting',
        'moziConfVirtualExtraSetting' => 'MoziConfVirtualExtraSetting',
        'muteOnJoin' => 'MuteOnJoin',
        'screenShareForbidden' => 'ScreenShareForbidden',
    ];

    public function validate()
    {
        if (\is_array($this->cohostUserIds)) {
            Model::validateArray($this->cohostUserIds);
        }
        if (null !== $this->moziConfOpenRecordSetting) {
            $this->moziConfOpenRecordSetting->validate();
        }
        if (null !== $this->moziConfVirtualExtraSetting) {
            $this->moziConfVirtualExtraSetting->validate();
        }
        parent::validate();
    }

    public function toArray($noStream = false)
    {
        $res = [];
        if (null !== $this->cohostUserIds) {
            if (\is_array($this->cohostUserIds)) {
                $res['CohostUserIds'] = [];
                $n1 = 0;
                foreach ($this->cohostUserIds as $item1) {
                    $res['CohostUserIds'][$n1] = $item1;
                    ++$n1;
                }
            }
        }

        if (null !== $this->confAllowedCorpId) {
            $res['ConfAllowedCorpId'] = $this->confAllowedCorpId;
        }

        if (null !== $this->hostUserId) {
            $res['HostUserId'] = $this->hostUserId;
        }

        if (null !== $this->lockRoom) {
            $res['LockRoom'] = $this->lockRoom;
        }

        if (null !== $this->moziConfOpenRecordSetting) {
            $res['MoziConfOpenRecordSetting'] = null !== $this->moziConfOpenRecordSetting ? $this->moziConfOpenRecordSetting->toArray($noStream) : $this->moziConfOpenRecordSetting;
        }

        if (null !== $this->moziConfVirtualExtraSetting) {
            $res['MoziConfVirtualExtraSetting'] = null !== $this->moziConfVirtualExtraSetting ? $this->moziConfVirtualExtraSetting->toArray($noStream) : $this->moziConfVirtualExtraSetting;
        }

        if (null !== $this->muteOnJoin) {
            $res['MuteOnJoin'] = $this->muteOnJoin;
        }

        if (null !== $this->screenShareForbidden) {
            $res['ScreenShareForbidden'] = $this->screenShareForbidden;
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
        if (isset($map['CohostUserIds'])) {
            if (!empty($map['CohostUserIds'])) {
                $model->cohostUserIds = [];
                $n1 = 0;
                foreach ($map['CohostUserIds'] as $item1) {
                    $model->cohostUserIds[$n1] = $item1;
                    ++$n1;
                }
            }
        }

        if (isset($map['ConfAllowedCorpId'])) {
            $model->confAllowedCorpId = $map['ConfAllowedCorpId'];
        }

        if (isset($map['HostUserId'])) {
            $model->hostUserId = $map['HostUserId'];
        }

        if (isset($map['LockRoom'])) {
            $model->lockRoom = $map['LockRoom'];
        }

        if (isset($map['MoziConfOpenRecordSetting'])) {
            $model->moziConfOpenRecordSetting = moziConfOpenRecordSetting::fromMap($map['MoziConfOpenRecordSetting']);
        }

        if (isset($map['MoziConfVirtualExtraSetting'])) {
            $model->moziConfVirtualExtraSetting = moziConfVirtualExtraSetting::fromMap($map['MoziConfVirtualExtraSetting']);
        }

        if (isset($map['MuteOnJoin'])) {
            $model->muteOnJoin = $map['MuteOnJoin'];
        }

        if (isset($map['ScreenShareForbidden'])) {
            $model->screenShareForbidden = $map['ScreenShareForbidden'];
        }

        return $model;
    }
}
