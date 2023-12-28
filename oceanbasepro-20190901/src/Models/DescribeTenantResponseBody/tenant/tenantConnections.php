<?php

// This file is auto-generated, don't edit it. Thanks.

namespace AlibabaCloud\SDK\OceanBasePro\V20190901\Models\DescribeTenantResponseBody\tenant;

use AlibabaCloud\Tea\Model;

class tenantConnections extends Model
{
    /**
     * @description The primary zone of the tenant.
     *
     * @example MASTER
     *
     * @var string
     */
    public $addressType;

    /**
     * @var string
     */
    public $connectionReplicaType;

    /**
     * @description The Internet address for accessing the tenant.
     *
     * @example ["cn-hangzhou-i", "cn-hangzhou-j"]
     *
     * @var string[]
     */
    public $connectionZones;

    /**
     * @var bool
     */
    public $enableTransactionSplit;

    /**
     * @description The ID of the VPC.
     *
     * @example t32a7ru5u****mo.oceanbase.aliyuncs.com
     *
     * @var string
     */
    public $internetAddress;

    /**
     * @description 实例系列
     *
     * @example CLOSED
     *
     * @var string
     */
    public $internetAddressStatus;

    /**
     * @description 实例类型
     *
     * @example 3306
     *
     * @var int
     */
    public $internetPort;

    /**
     * @description The deployment type of the cluster. Valid values:
     * - dual: dual-IDC deployment
     * @example t32a7ru5u****.oceanbase.aliyuncs.com
     *
     * @var string
     */
    public $intranetAddress;

    /**
     * @description PayCore business database
     *
     * @example cn-hangzhou-i
     *
     * @var string
     */
    public $intranetAddressMasterZoneId;

    /**
     * @description The total number of CPU cores of the tenant.
     *
     * @example cn-hangzhou-j
     *
     * @var string
     */
    public $intranetAddressSlaveZoneId;

    /**
     * @description 付费类型
     *
     * @example ONLINE
     *
     * @var string
     */
    public $intranetAddressStatus;

    /**
     * @description The ID of the tenant.
     *
     * @example 3306
     *
     * @var int
     */
    public $intranetPort;

    /**
     * @example 5000
     *
     * @var int
     */
    public $maxConnectionNum;

    /**
     * @var int
     */
    public $parallelQueryDegree;

    /**
     * @example obe-4tw51gp7****
     *
     * @var string
     */
    public $tenantEndpointId;

    /**
     * @description The primary zone corresponding to the address for accessing the tenant.
     *
     * @example true
     *
     * @var bool
     */
    public $transactionSplit;

    /**
     * @description The connection access information of the tenant.
     *
     * @example vsw-bp11k1aypnzu1l3whi****
     *
     * @var string
     */
    public $vSwitchId;

    /**
     * @description The service mode of the connection address. Valid values:
     * Clog: provides transaction log services.
     * @example vpc-bp1qiail1asmfe23t****
     *
     * @var string
     */
    public $vpcId;
    protected $_name = [
        'addressType'                 => 'AddressType',
        'connectionReplicaType'       => 'ConnectionReplicaType',
        'connectionZones'             => 'ConnectionZones',
        'enableTransactionSplit'      => 'EnableTransactionSplit',
        'internetAddress'             => 'InternetAddress',
        'internetAddressStatus'       => 'InternetAddressStatus',
        'internetPort'                => 'InternetPort',
        'intranetAddress'             => 'IntranetAddress',
        'intranetAddressMasterZoneId' => 'IntranetAddressMasterZoneId',
        'intranetAddressSlaveZoneId'  => 'IntranetAddressSlaveZoneId',
        'intranetAddressStatus'       => 'IntranetAddressStatus',
        'intranetPort'                => 'IntranetPort',
        'maxConnectionNum'            => 'MaxConnectionNum',
        'parallelQueryDegree'         => 'ParallelQueryDegree',
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
        if (null !== $this->internetPort) {
            $res['InternetPort'] = $this->internetPort;
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
        if (null !== $this->maxConnectionNum) {
            $res['MaxConnectionNum'] = $this->maxConnectionNum;
        }
        if (null !== $this->parallelQueryDegree) {
            $res['ParallelQueryDegree'] = $this->parallelQueryDegree;
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
        if (isset($map['InternetPort'])) {
            $model->internetPort = $map['InternetPort'];
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
        if (isset($map['MaxConnectionNum'])) {
            $model->maxConnectionNum = $map['MaxConnectionNum'];
        }
        if (isset($map['ParallelQueryDegree'])) {
            $model->parallelQueryDegree = $map['ParallelQueryDegree'];
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
