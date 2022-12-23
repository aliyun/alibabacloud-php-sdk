<?php

// This file is auto-generated, don't edit it. Thanks.

namespace AlibabaCloud\SDK\Vod\V20170321\Models\GetVideoPlayAuthResponseBody;

use AlibabaCloud\Tea\Model;

class videoMeta extends Model
{
    /**
     * @description The thumbnail URL of the audio or video file.
     *
     * @example https://example.aliyundoc.com/****.jpg
     *
     * @var string
     */
    public $coverURL;

    /**
     * @description The duration of the audio or video file. Unit: seconds.
     *
     * @example 120.0
     *
     * @var float
     */
    public $duration;

    /**
     * @description The status of the audio or video file. For more information about the value range and description, see the [Status](~~52839~~) table.
     *
     * @example Normal
     *
     * @var string
     */
    public $status;

    /**
     * @description The title of the audio or video file.
     *
     * @example VOD
     *
     * @var string
     */
    public $title;

    /**
     * @description The ID of the audio or video file.
     *
     * @example dfde02284a5c46622a097adaf44a****
     *
     * @var string
     */
    public $videoId;
    protected $_name = [
        'coverURL' => 'CoverURL',
        'duration' => 'Duration',
        'status'   => 'Status',
        'title'    => 'Title',
        'videoId'  => 'VideoId',
    ];

    public function validate()
    {
    }

    public function toMap()
    {
        $res = [];
        if (null !== $this->coverURL) {
            $res['CoverURL'] = $this->coverURL;
        }
        if (null !== $this->duration) {
            $res['Duration'] = $this->duration;
        }
        if (null !== $this->status) {
            $res['Status'] = $this->status;
        }
        if (null !== $this->title) {
            $res['Title'] = $this->title;
        }
        if (null !== $this->videoId) {
            $res['VideoId'] = $this->videoId;
        }

        return $res;
    }

    /**
     * @param array $map
     *
     * @return videoMeta
     */
    public static function fromMap($map = [])
    {
        $model = new self();
        if (isset($map['CoverURL'])) {
            $model->coverURL = $map['CoverURL'];
        }
        if (isset($map['Duration'])) {
            $model->duration = $map['Duration'];
        }
        if (isset($map['Status'])) {
            $model->status = $map['Status'];
        }
        if (isset($map['Title'])) {
            $model->title = $map['Title'];
        }
        if (isset($map['VideoId'])) {
            $model->videoId = $map['VideoId'];
        }

        return $model;
    }
}
