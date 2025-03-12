<?php

// This file is auto-generated, don't edit it. Thanks.

namespace AlibabaCloud\SDK\OceanBasePro\V20190901\Models\DescribeTenantsResponseBody;

use AlibabaCloud\Tea\Model;

class tenants extends Model
{
    /**
     * @description The character set.
     *
     * @example utf8mb4
     *
     * @var string
     */
    public $charset;

    /**
     * @description The collation.
     *
     * @example utf8mb4_general_ci
     *
     * @var string
     */
    public $collation;

    /**
     * @description The total number of CPU cores of the tenant.
     *
     * @example 10
     *
     * @var int
     */
    public $cpu;

    /**
     * @description The time when the tenant was created.
     *
     * @example 2021-09-17 15:52:17.0
     *
     * @var string
     */
    public $createTime;

    /**
     * @description The data replica distribution mode of the tenant.
     *
     * > <br>N represents the number of nodes in a single zone.
     * @example 1-1-1
     *
     * @var string
     */
    public $deployMode;

    /**
     * @description The deployment type of the tenant. <br>
     * - dual: dual-IDC deployment
     * @example multiple
     *
     * @var string
     */
    public $deployType;

    /**
     * @description The description of the tenant.
     *
     * @example PayCore business database
     *
     * @var string
     */
    public $description;

    /**
     * @description Indicates whether read-only replicas are supported.
     *
     * @example true
     *
     * @var bool
     */
    public $enableReadOnlyReplica;

    /**
     * @description The total memory size of the tenant, in GB.
     *
     * @example 20
     *
     * @var int
     */
    public $mem;

    /**
     * @description The parameter template.
     *
     * @example express_oltp
     *
     * @var string
     */
    public $parameterTemplate;

    /**
     * @description The primary zone of the tenant.
     *
     * @example cn-hangzhou-i
     *
     * @var string
     */
    public $primaryZone;

    /**
     * @description The status of the tenant.  <br>
     * - WHITE_LIST_MODIFYING: The whitelist is being modified.
     * @example ONLINE
     *
     * @var string
     */
    public $status;

    /**
     * @description The ID of the tenant.
     *
     * @example t33h8y08k****
     *
     * @var string
     */
    public $tenantId;

    /**
     * @description The tenant mode.
     * MySQL
     * @example Oracle
     *
     * @var string
     */
    public $tenantMode;

    /**
     * @description The name of the tenant.
     *
     * @example pay_online
     *
     * @var string
     */
    public $tenantName;

    /**
     * @description The number of CPU cores in each resource unit of the tenant.
     *
     * @example 5
     *
     * @var int
     */
    public $unitCpu;

    /**
     * @description The memory size of each resource unit of the tenant, in GB.
     *
     * @example 10
     *
     * @var int
     */
    public $unitMem;

    /**
     * @description The number of resource units in the tenant.
     *
     * @example 2
     *
     * @var int
     */
    public $unitNum;

    /**
     * @description The number of used disks of the tenant.
     *
     * @example 10
     *
     * @var float
     */
    public $usedDiskSize;

