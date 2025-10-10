<?php

// This file is auto-generated, don't edit it. Thanks.

namespace AlibabaCloud\SDK\Rtc\V20180111\Models;

use AlibabaCloud\Dara\Model;
use AlibabaCloud\SDK\Rtc\V20180111\Models\DescribeFaultDiagnosisUserDetailResponseBody\callInfo;
use AlibabaCloud\SDK\Rtc\V20180111\Models\DescribeFaultDiagnosisUserDetailResponseBody\factorList;
use AlibabaCloud\SDK\Rtc\V20180111\Models\DescribeFaultDiagnosisUserDetailResponseBody\faultMetricData;
use AlibabaCloud\SDK\Rtc\V20180111\Models\DescribeFaultDiagnosisUserDetailResponseBody\userDetail;

class DescribeFaultDiagnosisUserDetailResponseBody extends Model
{
    /**
     * @var callInfo
     */
    public $callInfo;

    /**
     * @var factorList[]
     */
    public $factorList;

    /**
     * @var faultMetricData
     */
    public $faultMetricData;

    /**
     * @var string[]
     */
    public $networkOperators;

    /**
     * @var string
     */
    public $requestId;

    /**
     * @var userDetail
     */
    public $userDetail;
    protected $_name = [
        'callInfo' => 'CallInfo',
        'factorList' => 'FactorList',
        'faultMetricData' => 'FaultMetricData',
        'networkOperators' => 'NetworkOperators',
        'requestId' => 'RequestId',
        'userDetail' => 'UserDetail',
    ];

    public function validate()
    {
        if (null !== $this->callInfo) {
            $this->callInfo->validate();
        }
        if (\is_array($this->factorList)) {
            Model::validateArray($this->factorList);
        }
        if (null !== $this->faultMetricData) {
            $this->faultMetricData->validate();
        }
        if (\is_array($this->networkOperators)) {
            Model::validateArray($this->networkOperators);
        }
        if (null !== $this->userDetail) {
            $this->userDetail->validate();
        }
        parent::validate();
    }

    public function toArray($noStream = false)
    {
        $res = [];
        if (null !== $this->callInfo) {
            $res['CallInfo'] = null !== $this->callInfo ? $this->callInfo->toArray($noStream) : $this->callInfo;
        }

        if (null !== $this->factorList) {
            if (\is_array($this->factorList)) {
                $res['FactorList'] = [];
                $n1 = 0;
                foreach ($this->factorList as $item1) {
                    $res['FactorList'][$n1] = null !== $item1 ? $item1->toArray($noStream) : $item1;
                    ++$n1;
                }
            }
        }

        if (null !== $this->faultMetricData) {
            $res['FaultMetricData'] = null !== $this->faultMetricData ? $this->faultMetricData->toArray($noStream) : $this->faultMetricData;
        }

        if (null !== $this->networkOperators) {
            if (\is_array($this->networkOperators)) {
                $res['NetworkOperators'] = [];
                $n1 = 0;
                foreach ($this->networkOperators as $item1) {
                    $res['NetworkOperators'][$n1] = $item1;
                    ++$n1;
                }
            }
        }

        if (null !== $this->requestId) {
            $res['RequestId'] = $this->requestId;
        }

        if (null !== $this->userDetail) {
            $res['UserDetail'] = null !== $this->userDetail ? $this->userDetail->toArray($noStream) : $this->userDetail;
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
        if (isset($map['CallInfo'])) {
            $model->callInfo = callInfo::fromMap($map['CallInfo']);
        }

        if (isset($map['FactorList'])) {
            if (!empty($map['FactorList'])) {
                $model->factorList = [];
                $n1 = 0;
                foreach ($map['FactorList'] as $item1) {
                    $model->factorList[$n1] = factorList::fromMap($item1);
                    ++$n1;
                }
            }
        }

        if (isset($map['FaultMetricData'])) {
            $model->faultMetricData = faultMetricData::fromMap($map['FaultMetricData']);
        }

        if (isset($map['NetworkOperators'])) {
            if (!empty($map['NetworkOperators'])) {
                $model->networkOperators = [];
                $n1 = 0;
                foreach ($map['NetworkOperators'] as $item1) {
                    $model->networkOperators[$n1] = $item1;
                    ++$n1;
                }
            }
        }

        if (isset($map['RequestId'])) {
            $model->requestId = $map['RequestId'];
        }

        if (isset($map['UserDetail'])) {
            $model->userDetail = userDetail::fromMap($map['UserDetail']);
        }

        return $model;
    }
}
