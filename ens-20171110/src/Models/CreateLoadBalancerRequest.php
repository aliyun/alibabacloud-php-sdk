<?php

// This file is auto-generated, don't edit it. Thanks.

namespace AlibabaCloud\SDK\Ens\V20171110\Models;

use AlibabaCloud\Tea\Model;

class CreateLoadBalancerRequest extends Model
{
    /**
     * @description The ID of the Edge Node Service (ENS) node.
     *
     * @example cn-chengdu-telecom
     *
     * @var string
     */
    public $ensRegionId;

    /**
     * @description The name of the ELB instance. The name must be 1 to 80 characters in length. If you leave this parameter empty, the system randomly allocates a name as the value of this parameter.
     *
     * >  The value cannot start with `http://` or `https://`.
     * @example gcs-pre-websocket-eslb-telecom
     *
     * @var string
     */
    public $loadBalancerName;

    /**
     * @description The specification of the ELB instance.
     *
     * @example elb.s2.medium
     *
     * @var string
     */
    public $loadBalancerSpec;

    /**
     * @description The network ID of the created ELB instance.
     *
     * @example n-5sax03dh2eyagujgsn7z9****
     *
     * @var string
     */
    public $networkId;

    /**
     * @description The billing method of the instance. Valid value: PostPaid. PostPaid specifies the pay-as-you-go billing method.
     *
     * @example PostPaid
     *
     * @var string
     */
    public $payType;

    /**
     * @description The ID of the vSwitch to which the internal-facing ELB instance belongs.
     *
     * @example vsw-5s78haoys9oylle6ln71m****
     *
     * @var string
     */
    public $vSwitchId;
    protected $_name = [
        'ensRegionId'      => 'EnsRegionId',
        'loadBalancerName' => 'LoadBalancerName',
        'loadBalancerSpec' => 'LoadBalancerSpec',
        'networkId'        => 'NetworkId',
        'payType'          => 'PayType',
        'vSwitchId'        => 'VSwitchId',
    ];

    public function validate()
    {
    }

    public function toMap()
    {
        $res = [];
        if (null !== $this->ensRegionId) {
            $res['EnsRegionId'] = $this->ensRegionId;
        }
        if (null !== $this->loadBalancerName) {
            $res['LoadBalancerName'] = $this->loadBalancerName;
        }
        if (null !== $this->loadBalancerSpec) {
            $res['LoadBalancerSpec'] = $this->loadBalancerSpec;
        }
        if (null !== $this->networkId) {
            $res['NetworkId'] = $this->networkId;
        }
        if (null !== $this->payType) {
            $res['PayType'] = $this->payType;
        }
        if (null !== $this->vSwitchId) {
            $res['VSwitchId'] = $this->vSwitchId;
        }

        return $res;
    }

    /**
     * @param array $map
     *
     * @return CreateLoadBalancerRequest
     */
    public static function fromMap($map = [])
    {
        $model = new self();
        if (isset($map['EnsRegionId'])) {
            $model->ensRegionId = $map['EnsRegionId'];
        }
        if (isset($map['LoadBalancerName'])) {
            $model->loadBalancerName = $map['LoadBalancerName'];
        }
        if (isset($map['LoadBalancerSpec'])) {
            $model->loadBalancerSpec = $map['LoadBalancerSpec'];
        }
        if (isset($map['NetworkId'])) {
            $model->networkId = $map['NetworkId'];
        }
        if (isset($map['PayType'])) {
            $model->payType = $map['PayType'];
        }
        if (isset($map['VSwitchId'])) {
            $model->vSwitchId = $map['VSwitchId'];
        }

        return $model;
    }
}
