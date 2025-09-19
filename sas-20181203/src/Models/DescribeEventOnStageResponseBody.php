<?php

// This file is auto-generated, don't edit it. Thanks.

namespace AlibabaCloud\SDK\Sas\V20181203\Models;

use AlibabaCloud\Dara\Model;
use AlibabaCloud\SDK\Sas\V20181203\Models\DescribeEventOnStageResponseBody\securityEventStageResponse;

class DescribeEventOnStageResponseBody extends Model
{
    /**
     * @var string
     */
    public $requestId;

    /**
     * @var securityEventStageResponse
     */
    public $securityEventStageResponse;
    protected $_name = [
        'requestId' => 'RequestId',
        'securityEventStageResponse' => 'SecurityEventStageResponse',
    ];

    public function validate()
    {
        if (null !== $this->securityEventStageResponse) {
            $this->securityEventStageResponse->validate();
        }
        parent::validate();
    }

    public function toArray($noStream = false)
    {
        $res = [];
        if (null !== $this->requestId) {
            $res['RequestId'] = $this->requestId;
        }

        if (null !== $this->securityEventStageResponse) {
            $res['SecurityEventStageResponse'] = null !== $this->securityEventStageResponse ? $this->securityEventStageResponse->toArray($noStream) : $this->securityEventStageResponse;
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

        if (isset($map['SecurityEventStageResponse'])) {
            $model->securityEventStageResponse = securityEventStageResponse::fromMap($map['SecurityEventStageResponse']);
        }

        return $model;
    }
}
