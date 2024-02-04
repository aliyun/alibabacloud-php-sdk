<?php

// This file is auto-generated, don't edit it. Thanks.

namespace AlibabaCloud\SDK\OceanBasePro\V20190901\Models\DescribeTenantsResponseBody;

use AlibabaCloud\Tea\Model;

class tenants extends Model
{
    /**
     * @example utf8mb4
     *
     * @var string
     */
    public $charset;

    /**
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
     * @description The number of CPU cores in each resource unit of the tenant.
     *
     * @example 2021-09-17 15:52:17.0
     *
     * @var string
     */
    public $createTime;

    /**
     * @description The search keyword.
     *
     * @example 1-1-1
     *
     * @var string
     */
    public $deployMode;

    /**
     * @description The name of the tenant.
     * It must start with a letter or an underscore (_), and contain 2 to 20 characters, which can be uppercase letters, lowercase letters, digits, and underscores (_).  It cannot be set to sys.
     * @example multiple
     *
     * @var string
     */
    public $deployType;

    /**
     * @description Example 1
     *
     * @example ```
     * http(s)://[Endpoint]/?Action=DescribeTenants
     * &InstanceId=ob317v4uif****
     * &PageNumber=1
     * &TenantId=ob2mr3oae0****
     * ```
     * @var string
     */
    public $description;

    /**
     * @var bool
     */
    public $enableReadOnlyReplica;

    /**
     * @description The number of the page to return.
     * - Default value: 1
     * @example 20
     *
     * @var int
     */
    public $mem;

    /**
     * @description The return result of the request.
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
     * @description You can call this operation to query the tenants in an OceanBase cluster.
     *
     * @example t33h8y08k****
     *
     * @var string
     */
    public $tenantId;

    /**
     * @description {
     * {
     * "VpcId": "vpc-bp1d2q3mhg9i23ofi****",
     * "TenantMode": "Oracle",
     * "TenantId": "t33h8y08k****",
     * }
     * @example Oracle
     *
     * @var string
     */
    public $tenantMode;

    /**
     * @description The information of tenants.
     *
     * @example pay_online
     *
     * @var string
     */
    public $tenantName;

    /**
     * @example 5
     *
     * @var int
     */
    public $unitCpu;

    /**
     * @example 10
     *
     * @var int
     */
    public $unitMem;

    /**
     * @example 2
     *
     * @var int
     */
    public $unitNum;

    /**
     * @example 10
     *
     * @var float
     */
    public $usedDiskSize;

    /**
     * @description The time when the tenant was created.
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
