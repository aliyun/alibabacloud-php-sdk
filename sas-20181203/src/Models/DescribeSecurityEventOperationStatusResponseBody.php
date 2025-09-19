<?php

// This file is auto-generated, don't edit it. Thanks.

namespace AlibabaCloud\SDK\Sas\V20181203\Models;

use AlibabaCloud\Dara\Model;
use AlibabaCloud\SDK\Sas\V20181203\Models\DescribeSecurityEventOperationStatusResponseBody\securityEventOperationStatusResponse;

class DescribeSecurityEventOperationStatusResponseBody extends Model
{
    /**
     * @var string
     */
    public $requestId;

    /**
     * @var securityEventOperationStatusResponse
     */
    public $securityEventOperationStatusResponse;
    protected $_name = [
        'requestId' => 'RequestId',
        'securityEventOperationStatusResponse' => 'SecurityEventOperationStatusResponse',
    ];

    public function validate()
    {
        if (null !== $this->securityEventOperationStatusResponse) {
            $this->securityEventOperationStatusResponse->validate();
        }
        parent::validate();
    }

    public function toArray($noStream = false)
    {
        $res = [];
        if (null !== $this->requestId) {
            $res['RequestId'] = $this->requestId;
        }

        if (null !== $this->securityEventOperationStatusResponse) {
            $res['SecurityEventOperationStatusResponse'] = null !== $this->securityEventOperationStatusResponse ? $this->securityEventOperationStatusResponse->toArray($noStream) : $this->securityEventOperationStatusResponse;
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
        if (isset($map['RequestId'])) {
            $model->requestId = $map['RequestId'];
        }

        if (isset($map['SecurityEventOperationStatusResponse'])) {
            $model->securityEventOperationStatusResponse = securityEventOperationStatusResponse::fromMap($map['SecurityEventOperationStatusResponse']);
        }

        return $model;
    }
}
