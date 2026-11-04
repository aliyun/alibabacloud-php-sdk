<?php

// This file is auto-generated, don't edit it. Thanks.

namespace AlibabaCloud\SDK\CCC\V20170705\Models\GetCallMeasureSummaryReportResponseBody\numberReports;

use AlibabaCloud\Dara\Model;
use AlibabaCloud\SDK\CCC\V20170705\Models\GetCallMeasureSummaryReportResponseBody\numberReports\list_\numberReport;

class list_ extends Model
{
    /**
     * @var numberReport[]
     */
    public $numberReport;
    protected $_name = [
        'numberReport' => 'NumberReport',
    ];

    public function validate()
    {
        if (\is_array($this->numberReport)) {
            Model::validateArray($this->numberReport);
        }
        parent::validate();
    }

    public function toArray($noStream = false)
    {
        $res = [];
        if (null !== $this->numberReport) {
            if (\is_array($this->numberReport)) {
                $res['NumberReport'] = [];
                $n1 = 0;
                foreach ($this->numberReport as $item1) {
                    $res['NumberReport'][$n1] = null !== $item1 ? $item1->toArray($noStream) : $item1;
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
        if (isset($map['NumberReport'])) {
            if (!empty($map['NumberReport'])) {
                $model->numberReport = [];
                $n1 = 0;
                foreach ($map['NumberReport'] as $item1) {
                    $model->numberReport[$n1] = numberReport::fromMap($item1);
                    ++$n1;
                }
            }
        }

        return $model;
    }
}
