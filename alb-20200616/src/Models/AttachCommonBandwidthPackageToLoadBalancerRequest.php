<?php

// This file is auto-generated, don't edit it. Thanks.

namespace AlibabaCloud\SDK\Alb\V20200616\Models;

use AlibabaCloud\Tea\Model;

class AttachCommonBandwidthPackageToLoadBalancerRequest extends Model
{
    /**
     * @description 带宽包ID
     *
     * @var string
     */
    public $bandwidthPackageId;

    /**
     * @description 幂等参数
     *
     * @var string
     */
    public $clientToken;

    /**
     * @description 是否只预检此次请求
     *
     * @var bool
     */
    public $dryRun;

    /**
     * @description 实例ID
     *
     * @var string
     */
    public $loadBalancerId;

    /**
     * @description 地域ID
     *
     * @var string
     */
    public $regionId;
    protected $_name = [
        'bandwidthPackageId' => 'BandwidthPackageId',
        'clientToken'        => 'ClientToken',
        'dryRun'             => 'DryRun',
        'loadBalancerId'     => 'LoadBalancerId',
        'regionId'           => 'RegionId',
    ];

    public function validate()
    {
    }

    public function toMap()
    {
        $res = [];
        if (null !== $this->bandwidthPackageId) {
            $res['BandwidthPackageId'] = $this->bandwidthPackageId;
        }
        if (null !== $this->clientToken) {
            $res['ClientToken'] = $this->clientToken;
        }
        if (null !== $this->dryRun) {
            $res['DryRun'] = $this->dryRun;
        }
        if (null !== $this->loadBalancerId) {
            $res['LoadBalancerId'] = $this->loadBalancerId;
        }
        if (null !== $this->regionId) {
            $res['RegionId'] = $this->regionId;
        }

        return $res;
    }

    /**
     * @param array $map
     *
     * @return AttachCommonBandwidthPackageToLoadBalancerRequest
     */
    public static function fromMap($map = [])
    {
        $model = new self();
        if (isset($map['BandwidthPackageId'])) {
            $model->bandwidthPackageId = $map['BandwidthPackageId'];
        }
        if (isset($map['ClientToken'])) {
            $model->clientToken = $map['ClientToken'];
        }
        if (isset($map['DryRun'])) {
            $model->dryRun = $map['DryRun'];
        }
        if (isset($map['LoadBalancerId'])) {
            $model->loadBalancerId = $map['LoadBalancerId'];
        }
        if (isset($map['RegionId'])) {
            $model->regionId = $map['RegionId'];
        }

        return $model;
    }
}
