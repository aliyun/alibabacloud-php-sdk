<?php

// This file is auto-generated, don't edit it. Thanks.

namespace AlibabaCloud\SDK\Green\V20220302\Models\DescribeImageResultExtResponseBody\data;

use AlibabaCloud\Tea\Model;

class publicFigure extends Model
{
    /**
     * @description 人物ID。
     *
     * @example yzazhzou
     *
     * @var string
     */
    public $figureId;
    protected $_name = [
        'figureId' => 'FigureId',
    ];

    public function validate()
    {
    }

    public function toMap()
    {
        $res = [];
        if (null !== $this->figureId) {
            $res['FigureId'] = $this->figureId;
        }

        return $res;
    }

    /**
     * @param array $map
     *
     * @return publicFigure
     */
    public static function fromMap($map = [])
    {
        $model = new self();
        if (isset($map['FigureId'])) {
            $model->figureId = $map['FigureId'];
        }

        return $model;
    }
}
