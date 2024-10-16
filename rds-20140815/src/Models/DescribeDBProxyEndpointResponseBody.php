<?php

// This file is auto-generated, don't edit it. Thanks.

namespace AlibabaCloud\SDK\Rds\V20140815\Models;

use AlibabaCloud\SDK\Rds\V20140815\Models\DescribeDBProxyEndpointResponseBody\DBProxyNodes;
use AlibabaCloud\SDK\Rds\V20140815\Models\DescribeDBProxyEndpointResponseBody\endpointConnectItems;
use AlibabaCloud\Tea\Model;

class DescribeDBProxyEndpointResponseBody extends Model
{
    /**
     * @description The proxy endpoint queried.
     *
     * @example testproxy****.rwlb.rds.aliyuncs.com
     *
     * @var string
     */
    public $DBProxyConnectString;

    /**
     * @description The network type of the proxy endpoint. Valid values:
     *
     *   **InnerString**: internal network
     *   **OuterString**: Internet
     *
     * @example InnerString
     *
     * @var string
     */
    public $DBProxyConnectStringNetType;

    /**
     * @description The port number that is associated with the proxy endpoint.
     *
     * @example 3306
     *
     * @var string
     */
    public $DBProxyConnectStringPort;

    /**
     * @description The ID of the proxy endpoint.
     *
     * @example keaxncrjluwu0gue****
     *
     * @var string
     */
    public $DBProxyEndpointId;

    /**
     * @description An internal parameter. You can ignore this parameter.
     *
     * @example normal
     *
     * @var string
     */
    public $DBProxyEngineType;

    /**
     * @description The configuration of the proxy terminal. The value of this parameter is a JSON string that consists of the following fields:
     *
     *   **TransactionReadSqlRouteOptimizeStatus**: the status of the transaction splitting feature. Valid values: **0** and **1**. The value 0 indicates that the feature is disabled. The value 1 indicates that the feature is enabled.
     *   **ConnectionPersist**: the status of the connection pooling feature. Valid values: **0**, **1**, and **2**. The value 0 indicates that the connection pooling feature is disabled. The value 1 indicates that the session connection pooling feature is enabled. The value 2 indicates that the transaction connection pooling feature is enabled.
     *   **ReadWriteSpliting**: the status of the read/write splitting feature. Valid values: **0** and **1**. The value 0 indicates that the feature is disabled. The value 1 indicates that the feature is enabled.
     *   **PinPreparedStmt**: an internal field that is available only for ApsaraDB RDS for PostgreSQL instances.
     *
     * >  If the instance runs PostgreSQL, you can change only the value of the **ReadWriteSpliting** field. The **TransactionReadSqlRouteOptimizeStatus** and **PinPreparedStmt** fields are set to their default values 1.
     * @example TransactionReadSqlRouteOptimizeStatus:1;ConnectionPersist:0;ReadWriteSpliting:1
     *
     * @var string
     */
    public $DBProxyFeatures;

    /**
     * @var DBProxyNodes
     */
    public $DBProxyNodes;

    /**
     * @description The description of the proxy terminal.
     *
     * @example proxyterminal-test
     *
     * @var string
     */
    public $dbProxyEndpointAliases;

    /**
     * @description The read and write attributes of the proxy terminal. Valid values:
     *
     *   **ReadWrite**: The proxy terminal supports read and write requests.
     *   **ReadOnly**: The proxy terminal supports only read requests.
     *
     * @example ReadWrite
     *
     * @var string
     */
    public $dbProxyEndpointReadWriteMode;

    /**
     * @var string
     */
    public $dbProxyEndpointVswitchId;

    /**
     * @var string
     */
    public $dbProxyEndpointZoneId;

    /**
     * @description An array that consists of the information about the proxy endpoint.
     *
     * @var endpointConnectItems
     */
    public $endpointConnectItems;

    /**
     * @description The method that is used to assign read weights. For more information, see [Modify the latency threshold and read weights of ApsaraDB RDS for MySQL instances](https://help.aliyun.com/document_detail/96076.html). Valid values:
     *
     *   **Standard**: The system automatically assigns read weights to the instance and its read-only instances based on the specifications of these instances.
     *   **Custom**: You must manually assign read weights to the instance and its read-only instances.
     *
     * @example Standard
     *
     * @var string
     */
    public $readOnlyInstanceDistributionType;

    /**
     * @description The latency threshold that is allowed for read/write splitting. If the latency on a read-only instance exceeds the specified threshold, ApsaraDB RDS no longer forwards read requests to the read-only instance.
     *
     * @example 30
     *
     * @var string
     */
    public $readOnlyInstanceMaxDelayTime;

    /**
     * @description The read weights of the instance and its read-only instances. The value of this parameter is a JSON string that consists of the following parameters:
     *
     *   **DBInstanceId**: the ID of the instance.
     *   **DBInstanceType**: the role of the instance. Valid values: **Master** and **ReadOnly**.
     *   **NodeID**: The IDs of the primary and secondary nodes of the cluster. An instance that runs RDS Cluster Edition refers to a cluster.
     *   **NodeType**: The node type. Valid values: **Primary** and **Secondary**.
     *   **Weight**: the read weight of the instance. The read weight increases in increments of **100** and cannot exceed **10000**.
     *
     * @example [{\\"Availability\\":\\"Available\\",\\"DBInstanceId\\":\\"rr-bp176984qewd8****\\",\\"DBInstanceType\\":\\"ReadOnly\\",\\"Weight\\":400},{\\"Availability\\":\\"Available\\",\\"DBInstanceId\\":\\"rm-bp1ja4f56s7us****\\",\\"DBInstanceType\\":\\"Master\\",\\"Weight\\":0}]
     *
     * @var string
     */
    public $readOnlyInstanceWeight;

