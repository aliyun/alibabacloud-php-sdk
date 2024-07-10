<?php

// This file is auto-generated, don't edit it. Thanks.

namespace AlibabaCloud\SDK\Ocrapi\V20210707\Models\RecognizeGeneralStructureResponseBody;

use AlibabaCloud\SDK\Ocrapi\V20210707\Models\RecognizeGeneralStructureResponseBody\data\subImages;
use AlibabaCloud\Tea\Model;

class data extends Model
{
    /**
     * @example 2000
     *
     * @var int
     */
    public $height;

    /**
     * @example 1
     *
     * @var int
     */
    public $subImageCount;

    /**
     * @var subImages[]
     */
    public $subImages;

    /**
     * @example 1000
     *
     * @var int
     */
    public $width;
    protected $_name = [
        'height'        => 'Height',
        'subImageCount' => 'SubImageCount',
        'subImages'     => 'SubImages',
        'width'         => 'Width',
    ];

    public function validate()
    {
    }

    public function toMap()
    {
        $res = [];
        if (null !== $this->height) {
            $res['Height'] = $this->height;
        }
        if (null !== $this->subImageCount) {
            $res['SubImageCount'] = $this->subImageCount;
        }
        if (null !== $this->subImages) {
            $res['SubImages'] = [];
            if (null !== $this->subImages && \is_array($this->subImages)) {
                $n = 0;
                foreach ($this->subImages as $item) {
                    $res['SubImages'][$n++] = null !== $item ? $item->toMap() : $item;
                }
            }
        }
        if (null !== $this->width) {
            $res['Width'] = $this->width;
        }

        return $res;
    }

    /**
     * @param array $map
     *
     * @return data
     */
    public static function fromMap($map = [])
    {
        $model = new self();
        if (isset($map['Height'])) {
            $model->height = $map['Height'];
        }
        if (isset($map['SubImageCount'])) {
            $model->subImageCount = $map['SubImageCount'];
        }
        if (isset($map['SubImages'])) {
            if (!empty($map['SubImages'])) {
                $model->subImages = [];
                $n                = 0;
                foreach ($map['SubImages'] as $item) {
                    $model->subImages[$n++] = null !== $item ? subImages::fromMap($item) : $item;
                }
            }
        }
        if (isset($map['Width'])) {
            $model->width = $map['Width'];
        }

        return $model;
    }
}
