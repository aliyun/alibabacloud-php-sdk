<?php

// This file is auto-generated, don't edit it. Thanks.

namespace AlibabaCloud\SDK\Mts\V20140618\Models\QueryMCJobListResponseBody\jobList\job\result\qrcodeResult;

use AlibabaCloud\SDK\Mts\V20140618\Models\QueryMCJobListResponseBody\jobList\job\result\qrcodeResult\qrcodeVideos\qrcodeVideo;
use AlibabaCloud\Tea\Model;

class qrcodeVideos extends Model
{
    /**
     * @var qrcodeVideo[]
     */
    public $qrcodeVideo;
    protected $_name = [
        'qrcodeVideo' => 'QrcodeVideo',
    ];

    public function validate()
    {
    }

    public function toMap()
    {
        $res = [];
        if (null !== $this->qrcodeVideo) {
            $res['QrcodeVideo'] = [];
            if (null !== $this->qrcodeVideo && \is_array($this->qrcodeVideo)) {
                $n = 0;
                foreach ($this->qrcodeVideo as $item) {
                    $res['QrcodeVideo'][$n++] = null !== $item ? $item->toMap() : $item;
                }
            }
        }

        return $res;
    }

    /**
     * @param array $map
     *
     * @return qrcodeVideos
     */
    public static function fromMap($map = [])
    {
        $model = new self();
        if (isset($map['QrcodeVideo'])) {
            if (!empty($map['QrcodeVideo'])) {
                $model->qrcodeVideo = [];
                $n                  = 0;
                foreach ($map['QrcodeVideo'] as $item) {
                    $model->qrcodeVideo[$n++] = null !== $item ? qrcodeVideo::fromMap($item) : $item;
                }
            }
        }

        return $model;
    }
}
