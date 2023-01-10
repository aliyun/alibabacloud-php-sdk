<?php

// This file is auto-generated, don't edit it. Thanks.

namespace AlibabaCloud\SDK\Eais\V20190624\Models;

use AlibabaCloud\Tea\Model;

class CreateEaiAllRequest extends Model
{
    /**
     * @example ubuntu_18_04_x64_20G_alibase_20200914.vhd
     *
     * @var string
     */
    public $clientImageId;

    /**
     * @example test-name
     *
     * @var string
     */
    public $clientInstanceName;

    /**
     * @example ecs.g5.large
     *
     * @var string
     */
    public $clientInstanceType;

    /**
     * @example 10
     *
     * @var int
     */
    public $clientInternetMaxBandwidthIn;

    /**
     * @example 10
     *
     * @var int
     */
    public $clientInternetMaxBandwidthOut;

    /**
     * @example EcsV587!
     *
     * @var string
     */
    public $clientPassword;

    /**
     * @example sg-wz9a02pqben4axkd2****
     *
     * @var string
     */
    public $clientSecurityGroupId;

    /**
     * @example cloud_ssd
     *
     * @var string
     */
    public $clientSystemDiskCategory;

    /**
     * @example 40
     *
     * @var int
     */
    public $clientSystemDiskSize;

    /**
     * @example 123e4567-e89b-12d3-a456-426655440000
     *
     * @var string
     */
    public $clientToken;

    /**
     * @example vsw-wz9a04axkd22pqben****
     *
     * @var string
     */
    public $clientVSwitchId;

    /**
     * @example cn-shenzhen-a
     *
     * @var string
     */
    public $clientZoneId;

    /**
     * @example eais.ei-a6.large
     *
     * @var string
     */
    public $eaiInstanceType;

    /**
     * @example eais-test01
     *
     * @var string
     */
    public $instanceName;

    /**
     * @example cn-shenzhen
     *
     * @var string
     */
    public $regionId;

    /**
     * @var string
     */
    public $resourceGroupId;
    protected $_name = [
        'clientImageId'                 => 'ClientImageId',
        'clientInstanceName'            => 'ClientInstanceName',
        'clientInstanceType'            => 'ClientInstanceType',
        'clientInternetMaxBandwidthIn'  => 'ClientInternetMaxBandwidthIn',
        'clientInternetMaxBandwidthOut' => 'ClientInternetMaxBandwidthOut',
        'clientPassword'                => 'ClientPassword',
        'clientSecurityGroupId'         => 'ClientSecurityGroupId',
        'clientSystemDiskCategory'      => 'ClientSystemDiskCategory',
        'clientSystemDiskSize'          => 'ClientSystemDiskSize',
        'clientToken'                   => 'ClientToken',
        'clientVSwitchId'               => 'ClientVSwitchId',
        'clientZoneId'                  => 'ClientZoneId',
        'eaiInstanceType'               => 'EaiInstanceType',
        'instanceName'                  => 'InstanceName',
        'regionId'                      => 'RegionId',
        'resourceGroupId'               => 'ResourceGroupId',
    ];

    public function validate()
    {
    }

    public function toMap()
    {
        $res = [];
        if (null !== $this->clientImageId) {
            $res['ClientImageId'] = $this->clientImageId;
        }
        if (null !== $this->clientInstanceName) {
            $res['ClientInstanceName'] = $this->clientInstanceName;
        }
        if (null !== $this->clientInstanceType) {
            $res['ClientInstanceType'] = $this->clientInstanceType;
        }
        if (null !== $this->clientInternetMaxBandwidthIn) {
            $res['ClientInternetMaxBandwidthIn'] = $this->clientInternetMaxBandwidthIn;
        }
        if (null !== $this->clientInternetMaxBandwidthOut) {
            $res['ClientInternetMaxBandwidthOut'] = $this->clientInternetMaxBandwidthOut;
        }
        if (null !== $this->clientPassword) {
            $res['ClientPassword'] = $this->clientPassword;
        }
        if (null !== $this->clientSecurityGroupId) {
            $res['ClientSecurityGroupId'] = $this->clientSecurityGroupId;
        }
        if (null !== $this->clientSystemDiskCategory) {
            $res['ClientSystemDiskCategory'] = $this->clientSystemDiskCategory;
        }
        if (null !== $this->clientSystemDiskSize) {
            $res['ClientSystemDiskSize'] = $this->clientSystemDiskSize;
        }
        if (null !== $this->clientToken) {
            $res['ClientToken'] = $this->clientToken;
        }
        if (null !== $this->clientVSwitchId) {
            $res['ClientVSwitchId'] = $this->clientVSwitchId;
        }
        if (null !== $this->clientZoneId) {
            $res['ClientZoneId'] = $this->clientZoneId;
        }
        if (null !== $this->eaiInstanceType) {
            $res['EaiInstanceType'] = $this->eaiInstanceType;
        }
        if (null !== $this->instanceName) {
            $res['InstanceName'] = $this->instanceName;
        }
        if (null !== $this->regionId) {
            $res['RegionId'] = $this->regionId;
        }
        if (null !== $this->resourceGroupId) {
            $res['ResourceGroupId'] = $this->resourceGroupId;
        }

        return $res;
    }

    /**
     * @param array $map
     *
     * @return CreateEaiAllRequest
     */
    public static function fromMap($map = [])
    {
        $model = new self();
        if (isset($map['ClientImageId'])) {
            $model->clientImageId = $map['ClientImageId'];
        }
        if (isset($map['ClientInstanceName'])) {
            $model->clientInstanceName = $map['ClientInstanceName'];
        }
        if (isset($map['ClientInstanceType'])) {
            $model->clientInstanceType = $map['ClientInstanceType'];
        }
        if (isset($map['ClientInternetMaxBandwidthIn'])) {
            $model->clientInternetMaxBandwidthIn = $map['ClientInternetMaxBandwidthIn'];
        }
        if (isset($map['ClientInternetMaxBandwidthOut'])) {
            $model->clientInternetMaxBandwidthOut = $map['ClientInternetMaxBandwidthOut'];
        }
        if (isset($map['ClientPassword'])) {
            $model->clientPassword = $map['ClientPassword'];
        }
        if (isset($map['ClientSecurityGroupId'])) {
            $model->clientSecurityGroupId = $map['ClientSecurityGroupId'];
        }
        if (isset($map['ClientSystemDiskCategory'])) {
            $model->clientSystemDiskCategory = $map['ClientSystemDiskCategory'];
        }
        if (isset($map['ClientSystemDiskSize'])) {
            $model->clientSystemDiskSize = $map['ClientSystemDiskSize'];
        }
        if (isset($map['ClientToken'])) {
            $model->clientToken = $map['ClientToken'];
        }
        if (isset($map['ClientVSwitchId'])) {
            $model->clientVSwitchId = $map['ClientVSwitchId'];
        }
        if (isset($map['ClientZoneId'])) {
            $model->clientZoneId = $map['ClientZoneId'];
        }
        if (isset($map['EaiInstanceType'])) {
            $model->eaiInstanceType = $map['EaiInstanceType'];
        }
        if (isset($map['InstanceName'])) {
            $model->instanceName = $map['InstanceName'];
        }
        if (isset($map['RegionId'])) {
            $model->regionId = $map['RegionId'];
        }
        if (isset($map['ResourceGroupId'])) {
            $model->resourceGroupId = $map['ResourceGroupId'];
        }

        return $model;
    }
}
