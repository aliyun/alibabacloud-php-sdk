<?php

// This file is auto-generated, don't edit it. Thanks.

namespace AlibabaCloud\SDK\Vdc\V20201214\Models;

use AlibabaCloud\SDK\Vdc\V20201214\Models\DescribeFaultDiagnosisUserDetailResponseBody\callInfo;
use AlibabaCloud\SDK\Vdc\V20201214\Models\DescribeFaultDiagnosisUserDetailResponseBody\factorList;
use AlibabaCloud\SDK\Vdc\V20201214\Models\DescribeFaultDiagnosisUserDetailResponseBody\faultMetricData;
use AlibabaCloud\SDK\Vdc\V20201214\Models\DescribeFaultDiagnosisUserDetailResponseBody\userDetail;
use AlibabaCloud\Tea\Model;

class DescribeFaultDiagnosisUserDetailResponseBody extends Model
{
    /**
     * @description 通信基本信息，QueryCallUserInfo=false是返回。
     *
     * @var callInfo
     */
    public $callInfo;

    /**
     * @description 影响因素列表，空表示影响因素未知
     *
     * @var factorList[]
     */
    public $factorList;

    /**
     * @description 异常指标
     *
     * @var faultMetricData
     */
    public $faultMetricData;

    /**
     * @description 网络运营商列表
     *
     * @var string[]
     */
    public $networkOperators;

    /**
     * @description 请求ID。
     *
     * @var string
     */
    public $requestId;

    /**
     * @description 诊断用户详细信，QueryCallUserInfo=false是返回息
     *
     * @var userDetail
     */
    public $userDetail;
    protected $_name = [
        'callInfo'         => 'CallInfo',
        'factorList'       => 'FactorList',
        'faultMetricData'  => 'FaultMetricData',
        'networkOperators' => 'NetworkOperators',
        'requestId'        => 'RequestId',
        'userDetail'       => 'UserDetail',
    ];

    public function validate()
    {
    }

    public function toMap()
    {
        $res = [];
        if (null !== $this->callInfo) {
            $res['CallInfo'] = null !== $this->callInfo ? $this->callInfo->toMap() : null;
        }
        if (null !== $this->factorList) {
            $res['FactorList'] = [];
            if (null !== $this->factorList && \is_array($this->factorList)) {
                $n = 0;
                foreach ($this->factorList as $item) {
                    $res['FactorList'][$n++] = null !== $item ? $item->toMap() : $item;
                }
            }
        }
        if (null !== $this->faultMetricData) {
            $res['FaultMetricData'] = null !== $this->faultMetricData ? $this->faultMetricData->toMap() : null;
        }
        if (null !== $this->networkOperators) {
            $res['NetworkOperators'] = $this->networkOperators;
        }
        if (null !== $this->requestId) {
            $res['RequestId'] = $this->requestId;
        }
        if (null !== $this->userDetail) {
            $res['UserDetail'] = null !== $this->userDetail ? $this->userDetail->toMap() : null;
        }

        return $res;
    }

    /**
     * @param array $map
     *
     * @return DescribeFaultDiagnosisUserDetailResponseBody
     */
    public static function fromMap($map = [])
    {
        $model = new self();
        if (isset($map['CallInfo'])) {
            $model->callInfo = callInfo::fromMap($map['CallInfo']);
        }
        if (isset($map['FactorList'])) {
            if (!empty($map['FactorList'])) {
                $model->factorList = [];
                $n                 = 0;
                foreach ($map['FactorList'] as $item) {
                    $model->factorList[$n++] = null !== $item ? factorList::fromMap($item) : $item;
                }
            }
        }
        if (isset($map['FaultMetricData'])) {
            $model->faultMetricData = faultMetricData::fromMap($map['FaultMetricData']);
        }
        if (isset($map['NetworkOperators'])) {
            if (!empty($map['NetworkOperators'])) {
                $model->networkOperators = $map['NetworkOperators'];
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
