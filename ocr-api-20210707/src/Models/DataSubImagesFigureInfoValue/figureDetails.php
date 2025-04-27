<?php

// This file is auto-generated, don't edit it. Thanks.

namespace AlibabaCloud\SDK\Ocrapi\V20210707\Models\DataSubImagesFigureInfoValue;

use AlibabaCloud\Dara\Model;
use AlibabaCloud\SDK\Ocrapi\V20210707\Models\DataSubImagesFigureInfoValue\figureDetails\figurePoints;
use AlibabaCloud\SDK\Ocrapi\V20210707\Models\DataSubImagesFigureInfoValue\figureDetails\figureRect;

class figureDetails extends Model
{
    /**
     * @var string
     */
    public $type;

    /**
     * @var mixed
     */
    public $data;

    /**
     * @var figurePoints[]
     */
    public $figurePoints;

    /**
     * @var figureRect
     */
    public $figureRect;

    /**
     * @var int
     */
    public $figureAngle;
    protected $_name = [
        'type' => 'Type',
        'data' => 'Data',
        'figurePoints' => 'FigurePoints',
        'figureRect' => 'FigureRect',
        'figureAngle' => 'FigureAngle',
    ];

    public function validate()
    {
        if (\is_array($this->figurePoints)) {
            Model::validateArray($this->figurePoints);
        }
        if (null !== $this->figureRect) {
            $this->figureRect->validate();
        }
        parent::validate();
    }

    public function toArray($noStream = false)
    {
        $res = [];
        if (null !== $this->type) {
            $res['Type'] = $this->type;
        }

        if (null !== $this->data) {
            $res['Data'] = $this->data;
        }

        if (null !== $this->figurePoints) {
            if (\is_array($this->figurePoints)) {
                $res['FigurePoints'] = [];
                $n1 = 0;
                foreach ($this->figurePoints as $item1) {
                    $res['FigurePoints'][$n1++] = null !== $item1 ? $item1->toArray($noStream) : $item1;
                }
            }
        }

        if (null !== $this->figureRect) {
            $res['FigureRect'] = null !== $this->figureRect ? $this->figureRect->toArray($noStream) : $this->figureRect;
        }

        if (null !== $this->figureAngle) {
            $res['FigureAngle'] = $this->figureAngle;
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
        if (isset($map['Type'])) {
            $model->type = $map['Type'];
        }

        if (isset($map['Data'])) {
            $model->data = $map['Data'];
        }

        if (isset($map['FigurePoints'])) {
            if (!empty($map['FigurePoints'])) {
                $model->figurePoints = [];
                $n1 = 0;
                foreach ($map['FigurePoints'] as $item1) {
                    $model->figurePoints[$n1++] = figurePoints::fromMap($item1);
                }
            }
        }

        if (isset($map['FigureRect'])) {
            $model->figureRect = figureRect::fromMap($map['FigureRect']);
        }

        if (isset($map['FigureAngle'])) {
            $model->figureAngle = $map['FigureAngle'];
        }

        return $model;
    }
}
