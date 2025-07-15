<?php

// This file is auto-generated, don't edit it. Thanks.

namespace AlibabaCloud\SDK\Live\V20161101\Models\DescribeLivePrivateLineAreasResponseBody;

use AlibabaCloud\SDK\Live\V20161101\Models\DescribeLivePrivateLineAreasResponseBody\liveAreasList\liveArea;
use AlibabaCloud\Tea\Model;

class liveAreasList extends Model
{
    /**
     * @var liveArea[]
     */
    public $liveArea;
    protected $_name = [
        'liveArea' => 'LiveArea',
    ];

    public function validate() {}

    public function toMap()
    {
        $res = [];
        if (null !== $this->liveArea) {
            $res['LiveArea'] = [];
            if (null !== $this->liveArea && \is_array($this->liveArea)) {
                $n = 0;
                foreach ($this->liveArea as $item) {
                    $res['LiveArea'][$n++] = null !== $item ? $item->toMap() : $item;
                }
            }
        }

        return $res;
    }

    /**
     * @param array $map
     *
     * @return liveAreasList
     */
    public static function fromMap($map = [])
    {
        $model = new self();
        if (isset($map['LiveArea'])) {
            if (!empty($map['LiveArea'])) {
                $model->liveArea = [];
                $n = 0;
                foreach ($map['LiveArea'] as $item) {
                    $model->liveArea[$n++] = null !== $item ? liveArea::fromMap($item) : $item;
                }
            }
        }

        return $model;
    }
}
