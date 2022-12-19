<?php

// This file is auto-generated, don't edit it. Thanks.

namespace AlibabaCloud\SDK\Sas\V20181203\Models\DescribeSecurityEventOperationStatusResponseBody\securityEventOperationStatusResponse;

use AlibabaCloud\Tea\Model;

class securityEventOperationStatuses extends Model
{
    /**
     * @description The code that indicates the handling result of the alert event.
     *
     * @example ignore.Success
     *
     * @var string
     */
    public $errorCode;

    /**
     * @description The ID of the alert event.
     *
     * @example 12321
     *
     * @var string
     */
    public $securityEventId;

    /**
     * @description The handling status of the alert event. Valid values:
     *
     *   **Processing**: The alert event is being handled.
     *   **Success**: The alert event is handled.
     *   **Failed**: The alert event failed to be handled.
     *
     * @example Success
     *
     * @var string
     */
    public $status;
    protected $_name = [
        'errorCode'       => 'ErrorCode',
        'securityEventId' => 'SecurityEventId',
        'status'          => 'Status',
    ];

    public function validate()
    {
    }

    public function toMap()
    {
        $res = [];
        if (null !== $this->errorCode) {
            $res['ErrorCode'] = $this->errorCode;
        }
        if (null !== $this->securityEventId) {
            $res['SecurityEventId'] = $this->securityEventId;
        }
        if (null !== $this->status) {
            $res['Status'] = $this->status;
        }

        return $res;
    }

    /**
     * @param array $map
     *
     * @return securityEventOperationStatuses
     */
    public static function fromMap($map = [])
    {
        $model = new self();
        if (isset($map['ErrorCode'])) {
            $model->errorCode = $map['ErrorCode'];
        }
        if (isset($map['SecurityEventId'])) {
            $model->securityEventId = $map['SecurityEventId'];
        }
        if (isset($map['Status'])) {
            $model->status = $map['Status'];
        }

        return $model;
    }
}
