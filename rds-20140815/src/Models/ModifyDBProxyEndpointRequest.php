<?php

// This file is auto-generated, don't edit it. Thanks.

namespace AlibabaCloud\SDK\Rds\V20140815\Models;

use AlibabaCloud\Tea\Model;

class ModifyDBProxyEndpointRequest extends Model
{
    /**
     * @description The features that you want to enable for the proxy endpoint. If you specify more than one feature, separate the features with semicolons (;). Format: `Feature 1:Status;Feature 2:Status;...`. Do not add a semicolon (;) at the end of the last value.
     *
     * Valid feature values:
     *
     *   **ReadWriteSpliting**: read/write splitting
     *   **ConnectionPersist**: connection pooling
     *   **TransactionReadSqlRouteOptimizeStatus**: transaction splitting
     *
     * Valid status values:
     *
     *   **1**: enabled
     *   **0**: disabled
     *
     * > If the instance runs PostgreSQL, you can enable only the read/write splitting feature, which is specified by **ReadWriteSpliting**.
     * @example ReadWriteSpliting:1;ConnectionPersist:0
     *
     * @var string
     */
    public $configDBProxyFeatures;

    /**
     * @description The instance ID. You can call the DescribeDBInstances operation to query the instance ID.
     *
     * @example rm-bp145737x5bi6****
     *
     * @var string
     */
    public $DBInstanceId;

    /**
     * @description The proxy endpoint ID. You can call the DescribeDBProxyEndpoint operation to query the proxy endpoint ID.
     *
     * > *   If the instance runs MySQL and you set **DbEndpointOperator** to **Delete** or **Modify**, you must specify DBProxyEndpointId.
     * > *   If the instance runs PostgreSQL and you set **DbEndpointOperator** to **Delete**, **Modify**, or **Create**, you must specify DBProxyEndpointId.
     * @example gos787jog2wk0y****
     *
     * @var string
     */
    public $DBProxyEndpointId;

    /**
     * @description A reserved parameter. You do not need to specify this parameter.
     *
     * @example normal
     *
     * @var string
     */
    public $DBProxyEngineType;

    /**
     * @description The description of the proxy terminal.
     *
     * @example test-proxy
     *
     * @var string
     */
    public $dbEndpointAliases;

    /**
     * @description The type of operation that you want to perform. Valid values:
     *
     *   **Modify**: Modify a proxy terminal. This is the default value.
     *   **Create**: Create a proxy terminal.
     *   **Delete**: Delete a proxy terminal.
     *
     * @example Modify
     *
     * @var string
     */
    public $dbEndpointOperator;

    /**
     * @description The read and write attributes of the proxy terminal. Valid values:
     *
     *   **ReadWrite**: The proxy terminal connects to the primary instance and can receive both read and write requests.
     *   **ReadOnly**: The proxy terminal does not connect to the primary instance and can receive only read requests. This is the default value.
     *
     * > *   If you set **DbEndpointOperator** to **Create**, you must also specify DbEndpointReadWriteMode.
     * > *   If the instance runs MySQL and you change the value of this parameter from **ReadWrite** to **ReadOnly**, the transaction splitting feature is disabled.
     * @example ReadWrite
     *
     * @var string
     */
    public $dbEndpointReadWriteMode;

    /**
     * @description The type of the proxy terminal. This is a reserved parameter. You do not need to specify this parameter.
     *
     * @example RWSplit
     *
     * @var string
     */
    public $dbEndpointType;

    /**
     * @var int
     */
    public $ownerId;

    /**
     * @description The policy that is used to allocate read weights. Valid values:
     *
     *   **Standard**: The system automatically allocates read weights to the instance and its read-only instances based on the specifications of the instances.
     *   **Custom**: You must manually allocate read weights to the instance and its read-only instances.
     *
     * > You must specify this parameter only when the read/write splitting feature is enabled. For more information about the permission allocation policy, see [Modify the latency threshold and read weights of ApsaraDB RDS for MySQL instances](~~96076~~) and [Enable and configure the database proxy feature for an ApsaraDB RDS for PostgreSQL instance](~~418272~~).
     * @example Standard
     *
     * @var string
     */
    public $readOnlyInstanceDistributionType;

