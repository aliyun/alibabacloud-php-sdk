<?php

// This file is auto-generated, don't edit it. Thanks.

namespace AlibabaCloud\SDK\Fnf\V20190315\Models;

use AlibabaCloud\Tea\Model;

class ReportTaskFailedRequest extends Model
{
    /**
     * @example emptyString
     *
     * @var string
     */
    public $cause;

    /**
     * @example nill
     *
     * @var string
     */
    public $error;

    /**
     * @example testRequestId
     *
     * @var string
     */
    public $requestId;

    /**
     * @example emptyString
     *
     * @var string
     */
    public $taskToken;
    protected $_name = [
        'cause'     => 'Cause',
        'error'     => 'Error',
        'requestId' => 'RequestId',
        'taskToken' => 'TaskToken',
    ];

    public function validate()
    {
    }

    public function toMap()
    {
        $res = [];
        if (null !== $this->cause) {
            $res['Cause'] = $this->cause;
        }
        if (null !== $this->error) {
            $res['Error'] = $this->error;
        }
        if (null !== $this->requestId) {
            $res['RequestId'] = $this->requestId;
        }
        if (null !== $this->taskToken) {
            $res['TaskToken'] = $this->taskToken;
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
        if (isset($map['Cause'])) {
            $model->cause = $map['Cause'];
        }
        if (isset($map['Error'])) {
            $model->error = $map['Error'];
        }
        if (isset($map['RequestId'])) {
            $model->requestId = $map['RequestId'];
        }
        if (isset($map['TaskToken'])) {
            $model->taskToken = $map['TaskToken'];
        }

        return $model;
    }
}
