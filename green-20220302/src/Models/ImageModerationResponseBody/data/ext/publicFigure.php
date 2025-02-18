<?php

// This file is auto-generated, don't edit it. Thanks.

namespace AlibabaCloud\SDK\Green\V20220302\Models\ImageModerationResponseBody\data\ext;

use AlibabaCloud\Dara\Model;
use AlibabaCloud\SDK\Green\V20220302\Models\ImageModerationResponseBody\data\ext\publicFigure\location;

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
    /**
     * @var location[]
     */
    public $location;
    protected $_name = [
        'figureId'   => 'FigureId',
        'figureName' => 'FigureName',
        'location'   => 'Location',
    ];

    public function validate()
    {
        if (\is_array($this->location)) {
            Model::validateArray($this->location);
        }
        parent::validate();
    }

    public function toArray($noStream = false)
    {
        $res = [];
        if (null !== $this->figureId) {
            $res['FigureId'] = $this->figureId;
        }

        if (null !== $this->figureName) {
            $res['FigureName'] = $this->figureName;
        }

        if (null !== $this->location) {
            if (\is_array($this->location)) {
                $res['Location'] = [];
                $n1              = 0;
                foreach ($this->location as $item1) {
                    $res['Location'][$n1++] = null !== $item1 ? $item1->toArray($noStream) : $item1;
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
        if (isset($map['FigureId'])) {
            $model->figureId = $map['FigureId'];
        }

        if (isset($map['FigureName'])) {
            $model->figureName = $map['FigureName'];
        }

        if (isset($map['Location'])) {
            if (!empty($map['Location'])) {
                $model->location = [];
                $n1              = 0;
                foreach ($map['Location'] as $item1) {
                    $model->location[$n1++] = location::fromMap($item1);
                }
            }
        }

        return $model;
    }
}
