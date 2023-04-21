<?php

// This file is auto-generated, don't edit it. Thanks.

namespace AlibabaCloud\SDK\Ecd\V20200930\Models\DescribeSecurityEventOperationStatusResponseBody;

use AlibabaCloud\Tea\Model;

class securityEventOperationStatuses extends Model
{
    /**
     * @description The code that indicates the processing result of the alert.
     *
     * @example ignore.Success
     *
     * @var string
     */
    public $errorCode;

    /**
     * @description The ID of the alert.
     *
     * @example 12321
     *
     * @var int
     */
    public $securityEventId;

    /**
     * @description The processing status of the alert. Valid values:
     *
     *   Processing: The alert is being processed.
     *   Success: The alert is processed.
     *   Failed: The alert failed to be processed.
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
