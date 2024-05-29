<?php

// This file is auto-generated, don't edit it. Thanks.

namespace AlibabaCloud\SDK\Dts\V20200101\Models;

use AlibabaCloud\Tea\Model;

class CreateDtsInstanceRequest extends Model
{
    /**
     * @description Specifies whether to automatically renew the DTS instance when it expires. Valid values:
     *
     *   **false**: does not automatically renew the DTS instance when it expires. This is the default value.
     *   **true**: automatically renews the DTS instance when it expires.
     *
     * @example false
     *
     * @var bool
     */
    public $autoPay;

    /**
     * @description Specifies whether to automatically start the task after the DTS instance is purchased. Valid values:
     *
     *   **false**: does not automatically start the task after the DTS instance is purchased. This is the default value.
     *   **true**: automatically starts the task after the DTS instance is purchased.
     *
     * @example false
     *
     * @var bool
     */
    public $autoStart;

    /**
     * @description The specifications of the extract, transform, and load (ETL) instance. The unit is compute unit (CU). One CU is equal to 1 vCPU and 4 GB of memory. The value of this parameter must be an integer greater than or equal to 2.
     *
     * @example 5
     *
     * @var int
     */
    public $computeUnit;

    /**
     * @description The number of private custom ApsaraDB RDS instances in a PolarDB-X instance. Default value: **1**.
     *
     * >  You must specify this parameter only if the **SourceEndpointEngineName** parameter is set to **drds**.
     * @example 3
     *
     * @var int
     */
    public $databaseCount;

    /**
     * @description The database engine of the destination instance.
     *
     *   **MySQL**: ApsaraDB RDS for MySQL instance or self-managed MySQL database
     *   **PolarDB**: PolarDB for MySQL cluster
     *   **polardb_o**: PolarDB for Oracle cluster
     *   **polardb_pg**: PolarDB for PostgreSQL cluster
     *   **Redis**: ApsaraDB for Redis instance or self-managed Redis database
     *   **DRDS**: PolarDB-X 1.0 or PolarDB-X 2.0 instance
     *   **PostgreSQL**: self-managed PostgreSQL database
     *   **odps**: MaxCompute project
     *   **oracle**: self-managed Oracle database
     *   **mongodb**: ApsaraDB for MongoDB instance or self-managed MongoDB database
     *   **tidb**: TiDB database
     *   **ADS**: AnalyticDB for MySQL V2.0 cluster
     *   **ADB30**: AnalyticDB for MySQL V3.0 cluster
     *   **Greenplum**: AnalyticDB for PostgreSQL instance
     *   **MSSQL**: ApsaraDB RDS for SQL Server instance or self-managed SQL Server database
     *   **kafka**: Message Queue for Apache Kafka instance or self-managed Kafka cluster
     *   **DataHub**: DataHub project
     *   **DB2**: self-managed Db2 for LUW database
     *   **as400**: AS/400
     *   **Tablestore**: Tablestore instance
     *
     * >
     *   The default value is **MySQL**.
     *   For more information about the supported source and destination databases, see [Overview of data synchronization scenarios](https://help.aliyun.com/document_detail/130744.html) and [Overview of data migration scenarios](https://help.aliyun.com/document_detail/26618.html).
     *   You must specify one of this parameter and the **JobId** parameter.
     *
     * @example MySQL
     *
     * @var string
     */
    public $destinationEndpointEngineName;

    /**
     * @description The ID of the region in which the destination instance resides. For more information, see [List of supported regions](https://help.aliyun.com/document_detail/141033.html).
     *
     * >  You must specify one of this parameter and the **JobId** parameter.
     * @example cn-hangzhou
     *
     * @var string
     */
    public $destinationRegion;

    /**
     * @description The number of DTS units (DUs) that are assigned to a DTS task that is run on a DTS dedicated cluster. Valid values: **1** to **100**.
     *
     * >
     *   The value of this parameter must be within the range of the number of DUs available for the DTS dedicated cluster.
     *
     * @example 30
     *
     * @var int
     */
    public $du;

