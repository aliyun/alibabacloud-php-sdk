<?php

// This file is auto-generated, don't edit it. Thanks.

namespace AlibabaCloud\SDK\Imageprocess\V20200320\Models\ScreenChestCTResponseBody\data\analyzeChestVessel;

use AlibabaCloud\Dara\Model;

class pulmonaryInfo extends Model
{
    /**
     * @var float[]
     */
    public $area;

    /**
     * @var float[][]
     */
    public $coordinates;

    /**
     * @var int
     */
    public $labelValue;

    /**
     * @var float
     */
    public $maxArea;

    /**
     * @var int
     */
    public $maxAreaIndex;

    /**
     * @var float
     */
    public $maxDiameter;

    /**
     * @var float
     */
    public $nearestAortaArea;
    protected $_name = [
        'area' => 'Area',
        'coordinates' => 'Coordinates',
        'labelValue' => 'LabelValue',
        'maxArea' => 'MaxArea',
        'maxAreaIndex' => 'MaxAreaIndex',
        'maxDiameter' => 'MaxDiameter',
        'nearestAortaArea' => 'NearestAortaArea',
    ];

    public function validate()
    {
        if (\is_array($this->area)) {
            Model::validateArray($this->area);
        }
        if (\is_array($this->coordinates)) {
            Model::validateArray($this->coordinates);
        }
        parent::validate();
    }

    public function toArray($noStream = false)
    {
        $res = [];
        if (null !== $this->area) {
            if (\is_array($this->area)) {
                $res['Area'] = [];
                $n1 = 0;
                foreach ($this->area as $item1) {
                    $res['Area'][$n1++] = $item1;
                }
            }
        }

        if (null !== $this->coordinates) {
            if (\is_array($this->coordinates)) {
                $res['Coordinates'] = [];
                $n1 = 0;
                foreach ($this->coordinates as $item1) {
                    if (\is_array($item1)) {
                        $res['Coordinates'][$n1++] = [];
                        $n2 = 0;
                        foreach ($item1 as $item2) {
                            $res['Coordinates'][$n1++][$n2++] = $item2;
                        }
                    }
                }
            }
        }

        if (null !== $this->labelValue) {
            $res['LabelValue'] = $this->labelValue;
        }

        if (null !== $this->maxArea) {
            $res['MaxArea'] = $this->maxArea;
        }

        if (null !== $this->maxAreaIndex) {
            $res['MaxAreaIndex'] = $this->maxAreaIndex;
        }

        if (null !== $this->maxDiameter) {
            $res['MaxDiameter'] = $this->maxDiameter;
        }

        if (null !== $this->nearestAortaArea) {
            $res['NearestAortaArea'] = $this->nearestAortaArea;
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
        if (isset($map['Area'])) {
            if (!empty($map['Area'])) {
                $model->area = [];
                $n1 = 0;
                foreach ($map['Area'] as $item1) {
                    $model->area[$n1++] = $item1;
                }
            }
        }

        if (isset($map['Coordinates'])) {
            if (!empty($map['Coordinates'])) {
                $model->coordinates = [];
                $n1 = 0;
                foreach ($map['Coordinates'] as $item1) {
                    if (!empty($item1)) {
                        $model->coordinates[$n1++] = [];
                        $n2 = 0;
                        foreach ($item1 as $item2) {
                            $model->coordinates[$n1++][$n2++] = $item2;
                        }
                    }
                }
            }
        }

        if (isset($map['LabelValue'])) {
            $model->labelValue = $map['LabelValue'];
        }

        if (isset($map['MaxArea'])) {
            $model->maxArea = $map['MaxArea'];
        }

        if (isset($map['MaxAreaIndex'])) {
            $model->maxAreaIndex = $map['MaxAreaIndex'];
        }

        if (isset($map['MaxDiameter'])) {
            $model->maxDiameter = $map['MaxDiameter'];
        }

        if (isset($map['NearestAortaArea'])) {
            $model->nearestAortaArea = $map['NearestAortaArea'];
        }

        return $model;
    }
}
