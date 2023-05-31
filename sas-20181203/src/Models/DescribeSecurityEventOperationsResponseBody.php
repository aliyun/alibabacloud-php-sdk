<?php

// This file is auto-generated, don't edit it. Thanks.

namespace AlibabaCloud\SDK\Sas\V20181203\Models;

use AlibabaCloud\SDK\Sas\V20181203\Models\DescribeSecurityEventOperationsResponseBody\securityEventOperationsResponse;
use AlibabaCloud\Tea\Model;

class DescribeSecurityEventOperationsResponseBody extends Model
{
    /**
     * @description The ID of the request, which is used to locate and troubleshoot issues.
     *
     * @example B7A2000F-497E-5DA0-B14D-615CD410DD7E
     *
     * @var string
     */
    public $requestId;

    /**
     * @description An array consisting of the operations that you can perform to handle the alert event.
     *
     * @var securityEventOperationsResponse[]
     */
    public $securityEventOperationsResponse;
    protected $_name = [
        'requestId'                       => 'RequestId',
        'securityEventOperationsResponse' => 'SecurityEventOperationsResponse',
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
        if (null !== $this->securityEventOperationsResponse) {
            $res['SecurityEventOperationsResponse'] = [];
            if (null !== $this->securityEventOperationsResponse && \is_array($this->securityEventOperationsResponse)) {
                $n = 0;
                foreach ($this->securityEventOperationsResponse as $item) {
                    $res['SecurityEventOperationsResponse'][$n++] = null !== $item ? $item->toMap() : $item;
                }
            }
        }

        return $res;
    }

    /**
     * @param array $map
     *
     * @return DescribeSecurityEventOperationsResponseBody
     */
    public static function fromMap($map = [])
    {
        $model = new self();
        if (isset($map['RequestId'])) {
            $model->requestId = $map['RequestId'];
        }
        if (isset($map['SecurityEventOperationsResponse'])) {
            if (!empty($map['SecurityEventOperationsResponse'])) {
                $model->securityEventOperationsResponse = [];
                $n                                      = 0;
                foreach ($map['SecurityEventOperationsResponse'] as $item) {
                    $model->securityEventOperationsResponse[$n++] = null !== $item ? securityEventOperationsResponse::fromMap($item) : $item;
                }
            }
        }

        return $model;
    }
}
