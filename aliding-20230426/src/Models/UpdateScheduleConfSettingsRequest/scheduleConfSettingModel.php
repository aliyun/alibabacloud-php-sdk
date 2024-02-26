<?php

// This file is auto-generated, don't edit it. Thanks.

namespace AlibabaCloud\SDK\Aliding\V20230426\Models\UpdateScheduleConfSettingsRequest;

use AlibabaCloud\SDK\Aliding\V20230426\Models\UpdateScheduleConfSettingsRequest\scheduleConfSettingModel\moziConfVirtualExtraSetting;
use AlibabaCloud\Tea\Model;

class scheduleConfSettingModel extends Model
{
    /**
     * @var string[]
     */
    public $cohostUserIds;

    /**
     * @example ding********
     *
     * @var string
     */
    public $confAllowedCorpId;

    /**
     * @example 012345
     *
     * @var string
     */
    public $hostUserId;

    /**
     * @example 1
     *
     * @var int
     */
    public $lockRoom;

    /**
     * @var moziConfVirtualExtraSetting
     */
    public $moziConfVirtualExtraSetting;

    /**
     * @example 1
     *
     * @var int
     */
    public $muteOnJoin;

    /**
     * @example 1
     *
     * @var int
     */
    public $screenShareForbidden;
    protected $_name = [
        'cohostUserIds'               => 'CohostUserIds',
        'confAllowedCorpId'           => 'ConfAllowedCorpId',
        'hostUserId'                  => 'HostUserId',
        'lockRoom'                    => 'LockRoom',
        'moziConfVirtualExtraSetting' => 'MoziConfVirtualExtraSetting',
        'muteOnJoin'                  => 'MuteOnJoin',
        'screenShareForbidden'        => 'ScreenShareForbidden',
    ];

    public function validate()
    {
    }

    public function toMap()
    {
        $res = [];
        if (null !== $this->cohostUserIds) {
            $res['CohostUserIds'] = $this->cohostUserIds;
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
        if (null !== $this->moziConfVirtualExtraSetting) {
            $res['MoziConfVirtualExtraSetting'] = null !== $this->moziConfVirtualExtraSetting ? $this->moziConfVirtualExtraSetting->toMap() : null;
        }
        if (null !== $this->muteOnJoin) {
            $res['MuteOnJoin'] = $this->muteOnJoin;
        }
        if (null !== $this->screenShareForbidden) {
            $res['ScreenShareForbidden'] = $this->screenShareForbidden;
        }

        return $res;
    }

    /**
     * @param array $map
     *
     * @return scheduleConfSettingModel
     */
    public static function fromMap($map = [])
    {
        $model = new self();
        if (isset($map['CohostUserIds'])) {
            if (!empty($map['CohostUserIds'])) {
                $model->cohostUserIds = $map['CohostUserIds'];
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
