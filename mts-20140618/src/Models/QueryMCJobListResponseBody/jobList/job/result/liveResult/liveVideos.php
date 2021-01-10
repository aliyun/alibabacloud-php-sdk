<?php

// This file is auto-generated, don't edit it. Thanks.

namespace AlibabaCloud\SDK\Mts\V20140618\Models\QueryMCJobListResponseBody\jobList\job\result\liveResult;

use AlibabaCloud\SDK\Mts\V20140618\Models\QueryMCJobListResponseBody\jobList\job\result\liveResult\liveVideos\liveVideo;
use AlibabaCloud\Tea\Model;

class liveVideos extends Model
{
    /**
     * @var liveVideo[]
     */
    public $liveVideo;
    protected $_name = [
        'liveVideo' => 'LiveVideo',
    ];

    public function validate()
    {
    }

    public function toMap()
    {
        $res = [];
        if (null !== $this->liveVideo) {
            $res['LiveVideo'] = [];
            if (null !== $this->liveVideo && \is_array($this->liveVideo)) {
                $n = 0;
                foreach ($this->liveVideo as $item) {
                    $res['LiveVideo'][$n++] = null !== $item ? $item->toMap() : $item;
                }
            }
        }

        return $res;
    }

    /**
     * @param array $map
     *
     * @return liveVideos
     */
    public static function fromMap($map = [])
    {
        $model = new self();
        if (isset($map['LiveVideo'])) {
            if (!empty($map['LiveVideo'])) {
                $model->liveVideo = [];
                $n                = 0;
                foreach ($map['LiveVideo'] as $item) {
                    $model->liveVideo[$n++] = null !== $item ? liveVideo::fromMap($item) : $item;
                }
            }
        }

        return $model;
    }
}
