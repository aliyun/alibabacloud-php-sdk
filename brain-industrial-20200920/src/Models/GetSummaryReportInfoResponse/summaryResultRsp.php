<?php

// This file is auto-generated, don't edit it. Thanks.

namespace AlibabaCloud\SDK\Brainindustrial\V20200920\Models\GetSummaryReportInfoResponse;

use AlibabaCloud\SDK\Brainindustrial\V20200920\Models\GetSummaryReportInfoResponse\summaryResultRsp\summaryResultData;
use AlibabaCloud\Tea\Model;

class summaryResultRsp extends Model
{
    /**
     * @var bool
     */
    public $status;

    /**
     * @var summaryResultData
     */
    public $summaryResultData;
    protected $_name = [
        'status'            => 'Status',
        'summaryResultData' => 'SummaryResultData',
    ];

    public function validate()
    {
        Model::validateRequired('status', $this->status, true);
        Model::validateRequired('summaryResultData', $this->summaryResultData, true);
    }

    public function toMap()
    {
        $res = [];
        if (null !== $this->status) {
            $res['Status'] = $this->status;
        }
        if (null !== $this->summaryResultData) {
            $res['SummaryResultData'] = null !== $this->summaryResultData ? $this->summaryResultData->toMap() : null;
        }

        return $res;
    }

    /**
     * @param array $map
     *
     * @return summaryResultRsp
     */
    public static function fromMap($map = [])
    {
        $model = new self();
        if (isset($map['Status'])) {
            $model->status = $map['Status'];
        }
        if (isset($map['SummaryResultData'])) {
            $model->summaryResultData = summaryResultData::fromMap($map['SummaryResultData']);
        }

        return $model;
    }
}
