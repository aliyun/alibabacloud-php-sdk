<?php

// This file is auto-generated, don't edit it. Thanks.

namespace AlibabaCloud\SDK\Green\V20220302\Models\ImageModerationResponseBody\data\ext;

use AlibabaCloud\Tea\Model;

class publicFigure extends Model
{
    /**
     * @var string
     */
    public $figureId;

    /**
     * @var string
     */
    public $figureName;
    protected $_name = [
        'figureId'   => 'FigureId',
        'figureName' => 'FigureName',
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
        if (null !== $this->figureName) {
            $res['FigureName'] = $this->figureName;
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
        if (isset($map['FigureName'])) {
            $model->figureName = $map['FigureName'];
        }

        return $model;
    }
}
