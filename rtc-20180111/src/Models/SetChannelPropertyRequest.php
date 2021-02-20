<?php

// This file is auto-generated, don't edit it. Thanks.

namespace AlibabaCloud\SDK\Rtc\V20180111\Models;

use AlibabaCloud\Tea\Model;

class SetChannelPropertyRequest extends Model
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
    public $channelId;

    /**
     * @var int
     */
    public $maxUserNum;

    /**
     * @var int
     */
    public $startTime;

    /**
     * @var int
     */
    public $duration;

    /**
     * @var string
     */
    public $priority;

    /**
     * @var string
     */
    public $topics;
    protected $_name = [
        'ownerId'    => 'OwnerId',
        'showLog'    => 'ShowLog',
        'appId'      => 'AppId',
        'channelId'  => 'ChannelId',
        'maxUserNum' => 'MaxUserNum',
        'startTime'  => 'StartTime',
        'duration'   => 'Duration',
        'priority'   => 'Priority',
        'topics'     => 'Topics',
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
        if (null !== $this->channelId) {
            $res['ChannelId'] = $this->channelId;
        }
        if (null !== $this->maxUserNum) {
            $res['MaxUserNum'] = $this->maxUserNum;
        }
        if (null !== $this->startTime) {
            $res['StartTime'] = $this->startTime;
        }
        if (null !== $this->duration) {
            $res['Duration'] = $this->duration;
        }
        if (null !== $this->priority) {
            $res['Priority'] = $this->priority;
        }
        if (null !== $this->topics) {
            $res['Topics'] = $this->topics;
        }

        return $res;
    }

    /**
     * @param array $map
     *
     * @return SetChannelPropertyRequest
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
        if (isset($map['ChannelId'])) {
            $model->channelId = $map['ChannelId'];
        }
        if (isset($map['MaxUserNum'])) {
            $model->maxUserNum = $map['MaxUserNum'];
        }
        if (isset($map['StartTime'])) {
            $model->startTime = $map['StartTime'];
        }
        if (isset($map['Duration'])) {
            $model->duration = $map['Duration'];
        }
        if (isset($map['Priority'])) {
            $model->priority = $map['Priority'];
        }
        if (isset($map['Topics'])) {
            $model->topics = $map['Topics'];
        }

        return $model;
    }
}
