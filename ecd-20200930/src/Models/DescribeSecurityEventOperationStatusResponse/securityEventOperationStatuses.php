<?php

// This file is auto-generated, don't edit it. Thanks.

namespace AlibabaCloud\SDK\Ecd\V20200930\Models\DescribeSecurityEventOperationStatusResponse;

use AlibabaCloud\Tea\Model;

class securityEventOperationStatuses extends Model
{
    /**
     * @var string
     */
    public $errorCode;

    /**
     * @var int
     */
    public $securityEventId;

    /**
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
        Model::validateRequired('errorCode', $this->errorCode, true);
        Model::validateRequired('securityEventId', $this->securityEventId, true);
        Model::validateRequired('status', $this->status, true);
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
