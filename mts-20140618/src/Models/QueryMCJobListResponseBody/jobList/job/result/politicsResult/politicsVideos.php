<?php

// This file is auto-generated, don't edit it. Thanks.

namespace AlibabaCloud\SDK\Mts\V20140618\Models\QueryMCJobListResponseBody\jobList\job\result\politicsResult;

use AlibabaCloud\SDK\Mts\V20140618\Models\QueryMCJobListResponseBody\jobList\job\result\politicsResult\politicsVideos\politicsVideo;
use AlibabaCloud\Tea\Model;

class politicsVideos extends Model
{
    /**
     * @var politicsVideo[]
     */
    public $politicsVideo;
    protected $_name = [
        'politicsVideo' => 'PoliticsVideo',
    ];

    public function validate()
    {
    }

    public function toMap()
    {
        $res = [];
        if (null !== $this->politicsVideo) {
            $res['PoliticsVideo'] = [];
            if (null !== $this->politicsVideo && \is_array($this->politicsVideo)) {
                $n = 0;
                foreach ($this->politicsVideo as $item) {
                    $res['PoliticsVideo'][$n++] = null !== $item ? $item->toMap() : $item;
                }
            }
        }

        return $res;
    }

    /**
     * @param array $map
     *
     * @return politicsVideos
     */
    public static function fromMap($map = [])
    {
        $model = new self();
        if (isset($map['PoliticsVideo'])) {
            if (!empty($map['PoliticsVideo'])) {
                $model->politicsVideo = [];
                $n                    = 0;
                foreach ($map['PoliticsVideo'] as $item) {
                    $model->politicsVideo[$n++] = null !== $item ? politicsVideo::fromMap($item) : $item;
                }
            }
        }

        return $model;
    }
}
