<?php

// This file is auto-generated, don't edit it. Thanks.

namespace AlibabaCloud\SDK\Ocrapi\V20210707\Models\DataSubImagesFigureInfoValue;

use AlibabaCloud\SDK\Ocrapi\V20210707\Models\DataSubImagesFigureInfoValue\figureDetails\figurePoints;
use AlibabaCloud\SDK\Ocrapi\V20210707\Models\DataSubImagesFigureInfoValue\figureDetails\figureRect;
use AlibabaCloud\Tea\Model;

class figureDetails extends Model
{
    /**
     * @example face
     *
     * @var string
     */
    public $type;

    /**
     * @example “”
     *
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
     * @example 0
     *
     * @var int
     */
    public $figureAngle;
    protected $_name = [
        'type'         => 'Type',
        'data'         => 'Data',
        'figurePoints' => 'FigurePoints',
        'figureRect'   => 'FigureRect',
        'figureAngle'  => 'FigureAngle',
    ];

    public function validate()
    {
    }

    public function toMap()
    {
        $res = [];
        if (null !== $this->type) {
            $res['Type'] = $this->type;
        }
        if (null !== $this->data) {
            $res['Data'] = $this->data;
        }
        if (null !== $this->figurePoints) {
            $res['FigurePoints'] = [];
            if (null !== $this->figurePoints && \is_array($this->figurePoints)) {
                $n = 0;
                foreach ($this->figurePoints as $item) {
                    $res['FigurePoints'][$n++] = null !== $item ? $item->toMap() : $item;
                }
            }
        }
        if (null !== $this->figureRect) {
            $res['FigureRect'] = null !== $this->figureRect ? $this->figureRect->toMap() : null;
        }
        if (null !== $this->figureAngle) {
            $res['FigureAngle'] = $this->figureAngle;
        }

        return $res;
    }

    /**
     * @param array $map
     *
     * @return figureDetails
     */
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
                $n                   = 0;
                foreach ($map['FigurePoints'] as $item) {
                    $model->figurePoints[$n++] = null !== $item ? figurePoints::fromMap($item) : $item;
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
