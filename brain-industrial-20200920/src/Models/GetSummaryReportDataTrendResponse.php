<?php

// This file is auto-generated, don't edit it. Thanks.

namespace AlibabaCloud\SDK\Brainindustrial\V20200920\Models;

use AlibabaCloud\SDK\Brainindustrial\V20200920\Models\GetSummaryReportDataTrendResponse\summaryTrendData;
use AlibabaCloud\Tea\Model;

class GetSummaryReportDataTrendResponse extends Model
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
     * @var summaryTrendData
     */
    public $summaryTrendData;
    protected $_name = [
        'code'             => 'Code',
        'message'          => 'Message',
        'requestId'        => 'RequestId',
        'success'          => 'Success',
        'summaryTrendData' => 'SummaryTrendData',
    ];

    public function validate()
    {
        Model::validateRequired('code', $this->code, true);
        Model::validateRequired('message', $this->message, true);
        Model::validateRequired('requestId', $this->requestId, true);
        Model::validateRequired('success', $this->success, true);
        Model::validateRequired('summaryTrendData', $this->summaryTrendData, true);
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
        if (null !== $this->summaryTrendData) {
            $res['SummaryTrendData'] = null !== $this->summaryTrendData ? $this->summaryTrendData->toMap() : null;
        }

        return $res;
    }

    /**
     * @param array $map
     *
     * @return GetSummaryReportDataTrendResponse
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
        if (isset($map['SummaryTrendData'])) {
            $model->summaryTrendData = summaryTrendData::fromMap($map['SummaryTrendData']);
        }

        return $model;
    }
}
