<?php

// This file is auto-generated, don't edit it. Thanks.

namespace AlibabaCloud\SDK\Brainindustrial\V20200920\Models;

use AlibabaCloud\SDK\Brainindustrial\V20200920\Models\GetSummaryReportInfoResponse\summaryResultRsp;
use AlibabaCloud\Tea\Model;

class GetSummaryReportInfoResponse extends Model
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
     * @var summaryResultRsp
     */
    public $summaryResultRsp;
    protected $_name = [
        'code'             => 'Code',
        'message'          => 'Message',
        'requestId'        => 'RequestId',
        'success'          => 'Success',
        'summaryResultRsp' => 'SummaryResultRsp',
    ];

    public function validate()
    {
        Model::validateRequired('code', $this->code, true);
        Model::validateRequired('message', $this->message, true);
        Model::validateRequired('requestId', $this->requestId, true);
        Model::validateRequired('success', $this->success, true);
        Model::validateRequired('summaryResultRsp', $this->summaryResultRsp, true);
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
        if (null !== $this->summaryResultRsp) {
            $res['SummaryResultRsp'] = null !== $this->summaryResultRsp ? $this->summaryResultRsp->toMap() : null;
        }

        return $res;
    }

    /**
     * @param array $map
     *
     * @return GetSummaryReportInfoResponse
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
        if (isset($map['SummaryResultRsp'])) {
            $model->summaryResultRsp = summaryResultRsp::fromMap($map['SummaryResultRsp']);
        }

        return $model;
    }
}
