<?php

// This file is auto-generated, don't edit it. Thanks.

namespace AlibabaCloud\SDK\AiMiaoBi\V20230801\Models\AsyncUploadVideoRequest;

use AlibabaCloud\Tea\Model;

class sourceVideos extends Model
{
    /**
     * @var string
     */
    public $videoExtraInfo;

    /**
     * @description This parameter is required.
     *
     * @example 123.mp4
     *
     * @var string
     */
    public $videoName;

    /**
     * @description This parameter is required.
     *
     * @var string
     */
    public $videoUrl;
    protected $_name = [
        'videoExtraInfo' => 'VideoExtraInfo',
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
     * @return sourceVideos
     */
    public static function fromMap($map = [])
    {
        $model = new self();
        if (isset($map['VideoExtraInfo'])) {
            $model->videoExtraInfo = $map['VideoExtraInfo'];
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
