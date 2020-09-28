<?php

// This file is auto-generated, don't edit it. Thanks.

namespace AlibabaCloud\SDK\Brainindustrial\V20200920\Models\GetDailyReportInfoResponse;

use AlibabaCloud\SDK\Brainindustrial\V20200920\Models\GetDailyReportInfoResponse\dayResultRsp\dayResultData;
use AlibabaCloud\Tea\Model;

class dayResultRsp extends Model
{
    /**
     * @var bool
     */
    public $status;

    /**
     * @var dayResultData
     */
    public $dayResultData;
    protected $_name = [
        'status'        => 'Status',
        'dayResultData' => 'DayResultData',
    ];

    public function validate()
    {
        Model::validateRequired('status', $this->status, true);
        Model::validateRequired('dayResultData', $this->dayResultData, true);
    }

    public function toMap()
    {
        $res = [];
        if (null !== $this->status) {
            $res['Status'] = $this->status;
        }
        if (null !== $this->dayResultData) {
            $res['DayResultData'] = null !== $this->dayResultData ? $this->dayResultData->toMap() : null;
        }

        return $res;
    }

    /**
     * @param array $map
     *
     * @return dayResultRsp
     */
    public static function fromMap($map = [])
    {
        $model = new self();
        if (isset($map['Status'])) {
            $model->status = $map['Status'];
        }
        if (isset($map['DayResultData'])) {
            $model->dayResultData = dayResultData::fromMap($map['DayResultData']);
        }

        return $model;
    }
}
