<?php

// This file is auto-generated, don't edit it. Thanks.

namespace AlibabaCloud\SDK\Rtc\V20180111\Models;

use AlibabaCloud\Tea\Model;

class RemoveParticipantsRequest extends Model
{
    /**
     * @var int
     */
    public $ownerId;

    /**
     * @var string
     */
    public $showLog;

    /**
     * @var string
     */
    public $appId;

    /**
     * @var string
     */
    public $conferenceId;

    /**
     * @var string[]
     */
    public $participantIds;
    protected $_name = [
        'ownerId'        => 'OwnerId',
        'showLog'        => 'ShowLog',
        'appId'          => 'AppId',
        'conferenceId'   => 'ConferenceId',
        'participantIds' => 'ParticipantIds',
    ];

    public function validate()
    {
    }

    public function toMap()
    {
        $res = [];
        if (null !== $this->ownerId) {
            $res['OwnerId'] = $this->ownerId;
        }
        if (null !== $this->showLog) {
            $res['ShowLog'] = $this->showLog;
        }
        if (null !== $this->appId) {
            $res['AppId'] = $this->appId;
        }
        if (null !== $this->conferenceId) {
            $res['ConferenceId'] = $this->conferenceId;
        }
        if (null !== $this->participantIds) {
            $res['ParticipantIds'] = $this->participantIds;
        }

        return $res;
    }

    /**
     * @param array $map
     *
     * @return RemoveParticipantsRequest
     */
    public static function fromMap($map = [])
    {
        $model = new self();
        if (isset($map['OwnerId'])) {
            $model->ownerId = $map['OwnerId'];
        }
        if (isset($map['ShowLog'])) {
            $model->showLog = $map['ShowLog'];
        }
        if (isset($map['AppId'])) {
            $model->appId = $map['AppId'];
        }
        if (isset($map['ConferenceId'])) {
            $model->conferenceId = $map['ConferenceId'];
        }
        if (isset($map['ParticipantIds'])) {
            if (!empty($map['ParticipantIds'])) {
                $model->participantIds = $map['ParticipantIds'];
            }
        }

        return $model;
    }
}
