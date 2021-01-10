<?php

// This file is auto-generated, don't edit it. Thanks.

namespace AlibabaCloud\SDK\Mts\V20140618\Models\QueryMCJobListResponseBody\jobList\job\result\liveResult;

use AlibabaCloud\SDK\Mts\V20140618\Models\QueryMCJobListResponseBody\jobList\job\result\liveResult\liveImages\liveImage;
use AlibabaCloud\Tea\Model;

class liveImages extends Model
{
    /**
     * @var liveImage[]
     */
    public $liveImage;
    protected $_name = [
        'liveImage' => 'LiveImage',
    ];

    public function validate()
    {
    }

    public function toMap()
    {
        $res = [];
        if (null !== $this->liveImage) {
            $res['LiveImage'] = [];
            if (null !== $this->liveImage && \is_array($this->liveImage)) {
                $n = 0;
                foreach ($this->liveImage as $item) {
                    $res['LiveImage'][$n++] = null !== $item ? $item->toMap() : $item;
                }
            }
        }

        return $res;
    }

    /**
     * @param array $map
     *
     * @return liveImages
     */
    public static function fromMap($map = [])
    {
        $model = new self();
        if (isset($map['LiveImage'])) {
            if (!empty($map['LiveImage'])) {
                $model->liveImage = [];
                $n                = 0;
                foreach ($map['LiveImage'] as $item) {
                    $model->liveImage[$n++] = null !== $item ? liveImage::fromMap($item) : $item;
                }
            }
        }

        return $model;
    }
}
