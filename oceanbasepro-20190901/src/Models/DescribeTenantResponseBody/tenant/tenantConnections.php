<?php

// This file is auto-generated, don't edit it. Thanks.

namespace AlibabaCloud\SDK\OceanBasePro\V20190901\Models\DescribeTenantResponseBody\tenant;

use AlibabaCloud\Tea\Model;

class tenantConnections extends Model
{
    /**
     * @description The type of the address.
     *
     * - CLOGSERVICE: a clog service address.
     * @example READONLY
     *
     * @var string
     */
    public $addressType;

    /**
     * @description The logical zones of the endpoints.
     *
     * @var string[]
     */
    public $connectionLogicalZones;

    /**
     * @description The type of the replica corresponding to the tenant connection.
     *
     * @example FULL
     *
     * @var string
     */
    public $connectionReplicaType;

    /**
     * @description The list of zones corresponding to the tenant connection.
     *
     * @example ["cn-hangzhou-i", "cn-hangzhou-j"]
     *
     * @var string[]
     */
    public $connectionZones;

    /**
     * @description Specifies whether to enable transaction splitting.
     *
     * @example false
     *
     * @var bool
     */
    public $enableTransactionSplit;

    /**
     * @description The Internet address for accessing the tenant.
     *
     * @example t32a7ru5u****mo.oceanbase.aliyuncs.com
     *
     * @var string
     */
    public $internetAddress;

    /**
     * @description The status of the Internet address for accessing the tenant. Valid values:
     * - ONLINE: The address is in service.
     * @example CLOSED
     *
     * @var string
     */
    public $internetAddressStatus;

    /**
     * @description The upper limit of the maximum number of public connections.
     *
     * @example 4000
     *
     * @var int
     */
    public $internetMaxConnectionLimit;

    /**
     * @description The current value set for the maximum number of public connections.
     *
     * @example 2500
     *
     * @var int
     */
    public $internetMaxConnectionNum;

    /**
     * @description The Internet port for accessing the tenant.
     *
     * @example 3306
     *
     * @var int
     */
    public $internetPort;

    /**
     * @description The port for direct loads of public connections.
     *
     * @example 3307
     *
     * @var int
     */
    public $internetRpcPort;

    /**
     * @description The intranet address for accessing the tenant.
     *
     * @example t4nunwxr0****.oceanbase.aliyuncs.com
     *
     * @var string
     */
    public $intranetAddress;

    /**
     * @description The primary zone corresponding to the address for accessing the tenant.
     *
     * @example cn-hangzhou-b
     *
     * @var string
     */
    public $intranetAddressMasterZoneId;

    /**
     * @description The standby zone corresponding to the address for accessing the tenant.
     *
     * @example cn-hangzhou-g
     *
     * @var string
     */
    public $intranetAddressSlaveZoneId;

    /**
     * @description The status of the intranet address for accessing the tenant.
     * The value ONLINE indicates that the address is in service.
     * @example ONLINE
     *
     * @var string
     */
    public $intranetAddressStatus;

    /**
     * @description The intranet port for accessing the tenant.
     *
     * @example 2983
     *
     * @var int
     */
    public $intranetPort;

    /**
     * @description The port for direct loads of private connections.
     *
     * @example 3307
     *
     * @var int
     */
    public $intranetRpcPort;

    /**
     * @description The port of private SQL connections.
     *
     * @example 3306
     *
     * @var int
     */
    public $intranetSqlPort;

    /**
     * @description The current value set for the maximum number of private connections.
     *
     * @example 1000
     *
     * @var int
     */
    public $maxConnectionLimit;

    /**
     * @description The maximum number of connections.
     *
     * @example 5000
     *
     * @var int
     */
    public $maxConnectionNum;

    /**
     * @description The ODP version.
     *
     * @example 4.3.1-xxxxxxxxx
     *
     * @var string
     */
    public $odpVersion;

    /**
     * @description The degree of parallelism (DOP).
     *
     * @example 1
     *
     * @var int
     */
    public $parallelQueryDegree;

    /**
     * @description The ID of the OceanBase Database Proxy (ODP) cluster.
     *
     * @example proxy-xxxxxxx
     *
     * @var string
     */
    public $proxyClusterId;

    /**
     * @description The ID of the tenant endpoint.
     *
     * @example obe-4tw51gp7****
     *
     * @var string
     */
    public $tenantEndpointId;

    /**
     * @description Specifies whether to enable transaction splitting.
     *
     * @example false
     *
     * @var bool
     */
    public $transactionSplit;

    /**
     * @description The ID of the vSwitch.
     *
     * @example vsw-bp1i7b94u2et716yl****
     *
     * @var string
     */
    public $vSwitchId;

