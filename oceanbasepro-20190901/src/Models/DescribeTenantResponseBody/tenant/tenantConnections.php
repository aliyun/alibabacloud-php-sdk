<?php

// This file is auto-generated, don't edit it. Thanks.

namespace AlibabaCloud\SDK\OceanBasePro\V20190901\Models\DescribeTenantResponseBody\tenant;

use AlibabaCloud\Dara\Model;

class tenantConnections extends Model
{
    /**
     * @var string
     */
    public $addressType;

    /**
     * @var string[]
     */
    public $connectionLogicalZones;

    /**
     * @var string
     */
    public $connectionReplicaType;

    /**
     * @var string[]
     */
    public $connectionZones;

    /**
     * @var bool
     */
    public $enableTransactionSplit;

    /**
     * @var string
     */
    public $internetAddress;

    /**
     * @var string
     */
    public $internetAddressStatus;

    /**
     * @var int
     */
    public $internetMaxConnectionLimit;

    /**
     * @var int
     */
    public $internetMaxConnectionNum;

    /**
     * @var int
     */
    public $internetPort;

    /**
     * @var int
     */
    public $internetRpcPort;

    /**
     * @var int
     */
    public $internetSqlPort;

    /**
     * @var string
     */
    public $intranetAddress;

    /**
     * @var string
     */
    public $intranetAddressMasterZoneId;

    /**
     * @var string
     */
    public $intranetAddressSlaveZoneId;

    /**
     * @var string
     */
    public $intranetAddressStatus;

    /**
     * @var int
     */
    public $intranetPort;

    /**
     * @var int
     */
    public $intranetRpcPort;

    /**
     * @var int
     */
    public $intranetSqlPort;

    /**
     * @var int
     */
    public $maxConnectionLimit;

    /**
     * @var int
     */
    public $maxConnectionNum;

    /**
     * @var string
     */
    public $odpVersion;

    /**
     * @var int
     */
    public $parallelQueryDegree;

    /**
     * @var string
     */
    public $proxyClusterId;

    /**
     * @var string
     */
    public $tenantEndpointId;

    /**
     * @var bool
     */
    public $transactionSplit;

    /**
     * @var string
     */
    public $vSwitchId;

    /**
     * @var string
     */
    public $vpcId;
    protected $_name = [
        'addressType' => 'AddressType',
        'connectionLogicalZones' => 'ConnectionLogicalZones',
        'connectionReplicaType' => 'ConnectionReplicaType',
        'connectionZones' => 'ConnectionZones',
        'enableTransactionSplit' => 'EnableTransactionSplit',
        'internetAddress' => 'InternetAddress',
        'internetAddressStatus' => 'InternetAddressStatus',
        'internetMaxConnectionLimit' => 'InternetMaxConnectionLimit',
        'internetMaxConnectionNum' => 'InternetMaxConnectionNum',
        'internetPort' => 'InternetPort',
        'internetRpcPort' => 'InternetRpcPort',
        'internetSqlPort' => 'InternetSqlPort',
        'intranetAddress' => 'IntranetAddress',
        'intranetAddressMasterZoneId' => 'IntranetAddressMasterZoneId',
        'intranetAddressSlaveZoneId' => 'IntranetAddressSlaveZoneId',
        'intranetAddressStatus' => 'IntranetAddressStatus',
        'intranetPort' => 'IntranetPort',
        'intranetRpcPort' => 'IntranetRpcPort',
        'intranetSqlPort' => 'IntranetSqlPort',
        'maxConnectionLimit' => 'MaxConnectionLimit',
        'maxConnectionNum' => 'MaxConnectionNum',
        'odpVersion' => 'OdpVersion',
        'parallelQueryDegree' => 'ParallelQueryDegree',
        'proxyClusterId' => 'ProxyClusterId',
        'tenantEndpointId' => 'TenantEndpointId',
        'transactionSplit' => 'TransactionSplit',
        'vSwitchId' => 'VSwitchId',
        'vpcId' => 'VpcId',
    ];

    public function validate()
    {
        if (\is_array($this->connectionLogicalZones)) {
            Model::validateArray($this->connectionLogicalZones);
        }
        if (\is_array($this->connectionZones)) {
            Model::validateArray($this->connectionZones);
        }
        parent::validate();
    }

    public function toArray($noStream = false)
    {
        $res = [];
        if (null !== $this->addressType) {
            $res['AddressType'] = $this->addressType;
        }

        if (null !== $this->connectionLogicalZones) {
            if (\is_array($this->connectionLogicalZones)) {
                $res['ConnectionLogicalZones'] = [];
                $n1 = 0;
                foreach ($this->connectionLogicalZones as $item1) {
                    $res['ConnectionLogicalZones'][$n1++] = $item1;
                }
            }
        }

        if (null !== $this->connectionReplicaType) {
            $res['ConnectionReplicaType'] = $this->connectionReplicaType;
        }

        if (null !== $this->connectionZones) {
            if (\is_array($this->connectionZones)) {
                $res['ConnectionZones'] = [];
                $n1 = 0;
                foreach ($this->connectionZones as $item1) {
                    $res['ConnectionZones'][$n1++] = $item1;
                }
            }
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

        if (null !== $this->internetSqlPort) {
            $res['InternetSqlPort'] = $this->internetSqlPort;
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

    public function toMap($noStream = false)
    {
        return $this->toArray($noStream);
    }

    public static function fromMap($map = [])
    {
        $model = new self();
        if (isset($map['AddressType'])) {
            $model->addressType = $map['AddressType'];
        }

        if (isset($map['ConnectionLogicalZones'])) {
            if (!empty($map['ConnectionLogicalZones'])) {
                $model->connectionLogicalZones = [];
                $n1 = 0;
                foreach ($map['ConnectionLogicalZones'] as $item1) {
                    $model->connectionLogicalZones[$n1++] = $item1;
                }
            }
        }

        if (isset($map['ConnectionReplicaType'])) {
            $model->connectionReplicaType = $map['ConnectionReplicaType'];
        }

        if (isset($map['ConnectionZones'])) {
            if (!empty($map['ConnectionZones'])) {
                $model->connectionZones = [];
                $n1 = 0;
                foreach ($map['ConnectionZones'] as $item1) {
                    $model->connectionZones[$n1++] = $item1;
                }
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

        if (isset($map['InternetSqlPort'])) {
            $model->internetSqlPort = $map['InternetSqlPort'];
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
