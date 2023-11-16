<?php

// This file is auto-generated, don't edit it. Thanks.

namespace AlibabaCloud\SDK\Polardb\V20170801\Models;

use AlibabaCloud\SDK\Polardb\V20170801\Models\CreateDBClusterRequest\tag;
use AlibabaCloud\Tea\Model;

class CreateDBClusterRequest extends Model
{
    /**
     * @description Specifies whether to enable the no-activity suspension feature. Default value: false. Valid values:
     *
     *   **true**
     *   **false**
     *
     * > This parameter is valid only for serverless clusters.
     * @example true
     *
     * @var string
     */
    public $allowShutDown;

    /**
     * @var string
     */
    public $architecture;

    /**
     * @description Specifies whether to enable automatic renewal. Valid values:
     *
     *   **true**
     *   **false**
     *
     * Default value: **false**.
     *
     * > This parameter is valid only when the **PayType** parameter is set to **Prepaid**.
     * @example true
     *
     * @var bool
     */
    public $autoRenew;

    /**
     * @description The retention policy for the backup sets when you delete the cluster. Valid values:
     *
     *   **ALL**: permanently retains all backups.
     *   **LATEST**: permanently retains the last backup. A backup is automatically created before you delete the cluster.
     *   **NONE**: No backup sets are retained after the cluster is deleted.
     *
     * The default value is **NONE** after you create a cluster.
     *
     * >
     *
     *   This parameter is valid only when the **DBType** parameter is set to **MySQL**.
     *
     *   This parameter is invalid for serverless clusters.
     *
     * @example NONE
     *
     * @var string
     */
    public $backupRetentionPolicyOnClusterDeletion;

    /**
     * @description The client token that is used to ensure the idempotence of the request. You can use the client to generate the value, but you must make sure that it is unique among different requests. The token can only contain ASCII characters and cannot exceed 64 characters in length. The token is case-sensitive.
     *
     * @example 6000170000591aed949d0f5********************
     *
     * @var string
     */
    public $clientToken;

    /**
     * @description The point in time when you want to clone data. Valid values:
     *
     *   **LATEST**: The data of the latest point in time is cloned.
     *   **BackupID**: You can specify the ID of a backup set. In this case, data is cloned based on the specified backup set.
     *   **Timestamp**: You can specify a point in time in the past in the `YYYY-MM-DDThh:mm:ssZ` format. The time must be in UTC.
     *
     * Default value: **LATEST**.
     *
     * > If the **CreationOption** parameter is set to **CloneFromRDS**, the value of this parameter must be **LATEST**.
     * @example LATEST
     *
     * @var string
     */
    public $cloneDataPoint;

    /**
     * @description The network type of the cluster. Only virtual private clouds (VPCs) are supported. Set the value to **VPC**.
     *
     * @example VPC
     *
     * @var string
     */
    public $clusterNetworkType;

    /**
     * @description The edition of the cluster. Default value: Normal. Valid values:
     *
     *   **Normal**: Cluster Edition
     *   **Basic**: Single Node Edition
     *   **ArchiveNormal**: X-Engine Edition
     *   **NormalMultimaster**: Multi-master Cluster Edition
     *
     * >
     *
     *   Only when the **DBType** parameter is set to **MySQL** and **the DBVersion** parameter is set to **5.6**, **5.7**, or **8.0**, you can set this parameter to **Basic**.
     *
     *   Only when the **DBType** parameter is set to **MySQL** and the **DBVersion** parameter is set to **8.0**, you can set this parameter to **ArchiveNormal** or **NormalMultimaster**.
     *
     * For more information, see [Product editions](~~183258~~).
     * @example Normal
     *
     * @var string
     */
    public $creationCategory;

