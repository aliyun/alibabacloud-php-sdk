<?php

// This file is auto-generated, don't edit it. Thanks.

namespace AlibabaCloud\SDK\Sas\V20181203\Models;

use AlibabaCloud\Dara\Model;
use AlibabaCloud\SDK\Sas\V20181203\Models\DescribeSecurityEventOperationsResponseBody\securityEventOperationsResponse;

class DescribeSecurityEventOperationsResponseBody extends Model
{
    /**
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
        if (\is_array($this->securityEventOperationsResponse)) {
            Model::validateArray($this->securityEventOperationsResponse);
        }
        parent::validate();
    }

    public function toArray($noStream = false)
    {
        $res = [];
        if (null !== $this->requestId) {
            $res['RequestId'] = $this->requestId;
        }

        if (null !== $this->securityEventOperationsResponse) {
            if (\is_array($this->securityEventOperationsResponse)) {
                $res['SecurityEventOperationsResponse'] = [];
                $n1                                     = 0;
                foreach ($this->securityEventOperationsResponse as $item1) {
                    $res['SecurityEventOperationsResponse'][$n1++] = null !== $item1 ? $item1->toArray($noStream) : $item1;
                }
            }
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

        if (isset($map['SecurityEventOperationsResponse'])) {
            if (!empty($map['SecurityEventOperationsResponse'])) {
                $model->securityEventOperationsResponse = [];
                $n1                                     = 0;
                foreach ($map['SecurityEventOperationsResponse'] as $item1) {
                    $model->securityEventOperationsResponse[$n1++] = securityEventOperationsResponse::fromMap($item1);
                }
            }
        }

        return $model;
    }
}
