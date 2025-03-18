<?php

// This file is auto-generated, don't edit it. Thanks.

namespace AlibabaCloud\SDK\Sas\V20210114\Models;

use AlibabaCloud\SDK\Sas\V20210114\Models\DescribeScreenSecurityStatInfoResponseBody\attackEvent;
use AlibabaCloud\SDK\Sas\V20210114\Models\DescribeScreenSecurityStatInfoResponseBody\healthCheck;
use AlibabaCloud\SDK\Sas\V20210114\Models\DescribeScreenSecurityStatInfoResponseBody\securityEvent;
use AlibabaCloud\SDK\Sas\V20210114\Models\DescribeScreenSecurityStatInfoResponseBody\vulnerability;
use AlibabaCloud\Tea\Model;

class DescribeScreenSecurityStatInfoResponseBody extends Model
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
     * @example F8B6F758-BCD4-597A-8A2C-DA5A552C****
     *
     * @var string
     */
    public $requestId;

    /**
     * @var securityEvent
     */
    public $securityEvent;

    /**
     * @var vulnerability
     */
    public $vulnerability;
    protected $_name = [
        'attackEvent' => 'AttackEvent',
        'healthCheck' => 'HealthCheck',
        'requestId' => 'RequestId',
        'securityEvent' => 'SecurityEvent',
        'vulnerability' => 'Vulnerability',
    ];

    public function validate() {}

    public function toMap()
    {
        $res = [];
        if (null !== $this->attackEvent) {
            $res['AttackEvent'] = null !== $this->attackEvent ? $this->attackEvent->toMap() : null;
        }
        if (null !== $this->healthCheck) {
            $res['HealthCheck'] = null !== $this->healthCheck ? $this->healthCheck->toMap() : null;
        }
        if (null !== $this->requestId) {
            $res['RequestId'] = $this->requestId;
        }
        if (null !== $this->securityEvent) {
            $res['SecurityEvent'] = null !== $this->securityEvent ? $this->securityEvent->toMap() : null;
        }
        if (null !== $this->vulnerability) {
            $res['Vulnerability'] = null !== $this->vulnerability ? $this->vulnerability->toMap() : null;
        }

        return $res;
    }

    /**
     * @param array $map
     *
     * @return DescribeScreenSecurityStatInfoResponseBody
     */
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
        if (isset($map['Vulnerability'])) {
            $model->vulnerability = vulnerability::fromMap($map['Vulnerability']);
        }

        return $model;
    }
}
