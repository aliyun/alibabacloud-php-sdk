<?php

// This file is auto-generated, don't edit it. Thanks.

namespace AlibabaCloud\SDK\Ens\V20171110\Models\DescribeServerLoadBalancerMonitorResponseBody;

use AlibabaCloud\Tea\Model;

class serverLoadBalancerMonitorData extends Model
{
    /**
     * @example 30
     *
     * @var int
     */
    public $acc;

    /**
     * @example 2024-09-15 16:00:00
     *
     * @var string
     */
    public $bizTime;

    /**
     * @example cn-wuxi-10
     *
     * @var string
     */
    public $ensRegionId;

    /**
     * @example lb-5sc1s9zrui8lpb8u7cl4f****
     *
     * @var string
     */
    public $loadBalancerId;

    /**
     * @example esk-edge-service-lb-a34****
     *
     * @var string
     */
    public $loadBalancerName;

    /**
     * @example elb.s2.medium
     *
     * @var string
     */
    public $loadBalancerSpec;

    /**
     * @example 25
     *
     * @var int
     */
    public $reqs2xx;

    /**
     * @example 0
     *
     * @var int
     */
    public $reqs3xx;

    /**
     * @example 5
     *
     * @var int
     */
    public $reqs4xx;

    /**
     * @example 0
     *
     * @var int
     */
    public $reqs5xx;

    /**
     * @example 1404
     *
     * @var int
     */
    public $rtAvg;

    /**
     * @example 10.0****
     *
     * @var string
     */
    public $vip;

    /**
     * @example 3018
     *
     * @var int
     */
    public $vni;
    protected $_name = [
        'acc'              => 'Acc',
        'bizTime'          => 'BizTime',
        'ensRegionId'      => 'EnsRegionId',
        'loadBalancerId'   => 'LoadBalancerId',
        'loadBalancerName' => 'LoadBalancerName',
        'loadBalancerSpec' => 'LoadBalancerSpec',
        'reqs2xx'          => 'Reqs2xx',
        'reqs3xx'          => 'Reqs3xx',
        'reqs4xx'          => 'Reqs4xx',
        'reqs5xx'          => 'Reqs5xx',
        'rtAvg'            => 'RtAvg',
        'vip'              => 'Vip',
        'vni'              => 'Vni',
    ];

    public function validate()
    {
    }

    public function toMap()
    {
        $res = [];
        if (null !== $this->acc) {
            $res['Acc'] = $this->acc;
        }
        if (null !== $this->bizTime) {
            $res['BizTime'] = $this->bizTime;
        }
        if (null !== $this->ensRegionId) {
            $res['EnsRegionId'] = $this->ensRegionId;
        }
        if (null !== $this->loadBalancerId) {
            $res['LoadBalancerId'] = $this->loadBalancerId;
        }
        if (null !== $this->loadBalancerName) {
            $res['LoadBalancerName'] = $this->loadBalancerName;
        }
        if (null !== $this->loadBalancerSpec) {
            $res['LoadBalancerSpec'] = $this->loadBalancerSpec;
        }
        if (null !== $this->reqs2xx) {
            $res['Reqs2xx'] = $this->reqs2xx;
        }
        if (null !== $this->reqs3xx) {
            $res['Reqs3xx'] = $this->reqs3xx;
        }
        if (null !== $this->reqs4xx) {
            $res['Reqs4xx'] = $this->reqs4xx;
        }
        if (null !== $this->reqs5xx) {
            $res['Reqs5xx'] = $this->reqs5xx;
        }
        if (null !== $this->rtAvg) {
            $res['RtAvg'] = $this->rtAvg;
        }
        if (null !== $this->vip) {
            $res['Vip'] = $this->vip;
        }
        if (null !== $this->vni) {
            $res['Vni'] = $this->vni;
        }

        return $res;
    }

    /**
     * @param array $map
     *
     * @return serverLoadBalancerMonitorData
     */
    public static function fromMap($map = [])
    {
        $model = new self();
        if (isset($map['Acc'])) {
            $model->acc = $map['Acc'];
        }
        if (isset($map['BizTime'])) {
            $model->bizTime = $map['BizTime'];
        }
        if (isset($map['EnsRegionId'])) {
            $model->ensRegionId = $map['EnsRegionId'];
        }
        if (isset($map['LoadBalancerId'])) {
            $model->loadBalancerId = $map['LoadBalancerId'];
        }
        if (isset($map['LoadBalancerName'])) {
            $model->loadBalancerName = $map['LoadBalancerName'];
        }
        if (isset($map['LoadBalancerSpec'])) {
            $model->loadBalancerSpec = $map['LoadBalancerSpec'];
        }
        if (isset($map['Reqs2xx'])) {
            $model->reqs2xx = $map['Reqs2xx'];
        }
        if (isset($map['Reqs3xx'])) {
            $model->reqs3xx = $map['Reqs3xx'];
        }
        if (isset($map['Reqs4xx'])) {
            $model->reqs4xx = $map['Reqs4xx'];
        }
        if (isset($map['Reqs5xx'])) {
            $model->reqs5xx = $map['Reqs5xx'];
        }
        if (isset($map['RtAvg'])) {
            $model->rtAvg = $map['RtAvg'];
        }
        if (isset($map['Vip'])) {
            $model->vip = $map['Vip'];
        }
        if (isset($map['Vni'])) {
            $model->vni = $map['Vni'];
        }

        return $model;
    }
}
