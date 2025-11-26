<?php

// This file is auto-generated, don't edit it. Thanks.

namespace AlibabaCloud\SDK\Ens\V20171110\Models\DescribeServerLoadBalancerListenMonitorResponseBody;

use AlibabaCloud\Dara\Model;

class serverLoadBalancerMonitorData extends Model
{
    /**
     * @var int
     */
    public $acc;

    /**
     * @var string
     */
    public $bizTime;

    /**
     * @var string
     */
    public $ensRegionId;

    /**
     * @var string
     */
    public $loadBalancerId;

    /**
     * @var string
     */
    public $loadBalancerName;

    /**
     * @var string
     */
    public $loadBalancerSpec;

    /**
     * @var string
     */
    public $proto;

    /**
     * @var int
     */
    public $reqs2xx;

    /**
     * @var int
     */
    public $reqs3xx;

    /**
     * @var int
     */
    public $reqs4xx;

    /**
     * @var int
     */
    public $reqs5xx;

    /**
     * @var int
     */
    public $rtAvg;

    /**
     * @var string
     */
    public $vip;

    /**
     * @var int
     */
    public $vni;

    /**
     * @var int
     */
    public $vport;
    protected $_name = [
        'acc' => 'Acc',
        'bizTime' => 'BizTime',
        'ensRegionId' => 'EnsRegionId',
        'loadBalancerId' => 'LoadBalancerId',
        'loadBalancerName' => 'LoadBalancerName',
        'loadBalancerSpec' => 'LoadBalancerSpec',
        'proto' => 'Proto',
        'reqs2xx' => 'Reqs2xx',
        'reqs3xx' => 'Reqs3xx',
        'reqs4xx' => 'Reqs4xx',
        'reqs5xx' => 'Reqs5xx',
        'rtAvg' => 'RtAvg',
        'vip' => 'Vip',
        'vni' => 'Vni',
        'vport' => 'Vport',
    ];

    public function validate()
    {
        parent::validate();
    }

    public function toArray($noStream = false)
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

        if (null !== $this->proto) {
            $res['Proto'] = $this->proto;
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

        if (null !== $this->vport) {
            $res['Vport'] = $this->vport;
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

        if (isset($map['Proto'])) {
            $model->proto = $map['Proto'];
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

        if (isset($map['Vport'])) {
            $model->vport = $map['Vport'];
        }

        return $model;
    }
}