    /**
     * @description The ID of the VPC.   <br>If no suitable VPC is available, create a VPC as prompted. For more information, see "What is a VPC".
     *
     * @example vpc-bp1d2q3mhg9i23ofi****
     *
     * @var string
     */
    public $vpcId;
    protected $_name = [
        'charset'               => 'Charset',
        'collation'             => 'Collation',
        'cpu'                   => 'Cpu',
        'createTime'            => 'CreateTime',
        'deployMode'            => 'DeployMode',
        'deployType'            => 'DeployType',
        'description'           => 'Description',
        'enableReadOnlyReplica' => 'EnableReadOnlyReplica',
        'mem'                   => 'Mem',
        'parameterTemplate'     => 'ParameterTemplate',
        'primaryZone'           => 'PrimaryZone',
        'status'                => 'Status',
        'tenantId'              => 'TenantId',
        'tenantMode'            => 'TenantMode',
        'tenantName'            => 'TenantName',
        'unitCpu'               => 'UnitCpu',
        'unitMem'               => 'UnitMem',
        'unitNum'               => 'UnitNum',
        'usedDiskSize'          => 'UsedDiskSize',
        'vpcId'                 => 'VpcId',
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
        if (null !== $this->collation) {
            $res['Collation'] = $this->collation;
        }
        if (null !== $this->cpu) {
            $res['Cpu'] = $this->cpu;
        }
        if (null !== $this->createTime) {
            $res['CreateTime'] = $this->createTime;
        }
        if (null !== $this->deployMode) {
            $res['DeployMode'] = $this->deployMode;
        }
        if (null !== $this->deployType) {
            $res['DeployType'] = $this->deployType;
        }
        if (null !== $this->description) {
            $res['Description'] = $this->description;
        }
        if (null !== $this->enableReadOnlyReplica) {
            $res['EnableReadOnlyReplica'] = $this->enableReadOnlyReplica;
        }
        if (null !== $this->mem) {
            $res['Mem'] = $this->mem;
        }
        if (null !== $this->parameterTemplate) {
            $res['ParameterTemplate'] = $this->parameterTemplate;
        }
        if (null !== $this->primaryZone) {
            $res['PrimaryZone'] = $this->primaryZone;
        }
        if (null !== $this->status) {
            $res['Status'] = $this->status;
        }
        if (null !== $this->tenantId) {
            $res['TenantId'] = $this->tenantId;
        }
        if (null !== $this->tenantMode) {
            $res['TenantMode'] = $this->tenantMode;
        }
        if (null !== $this->tenantName) {
            $res['TenantName'] = $this->tenantName;
        }
        if (null !== $this->unitCpu) {
            $res['UnitCpu'] = $this->unitCpu;
        }
        if (null !== $this->unitMem) {
            $res['UnitMem'] = $this->unitMem;
        }
        if (null !== $this->unitNum) {
            $res['UnitNum'] = $this->unitNum;
        }
        if (null !== $this->usedDiskSize) {
            $res['UsedDiskSize'] = $this->usedDiskSize;
        }
        if (null !== $this->vpcId) {
            $res['VpcId'] = $this->vpcId;
        }

        return $res;
    }

    /**
     * @param array $map
     *
     * @return tenants
     */
    public static function fromMap($map = [])
    {
        $model = new self();
        if (isset($map['Charset'])) {
            $model->charset = $map['Charset'];
        }
        if (isset($map['Collation'])) {
            $model->collation = $map['Collation'];
        }
        if (isset($map['Cpu'])) {
            $model->cpu = $map['Cpu'];
        }
        if (isset($map['CreateTime'])) {
            $model->createTime = $map['CreateTime'];
        }
        if (isset($map['DeployMode'])) {
            $model->deployMode = $map['DeployMode'];
        }
        if (isset($map['DeployType'])) {
            $model->deployType = $map['DeployType'];
        }
        if (isset($map['Description'])) {
            $model->description = $map['Description'];
        }
        if (isset($map['EnableReadOnlyReplica'])) {
            $model->enableReadOnlyReplica = $map['EnableReadOnlyReplica'];
        }
        if (isset($map['Mem'])) {
            $model->mem = $map['Mem'];
        }
        if (isset($map['ParameterTemplate'])) {
            $model->parameterTemplate = $map['ParameterTemplate'];
        }
        if (isset($map['PrimaryZone'])) {
            $model->primaryZone = $map['PrimaryZone'];
        }
        if (isset($map['Status'])) {
            $model->status = $map['Status'];
        }
        if (isset($map['TenantId'])) {
            $model->tenantId = $map['TenantId'];
        }
        if (isset($map['TenantMode'])) {
            $model->tenantMode = $map['TenantMode'];
        }
        if (isset($map['TenantName'])) {
            $model->tenantName = $map['TenantName'];
        }
        if (isset($map['UnitCpu'])) {
            $model->unitCpu = $map['UnitCpu'];
        }
        if (isset($map['UnitMem'])) {
            $model->unitMem = $map['UnitMem'];
        }
        if (isset($map['UnitNum'])) {
            $model->unitNum = $map['UnitNum'];
        }
        if (isset($map['UsedDiskSize'])) {
            $model->usedDiskSize = $map['UsedDiskSize'];
        }
        if (isset($map['VpcId'])) {
            $model->vpcId = $map['VpcId'];
        }

        return $model;
    }
}
