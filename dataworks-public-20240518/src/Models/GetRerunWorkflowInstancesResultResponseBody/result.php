<?php

// This file is auto-generated, don't edit it. Thanks.

namespace AlibabaCloud\SDK\Dataworkspublic\V20240518\Models\GetRerunWorkflowInstancesResultResponseBody;

use AlibabaCloud\Tea\Model;

class result extends Model
{
    /**
     * @description The failure message. Returned if the rerun fails.
     *
     * @example Invalid Param xxx
     *
     * @var string
     */
    public $failureMessage;

    /**
     * @description The status. NotRun Success Failure
     *
     * @example Success
     *
     * @var string
     */
    public $status;
    protected $_name = [
        'failureMessage' => 'FailureMessage',
        'status' => 'Status',
    ];

    public function validate() {}

    public function toMap()
    {
        $res = [];
        if (null !== $this->failureMessage) {
            $res['FailureMessage'] = $this->failureMessage;
        }
        if (null !== $this->status) {
            $res['Status'] = $this->status;
        }

        return $res;
    }

    /**
     * @param array $map
     *
     * @return result
     */
    public static function fromMap($map = [])
    {
        $model = new self();
        if (isset($map['FailureMessage'])) {
            $model->failureMessage = $map['FailureMessage'];
        }
        if (isset($map['Status'])) {
            $model->status = $map['Status'];
        }

        return $model;
    }
}
