<?php

// This file is auto-generated, don't edit it. Thanks.

namespace AlibabaCloud\SDK\ResourceCenter\V20221201\Models;

use AlibabaCloud\Dara\Model;

class GetMultiAccountResourceCenterServiceStatusResponseBody extends Model
{
    /**
     * @var string
     */
    public $initialStatus;
    /**
     * @var string
     */
    public $requestId;
    /**
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
        parent::validate();
    }

    public function toArray($noStream = false)
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

    public function toMap($noStream = false)
    {
        return $this->toArray($noStream);
    }

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