    /**
     * @description The latency threshold that is allowed for read/write splitting. If the latency on a read-only instance exceeds the threshold that you specified, the system no longer forwards read requests to the read-only instance. Unit: seconds If you do not specify this parameter, the original value of this parameter is retained. Valid values: **0** to **3600**. Default value: **30**.
     *
     * > You must specify this parameter only when the read/write splitting feature is enabled.
     * @example 30
     *
     * @var string
     */
    public $readOnlyInstanceMaxDelayTime;

    /**
     * @description The read weights of the instance and its read-only instances. A read weight must be a multiple of 100 and cannot exceed 10000. Formats:
     *
     *   Standard instance: `{"ID of the primary instance":"Weight","ID of the read-only instance":"Weight"...}`
     *
     * Example: `{"rm-uf6wjk5****":"500","rr-tfhfgk5xxx":"200"...}`
     *
     *   Instance on RDS Cluster Edition: `{"ID of the read-only instance":"Weight","DBClusterNode":{"ID of the primary node":"Weight","ID of the secondary node":"Weight","ID of the secondary node":"Weight"...}}`
     *
     * Example: `{"rr-tfhfgk5****":"200","DBClusterNode":{"rn-2z****":"0","rn-2z****":"400","rn-2z****":"400"...}}`
     *
     * > **DBClusterNode** is required if the instance runs RDS Cluster Edition. The DBClusterNode parameter includes information about **IDs** and **weights** of the primary and secondary nodes..
     * @example {"rm-uf6wjk5xxxx":"500","rr-tfhfgk5xxx":"200"...}
     *
     * @var string
     */
    public $readOnlyInstanceWeight;

    /**
     * @description The region ID. You can call the DescribeRegions operation to query the most recent region list.
     *
     * @example cn-hangzhou
     *
     * @var string
     */
    public $regionId;

    /**
     * @var string
     */
    public $resourceOwnerAccount;

    /**
     * @var int
     */
    public $resourceOwnerId;
    protected $_name = [
        'configDBProxyFeatures'            => 'ConfigDBProxyFeatures',
        'DBInstanceId'                     => 'DBInstanceId',
        'DBProxyEndpointId'                => 'DBProxyEndpointId',
        'DBProxyEngineType'                => 'DBProxyEngineType',
        'dbEndpointAliases'                => 'DbEndpointAliases',
        'dbEndpointOperator'               => 'DbEndpointOperator',
        'dbEndpointReadWriteMode'          => 'DbEndpointReadWriteMode',
        'dbEndpointType'                   => 'DbEndpointType',
        'ownerId'                          => 'OwnerId',
        'readOnlyInstanceDistributionType' => 'ReadOnlyInstanceDistributionType',
        'readOnlyInstanceMaxDelayTime'     => 'ReadOnlyInstanceMaxDelayTime',
        'readOnlyInstanceWeight'           => 'ReadOnlyInstanceWeight',
        'regionId'                         => 'RegionId',
        'resourceOwnerAccount'             => 'ResourceOwnerAccount',
        'resourceOwnerId'                  => 'ResourceOwnerId',
    ];

    public function validate()
    {
    }

