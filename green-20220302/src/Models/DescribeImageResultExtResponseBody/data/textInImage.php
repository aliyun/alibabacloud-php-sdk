<?php

// This file is auto-generated, don't edit it. Thanks.

namespace AlibabaCloud\SDK\Green\V20220302\Models\DescribeImageResultExtResponseBody\data;

use AlibabaCloud\SDK\Green\V20220302\Models\DescribeImageResultExtResponseBody\data\textInImage\customTexts;
use AlibabaCloud\Tea\Model;

class textInImage extends Model
{
    /**
     * @description When a custom text library is hit, the custom library ID, custom library name, and custom word are returned.
     *
     * @var customTexts[]
     */
    public $customTexts;

    /**
     * @description Returns the text information in the recognized image.
     *
     * @var string[]
     */
    public $ocrDatas;

    /**
     * @description The risk words that are hit. Multiple words are separated by commas (,).
     *
     * @var string[]
     */
    public $riskWords;
    protected $_name = [
        'customTexts' => 'CustomTexts',
        'ocrDatas'    => 'OcrDatas',
        'riskWords'   => 'RiskWords',
    ];

    public function validate()
    {
    }

    public function toMap()
    {
        $res = [];
        if (null !== $this->customTexts) {
            $res['CustomTexts'] = [];
            if (null !== $this->customTexts && \is_array($this->customTexts)) {
                $n = 0;
                foreach ($this->customTexts as $item) {
                    $res['CustomTexts'][$n++] = null !== $item ? $item->toMap() : $item;
                }
            }
        }
        if (null !== $this->ocrDatas) {
            $res['OcrDatas'] = $this->ocrDatas;
        }
        if (null !== $this->riskWords) {
            $res['RiskWords'] = $this->riskWords;
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
        if (isset($map['CustomTexts'])) {
            if (!empty($map['CustomTexts'])) {
                $model->customTexts = [];
                $n                  = 0;
                foreach ($map['CustomTexts'] as $item) {
                    $model->customTexts[$n++] = null !== $item ? customTexts::fromMap($item) : $item;
                }
            }
        }
        if (isset($map['OcrDatas'])) {
            if (!empty($map['OcrDatas'])) {
                $model->ocrDatas = $map['OcrDatas'];
            }
        }
        if (isset($map['RiskWords'])) {
            if (!empty($map['RiskWords'])) {
                $model->riskWords = $map['RiskWords'];
            }
        }

        return $model;
    }
}