    /**
     * @description The method that is used to create a cluster. Valid values:
     *
     *   **Normal**: creates a PolarDB cluster. For more information about how to perform this operation in the console, see the following topics:
     *
     *   [Create a PolarDB for MySQL cluster](~~58769~~)
     *   [Create a PolarDB for PostgreSQL cluster](~~118063~~)
     *   [Create a PolarDB for Oracle cluster](~~118182~~)
     *
     *   **CloneFromPolarDB**: clones data from an existing PolarDB cluster to a new PolarDB cluster. For more information about how to perform this operation in the console, see the following topics:
     *
     *   [Clone a PolarDB for MySQL cluster](~~87966~~)
     *   [Clone a PolarDB for PostgreSQL cluster](~~118108~~)
     *   [Clone a PolarDB for Oracle cluster](~~118221~~)
     *
     *   **CloneFromRDS**: clones data from an existing ApsaraDB RDS for MySQL instance to a new PolarDB for MySQL cluster. For more information about how to perform this operation in the console, see [Create a PolarDB for MySQL cluster by cloning an ApsaraDB RDS for MySQL instance](~~121812~~).
     *
     *   **MigrationFromRDS**: migrates data from an existing ApsaraDB RDS for MySQL instance to a new PolarDB for MySQL cluster. By default, the created PolarDB cluster is in read-only mode, and the binary logging feature is enabled. For more information about how to perform this operation in the console, see [Create a PolarDB for MySQL cluster from an ApsaraDB RDS for MySQL instance](~~121582~~).
     *
     *   **CreateGdnStandby**: creates a secondary cluster. For more information about how to perform this operation in the console, see [Add a secondary cluster](~~160381~~).
     *
     * Default value: **Normal**.
     *
     * >
     *
     *   If the **DBType** parameter is set to **MySQL** and the **DBVersion** parameter is set to **5.6** or **5.7**, this parameter can be set to **CloneFromRDS** or **MigrationFromRDS**.
     *
     *   If the **DBType** parameter is set to **MySQL** and the **DBVersion** parameter is set to **8.0**, this parameter can be set to **CreateGdnStandby**.
     *
     * @example Normal
     *
     * @var string
     */
    public $creationOption;

    /**
     * @description The name of the cluster. The name must meet the following requirements:
     *
     *   It cannot start with `http://` or `https://`.
     *   It must be 2 to 256 characters in length.
     *
     * @example test
     *
     * @var string
     */
    public $DBClusterDescription;

    /**
     * @description The minor version of the database engine. Valid values:
     *
     *   **8.0.2**
     *   **8.0.1**
     *
     * > This parameter is valid only when the **DBType** parameter is set to **MySQL** and the **DBVersion** parameter is set to **8.0**.
     * @example 8.0.1
     *
     * @var string
     */
    public $DBMinorVersion;

    /**
     * @description The specifications of the node.
     *
     *   For more information about specifications supported by PolarDB for MySQL, see [Specifications of compute nodes](~~102542~~).
     *   For information about node specifications supported by the Oracle database engine, see [Specifications of compute nodes](~~207921~~).
     *   For information about node specifications supported by the PostgreSQL database engine, see [Specifications of compute nodes](~~209380~~).
     *
     * @example polar.mysql.x2.medium
     *
     * @var string
     */
    public $DBNodeClass;

    /**
     * @description 标准版节点个数。
     *
     * @example 1
     *
     * @var int
     */
    public $DBNodeNum;

    /**
     * @description The type of the database engine. Valid values:
     *
     *   **MySQL**
     *   **PostgreSQL**
     *   **Oracle**
     *
     * @example MySQL
     *
     * @var string
     */
    public $DBType;

    /**
     * @description The version of the database engine.
     *
     *   Valid values for the MySQL database engine:
     *
     *   **5.6**
     *   **5.7**
     *   **8.0**
     *
     *   Valid values for the PostgreSQL database engine:
     *
     *   **11**
     *   **14**
     *
     *   Valid value for the Oracle database engine: **11**
     *
     * @example 5.6
     *
     * @var string
     */
    public $DBVersion;

    /**
     * @description The time zone of the cluster. The time must be in UTC. You can set the parameter to a value that is on the hour from **-12:00 to +13:00**. Example: 00:00. Default value: **SYSTEM**, which means that the value is the same as the time zone of the region.
     *
     * > This parameter is valid only when the **DBType** parameter is set to **MySQL**.
     * @example SYSTEM
     *
     * @var string
     */
    public $defaultTimeZone;

    /**
     * @description The ID of the Global Database Network (GDN).
     *
     * > This parameter is required only when the **CreationOption** parameter is set to **CreateGdnStandby**.
     * @example gdn-***********
     *
     * @var string
     */
    public $GDNId;

