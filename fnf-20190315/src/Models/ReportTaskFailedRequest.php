<?php

// This file is auto-generated, don't edit it. Thanks.

namespace AlibabaCloud\SDK\Fnf\V20190315\Models;

use AlibabaCloud\Tea\Model;

class ReportTaskFailedRequest extends Model
{
    /**
     * @description The cause of the failure. The value must be 1 to 4,096 characters in length.
     *
     * @example emptyString
     *
     * @var string
     */
    public $cause;

    /**
     * @description The error code for the failed task. The value must be 1 to 128 characters in length.
     *
     * This parameter is required.
     * @example nill
     *
     * @var string
     */
    public $error;

    /**
     * @description The token of the task whose execution you want to report. The task token is passed to the called service, such as Message Service (MNS) or Function Compute. For MNS, the value of this parameter can be obtained from a message. For Function Compute, the value of this parameter can be obtained from an event. For more information, see [Service integration modes](https://help.aliyun.com/document_detail/2592915.html).
     *
     * This parameter is required.
     * @example emptyString
     *
     * @var string
     */
    public $taskToken;
    protected $_name = [
        'cause'     => 'Cause',
        'error'     => 'Error',
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
        if (isset($map['TaskToken'])) {
            $model->taskToken = $map['TaskToken'];
        }

        return $model;
    }
}
