<?php

// This file is auto-generated, don't edit it. Thanks.

namespace AlibabaCloud\SDK\Live\V20161101\Models\DescribeCasterConfigResponseBody\transcodeConfig;

use AlibabaCloud\SDK\Live\V20161101\Models\DescribeCasterConfigResponseBody\transcodeConfig\customParams\video;
use AlibabaCloud\Tea\Model;

class customParams extends Model
{
    /**
     * @description The video parameters.
     *
     * @var video
     */
    public $video;
    protected $_name = [
        'video' => 'video',
    ];

    public function validate() {}

    public function toMap()
    {
        $res = [];
        if (null !== $this->video) {
            $res['video'] = null !== $this->video ? $this->video->toMap() : null;
        }

        return $res;
    }

    /**
     * @param array $map
     *
     * @return customParams
     */
    public static function fromMap($map = [])
    {
        $model = new self();
        if (isset($map['video'])) {
            $model->video = video::fromMap($map['video']);
        }

        return $model;
    }
}