    /**
     * @example ON
     *
     * @var string
     */
    public $hotStandbyCluster;

    /**
     * @description 开启Binlog功能，取值范围如下：
     *
     * - **ON**：集群开启Binlog功能
     * - **OFF**：集群关闭Binlog功能
     * > 当参数**DBType**为**MySQL**时，该参数才生效。
     * @example ON
     *
     * @var string
     */
    public $loosePolarLogBin;

    /**
     * @description 开启X-Engine存储引擎功能，取值范围如下：
     *
     * - **ON**：集群开启X-Engine引擎
     * - **OFF**：集群关闭X-Engine引擎
     * > 当参数**CreationOption**不等于**CreateGdnStandby**，**DBType**为**MySQL**且**DBVersion**为**8.0**时，该参数才生效。开启X-Engine引擎的节点内存规格必须大于等于16 GB。
     * @example ON
     *
     * @var string
     */
    public $looseXEngine;

    /**
     * @description 设置开启X-Engine存储引擎比例，取值范围10~90的整数。
     * > 当参数**LooseXEngine**为**ON**时，该参数才生效。
     * @example 50
     *
     * @var string
     */
    public $looseXEngineUseMemoryPct;

    /**
     * @description Specifies whether the table names are case-sensitive. Valid values:
     *
     *   **1**: The table names are case-insensitive.
     *   **0**: The table names are case-sensitive.
     *
     * Default value: **1**.
     *
     * > This parameter is valid only when the **DBType** parameter is set to **MySQL**.
     * @example 1
     *
     * @var string
     */
    public $lowerCaseTableNames;

    /**
     * @var string
     */
    public $ownerAccount;

    /**
     * @var int
     */
    public $ownerId;

    /**
     * @description The ID of the parameter template.
     *
     * > You can call the [DescribeParameterGroups](~~207178~~) operation to query the details of all parameter templates of a specified region, such as the ID of a parameter template.
     * @example pcpg-**************
     *
     * @var string
     */
    public $parameterGroupId;

    /**
     * @description The billing method. Valid values:
     *
     *   **Postpaid**: pay-as-you-go
     *   **Prepaid**: subscription
     *
     * @example Postpaid
     *
     * @var string
     */
    public $payType;

    /**
     * @description The subscription type of the subscription cluster. This parameter is required only when the PayType parameter is set to **Prepaid**. Valid values:
     *
     *   **Year**: annual subscription. Unit: years.
     *   **Month**: monthly subscription. Unit: months.
     *
     * @example Month
     *
     * @var string
     */
    public $period;

    /**
     * @var int
     */
    public $provisionedIops;

    /**
     * @description 标准版数据库代理规格。
     *
     * @example polar.maxscale.g2.medium.c
     *
     * @var string
     */
    public $proxyClass;

    /**
     * @description 数据库代理类型，取值范围如下：
     *
     * - **Exclusive**：企业独享版
     * - **General**：企业通用版
     * @example Exclusive
     *
     * @var string
     */
    public $proxyType;

    /**
     * @description The region ID of the cluster.
     *
     * > You can call the [DescribeRegions](~~98041~~) operation to query available regions.
     * @example cn-hangzhou
     *
     * @var string
     */
    public $regionId;

    /**
     * @description The ID of the resource group.
     *
     * @example rg-************
     *
     * @var string
     */
    public $resourceGroupId;

    /**
     * @var string
     */
    public $resourceOwnerAccount;

    /**
     * @var int
     */
    public $resourceOwnerId;

    /**
     * @description The maximum number of PCUs per node for scaling. Valid values: 1 PCU to 32 PCUs.
     *
     * > This parameter is valid only for serverless clusters.
     * @example 3
     *
     * @var string
     */
    public $scaleMax;

    /**
     * @description The minimum number of PCUs per node for scaling. Valid values: 1 PCU to 31 PCUs.
     *
     * > This parameter is valid only for serverless clusters.
     * @example 1
     *
     * @var string
     */
    public $scaleMin;

    /**
     * @description The maximum number of read-only nodes for scaling. Valid values: 0 to 15.
     *
     * > This parameter is valid only for serverless clusters.
     * @example 4
     *
     * @var string
     */
    public $scaleRoNumMax;

