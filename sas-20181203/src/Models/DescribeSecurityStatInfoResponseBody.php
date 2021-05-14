<?php

// This file is auto-generated, don't edit it. Thanks.

namespace AlibabaCloud\SDK\Sas\V20181203\Models;

use AlibabaCloud\SDK\Sas\V20181203\Models\DescribeSecurityStatInfoResponseBody\attackEvent;
use AlibabaCloud\SDK\Sas\V20181203\Models\DescribeSecurityStatInfoResponseBody\healthCheck;
use AlibabaCloud\SDK\Sas\V20181203\Models\DescribeSecurityStatInfoResponseBody\securityEvent;
use AlibabaCloud\SDK\Sas\V20181203\Models\DescribeSecurityStatInfoResponseBody\vulnerability;
use AlibabaCloud\Tea\Model;

class DescribeSecurityStatInfoResponseBody extends Model
{
    /**
     * @var bool
     */
    public $success;

    /**
     * @var string
     */
    public $requestId;

    /**
     * @var securityEvent
     */
    public $securityEvent;

    /**
     * @var attackEvent
     */
    public $attackEvent;

    /**
     * @var healthCheck
     */
    public $healthCheck;

    /**
     * @var vulnerability
     */
    public $vulnerability;
    protected $_name = [
        'success'       => 'Success',
        'requestId'     => 'RequestId',
        'securityEvent' => 'SecurityEvent',
        'attackEvent'   => 'AttackEvent',
        'healthCheck'   => 'HealthCheck',
        'vulnerability' => 'Vulnerability',
    ];

    public function validate()
    {
    }

    public function toMap()
    {
        $res = [];
        if (null !== $this->success) {
            $res['Success'] = $this->success;
        }
        if (null !== $this->requestId) {
            $res['RequestId'] = $this->requestId;
        }
        if (null !== $this->securityEvent) {
            $res['SecurityEvent'] = null !== $this->securityEvent ? $this->securityEvent->toMap() : null;
        }
        if (null !== $this->attackEvent) {
            $res['AttackEvent'] = null !== $this->attackEvent ? $this->attackEvent->toMap() : null;
        }
        if (null !== $this->healthCheck) {
            $res['HealthCheck'] = null !== $this->healthCheck ? $this->healthCheck->toMap() : null;
        }
        if (null !== $this->vulnerability) {
            $res['Vulnerability'] = null !== $this->vulnerability ? $this->vulnerability->toMap() : null;
        }

        return $res;
    }

    /**
     * @param array $map
     *
     * @return DescribeSecurityStatInfoResponseBody
     */
    public static function fromMap($map = [])
    {
        $model = new self();
        if (isset($map['Success'])) {
            $model->success = $map['Success'];
        }
        if (isset($map['RequestId'])) {
            $model->requestId = $map['RequestId'];
        }
        if (isset($map['SecurityEvent'])) {
            $model->securityEvent = securityEvent::fromMap($map['SecurityEvent']);
        }
        if (isset($map['AttackEvent'])) {
            $model->attackEvent = attackEvent::fromMap($map['AttackEvent']);
        }
        if (isset($map['HealthCheck'])) {
            $model->healthCheck = healthCheck::fromMap($map['HealthCheck']);
        }
        if (isset($map['Vulnerability'])) {
            $model->vulnerability = vulnerability::fromMap($map['Vulnerability']);
        }

        return $model;
    }
}
