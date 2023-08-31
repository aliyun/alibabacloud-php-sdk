<?php

// This file is auto-generated, don't edit it. Thanks.

namespace AlibabaCloud\SDK\Servicemesh\V20200111\Models\DescribeServiceMeshAdditionalStatusResponseBody\clusterStatus;

use AlibabaCloud\Tea\Model;

class canaryPilotLoadBalancerStatus extends Model
{
    /**
     * @description Indicates whether the SLB instance is locked due to overdue payments. Valid values: `true` `false`
     *
     * @example false
     *
     * @var bool
     */
    public $locked;

    /**
     * @example PayOnDemand
     *
     * @var string
     */
    public $payType;

    /**
     * @description Indicates whether the SLB instance is reused. Valid values:
     *
     *   `true`: The SLB instance is reused. Non-ASM listener configuration is detected in the listener configurations of the SLB instance.
     *   `false`: The SLB instance is not reused.
     *
     * @example false
     *
     * @var bool
     */
    public $reused;

    /**
     * @description The check result of the number of backend servers of the SLB instance created for exposing Istio Pilot. Valid values:
     *
     *   `num_exact`: A proper number of backend servers are created.
     *   `too_much`: An excessive number of backend servers are created.
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
     *   `time_out`: The check times out.
     *   `failed`: The SLB instance has expired.
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
     * @return canaryPilotLoadBalancerStatus
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
