<?php

// This file is auto-generated, don't edit it. Thanks.

namespace AlibabaCloud\SDK\FaRui\V20240628\Models;

use AlibabaCloud\SDK\FaRui\V20240628\Models\RunContractResultGenerationResponseBody\output;
use AlibabaCloud\SDK\FaRui\V20240628\Models\RunContractResultGenerationResponseBody\usage;
use AlibabaCloud\Tea\Model;

class RunContractResultGenerationResponseBody extends Model
{
    /**
     * @example null
     *
     * @var string
     */
    public $code;

    /**
     * @example null
     *
     * @var string
     */
    public $message;

    /**
     * @var output
     */
    public $output;

    /**
     * @example 744419D0-671A-5997-9840-E8AE48356194
     *
     * @var string
     */
    public $requestId;

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
        'code'           => 'Code',
        'message'        => 'Message',
        'output'         => 'Output',
        'requestId'      => 'RequestId',
        'success'        => 'Success',
        'usage'          => 'Usage',
        'httpStatusCode' => 'httpStatusCode',
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
        if (null !== $this->output) {
            $res['Output'] = null !== $this->output ? $this->output->toMap() : null;
        }
        if (null !== $this->requestId) {
            $res['RequestId'] = $this->requestId;
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
     * @return RunContractResultGenerationResponseBody
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
        if (isset($map['Output'])) {
            $model->output = output::fromMap($map['Output']);
        }
        if (isset($map['RequestId'])) {
            $model->requestId = $map['RequestId'];
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
