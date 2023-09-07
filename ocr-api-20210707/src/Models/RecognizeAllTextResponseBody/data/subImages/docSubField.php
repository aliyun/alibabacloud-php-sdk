<?php

// This file is auto-generated, don't edit it. Thanks.

namespace AlibabaCloud\SDK\Ocrapi\V20210707\Models\RecognizeAllTextResponseBody\data\subImages;

use AlibabaCloud\SDK\Ocrapi\V20210707\Models\RecognizeAllTextResponseBody\data\subImages\docSubField\subFieldPos;
use AlibabaCloud\SDK\Ocrapi\V20210707\Models\RecognizeAllTextResponseBody\data\subImages\docSubField\subFieldRect;
use AlibabaCloud\Tea\Model;

class docSubField extends Model
{
    /**
     * @var subFieldPos[]
     */
    public $subFieldPos;

    /**
     * @var subFieldRect
     */
    public $subFieldRect;

    /**
     * @var string
     */
    public $subFieldType;
    protected $_name = [
        'subFieldPos'  => 'SubFieldPos',
        'subFieldRect' => 'SubFieldRect',
        'subFieldType' => 'SubFieldType',
    ];

    public function validate()
    {
    }

    public function toMap()
    {
        $res = [];
        if (null !== $this->subFieldPos) {
            $res['SubFieldPos'] = [];
            if (null !== $this->subFieldPos && \is_array($this->subFieldPos)) {
                $n = 0;
                foreach ($this->subFieldPos as $item) {
                    $res['SubFieldPos'][$n++] = null !== $item ? $item->toMap() : $item;
                }
            }
        }
        if (null !== $this->subFieldRect) {
            $res['SubFieldRect'] = null !== $this->subFieldRect ? $this->subFieldRect->toMap() : null;
        }
        if (null !== $this->subFieldType) {
            $res['SubFieldType'] = $this->subFieldType;
        }

        return $res;
    }

    /**
     * @param array $map
     *
     * @return docSubField
     */
    public static function fromMap($map = [])
    {
        $model = new self();
        if (isset($map['SubFieldPos'])) {
            if (!empty($map['SubFieldPos'])) {
                $model->subFieldPos = [];
                $n                  = 0;
                foreach ($map['SubFieldPos'] as $item) {
                    $model->subFieldPos[$n++] = null !== $item ? subFieldPos::fromMap($item) : $item;
                }
            }
        }
        if (isset($map['SubFieldRect'])) {
            $model->subFieldRect = subFieldRect::fromMap($map['SubFieldRect']);
        }
        if (isset($map['SubFieldType'])) {
            $model->subFieldType = $map['SubFieldType'];
        }

        return $model;
    }
}
