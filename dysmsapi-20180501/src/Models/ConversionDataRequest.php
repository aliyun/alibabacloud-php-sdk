<?php

// This file is auto-generated, don't edit it. Thanks.

namespace AlibabaCloud\SDK\Dysmsapi\V20180501\Models;

use AlibabaCloud\Dara\Model;

class ConversionDataRequest extends Model
{
    /**
     * @var string
     */
    public $conversionRate;

    /**
     * @var int
     */
    public $reportTime;
    protected $_name = [
        'conversionRate' => 'ConversionRate',
        'reportTime' => 'ReportTime',
    ];

    public function validate()
    {
        parent::validate();
    }

    public function toArray($noStream = false)
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

    public function toMap($noStream = false)
    {
        return $this->toArray($noStream);
    }

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
