<?php

// This file is auto-generated, don't edit it. Thanks.

namespace AlibabaCloud\SDK\Green\V20220302\Models\DescribeImageResultExtResponseBody\data;

use AlibabaCloud\Dara\Model;
use AlibabaCloud\SDK\Green\V20220302\Models\DescribeImageResultExtResponseBody\data\textInImage\customTexts;

class textInImage extends Model
{
    /**
     * @var customTexts[]
     */
    public $customTexts;

    /**
     * @var string[]
     */
    public $ocrDatas;

    /**
     * @var string[]
     */
    public $riskWords;
    protected $_name = [
        'customTexts' => 'CustomTexts',
        'ocrDatas' => 'OcrDatas',
        'riskWords' => 'RiskWords',
    ];

    public function validate()
    {
        if (\is_array($this->customTexts)) {
            Model::validateArray($this->customTexts);
        }
        if (\is_array($this->ocrDatas)) {
            Model::validateArray($this->ocrDatas);
        }
        if (\is_array($this->riskWords)) {
            Model::validateArray($this->riskWords);
        }
        parent::validate();
    }

    public function toArray($noStream = false)
    {
        $res = [];
        if (null !== $this->customTexts) {
            if (\is_array($this->customTexts)) {
                $res['CustomTexts'] = [];
                $n1 = 0;
                foreach ($this->customTexts as $item1) {
                    $res['CustomTexts'][$n1] = null !== $item1 ? $item1->toArray($noStream) : $item1;
                    ++$n1;
                }
            }
        }

        if (null !== $this->ocrDatas) {
            if (\is_array($this->ocrDatas)) {
                $res['OcrDatas'] = [];
                $n1 = 0;
                foreach ($this->ocrDatas as $item1) {
                    $res['OcrDatas'][$n1] = $item1;
                    ++$n1;
                }
            }
        }

        if (null !== $this->riskWords) {
            if (\is_array($this->riskWords)) {
                $res['RiskWords'] = [];
                $n1 = 0;
                foreach ($this->riskWords as $item1) {
                    $res['RiskWords'][$n1] = $item1;
                    ++$n1;
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
        if (isset($map['CustomTexts'])) {
            if (!empty($map['CustomTexts'])) {
                $model->customTexts = [];
                $n1 = 0;
                foreach ($map['CustomTexts'] as $item1) {
                    $model->customTexts[$n1] = customTexts::fromMap($item1);
                    ++$n1;
                }
            }
        }

        if (isset($map['OcrDatas'])) {
            if (!empty($map['OcrDatas'])) {
                $model->ocrDatas = [];
                $n1 = 0;
                foreach ($map['OcrDatas'] as $item1) {
                    $model->ocrDatas[$n1] = $item1;
                    ++$n1;
                }
            }
        }

        if (isset($map['RiskWords'])) {
            if (!empty($map['RiskWords'])) {
                $model->riskWords = [];
                $n1 = 0;
                foreach ($map['RiskWords'] as $item1) {
                    $model->riskWords[$n1] = $item1;
                    ++$n1;
                }
            }
        }

        return $model;
    }
}
