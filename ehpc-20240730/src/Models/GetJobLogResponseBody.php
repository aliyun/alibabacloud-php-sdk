<?php

// This file is auto-generated, don't edit it. Thanks.

namespace AlibabaCloud\SDK\EHPC\V20240730\Models;

use AlibabaCloud\Tea\Model;

class GetJobLogResponseBody extends Model
{
    /**
     * @description The job ID.
     *
     * @example 1.manager
     *
     * @var string
     */
    public $jobId;

    /**
     * @description The request ID.
     *
     * @example B745C159-3155-4B94-95D0-4B73D4D2****
     *
     * @var string
     */
    public $requestId;

    /**
     * @description The error output log that is encoded in Base64.
     *
     * @example aG9zdG5hbWU=
     *
     * @var string
     */
    public $stderrLog;

    /**
     * @description The size of the error output file.
     *
     * @example 0
     *
     * @var string
     */
    public $stderrLogSize;

    /**
     * @description The standard output log that is encoded in Base64.
     *
     * @example aG9zdG5hbWU=
     *
     * @var string
     */
    public $stdoutLog;

    /**
     * @description The size of the standard output file.
     *
     * @example 4096
     *
     * @var string
     */
    public $stdoutLogSize;

    /**
     * @description Indicates whether the request was successful. Valid values:
     *
     *   true: The request was successful.
     *   false: The request failed.
     *
     * @example true
     *
     * @var string
     */
    public $success;
    protected $_name = [
        'jobId'         => 'JobId',
        'requestId'     => 'RequestId',
        'stderrLog'     => 'StderrLog',
        'stderrLogSize' => 'StderrLogSize',
        'stdoutLog'     => 'StdoutLog',
        'stdoutLogSize' => 'StdoutLogSize',
        'success'       => 'Success',
    ];

    public function validate()
    {
    }

    public function toMap()
    {
        $res = [];
        if (null !== $this->jobId) {
            $res['JobId'] = $this->jobId;
        }
        if (null !== $this->requestId) {
            $res['RequestId'] = $this->requestId;
        }
        if (null !== $this->stderrLog) {
            $res['StderrLog'] = $this->stderrLog;
        }
        if (null !== $this->stderrLogSize) {
            $res['StderrLogSize'] = $this->stderrLogSize;
        }
        if (null !== $this->stdoutLog) {
            $res['StdoutLog'] = $this->stdoutLog;
        }
        if (null !== $this->stdoutLogSize) {
            $res['StdoutLogSize'] = $this->stdoutLogSize;
        }
        if (null !== $this->success) {
            $res['Success'] = $this->success;
        }

        return $res;
    }

    /**
     * @param array $map
     *
     * @return GetJobLogResponseBody
     */
    public static function fromMap($map = [])
    {
        $model = new self();
        if (isset($map['JobId'])) {
            $model->jobId = $map['JobId'];
        }
        if (isset($map['RequestId'])) {
            $model->requestId = $map['RequestId'];
        }
        if (isset($map['StderrLog'])) {
            $model->stderrLog = $map['StderrLog'];
        }
        if (isset($map['StderrLogSize'])) {
            $model->stderrLogSize = $map['StderrLogSize'];
        }
        if (isset($map['StdoutLog'])) {
            $model->stdoutLog = $map['StdoutLog'];
        }
        if (isset($map['StdoutLogSize'])) {
            $model->stdoutLogSize = $map['StdoutLogSize'];
        }
        if (isset($map['Success'])) {
            $model->success = $map['Success'];
        }

        return $model;
    }
}
