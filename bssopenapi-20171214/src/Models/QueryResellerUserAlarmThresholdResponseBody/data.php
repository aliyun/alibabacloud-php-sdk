<?php

// This file is auto-generated, don't edit it. Thanks.

namespace AlibabaCloud\SDK\BssOpenApi\V20171214\Models\QueryResellerUserAlarmThresholdResponseBody;

use AlibabaCloud\Tea\Model;

class data extends Model
{
    /**
     * @example 100
     *
     * @var int
     */
    public $denominator;

    /**
     * @example 10
     *
     * @var int
     */
    public $numerator;

    /**
     * @example 100
     *
     * @var string
     */
    public $thresholdAmount;

    /**
     * @example 0
     *
     * @var int
     */
    public $thresholdType;
    protected $_name = [
        'denominator'     => 'Denominator',
        'numerator'       => 'Numerator',
        'thresholdAmount' => 'ThresholdAmount',
        'thresholdType'   => 'ThresholdType',
    ];

    public function validate()
    {
    }

    public function toMap()
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

    /**
     * @param array $map
     *
     * @return data
     */
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
