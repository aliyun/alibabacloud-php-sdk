<?php

// This file is auto-generated, don't edit it. Thanks.

namespace AlibabaCloud\SDK\Servicemesh\V20200111\Models\DescribeServiceMeshAdditionalStatusResponseBody\clusterStatus;

use AlibabaCloud\Tea\Model;

class pilotLoadBalancerStatus extends Model
{
    /**
     * @description Indicates whether the SLB instance is locked. Valid values:
     *
     *   `true`
     *   `false`
     *
     * @example false
     *
     * @var bool
     */
    public $locked;

    /**
     * @description The billing method of the SLB instance. Valid values:
     *
     *   `PrePay`: subscription
     *   `PayOnDemand`: pay-as-you-go
     *
     * @example PayOnDemand
     *
     * @var string
     */
    public $payType;

    /**
     * @description Indicates whether the SLB instance is reused. Valid values:
     *
     *   `true`
     *   `false`
     *
     * @example true
     *
     * @var bool
     */
    public $reused;

    /**
     * @description The check result of the number of backend servers of the SLB instance created for exposing Istio Pilot. Valid values:
     *
     *   `too_much`: An excessive number of backend servers are created.
     *   `num_exact`: A proper number of backend servers are created.
     *   `too_little`: The number of backend servers falls short.
     *
     * @example num_exact
     *
     * @var string
     */
    public $SLBBackEndServerNumStatus;

    /**
     * @description The check result of the SLB instance. Valid values:
     *
     *   `exist`: The SLB instance exists.
     *   `not_exist`: The SLB instance does not exist.
     *   `conflict`: Conflicts are detected.
     *   `failed`: The check fails.
     *   `time_out`: The check times out.
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
     * @return pilotLoadBalancerStatus
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
