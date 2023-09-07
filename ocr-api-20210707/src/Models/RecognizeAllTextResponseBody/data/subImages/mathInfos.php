<?php

// This file is auto-generated, don't edit it. Thanks.

namespace AlibabaCloud\SDK\Ocrapi\V20210707\Models\RecognizeAllTextResponseBody\data\subImages;

use AlibabaCloud\SDK\Ocrapi\V20210707\Models\RecognizeAllTextResponseBody\data\subImages\mathInfos\mathInfoPoints;
use AlibabaCloud\SDK\Ocrapi\V20210707\Models\RecognizeAllTextResponseBody\data\subImages\mathInfos\mathInfoRect;
use AlibabaCloud\Tea\Model;

class mathInfos extends Model
{
    /**
     * @var mathInfoPoints[]
     */
    public $mathInfoPoints;

    /**
     * @var mathInfoRect
     */
    public $mathInfoRect;

    /**
     * @var string
     */
    public $result;

    /**
     * @var string
     */
    public $title;
    protected $_name = [
        'mathInfoPoints' => 'MathInfoPoints',
        'mathInfoRect'   => 'MathInfoRect',
        'result'         => 'Result',
        'title'          => 'Title',
    ];

    public function validate()
    {
    }

    public function toMap()
    {
        $res = [];
        if (null !== $this->mathInfoPoints) {
            $res['MathInfoPoints'] = [];
            if (null !== $this->mathInfoPoints && \is_array($this->mathInfoPoints)) {
                $n = 0;
                foreach ($this->mathInfoPoints as $item) {
                    $res['MathInfoPoints'][$n++] = null !== $item ? $item->toMap() : $item;
                }
            }
        }
        if (null !== $this->mathInfoRect) {
            $res['MathInfoRect'] = null !== $this->mathInfoRect ? $this->mathInfoRect->toMap() : null;
        }
        if (null !== $this->result) {
            $res['Result'] = $this->result;
        }
        if (null !== $this->title) {
            $res['Title'] = $this->title;
        }

        return $res;
    }

    /**
     * @param array $map
     *
     * @return mathInfos
     */
    public static function fromMap($map = [])
    {
        $model = new self();
        if (isset($map['MathInfoPoints'])) {
            if (!empty($map['MathInfoPoints'])) {
                $model->mathInfoPoints = [];
                $n                     = 0;
                foreach ($map['MathInfoPoints'] as $item) {
                    $model->mathInfoPoints[$n++] = null !== $item ? mathInfoPoints::fromMap($item) : $item;
                }
            }
        }
        if (isset($map['MathInfoRect'])) {
            $model->mathInfoRect = mathInfoRect::fromMap($map['MathInfoRect']);
        }
        if (isset($map['Result'])) {
            $model->result = $map['Result'];
        }
        if (isset($map['Title'])) {
            $model->title = $map['Title'];
        }

        return $model;
    }
}
