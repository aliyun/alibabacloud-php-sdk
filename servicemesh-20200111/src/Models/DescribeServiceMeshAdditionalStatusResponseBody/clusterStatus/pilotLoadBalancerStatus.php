<?php

// This file is auto-generated, don't edit it. Thanks.

namespace AlibabaCloud\SDK\Servicemesh\V20200111\Models\DescribeServiceMeshAdditionalStatusResponseBody\clusterStatus;

use AlibabaCloud\Tea\Model;

class pilotLoadBalancerStatus extends Model
{
    /**
     * @description The check result of control plane logs. Valid values:
     *
     *   `exist`: Control plane logs exist.
     *   `not_exist`: Control plane logs do not exist.
     *   `failed`: The check fails.
     *   `time_out`: The check times out.
     *
     * @example false
     *
     * @var bool
     */
    public $locked;

    /**
     * @description Indicates whether the security group is reused. Valid values:
     *
     *   `reused`: The security group is reused.
     *   `not_reused`: The security group is not reused.
     *   `failed`: The check fails.
     *   `time_out`: The check times out.
     *
     * @example PayOnDemand
     *
     * @var string
     */
    public $payType;

    /**
     * @description The check results of the Logtail installation for clusters on the data plane.
     *
     * @example true
     *
     * @var bool
     */
    public $reused;

    /**
     * @description The check result of audit logs. Valid values:
     *
     *   `exist`: Audit logs exist.
     *   `not exist`: Audit logs do not exist.
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
