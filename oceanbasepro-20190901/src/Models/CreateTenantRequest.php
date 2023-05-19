<?php

// This file is auto-generated, don't edit it. Thanks.

namespace AlibabaCloud\SDK\OceanBasePro\V20190901\Models;

use AlibabaCloud\Tea\Model;

class CreateTenantRequest extends Model
{
    /**
     * @description The description of the database.
     *
     * @example utf8mb4
     *
     * @var string
     */
    public $charset;

    /**
     * @description The number of resource distribution nodes in the tenant.
     * The number is determined by the deployment mode of the cluster. If the cluster is deployed in 2-2-2 mode, the maximum number of resource distribution nodes is 2.
     * @example 2
     *
     * @var int
     */
    public $cpu;

    /**
     * @description $.parameters[13].schema.example
     *
     * @example this is a test database
     *
     * @var string
     */
    public $description;

    /**
     * @description The ID of the vSwitch.
     * For more information, see Use a vSwitch.
     * @example ob317v4uif****
     *
     * @var string
     */
    public $instanceId;

    /**
     * @description The return result of the request.
     *
     * @example 10
     *
     * @var int
     */
    public $memory;

    /**
     * @description $.parameters[12].schema.enumValueTitles
     *
     * @example cn-hangzhou-h
     *
     * @var string
     */
    public $primaryZone;

    /**
     * @description The ID of the tenant.
     *
     * @example Oracle
     *
     * @var string
     */
    public $tenantMode;

    /**
     * @description Alibaba Cloud CLI
     *
     * @example pay_online
     *
     * @var string
     */
    public $tenantName;

    /**
     * @description The memory size of the tenant, in GB.
     *
     * > <br>The memory size of a single tenant cannot exceed that of the corresponding cluster. <br>For example, if the specification of the cluster is 14 CPU cores and 70 GB of memory, the memory size of the tenant cannot exceed 70 GB.
     * @example Asia/Shanghai
     *
     * @var string
     */
    public $timeZone;

    /**
     * @description $.parameters[11].schema.description
     *
     * @example 2
     *
     * @var int
     */
    public $unitNum;

    /**
     * @description $.parameters[12].schema.description
     *
     * @example vsw-bp11k1aypnzu1l3whi****
     *
     * @var string
     */
    public $userVSwitchId;

    /**
     * @description The time zone of the tenant.  For more information, see [DescribeTimeZones](https://help.aliyun.com/document_detail/410361.html).
     *
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
