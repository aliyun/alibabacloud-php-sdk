<?php

// This file is auto-generated, don't edit it. Thanks.

namespace AlibabaCloud\SDK\Drds\V20190123\Models\DescribeDrdsInstancesResponseBody\instances;

use AlibabaCloud\SDK\Drds\V20190123\Models\DescribeDrdsInstancesResponseBody\instances\instance\readOnlyDBInstanceIds;
use AlibabaCloud\SDK\Drds\V20190123\Models\DescribeDrdsInstancesResponseBody\instances\instance\vips;
use AlibabaCloud\Tea\Model;

class instance extends Model
{
    /**
     * @description The commodity code of the service.
     *
     * @example drdsPost
     *
     * @var string
     */
    public $commodityCode;

    /**
     * @description The timestamp that indicates when the instance is created.
     *
     * @example 1568620311000
     *
     * @var int
     */
    public $createTime;

    /**
     * @description The description of the instance.
     *
     * @example drds_test
     *
     * @var string
     */
    public $description;

    /**
     * @description The ID of the instance.
     *
     * @example drdssen12****
     *
     * @var string
     */
    public $drdsInstanceId;

    /**
     * @description The timestamp that indicates when the instance expires.
     *
     * @example 4724323200000
     *
     * @var int
     */
    public $expireDate;

    /**
     * @description The role of the instance. Valid values:
     *
     *   MASTER: The instance is a primary instance.
     *   SLAVE: The instance is a read-only instance to analyze complex queries.
     *   SLAVE_FLOW: The instance is a read-only instance for high-concurrency scenarios.
     *
     * @example MASTER
     *
     * @var string
     */
    public $instRole;

    /**
     * @description The instance series.
     *
     * @example drds.sn2.4c16g
     *
     * @var string
     */
    public $instanceSeries;

    /**
     * @description The specification of the instance.
     *
     * @example drds.sn2.4c16g.8C32G
     *
     * @var string
     */
    public $instanceSpec;

    /**
     * @description The tag of the instance. Valid values:
     *
     *   **NORMAL**: The instance is a standard instance.
     *   **HA**: The instance is a high-availability (HA) instance.
     *   **VPC**: The instance is a VPC-based instance.
     *
     * @example NORMAL
     *
     * @var string
     */
    public $label;

    /**
     * @description The machine type of the instance. Valid value: ecs.
     *
     * @example ecs
     *
     * @var string
     */
    public $machineType;

    /**
     * @description The ID of the primary instance.
     *
     * @example drdssen12****
     *
     * @var string
     */
    public $masterInstanceId;

    /**
     * @description The network type of the instance. Valid values:
     *
     *   **CLASSIC**
     *   **VPC**
     *
     * @example CLASSIC
     *
     * @var string
     */
    public $networkType;

    /**
     * @description The ID of the purchased instance.
     *
     * @example drdssen12****
     *
     * @var string
     */
    public $orderInstanceId;

    /**
     * @description The version of the service.
     *
     * @example V1
     *
     * @var string
     */
    public $productVersion;

    /**
     * @description The IDs of read-only instances that are associated with the instance.
     *
     * @var readOnlyDBInstanceIds
     */
    public $readOnlyDBInstanceIds;

    /**
     * @description The ID of the region.
     *
     * @example cn-hangzhou-e
     *
     * @var string
     */
    public $regionId;

    /**
     * @description The ID of the resource group to which the instance belongs.
     *
     * @example rg-aek2ljh3ye4****
     *
     * @var string
     */
    public $resourceGroupId;

    /**
     * @description The status of the instance.
     *
     * @example RUN
     *
     * @var string
     */
    public $status;

    /**
     * @description The type of the instance. Valid values:
     *
     *   **PUBLIC**: The returned instance is a shared instance.
     *   **PRIVATE**: The returned instance is a dedicated instance.
     *
     * @example PRIVATE
     *
     * @var string
     */
    public $type;

    /**
     * @description The version of the instance.
     *
     * @example 0
     *
     * @var int
     */
    public $version;