    public function toMap()
    {
        $res = [];
        if (null !== $this->configDBProxyFeatures) {
            $res['ConfigDBProxyFeatures'] = $this->configDBProxyFeatures;
        }
        if (null !== $this->DBInstanceId) {
            $res['DBInstanceId'] = $this->DBInstanceId;
        }
        if (null !== $this->DBProxyEndpointId) {
            $res['DBProxyEndpointId'] = $this->DBProxyEndpointId;
        }
        if (null !== $this->DBProxyEngineType) {
            $res['DBProxyEngineType'] = $this->DBProxyEngineType;
        }
        if (null !== $this->dbEndpointAliases) {
            $res['DbEndpointAliases'] = $this->dbEndpointAliases;
        }
        if (null !== $this->dbEndpointOperator) {
            $res['DbEndpointOperator'] = $this->dbEndpointOperator;
        }
        if (null !== $this->dbEndpointReadWriteMode) {
            $res['DbEndpointReadWriteMode'] = $this->dbEndpointReadWriteMode;
        }
        if (null !== $this->dbEndpointType) {
            $res['DbEndpointType'] = $this->dbEndpointType;
        }
        if (null !== $this->ownerId) {
            $res['OwnerId'] = $this->ownerId;
        }
        if (null !== $this->readOnlyInstanceDistributionType) {
            $res['ReadOnlyInstanceDistributionType'] = $this->readOnlyInstanceDistributionType;
        }
        if (null !== $this->readOnlyInstanceMaxDelayTime) {
            $res['ReadOnlyInstanceMaxDelayTime'] = $this->readOnlyInstanceMaxDelayTime;
        }
        if (null !== $this->readOnlyInstanceWeight) {
            $res['ReadOnlyInstanceWeight'] = $this->readOnlyInstanceWeight;
        }
        if (null !== $this->regionId) {
            $res['RegionId'] = $this->regionId;
        }
        if (null !== $this->resourceOwnerAccount) {
            $res['ResourceOwnerAccount'] = $this->resourceOwnerAccount;
        }
        if (null !== $this->resourceOwnerId) {
            $res['ResourceOwnerId'] = $this->resourceOwnerId;
        }

        return $res;
    }

    /**
     * @param array $map
     *
     * @return ModifyDBProxyEndpointRequest
     */
    public static function fromMap($map = [])
    {
        $model = new self();
        if (isset($map['ConfigDBProxyFeatures'])) {
            $model->configDBProxyFeatures = $map['ConfigDBProxyFeatures'];
        }
        if (isset($map['DBInstanceId'])) {
            $model->DBInstanceId = $map['DBInstanceId'];
        }
        if (isset($map['DBProxyEndpointId'])) {
            $model->DBProxyEndpointId = $map['DBProxyEndpointId'];
        }
        if (isset($map['DBProxyEngineType'])) {
            $model->DBProxyEngineType = $map['DBProxyEngineType'];
        }
        if (isset($map['DbEndpointAliases'])) {
            $model->dbEndpointAliases = $map['DbEndpointAliases'];
        }
        if (isset($map['DbEndpointOperator'])) {
            $model->dbEndpointOperator = $map['DbEndpointOperator'];
        }
        if (isset($map['DbEndpointReadWriteMode'])) {
            $model->dbEndpointReadWriteMode = $map['DbEndpointReadWriteMode'];
        }
        if (isset($map['DbEndpointType'])) {
            $model->dbEndpointType = $map['DbEndpointType'];
        }
        if (isset($map['OwnerId'])) {
            $model->ownerId = $map['OwnerId'];
        }
        if (isset($map['ReadOnlyInstanceDistributionType'])) {
            $model->readOnlyInstanceDistributionType = $map['ReadOnlyInstanceDistributionType'];
        }
        if (isset($map['ReadOnlyInstanceMaxDelayTime'])) {
            $model->readOnlyInstanceMaxDelayTime = $map['ReadOnlyInstanceMaxDelayTime'];
        }
        if (isset($map['ReadOnlyInstanceWeight'])) {
            $model->readOnlyInstanceWeight = $map['ReadOnlyInstanceWeight'];
        }
        if (isset($map['RegionId'])) {
            $model->regionId = $map['RegionId'];
        }
        if (isset($map['ResourceOwnerAccount'])) {
            $model->resourceOwnerAccount = $map['ResourceOwnerAccount'];
        }
        if (isset($map['ResourceOwnerId'])) {
            $model->resourceOwnerId = $map['ResourceOwnerId'];
        }

        return $model;
    }
}
