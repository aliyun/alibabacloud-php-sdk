<?php

// This file is auto-generated, don't edit it. Thanks.

namespace AlibabaCloud\SDK\Csas\V20230120\Models\GetPADiagnosisTaskResponseBody\diagnosisTask\result;

use AlibabaCloud\Dara\Model;
use AlibabaCloud\SDK\Csas\V20230120\Models\GetPADiagnosisTaskResponseBody\diagnosisTask\result\policyInfo\deviceAttributeInfo;
use AlibabaCloud\SDK\Csas\V20230120\Models\GetPADiagnosisTaskResponseBody\diagnosisTask\result\policyInfo\routeStrategyInfo;
use AlibabaCloud\SDK\Csas\V20230120\Models\GetPADiagnosisTaskResponseBody\diagnosisTask\result\policyInfo\userGroupInfo;
use AlibabaCloud\SDK\Csas\V20230120\Models\GetPADiagnosisTaskResponseBody\diagnosisTask\result\policyInfo\zeroTrustPolicyInfo;

class policyInfo extends Model
{
    /**
     * @var deviceAttributeInfo
     */
    public $deviceAttributeInfo;

    /**
     * @var int
     */
    public $processTime;

    /**
     * @var routeStrategyInfo
     */
    public $routeStrategyInfo;

    /**
     * @var userGroupInfo
     */
    public $userGroupInfo;

    /**
     * @var zeroTrustPolicyInfo
     */
    public $zeroTrustPolicyInfo;
    protected $_name = [
        'deviceAttributeInfo' => 'DeviceAttributeInfo',
        'processTime' => 'ProcessTime',
        'routeStrategyInfo' => 'RouteStrategyInfo',
        'userGroupInfo' => 'UserGroupInfo',
        'zeroTrustPolicyInfo' => 'ZeroTrustPolicyInfo',
    ];

    public function validate()
    {
        if (null !== $this->deviceAttributeInfo) {
            $this->deviceAttributeInfo->validate();
        }
        if (null !== $this->routeStrategyInfo) {
            $this->routeStrategyInfo->validate();
        }
        if (null !== $this->userGroupInfo) {
            $this->userGroupInfo->validate();
        }
        if (null !== $this->zeroTrustPolicyInfo) {
            $this->zeroTrustPolicyInfo->validate();
        }
        parent::validate();
    }

    public function toArray($noStream = false)
    {
        $res = [];
        if (null !== $this->deviceAttributeInfo) {
            $res['DeviceAttributeInfo'] = null !== $this->deviceAttributeInfo ? $this->deviceAttributeInfo->toArray($noStream) : $this->deviceAttributeInfo;
        }

        if (null !== $this->processTime) {
            $res['ProcessTime'] = $this->processTime;
        }

        if (null !== $this->routeStrategyInfo) {
            $res['RouteStrategyInfo'] = null !== $this->routeStrategyInfo ? $this->routeStrategyInfo->toArray($noStream) : $this->routeStrategyInfo;
        }

        if (null !== $this->userGroupInfo) {
            $res['UserGroupInfo'] = null !== $this->userGroupInfo ? $this->userGroupInfo->toArray($noStream) : $this->userGroupInfo;
        }

        if (null !== $this->zeroTrustPolicyInfo) {
            $res['ZeroTrustPolicyInfo'] = null !== $this->zeroTrustPolicyInfo ? $this->zeroTrustPolicyInfo->toArray($noStream) : $this->zeroTrustPolicyInfo;
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
        if (isset($map['DeviceAttributeInfo'])) {
            $model->deviceAttributeInfo = deviceAttributeInfo::fromMap($map['DeviceAttributeInfo']);
        }

        if (isset($map['ProcessTime'])) {
            $model->processTime = $map['ProcessTime'];
        }

        if (isset($map['RouteStrategyInfo'])) {
            $model->routeStrategyInfo = routeStrategyInfo::fromMap($map['RouteStrategyInfo']);
        }

        if (isset($map['UserGroupInfo'])) {
            $model->userGroupInfo = userGroupInfo::fromMap($map['UserGroupInfo']);
        }

        if (isset($map['ZeroTrustPolicyInfo'])) {
            $model->zeroTrustPolicyInfo = zeroTrustPolicyInfo::fromMap($map['ZeroTrustPolicyInfo']);
        }

        return $model;
    }
}
