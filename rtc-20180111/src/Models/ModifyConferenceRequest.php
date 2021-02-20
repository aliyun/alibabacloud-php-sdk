<?php

// This file is auto-generated, don't edit it. Thanks.

namespace AlibabaCloud\SDK\Rtc\V20180111\Models;

use AlibabaCloud\Tea\Model;

class ModifyConferenceRequest extends Model
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
     * @var string
     */
    public $conferenceName;

    /**
     * @var string
     */
    public $startTime;

    /**
     * @var string
     */
    public $type;

    /**
     * @var int
     */
    public $remindNotice;
    protected $_name = [
        'ownerId'        => 'OwnerId',
        'showLog'        => 'ShowLog',
        'appId'          => 'AppId',
        'conferenceId'   => 'ConferenceId',
        'conferenceName' => 'ConferenceName',
        'startTime'      => 'StartTime',
        'type'           => 'Type',
        'remindNotice'   => 'RemindNotice',
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
        if (null !== $this->conferenceName) {
            $res['ConferenceName'] = $this->conferenceName;
        }
        if (null !== $this->startTime) {
            $res['StartTime'] = $this->startTime;
        }
        if (null !== $this->type) {
            $res['Type'] = $this->type;
        }
        if (null !== $this->remindNotice) {
            $res['RemindNotice'] = $this->remindNotice;
        }

        return $res;
    }

    /**
     * @param array $map
     *
     * @return ModifyConferenceRequest
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
        if (isset($map['ConferenceName'])) {
            $model->conferenceName = $map['ConferenceName'];
        }
        if (isset($map['StartTime'])) {
            $model->startTime = $map['StartTime'];
        }
        if (isset($map['Type'])) {
            $model->type = $map['Type'];
        }
        if (isset($map['RemindNotice'])) {
            $model->remindNotice = $map['RemindNotice'];
        }

        return $model;
    }
}
