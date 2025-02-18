<?php

// This file is auto-generated, don't edit it. Thanks.

namespace AlibabaCloud\SDK\Green\V20220302\Models\ImageBatchModerationResponseBody\data\results\ext;

use AlibabaCloud\Dara\Model;
use AlibabaCloud\SDK\Green\V20220302\Models\ImageBatchModerationResponseBody\data\results\ext\textInImage\customText;
use AlibabaCloud\SDK\Green\V20220302\Models\ImageBatchModerationResponseBody\data\results\ext\textInImage\ocrResult;

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
        if (\is_array($this->customText)) {
            Model::validateArray($this->customText);
        }
        if (\is_array($this->ocrResult)) {
            Model::validateArray($this->ocrResult);
        }
        if (\is_array($this->riskWord)) {
            Model::validateArray($this->riskWord);
        }
        parent::validate();
    }

    public function toArray($noStream = false)
    {
        $res = [];
        if (null !== $this->customText) {
            if (\is_array($this->customText)) {
                $res['CustomText'] = [];
                $n1                = 0;
                foreach ($this->customText as $item1) {
                    $res['CustomText'][$n1++] = null !== $item1 ? $item1->toArray($noStream) : $item1;
                }
            }
        }

        if (null !== $this->ocrResult) {
            if (\is_array($this->ocrResult)) {
                $res['OcrResult'] = [];
                $n1               = 0;
                foreach ($this->ocrResult as $item1) {
                    $res['OcrResult'][$n1++] = null !== $item1 ? $item1->toArray($noStream) : $item1;
                }
            }
        }

        if (null !== $this->riskWord) {
            if (\is_array($this->riskWord)) {
                $res['RiskWord'] = [];
                $n1              = 0;
                foreach ($this->riskWord as $item1) {
                    $res['RiskWord'][$n1++] = $item1;
                }
            }
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
        if (isset($map['CustomText'])) {
            if (!empty($map['CustomText'])) {
                $model->customText = [];
                $n1                = 0;
                foreach ($map['CustomText'] as $item1) {
                    $model->customText[$n1++] = customText::fromMap($item1);
                }
            }
        }

        if (isset($map['OcrResult'])) {
            if (!empty($map['OcrResult'])) {
                $model->ocrResult = [];
                $n1               = 0;
                foreach ($map['OcrResult'] as $item1) {
                    $model->ocrResult[$n1++] = ocrResult::fromMap($item1);
                }
            }
        }

        if (isset($map['RiskWord'])) {
            if (!empty($map['RiskWord'])) {
                $model->riskWord = [];
                $n1              = 0;
                foreach ($map['RiskWord'] as $item1) {
                    $model->riskWord[$n1++] = $item1;
                }
            }
        }

        return $model;
    }
}
