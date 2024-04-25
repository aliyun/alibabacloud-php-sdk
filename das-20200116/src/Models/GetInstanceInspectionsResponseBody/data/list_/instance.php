<?php

// This file is auto-generated, don't edit it. Thanks.

namespace AlibabaCloud\SDK\DAS\V20200116\Models\GetInstanceInspectionsResponseBody\data\list_;

use AlibabaCloud\Tea\Model;

class instance extends Model
{
    /**
     * @description The account ID. You can view the ID of the logon account by moving the pointer over the profile in the Alibaba Cloud management console.
     *
     * @example 108398049688****
     *
     * @var string
     */
    public $accountId;

    /**
     * @description The connection mode of the instance. Valid values:
     *
     *   **standard**: standard mode.
     *   **safe**: database proxy mode.
     *
     * @example standard
     *
     * @var string
     */
    public $category;

    /**
     * @description The CPU specification of the instance. For example, if a value of 8 is returned, the instance has eight CPU cores.
     *
     * @example 8
     *
     * @var string
     */
    public $cpu;

    /**
     * @description The database engine. Valid values:
     *
     *   **MySQL**
     *   **Redis**
     *   **PolarDBMySQL**
     *
     * @example MySQL
     *
     * @var string
     */
    public $engine;

    /**
     * @description The version number of the database engine.
     *
     * @example 8.0
     *
     * @var string
     */
    public $engineVersion;

    /**
     * @description The instance name.
     *
     * @example test-01
     *
     * @var string
     */
    public $instanceAlias;

    /**
     * @description The type of the instance on which the database is deployed. Valid values:
     *
     *   **RDS**: an Alibaba Cloud database instance.
     *   **ECS**: an Elastic Compute Service (ECS) instance on which a self-managed database is deployed.
     *   **IDC**: a self-managed database instance that is not deployed on Alibaba Cloud.
     *
     * >  The value IDC indicates that the instance is deployed in a data center.
     * @example RDS
     *
     * @var string
     */
    public $instanceArea;

    /**
     * @description The instance type.
     *
     * @example rds.mysql.s2.xlarge
     *
     * @var string
     */
    public $instanceClass;

    /**
     * @description The instance ID.
     *
     * @example rm-bp10usoc1erj7****
     *
     * @var string
     */
    public $instanceId;

    /**
     * @description The memory capacity of the database that is deployed on the instance. Unit: MB.
     *
     * @example 32768
     *
     * @var int
     */
    public $memory;

    /**
     * @description The network type of the instance.
     *
     * @example VPC
     *
     * @var string
     */
    public $networkType;

    /**
     * @description The ID of the node on the instance.
     *
     * @example rm-bp10usoc1erj7****
     *
     * @var string
     */
    public $nodeId;

    /**
     * @description The region ID of the instance.
     *
     * @example cn-hangzhou
     *
     * @var string
     */
    public $region;

    /**
     * @description The storage space of the instance. Unit: GB.
     *
     * @example 150
     *
     * @var int
     */
    public $storage;

    /**
     * @description The unique identifier of the instance.
     *
     * @example hdm_3063db6792965c080a4bcb6e6304****
     *
     * @var string
     */
    public $uuid;

    /**
     * @description The ID of the virtual private cloud (VPC) in which the instance is deployed.
     *
     * @example vpc-bp1knt7m55z9exoo7****
     *
     * @var string
     */
    public $vpcId;
    protected $_name = [
        'accountId'     => 'AccountId',
        'category'      => 'Category',
        'cpu'           => 'Cpu',
        'engine'        => 'Engine',
        'engineVersion' => 'EngineVersion',
        'instanceAlias' => 'InstanceAlias',
        'instanceArea'  => 'InstanceArea',
        'instanceClass' => 'InstanceClass',
        'instanceId'    => 'InstanceId',
        'memory'        => 'Memory',
        'networkType'   => 'NetworkType',
        'nodeId'        => 'NodeId',
        'region'        => 'Region',
        'storage'       => 'Storage',
        'uuid'          => 'Uuid',
        'vpcId'         => 'VpcId',
    ];

    public function validate()
    {
    }

    public function toMap()
    {
        $res = [];
        if (null !== $this->accountId) {
            $res['AccountId'] = $this->accountId;
        }
        if (null !== $this->category) {
            $res['Category'] = $this->category;
        }
        if (null !== $this->cpu) {
            $res['Cpu'] = $this->cpu;
        }
        if (null !== $this->engine) {
            $res['Engine'] = $this->engine;
        }
        if (null !== $this->engineVersion) {
            $res['EngineVersion'] = $this->engineVersion;
        }
        if (null !== $this->instanceAlias) {
            $res['InstanceAlias'] = $this->instanceAlias;
        }
        if (null !== $this->instanceArea) {
            $res['InstanceArea'] = $this->instanceArea;
        }
        if (null !== $this->instanceClass) {
            $res['InstanceClass'] = $this->instanceClass;
        }
        if (null !== $this->instanceId) {
            $res['InstanceId'] = $this->instanceId;
        }
        if (null !== $this->memory) {
            $res['Memory'] = $this->memory;
        }
        if (null !== $this->networkType) {
            $res['NetworkType'] = $this->networkType;
        }
        if (null !== $this->nodeId) {
            $res['NodeId'] = $this->nodeId;
        }
        if (null !== $this->region) {
            $res['Region'] = $this->region;
        }
        if (null !== $this->storage) {
            $res['Storage'] = $this->storage;
        }
        if (null !== $this->uuid) {
            $res['Uuid'] = $this->uuid;
        }
        if (null !== $this->vpcId) {
            $res['VpcId'] = $this->vpcId;
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
        if (isset($map['AccountId'])) {
            $model->accountId = $map['AccountId'];
        }
        if (isset($map['Category'])) {
            $model->category = $map['Category'];
        }
        if (isset($map['Cpu'])) {
            $model->cpu = $map['Cpu'];
        }
        if (isset($map['Engine'])) {
            $model->engine = $map['Engine'];
        }
        if (isset($map['EngineVersion'])) {
            $model->engineVersion = $map['EngineVersion'];
        }
        if (isset($map['InstanceAlias'])) {
            $model->instanceAlias = $map['InstanceAlias'];
        }
        if (isset($map['InstanceArea'])) {
            $model->instanceArea = $map['InstanceArea'];
        }
        if (isset($map['InstanceClass'])) {
            $model->instanceClass = $map['InstanceClass'];
        }
        if (isset($map['InstanceId'])) {
            $model->instanceId = $map['InstanceId'];
        }
        if (isset($map['Memory'])) {
            $model->memory = $map['Memory'];
        }
        if (isset($map['NetworkType'])) {
            $model->networkType = $map['NetworkType'];
        }
        if (isset($map['NodeId'])) {
            $model->nodeId = $map['NodeId'];
        }
        if (isset($map['Region'])) {
            $model->region = $map['Region'];
        }
        if (isset($map['Storage'])) {
            $model->storage = $map['Storage'];
        }
        if (isset($map['Uuid'])) {
            $model->uuid = $map['Uuid'];
        }
        if (isset($map['VpcId'])) {
            $model->vpcId = $map['VpcId'];
        }

        return $model;
    }
}
