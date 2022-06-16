<?php

// This file is auto-generated, don't edit it. Thanks.

namespace AlibabaCloud\SDK\Retailcloud\V20180313\Models;

use AlibabaCloud\Tea\Model;

class CreateClusterRequest extends Model
{
    /**
     * @var string
     */
    public $businessCode;

    /**
     * @var int
     */
    public $cloudMonitorFlags;

    /**
     * @var string
     */
    public $clusterEnvType;

    /**
     * @var int
     */
    public $clusterId;

    /**
     * @var string
     */
    public $clusterTitle;

    /**
     * @var string
     */
    public $clusterType;

    /**
     * @var bool
     */
    public $createWithArmsIntegration;

    /**
     * @var bool
     */
    public $createWithLogIntegration;

    /**
     * @var string
     */
    public $keyPair;

    /**
     * @var string
     */
    public $netPlug;

    /**
     * @var string
     */
    public $password;

    /**
     * @var string
     */
    public $podCIDR;

    /**
     * @var bool
     */
    public $privateZone;

    /**
     * @var int
     */
    public $publicSlb;

    /**
     * @var string
     */
    public $regionId;

    /**
     * @var string
     */
    public $regionName;

    /**
     * @var string
     */
    public $serviceCIDR;

    /**
     * @var int
     */
    public $snatEntry;

    /**
     * @var string
     */
    public $vpcId;

    /**
     * @var string[]
     */
    public $vswitchids;
    protected $_name = [
        'businessCode'              => 'BusinessCode',
        'cloudMonitorFlags'         => 'CloudMonitorFlags',
        'clusterEnvType'            => 'ClusterEnvType',
        'clusterId'                 => 'ClusterId',
        'clusterTitle'              => 'ClusterTitle',
        'clusterType'               => 'ClusterType',
        'createWithArmsIntegration' => 'CreateWithArmsIntegration',
        'createWithLogIntegration'  => 'CreateWithLogIntegration',
        'keyPair'                   => 'KeyPair',
        'netPlug'                   => 'NetPlug',
        'password'                  => 'Password',
        'podCIDR'                   => 'PodCIDR',
        'privateZone'               => 'PrivateZone',
        'publicSlb'                 => 'PublicSlb',
        'regionId'                  => 'RegionId',
        'regionName'                => 'RegionName',
        'serviceCIDR'               => 'ServiceCIDR',
        'snatEntry'                 => 'SnatEntry',
        'vpcId'                     => 'VpcId',
        'vswitchids'                => 'Vswitchids',
    ];

    public function validate()
    {
    }

    public function toMap()
    {
        $res = [];
        if (null !== $this->businessCode) {
            $res['BusinessCode'] = $this->businessCode;
        }
        if (null !== $this->cloudMonitorFlags) {
            $res['CloudMonitorFlags'] = $this->cloudMonitorFlags;
        }
        if (null !== $this->clusterEnvType) {
            $res['ClusterEnvType'] = $this->clusterEnvType;
        }
        if (null !== $this->clusterId) {
            $res['ClusterId'] = $this->clusterId;
        }
        if (null !== $this->clusterTitle) {
            $res['ClusterTitle'] = $this->clusterTitle;
        }
        if (null !== $this->clusterType) {
            $res['ClusterType'] = $this->clusterType;
        }
        if (null !== $this->createWithArmsIntegration) {
            $res['CreateWithArmsIntegration'] = $this->createWithArmsIntegration;
        }
        if (null !== $this->createWithLogIntegration) {
            $res['CreateWithLogIntegration'] = $this->createWithLogIntegration;
        }
        if (null !== $this->keyPair) {
            $res['KeyPair'] = $this->keyPair;
        }
        if (null !== $this->netPlug) {
            $res['NetPlug'] = $this->netPlug;
        }
        if (null !== $this->password) {
            $res['Password'] = $this->password;
        }
        if (null !== $this->podCIDR) {
            $res['PodCIDR'] = $this->podCIDR;
        }
        if (null !== $this->privateZone) {
            $res['PrivateZone'] = $this->privateZone;
        }
        if (null !== $this->publicSlb) {
            $res['PublicSlb'] = $this->publicSlb;
        }
        if (null !== $this->regionId) {
            $res['RegionId'] = $this->regionId;
        }
        if (null !== $this->regionName) {
            $res['RegionName'] = $this->regionName;
        }
        if (null !== $this->serviceCIDR) {
            $res['ServiceCIDR'] = $this->serviceCIDR;
        }
        if (null !== $this->snatEntry) {
            $res['SnatEntry'] = $this->snatEntry;
        }
        if (null !== $this->vpcId) {
            $res['VpcId'] = $this->vpcId;
        }
        if (null !== $this->vswitchids) {
            $res['Vswitchids'] = $this->vswitchids;
        }

        return $res;
    }

    /**
     * @param array $map
     *
     * @return CreateClusterRequest
     */
    public static function fromMap($map = [])
    {
        $model = new self();
        if (isset($map['BusinessCode'])) {
            $model->businessCode = $map['BusinessCode'];
        }
        if (isset($map['CloudMonitorFlags'])) {
            $model->cloudMonitorFlags = $map['CloudMonitorFlags'];
        }
        if (isset($map['ClusterEnvType'])) {
            $model->clusterEnvType = $map['ClusterEnvType'];
        }
        if (isset($map['ClusterId'])) {
            $model->clusterId = $map['ClusterId'];
        }
        if (isset($map['ClusterTitle'])) {
            $model->clusterTitle = $map['ClusterTitle'];
        }
        if (isset($map['ClusterType'])) {
            $model->clusterType = $map['ClusterType'];
        }
        if (isset($map['CreateWithArmsIntegration'])) {
            $model->createWithArmsIntegration = $map['CreateWithArmsIntegration'];
        }
        if (isset($map['CreateWithLogIntegration'])) {
            $model->createWithLogIntegration = $map['CreateWithLogIntegration'];
        }
        if (isset($map['KeyPair'])) {
            $model->keyPair = $map['KeyPair'];
        }
        if (isset($map['NetPlug'])) {
            $model->netPlug = $map['NetPlug'];
        }
        if (isset($map['Password'])) {
            $model->password = $map['Password'];
        }
        if (isset($map['PodCIDR'])) {
            $model->podCIDR = $map['PodCIDR'];
        }
        if (isset($map['PrivateZone'])) {
            $model->privateZone = $map['PrivateZone'];
        }
        if (isset($map['PublicSlb'])) {
            $model->publicSlb = $map['PublicSlb'];
        }
        if (isset($map['RegionId'])) {
            $model->regionId = $map['RegionId'];
        }
        if (isset($map['RegionName'])) {
            $model->regionName = $map['RegionName'];
        }
        if (isset($map['ServiceCIDR'])) {
            $model->serviceCIDR = $map['ServiceCIDR'];
        }
        if (isset($map['SnatEntry'])) {
            $model->snatEntry = $map['SnatEntry'];
        }
        if (isset($map['VpcId'])) {
            $model->vpcId = $map['VpcId'];
        }
        if (isset($map['Vswitchids'])) {
            if (!empty($map['Vswitchids'])) {
                $model->vswitchids = $map['Vswitchids'];
            }
        }

        return $model;
    }
}