    /**
     * @description The minimum number of read-only nodes for scaling. Valid values: 0 to 15.
     *
     * > This parameter is valid only for serverless clusters.
     * @example 2
     *
     * @var string
     */
    public $scaleRoNumMin;

    /**
     * @description The IP whitelist of the cluster.
     *
     * > The whitelist can contain multiple IP addresses. Separate multiple IP addresses with commas (,).
     * @example 10.***.***.***
     *
     * @var string
     */
    public $securityIPList;

    /**
     * @description The type of the serverless cluster. Set the value to **AgileServerless**.
     *
     * > This parameter is valid only for serverless clusters.
     * @example AgileServerless
     *
     * @var string
     */
    public $serverlessType;

    /**
     * @description The ID of the source ApsaraDB RDS instance or PolarDB cluster. This parameter is required only when the **CreationOption** parameter is set to **MigrationFromRDS**, **CloneFromRDS**, or **CloneFromPolarDB**.
     *
     *   If the **CreationOption** parameter is set to **MigrationFromRDS** or **CloneFromRDS**, you must set this parameter to the ID of the source ApsaraDB RDS instance. The source ApsaraDB RDS instance must use ApsaraDB RDS for MySQL 5.6, 5.7, or 8.0 High-availability Edition.
     *   If the **CreationOption** parameter is set to **CloneFromPolarDB**, you must set this parameter to the ID of the source PolarDB cluster. By default, the value of DBType of the destination cluster must be the same as that of the source cluster. For example, if a MySQL 8.0 cluster is used as the source cluster, you must set the **DBType** parameter to **MySQL** and the **DBVersion** parameter to **8.0** for the destination cluster.
     *
     * @example rm-*************
     *
     * @var string
     */
    public $sourceResourceId;

    /**
     * @description 存储热备集群的可用区。适用于标准版3AZ场景。
     *
     * > 开启了多可用区数据强一致，该参数才生效。
     * @example cn-hangzhou-g
     *
     * @var string
     */
    public $standbyAZ;

    /**
     * @var string
     */
    public $storageAutoScale;

    /**
     * @var string
     */
    public $storagePayType;

    /**
     * @description The storage space that uses the subscription billing method. Unit: GB.
     *
     * @example 50
     *
     * @var int
     */
    public $storageSpace;

    /**
     * @description The storage type. Valid values for Enterprise Edition:
     *
     *   **PSL5**
     *   **PSL4**
     *
     * Valid values for Standard Edition:
     *
     *   **ESSDPL1**
     *   **ESSDPL2**
     *   **ESSDPL3**
     *
     * > This parameter is invalid for serverless clusters.
     * @example PSL4
     *
     * @var string
     */
    public $storageType;

    /**
     * @var int
     */
    public $storageUpperBound;

    /**
     * @description 集群是否开启了多可用区数据强一致。取值范围：
     *
     * - **ON**：表示开启了多可用区数据强一致，适用于标准版3AZ场景。
     *
     * - **OFF**：表示未开启多可用区数据强一致。
     * @example ON
     *
     * @var string
     */
    public $strictConsistency;

    /**
     * @description Specifies whether to enable transparent data encryption (TDE). Default value: false. Valid values:
     *
     *   **true**
     *   **false**
     *
     * >
     *
     *   This parameter is valid only when the **DBType** parameter is set to **PostgreSQL** or **Oracle**.
     *
     *   You can call the [ModifyDBClusterTDE](~~167982~~) operation to enable TDE for a PolarDB for MySQL cluster.
     *   TDE cannot be disabled after it is enabled.
     *
     * @example true
     *
     * @var bool
     */
    public $TDEStatus;

    /**
     * @description 1
     *
     * @var tag[]
     */
    public $tag;

    /**
     * @description *   If the **Period** parameter is set to **Month**, the **UsedTime** parameter can be set to `1, 2, 3, 4, 5, 6, 7, 8, or 9`.
     *   If the **Period** parameter is set to **Year**, the **UsedTime** parameter can be set to `1, 2, or 3`.
     *
     * @example 1
     *
     * @var string
     */
    public $usedTime;

    /**
     * @description The virtual private cloud (VPC) ID of the cluster.
     *
     * @example vpc-**********
     *
     * @var string
     */
    public $VPCId;