    /**
     * @description Indicates whether the version of the instance can be upgraded.
     *
     * @example Upgradable
     *
     * @var string
     */
    public $versionAction;

    /**
     * @description The list of returned virtual IP addresses (VIPs).
     *
     * @var vips
     */
    public $vips;

    /**
     * @description The ID of the instance that is deployed in the VPC.
     *
     * @example drdssen12****
     *
     * @var string
     */
    public $vpcCloudInstanceId;

    /**
     * @description The ID of the VPC to which the instance belongs.
     *
     * @example vpc-bp**********
     *
     * @var string
     */
    public $vpcId;

    /**
     * @description The ID of the zone in which the resource is located.
     *
     * @example vsw-bpxxxxxxxxxxxxx96
     *
     * @var string
     */
    public $zoneId;

    /**
     * @description The edition of the instance. Valid values:
     *
     *   **starter**: Starter Edition
     *   **enterprise**: Enterprise Edition
     *   **standard**: Standard Edition
     *
     * @example enterprise
     *
     * @var string
     */
    public $series;
    protected $_name = [
        'commodityCode'         => 'CommodityCode',
        'createTime'            => 'CreateTime',
        'description'           => 'Description',
        'drdsInstanceId'        => 'DrdsInstanceId',
        'expireDate'            => 'ExpireDate',
        'instRole'              => 'InstRole',
        'instanceSeries'        => 'InstanceSeries',
        'instanceSpec'          => 'InstanceSpec',
        'label'                 => 'Label',
        'machineType'           => 'MachineType',
        'masterInstanceId'      => 'MasterInstanceId',
        'networkType'           => 'NetworkType',
        'orderInstanceId'       => 'OrderInstanceId',
        'productVersion'        => 'ProductVersion',
        'readOnlyDBInstanceIds' => 'ReadOnlyDBInstanceIds',
        'regionId'              => 'RegionId',
        'resourceGroupId'       => 'ResourceGroupId',
        'status'                => 'Status',
        'type'                  => 'Type',
        'version'               => 'Version',
        'versionAction'         => 'VersionAction',
        'vips'                  => 'Vips',
        'vpcCloudInstanceId'    => 'VpcCloudInstanceId',
        'vpcId'                 => 'VpcId',
        'zoneId'                => 'ZoneId',
        'series'                => 'series',
    ];

    public function validate()
    {
    }

    public function toMap()
    {
        $res = [];
        if (null !== $this->commodityCode) {
            $res['CommodityCode'] = $this->commodityCode;
        }
        if (null !== $this->createTime) {
            $res['CreateTime'] = $this->createTime;
        }
        if (null !== $this->description) {
            $res['Description'] = $this->description;
        }
        if (null !== $this->drdsInstanceId) {
            $res['DrdsInstanceId'] = $this->drdsInstanceId;
        }
        if (null !== $this->expireDate) {
            $res['ExpireDate'] = $this->expireDate;
        }
        if (null !== $this->instRole) {
            $res['InstRole'] = $this->instRole;
        }
        if (null !== $this->instanceSeries) {
            $res['InstanceSeries'] = $this->instanceSeries;
        }
        if (null !== $this->instanceSpec) {
            $res['InstanceSpec'] = $this->instanceSpec;
        }
        if (null !== $this->label) {
            $res['Label'] = $this->label;
        }
        if (null !== $this->machineType) {
            $res['MachineType'] = $this->machineType;
        }
        if (null !== $this->masterInstanceId) {
            $res['MasterInstanceId'] = $this->masterInstanceId;
        }
        if (null !== $this->networkType) {
            $res['NetworkType'] = $this->networkType;
        }
        if (null !== $this->orderInstanceId) {
            $res['OrderInstanceId'] = $this->orderInstanceId;
        }
        if (null !== $this->productVersion) {
            $res['ProductVersion'] = $this->productVersion;
        }
        if (null !== $this->readOnlyDBInstanceIds) {
            $res['ReadOnlyDBInstanceIds'] = null !== $this->readOnlyDBInstanceIds ? $this->readOnlyDBInstanceIds->toMap() : null;
        }
        if (null !== $this->regionId) {
            $res['RegionId'] = $this->regionId;
        }
        if (null !== $this->resourceGroupId) {
            $res['ResourceGroupId'] = $this->resourceGroupId;
        }
        if (null !== $this->status) {
            $res['Status'] = $this->status;
        }
        if (null !== $this->type) {
            $res['Type'] = $this->type;
        }
        if (null !== $this->version) {
            $res['Version'] = $this->version;
        }
        if (null !== $this->versionAction) {
            $res['VersionAction'] = $this->versionAction;
        }
        if (null !== $this->vips) {
            $res['Vips'] = null !== $this->vips ? $this->vips->toMap() : null;
        }
        if (null !== $this->vpcCloudInstanceId) {
            $res['VpcCloudInstanceId'] = $this->vpcCloudInstanceId;
        }
        if (null !== $this->vpcId) {
            $res['VpcId'] = $this->vpcId;
        }
        if (null !== $this->zoneId) {
            $res['ZoneId'] = $this->zoneId;
        }
        if (null !== $this->series) {
            $res['series'] = $this->series;
        }

        return $res;
    }

