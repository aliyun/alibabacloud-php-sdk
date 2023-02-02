<?php

// This file is auto-generated, don't edit it. Thanks.

namespace AlibabaCloud\SDK\OceanBasePro\V20190901\Models;

use AlibabaCloud\Tea\Model;

class CreateTenantRequest extends Model
{
    /**
     * @description The character set.
     * For more information, see DescribeCharset.
     * @example utf8mb4
     *
     * @var string
     */
    public $charset;

    /**
     * @description The number of CPU cores of the tenant.
     *
     * > <br>The CPU specification of a single tenant cannot exceed that of the corresponding cluster. <br>For example, if the specification of the cluster is 14 CPU cores and 70 GB of memory, the CPU specification of the tenant cannot exceed 14 cores.
     * @example 2
     *
     * @var int
     */
    public $cpu;

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
     * @example ob317v4uif****
     *
     * @var string
     */
    public $instanceId;

    /**
     * @description The memory size of the tenant, in GB.
     *
     * > <br>The memory size of a single tenant cannot exceed that of the corresponding cluster. <br>For example, if the specification of the cluster is 14 CPU cores and 70 GB of memory, the memory size of the tenant cannot exceed 70 GB.
     * @example 10
     *
     * @var int
     */
    public $memory;

    /**
     * @description The primary zone of the tenant.
     * It is one of the zones in which the cluster is deployed.
     * @example cn-hangzhou-h
     *
     * @var string
     */
    public $primaryZone;

    /**
     * @description The tenant mode.
     * For more information, see [DescribeInstanceTenantModes](~~410354~~).
     * @example Oracle
     *
     * @var string
     */
    public $tenantMode;

    /**
     * @description The name of the tenant.
     * It must start with a letter or an underscore (_), and contain 2 to 20 characters, which can be uppercase letters, lowercase letters, digits, and underscores (_).  It cannot be set to sys.
     * @example pay_online
     *
     * @var string
     */
    public $tenantName;

    /**
     * @description The time zone of the tenant. For more information, see [DescribeTimeZones](~~410361~~).
     *
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
     * For more information, see Use a vSwitch.
     * @example vsw-bp11k1aypnzu1l3whi****
     *
     * @var string
     */
    public $userVSwitchId;

    /**
     * @description The ID of the VPC.
     * For more information, see "What is a VPC".
     * @example vpc-bp1d2q3mhg9i23ofi****
     *
     * @var string
     */
    public $userVpcId;
    protected $_name = [
        'charset'       => 'Charset',
        'cpu'           => 'Cpu',
        'description'   => 'Description',
        'instanceId'    => 'InstanceId',
        'memory'        => 'Memory',
        'primaryZone'   => 'PrimaryZone',
        'tenantMode'    => 'TenantMode',
        'tenantName'    => 'TenantName',
        'timeZone'      => 'TimeZone',
        'unitNum'       => 'UnitNum',
        'userVSwitchId' => 'UserVSwitchId',
        'userVpcId'     => 'UserVpcId',
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
        if (null !== $this->description) {
            $res['Description'] = $this->description;
        }
        if (null !== $this->instanceId) {
            $res['InstanceId'] = $this->instanceId;
        }
        if (null !== $this->memory) {
            $res['Memory'] = $this->memory;
        }
        if (null !== $this->primaryZone) {
            $res['PrimaryZone'] = $this->primaryZone;
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
        if (isset($map['Description'])) {
            $model->description = $map['Description'];
        }
        if (isset($map['InstanceId'])) {
            $model->instanceId = $map['InstanceId'];
        }
        if (isset($map['Memory'])) {
            $model->memory = $map['Memory'];
        }
        if (isset($map['PrimaryZone'])) {
            $model->primaryZone = $map['PrimaryZone'];
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

        return $model;
    }
}
