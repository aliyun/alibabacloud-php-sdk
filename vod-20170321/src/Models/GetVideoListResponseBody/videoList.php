<?php

// This file is auto-generated, don't edit it. Thanks.

namespace AlibabaCloud\SDK\Vod\V20170321\Models\GetVideoListResponseBody;

use AlibabaCloud\SDK\Vod\V20170321\Models\GetVideoListResponseBody\videoList\video;
use AlibabaCloud\Tea\Model;

class videoList extends Model
{
    /**
     * @var video[]
     */
    public $video;
    protected $_name = [
        'video' => 'Video',
    ];

    public function validate()
    {
    }

    public function toMap()
    {
        $res = [];
        if (null !== $this->video) {
            $res['Video'] = [];
            if (null !== $this->video && \is_array($this->video)) {
                $n = 0;
                foreach ($this->video as $item) {
                    $res['Video'][$n++] = null !== $item ? $item->toMap() : $item;
                }
            }
        }

        return $res;
    }

    /**
     * @param array $map
     *
     * @return videoList
     */
    public static function fromMap($map = [])
    {
        $model = new self();
        if (isset($map['Video'])) {
            if (!empty($map['Video'])) {
                $model->video = [];
                $n            = 0;
                foreach ($map['Video'] as $item) {
                    $model->video[$n++] = null !== $item ? video::fromMap($item) : $item;
                }
            }
        }

        return $model;
    }
}
