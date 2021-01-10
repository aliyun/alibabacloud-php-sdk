<?php

// This file is auto-generated, don't edit it. Thanks.

namespace AlibabaCloud\SDK\Mts\V20140618\Models\QueryMCJobListResponseBody\jobList\job\result\pornResult;

use AlibabaCloud\SDK\Mts\V20140618\Models\QueryMCJobListResponseBody\jobList\job\result\pornResult\pornVideos\pornVideo;
use AlibabaCloud\Tea\Model;

class pornVideos extends Model
{
    /**
     * @var pornVideo[]
     */
    public $pornVideo;
    protected $_name = [
        'pornVideo' => 'PornVideo',
    ];

    public function validate()
    {
    }

    public function toMap()
    {
        $res = [];
        if (null !== $this->pornVideo) {
            $res['PornVideo'] = [];
            if (null !== $this->pornVideo && \is_array($this->pornVideo)) {
                $n = 0;
                foreach ($this->pornVideo as $item) {
                    $res['PornVideo'][$n++] = null !== $item ? $item->toMap() : $item;
                }
            }
        }

        return $res;
    }

    /**
     * @param array $map
     *
     * @return pornVideos
     */
    public static function fromMap($map = [])
    {
        $model = new self();
        if (isset($map['PornVideo'])) {
            if (!empty($map['PornVideo'])) {
                $model->pornVideo = [];
                $n                = 0;
                foreach ($map['PornVideo'] as $item) {
                    $model->pornVideo[$n++] = null !== $item ? pornVideo::fromMap($item) : $item;
                }
            }
        }

        return $model;
    }
}
