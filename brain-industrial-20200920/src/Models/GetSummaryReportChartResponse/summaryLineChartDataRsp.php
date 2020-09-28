<?php

// This file is auto-generated, don't edit it. Thanks.

namespace AlibabaCloud\SDK\Brainindustrial\V20200920\Models\GetSummaryReportChartResponse;

use AlibabaCloud\SDK\Brainindustrial\V20200920\Models\GetSummaryReportChartResponse\summaryLineChartDataRsp\summaryLineChartData;
use AlibabaCloud\Tea\Model;

class summaryLineChartDataRsp extends Model
{
    /**
     * @var bool
     */
    public $status;

    /**
     * @var summaryLineChartData
     */
    public $summaryLineChartData;
    protected $_name = [
        'status'               => 'Status',
        'summaryLineChartData' => 'SummaryLineChartData',
    ];

    public function validate()
    {
        Model::validateRequired('status', $this->status, true);
        Model::validateRequired('summaryLineChartData', $this->summaryLineChartData, true);
    }

    public function toMap()
    {
        $res = [];
        if (null !== $this->status) {
            $res['Status'] = $this->status;
        }
        if (null !== $this->summaryLineChartData) {
            $res['SummaryLineChartData'] = null !== $this->summaryLineChartData ? $this->summaryLineChartData->toMap() : null;
        }

        return $res;
    }

    /**
     * @param array $map
     *
     * @return summaryLineChartDataRsp
     */
    public static function fromMap($map = [])
    {
        $model = new self();
        if (isset($map['Status'])) {
            $model->status = $map['Status'];
        }
        if (isset($map['SummaryLineChartData'])) {
            $model->summaryLineChartData = summaryLineChartData::fromMap($map['SummaryLineChartData']);
        }

        return $model;
    }
}
