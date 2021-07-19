<?php

// This file is auto-generated, don't edit it. Thanks.

namespace AlibabaCloud\SDK\Imageprocess\V20200320\Models\ScreenChestCTResponseBody\data\analyzeChestVessel;

use AlibabaCloud\Tea\Model;

class aortaInfo extends Model
{
    /**
     * @var int
     */
    public $maxAreaIndex;

    /**
     * @var float
     */
    public $maxArea;

    /**
     * @var float
     */
    public $maxDiameter;

    /**
     * @var int
     */
    public $labelValue;

    /**
     * @var float[][]
     */
    public $coordinates;

    /**
     * @var float[]
     */
    public $area;
    protected $_name = [
        'maxAreaIndex' => 'MaxAreaIndex',
        'maxArea'      => 'MaxArea',
        'maxDiameter'  => 'MaxDiameter',
        'labelValue'   => 'LabelValue',
        'coordinates'  => 'Coordinates',
        'area'         => 'Area',
    ];

    public function validate()
    {
    }

    public function toMap()
    {
        $res = [];
        if (null !== $this->maxAreaIndex) {
            $res['MaxAreaIndex'] = $this->maxAreaIndex;
        }
        if (null !== $this->maxArea) {
            $res['MaxArea'] = $this->maxArea;
        }
        if (null !== $this->maxDiameter) {
            $res['MaxDiameter'] = $this->maxDiameter;
        }
        if (null !== $this->labelValue) {
            $res['LabelValue'] = $this->labelValue;
        }
        if (null !== $this->coordinates) {
            $res['Coordinates'] = $this->coordinates;
        }
        if (null !== $this->area) {
            $res['Area'] = $this->area;
        }

        return $res;
    }

    /**
     * @param array $map
     *
     * @return aortaInfo
     */
    public static function fromMap($map = [])
    {
        $model = new self();
        if (isset($map['MaxAreaIndex'])) {
            $model->maxAreaIndex = $map['MaxAreaIndex'];
        }
        if (isset($map['MaxArea'])) {
            $model->maxArea = $map['MaxArea'];
        }
        if (isset($map['MaxDiameter'])) {
            $model->maxDiameter = $map['MaxDiameter'];
        }
        if (isset($map['LabelValue'])) {
            $model->labelValue = $map['LabelValue'];
        }
        if (isset($map['Coordinates'])) {
            if (!empty($map['Coordinates'])) {
                $model->coordinates = $map['Coordinates'];
            }
        }
        if (isset($map['Area'])) {
            if (!empty($map['Area'])) {
                $model->area = $map['Area'];
            }
        }

        return $model;
    }
}