    /**
     * @description The billing type for a change tracking instance. Valid values: ONLY_CONFIGURATION_FEE and CONFIGURATION_FEE_AND_DATA_FEE. ONLY_CONFIGURATION_FEE: charges only configuration fees. CONFIGURATION_FEE_AND_DATA_FEE: charges configuration fees and data traffic fees.
     *
     * @example ONLY_CONFIGURATION_FEE
     *
     * @var string
     */
    public $feeType;

    /**
     * @description The instance class.
     *
     *   DTS supports the following instance classes for a data migration instance: **xxlarge**, **xlarge**, **large**, **medium**, and **small**.
     *   DTS supports the following instance classes for a data synchronization instance: **large**, **medium**, **small**, and **micro**.
     *
     * >  For more information about the test performance of each instance class, see [Specifications of data migration instances](https://help.aliyun.com/document_detail/26606.html) and [Specifications of data synchronization instances](https://help.aliyun.com/document_detail/26605.html).
     * @example xxlarge
     *
     * @var string
     */
    public $instanceClass;

    /**
     * @description The ID of the task. You can call the **ConfigureDtsJob** operation to obtain the task ID from the **DtsJobId** parameter.
     *
     * >  If this parameter is specified, you do not need to specify the **SourceRegion**, **DestinationRegion**, **Type**, **SourceEndpointEngineName**, or **DestinationEndpointEngineName** parameter. Even if these parameters are specified, the value of the **JobId** parameter takes precedence.
     * @example bi6e22ay243****
     *
     * @var string
     */
    public $jobId;

    /**
     * @var float
     */
    public $maxDu;

    /**
     * @var float
     */
    public $minDu;

    /**
     * @description The billing method. Valid values:
     *
     *   **PrePaid**: subscription
     *   **PostPaid**: pay-as-you-go
     *
     * >  This parameter must be specified.
     * @example PrePaid
     *
     * @var string
     */
    public $payType;

    /**
     * @description The unit of the subscription duration. Valid values: **Year** and **Month**.
     *
     * >  You must specify this parameter only if the **PayType** parameter is set to **PrePaid**.
     * @example Month
     *
     * @var string
     */
    public $period;

    /**
     * @description The number of DTS instances that you want to purchase.
     *
     * >  Only a single instance can be purchased each time.
     * @example 1
     *
     * @var int
     */
    public $quantity;

    /**
     * @description The ID of the region in which the DTS instance resides. For more information, see [List of supported regions](https://help.aliyun.com/document_detail/141033.html).
     *
     * @example cn-hangzhou
     *
     * @var string
     */
    public $regionId;

    /**
     * @description The ID of the resource group.
     *
     * @example rg-acfmzawhxxc****
     *
     * @var string
     */
    public $resourceGroupId;

    /**
     * @description The database engine of the source instance.
     *
     *   **MySQL**: ApsaraDB RDS for MySQL instance or self-managed MySQL database
     *   **PolarDB**: PolarDB for MySQL cluster
     *   **polardb_o**: PolarDB for Oracle cluster
     *   **polardb_pg**: PolarDB for PostgreSQL cluster
     *   **Redis**: ApsaraDB for Redis instance or self-managed Redis database
     *   **DRDS**: PolarDB-X 1.0 or PolarDB-X 2.0 instance
     *   **PostgreSQL**: self-managed PostgreSQL database
     *   **odps**: MaxCompute project
     *   **oracle**: self-managed Oracle database
     *   **mongodb**: ApsaraDB for MongoDB instance or self-managed MongoDB database
     *   **tidb**: TiDB database
     *   **ADS**: AnalyticDB for MySQL V2.0 cluster
     *   **ADB30**: AnalyticDB for MySQL V3.0 cluster
     *   **Greenplum**: AnalyticDB for PostgreSQL instance
     *   **MSSQL**: ApsaraDB RDS for SQL Server instance or self-managed SQL Server database
     *   **kafka**: Message Queue for Apache Kafka instance or self-managed Kafka cluster
     *   **DataHub**: DataHub project
     *   **DB2**: self-managed Db2 for LUW database
     *   **as400**: AS/400
     *   **Tablestore**: Tablestore instance
     *
     * >
     *   The default value is **MySQL**.
     *   For more information about the supported source and destination databases, see [Overview of data synchronization scenarios](https://help.aliyun.com/document_detail/130744.html) and [Overview of data migration scenarios](https://help.aliyun.com/document_detail/26618.html).
     *   You must specify one of this parameter and the **JobId** parameter.
     *
     * @example MYSQL
     *
     * @var string
     */
    public $sourceEndpointEngineName;

