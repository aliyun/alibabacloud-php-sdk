<?php

// This file is auto-generated, don't edit it. Thanks.

namespace AlibabaCloud\SDK\Live\V20161101\Models\DescribeLiveStreamWatermarksResponseBody;

use AlibabaCloud\SDK\Live\V20161101\Models\DescribeLiveStreamWatermarksResponseBody\watermarkList\watermark;
use AlibabaCloud\Tea\Model;

class watermarkList extends Model
{
    /**
     * @var watermark[]
     */
    public $watermark;
    protected $_name = [
        'watermark' => 'Watermark',
    ];

    public function validate()
    {
    }

    public function toMap()
    {
        $res = [];
        if (null !== $this->watermark) {
            $res['Watermark'] = [];
            if (null !== $this->watermark && \is_array($this->watermark)) {
                $n = 0;
                foreach ($this->watermark as $item) {
                    $res['Watermark'][$n++] = null !== $item ? $item->toMap() : $item;
                }
            }
        }

        return $res;
    }

    /**
     * @param array $map
     *
     * @return watermarkList
     */
    public static function fromMap($map = [])
    {
        $model = new self();
        if (isset($map['Watermark'])) {
            if (!empty($map['Watermark'])) {
                $model->watermark = [];
                $n                = 0;
                foreach ($map['Watermark'] as $item) {
                    $model->watermark[$n++] = null !== $item ? watermark::fromMap($item) : $item;
                }
            }
        }

        return $model;
    }
}
