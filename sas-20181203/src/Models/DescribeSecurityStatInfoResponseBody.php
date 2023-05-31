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
     * @description The detailed statistics of attacks.
     *
     * @var attackEvent
     */
    public $attackEvent;

    /**
     * @description The detailed statistics of baseline risk items.
     *
     * @var healthCheck
     */
    public $healthCheck;

    /**
     * @description The ID of the request, which is used to locate and troubleshoot issues.
     *
     * @example A3E61730-85E2-4789-8017-B9B1B70F0568
     *
     * @var string
     */
    public $requestId;

    /**
     * @description The detailed statistics of unhandled alerts.
     *
     * @var securityEvent
     */
    public $securityEvent;

    /**
     * @description Indicates whether the request was successful. Valid values:
     *
     *   **true**: The request was successful.
     *   **false**: The request failed.
     *
     * @example true
     *
     * @var bool
     */
    public $success;

    /**
     * @description The detailed statistics of unfixed vulnerabilities.
     *
     * @var vulnerability
     */
    public $vulnerability;
    protected $_name = [
        'attackEvent'   => 'AttackEvent',
        'healthCheck'   => 'HealthCheck',
        'requestId'     => 'RequestId',
        'securityEvent' => 'SecurityEvent',
        'success'       => 'Success',
        'vulnerability' => 'Vulnerability',
    ];

    public function validate()
    {
    }

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
        if (null !== $this->success) {
            $res['Success'] = $this->success;
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
