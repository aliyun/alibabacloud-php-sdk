<?php

// This file is auto-generated, don't edit it. Thanks.

namespace AlibabaCloud\SDK\Rtc\V20180111\Models;

use AlibabaCloud\Tea\Model;

class DescribeRtcUserListRequest extends Model
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
    public $startTime;

    /**
     * @var string
     */
    public $endTime;

    /**
     * @var string
     */
    public $appId;

    /**
     * @var string
     */
    public $channelId;

    /**
     * @var string
     */
    public $pubUser;

    /**
     * @var string
     */
    public $subUser;
    protected $_name = [
        'ownerId'   => 'OwnerId',
        'showLog'   => 'ShowLog',
        'startTime' => 'StartTime',
        'endTime'   => 'EndTime',
        'appId'     => 'AppId',
        'channelId' => 'ChannelId',
        'pubUser'   => 'PubUser',
        'subUser'   => 'SubUser',
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
        if (null !== $this->startTime) {
            $res['StartTime'] = $this->startTime;
        }
        if (null !== $this->endTime) {
            $res['EndTime'] = $this->endTime;
        }
        if (null !== $this->appId) {
            $res['AppId'] = $this->appId;
        }
        if (null !== $this->channelId) {
            $res['ChannelId'] = $this->channelId;
        }
        if (null !== $this->pubUser) {
            $res['PubUser'] = $this->pubUser;
        }
        if (null !== $this->subUser) {
            $res['SubUser'] = $this->subUser;
        }

        return $res;
    }

    /**
     * @param array $map
     *
     * @return DescribeRtcUserListRequest
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
        if (isset($map['StartTime'])) {
            $model->startTime = $map['StartTime'];
        }
        if (isset($map['EndTime'])) {
            $model->endTime = $map['EndTime'];
        }
        if (isset($map['AppId'])) {
            $model->appId = $map['AppId'];
        }
        if (isset($map['ChannelId'])) {
            $model->channelId = $map['ChannelId'];
        }
        if (isset($map['PubUser'])) {
            $model->pubUser = $map['PubUser'];
        }
        if (isset($map['SubUser'])) {
            $model->subUser = $map['SubUser'];
        }

        return $model;
    }
}
