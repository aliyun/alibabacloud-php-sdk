<?php

// This file is auto-generated, don't edit it. Thanks.

namespace AlibabaCloud\SDK\Cloudsso\V20210515\Models;

use AlibabaCloud\SDK\Cloudsso\V20210515\Models\GetServiceStatusResponseBody\serviceStatus;
use AlibabaCloud\Tea\Model;

class GetServiceStatusResponseBody extends Model
{
    /**
     * @description The ID of the request.
     *
     * @example ADADC31D-90EE-5459-99B0-D83DF07769A3
     *
     * @var string
     */
    public $requestId;

    /**
     * @description The status information of CloudSSO.
     *
     * @var serviceStatus
     */
    public $serviceStatus;
    protected $_name = [
        'requestId'     => 'RequestId',
        'serviceStatus' => 'ServiceStatus',
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
        if (null !== $this->serviceStatus) {
            $res['ServiceStatus'] = null !== $this->serviceStatus ? $this->serviceStatus->toMap() : null;
        }

        return $res;
    }

    /**
     * @param array $map
     *
     * @return GetServiceStatusResponseBody
     */
    public static function fromMap($map = [])
    {
        $model = new self();
        if (isset($map['RequestId'])) {
            $model->requestId = $map['RequestId'];
        }
        if (isset($map['ServiceStatus'])) {
            $model->serviceStatus = serviceStatus::fromMap($map['ServiceStatus']);
        }

        return $model;
    }
}
