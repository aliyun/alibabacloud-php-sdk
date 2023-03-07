<?php

// This file is auto-generated, don't edit it. Thanks.

namespace AlibabaCloud\SDK\ResourceCenter\V20221201\Models;

use AlibabaCloud\Tea\Model;

class GetMultiAccountResourceCenterServiceStatusResponseBody extends Model
{
    /**
     * @example Pending
     *
     * @var string
     */
    public $initialStatus;

    /**
     * @example 81671397-1425-51F1-A144-4799E01BEBFF
     *
     * @var string
     */
    public $requestId;

    /**
     * @example Enabled
     *
     * @var string
     */
    public $serviceStatus;
    protected $_name = [
        'initialStatus' => 'InitialStatus',
        'requestId'     => 'RequestId',
        'serviceStatus' => 'ServiceStatus',
    ];

    public function validate()
    {
    }

    public function toMap()
    {
        $res = [];
        if (null !== $this->initialStatus) {
            $res['InitialStatus'] = $this->initialStatus;
        }
        if (null !== $this->requestId) {
            $res['RequestId'] = $this->requestId;
        }
        if (null !== $this->serviceStatus) {
            $res['ServiceStatus'] = $this->serviceStatus;
        }

        return $res;
    }

    /**
     * @param array $map
     *
     * @return GetMultiAccountResourceCenterServiceStatusResponseBody
     */
    public static function fromMap($map = [])
    {
        $model = new self();
        if (isset($map['InitialStatus'])) {
            $model->initialStatus = $map['InitialStatus'];
        }
        if (isset($map['RequestId'])) {
            $model->requestId = $map['RequestId'];
        }
        if (isset($map['ServiceStatus'])) {
            $model->serviceStatus = $map['ServiceStatus'];
        }

        return $model;
    }
}
