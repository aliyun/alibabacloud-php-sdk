<?php

// This file is auto-generated, don't edit it. Thanks.

namespace AlibabaCloud\SDK\Dysmsapi\V20180501\Models;

use AlibabaCloud\Tea\Model;

class ConversionDataRequest extends Model
{
    /**
     * @var int
     */
    public $reportTime;

    /**
     * @var string
     */
    public $conversionRate;
    protected $_name = [
        'reportTime'     => 'ReportTime',
        'conversionRate' => 'ConversionRate',
    ];

    public function validate()
    {
    }

    public function toMap()
    {
        $res = [];
        if (null !== $this->reportTime) {
            $res['ReportTime'] = $this->reportTime;
        }
        if (null !== $this->conversionRate) {
            $res['ConversionRate'] = $this->conversionRate;
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
        if (isset($map['ReportTime'])) {
            $model->reportTime = $map['ReportTime'];
        }
        if (isset($map['ConversionRate'])) {
            $model->conversionRate = $map['ConversionRate'];
        }

        return $model;
    }
}
