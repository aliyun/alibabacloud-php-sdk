<?php

// This file is auto-generated, don't edit it. Thanks.

namespace AlibabaCloud\SDK\Mts\V20140618\Models\QueryMCJobListResponseBody\jobList\job\result\qrcodeResult;

use AlibabaCloud\SDK\Mts\V20140618\Models\QueryMCJobListResponseBody\jobList\job\result\qrcodeResult\qrcodeImages\qrcodeImage;
use AlibabaCloud\Tea\Model;

class qrcodeImages extends Model
{
    /**
     * @var qrcodeImage[]
     */
    public $qrcodeImage;
    protected $_name = [
        'qrcodeImage' => 'QrcodeImage',
    ];

    public function validate()
    {
    }

    public function toMap()
    {
        $res = [];
        if (null !== $this->qrcodeImage) {
            $res['QrcodeImage'] = [];
            if (null !== $this->qrcodeImage && \is_array($this->qrcodeImage)) {
                $n = 0;
                foreach ($this->qrcodeImage as $item) {
                    $res['QrcodeImage'][$n++] = null !== $item ? $item->toMap() : $item;
                }
            }
        }

        return $res;
    }

    /**
     * @param array $map
     *
     * @return qrcodeImages
     */
    public static function fromMap($map = [])
    {
        $model = new self();
        if (isset($map['QrcodeImage'])) {
            if (!empty($map['QrcodeImage'])) {
                $model->qrcodeImage = [];
                $n                  = 0;
                foreach ($map['QrcodeImage'] as $item) {
                    $model->qrcodeImage[$n++] = null !== $item ? qrcodeImage::fromMap($item) : $item;
                }
            }
        }

        return $model;
    }
}
