<?php

// This file is auto-generated, don't edit it. Thanks.

namespace AlibabaCloud\SDK\Mts\V20140618\Models\QueryMCJobListResponseBody\jobList\job\result\pornResult;

use AlibabaCloud\SDK\Mts\V20140618\Models\QueryMCJobListResponseBody\jobList\job\result\pornResult\pornImages\pornImage;
use AlibabaCloud\Tea\Model;

class pornImages extends Model
{
    /**
     * @var pornImage[]
     */
    public $pornImage;
    protected $_name = [
        'pornImage' => 'PornImage',
    ];

    public function validate()
    {
    }

    public function toMap()
    {
        $res = [];
        if (null !== $this->pornImage) {
            $res['PornImage'] = [];
            if (null !== $this->pornImage && \is_array($this->pornImage)) {
                $n = 0;
                foreach ($this->pornImage as $item) {
                    $res['PornImage'][$n++] = null !== $item ? $item->toMap() : $item;
                }
            }
        }

        return $res;
    }

    /**
     * @param array $map
     *
     * @return pornImages
     */
    public static function fromMap($map = [])
    {
        $model = new self();
        if (isset($map['PornImage'])) {
            if (!empty($map['PornImage'])) {
                $model->pornImage = [];
                $n                = 0;
                foreach ($map['PornImage'] as $item) {
                    $model->pornImage[$n++] = null !== $item ? pornImage::fromMap($item) : $item;
                }
            }
        }

        return $model;
    }
}
