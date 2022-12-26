<?php

// This file is auto-generated, don't edit it. Thanks.

namespace AlibabaCloud\SDK\Sas\V20181203\Models;

use AlibabaCloud\SDK\Sas\V20181203\Models\AdvanceSecurityEventOperationsResponseBody\securityEventOperationsResponse;
use AlibabaCloud\Tea\Model;

class AdvanceSecurityEventOperationsResponseBody extends Model
{
    /**
     * @example A4EB8B1C-1DEC-5E18-BCD0-XXXXXXXXX
     *
     * @var string
     */
    public $requestId;

    /**
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
     * @return AdvanceSecurityEventOperationsResponseBody
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
