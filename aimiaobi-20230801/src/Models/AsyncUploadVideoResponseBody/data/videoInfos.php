<?php

// This file is auto-generated, don't edit it. Thanks.

namespace AlibabaCloud\SDK\AiMiaoBi\V20230801\Models\AsyncUploadVideoResponseBody\data;

use AlibabaCloud\Tea\Model;

class videoInfos extends Model
{
    /**
     * @var string
     */
    public $videoExtraInfo;

    /**
     * @example 60616fad41b171f0bb4b4531948c0102
     *
     * @var string
     */
    public $videoId;

    /**
     * @example 123.mp4
     *
     * @var string
     */
    public $videoName;

    /**
     * @example http://123.mp4
     *
     * @var string
     */
    public $videoUrl;
    protected $_name = [
        'videoExtraInfo' => 'VideoExtraInfo',
        'videoId' => 'VideoId',
        'videoName' => 'VideoName',
        'videoUrl' => 'VideoUrl',
    ];

    public function validate() {}

    public function toMap()
    {
        $res = [];
        if (null !== $this->videoExtraInfo) {
            $res['VideoExtraInfo'] = $this->videoExtraInfo;
        }
        if (null !== $this->videoId) {
            $res['VideoId'] = $this->videoId;
        }
        if (null !== $this->videoName) {
            $res['VideoName'] = $this->videoName;
        }
        if (null !== $this->videoUrl) {
            $res['VideoUrl'] = $this->videoUrl;
        }

        return $res;
    }

    /**
     * @param array $map
     *
     * @return videoInfos
     */
    public static function fromMap($map = [])
    {
        $model = new self();
        if (isset($map['VideoExtraInfo'])) {
            $model->videoExtraInfo = $map['VideoExtraInfo'];
        }
        if (isset($map['VideoId'])) {
            $model->videoId = $map['VideoId'];
        }
        if (isset($map['VideoName'])) {
            $model->videoName = $map['VideoName'];
        }
        if (isset($map['VideoUrl'])) {
            $model->videoUrl = $map['VideoUrl'];
        }

        return $model;
    }
}
