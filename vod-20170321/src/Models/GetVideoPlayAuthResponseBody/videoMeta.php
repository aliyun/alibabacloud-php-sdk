<?php

// This file is auto-generated, don't edit it. Thanks.

namespace AlibabaCloud\SDK\Vod\V20170321\Models\GetVideoPlayAuthResponseBody;

use AlibabaCloud\Tea\Model;

class videoMeta extends Model
{
    /**
     * @var string
     */
    public $status;

    /**
     * @var string
     */
    public $videoId;

    /**
     * @var string
     */
    public $coverURL;

    /**
     * @var float
     */
    public $duration;

    /**
     * @var string
     */
    public $title;
    protected $_name = [
        'status'   => 'Status',
        'videoId'  => 'VideoId',
        'coverURL' => 'CoverURL',
        'duration' => 'Duration',
        'title'    => 'Title',
    ];

    public function validate()
    {
    }

    public function toMap()
    {
        $res = [];
        if (null !== $this->status) {
            $res['Status'] = $this->status;
        }
        if (null !== $this->videoId) {
            $res['VideoId'] = $this->videoId;
        }
        if (null !== $this->coverURL) {
            $res['CoverURL'] = $this->coverURL;
        }
        if (null !== $this->duration) {
            $res['Duration'] = $this->duration;
        }
        if (null !== $this->title) {
            $res['Title'] = $this->title;
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
        if (isset($map['Status'])) {
            $model->status = $map['Status'];
        }
        if (isset($map['VideoId'])) {
            $model->videoId = $map['VideoId'];
        }
        if (isset($map['CoverURL'])) {
            $model->coverURL = $map['CoverURL'];
        }
        if (isset($map['Duration'])) {
            $model->duration = $map['Duration'];
        }
        if (isset($map['Title'])) {
            $model->title = $map['Title'];
        }

        return $model;
    }
}
