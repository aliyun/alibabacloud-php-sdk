<?php

// This file is auto-generated, don't edit it. Thanks.

namespace AlibabaCloud\SDK\Imm\V20200930\Models;

use AlibabaCloud\Dara\Model;

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
        'boundary' => 'Boundary',
        'carColor' => 'CarColor',
        'carColorConfidence' => 'CarColorConfidence',
        'carType' => 'CarType',
        'carTypeConfidence' => 'CarTypeConfidence',
        'confidence' => 'Confidence',
        'licensePlates' => 'LicensePlates',
    ];

    public function validate()
    {
        if (null !== $this->boundary) {
            $this->boundary->validate();
        }
        if (\is_array($this->licensePlates)) {
            Model::validateArray($this->licensePlates);
        }
        parent::validate();
    }

    public function toArray($noStream = false)
    {
        $res = [];
        if (null !== $this->boundary) {
            $res['Boundary'] = null !== $this->boundary ? $this->boundary->toArray($noStream) : $this->boundary;
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
            if (\is_array($this->licensePlates)) {
                $res['LicensePlates'] = [];
                $n1 = 0;
                foreach ($this->licensePlates as $item1) {
                    $res['LicensePlates'][$n1] = null !== $item1 ? $item1->toArray($noStream) : $item1;
                    ++$n1;
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
                $n1 = 0;
                foreach ($map['LicensePlates'] as $item1) {
                    $model->licensePlates[$n1] = LicensePlate::fromMap($item1);
                    ++$n1;
                }
            }
        }

        return $model;
    }
}
