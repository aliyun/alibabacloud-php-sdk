<?php

// This file is auto-generated, don't edit it. Thanks.

namespace AlibabaCloud\SDK\Iovcc\V20180501\Models;

use AlibabaCloud\SDK\Iovcc\V20180501\Models\GetVehicleControlResultResponseBody\executionInfo;
use AlibabaCloud\Tea\Model;

class GetVehicleControlResultResponseBody extends Model
{
    /**
     * @description Id of the request
     *
     * @var string
     */
    public $requestId;

    /**
     * @var executionInfo
     */
    public $executionInfo;
    protected $_name = [
        'requestId'     => 'RequestId',
        'executionInfo' => 'ExecutionInfo',
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
        if (null !== $this->executionInfo) {
            $res['ExecutionInfo'] = null !== $this->executionInfo ? $this->executionInfo->toMap() : null;
        }

        return $res;
    }

    /**
     * @param array $map
     *
     * @return GetVehicleControlResultResponseBody
     */
    public static function fromMap($map = [])
    {
        $model = new self();
        if (isset($map['RequestId'])) {
            $model->requestId = $map['RequestId'];
        }
        if (isset($map['ExecutionInfo'])) {
            $model->executionInfo = executionInfo::fromMap($map['ExecutionInfo']);
        }

        return $model;
    }
}
