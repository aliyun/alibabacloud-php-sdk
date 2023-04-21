<?php

// This file is auto-generated, don't edit it. Thanks.

namespace AlibabaCloud\SDK\Ecd\V20200930\Models;

use AlibabaCloud\SDK\Ecd\V20200930\Models\DescribeSecurityEventOperationsResponseBody\securityEventOperations;
use AlibabaCloud\Tea\Model;

class DescribeSecurityEventOperationsResponseBody extends Model
{
    /**
     * @description The ID of the request.
     *
     * @example 1CBAFFAB-B697-4049-A9B1-67E1FC5F****
     *
     * @var string
     */
    public $requestId;

    /**
     * @description The operations performed on the alert.
     *
     * @var securityEventOperations[]
     */
    public $securityEventOperations;
    protected $_name = [
        'requestId'               => 'RequestId',
        'securityEventOperations' => 'SecurityEventOperations',
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
        if (null !== $this->securityEventOperations) {
            $res['SecurityEventOperations'] = [];
            if (null !== $this->securityEventOperations && \is_array($this->securityEventOperations)) {
                $n = 0;
                foreach ($this->securityEventOperations as $item) {
                    $res['SecurityEventOperations'][$n++] = null !== $item ? $item->toMap() : $item;
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
        if (isset($map['SecurityEventOperations'])) {
            if (!empty($map['SecurityEventOperations'])) {
                $model->securityEventOperations = [];
                $n                              = 0;
                foreach ($map['SecurityEventOperations'] as $item) {
                    $model->securityEventOperations[$n++] = null !== $item ? securityEventOperations::fromMap($item) : $item;
                }
            }
        }

        return $model;
    }
}
