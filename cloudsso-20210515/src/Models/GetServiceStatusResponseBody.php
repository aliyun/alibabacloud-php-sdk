<?php

// This file is auto-generated, don't edit it. Thanks.

namespace AlibabaCloud\SDK\Cloudsso\V20210515\Models;

use AlibabaCloud\Dara\Model;
use AlibabaCloud\SDK\Cloudsso\V20210515\Models\GetServiceStatusResponseBody\serviceStatus;

class GetServiceStatusResponseBody extends Model
{
    /**
     * @var string
     */
    public $requestId;

    /**
     * @var serviceStatus
     */
    public $serviceStatus;
    protected $_name = [
        'requestId' => 'RequestId',
        'serviceStatus' => 'ServiceStatus',
    ];

    public function validate()
    {
        if (null !== $this->serviceStatus) {
            $this->serviceStatus->validate();
        }
        parent::validate();
    }

    public function toArray($noStream = false)
    {
        $res = [];
        if (null !== $this->requestId) {
            $res['RequestId'] = $this->requestId;
        }

        if (null !== $this->serviceStatus) {
            $res['ServiceStatus'] = null !== $this->serviceStatus ? $this->serviceStatus->toArray($noStream) : $this->serviceStatus;
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

        if (isset($map['ServiceStatus'])) {
            $model->serviceStatus = serviceStatus::fromMap($map['ServiceStatus']);
        }

        return $model;
    }
}
