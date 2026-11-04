<?php

// This file is auto-generated, don't edit it. Thanks.

namespace AlibabaCloud\SDK\CCC\V20170705\Models\ListCallMeasureSummaryReportsResponseBody;

use AlibabaCloud\Dara\Model;
use AlibabaCloud\SDK\CCC\V20170705\Models\ListCallMeasureSummaryReportsResponseBody\callMeasureSummaryReportList\callMeasureSummaryReport;

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
        if (\is_array($this->callMeasureSummaryReport)) {
            Model::validateArray($this->callMeasureSummaryReport);
        }
        parent::validate();
    }

    public function toArray($noStream = false)
    {
        $res = [];
        if (null !== $this->callMeasureSummaryReport) {
            if (\is_array($this->callMeasureSummaryReport)) {
                $res['CallMeasureSummaryReport'] = [];
                $n1 = 0;
                foreach ($this->callMeasureSummaryReport as $item1) {
                    $res['CallMeasureSummaryReport'][$n1] = null !== $item1 ? $item1->toArray($noStream) : $item1;
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
        if (isset($map['CallMeasureSummaryReport'])) {
            if (!empty($map['CallMeasureSummaryReport'])) {
                $model->callMeasureSummaryReport = [];
                $n1 = 0;
                foreach ($map['CallMeasureSummaryReport'] as $item1) {
                    $model->callMeasureSummaryReport[$n1] = callMeasureSummaryReport::fromMap($item1);
                    ++$n1;
                }
            }
        }

        return $model;
    }
}
