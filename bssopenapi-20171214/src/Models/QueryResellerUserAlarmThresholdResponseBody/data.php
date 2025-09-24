<?php

// This file is auto-generated, don't edit it. Thanks.

namespace AlibabaCloud\SDK\BssOpenApi\V20171214\Models\QueryResellerUserAlarmThresholdResponseBody;

use AlibabaCloud\Dara\Model;

class data extends Model
{
    /**
     * @var int
     */
    public $denominator;

    /**
     * @var int
     */
    public $numerator;

    /**
     * @var string
     */
    public $thresholdAmount;

    /**
     * @var int
     */
    public $thresholdType;
    protected $_name = [
        'denominator' => 'Denominator',
        'numerator' => 'Numerator',
        'thresholdAmount' => 'ThresholdAmount',
        'thresholdType' => 'ThresholdType',
    ];

    public function validate()
    {
        parent::validate();
    }

    public function toArray($noStream = false)
    {
        $res = [];
        if (null !== $this->denominator) {
            $res['Denominator'] = $this->denominator;
        }

        if (null !== $this->numerator) {
            $res['Numerator'] = $this->numerator;
        }

        if (null !== $this->thresholdAmount) {
            $res['ThresholdAmount'] = $this->thresholdAmount;
        }

        if (null !== $this->thresholdType) {
            $res['ThresholdType'] = $this->thresholdType;
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
        if (isset($map['Denominator'])) {
            $model->denominator = $map['Denominator'];
        }

        if (isset($map['Numerator'])) {
            $model->numerator = $map['Numerator'];
        }

        if (isset($map['ThresholdAmount'])) {
            $model->thresholdAmount = $map['ThresholdAmount'];
        }

        if (isset($map['ThresholdType'])) {
            $model->thresholdType = $map['ThresholdType'];
        }

        return $model;
    }
}
