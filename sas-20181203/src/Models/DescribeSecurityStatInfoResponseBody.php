<?php

// This file is auto-generated, don't edit it. Thanks.

namespace AlibabaCloud\SDK\Sas\V20181203\Models;

use AlibabaCloud\Dara\Model;
use AlibabaCloud\SDK\Sas\V20181203\Models\DescribeSecurityStatInfoResponseBody\attackEvent;
use AlibabaCloud\SDK\Sas\V20181203\Models\DescribeSecurityStatInfoResponseBody\healthCheck;
use AlibabaCloud\SDK\Sas\V20181203\Models\DescribeSecurityStatInfoResponseBody\securityEvent;
use AlibabaCloud\SDK\Sas\V20181203\Models\DescribeSecurityStatInfoResponseBody\vulnerability;

class DescribeSecurityStatInfoResponseBody extends Model
{
    /**
     * @var attackEvent
     */
    public $attackEvent;

    /**
     * @var healthCheck
     */
    public $healthCheck;

    /**
     * @var string
     */
    public $requestId;

    /**
     * @var securityEvent
     */
    public $securityEvent;

    /**
     * @var bool
     */
    public $success;

    /**
     * @var vulnerability
     */
    public $vulnerability;
    protected $_name = [
        'attackEvent' => 'AttackEvent',
        'healthCheck' => 'HealthCheck',
        'requestId' => 'RequestId',
        'securityEvent' => 'SecurityEvent',
        'success' => 'Success',
        'vulnerability' => 'Vulnerability',
    ];

    public function validate()
    {
        if (null !== $this->attackEvent) {
            $this->attackEvent->validate();
        }
        if (null !== $this->healthCheck) {
            $this->healthCheck->validate();
        }
        if (null !== $this->securityEvent) {
            $this->securityEvent->validate();
        }
        if (null !== $this->vulnerability) {
            $this->vulnerability->validate();
        }
        parent::validate();
    }

    public function toArray($noStream = false)
    {
        $res = [];
        if (null !== $this->attackEvent) {
            $res['AttackEvent'] = null !== $this->attackEvent ? $this->attackEvent->toArray($noStream) : $this->attackEvent;
        }

        if (null !== $this->healthCheck) {
            $res['HealthCheck'] = null !== $this->healthCheck ? $this->healthCheck->toArray($noStream) : $this->healthCheck;
        }

        if (null !== $this->requestId) {
            $res['RequestId'] = $this->requestId;
        }

        if (null !== $this->securityEvent) {
            $res['SecurityEvent'] = null !== $this->securityEvent ? $this->securityEvent->toArray($noStream) : $this->securityEvent;
        }

        if (null !== $this->success) {
            $res['Success'] = $this->success;
        }

        if (null !== $this->vulnerability) {
            $res['Vulnerability'] = null !== $this->vulnerability ? $this->vulnerability->toArray($noStream) : $this->vulnerability;
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
        if (isset($map['AttackEvent'])) {
            $model->attackEvent = attackEvent::fromMap($map['AttackEvent']);
        }

        if (isset($map['HealthCheck'])) {
            $model->healthCheck = healthCheck::fromMap($map['HealthCheck']);
        }

        if (isset($map['RequestId'])) {
            $model->requestId = $map['RequestId'];
        }

        if (isset($map['SecurityEvent'])) {
            $model->securityEvent = securityEvent::fromMap($map['SecurityEvent']);
        }

        if (isset($map['Success'])) {
            $model->success = $map['Success'];
        }

        if (isset($map['Vulnerability'])) {
            $model->vulnerability = vulnerability::fromMap($map['Vulnerability']);
        }

        return $model;
    }
}
