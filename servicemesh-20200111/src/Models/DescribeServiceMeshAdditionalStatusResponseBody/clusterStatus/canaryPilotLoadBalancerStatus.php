<?php

// This file is auto-generated, don't edit it. Thanks.

namespace AlibabaCloud\SDK\Servicemesh\V20200111\Models\DescribeServiceMeshAdditionalStatusResponseBody\clusterStatus;

use AlibabaCloud\Tea\Model;

class canaryPilotLoadBalancerStatus extends Model
{
    /**
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
     * @example false
     *
     * @var bool
     */
    public $reused;

    /**
     * @example num_exact
     *
     * @var string
     */
    public $SLBBackEndServerNumStatus;

    /**
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
