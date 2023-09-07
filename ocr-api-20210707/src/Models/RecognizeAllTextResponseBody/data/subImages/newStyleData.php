<?php

// This file is auto-generated, don't edit it. Thanks.

namespace AlibabaCloud\SDK\Ocrapi\V20210707\Models\RecognizeAllTextResponseBody\data\subImages;

use AlibabaCloud\SDK\Ocrapi\V20210707\Models\RecognizeAllTextResponseBody\data\subImages\newStyleData\docInfo;
use AlibabaCloud\SDK\Ocrapi\V20210707\Models\RecognizeAllTextResponseBody\data\subImages\newStyleData\layoutInfos;
use AlibabaCloud\SDK\Ocrapi\V20210707\Models\RecognizeAllTextResponseBody\data\subImages\newStyleData\styles;
use AlibabaCloud\Tea\Model;

class newStyleData extends Model
{
    /**
     * @var docInfo
     */
    public $docInfo;

    /**
     * @var layoutInfos[]
     */
    public $layoutInfos;

    /**
     * @var styles[]
     */
    public $styles;
    protected $_name = [
        'docInfo'     => 'DocInfo',
        'layoutInfos' => 'LayoutInfos',
        'styles'      => 'Styles',
    ];

    public function validate()
    {
    }

    public function toMap()
    {
        $res = [];
        if (null !== $this->docInfo) {
            $res['DocInfo'] = null !== $this->docInfo ? $this->docInfo->toMap() : null;
        }
        if (null !== $this->layoutInfos) {
            $res['LayoutInfos'] = [];
            if (null !== $this->layoutInfos && \is_array($this->layoutInfos)) {
                $n = 0;
                foreach ($this->layoutInfos as $item) {
                    $res['LayoutInfos'][$n++] = null !== $item ? $item->toMap() : $item;
                }
            }
        }
        if (null !== $this->styles) {
            $res['Styles'] = [];
            if (null !== $this->styles && \is_array($this->styles)) {
                $n = 0;
                foreach ($this->styles as $item) {
                    $res['Styles'][$n++] = null !== $item ? $item->toMap() : $item;
                }
            }
        }

        return $res;
    }

    /**
     * @param array $map
     *
     * @return newStyleData
     */
    public static function fromMap($map = [])
    {
        $model = new self();
        if (isset($map['DocInfo'])) {
            $model->docInfo = docInfo::fromMap($map['DocInfo']);
        }
        if (isset($map['LayoutInfos'])) {
            if (!empty($map['LayoutInfos'])) {
                $model->layoutInfos = [];
                $n                  = 0;
                foreach ($map['LayoutInfos'] as $item) {
                    $model->layoutInfos[$n++] = null !== $item ? layoutInfos::fromMap($item) : $item;
                }
            }
        }
        if (isset($map['Styles'])) {
            if (!empty($map['Styles'])) {
                $model->styles = [];
                $n             = 0;
                foreach ($map['Styles'] as $item) {
                    $model->styles[$n++] = null !== $item ? styles::fromMap($item) : $item;
                }
            }
        }

        return $model;
    }
}
