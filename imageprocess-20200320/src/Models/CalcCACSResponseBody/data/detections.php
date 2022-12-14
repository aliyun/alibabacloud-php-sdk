<?php

// This file is auto-generated, don't edit it. Thanks.

namespace AlibabaCloud\SDK\Imageprocess\V20200320\Models\CalcCACSResponseBody\data;

use AlibabaCloud\Tea\Model;

class detections extends Model
{
    /**
     * @var int[]
     */
    public $calciumCenter;

    /**
     * @example 1
     *
     * @var int
     */
    public $calciumId;

    /**
     * @example 19.22474
     *
     * @var float
     */
    public $calciumScore;

    /**
     * @example 28.837109
     *
     * @var float
     */
    public $calciumVolume;
    protected $_name = [
        'calciumCenter' => 'CalciumCenter',
        'calciumId'     => 'CalciumId',
        'calciumScore'  => 'CalciumScore',
        'calciumVolume' => 'CalciumVolume',
    ];

    public function validate()
    {
    }

    public function toMap()
    {
        $res = [];
        if (null !== $this->calciumCenter) {
            $res['CalciumCenter'] = $this->calciumCenter;
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

    /**
     * @param array $map
     *
     * @return detections
     */
    public static function fromMap($map = [])
    {
        $model = new self();
        if (isset($map['CalciumCenter'])) {
            if (!empty($map['CalciumCenter'])) {
                $model->calciumCenter = $map['CalciumCenter'];
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
