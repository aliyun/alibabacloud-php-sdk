<?php

// This file is auto-generated, don't edit it. Thanks.

namespace AlibabaCloud\SDK\Green\V20220302\Models\ImageModerationResponseBody\data\ext;

use AlibabaCloud\SDK\Green\V20220302\Models\ImageModerationResponseBody\data\ext\textInImage\customText;
use AlibabaCloud\SDK\Green\V20220302\Models\ImageModerationResponseBody\data\ext\textInImage\ocrResult;
use AlibabaCloud\Tea\Model;

class textInImage extends Model
{
    /**
     * @var customText[]
     */
    public $customText;

    /**
     * @var ocrResult[]
     */
    public $ocrResult;

    /**
     * @var string[]
     */
    public $riskWord;
    protected $_name = [
        'customText' => 'CustomText',
        'ocrResult'  => 'OcrResult',
        'riskWord'   => 'RiskWord',
    ];

    public function validate()
    {
    }

    public function toMap()
    {
        $res = [];
        if (null !== $this->customText) {
            $res['CustomText'] = [];
            if (null !== $this->customText && \is_array($this->customText)) {
                $n = 0;
                foreach ($this->customText as $item) {
                    $res['CustomText'][$n++] = null !== $item ? $item->toMap() : $item;
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
        if (null !== $this->riskWord) {
            $res['RiskWord'] = $this->riskWord;
        }

        return $res;
    }

    /**
     * @param array $map
     *
     * @return textInImage
     */
    public static function fromMap($map = [])
    {
        $model = new self();
        if (isset($map['CustomText'])) {
            if (!empty($map['CustomText'])) {
                $model->customText = [];
                $n                 = 0;
                foreach ($map['CustomText'] as $item) {
                    $model->customText[$n++] = null !== $item ? customText::fromMap($item) : $item;
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
        if (isset($map['RiskWord'])) {
            if (!empty($map['RiskWord'])) {
                $model->riskWord = $map['RiskWord'];
            }
        }

        return $model;
    }
}
