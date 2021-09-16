<?php

// This file is auto-generated, don't edit it. Thanks.

namespace AlibabaCloud\SDK\Vod\V20170321\Models\ListLiveRecordVideoResponseBody\liveRecordVideoList;

use AlibabaCloud\SDK\Vod\V20170321\Models\ListLiveRecordVideoResponseBody\liveRecordVideoList\liveRecordVideo\video;
use AlibabaCloud\Tea\Model;

class liveRecordVideo extends Model
{
    /**
     * @var string
     */
    public $appName;

    /**
     * @var string
     */
    public $playlistId;

    /**
     * @var string
     */
    public $streamName;

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
    public $domainName;

    /**
     * @var video
     */
    public $video;
    protected $_name = [
        'appName'         => 'AppName',
        'playlistId'      => 'PlaylistId',
        'streamName'      => 'StreamName',
        'recordEndTime'   => 'RecordEndTime',
        'recordStartTime' => 'RecordStartTime',
        'domainName'      => 'DomainName',
        'video'           => 'Video',
    ];

    public function validate()
    {
    }

    public function toMap()
    {
        $res = [];
        if (null !== $this->appName) {
            $res['AppName'] = $this->appName;
        }
        if (null !== $this->playlistId) {
            $res['PlaylistId'] = $this->playlistId;
        }
        if (null !== $this->streamName) {
            $res['StreamName'] = $this->streamName;
        }
        if (null !== $this->recordEndTime) {
            $res['RecordEndTime'] = $this->recordEndTime;
        }
        if (null !== $this->recordStartTime) {
            $res['RecordStartTime'] = $this->recordStartTime;
        }
        if (null !== $this->domainName) {
            $res['DomainName'] = $this->domainName;
        }
        if (null !== $this->video) {
            $res['Video'] = null !== $this->video ? $this->video->toMap() : null;
        }

        return $res;
    }

    /**
     * @param array $map
     *
     * @return liveRecordVideo
     */
    public static function fromMap($map = [])
    {
        $model = new self();
        if (isset($map['AppName'])) {
            $model->appName = $map['AppName'];
        }
        if (isset($map['PlaylistId'])) {
            $model->playlistId = $map['PlaylistId'];
        }
        if (isset($map['StreamName'])) {
            $model->streamName = $map['StreamName'];
        }
        if (isset($map['RecordEndTime'])) {
            $model->recordEndTime = $map['RecordEndTime'];
        }
        if (isset($map['RecordStartTime'])) {
            $model->recordStartTime = $map['RecordStartTime'];
        }
        if (isset($map['DomainName'])) {
            $model->domainName = $map['DomainName'];
        }
        if (isset($map['Video'])) {
            $model->video = video::fromMap($map['Video']);
        }

        return $model;
    }
}
