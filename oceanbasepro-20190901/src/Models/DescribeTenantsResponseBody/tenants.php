<?php

// This file is auto-generated, don't edit it. Thanks.

namespace AlibabaCloud\SDK\OceanBasePro\V20190901\Models\DescribeTenantsResponseBody;

use AlibabaCloud\Dara\Model;

class tenants extends Model
{
    /**
     * @var string
     */
    public $charset;

    /**
     * @var string
     */
    public $collation;

    /**
     * @var int
     */
    public $cpu;

    /**
     * @var string
     */
    public $createTime;

    /**
     * @var string
     */
    public $deployMode;

    /**
     * @var string
     */
    public $deployType;

    /**
     * @var string
     */
    public $description;

    /**
     * @var bool
     */
    public $enableReadOnlyReplica;

    /**
     * @var int
     */
    public $mem;

    /**
     * @var string
     */
    public $parameterTemplate;

    /**
     * @var string
     */
    public $primaryZone;

    /**
     * @var string
     */
    public $status;

    /**
     * @var string
     */
    public $tenantId;

    /**
     * @var string
     */
    public $tenantMode;

    /**
     * @var string
     */
    public $tenantName;

    /**
     * @var int
     */
    public $unitCpu;

    /**
     * @var int
     */
    public $unitMem;

    /**
     * @var int
     */
    public $unitNum;

    /**
     * @var float
     */
    public $usedDiskSize;

    /**
     * @var string
     */
    public $vpcId;
    protected $_name = [
        'charset' => 'Charset',
        'collation' => 'Collation',
        'cpu' => 'Cpu',
        'createTime' => 'CreateTime',
        'deployMode' => 'DeployMode',
        'deployType' => 'DeployType',
        'description' => 'Description',
        'enableReadOnlyReplica' => 'EnableReadOnlyReplica',
        'mem' => 'Mem',
        'parameterTemplate' => 'ParameterTemplate',
        'primaryZone' => 'PrimaryZone',
        'status' => 'Status',
        'tenantId' => 'TenantId',
        'tenantMode' => 'TenantMode',
        'tenantName' => 'TenantName',
        'unitCpu' => 'UnitCpu',
        'unitMem' => 'UnitMem',
        'unitNum' => 'UnitNum',
        'usedDiskSize' => 'UsedDiskSize',
        'vpcId' => 'VpcId',
    ];

    public function validate()
    {
        parent::validate();
    }

    public function toArray($noStream = false)
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

    public function toMap($noStream = false)
    {
        return $this->toArray($noStream);
    }

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
