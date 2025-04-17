<?php

// This file is auto-generated, don't edit it. Thanks.

namespace AlibabaCloud\SDK\Vod\V20170321\Models\ListLiveRecordVideoResponseBody\liveRecordVideoList;

use AlibabaCloud\Dara\Model;
use AlibabaCloud\SDK\Vod\V20170321\Models\ListLiveRecordVideoResponseBody\liveRecordVideoList\liveRecordVideo\video;

class liveRecordVideo extends Model
{
    /**
     * @var string
     */
    public $appName;

    /**
     * @var string
     */
    public $domainName;

    /**
     * @var string
     */
    public $playlistId;

    /**
     * @var string
     */
    public $recordEndTime;

    /**
     * @var string
     */
    public $recordStartTime;

    /**
     * @var string
     */
    public $streamName;

    /**
     * @var video
     */
    public $video;
    protected $_name = [
        'appName' => 'AppName',
        'domainName' => 'DomainName',
        'playlistId' => 'PlaylistId',
        'recordEndTime' => 'RecordEndTime',
        'recordStartTime' => 'RecordStartTime',
        'streamName' => 'StreamName',
        'video' => 'Video',
    ];

    public function validate()
    {
        if (null !== $this->video) {
            $this->video->validate();
        }
        parent::validate();
    }

    public function toArray($noStream = false)
    {
        $res = [];
        if (null !== $this->appName) {
            $res['AppName'] = $this->appName;
        }

        if (null !== $this->domainName) {
            $res['DomainName'] = $this->domainName;
        }

        if (null !== $this->playlistId) {
            $res['PlaylistId'] = $this->playlistId;
        }

        if (null !== $this->recordEndTime) {
            $res['RecordEndTime'] = $this->recordEndTime;
        }

        if (null !== $this->recordStartTime) {
            $res['RecordStartTime'] = $this->recordStartTime;
        }

        if (null !== $this->streamName) {
            $res['StreamName'] = $this->streamName;
        }

        if (null !== $this->video) {
            $res['Video'] = null !== $this->video ? $this->video->toArray($noStream) : $this->video;
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
        if (isset($map['AppName'])) {
            $model->appName = $map['AppName'];
        }

        if (isset($map['DomainName'])) {
            $model->domainName = $map['DomainName'];
        }

        if (isset($map['PlaylistId'])) {
            $model->playlistId = $map['PlaylistId'];
        }

        if (isset($map['RecordEndTime'])) {
            $model->recordEndTime = $map['RecordEndTime'];
        }

        if (isset($map['RecordStartTime'])) {
            $model->recordStartTime = $map['RecordStartTime'];
        }

        if (isset($map['StreamName'])) {
            $model->streamName = $map['StreamName'];
        }

        if (isset($map['Video'])) {
            $model->video = video::fromMap($map['Video']);
        }

        return $model;
    }
}
