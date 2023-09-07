<?php

// This file is auto-generated, don't edit it. Thanks.

namespace AlibabaCloud\SDK\Ocrapi\V20210707\Models\RecognizeAllTextResponseBody\data\subImages;

use AlibabaCloud\SDK\Ocrapi\V20210707\Models\RecognizeAllTextResponseBody\data\subImages\docSpecialTexts\specialTextPos;
use AlibabaCloud\SDK\Ocrapi\V20210707\Models\RecognizeAllTextResponseBody\data\subImages\docSpecialTexts\specialTextRect;
use AlibabaCloud\Tea\Model;

class docSpecialTexts extends Model
{
    /**
     * @var specialTextPos[]
     */
    public $specialTextPos;

    /**
     * @var specialTextRect
     */
    public $specialTextRect;

    /**
     * @var string
     */
    public $specialTextType;
    protected $_name = [
        'specialTextPos'  => 'SpecialTextPos',
        'specialTextRect' => 'SpecialTextRect',
        'specialTextType' => 'SpecialTextType',
    ];

    public function validate()
    {
    }

    public function toMap()
    {
        $res = [];
        if (null !== $this->specialTextPos) {
            $res['SpecialTextPos'] = [];
            if (null !== $this->specialTextPos && \is_array($this->specialTextPos)) {
                $n = 0;
                foreach ($this->specialTextPos as $item) {
                    $res['SpecialTextPos'][$n++] = null !== $item ? $item->toMap() : $item;
                }
            }
        }
        if (null !== $this->specialTextRect) {
            $res['SpecialTextRect'] = null !== $this->specialTextRect ? $this->specialTextRect->toMap() : null;
        }
        if (null !== $this->specialTextType) {
            $res['SpecialTextType'] = $this->specialTextType;
        }

        return $res;
    }

    /**
     * @param array $map
     *
     * @return docSpecialTexts
     */
    public static function fromMap($map = [])
    {
        $model = new self();
        if (isset($map['SpecialTextPos'])) {
            if (!empty($map['SpecialTextPos'])) {
                $model->specialTextPos = [];
                $n                     = 0;
                foreach ($map['SpecialTextPos'] as $item) {
                    $model->specialTextPos[$n++] = null !== $item ? specialTextPos::fromMap($item) : $item;
                }
            }
        }
        if (isset($map['SpecialTextRect'])) {
            $model->specialTextRect = specialTextRect::fromMap($map['SpecialTextRect']);
        }
        if (isset($map['SpecialTextType'])) {
            $model->specialTextType = $map['SpecialTextType'];
        }

        return $model;
    }
}
