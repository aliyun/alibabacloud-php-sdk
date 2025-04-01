<?php

// This file is auto-generated, don't edit it. Thanks.

namespace AlibabaCloud\SDK\OceanBasePro\V20190901\Models\DescribeProxyServiceResponseBody;

use AlibabaCloud\Dara\Model;

class data extends Model
{
    /**
     * @var string
     */
    public $createTime;

    /**
     * @var int
     */
    public $currentEndpointNum;

    /**
     * @var int
     */
    public $endpointNumQuota;

    /**
     * @var string
     */
    public $expireTime;

    /**
     * @var string
     */
    public $proxyClusterId;

    /**
     * @var string
     */
    public $proxyMode;

    /**
     * @var string
     */
    public $proxyServiceVersion;

    /**
     * @var string
     */
    public $proxyVersion;

    /**
     * @var string
     */
    public $status;

    /**
     * @var int
     */
    public $unitNum;

    /**
     * @var int
     */
    public $unitNumLimit;

    /**
     * @var string
     */
    public $unitSpec;

    /**
     * @var string
     */
    public $zone;
    protected $_name = [
        'createTime' => 'CreateTime',
        'currentEndpointNum' => 'CurrentEndpointNum',
        'endpointNumQuota' => 'EndpointNumQuota',
        'expireTime' => 'ExpireTime',
        'proxyClusterId' => 'ProxyClusterId',
        'proxyMode' => 'ProxyMode',
        'proxyServiceVersion' => 'ProxyServiceVersion',
        'proxyVersion' => 'ProxyVersion',
        'status' => 'Status',
        'unitNum' => 'UnitNum',
        'unitNumLimit' => 'UnitNumLimit',
        'unitSpec' => 'UnitSpec',
        'zone' => 'Zone',
    ];

    public function validate()
    {
        parent::validate();
    }

    public function toArray($noStream = false)
    {
        $res = [];
        if (null !== $this->createTime) {
            $res['CreateTime'] = $this->createTime;
        }

        if (null !== $this->currentEndpointNum) {
            $res['CurrentEndpointNum'] = $this->currentEndpointNum;
        }

        if (null !== $this->endpointNumQuota) {
            $res['EndpointNumQuota'] = $this->endpointNumQuota;
        }

        if (null !== $this->expireTime) {
            $res['ExpireTime'] = $this->expireTime;
        }

        if (null !== $this->proxyClusterId) {
            $res['ProxyClusterId'] = $this->proxyClusterId;
        }

        if (null !== $this->proxyMode) {
            $res['ProxyMode'] = $this->proxyMode;
        }

        if (null !== $this->proxyServiceVersion) {
            $res['ProxyServiceVersion'] = $this->proxyServiceVersion;
        }

        if (null !== $this->proxyVersion) {
            $res['ProxyVersion'] = $this->proxyVersion;
        }

        if (null !== $this->status) {
            $res['Status'] = $this->status;
        }

        if (null !== $this->unitNum) {
            $res['UnitNum'] = $this->unitNum;
        }

        if (null !== $this->unitNumLimit) {
            $res['UnitNumLimit'] = $this->unitNumLimit;
        }

        if (null !== $this->unitSpec) {
            $res['UnitSpec'] = $this->unitSpec;
        }

        if (null !== $this->zone) {
            $res['Zone'] = $this->zone;
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
        if (isset($map['CreateTime'])) {
            $model->createTime = $map['CreateTime'];
        }

        if (isset($map['CurrentEndpointNum'])) {
            $model->currentEndpointNum = $map['CurrentEndpointNum'];
        }

        if (isset($map['EndpointNumQuota'])) {
            $model->endpointNumQuota = $map['EndpointNumQuota'];
        }

        if (isset($map['ExpireTime'])) {
            $model->expireTime = $map['ExpireTime'];
        }

        if (isset($map['ProxyClusterId'])) {
            $model->proxyClusterId = $map['ProxyClusterId'];
        }

        if (isset($map['ProxyMode'])) {
            $model->proxyMode = $map['ProxyMode'];
        }

        if (isset($map['ProxyServiceVersion'])) {
            $model->proxyServiceVersion = $map['ProxyServiceVersion'];
        }

        if (isset($map['ProxyVersion'])) {
            $model->proxyVersion = $map['ProxyVersion'];
        }

        if (isset($map['Status'])) {
            $model->status = $map['Status'];
        }

        if (isset($map['UnitNum'])) {
            $model->unitNum = $map['UnitNum'];
        }

        if (isset($map['UnitNumLimit'])) {
            $model->unitNumLimit = $map['UnitNumLimit'];
        }

        if (isset($map['UnitSpec'])) {
            $model->unitSpec = $map['UnitSpec'];
        }

        if (isset($map['Zone'])) {
            $model->zone = $map['Zone'];
        }

        return $model;
    }
}