    /**
     * @param array $map
     *
     * @return instance
     */
    public static function fromMap($map = [])
    {
        $model = new self();
        if (isset($map['CommodityCode'])) {
            $model->commodityCode = $map['CommodityCode'];
        }
        if (isset($map['CreateTime'])) {
            $model->createTime = $map['CreateTime'];
        }
        if (isset($map['Description'])) {
            $model->description = $map['Description'];
        }
        if (isset($map['DrdsInstanceId'])) {
            $model->drdsInstanceId = $map['DrdsInstanceId'];
        }
        if (isset($map['ExpireDate'])) {
            $model->expireDate = $map['ExpireDate'];
        }
        if (isset($map['InstRole'])) {
            $model->instRole = $map['InstRole'];
        }
        if (isset($map['InstanceSeries'])) {
            $model->instanceSeries = $map['InstanceSeries'];
        }
        if (isset($map['InstanceSpec'])) {
            $model->instanceSpec = $map['InstanceSpec'];
        }
        if (isset($map['Label'])) {
            $model->label = $map['Label'];
        }
        if (isset($map['MachineType'])) {
            $model->machineType = $map['MachineType'];
        }
        if (isset($map['MasterInstanceId'])) {
            $model->masterInstanceId = $map['MasterInstanceId'];
        }
        if (isset($map['NetworkType'])) {
            $model->networkType = $map['NetworkType'];
        }
        if (isset($map['OrderInstanceId'])) {
            $model->orderInstanceId = $map['OrderInstanceId'];
        }
        if (isset($map['ProductVersion'])) {
            $model->productVersion = $map['ProductVersion'];
        }
        if (isset($map['ReadOnlyDBInstanceIds'])) {
            $model->readOnlyDBInstanceIds = readOnlyDBInstanceIds::fromMap($map['ReadOnlyDBInstanceIds']);
        }
        if (isset($map['RegionId'])) {
            $model->regionId = $map['RegionId'];
        }
        if (isset($map['ResourceGroupId'])) {
            $model->resourceGroupId = $map['ResourceGroupId'];
        }
        if (isset($map['Status'])) {
            $model->status = $map['Status'];
        }
        if (isset($map['Type'])) {
            $model->type = $map['Type'];
        }
        if (isset($map['Version'])) {
            $model->version = $map['Version'];
        }
        if (isset($map['VersionAction'])) {
            $model->versionAction = $map['VersionAction'];
        }
        if (isset($map['Vips'])) {
            $model->vips = vips::fromMap($map['Vips']);
        }
        if (isset($map['VpcCloudInstanceId'])) {
            $model->vpcCloudInstanceId = $map['VpcCloudInstanceId'];
        }
        if (isset($map['VpcId'])) {
            $model->vpcId = $map['VpcId'];
        }
        if (isset($map['ZoneId'])) {
            $model->zoneId = $map['ZoneId'];
        }
        if (isset($map['series'])) {
            $model->series = $map['series'];
        }

        return $model;
    }
}
