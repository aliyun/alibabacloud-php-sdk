<?php

// This file is auto-generated, don't edit it. Thanks.

namespace AlibabaCloud\SDK\Brainindustrial\V20200920\Models\GetDailyReportChartResponse;

use AlibabaCloud\SDK\Brainindustrial\V20200920\Models\GetDailyReportChartResponse\dayLineChartDataRsp\dayLineChartData;
use AlibabaCloud\Tea\Model;

class dayLineChartDataRsp extends Model
{
    /**
     * @var bool
     */
    public $status;

    /**
     * @var dayLineChartData
     */
    public $dayLineChartData;
    protected $_name = [
        'status'           => 'Status',
        'dayLineChartData' => 'DayLineChartData',
    ];

    public function validate()
    {
        Model::validateRequired('status', $this->status, true);
        Model::validateRequired('dayLineChartData', $this->dayLineChartData, true);
    }

    public function toMap()
    {
        $res = [];
        if (null !== $this->status) {
            $res['Status'] = $this->status;
        }
        if (null !== $this->dayLineChartData) {
            $res['DayLineChartData'] = null !== $this->dayLineChartData ? $this->dayLineChartData->toMap() : null;
        }

        return $res;
    }

    /**
     * @param array $map
     *
     * @return dayLineChartDataRsp
     */
    public static function fromMap($map = [])
    {
        $model = new self();
        if (isset($map['Status'])) {
            $model->status = $map['Status'];
        }
        if (isset($map['DayLineChartData'])) {
            $model->dayLineChartData = dayLineChartData::fromMap($map['DayLineChartData']);
        }

        return $model;
    }
}
