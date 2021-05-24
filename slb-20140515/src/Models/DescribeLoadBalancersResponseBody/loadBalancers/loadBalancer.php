<?php

// This file is auto-generated, don't edit it. Thanks.

namespace AlibabaCloud\SDK\Slb\V20140515\Models\DescribeLoadBalancersResponseBody\loadBalancers;

use AlibabaCloud\Tea\Model;

class loadBalancer extends Model
{
    /**
     * @var string
     */
    public $vpcId;

    /**
     * @var int
     */
    public $createTimeStamp;

    /**
     * @var string
     */
    public $loadBalancerId;

    /**
     * @var string
     */
    public $createTime;

    /**
     * @var string
     */
    public $payType;

    /**
     * @var string
     */
    public $addressType;

    /**
     * @var string
     */
    public $networkType;

    /**
     * @var string
     */
    public $addressIPVersion;

    /**
     * @var string
     */
    public $loadBalancerName;

    /**
     * @var int
     */
    public $bandwidth;

    /**
     * @var string
     */
    public $address;

    /**
     * @var string
     */
    public $slaveZoneId;

    /**
     * @var string
     */
    public $masterZoneId;

    /**
     * @var string
     */
    public $internetChargeTypeAlias;

    /**
     * @var string
     */
    public $loadBalancerSpec;

    /**
     * @var string
     */
    public $regionId;

    /**
     * @var string
     */
    public $modificationProtectionReason;

    /**
     * @var string
     */
    public $modificationProtectionStatus;

    /**
     * @var string
     */
    public $vSwitchId;

    /**
     * @var string
     */
    public $loadBalancerStatus;

    /**
     * @var string
     */
    public $resourceGroupId;

    /**
     * @var string
     */
    public $internetChargeType;

    /**
     * @var string
     */
    public $deleteProtection;

    /**
     * @var string
     */
    public $regionIdAlias;
    protected $_name = [
        'vpcId'                        => 'VpcId',
        'createTimeStamp'              => 'CreateTimeStamp',
        'loadBalancerId'               => 'LoadBalancerId',
        'createTime'                   => 'CreateTime',
        'payType'                      => 'PayType',
        'addressType'                  => 'AddressType',
        'networkType'                  => 'NetworkType',
        'addressIPVersion'             => 'AddressIPVersion',
        'loadBalancerName'             => 'LoadBalancerName',
        'bandwidth'                    => 'Bandwidth',
        'address'                      => 'Address',
        'slaveZoneId'                  => 'SlaveZoneId',
        'masterZoneId'                 => 'MasterZoneId',
        'internetChargeTypeAlias'      => 'InternetChargeTypeAlias',
        'loadBalancerSpec'             => 'LoadBalancerSpec',
        'regionId'                     => 'RegionId',
        'modificationProtectionReason' => 'ModificationProtectionReason',
        'modificationProtectionStatus' => 'ModificationProtectionStatus',
        'vSwitchId'                    => 'VSwitchId',
        'loadBalancerStatus'           => 'LoadBalancerStatus',
        'resourceGroupId'              => 'ResourceGroupId',
        'internetChargeType'           => 'InternetChargeType',
        'deleteProtection'             => 'DeleteProtection',
        'regionIdAlias'                => 'RegionIdAlias',
    ];

    public function validate()
    {
    }

