<?php

// This file is auto-generated, don't edit it. Thanks.

namespace AlibabaCloud\SDK\Videorecog\V20200320\Models;

use AlibabaCloud\Tea\Model;

class RecognizeVideoCastCrewListShrinkRequest extends Model
{
    /**
     * @var string
     */
    public $paramsShrink;

    /**
     * @example https://shanghai.oss-cn-shanghai.aliyuncs.com/download/xxxx.mp4
     *
     * @var string
     */
    public $videoUrl;
    protected $_name = [
        'paramsShrink' => 'Params',
        'videoUrl'     => 'VideoUrl',
    ];

    public function validate()
    {
    }

    public function toMap()
    {
        $res = [];
        if (null !== $this->paramsShrink) {
            $res['Params'] = $this->paramsShrink;
        }
        if (null !== $this->videoUrl) {
            $res['VideoUrl'] = $this->videoUrl;
        }

        return $res;
    }

    /**
     * @param array $map
     *
     * @return RecognizeVideoCastCrewListShrinkRequest
     */
    public static function fromMap($map = [])
    {
        $model = new self();
        if (isset($map['Params'])) {
            $model->paramsShrink = $map['Params'];
        }
        if (isset($map['VideoUrl'])) {
            $model->videoUrl = $map['VideoUrl'];
        }

        return $model;
    }
}
