<?php

// This file is auto-generated, don't edit it. Thanks.

namespace AlibabaCloud\SDK\Green\V20220302\Models\DescribeImageResultExtResponseBody\data;

use AlibabaCloud\Tea\Model;

class textInImage extends Model
{
    /**
     * @var string[]
     */
    public $ocrDatas;

    /**
     * @var string[]
     */
    public $riskWords;
    protected $_name = [
        'ocrDatas'  => 'OcrDatas',
        'riskWords' => 'RiskWords',
    ];

    public function validate()
    {
    }

    public function toMap()
    {
        $res = [];
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