    public function toMap()
    {
        $res = [];
        if (null !== $this->vpcId) {
            $res['VpcId'] = $this->vpcId;
        }
        if (null !== $this->createTimeStamp) {
            $res['CreateTimeStamp'] = $this->createTimeStamp;
        }
        if (null !== $this->loadBalancerId) {
            $res['LoadBalancerId'] = $this->loadBalancerId;
        }
        if (null !== $this->createTime) {
            $res['CreateTime'] = $this->createTime;
        }
        if (null !== $this->payType) {
            $res['PayType'] = $this->payType;
        }
        if (null !== $this->addressType) {
            $res['AddressType'] = $this->addressType;
        }
        if (null !== $this->networkType) {
            $res['NetworkType'] = $this->networkType;
        }
        if (null !== $this->addressIPVersion) {
            $res['AddressIPVersion'] = $this->addressIPVersion;
        }
        if (null !== $this->loadBalancerName) {
            $res['LoadBalancerName'] = $this->loadBalancerName;
        }
        if (null !== $this->bandwidth) {
            $res['Bandwidth'] = $this->bandwidth;
        }
        if (null !== $this->address) {
            $res['Address'] = $this->address;
        }
        if (null !== $this->slaveZoneId) {
            $res['SlaveZoneId'] = $this->slaveZoneId;
        }
        if (null !== $this->masterZoneId) {
            $res['MasterZoneId'] = $this->masterZoneId;
        }
        if (null !== $this->internetChargeTypeAlias) {
            $res['InternetChargeTypeAlias'] = $this->internetChargeTypeAlias;
        }
        if (null !== $this->loadBalancerSpec) {
            $res['LoadBalancerSpec'] = $this->loadBalancerSpec;
        }
        if (null !== $this->regionId) {
            $res['RegionId'] = $this->regionId;
        }
        if (null !== $this->modificationProtectionReason) {
            $res['ModificationProtectionReason'] = $this->modificationProtectionReason;
        }
        if (null !== $this->modificationProtectionStatus) {
            $res['ModificationProtectionStatus'] = $this->modificationProtectionStatus;
        }
        if (null !== $this->vSwitchId) {
            $res['VSwitchId'] = $this->vSwitchId;
        }
        if (null !== $this->loadBalancerStatus) {
            $res['LoadBalancerStatus'] = $this->loadBalancerStatus;
        }
        if (null !== $this->resourceGroupId) {
            $res['ResourceGroupId'] = $this->resourceGroupId;
        }
        if (null !== $this->internetChargeType) {
            $res['InternetChargeType'] = $this->internetChargeType;
        }
        if (null !== $this->deleteProtection) {
            $res['DeleteProtection'] = $this->deleteProtection;
        }
        if (null !== $this->regionIdAlias) {
            $res['RegionIdAlias'] = $this->regionIdAlias;
        }

        return $res;
    }

    /**
     * @param array $map
     *
     * @return loadBalancer
     */
    public static function fromMap($map = [])
    {
        $model = new self();
        if (isset($map['VpcId'])) {
            $model->vpcId = $map['VpcId'];
        }
        if (isset($map['CreateTimeStamp'])) {
            $model->createTimeStamp = $map['CreateTimeStamp'];
        }
        if (isset($map['LoadBalancerId'])) {
            $model->loadBalancerId = $map['LoadBalancerId'];
        }
        if (isset($map['CreateTime'])) {
            $model->createTime = $map['CreateTime'];
        }
        if (isset($map['PayType'])) {
            $model->payType = $map['PayType'];
        }
        if (isset($map['AddressType'])) {
            $model->addressType = $map['AddressType'];
        }
        if (isset($map['NetworkType'])) {
            $model->networkType = $map['NetworkType'];
        }
        if (isset($map['AddressIPVersion'])) {
            $model->addressIPVersion = $map['AddressIPVersion'];
        }
        if (isset($map['LoadBalancerName'])) {
            $model->loadBalancerName = $map['LoadBalancerName'];
        }
        if (isset($map['Bandwidth'])) {
            $model->bandwidth = $map['Bandwidth'];
        }
        if (isset($map['Address'])) {
            $model->address = $map['Address'];
        }
        if (isset($map['SlaveZoneId'])) {
            $model->slaveZoneId = $map['SlaveZoneId'];
        }
        if (isset($map['MasterZoneId'])) {
            $model->masterZoneId = $map['MasterZoneId'];
        }
        if (isset($map['InternetChargeTypeAlias'])) {
            $model->internetChargeTypeAlias = $map['InternetChargeTypeAlias'];
        }
        if (isset($map['LoadBalancerSpec'])) {
            $model->loadBalancerSpec = $map['LoadBalancerSpec'];
        }
        if (isset($map['RegionId'])) {
            $model->regionId = $map['RegionId'];
        }
        if (isset($map['ModificationProtectionReason'])) {
            $model->modificationProtectionReason = $map['ModificationProtectionReason'];
        }
        if (isset($map['ModificationProtectionStatus'])) {
            $model->modificationProtectionStatus = $map['ModificationProtectionStatus'];
        }
        if (isset($map['VSwitchId'])) {
            $model->vSwitchId = $map['VSwitchId'];
        }
        if (isset($map['LoadBalancerStatus'])) {
            $model->loadBalancerStatus = $map['LoadBalancerStatus'];
        }
        if (isset($map['ResourceGroupId'])) {
            $model->resourceGroupId = $map['ResourceGroupId'];
        }
        if (isset($map['InternetChargeType'])) {
            $model->internetChargeType = $map['InternetChargeType'];
        }
        if (isset($map['DeleteProtection'])) {
            $model->deleteProtection = $map['DeleteProtection'];
        }
        if (isset($map['RegionIdAlias'])) {
            $model->regionIdAlias = $map['RegionIdAlias'];
        }

        return $model;
    }
}
