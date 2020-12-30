<?php

// This file is auto-generated, don't edit it. Thanks.

namespace AlibabaCloud\SDK\Sas\V20181203\Models\DescribeSecurityEventOperationStatusResponseBody\securityEventOperationStatusResponse;

use AlibabaCloud\Tea\Model;

class securityEventOperationStatuses extends Model
{
    /**
     * @var string
     */
    public $status;

    /**
     * @var string
     */
    public $securityEventId;

    /**
     * @var string
     */
    public $errorCode;
    protected $_name = [
        'status'          => 'Status',
        'securityEventId' => 'SecurityEventId',
        'errorCode'       => 'ErrorCode',
    ];

    public function validate()
    {
    }

    public function toMap()
    {
        $res = [];
        if (null !== $this->status) {
            $res['Status'] = $this->status;
        }
        if (null !== $this->securityEventId) {
            $res['SecurityEventId'] = $this->securityEventId;
        }
        if (null !== $this->errorCode) {
            $res['ErrorCode'] = $this->errorCode;
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
        if (isset($map['Status'])) {
            $model->status = $map['Status'];
        }
        if (isset($map['SecurityEventId'])) {
            $model->securityEventId = $map['SecurityEventId'];
        }
        if (isset($map['ErrorCode'])) {
            $model->errorCode = $map['ErrorCode'];
        }

        return $model;
    }
}
