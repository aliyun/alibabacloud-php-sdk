<?php

// This file is auto-generated, don't edit it. Thanks.

namespace AlibabaCloud\SDK\OceanBasePro\V20190901\Models;

use AlibabaCloud\Tea\Model;

class CreateTenantRequest extends Model
{
    /**
     * @description The character set.
     * This parameter is required.
     * @example utf8mb4
     *
     * @var string
     */
    public $charset;

    /**
     * @description The number of CPU cores of the tenant.
     *
     * This parameter is required.
     * @example 2
     *
     * @var int
     */
    public $cpu;

    /**
     * @var string[]
     */
    public $createParams;

    /**
     * @description The description of the database.
     *
     * @example this is a test database
     *
     * @var string
     */
    public $description;

    /**
     * @description The ID of the OceanBase cluster.
     *
     * This parameter is required.
     * @example ob317v4uif****
     *
     * @var string
     */
    public $instanceId;

    /**
     * @description The size of the log disk allocated to the tenant, in GB.
     *
     * @example 128
     *
     * @var int
     */
    public $logDisk;

    /**
     * @description The memory size of the tenant, in GB.
     *
     * This parameter is required.
     * @example 10
     *
     * @var int
     */
    public $memory;

    /**
     * @description The primary zone of the tenant.
     * This parameter is required.
     * @example cn-hangzhou-h
     *
     * @var string
     */
    public $primaryZone;

    /**
     * @description Specifies to create a read-only zone. Separate the names of multiple zones with commas (,).
     * >Notice: <br>At present, this parameter is unavailable.
     * @example cn-shanghai-g-ro,cn-shanghai-h-ro
     *
     * @var string
     */
    public $readOnlyZoneList;

    /**
     * @description The tenant mode.
     * This parameter is required.
     * @example Oracle
     *
     * @var string
     */
    public $tenantMode;

    /**
     * @description The name of the tenant.
     * This parameter is required.
     * @example pay_online
     *
     * @var string
     */
    public $tenantName;

    /**
     * @description The time zone of the tenant. For more information, see [DescribeTimeZones](https://www.alibabacloud.com/help/en/apsaradb-for-oceanbase/latest/api-oceanbasepro-2019-09-01-describetimezones).
     *
     * This parameter is required.
     * @example Asia/Shanghai
     *
     * @var string
     */
    public $timeZone;

    /**
     * @description The number of resource distribution nodes in the tenant.
     * The number is determined by the deployment mode of the cluster. If the cluster is deployed in 2-2-2 mode, the maximum number of resource distribution nodes is 2.
     * @example 2
     *
     * @var int
     */
    public $unitNum;

    /**
     * @description The ID of the vSwitch.
     * This parameter is required.
     * @example vsw-bp11k1aypnzu1l3whi****
     *
     * @var string
     */
    public $userVSwitchId;

    /**
     * @description The ID of the VPC.
     * This parameter is required.
     * @example vpc-bp1d2q3mhg9i23ofi****
     *
     * @var string
     */
    public $userVpcId;

    /**
     * @var string
     */
    public $userVpcOwnerId;
    protected $_name = [
        'charset'          => 'Charset',
        'cpu'              => 'Cpu',
        'createParams'     => 'CreateParams',
        'description'      => 'Description',
        'instanceId'       => 'InstanceId',
        'logDisk'          => 'LogDisk',
        'memory'           => 'Memory',
        'primaryZone'      => 'PrimaryZone',
        'readOnlyZoneList' => 'ReadOnlyZoneList',
        'tenantMode'       => 'TenantMode',
        'tenantName'       => 'TenantName',
        'timeZone'         => 'TimeZone',
        'unitNum'          => 'UnitNum',
        'userVSwitchId'    => 'UserVSwitchId',
        'userVpcId'        => 'UserVpcId',
        'userVpcOwnerId'   => 'UserVpcOwnerId',
    ];

    public function validate()
    {
    }

    public function toMap()
    {
        $res = [];
        if (null !== $this->charset) {
            $res['Charset'] = $this->charset;
        }
        if (null !== $this->cpu) {
            $res['Cpu'] = $this->cpu;
        }
        if (null !== $this->createParams) {
            $res['CreateParams'] = $this->createParams;
        }
        if (null !== $this->description) {
            $res['Description'] = $this->description;
        }
        if (null !== $this->instanceId) {
            $res['InstanceId'] = $this->instanceId;
        }
        if (null !== $this->logDisk) {
            $res['LogDisk'] = $this->logDisk;
        }
        if (null !== $this->memory) {
            $res['Memory'] = $this->memory;
        }
        if (null !== $this->primaryZone) {
            $res['PrimaryZone'] = $this->primaryZone;
        }
        if (null !== $this->readOnlyZoneList) {
            $res['ReadOnlyZoneList'] = $this->readOnlyZoneList;
        }
        if (null !== $this->tenantMode) {
            $res['TenantMode'] = $this->tenantMode;
        }
        if (null !== $this->tenantName) {
            $res['TenantName'] = $this->tenantName;
        }
        if (null !== $this->timeZone) {
            $res['TimeZone'] = $this->timeZone;
        }
        if (null !== $this->unitNum) {
            $res['UnitNum'] = $this->unitNum;
        }
        if (null !== $this->userVSwitchId) {
            $res['UserVSwitchId'] = $this->userVSwitchId;
        }
        if (null !== $this->userVpcId) {
            $res['UserVpcId'] = $this->userVpcId;
        }
        if (null !== $this->userVpcOwnerId) {
            $res['UserVpcOwnerId'] = $this->userVpcOwnerId;
        }

        return $res;
    }

    /**
     * @param array $map
     *
     * @return CreateTenantRequest
     */
    public static function fromMap($map = [])
    {
        $model = new self();
        if (isset($map['Charset'])) {
            $model->charset = $map['Charset'];
        }
        if (isset($map['Cpu'])) {
            $model->cpu = $map['Cpu'];
        }
        if (isset($map['CreateParams'])) {
            $model->createParams = $map['CreateParams'];
        }
        if (isset($map['Description'])) {
            $model->description = $map['Description'];
        }
        if (isset($map['InstanceId'])) {
            $model->instanceId = $map['InstanceId'];
        }
        if (isset($map['LogDisk'])) {
            $model->logDisk = $map['LogDisk'];
        }
        if (isset($map['Memory'])) {
            $model->memory = $map['Memory'];
        }
        if (isset($map['PrimaryZone'])) {
            $model->primaryZone = $map['PrimaryZone'];
        }
        if (isset($map['ReadOnlyZoneList'])) {
            $model->readOnlyZoneList = $map['ReadOnlyZoneList'];
        }
        if (isset($map['TenantMode'])) {
            $model->tenantMode = $map['TenantMode'];
        }
        if (isset($map['TenantName'])) {
            $model->tenantName = $map['TenantName'];
        }
        if (isset($map['TimeZone'])) {
            $model->timeZone = $map['TimeZone'];
        }
        if (isset($map['UnitNum'])) {
            $model->unitNum = $map['UnitNum'];
        }
        if (isset($map['UserVSwitchId'])) {
            $model->userVSwitchId = $map['UserVSwitchId'];
        }
        if (isset($map['UserVpcId'])) {
            $model->userVpcId = $map['UserVpcId'];
        }
        if (isset($map['UserVpcOwnerId'])) {
            $model->userVpcOwnerId = $map['UserVpcOwnerId'];
        }

        return $model;
    }
}
