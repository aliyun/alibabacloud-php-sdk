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
    protected $_name = [
        'ocrDatas' => 'OcrDatas',
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

        return $model;
    }
}
