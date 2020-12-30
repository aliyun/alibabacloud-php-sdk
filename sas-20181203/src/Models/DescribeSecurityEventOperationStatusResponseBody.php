<?php

// This file is auto-generated, don't edit it. Thanks.

namespace AlibabaCloud\SDK\Sas\V20181203\Models;

use AlibabaCloud\SDK\Sas\V20181203\Models\DescribeSecurityEventOperationStatusResponseBody\securityEventOperationStatusResponse;
use AlibabaCloud\Tea\Model;

class DescribeSecurityEventOperationStatusResponseBody extends Model
{
    /**
     * @var securityEventOperationStatusResponse
     */
    public $securityEventOperationStatusResponse;

    /**
     * @var string
     */
    public $requestId;
    protected $_name = [
        'securityEventOperationStatusResponse' => 'SecurityEventOperationStatusResponse',
        'requestId'                            => 'RequestId',
    ];

    public function validate()
    {
    }

    public function toMap()
    {
        $res = [];
        if (null !== $this->securityEventOperationStatusResponse) {
            $res['SecurityEventOperationStatusResponse'] = null !== $this->securityEventOperationStatusResponse ? $this->securityEventOperationStatusResponse->toMap() : null;
        }
        if (null !== $this->requestId) {
            $res['RequestId'] = $this->requestId;
        }

        return $res;
    }

    /**
     * @param array $map
     *
     * @return DescribeSecurityEventOperationStatusResponseBody
     */
    public static function fromMap($map = [])
    {
        $model = new self();
        if (isset($map['SecurityEventOperationStatusResponse'])) {
            $model->securityEventOperationStatusResponse = securityEventOperationStatusResponse::fromMap($map['SecurityEventOperationStatusResponse']);
        }
        if (isset($map['RequestId'])) {
            $model->requestId = $map['RequestId'];
        }

        return $model;
    }
}