    /**
     * @description The ID of the VPC.
     *
     * @example vpc-bp1qiail1asmfe23t****
     *
     * @var string
     */
    public $vpcId;
    protected $_name = [
        'addressType'                 => 'AddressType',
        'connectionLogicalZones'      => 'ConnectionLogicalZones',
        'connectionReplicaType'       => 'ConnectionReplicaType',
        'connectionZones'             => 'ConnectionZones',
        'enableTransactionSplit'      => 'EnableTransactionSplit',
        'internetAddress'             => 'InternetAddress',
        'internetAddressStatus'       => 'InternetAddressStatus',
        'internetMaxConnectionLimit'  => 'InternetMaxConnectionLimit',
        'internetMaxConnectionNum'    => 'InternetMaxConnectionNum',
        'internetPort'                => 'InternetPort',
        'internetRpcPort'             => 'InternetRpcPort',
        'intranetAddress'             => 'IntranetAddress',
        'intranetAddressMasterZoneId' => 'IntranetAddressMasterZoneId',
        'intranetAddressSlaveZoneId'  => 'IntranetAddressSlaveZoneId',
        'intranetAddressStatus'       => 'IntranetAddressStatus',
        'intranetPort'                => 'IntranetPort',
        'intranetRpcPort'             => 'IntranetRpcPort',
        'intranetSqlPort'             => 'IntranetSqlPort',
        'maxConnectionLimit'          => 'MaxConnectionLimit',
        'maxConnectionNum'            => 'MaxConnectionNum',
        'odpVersion'                  => 'OdpVersion',
        'parallelQueryDegree'         => 'ParallelQueryDegree',
        'proxyClusterId'              => 'ProxyClusterId',
        'tenantEndpointId'            => 'TenantEndpointId',
        'transactionSplit'            => 'TransactionSplit',
        'vSwitchId'                   => 'VSwitchId',
        'vpcId'                       => 'VpcId',
    ];

    public function validate()
    {
    }

    public function toMap()
    {
        $res = [];
        if (null !== $this->addressType) {
            $res['AddressType'] = $this->addressType;
        }
        if (null !== $this->connectionLogicalZones) {
            $res['ConnectionLogicalZones'] = $this->connectionLogicalZones;
        }
        if (null !== $this->connectionReplicaType) {
            $res['ConnectionReplicaType'] = $this->connectionReplicaType;
        }
        if (null !== $this->connectionZones) {
            $res['ConnectionZones'] = $this->connectionZones;
        }
        if (null !== $this->enableTransactionSplit) {
            $res['EnableTransactionSplit'] = $this->enableTransactionSplit;
        }
        if (null !== $this->internetAddress) {
            $res['InternetAddress'] = $this->internetAddress;
        }
        if (null !== $this->internetAddressStatus) {
            $res['InternetAddressStatus'] = $this->internetAddressStatus;
        }
        if (null !== $this->internetMaxConnectionLimit) {
            $res['InternetMaxConnectionLimit'] = $this->internetMaxConnectionLimit;
        }
        if (null !== $this->internetMaxConnectionNum) {
            $res['InternetMaxConnectionNum'] = $this->internetMaxConnectionNum;
        }
        if (null !== $this->internetPort) {
            $res['InternetPort'] = $this->internetPort;
        }
        if (null !== $this->internetRpcPort) {
            $res['InternetRpcPort'] = $this->internetRpcPort;
        }
        if (null !== $this->intranetAddress) {
            $res['IntranetAddress'] = $this->intranetAddress;
        }
        if (null !== $this->intranetAddressMasterZoneId) {
            $res['IntranetAddressMasterZoneId'] = $this->intranetAddressMasterZoneId;
        }
        if (null !== $this->intranetAddressSlaveZoneId) {
            $res['IntranetAddressSlaveZoneId'] = $this->intranetAddressSlaveZoneId;
        }
        if (null !== $this->intranetAddressStatus) {
            $res['IntranetAddressStatus'] = $this->intranetAddressStatus;
        }
        if (null !== $this->intranetPort) {
            $res['IntranetPort'] = $this->intranetPort;
        }
        if (null !== $this->intranetRpcPort) {
            $res['IntranetRpcPort'] = $this->intranetRpcPort;
        }
        if (null !== $this->intranetSqlPort) {
            $res['IntranetSqlPort'] = $this->intranetSqlPort;
        }
        if (null !== $this->maxConnectionLimit) {
            $res['MaxConnectionLimit'] = $this->maxConnectionLimit;
        }
        if (null !== $this->maxConnectionNum) {
            $res['MaxConnectionNum'] = $this->maxConnectionNum;
        }
        if (null !== $this->odpVersion) {
            $res['OdpVersion'] = $this->odpVersion;
        }
        if (null !== $this->parallelQueryDegree) {
            $res['ParallelQueryDegree'] = $this->parallelQueryDegree;
        }
        if (null !== $this->proxyClusterId) {
            $res['ProxyClusterId'] = $this->proxyClusterId;
        }
        if (null !== $this->tenantEndpointId) {
            $res['TenantEndpointId'] = $this->tenantEndpointId;
        }
        if (null !== $this->transactionSplit) {
            $res['TransactionSplit'] = $this->transactionSplit;
        }
        if (null !== $this->vSwitchId) {
            $res['VSwitchId'] = $this->vSwitchId;
        }
        if (null !== $this->vpcId) {
            $res['VpcId'] = $this->vpcId;
        }

        return $res;
    }

