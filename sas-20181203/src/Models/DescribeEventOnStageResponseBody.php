<?php

// This file is auto-generated, don't edit it. Thanks.

namespace AlibabaCloud\SDK\Sas\V20181203\Models;

use AlibabaCloud\SDK\Sas\V20181203\Models\DescribeEventOnStageResponseBody\securityEventStageResponse;
use AlibabaCloud\Tea\Model;

class DescribeEventOnStageResponseBody extends Model
{
    /**
     * @example 24A20733-10A0-4AF6-BE6B-E332241XXXXX
     *
     * @var string
     */
    public $requestId;

    /**
     * @var securityEventStageResponse
     */
    public $securityEventStageResponse;
    protected $_name = [
        'requestId'                  => 'RequestId',
        'securityEventStageResponse' => 'SecurityEventStageResponse',
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
        if (null !== $this->securityEventStageResponse) {
            $res['SecurityEventStageResponse'] = null !== $this->securityEventStageResponse ? $this->securityEventStageResponse->toMap() : null;
        }

        return $res;
    }

    /**
     * @param array $map
     *
     * @return DescribeEventOnStageResponseBody
     */
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
