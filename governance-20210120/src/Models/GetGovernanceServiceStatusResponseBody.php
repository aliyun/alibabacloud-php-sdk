<?php

// This file is auto-generated, don't edit it. Thanks.

namespace AlibabaCloud\SDK\Governance\V20210120\Models;

use AlibabaCloud\Dara\Model;

class GetGovernanceServiceStatusResponseBody extends Model
{
    /**
     * @var string
     */
    public $failureCode;

    /**
     * @var string
     */
    public $failureMessage;

    /**
     * @var string
     */
    public $requestId;

    /**
     * @var string
     */
    public $serviceStatus;
    protected $_name = [
        'failureCode' => 'FailureCode',
        'failureMessage' => 'FailureMessage',
        'requestId' => 'RequestId',
        'serviceStatus' => 'ServiceStatus',
    ];

    public function validate()
    {
        parent::validate();
    }

    public function toArray($noStream = false)
    {
        $res = [];
        if (null !== $this->failureCode) {
            $res['FailureCode'] = $this->failureCode;
        }

        if (null !== $this->failureMessage) {
            $res['FailureMessage'] = $this->failureMessage;
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
        if (isset($map['FailureCode'])) {
            $model->failureCode = $map['FailureCode'];
        }

        if (isset($map['FailureMessage'])) {
            $model->failureMessage = $map['FailureMessage'];
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
