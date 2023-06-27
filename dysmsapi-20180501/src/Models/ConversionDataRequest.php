<?php

// This file is auto-generated, don't edit it. Thanks.

namespace AlibabaCloud\SDK\Dysmsapi\V20180501\Models;

use AlibabaCloud\Tea\Model;

class ConversionDataRequest extends Model
{
    /**
     * @description Conversion rate monitoring return value.
     *
     * >  The value of this parameter is of type double, and the value is between \[0,1].
     * @example 0.53
     *
     * @var string
     */
    public $conversionRate;

    /**
     * @description Timestamp of the conversion rate observation should be a Unix timestamp, millisecond-level long integer.
     *
     * >  If this field is not specified: the current timestamp is the default.
     * @example 1349055900000
     *
     * @var int
     */
    public $reportTime;
    protected $_name = [
        'conversionRate' => 'ConversionRate',
        'reportTime'     => 'ReportTime',
    ];

    public function validate()
    {
    }

    public function toMap()
    {
        $res = [];
        if (null !== $this->conversionRate) {
            $res['ConversionRate'] = $this->conversionRate;
        }
        if (null !== $this->reportTime) {
            $res['ReportTime'] = $this->reportTime;
        }

        return $res;
    }

    /**
     * @param array $map
     *
     * @return ConversionDataRequest
     */
    public static function fromMap($map = [])
    {
        $model = new self();
        if (isset($map['ConversionRate'])) {
            $model->conversionRate = $map['ConversionRate'];
        }
        if (isset($map['ReportTime'])) {
            $model->reportTime = $map['ReportTime'];
        }

        return $model;
    }
}
