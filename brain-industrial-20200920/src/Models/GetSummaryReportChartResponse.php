<?php

// This file is auto-generated, don't edit it. Thanks.

namespace AlibabaCloud\SDK\Brainindustrial\V20200920\Models;

use AlibabaCloud\SDK\Brainindustrial\V20200920\Models\GetSummaryReportChartResponse\summaryLineChartDataRsp;
use AlibabaCloud\Tea\Model;

class GetSummaryReportChartResponse extends Model
{
    /**
     * @var string
     */
    public $code;

    /**
     * @var string
     */
    public $message;

    /**
     * @var string
     */
    public $requestId;

    /**
     * @var bool
     */
    public $success;

    /**
     * @var summaryLineChartDataRsp
     */
    public $summaryLineChartDataRsp;
    protected $_name = [
        'code'                    => 'Code',
        'message'                 => 'Message',
        'requestId'               => 'RequestId',
        'success'                 => 'Success',
        'summaryLineChartDataRsp' => 'SummaryLineChartDataRsp',
    ];

    public function validate()
    {
        Model::validateRequired('code', $this->code, true);
        Model::validateRequired('message', $this->message, true);
        Model::validateRequired('requestId', $this->requestId, true);
        Model::validateRequired('success', $this->success, true);
        Model::validateRequired('summaryLineChartDataRsp', $this->summaryLineChartDataRsp, true);
    }

    public function toMap()
    {
        $res = [];
        if (null !== $this->code) {
            $res['Code'] = $this->code;
        }
        if (null !== $this->message) {
            $res['Message'] = $this->message;
        }
        if (null !== $this->requestId) {
            $res['RequestId'] = $this->requestId;
        }
        if (null !== $this->success) {
            $res['Success'] = $this->success;
        }
        if (null !== $this->summaryLineChartDataRsp) {
            $res['SummaryLineChartDataRsp'] = null !== $this->summaryLineChartDataRsp ? $this->summaryLineChartDataRsp->toMap() : null;
        }

        return $res;
    }

    /**
     * @param array $map
     *
     * @return GetSummaryReportChartResponse
     */
    public static function fromMap($map = [])
    {
        $model = new self();
        if (isset($map['Code'])) {
            $model->code = $map['Code'];
        }
        if (isset($map['Message'])) {
            $model->message = $map['Message'];
        }
        if (isset($map['RequestId'])) {
            $model->requestId = $map['RequestId'];
        }
        if (isset($map['Success'])) {
            $model->success = $map['Success'];
        }
        if (isset($map['SummaryLineChartDataRsp'])) {
            $model->summaryLineChartDataRsp = summaryLineChartDataRsp::fromMap($map['SummaryLineChartDataRsp']);
        }

        return $model;
    }
}
