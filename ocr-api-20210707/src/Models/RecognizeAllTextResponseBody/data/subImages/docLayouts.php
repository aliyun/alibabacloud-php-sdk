<?php

// This file is auto-generated, don't edit it. Thanks.

namespace AlibabaCloud\SDK\Ocrapi\V20210707\Models\RecognizeAllTextResponseBody\data\subImages;

use AlibabaCloud\SDK\Ocrapi\V20210707\Models\RecognizeAllTextResponseBody\data\subImages\docLayouts\layoutPoints;
use AlibabaCloud\SDK\Ocrapi\V20210707\Models\RecognizeAllTextResponseBody\data\subImages\docLayouts\layoutRect;
use AlibabaCloud\Tea\Model;

class docLayouts extends Model
{
    /**
     * @var layoutPoints[]
     */
    public $layoutPoints;

    /**
     * @var layoutRect
     */
    public $layoutRect;

    /**
     * @var string
     */
    public $layoutType;
    protected $_name = [
        'layoutPoints' => 'LayoutPoints',
        'layoutRect'   => 'LayoutRect',
        'layoutType'   => 'LayoutType',
    ];

    public function validate()
    {
    }

    public function toMap()
    {
        $res = [];
        if (null !== $this->layoutPoints) {
            $res['LayoutPoints'] = [];
            if (null !== $this->layoutPoints && \is_array($this->layoutPoints)) {
                $n = 0;
                foreach ($this->layoutPoints as $item) {
                    $res['LayoutPoints'][$n++] = null !== $item ? $item->toMap() : $item;
                }
            }
        }
        if (null !== $this->layoutRect) {
            $res['LayoutRect'] = null !== $this->layoutRect ? $this->layoutRect->toMap() : null;
        }
        if (null !== $this->layoutType) {
            $res['LayoutType'] = $this->layoutType;
        }

        return $res;
    }

    /**
     * @param array $map
     *
     * @return docLayouts
     */
    public static function fromMap($map = [])
    {
        $model = new self();
        if (isset($map['LayoutPoints'])) {
            if (!empty($map['LayoutPoints'])) {
                $model->layoutPoints = [];
                $n                   = 0;
                foreach ($map['LayoutPoints'] as $item) {
                    $model->layoutPoints[$n++] = null !== $item ? layoutPoints::fromMap($item) : $item;
                }
            }
        }
        if (isset($map['LayoutRect'])) {
            $model->layoutRect = layoutRect::fromMap($map['LayoutRect']);
        }
        if (isset($map['LayoutType'])) {
            $model->layoutType = $map['LayoutType'];
        }

        return $model;
    }
}
