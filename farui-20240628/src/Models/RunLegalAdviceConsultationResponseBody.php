<?php

// This file is auto-generated, don't edit it. Thanks.

namespace AlibabaCloud\SDK\FaRui\V20240628\Models;

use AlibabaCloud\SDK\FaRui\V20240628\Models\RunLegalAdviceConsultationResponseBody\usage;
use AlibabaCloud\Tea\Model;

class RunLegalAdviceConsultationResponseBody extends Model
{
    /**
     * @example Request.Signature.Error
     *
     * @var string
     */
    public $code;

    /**
     * @var string
     */
    public $message;

    /**
     * @example 744419D0-671A-5997-9840-E8AE48356194
     *
     * @var string
     */
    public $requestId;

    /**
     * @var string
     */
    public $responseMarkdown;

    /**
     * @example 1
     *
     * @var int
     */
    public $round;

    /**
     * @var string
     */
    public $status;

    /**
     * @example True
     *
     * @var bool
     */
    public $success;

    /**
     * @var usage
     */
    public $usage;

    /**
     * @example 200
     *
     * @var string
     */
    public $httpStatusCode;
    protected $_name = [
        'code'             => 'Code',
        'message'          => 'Message',
        'requestId'        => 'RequestId',
        'responseMarkdown' => 'ResponseMarkdown',
        'round'            => 'Round',
        'status'           => 'Status',
        'success'          => 'Success',
        'usage'            => 'Usage',
        'httpStatusCode'   => 'httpStatusCode',
    ];

    public function validate()
    {
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
        if (null !== $this->responseMarkdown) {
            $res['ResponseMarkdown'] = $this->responseMarkdown;
        }
        if (null !== $this->round) {
            $res['Round'] = $this->round;
        }
        if (null !== $this->status) {
            $res['Status'] = $this->status;
        }
        if (null !== $this->success) {
            $res['Success'] = $this->success;
        }
        if (null !== $this->usage) {
            $res['Usage'] = null !== $this->usage ? $this->usage->toMap() : null;
        }
        if (null !== $this->httpStatusCode) {
            $res['httpStatusCode'] = $this->httpStatusCode;
        }

        return $res;
    }

    /**
     * @param array $map
     *
     * @return RunLegalAdviceConsultationResponseBody
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
        if (isset($map['ResponseMarkdown'])) {
            $model->responseMarkdown = $map['ResponseMarkdown'];
        }
        if (isset($map['Round'])) {
            $model->round = $map['Round'];
        }
        if (isset($map['Status'])) {
            $model->status = $map['Status'];
        }
        if (isset($map['Success'])) {
            $model->success = $map['Success'];
        }
        if (isset($map['Usage'])) {
            $model->usage = usage::fromMap($map['Usage']);
        }
        if (isset($map['httpStatusCode'])) {
            $model->httpStatusCode = $map['httpStatusCode'];
        }

        return $model;
    }
}