    /**
     * @description The vSwitch ID of the cluster.
     *
     * > If the VPCId parameter is specified, the VSwitchId parameter is required.
     * @example vsw-**********
     *
     * @var string
     */
    public $vSwitchId;

    /**
     * @description The zone ID of the cluster.
     *
     * > You can call the [DescribeRegions](~~98041~~) operation to query available zones.
     * @example cn-hangzhou-g
     *
     * @var string
     */
    public $zoneId;
    protected $_name = [
        'allowShutDown'                          => 'AllowShutDown',
        'architecture'                           => 'Architecture',
        'autoRenew'                              => 'AutoRenew',
        'backupRetentionPolicyOnClusterDeletion' => 'BackupRetentionPolicyOnClusterDeletion',
        'clientToken'                            => 'ClientToken',
        'cloneDataPoint'                         => 'CloneDataPoint',
        'clusterNetworkType'                     => 'ClusterNetworkType',
        'creationCategory'                       => 'CreationCategory',
        'creationOption'                         => 'CreationOption',
        'DBClusterDescription'                   => 'DBClusterDescription',
        'DBMinorVersion'                         => 'DBMinorVersion',
        'DBNodeClass'                            => 'DBNodeClass',
        'DBNodeNum'                              => 'DBNodeNum',
        'DBType'                                 => 'DBType',
        'DBVersion'                              => 'DBVersion',
        'defaultTimeZone'                        => 'DefaultTimeZone',
        'GDNId'                                  => 'GDNId',
        'hotStandbyCluster'                      => 'HotStandbyCluster',
        'loosePolarLogBin'                       => 'LoosePolarLogBin',
        'looseXEngine'                           => 'LooseXEngine',
        'looseXEngineUseMemoryPct'               => 'LooseXEngineUseMemoryPct',
        'lowerCaseTableNames'                    => 'LowerCaseTableNames',
        'ownerAccount'                           => 'OwnerAccount',
        'ownerId'                                => 'OwnerId',
        'parameterGroupId'                       => 'ParameterGroupId',
        'payType'                                => 'PayType',
        'period'                                 => 'Period',
        'provisionedIops'                        => 'ProvisionedIops',
        'proxyClass'                             => 'ProxyClass',
        'proxyType'                              => 'ProxyType',
        'regionId'                               => 'RegionId',
        'resourceGroupId'                        => 'ResourceGroupId',
        'resourceOwnerAccount'                   => 'ResourceOwnerAccount',
        'resourceOwnerId'                        => 'ResourceOwnerId',
        'scaleMax'                               => 'ScaleMax',
        'scaleMin'                               => 'ScaleMin',
        'scaleRoNumMax'                          => 'ScaleRoNumMax',
        'scaleRoNumMin'                          => 'ScaleRoNumMin',
        'securityIPList'                         => 'SecurityIPList',
        'serverlessType'                         => 'ServerlessType',
        'sourceResourceId'                       => 'SourceResourceId',
        'standbyAZ'                              => 'StandbyAZ',
        'storageAutoScale'                       => 'StorageAutoScale',
        'storagePayType'                         => 'StoragePayType',
        'storageSpace'                           => 'StorageSpace',
        'storageType'                            => 'StorageType',
        'storageUpperBound'                      => 'StorageUpperBound',
        'strictConsistency'                      => 'StrictConsistency',
        'TDEStatus'                              => 'TDEStatus',
        'tag'                                    => 'Tag',
        'usedTime'                               => 'UsedTime',
        'VPCId'                                  => 'VPCId',
        'vSwitchId'                              => 'VSwitchId',
        'zoneId'                                 => 'ZoneId',
    ];

    public function validate()
    {
    }

