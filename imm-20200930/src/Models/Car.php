<?php

// This file is auto-generated, don't edit it. Thanks.

namespace AlibabaCloud\SDK\Imm\V20200930\Models;

use AlibabaCloud\Tea\Model;

class Car extends Model
{
    /**
     * @var Boundary
     */
    public $boundary;

    /**
     * @var string
     */
    public $carColor;

    /**
     * @var float
     */
    public $carColorConfidence;

    /**
     * @var string
     */
    public $carType;

    /**
     * @var float
     */
    public $carTypeConfidence;

    /**
     * @var float
     */
    public $confidence;

    /**
     * @var LicensePlate[]
     */
    public $licensePlates;
    protected $_name = [
        'boundary'           => 'Boundary',
        'carColor'           => 'CarColor',
        'carColorConfidence' => 'CarColorConfidence',
        'carType'            => 'CarType',
        'carTypeConfidence'  => 'CarTypeConfidence',
        'confidence'         => 'Confidence',
        'licensePlates'      => 'LicensePlates',
    ];

    public function validate()
    {
    }

    public function toMap()
    {
        $res = [];
        if (null !== $this->boundary) {
            $res['Boundary'] = null !== $this->boundary ? $this->boundary->toMap() : null;
        }
        if (null !== $this->carColor) {
            $res['CarColor'] = $this->carColor;
        }
        if (null !== $this->carColorConfidence) {
            $res['CarColorConfidence'] = $this->carColorConfidence;
        }
        if (null !== $this->carType) {
            $res['CarType'] = $this->carType;
        }
        if (null !== $this->carTypeConfidence) {
            $res['CarTypeConfidence'] = $this->carTypeConfidence;
        }
        if (null !== $this->confidence) {
            $res['Confidence'] = $this->confidence;
        }
        if (null !== $this->licensePlates) {
            $res['LicensePlates'] = [];
            if (null !== $this->licensePlates && \is_array($this->licensePlates)) {
                $n = 0;
                foreach ($this->licensePlates as $item) {
                    $res['LicensePlates'][$n++] = null !== $item ? $item->toMap() : $item;
                }
            }
        }

        return $res;
    }

    /**
     * @param array $map
     *
     * @return Car
     */
    public static function fromMap($map = [])
    {
        $model = new self();
        if (isset($map['Boundary'])) {
            $model->boundary = Boundary::fromMap($map['Boundary']);
        }
        if (isset($map['CarColor'])) {
            $model->carColor = $map['CarColor'];
        }
        if (isset($map['CarColorConfidence'])) {
            $model->carColorConfidence = $map['CarColorConfidence'];
        }
        if (isset($map['CarType'])) {
            $model->carType = $map['CarType'];
        }
        if (isset($map['CarTypeConfidence'])) {
            $model->carTypeConfidence = $map['CarTypeConfidence'];
        }
        if (isset($map['Confidence'])) {
            $model->confidence = $map['Confidence'];
        }
        if (isset($map['LicensePlates'])) {
            if (!empty($map['LicensePlates'])) {
                $model->licensePlates = [];
                $n                    = 0;
                foreach ($map['LicensePlates'] as $item) {
                    $model->licensePlates[$n++] = null !== $item ? LicensePlate::fromMap($item) : $item;
                }
            }
        }

        return $model;
    }
}
