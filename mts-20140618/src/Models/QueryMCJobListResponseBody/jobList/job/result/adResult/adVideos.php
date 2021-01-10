<?php

// This file is auto-generated, don't edit it. Thanks.

namespace AlibabaCloud\SDK\Mts\V20140618\Models\QueryMCJobListResponseBody\jobList\job\result\adResult;

use AlibabaCloud\SDK\Mts\V20140618\Models\QueryMCJobListResponseBody\jobList\job\result\adResult\adVideos\adVideo;
use AlibabaCloud\Tea\Model;

class adVideos extends Model
{
    /**
     * @var adVideo[]
     */
    public $adVideo;
    protected $_name = [
        'adVideo' => 'AdVideo',
    ];

    public function validate()
    {
    }

    public function toMap()
    {
        $res = [];
        if (null !== $this->adVideo) {
            $res['AdVideo'] = [];
            if (null !== $this->adVideo && \is_array($this->adVideo)) {
                $n = 0;
                foreach ($this->adVideo as $item) {
                    $res['AdVideo'][$n++] = null !== $item ? $item->toMap() : $item;
                }
            }
        }

        return $res;
    }

    /**
     * @param array $map
     *
     * @return adVideos
     */
    public static function fromMap($map = [])
    {
        $model = new self();
        if (isset($map['AdVideo'])) {
            if (!empty($map['AdVideo'])) {
                $model->adVideo = [];
                $n              = 0;
                foreach ($map['AdVideo'] as $item) {
                    $model->adVideo[$n++] = null !== $item ? adVideo::fromMap($item) : $item;
                }
            }
        }

        return $model;
    }
}
