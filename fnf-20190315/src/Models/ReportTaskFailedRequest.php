<?php

// This file is auto-generated, don't edit it. Thanks.

namespace AlibabaCloud\SDK\Fnf\V20190315\Models;

use AlibabaCloud\Tea\Model;

class ReportTaskFailedRequest extends Model
{
    /**
     * @var string
     */
    public $requestId;

    /**
     * @var string
     */
    public $taskToken;

    /**
     * @var string
     */
    public $error;

    /**
     * @var string
     */
    public $cause;
    protected $_name = [
        'requestId' => 'RequestId',
        'taskToken' => 'TaskToken',
        'error'     => 'Error',
        'cause'     => 'Cause',
    ];

    public function validate()
    {
    }

    public function toMap()
    {
        $res = [];
        if (null !== $this->requestId) {
            $res['RequestId'] = $this->requestId;
        }
        if (null !== $this->taskToken) {
            $res['TaskToken'] = $this->taskToken;
        }
        if (null !== $this->error) {
            $res['Error'] = $this->error;
        }
        if (null !== $this->cause) {
            $res['Cause'] = $this->cause;
        }

        return $res;
    }

    /**
     * @param array $map
     *
     * @return ReportTaskFailedRequest
     */
    public static function fromMap($map = [])
    {
        $model = new self();
        if (isset($map['RequestId'])) {
            $model->requestId = $map['RequestId'];
        }
        if (isset($map['TaskToken'])) {
            $model->taskToken = $map['TaskToken'];
        }
        if (isset($map['Error'])) {
            $model->error = $map['Error'];
        }
        if (isset($map['Cause'])) {
            $model->cause = $map['Cause'];
        }

        return $model;
    }
}