    /**
     * @param array $map
     *
     * @return tenantConnections
     */
    public static function fromMap($map = [])
    {
        $model = new self();
        if (isset($map['AddressType'])) {
            $model->addressType = $map['AddressType'];
        }
        if (isset($map['ConnectionLogicalZones'])) {
            if (!empty($map['ConnectionLogicalZones'])) {
                $model->connectionLogicalZones = $map['ConnectionLogicalZones'];
            }
        }
        if (isset($map['ConnectionReplicaType'])) {
            $model->connectionReplicaType = $map['ConnectionReplicaType'];
        }
        if (isset($map['ConnectionZones'])) {
            if (!empty($map['ConnectionZones'])) {
                $model->connectionZones = $map['ConnectionZones'];
            }
        }
        if (isset($map['EnableTransactionSplit'])) {
            $model->enableTransactionSplit = $map['EnableTransactionSplit'];
        }
        if (isset($map['InternetAddress'])) {
            $model->internetAddress = $map['InternetAddress'];
        }
        if (isset($map['InternetAddressStatus'])) {
            $model->internetAddressStatus = $map['InternetAddressStatus'];
        }
        if (isset($map['InternetMaxConnectionLimit'])) {
            $model->internetMaxConnectionLimit = $map['InternetMaxConnectionLimit'];
        }
        if (isset($map['InternetMaxConnectionNum'])) {
            $model->internetMaxConnectionNum = $map['InternetMaxConnectionNum'];
        }
        if (isset($map['InternetPort'])) {
            $model->internetPort = $map['InternetPort'];
        }
        if (isset($map['InternetRpcPort'])) {
            $model->internetRpcPort = $map['InternetRpcPort'];
        }
        if (isset($map['IntranetAddress'])) {
            $model->intranetAddress = $map['IntranetAddress'];
        }
        if (isset($map['IntranetAddressMasterZoneId'])) {
            $model->intranetAddressMasterZoneId = $map['IntranetAddressMasterZoneId'];
        }
        if (isset($map['IntranetAddressSlaveZoneId'])) {
            $model->intranetAddressSlaveZoneId = $map['IntranetAddressSlaveZoneId'];
        }
        if (isset($map['IntranetAddressStatus'])) {
            $model->intranetAddressStatus = $map['IntranetAddressStatus'];
        }
        if (isset($map['IntranetPort'])) {
            $model->intranetPort = $map['IntranetPort'];
        }
        if (isset($map['IntranetRpcPort'])) {
            $model->intranetRpcPort = $map['IntranetRpcPort'];
        }
        if (isset($map['IntranetSqlPort'])) {
            $model->intranetSqlPort = $map['IntranetSqlPort'];
        }
        if (isset($map['MaxConnectionLimit'])) {
            $model->maxConnectionLimit = $map['MaxConnectionLimit'];
        }
        if (isset($map['MaxConnectionNum'])) {
            $model->maxConnectionNum = $map['MaxConnectionNum'];
        }
        if (isset($map['OdpVersion'])) {
            $model->odpVersion = $map['OdpVersion'];
        }
        if (isset($map['ParallelQueryDegree'])) {
            $model->parallelQueryDegree = $map['ParallelQueryDegree'];
        }
        if (isset($map['ProxyClusterId'])) {
            $model->proxyClusterId = $map['ProxyClusterId'];
        }
        if (isset($map['TenantEndpointId'])) {
            $model->tenantEndpointId = $map['TenantEndpointId'];
        }
        if (isset($map['TransactionSplit'])) {
            $model->transactionSplit = $map['TransactionSplit'];
        }
        if (isset($map['VSwitchId'])) {
            $model->vSwitchId = $map['VSwitchId'];
        }
        if (isset($map['VpcId'])) {
            $model->vpcId = $map['VpcId'];
        }

        return $model;
    }
}
