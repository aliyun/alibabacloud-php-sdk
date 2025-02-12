<?php

// This file is auto-generated, don't edit it. Thanks.

namespace AlibabaCloud\SDK\EHPC\V20240730\Models;

use AlibabaCloud\Dara\Model;

class GetJobLogResponseBody extends Model
{
    /**
     * @var string
     */
    public $jobId;
    /**
     * @var string
     */
    public $requestId;
    /**
     * @var string
     */
    public $stderrLog;
    /**
     * @var string
     */
    public $stderrLogSize;
    /**
     * @var string
     */
    public $stdoutLog;
    /**
     * @var string
     */
    public $stdoutLogSize;
    /**
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
        parent::validate();
    }

    public function toArray($noStream = false)
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

    public function toMap($noStream = false)
    {
        return $this->toArray($noStream);
    }

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
