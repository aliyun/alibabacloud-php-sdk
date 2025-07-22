<?php

// This file is auto-generated, don't edit it. Thanks.

namespace AlibabaCloud\SDK\OutboundBot\V20191226\Models;

use AlibabaCloud\Tea\Model;

class GetAssignJobsAsyncResultResponseBody extends Model
{
    /**
     * @example OK
     *
     * @var string
     */
    public $code;

    /**
     * @example 200
     *
     * @var int
     */
    public $httpStatusCode;

    /**
     * @example d3550dd1-360d-4fe5-b4b2-667a4a664dab
     *
     * @var string
     */
    public $jobGroupId;

    /**
     * @var string[]
     */
    public $jobsId;

    /**
     * @example Success
     *
     * @var string
     */
    public $message;

    /**
     * @example 254EB995-DEDF-48A4-9101-9CA5B72FFBCC
     *
     * @var string
     */
    public $requestId;

    /**
     * @example true
     *
     * @var bool
     */
    public $success;

    /**
     * @example false
     *
     * @var bool
     */
    public $timeout;

    /**
     * @example true
     *
     * @var bool
     */
    public $valid;
    protected $_name = [
        'code' => 'Code',
        'httpStatusCode' => 'HttpStatusCode',
        'jobGroupId' => 'JobGroupId',
        'jobsId' => 'JobsId',
        'message' => 'Message',
        'requestId' => 'RequestId',
        'success' => 'Success',
        'timeout' => 'Timeout',
        'valid' => 'Valid',
    ];

    public function validate() {}

    public function toMap()
    {
        $res = [];
        if (null !== $this->code) {
            $res['Code'] = $this->code;
        }
        if (null !== $this->httpStatusCode) {
            $res['HttpStatusCode'] = $this->httpStatusCode;
        }
        if (null !== $this->jobGroupId) {
            $res['JobGroupId'] = $this->jobGroupId;
        }
        if (null !== $this->jobsId) {
            $res['JobsId'] = $this->jobsId;
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
        if (null !== $this->timeout) {
            $res['Timeout'] = $this->timeout;
        }
        if (null !== $this->valid) {
            $res['Valid'] = $this->valid;
        }

        return $res;
    }

    /**
     * @param array $map
     *
     * @return GetAssignJobsAsyncResultResponseBody
     */
    public static function fromMap($map = [])
    {
        $model = new self();
        if (isset($map['Code'])) {
            $model->code = $map['Code'];
        }
        if (isset($map['HttpStatusCode'])) {
            $model->httpStatusCode = $map['HttpStatusCode'];
        }
        if (isset($map['JobGroupId'])) {
            $model->jobGroupId = $map['JobGroupId'];
        }
        if (isset($map['JobsId'])) {
            if (!empty($map['JobsId'])) {
                $model->jobsId = $map['JobsId'];
            }
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
        if (isset($map['Timeout'])) {
            $model->timeout = $map['Timeout'];
        }
        if (isset($map['Valid'])) {
            $model->valid = $map['Valid'];
        }

        return $model;
    }
}
