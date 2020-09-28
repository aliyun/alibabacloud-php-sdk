<?php

// This file is auto-generated, don't edit it. Thanks.

namespace AlibabaCloud\SDK\Brainindustrial\V20200920\Models;

use AlibabaCloud\SDK\Brainindustrial\V20200920\Models\GetDailyReportChartResponse\dayLineChartDataRsp;
use AlibabaCloud\Tea\Model;

class GetDailyReportChartResponse extends Model
{
    /**
     * @var string
     */
    public $requestId;

    /**
     * @var string
     */
    public $message;

    /**
     * @var string
     */
    public $code;

    /**
     * @var bool
     */
    public $success;

    /**
     * @var dayLineChartDataRsp
     */
    public $dayLineChartDataRsp;
    protected $_name = [
        'requestId'           => 'RequestId',
        'message'             => 'Message',
        'code'                => 'Code',
        'success'             => 'Success',
        'dayLineChartDataRsp' => 'DayLineChartDataRsp',
    ];

    public function validate()
    {
        Model::validateRequired('requestId', $this->requestId, true);
        Model::validateRequired('message', $this->message, true);
        Model::validateRequired('code', $this->code, true);
        Model::validateRequired('success', $this->success, true);
        Model::validateRequired('dayLineChartDataRsp', $this->dayLineChartDataRsp, true);
    }

    public function toMap()
    {
        $res = [];
        if (null !== $this->requestId) {
            $res['RequestId'] = $this->requestId;
        }
        if (null !== $this->message) {
            $res['Message'] = $this->message;
        }
        if (null !== $this->code) {
            $res['Code'] = $this->code;
        }
        if (null !== $this->success) {
            $res['Success'] = $this->success;
        }
        if (null !== $this->dayLineChartDataRsp) {
            $res['DayLineChartDataRsp'] = null !== $this->dayLineChartDataRsp ? $this->dayLineChartDataRsp->toMap() : null;
        }

        return $res;
    }

    /**
     * @param array $map
     *
     * @return GetDailyReportChartResponse
     */
    public static function fromMap($map = [])
    {
        $model = new self();
        if (isset($map['RequestId'])) {
            $model->requestId = $map['RequestId'];
        }
        if (isset($map['Message'])) {
            $model->message = $map['Message'];
        }
        if (isset($map['Code'])) {
            $model->code = $map['Code'];
        }
        if (isset($map['Success'])) {
            $model->success = $map['Success'];
        }
        if (isset($map['DayLineChartDataRsp'])) {
            $model->dayLineChartDataRsp = dayLineChartDataRsp::fromMap($map['DayLineChartDataRsp']);
        }

        return $model;
    }
}
