<?php

// This file is auto-generated, don't edit it. Thanks.

namespace AlibabaCloud\SDK\CCC\V20170705\Models\GetCallMeasureSummaryReportResponseBody\numberReports;

use AlibabaCloud\SDK\CCC\V20170705\Models\GetCallMeasureSummaryReportResponseBody\numberReports\list_\numberReport;
use AlibabaCloud\Tea\Model;

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
    }

    public function toMap()
    {
        $res = [];
        if (null !== $this->numberReport) {
            $res['NumberReport'] = [];
            if (null !== $this->numberReport && \is_array($this->numberReport)) {
                $n = 0;
                foreach ($this->numberReport as $item) {
                    $res['NumberReport'][$n++] = null !== $item ? $item->toMap() : $item;
                }
            }
        }

        return $res;
    }

    /**
     * @param array $map
     *
     * @return list_
     */
    public static function fromMap($map = [])
    {
        $model = new self();
        if (isset($map['NumberReport'])) {
            if (!empty($map['NumberReport'])) {
                $model->numberReport = [];
                $n                   = 0;
                foreach ($map['NumberReport'] as $item) {
                    $model->numberReport[$n++] = null !== $item ? numberReport::fromMap($item) : $item;
                }
            }
        }

        return $model;
    }
}
