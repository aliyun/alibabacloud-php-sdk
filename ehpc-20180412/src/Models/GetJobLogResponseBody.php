<?php

// This file is auto-generated, don't edit it. Thanks.

namespace AlibabaCloud\SDK\EHPC\V20180412\Models;

use AlibabaCloud\Tea\Model;

class GetJobLogResponseBody extends Model
{
    /**
     * @example c2xlZXAgMzA=
     *
     * @var string
     */
    public $errorLog;

    /**
     * @example 1.scheduler****
     *
     * @var string
     */
    public $jobId;

    /**
     * @example c2xlZXAgMzA=
     *
     * @var string
     */
    public $outputLog;

    /**
     * @example B745C159-3155-4B94-95D0-4B73D4D2****
     *
     * @var string
     */
    public $requestId;
    protected $_name = [
        'errorLog'  => 'ErrorLog',
        'jobId'     => 'JobId',
        'outputLog' => 'OutputLog',
        'requestId' => 'RequestId',
    ];

    public function validate()
    {
    }

    public function toMap()
    {
        $res = [];
        if (null !== $this->errorLog) {
            $res['ErrorLog'] = $this->errorLog;
        }
        if (null !== $this->jobId) {
            $res['JobId'] = $this->jobId;
        }
        if (null !== $this->outputLog) {
            $res['OutputLog'] = $this->outputLog;
        }
        if (null !== $this->requestId) {
            $res['RequestId'] = $this->requestId;
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
        if (isset($map['ErrorLog'])) {
            $model->errorLog = $map['ErrorLog'];
        }
        if (isset($map['JobId'])) {
            $model->jobId = $map['JobId'];
        }
        if (isset($map['OutputLog'])) {
            $model->outputLog = $map['OutputLog'];
        }
        if (isset($map['RequestId'])) {
            $model->requestId = $map['RequestId'];
        }

        return $model;
    }
}