    public function toMap()
    {
        $res = [];
        if (null !== $this->allowShutDown) {
            $res['AllowShutDown'] = $this->allowShutDown;
        }
        if (null !== $this->architecture) {
            $res['Architecture'] = $this->architecture;
        }
        if (null !== $this->autoRenew) {
            $res['AutoRenew'] = $this->autoRenew;
        }
        if (null !== $this->backupRetentionPolicyOnClusterDeletion) {
            $res['BackupRetentionPolicyOnClusterDeletion'] = $this->backupRetentionPolicyOnClusterDeletion;
        }
        if (null !== $this->clientToken) {
            $res['ClientToken'] = $this->clientToken;
        }
        if (null !== $this->cloneDataPoint) {
            $res['CloneDataPoint'] = $this->cloneDataPoint;
        }
        if (null !== $this->clusterNetworkType) {
            $res['ClusterNetworkType'] = $this->clusterNetworkType;
        }
        if (null !== $this->creationCategory) {
            $res['CreationCategory'] = $this->creationCategory;
        }
        if (null !== $this->creationOption) {
            $res['CreationOption'] = $this->creationOption;
        }
        if (null !== $this->DBClusterDescription) {
            $res['DBClusterDescription'] = $this->DBClusterDescription;
        }
        if (null !== $this->DBMinorVersion) {
            $res['DBMinorVersion'] = $this->DBMinorVersion;
        }
        if (null !== $this->DBNodeClass) {
            $res['DBNodeClass'] = $this->DBNodeClass;
        }
        if (null !== $this->DBNodeNum) {
            $res['DBNodeNum'] = $this->DBNodeNum;
        }
        if (null !== $this->DBType) {
            $res['DBType'] = $this->DBType;
        }
        if (null !== $this->DBVersion) {
            $res['DBVersion'] = $this->DBVersion;
        }
        if (null !== $this->defaultTimeZone) {
            $res['DefaultTimeZone'] = $this->defaultTimeZone;
        }
        if (null !== $this->GDNId) {
            $res['GDNId'] = $this->GDNId;
        }
        if (null !== $this->hotStandbyCluster) {
            $res['HotStandbyCluster'] = $this->hotStandbyCluster;
        }
        if (null !== $this->loosePolarLogBin) {
            $res['LoosePolarLogBin'] = $this->loosePolarLogBin;
        }
        if (null !== $this->looseXEngine) {
            $res['LooseXEngine'] = $this->looseXEngine;
        }
        if (null !== $this->looseXEngineUseMemoryPct) {
            $res['LooseXEngineUseMemoryPct'] = $this->looseXEngineUseMemoryPct;
        }
        if (null !== $this->lowerCaseTableNames) {
            $res['LowerCaseTableNames'] = $this->lowerCaseTableNames;
        }
        if (null !== $this->ownerAccount) {
            $res['OwnerAccount'] = $this->ownerAccount;
        }
        if (null !== $this->ownerId) {
            $res['OwnerId'] = $this->ownerId;
        }
        if (null !== $this->parameterGroupId) {
            $res['ParameterGroupId'] = $this->parameterGroupId;
        }
        if (null !== $this->payType) {
            $res['PayType'] = $this->payType;
        }
        if (null !== $this->period) {
            $res['Period'] = $this->period;
        }
        if (null !== $this->provisionedIops) {
            $res['ProvisionedIops'] = $this->provisionedIops;
        }
        if (null !== $this->proxyClass) {
            $res['ProxyClass'] = $this->proxyClass;
        }
        if (null !== $this->proxyType) {
            $res['ProxyType'] = $this->proxyType;
        }
        if (null !== $this->regionId) {
            $res['RegionId'] = $this->regionId;
        }
        if (null !== $this->resourceGroupId) {
            $res['ResourceGroupId'] = $this->resourceGroupId;
        }
        if (null !== $this->resourceOwnerAccount) {
            $res['ResourceOwnerAccount'] = $this->resourceOwnerAccount;
        }
        if (null !== $this->resourceOwnerId) {
            $res['ResourceOwnerId'] = $this->resourceOwnerId;
        }
        if (null !== $this->scaleMax) {
            $res['ScaleMax'] = $this->scaleMax;
        }
        if (null !== $this->scaleMin) {
            $res['ScaleMin'] = $this->scaleMin;
        }
        if (null !== $this->scaleRoNumMax) {
            $res['ScaleRoNumMax'] = $this->scaleRoNumMax;
        }
        if (null !== $this->scaleRoNumMin) {
            $res['ScaleRoNumMin'] = $this->scaleRoNumMin;
        }
        if (null !== $this->securityIPList) {
            $res['SecurityIPList'] = $this->securityIPList;
        }
        if (null !== $this->serverlessType) {
            $res['ServerlessType'] = $this->serverlessType;
        }
        if (null !== $this->sourceResourceId) {
            $res['SourceResourceId'] = $this->sourceResourceId;
        }
        if (null !== $this->standbyAZ) {
            $res['StandbyAZ'] = $this->standbyAZ;
        }
        if (null !== $this->storageAutoScale) {
            $res['StorageAutoScale'] = $this->storageAutoScale;
        }
        if (null !== $this->storagePayType) {
            $res['StoragePayType'] = $this->storagePayType;
        }
        if (null !== $this->storageSpace) {
            $res['StorageSpace'] = $this->storageSpace;
        }
        if (null !== $this->storageType) {
            $res['StorageType'] = $this->storageType;
        }
        if (null !== $this->storageUpperBound) {
            $res['StorageUpperBound'] = $this->storageUpperBound;
        }
        if (null !== $this->strictConsistency) {
            $res['StrictConsistency'] = $this->strictConsistency;
        }
        if (null !== $this->TDEStatus) {
            $res['TDEStatus'] = $this->TDEStatus;
        }
        if (null !== $this->tag) {
            $res['Tag'] = [];
            if (null !== $this->tag && \is_array($this->tag)) {
                $n = 0;
                foreach ($this->tag as $item) {
                    $res['Tag'][$n++] = null !== $item ? $item->toMap() : $item;
                }
            }
        }
        if (null !== $this->usedTime) {
            $res['UsedTime'] = $this->usedTime;
        }
        if (null !== $this->VPCId) {
            $res['VPCId'] = $this->VPCId;
        }
        if (null !== $this->vSwitchId) {
            $res['VSwitchId'] = $this->vSwitchId;
        }
        if (null !== $this->zoneId) {
            $res['ZoneId'] = $this->zoneId;
        }

        return $res;
    }

