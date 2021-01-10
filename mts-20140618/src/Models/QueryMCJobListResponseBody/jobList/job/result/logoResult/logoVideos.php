<?php

// This file is auto-generated, don't edit it. Thanks.

namespace AlibabaCloud\SDK\Mts\V20140618\Models\QueryMCJobListResponseBody\jobList\job\result\logoResult;

use AlibabaCloud\SDK\Mts\V20140618\Models\QueryMCJobListResponseBody\jobList\job\result\logoResult\logoVideos\logoVideo;
use AlibabaCloud\Tea\Model;

class logoVideos extends Model
{
    /**
     * @var logoVideo[]
     */
    public $logoVideo;
    protected $_name = [
        'logoVideo' => 'LogoVideo',
    ];

    public function validate()
    {
    }

    public function toMap()
    {
        $res = [];
        if (null !== $this->logoVideo) {
            $res['LogoVideo'] = [];
            if (null !== $this->logoVideo && \is_array($this->logoVideo)) {
                $n = 0;
                foreach ($this->logoVideo as $item) {
                    $res['LogoVideo'][$n++] = null !== $item ? $item->toMap() : $item;
                }
            }
        }

        return $res;
    }

    /**
     * @param array $map
     *
     * @return logoVideos
     */
    public static function fromMap($map = [])
    {
        $model = new self();
        if (isset($map['LogoVideo'])) {
            if (!empty($map['LogoVideo'])) {
                $model->logoVideo = [];
                $n                = 0;
                foreach ($map['LogoVideo'] as $item) {
                    $model->logoVideo[$n++] = null !== $item ? logoVideo::fromMap($item) : $item;
                }
            }
        }

        return $model;
    }
}
