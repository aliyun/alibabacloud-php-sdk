<?php

// This file is auto-generated, don't edit it. Thanks.

namespace AlibabaCloud\SDK\Mts\V20140618\Models\RegisterMediaDetailPersonResponseBody;

use AlibabaCloud\SDK\Mts\V20140618\Models\RegisterMediaDetailPersonResponseBody\failedImages\failedImage;
use AlibabaCloud\Tea\Model;

class failedImages extends Model
{
    /**
     * @var failedImage[]
     */
    public $failedImage;
    protected $_name = [
        'failedImage' => 'FailedImage',
    ];

    public function validate()
    {
    }

    public function toMap()
    {
        $res = [];
        if (null !== $this->failedImage) {
            $res['FailedImage'] = [];
            if (null !== $this->failedImage && \is_array($this->failedImage)) {
                $n = 0;
                foreach ($this->failedImage as $item) {
                    $res['FailedImage'][$n++] = null !== $item ? $item->toMap() : $item;
                }
            }
        }

        return $res;
    }

    /**
     * @param array $map
     *
     * @return failedImages
     */
    public static function fromMap($map = [])
    {
        $model = new self();
        if (isset($map['FailedImage'])) {
            if (!empty($map['FailedImage'])) {
                $model->failedImage = [];
                $n                  = 0;
                foreach ($map['FailedImage'] as $item) {
                    $model->failedImage[$n++] = null !== $item ? failedImage::fromMap($item) : $item;
                }
            }
        }

        return $model;
    }
}
