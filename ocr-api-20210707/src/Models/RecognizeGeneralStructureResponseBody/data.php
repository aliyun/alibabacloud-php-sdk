<?php

// This file is auto-generated, don't edit it. Thanks.

namespace AlibabaCloud\SDK\Ocrapi\V20210707\Models\RecognizeGeneralStructureResponseBody;

use AlibabaCloud\Dara\Model;
use AlibabaCloud\SDK\Ocrapi\V20210707\Models\RecognizeGeneralStructureResponseBody\data\subImages;

class data extends Model
{
    /**
     * @var int
     */
    public $height;

    /**
     * @var int
     */
    public $subImageCount;

    /**
     * @var subImages[]
     */
    public $subImages;

    /**
     * @var int
     */
    public $width;
    protected $_name = [
        'height' => 'Height',
        'subImageCount' => 'SubImageCount',
        'subImages' => 'SubImages',
        'width' => 'Width',
    ];

    public function validate()
    {
        if (\is_array($this->subImages)) {
            Model::validateArray($this->subImages);
        }
        parent::validate();
    }

    public function toArray($noStream = false)
    {
        $res = [];
        if (null !== $this->height) {
            $res['Height'] = $this->height;
        }

        if (null !== $this->subImageCount) {
            $res['SubImageCount'] = $this->subImageCount;
        }

        if (null !== $this->subImages) {
            if (\is_array($this->subImages)) {
                $res['SubImages'] = [];
                $n1 = 0;
                foreach ($this->subImages as $item1) {
                    $res['SubImages'][$n1++] = null !== $item1 ? $item1->toArray($noStream) : $item1;
                }
            }
        }

        if (null !== $this->width) {
            $res['Width'] = $this->width;
        }

        return $res;
    }

    public function toMap($noStream = false)
    {
        return $this->toArray($noStream);
    }

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
                $n1 = 0;
                foreach ($map['SubImages'] as $item1) {
                    $model->subImages[$n1++] = subImages::fromMap($item1);
                }
            }
        }

        if (isset($map['Width'])) {
            $model->width = $map['Width'];
        }

        return $model;
    }
}
