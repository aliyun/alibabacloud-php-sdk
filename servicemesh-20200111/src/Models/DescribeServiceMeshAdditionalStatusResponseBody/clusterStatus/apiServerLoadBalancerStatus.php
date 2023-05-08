<?php

// This file is auto-generated, don't edit it. Thanks.

namespace AlibabaCloud\SDK\Servicemesh\V20200111\Models\DescribeServiceMeshAdditionalStatusResponseBody\clusterStatus;

use AlibabaCloud\Tea\Model;

class apiServerLoadBalancerStatus extends Model
{
    /**
     * @description The check result of the number of SLB instances created for exposing Istio Pilot. Valid values:
     *
     *   `too_much`: An excessive number of SLB instances are created.
     *   `num_exact`: A proper number of SLB instances are created.
     *   `too_little`: The number of SLB instances falls short.
     *
     * @example false
     *
     * @var bool
     */
    public $locked;

    /**
     * @description Indicates whether the SLB instance is reused. Valid values:
     *
     *   `true`: The SLB instance is reused.
     *   `false`: The SLB instance is not reused.
     *
     * @example PrePay
     *
     * @var string
     */
    public $payType;

    /**
     * @description The check result of the SLB instance. Valid values:
     *
     *   `exist`: The SLB instance exists.
     *   `not_exist`: The SLB instance does not exist.
     *   `conflict`: Conflicts are detected.
     *   `failed`: The check fails.
     *   `time_out`: The check times out.
     *
     * @example false
     *
     * @var bool
     */
    public $reused;

    /**
     * @description The check results of the SLB instances created for exposing Istio Pilot.
     *
     * @example num_exact
     *
     * @var string
     */
    public $SLBBackEndServerNumStatus;

    /**
     * @description The billing method of the SLB instance. Valid values:
     *
     *   `PrePay`: subscription
     *   `PayOnDemand`: pay-as-you-go
     *
     * @example exist
     *
     * @var string
     */
    public $SLBExistStatus;
    protected $_name = [
        'locked'                    => 'Locked',
        'payType'                   => 'PayType',
        'reused'                    => 'Reused',
        'SLBBackEndServerNumStatus' => 'SLBBackEndServerNumStatus',
        'SLBExistStatus'            => 'SLBExistStatus',
    ];

    public function validate()
    {
    }

    public function toMap()
    {
        $res = [];
        if (null !== $this->locked) {
            $res['Locked'] = $this->locked;
        }
        if (null !== $this->payType) {
            $res['PayType'] = $this->payType;
        }
        if (null !== $this->reused) {
            $res['Reused'] = $this->reused;
        }
        if (null !== $this->SLBBackEndServerNumStatus) {
            $res['SLBBackEndServerNumStatus'] = $this->SLBBackEndServerNumStatus;
        }
        if (null !== $this->SLBExistStatus) {
            $res['SLBExistStatus'] = $this->SLBExistStatus;
        }

        return $res;
    }

    /**
     * @param array $map
     *
     * @return apiServerLoadBalancerStatus
     */
    public static function fromMap($map = [])
    {
        $model = new self();
        if (isset($map['Locked'])) {
            $model->locked = $map['Locked'];
        }
        if (isset($map['PayType'])) {
            $model->payType = $map['PayType'];
        }
        if (isset($map['Reused'])) {
            $model->reused = $map['Reused'];
        }
        if (isset($map['SLBBackEndServerNumStatus'])) {
            $model->SLBBackEndServerNumStatus = $map['SLBBackEndServerNumStatus'];
        }
        if (isset($map['SLBExistStatus'])) {
            $model->SLBExistStatus = $map['SLBExistStatus'];
        }

        return $model;
    }
}
