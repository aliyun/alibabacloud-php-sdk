<?php

// This file is auto-generated, don't edit it. Thanks.

namespace AlibabaCloud\SDK\Mts\V20140618\Models\QueryMCJobListResponseBody\jobList\job\result\terrorismResult;

use AlibabaCloud\SDK\Mts\V20140618\Models\QueryMCJobListResponseBody\jobList\job\result\terrorismResult\terrorismVideos\terrorismVideo;
use AlibabaCloud\Tea\Model;

class terrorismVideos extends Model
{
    /**
     * @var terrorismVideo[]
     */
    public $terrorismVideo;
    protected $_name = [
        'terrorismVideo' => 'TerrorismVideo',
    ];

    public function validate()
    {
    }

    public function toMap()
    {
        $res = [];
        if (null !== $this->terrorismVideo) {
            $res['TerrorismVideo'] = [];
            if (null !== $this->terrorismVideo && \is_array($this->terrorismVideo)) {
                $n = 0;
                foreach ($this->terrorismVideo as $item) {
                    $res['TerrorismVideo'][$n++] = null !== $item ? $item->toMap() : $item;
                }
            }
        }

        return $res;
    }

    /**
     * @param array $map
     *
     * @return terrorismVideos
     */
    public static function fromMap($map = [])
    {
        $model = new self();
        if (isset($map['TerrorismVideo'])) {
            if (!empty($map['TerrorismVideo'])) {
                $model->terrorismVideo = [];
                $n                     = 0;
                foreach ($map['TerrorismVideo'] as $item) {
                    $model->terrorismVideo[$n++] = null !== $item ? terrorismVideo::fromMap($item) : $item;
                }
            }
        }

        return $model;
    }
}
