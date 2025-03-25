<?php

// This file is auto-generated, don't edit it. Thanks.

namespace AlibabaCloud\SDK\Imageprocess\V20200320\Models\ScreenChestCTResponseBody\data\CACS;

use AlibabaCloud\Dara\Model;

class detections extends Model
{
    /**
     * @var int[]
     */
    public $calciumCenter;

    /**
     * @var int
     */
    public $calciumId;

    /**
     * @var float
     */
    public $calciumScore;

    /**
     * @var float
     */
    public $calciumVolume;
    protected $_name = [
        'calciumCenter' => 'CalciumCenter',
        'calciumId' => 'CalciumId',
        'calciumScore' => 'CalciumScore',
        'calciumVolume' => 'CalciumVolume',
    ];

    public function validate()
    {
        if (\is_array($this->calciumCenter)) {
            Model::validateArray($this->calciumCenter);
        }
        parent::validate();
    }

    public function toArray($noStream = false)
    {
        $res = [];
        if (null !== $this->calciumCenter) {
            if (\is_array($this->calciumCenter)) {
                $res['CalciumCenter'] = [];
                $n1 = 0;
                foreach ($this->calciumCenter as $item1) {
                    $res['CalciumCenter'][$n1++] = $item1;
                }
            }
        }

        if (null !== $this->calciumId) {
            $res['CalciumId'] = $this->calciumId;
        }

        if (null !== $this->calciumScore) {
            $res['CalciumScore'] = $this->calciumScore;
        }

        if (null !== $this->calciumVolume) {
            $res['CalciumVolume'] = $this->calciumVolume;
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
        if (isset($map['CalciumCenter'])) {
            if (!empty($map['CalciumCenter'])) {
                $model->calciumCenter = [];
                $n1 = 0;
                foreach ($map['CalciumCenter'] as $item1) {
                    $model->calciumCenter[$n1++] = $item1;
                }
            }
        }

        if (isset($map['CalciumId'])) {
            $model->calciumId = $map['CalciumId'];
        }

        if (isset($map['CalciumScore'])) {
            $model->calciumScore = $map['CalciumScore'];
        }

        if (isset($map['CalciumVolume'])) {
            $model->calciumVolume = $map['CalciumVolume'];
        }

        return $model;
    }
}