    /**
     * @description The ID of the region in which the source instance resides. For more information, see [List of supported regions](https://help.aliyun.com/document_detail/141033.html).
     *
     * >  You must specify one of this parameter and the **JobId** parameter.
     * @example cn-hangzhou
     *
     * @var string
     */
    public $sourceRegion;

    /**
     * @description The synchronization topology. Valid values:
     *
     *   **oneway**: one-way synchronization. This is the default value.
     *   **bidirectional**: two-way synchronization.
     *
     * @example oneway
     *
     * @var string
     */
    public $syncArchitecture;

    /**
     * @description The type of the DTS instance. Valid values:
     *
     *   **MIGRATION**: data migration instance
     *
     *   **SYNC**: data synchronization instance
     *
     *   **SUBSCRIBE**: change tracking instance
     *
     * > You must specify one of this parameter and the **JobId** parameter.
     * @example SYNC
     *
     * @var string
     */
    public $type;

    /**
     * @description The subscription duration.
     *
     *   Valid values if the **Period** parameter is set to **Month**: 1, 2, 3, 4, 5, 6, 7, 8, and 9.
     *
     *   Valid values if the **Period** parameter is set to **Year**: 1, 2, 3, and 5.
     *
     * > *   You must specify this parameter only if the **PayType** parameter is set to **PrePaid**.
     *   You can set the **Period** parameter to specify the unit of the subscription duration.
     *
     * @example 5
     *
     * @var int
     */
    public $usedTime;
    protected $_name = [
        'autoPay'                       => 'AutoPay',
        'autoStart'                     => 'AutoStart',
        'computeUnit'                   => 'ComputeUnit',
        'databaseCount'                 => 'DatabaseCount',
        'destinationEndpointEngineName' => 'DestinationEndpointEngineName',
        'destinationRegion'             => 'DestinationRegion',
        'du'                            => 'Du',
        'feeType'                       => 'FeeType',
        'instanceClass'                 => 'InstanceClass',
        'jobId'                         => 'JobId',
        'maxDu'                         => 'MaxDu',
        'minDu'                         => 'MinDu',
        'payType'                       => 'PayType',
        'period'                        => 'Period',
        'quantity'                      => 'Quantity',
        'regionId'                      => 'RegionId',
        'resourceGroupId'               => 'ResourceGroupId',
        'sourceEndpointEngineName'      => 'SourceEndpointEngineName',
        'sourceRegion'                  => 'SourceRegion',
        'syncArchitecture'              => 'SyncArchitecture',
        'type'                          => 'Type',
        'usedTime'                      => 'UsedTime',
    ];

    public function validate()
    {
    }