    /**
     * @param array $map
     *
     * @return CreateDBClusterRequest
     */
    public static function fromMap($map = [])
    {
        $model = new self();
        if (isset($map['AllowShutDown'])) {
            $model->allowShutDown = $map['AllowShutDown'];
        }
        if (isset($map['Architecture'])) {
            $model->architecture = $map['Architecture'];
        }
        if (isset($map['AutoRenew'])) {
            $model->autoRenew = $map['AutoRenew'];
        }
        if (isset($map['BackupRetentionPolicyOnClusterDeletion'])) {
            $model->backupRetentionPolicyOnClusterDeletion = $map['BackupRetentionPolicyOnClusterDeletion'];
        }
        if (isset($map['ClientToken'])) {
            $model->clientToken = $map['ClientToken'];
        }
        if (isset($map['CloneDataPoint'])) {
            $model->cloneDataPoint = $map['CloneDataPoint'];
        }
        if (isset($map['ClusterNetworkType'])) {
            $model->clusterNetworkType = $map['ClusterNetworkType'];
        }
        if (isset($map['CreationCategory'])) {
            $model->creationCategory = $map['CreationCategory'];
        }
        if (isset($map['CreationOption'])) {
            $model->creationOption = $map['CreationOption'];
        }
        if (isset($map['DBClusterDescription'])) {
            $model->DBClusterDescription = $map['DBClusterDescription'];
        }
        if (isset($map['DBMinorVersion'])) {
            $model->DBMinorVersion = $map['DBMinorVersion'];
        }
        if (isset($map['DBNodeClass'])) {
            $model->DBNodeClass = $map['DBNodeClass'];
        }
        if (isset($map['DBNodeNum'])) {
            $model->DBNodeNum = $map['DBNodeNum'];
        }
        if (isset($map['DBType'])) {
            $model->DBType = $map['DBType'];
        }
        if (isset($map['DBVersion'])) {
            $model->DBVersion = $map['DBVersion'];
        }
        if (isset($map['DefaultTimeZone'])) {
            $model->defaultTimeZone = $map['DefaultTimeZone'];
        }
        if (isset($map['GDNId'])) {
            $model->GDNId = $map['GDNId'];
        }
        if (isset($map['HotStandbyCluster'])) {
            $model->hotStandbyCluster = $map['HotStandbyCluster'];
        }
        if (isset($map['LoosePolarLogBin'])) {
            $model->loosePolarLogBin = $map['LoosePolarLogBin'];
        }
        if (isset($map['LooseXEngine'])) {
            $model->looseXEngine = $map['LooseXEngine'];
        }
        if (isset($map['LooseXEngineUseMemoryPct'])) {
            $model->looseXEngineUseMemoryPct = $map['LooseXEngineUseMemoryPct'];
        }
        if (isset($map['LowerCaseTableNames'])) {
            $model->lowerCaseTableNames = $map['LowerCaseTableNames'];
        }
        if (isset($map['OwnerAccount'])) {
            $model->ownerAccount = $map['OwnerAccount'];
        }
        if (isset($map['OwnerId'])) {
            $model->ownerId = $map['OwnerId'];
        }
        if (isset($map['ParameterGroupId'])) {
            $model->parameterGroupId = $map['ParameterGroupId'];
        }
        if (isset($map['PayType'])) {
            $model->payType = $map['PayType'];
        }
        if (isset($map['Period'])) {
            $model->period = $map['Period'];
        }
        if (isset($map['ProvisionedIops'])) {
            $model->provisionedIops = $map['ProvisionedIops'];
        }
        if (isset($map['ProxyClass'])) {
            $model->proxyClass = $map['ProxyClass'];
        }
        if (isset($map['ProxyType'])) {
            $model->proxyType = $map['ProxyType'];
        }
        if (isset($map['RegionId'])) {
            $model->regionId = $map['RegionId'];
        }
        if (isset($map['ResourceGroupId'])) {
            $model->resourceGroupId = $map['ResourceGroupId'];
        }
        if (isset($map['ResourceOwnerAccount'])) {
            $model->resourceOwnerAccount = $map['ResourceOwnerAccount'];
        }
        if (isset($map['ResourceOwnerId'])) {
            $model->resourceOwnerId = $map['ResourceOwnerId'];
        }
        if (isset($map['ScaleMax'])) {
            $model->scaleMax = $map['ScaleMax'];
        }
        if (isset($map['ScaleMin'])) {
            $model->scaleMin = $map['ScaleMin'];
        }
        if (isset($map['ScaleRoNumMax'])) {
            $model->scaleRoNumMax = $map['ScaleRoNumMax'];
        }
        if (isset($map['ScaleRoNumMin'])) {
            $model->scaleRoNumMin = $map['ScaleRoNumMin'];
        }
        if (isset($map['SecurityIPList'])) {
            $model->securityIPList = $map['SecurityIPList'];
        }
        if (isset($map['ServerlessType'])) {
            $model->serverlessType = $map['ServerlessType'];
        }
        if (isset($map['SourceResourceId'])) {
            $model->sourceResourceId = $map['SourceResourceId'];
        }
        if (isset($map['StandbyAZ'])) {
            $model->standbyAZ = $map['StandbyAZ'];
        }
        if (isset($map['StorageAutoScale'])) {
            $model->storageAutoScale = $map['StorageAutoScale'];
        }
        if (isset($map['StoragePayType'])) {
            $model->storagePayType = $map['StoragePayType'];
        }
        if (isset($map['StorageSpace'])) {
            $model->storageSpace = $map['StorageSpace'];
        }
        if (isset($map['StorageType'])) {
            $model->storageType = $map['StorageType'];
        }
        if (isset($map['StorageUpperBound'])) {
            $model->storageUpperBound = $map['StorageUpperBound'];
        }
        if (isset($map['StrictConsistency'])) {
            $model->strictConsistency = $map['StrictConsistency'];
        }
        if (isset($map['TDEStatus'])) {
            $model->TDEStatus = $map['TDEStatus'];
        }
        if (isset($map['Tag'])) {
            if (!empty($map['Tag'])) {
                $model->tag = [];
                $n          = 0;
                foreach ($map['Tag'] as $item) {
                    $model->tag[$n++] = null !== $item ? tag::fromMap($item) : $item;
                }
            }
        }
        if (isset($map['UsedTime'])) {
            $model->usedTime = $map['UsedTime'];
        }
        if (isset($map['VPCId'])) {
            $model->VPCId = $map['VPCId'];
        }
        if (isset($map['VSwitchId'])) {
            $model->vSwitchId = $map['VSwitchId'];
        }
        if (isset($map['ZoneId'])) {
            $model->zoneId = $map['ZoneId'];
        }

        return $model;
    }
}