    /**
     * @description The request ID.
     *
     * @example 847BA085-B377-4BFA-8267-F82345ECE1D2
     *
     * @var string
     */
    public $requestId;
    protected $_name = [
        'DBProxyConnectString'             => 'DBProxyConnectString',
        'DBProxyConnectStringNetType'      => 'DBProxyConnectStringNetType',
        'DBProxyConnectStringPort'         => 'DBProxyConnectStringPort',
        'DBProxyEndpointId'                => 'DBProxyEndpointId',
        'DBProxyEngineType'                => 'DBProxyEngineType',
        'DBProxyFeatures'                  => 'DBProxyFeatures',
        'DBProxyNodes'                     => 'DBProxyNodes',
        'dbProxyEndpointAliases'           => 'DbProxyEndpointAliases',
        'dbProxyEndpointReadWriteMode'     => 'DbProxyEndpointReadWriteMode',
        'dbProxyEndpointVswitchId'         => 'DbProxyEndpointVswitchId',
        'dbProxyEndpointZoneId'            => 'DbProxyEndpointZoneId',
        'endpointConnectItems'             => 'EndpointConnectItems',
        'readOnlyInstanceDistributionType' => 'ReadOnlyInstanceDistributionType',
        'readOnlyInstanceMaxDelayTime'     => 'ReadOnlyInstanceMaxDelayTime',
        'readOnlyInstanceWeight'           => 'ReadOnlyInstanceWeight',
        'requestId'                        => 'RequestId',
    ];

    public function validate()
    {
    }

    public function toMap()
    {
        $res = [];
        if (null !== $this->DBProxyConnectString) {
            $res['DBProxyConnectString'] = $this->DBProxyConnectString;
        }
        if (null !== $this->DBProxyConnectStringNetType) {
            $res['DBProxyConnectStringNetType'] = $this->DBProxyConnectStringNetType;
        }
        if (null !== $this->DBProxyConnectStringPort) {
            $res['DBProxyConnectStringPort'] = $this->DBProxyConnectStringPort;
        }
        if (null !== $this->DBProxyEndpointId) {
            $res['DBProxyEndpointId'] = $this->DBProxyEndpointId;
        }
        if (null !== $this->DBProxyEngineType) {
            $res['DBProxyEngineType'] = $this->DBProxyEngineType;
        }
        if (null !== $this->DBProxyFeatures) {
            $res['DBProxyFeatures'] = $this->DBProxyFeatures;
        }
        if (null !== $this->DBProxyNodes) {
            $res['DBProxyNodes'] = null !== $this->DBProxyNodes ? $this->DBProxyNodes->toMap() : null;
        }
        if (null !== $this->dbProxyEndpointAliases) {
            $res['DbProxyEndpointAliases'] = $this->dbProxyEndpointAliases;
        }
        if (null !== $this->dbProxyEndpointReadWriteMode) {
            $res['DbProxyEndpointReadWriteMode'] = $this->dbProxyEndpointReadWriteMode;
        }
        if (null !== $this->dbProxyEndpointVswitchId) {
            $res['DbProxyEndpointVswitchId'] = $this->dbProxyEndpointVswitchId;
        }
        if (null !== $this->dbProxyEndpointZoneId) {
            $res['DbProxyEndpointZoneId'] = $this->dbProxyEndpointZoneId;
        }
        if (null !== $this->endpointConnectItems) {
            $res['EndpointConnectItems'] = null !== $this->endpointConnectItems ? $this->endpointConnectItems->toMap() : null;
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
        if (null !== $this->requestId) {
            $res['RequestId'] = $this->requestId;
        }

        return $res;
    }

    /**
     * @param array $map
     *
     * @return DescribeDBProxyEndpointResponseBody
     */
    public static function fromMap($map = [])
    {
        $model = new self();
        if (isset($map['DBProxyConnectString'])) {
            $model->DBProxyConnectString = $map['DBProxyConnectString'];
        }
        if (isset($map['DBProxyConnectStringNetType'])) {
            $model->DBProxyConnectStringNetType = $map['DBProxyConnectStringNetType'];
        }
        if (isset($map['DBProxyConnectStringPort'])) {
            $model->DBProxyConnectStringPort = $map['DBProxyConnectStringPort'];
        }
        if (isset($map['DBProxyEndpointId'])) {
            $model->DBProxyEndpointId = $map['DBProxyEndpointId'];
        }
        if (isset($map['DBProxyEngineType'])) {
            $model->DBProxyEngineType = $map['DBProxyEngineType'];
        }
        if (isset($map['DBProxyFeatures'])) {
            $model->DBProxyFeatures = $map['DBProxyFeatures'];
        }
        if (isset($map['DBProxyNodes'])) {
            $model->DBProxyNodes = DBProxyNodes::fromMap($map['DBProxyNodes']);
        }
        if (isset($map['DbProxyEndpointAliases'])) {
            $model->dbProxyEndpointAliases = $map['DbProxyEndpointAliases'];
        }
        if (isset($map['DbProxyEndpointReadWriteMode'])) {
            $model->dbProxyEndpointReadWriteMode = $map['DbProxyEndpointReadWriteMode'];
        }
        if (isset($map['DbProxyEndpointVswitchId'])) {
            $model->dbProxyEndpointVswitchId = $map['DbProxyEndpointVswitchId'];
        }
        if (isset($map['DbProxyEndpointZoneId'])) {
            $model->dbProxyEndpointZoneId = $map['DbProxyEndpointZoneId'];
        }
        if (isset($map['EndpointConnectItems'])) {
            $model->endpointConnectItems = endpointConnectItems::fromMap($map['EndpointConnectItems']);
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
        if (isset($map['RequestId'])) {
            $model->requestId = $map['RequestId'];
        }

        return $model;
    }
}
