<?php

// This file is auto-generated, don't edit it. Thanks.

namespace AlibabaCloud\SDK\Green\V20220302\Models\ImageModerationResponseBody\data;

use AlibabaCloud\SDK\Green\V20220302\Models\ImageModerationResponseBody\data\ext\customImage;
use AlibabaCloud\SDK\Green\V20220302\Models\ImageModerationResponseBody\data\ext\logoData;
use AlibabaCloud\SDK\Green\V20220302\Models\ImageModerationResponseBody\data\ext\ocrResult;
use AlibabaCloud\SDK\Green\V20220302\Models\ImageModerationResponseBody\data\ext\publicFigure;
use AlibabaCloud\SDK\Green\V20220302\Models\ImageModerationResponseBody\data\ext\recognition;
use AlibabaCloud\SDK\Green\V20220302\Models\ImageModerationResponseBody\data\ext\textInImage;
use AlibabaCloud\Tea\Model;

class ext extends Model
{
    /**
     * @var customImage[]
     */
    public $customImage;

    /**
     * @var logoData[]
     */
    public $logoData;

    /**
     * @var ocrResult[]
     */
    public $ocrResult;

    /**
     * @var publicFigure[]
     */
    public $publicFigure;

    /**
     * @var recognition[]
     */
    public $recognition;

    /**
     * @var textInImage
     */
    public $textInImage;
    protected $_name = [
        'customImage'  => 'CustomImage',
        'logoData'     => 'LogoData',
        'ocrResult'    => 'OcrResult',
        'publicFigure' => 'PublicFigure',
        'recognition'  => 'Recognition',
        'textInImage'  => 'TextInImage',
    ];

    public function validate()
    {
    }

    public function toMap()
    {
        $res = [];
        if (null !== $this->customImage) {
            $res['CustomImage'] = [];
            if (null !== $this->customImage && \is_array($this->customImage)) {
                $n = 0;
                foreach ($this->customImage as $item) {
                    $res['CustomImage'][$n++] = null !== $item ? $item->toMap() : $item;
                }
            }
        }
        if (null !== $this->logoData) {
            $res['LogoData'] = [];
            if (null !== $this->logoData && \is_array($this->logoData)) {
                $n = 0;
                foreach ($this->logoData as $item) {
                    $res['LogoData'][$n++] = null !== $item ? $item->toMap() : $item;
                }
            }
        }
        if (null !== $this->ocrResult) {
            $res['OcrResult'] = [];
            if (null !== $this->ocrResult && \is_array($this->ocrResult)) {
                $n = 0;
                foreach ($this->ocrResult as $item) {
                    $res['OcrResult'][$n++] = null !== $item ? $item->toMap() : $item;
                }
            }
        }
        if (null !== $this->publicFigure) {
            $res['PublicFigure'] = [];
            if (null !== $this->publicFigure && \is_array($this->publicFigure)) {
                $n = 0;
                foreach ($this->publicFigure as $item) {
                    $res['PublicFigure'][$n++] = null !== $item ? $item->toMap() : $item;
                }
            }
        }
        if (null !== $this->recognition) {
            $res['Recognition'] = [];
            if (null !== $this->recognition && \is_array($this->recognition)) {
                $n = 0;
                foreach ($this->recognition as $item) {
                    $res['Recognition'][$n++] = null !== $item ? $item->toMap() : $item;
                }
            }
        }
        if (null !== $this->textInImage) {
            $res['TextInImage'] = null !== $this->textInImage ? $this->textInImage->toMap() : null;
        }

        return $res;
    }

    /**
     * @param array $map
     *
     * @return ext
     */
    public static function fromMap($map = [])
    {
        $model = new self();
        if (isset($map['CustomImage'])) {
            if (!empty($map['CustomImage'])) {
                $model->customImage = [];
                $n                  = 0;
                foreach ($map['CustomImage'] as $item) {
                    $model->customImage[$n++] = null !== $item ? customImage::fromMap($item) : $item;
                }
            }
        }
        if (isset($map['LogoData'])) {
            if (!empty($map['LogoData'])) {
                $model->logoData = [];
                $n               = 0;
                foreach ($map['LogoData'] as $item) {
                    $model->logoData[$n++] = null !== $item ? logoData::fromMap($item) : $item;
                }
            }
        }
        if (isset($map['OcrResult'])) {
            if (!empty($map['OcrResult'])) {
                $model->ocrResult = [];
                $n                = 0;
                foreach ($map['OcrResult'] as $item) {
                    $model->ocrResult[$n++] = null !== $item ? ocrResult::fromMap($item) : $item;
                }
            }
        }
        if (isset($map['PublicFigure'])) {
            if (!empty($map['PublicFigure'])) {
                $model->publicFigure = [];
                $n                   = 0;
                foreach ($map['PublicFigure'] as $item) {
                    $model->publicFigure[$n++] = null !== $item ? publicFigure::fromMap($item) : $item;
                }
            }
        }
        if (isset($map['Recognition'])) {
            if (!empty($map['Recognition'])) {
                $model->recognition = [];
                $n                  = 0;
                foreach ($map['Recognition'] as $item) {
                    $model->recognition[$n++] = null !== $item ? recognition::fromMap($item) : $item;
                }
            }
        }
        if (isset($map['TextInImage'])) {
            $model->textInImage = textInImage::fromMap($map['TextInImage']);
        }

        return $model;
    }
}