    public function toMap()
    {
        $res = [];
        if (null !== $this->autoPay) {
            $res['AutoPay'] = $this->autoPay;
        }
        if (null !== $this->autoStart) {
            $res['AutoStart'] = $this->autoStart;
        }
        if (null !== $this->computeUnit) {
            $res['ComputeUnit'] = $this->computeUnit;
        }
        if (null !== $this->databaseCount) {
            $res['DatabaseCount'] = $this->databaseCount;
        }
        if (null !== $this->destinationEndpointEngineName) {
            $res['DestinationEndpointEngineName'] = $this->destinationEndpointEngineName;
        }
        if (null !== $this->destinationRegion) {
            $res['DestinationRegion'] = $this->destinationRegion;
        }
        if (null !== $this->du) {
            $res['Du'] = $this->du;
        }
        if (null !== $this->feeType) {
            $res['FeeType'] = $this->feeType;
        }
        if (null !== $this->instanceClass) {
            $res['InstanceClass'] = $this->instanceClass;
        }
        if (null !== $this->jobId) {
            $res['JobId'] = $this->jobId;
        }
        if (null !== $this->maxDu) {
            $res['MaxDu'] = $this->maxDu;
        }
        if (null !== $this->minDu) {
            $res['MinDu'] = $this->minDu;
        }
        if (null !== $this->payType) {
            $res['PayType'] = $this->payType;
        }
        if (null !== $this->period) {
            $res['Period'] = $this->period;
        }
        if (null !== $this->quantity) {
            $res['Quantity'] = $this->quantity;
        }
        if (null !== $this->regionId) {
            $res['RegionId'] = $this->regionId;
        }
        if (null !== $this->resourceGroupId) {
            $res['ResourceGroupId'] = $this->resourceGroupId;
        }
        if (null !== $this->sourceEndpointEngineName) {
            $res['SourceEndpointEngineName'] = $this->sourceEndpointEngineName;
        }
        if (null !== $this->sourceRegion) {
            $res['SourceRegion'] = $this->sourceRegion;
        }
        if (null !== $this->syncArchitecture) {
            $res['SyncArchitecture'] = $this->syncArchitecture;
        }
        if (null !== $this->type) {
            $res['Type'] = $this->type;
        }
        if (null !== $this->usedTime) {
            $res['UsedTime'] = $this->usedTime;
        }

        return $res;
    }

    /**
     * @param array $map
     *
     * @return CreateDtsInstanceRequest
     */
    public static function fromMap($map = [])
    {
        $model = new self();
        if (isset($map['AutoPay'])) {
            $model->autoPay = $map['AutoPay'];
        }
        if (isset($map['AutoStart'])) {
            $model->autoStart = $map['AutoStart'];
        }
        if (isset($map['ComputeUnit'])) {
            $model->computeUnit = $map['ComputeUnit'];
        }
        if (isset($map['DatabaseCount'])) {
            $model->databaseCount = $map['DatabaseCount'];
        }
        if (isset($map['DestinationEndpointEngineName'])) {
            $model->destinationEndpointEngineName = $map['DestinationEndpointEngineName'];
        }
        if (isset($map['DestinationRegion'])) {
            $model->destinationRegion = $map['DestinationRegion'];
        }
        if (isset($map['Du'])) {
            $model->du = $map['Du'];
        }
        if (isset($map['FeeType'])) {
            $model->feeType = $map['FeeType'];
        }
        if (isset($map['InstanceClass'])) {
            $model->instanceClass = $map['InstanceClass'];
        }
        if (isset($map['JobId'])) {
            $model->jobId = $map['JobId'];
        }
        if (isset($map['MaxDu'])) {
            $model->maxDu = $map['MaxDu'];
        }
        if (isset($map['MinDu'])) {
            $model->minDu = $map['MinDu'];
        }
        if (isset($map['PayType'])) {
            $model->payType = $map['PayType'];
        }
        if (isset($map['Period'])) {
            $model->period = $map['Period'];
        }
        if (isset($map['Quantity'])) {
            $model->quantity = $map['Quantity'];
        }
        if (isset($map['RegionId'])) {
            $model->regionId = $map['RegionId'];
        }
        if (isset($map['ResourceGroupId'])) {
            $model->resourceGroupId = $map['ResourceGroupId'];
        }
        if (isset($map['SourceEndpointEngineName'])) {
            $model->sourceEndpointEngineName = $map['SourceEndpointEngineName'];
        }
        if (isset($map['SourceRegion'])) {
            $model->sourceRegion = $map['SourceRegion'];
        }
        if (isset($map['SyncArchitecture'])) {
            $model->syncArchitecture = $map['SyncArchitecture'];
        }
        if (isset($map['Type'])) {
            $model->type = $map['Type'];
        }
        if (isset($map['UsedTime'])) {
            $model->usedTime = $map['UsedTime'];
        }

        return $model;
    }
}
