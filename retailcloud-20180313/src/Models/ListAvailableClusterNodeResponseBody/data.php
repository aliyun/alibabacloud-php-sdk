<?php

// This file is auto-generated, don't edit it. Thanks.

namespace AlibabaCloud\SDK\Retailcloud\V20180313\Models\ListAvailableClusterNodeResponseBody;

use AlibabaCloud\Tea\Model;

class data extends Model
{
    /**
     * @var string
     */
    public $businessCode;

    /**
     * @var string
     */
    public $ecsConfiguration;

    /**
     * @var string
     */
    public $ecsCpu;

    /**
     * @var string
     */
    public $ecsEip;

    /**
     * @var string
     */
    public $ecsExpiredTime;

    /**
     * @var string
     */
    public $ecsLocalStorageCapacity;

    /**
     * @var string
     */
    public $ecsMemory;

    /**
     * @var string
     */
    public $ecsOsType;

    /**
     * @var string
     */
    public $ecsPrivateIp;

    /**
     * @var string
     */
    public $ecsPublicIp;

    /**
     * @var string
     */
    public $ecsZone;

    /**
     * @var string
     */
    public $instanceId;

    /**
     * @var string
     */
    public $instanceName;

    /**
     * @var string
     */
    public $instanceNetworkType;

    /**
     * @var string
     */
    public $instanceType;

    /**
     * @var string
     */
    public $internetMaxBandwidthIn;

    /**
     * @var string
     */
    public $internetMaxBandwidthOut;

    /**
     * @var string
     */
    public $OSName;

    /**
     * @var string
     */
    public $regionId;

    /**
     * @var string
     */
    public $vpcId;
    protected $_name = [
        'businessCode'            => 'BusinessCode',
        'ecsConfiguration'        => 'EcsConfiguration',
        'ecsCpu'                  => 'EcsCpu',
        'ecsEip'                  => 'EcsEip',
        'ecsExpiredTime'          => 'EcsExpiredTime',
        'ecsLocalStorageCapacity' => 'EcsLocalStorageCapacity',
        'ecsMemory'               => 'EcsMemory',
        'ecsOsType'               => 'EcsOsType',
        'ecsPrivateIp'            => 'EcsPrivateIp',
        'ecsPublicIp'             => 'EcsPublicIp',
        'ecsZone'                 => 'EcsZone',
        'instanceId'              => 'InstanceId',
        'instanceName'            => 'InstanceName',
        'instanceNetworkType'     => 'InstanceNetworkType',
        'instanceType'            => 'InstanceType',
        'internetMaxBandwidthIn'  => 'InternetMaxBandwidthIn',
        'internetMaxBandwidthOut' => 'InternetMaxBandwidthOut',
        'OSName'                  => 'OSName',
        'regionId'                => 'RegionId',
        'vpcId'                   => 'VpcId',
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
        if (null !== $this->ecsConfiguration) {
            $res['EcsConfiguration'] = $this->ecsConfiguration;
        }
        if (null !== $this->ecsCpu) {
            $res['EcsCpu'] = $this->ecsCpu;
        }
        if (null !== $this->ecsEip) {
            $res['EcsEip'] = $this->ecsEip;
        }
        if (null !== $this->ecsExpiredTime) {
            $res['EcsExpiredTime'] = $this->ecsExpiredTime;
        }
        if (null !== $this->ecsLocalStorageCapacity) {
            $res['EcsLocalStorageCapacity'] = $this->ecsLocalStorageCapacity;
        }
        if (null !== $this->ecsMemory) {
            $res['EcsMemory'] = $this->ecsMemory;
        }
        if (null !== $this->ecsOsType) {
            $res['EcsOsType'] = $this->ecsOsType;
        }
        if (null !== $this->ecsPrivateIp) {
            $res['EcsPrivateIp'] = $this->ecsPrivateIp;
        }
        if (null !== $this->ecsPublicIp) {
            $res['EcsPublicIp'] = $this->ecsPublicIp;
        }
        if (null !== $this->ecsZone) {
            $res['EcsZone'] = $this->ecsZone;
        }
        if (null !== $this->instanceId) {
            $res['InstanceId'] = $this->instanceId;
        }
        if (null !== $this->instanceName) {
            $res['InstanceName'] = $this->instanceName;
        }
        if (null !== $this->instanceNetworkType) {
            $res['InstanceNetworkType'] = $this->instanceNetworkType;
        }
        if (null !== $this->instanceType) {
            $res['InstanceType'] = $this->instanceType;
        }
        if (null !== $this->internetMaxBandwidthIn) {
            $res['InternetMaxBandwidthIn'] = $this->internetMaxBandwidthIn;
        }
        if (null !== $this->internetMaxBandwidthOut) {
            $res['InternetMaxBandwidthOut'] = $this->internetMaxBandwidthOut;
        }
        if (null !== $this->OSName) {
            $res['OSName'] = $this->OSName;
        }
        if (null !== $this->regionId) {
            $res['RegionId'] = $this->regionId;
        }
        if (null !== $this->vpcId) {
            $res['VpcId'] = $this->vpcId;
        }

        return $res;
    }

    /**
     * @param array $map
     *
     * @return data
     */
    public static function fromMap($map = [])
    {
        $model = new self();
        if (isset($map['BusinessCode'])) {
            $model->businessCode = $map['BusinessCode'];
        }
        if (isset($map['EcsConfiguration'])) {
            $model->ecsConfiguration = $map['EcsConfiguration'];
        }
        if (isset($map['EcsCpu'])) {
            $model->ecsCpu = $map['EcsCpu'];
        }
        if (isset($map['EcsEip'])) {
            $model->ecsEip = $map['EcsEip'];
        }
        if (isset($map['EcsExpiredTime'])) {
            $model->ecsExpiredTime = $map['EcsExpiredTime'];
        }
        if (isset($map['EcsLocalStorageCapacity'])) {
            $model->ecsLocalStorageCapacity = $map['EcsLocalStorageCapacity'];
        }
        if (isset($map['EcsMemory'])) {
            $model->ecsMemory = $map['EcsMemory'];
        }
        if (isset($map['EcsOsType'])) {
            $model->ecsOsType = $map['EcsOsType'];
        }
        if (isset($map['EcsPrivateIp'])) {
            $model->ecsPrivateIp = $map['EcsPrivateIp'];
        }
        if (isset($map['EcsPublicIp'])) {
            $model->ecsPublicIp = $map['EcsPublicIp'];
        }
        if (isset($map['EcsZone'])) {
            $model->ecsZone = $map['EcsZone'];
        }
        if (isset($map['InstanceId'])) {
            $model->instanceId = $map['InstanceId'];
        }
        if (isset($map['InstanceName'])) {
            $model->instanceName = $map['InstanceName'];
        }
        if (isset($map['InstanceNetworkType'])) {
            $model->instanceNetworkType = $map['InstanceNetworkType'];
        }
        if (isset($map['InstanceType'])) {
            $model->instanceType = $map['InstanceType'];
        }
        if (isset($map['InternetMaxBandwidthIn'])) {
            $model->internetMaxBandwidthIn = $map['InternetMaxBandwidthIn'];
        }
        if (isset($map['InternetMaxBandwidthOut'])) {
            $model->internetMaxBandwidthOut = $map['InternetMaxBandwidthOut'];
        }
        if (isset($map['OSName'])) {
            $model->OSName = $map['OSName'];
        }
        if (isset($map['RegionId'])) {
            $model->regionId = $map['RegionId'];
        }
        if (isset($map['VpcId'])) {
            $model->vpcId = $map['VpcId'];
        }

        return $model;
    }
}
