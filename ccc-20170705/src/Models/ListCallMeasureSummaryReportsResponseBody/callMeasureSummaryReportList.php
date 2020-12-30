<?php

// This file is auto-generated, don't edit it. Thanks.

namespace AlibabaCloud\SDK\CCC\V20170705\Models\ListCallMeasureSummaryReportsResponseBody;

use AlibabaCloud\SDK\CCC\V20170705\Models\ListCallMeasureSummaryReportsResponseBody\callMeasureSummaryReportList\callMeasureSummaryReport;
use AlibabaCloud\Tea\Model;

class callMeasureSummaryReportList extends Model
{
    /**
     * @var callMeasureSummaryReport[]
     */
    public $callMeasureSummaryReport;
    protected $_name = [
        'callMeasureSummaryReport' => 'CallMeasureSummaryReport',
    ];

    public function validate()
    {
    }

    public function toMap()
    {
        $res = [];
        if (null !== $this->callMeasureSummaryReport) {
            $res['CallMeasureSummaryReport'] = [];
            if (null !== $this->callMeasureSummaryReport && \is_array($this->callMeasureSummaryReport)) {
                $n = 0;
                foreach ($this->callMeasureSummaryReport as $item) {
                    $res['CallMeasureSummaryReport'][$n++] = null !== $item ? $item->toMap() : $item;
                }
            }
        }

        return $res;
    }

    /**
     * @param array $map
     *
     * @return callMeasureSummaryReportList
     */
    public static function fromMap($map = [])
    {
        $model = new self();
        if (isset($map['CallMeasureSummaryReport'])) {
            if (!empty($map['CallMeasureSummaryReport'])) {
                $model->callMeasureSummaryReport = [];
                $n                               = 0;
                foreach ($map['CallMeasureSummaryReport'] as $item) {
                    $model->callMeasureSummaryReport[$n++] = null !== $item ? callMeasureSummaryReport::fromMap($item) : $item;
                }
            }
        }

        return $model;
    }
}
