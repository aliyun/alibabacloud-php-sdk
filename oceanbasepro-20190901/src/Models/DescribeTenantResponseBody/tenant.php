<?php

// This file is auto-generated, don't edit it. Thanks.

namespace AlibabaCloud\SDK\OceanBasePro\V20190901\Models\DescribeTenantResponseBody;

use AlibabaCloud\SDK\OceanBasePro\V20190901\Models\DescribeTenantResponseBody\tenant\readOnlyResource;
use AlibabaCloud\SDK\OceanBasePro\V20190901\Models\DescribeTenantResponseBody\tenant\tenantConnections;
use AlibabaCloud\SDK\OceanBasePro\V20190901\Models\DescribeTenantResponseBody\tenant\tenantResource;
use AlibabaCloud\SDK\OceanBasePro\V20190901\Models\DescribeTenantResponseBody\tenant\tenantZones;
use AlibabaCloud\Tea\Model;

class tenant extends Model
{
    /**
     * @description The list of zones.
     *
     * @var string[]
     */
    public $availableZones;

    /**
     * @description The character set.
     *
     * @example utf8mb4
     *
     * @var string
     */
    public $charset;

    /**
     * @description The enabling status of the clog service.
     * - ONLINE: The clog service is running.
     * @example CLOSED
     *
     * @var string
     */
    public $clogServiceStatus;

    /**
     * @description The collation.
     *
     * @example utf8mb4_general_ci
     *
     * @var string
     */
    public $collation;

    /**
     * @description The time when the tenant was created.
     *
     * @example 2023-04-21 11:15:47.0
     *
     * @var string
     */
    public $createTime;

    /**
     * @description The major compaction time of the tenant. This parameter is supported only in OceanBase Database V4.0.0 and later.
     *
     * @example 02:36Z
     *
     * @var string
     */
    public $dataMergeTime;

    /**
     * @description The data replica distribution mode of the tenant.
     *
     * > <br>N represents the number of nodes in a single zone.
     * @example 1-1-1
     *
     * @var string
     */
    public $deployMode;

    /**
     * @description The deployment type of the cluster. Valid values:
     * - dual: dual-IDC deployment
     * @example multiple
     *
     * @var string
     */
    public $deployType;

    /**
     * @description The description of the tenant.
     *
     * @example paycore database
     *
     * @var string
     */
    public $description;

    /**
     * @description The type of the disk.
     *
     * @example cloud_essd_pl1
     *
     * @var string
     */
    public $diskType;

    /**
     * @description Indicates whether the binlog service is available for application.
     *
     * @example true
     *
     * @var bool
     */
    public $enableBinlogService;

    /**
     * @description Indicates whether the clog service is available. To enable the clog service, submit a ticket.
     *
     * @example false
     *
     * @var bool
     */
    public $enableClogService;

    /**
     * @description Indicates whether the Internet address can be enabled for the tenant.
     *
     * @example true
     *
     * @var bool
     */
    public $enableInternetAddressService;

    /**
     * @description Indicates whether parallel query can be enabled.
     *
     * @example true
     *
     * @var bool
     */
    public $enableParallelQuery;

    /**
     * @description Indicates whether read-only replicas are supported.
     *
     * @example true
     *
     * @var bool
     */
    public $enableReadOnlyReplica;

    /**
     * @description Indicates whether to enable read/write splitting endpoint.
     *
     * @example false
     *
     * @var bool
     */
    public $enableReadWriteSplit;

    /**
     * @description The type of the instance.
     *
     * @example KAFKA_PUBLIC
     *
     * @var string
     */
    public $instanceType;

    /**
     * @description Indicates whether the table name is case-sensitive. Valid values:
     * **1**: The table name is case-insensitive.
     * **0**: The table name is case-sensitive.
     *
     * @example 1
     *
     * @var int
     */
    public $lowerCaseTableNames;

    /**
     * @description The zone where the primary node is located.
     *
     * @example cn-hangzhou-h
     *
     * @var string
     */
    public $masterIntranetAddressZone;

    /**
     * @description The maximum value of DOP.
     *
     * @example 32
     *
     * @var int
     */
    public $maxParallelQueryDegree;

    /**
     * @description The ODP version.
     *
     * @example 4.3.1-xxxxxxxxx
     *
     * @var string
     */
    public $odpVersion;

    /**
     * @description The parameter template.
     *
     * @example express_oltp
     *
     * @var string
     */
    public $parameterTemplate;

    /**
     * @description The type of the payment.
     *
     * @example POSTPAY
     *
     * @var string
     */
    public $payType;

    /**
     * @description The primary zone of the tenant.
     *
     * @example cn-hangzhou-h
     *
     * @var string
     */
    public $primaryZone;

    /**
     * @description The deployment type of the primary zone.
     *
     * @example RANDOM
     *
     * @var string
     */
    public $primaryZoneDeployType;

    /**
     * @description The information about read-only resources.
     *
     * @var readOnlyResource
     */
    public $readOnlyResource;

    /**
     * @description The status of the recycle bin in the tenant. Valid values:
     * ON: The recycly bin is enabled.
     * OFF: The recycle bin is disabled.
     *
     * @example ON
     *
     * @var string
     */
    public $recycleBinStatus;

    /**
     * @description The series of the instance.
     *
     * @example normal
     *
     * @var string
     */
    public $series;

    /**
     * @description The status of the tenant.
     *
     * - CREATING_BINLOG: Binlogs are being created.
     * @example ONLINE
     *
     * @var string
     */
    public $status;

    /**
     * @description The connection information of the tenant.
     *
     * @var tenantConnections[]
     */
    public $tenantConnections;

    /**
     * @description The ID of the tenant.
     *
     * @example t4louaeei****
     *
     * @var string
     */
    public $tenantId;

    /**
     * @description The maximum number of connections allowed in the tenant.
     *
     * @example 1600
     *
     * @var string
     */
    public $tenantMaxConnections;

    /**
     * @description The mode of the tenant.
     * - MySQL
     * @example MySQL
     *
     * @var string
     */
    public $tenantMode;

    /**
     * @description The name of the tenant.
     *
     * @example forMySQLTenant
     *
     * @var string
     */
    public $tenantName;

    /**
     * @description The resource information of the tenant.
     *
     * @var tenantResource
     */
    public $tenantResource;

    /**
     * @description The information about zones in the tenant.
     *
     * @var tenantZones[]
     */
    public $tenantZones;

    /**
     * @description The time zone.
     *
     * @example Asia/Shanghai
     *
     * @var string
     */
    public $timeZone;

    /**
     * @description The version information.
     *
     * @example 4.2.1
     *
     * @var string
     */
    public $version;

    /**
     * @description The Virtual Private Cloud (VPC) ID of the tenant. If no suitable VPC is available, create a VPC as prompted. For more information, see "What is a VPC".
     *
     * @example vpc-bp1d2q3mhg9i23ofi****
     *
     * @var string
     */
    public $vpcId;
    protected $_name = [
        'availableZones'               => 'AvailableZones',
        'charset'                      => 'Charset',
        'clogServiceStatus'            => 'ClogServiceStatus',
        'collation'                    => 'Collation',
        'createTime'                   => 'CreateTime',
        'dataMergeTime'                => 'DataMergeTime',
        'deployMode'                   => 'DeployMode',
        'deployType'                   => 'DeployType',
        'description'                  => 'Description',
        'diskType'                     => 'DiskType',
        'enableBinlogService'          => 'EnableBinlogService',
        'enableClogService'            => 'EnableClogService',
        'enableInternetAddressService' => 'EnableInternetAddressService',
        'enableParallelQuery'          => 'EnableParallelQuery',
        'enableReadOnlyReplica'        => 'EnableReadOnlyReplica',
        'enableReadWriteSplit'         => 'EnableReadWriteSplit',
        'instanceType'                 => 'InstanceType',
        'lowerCaseTableNames'          => 'LowerCaseTableNames',
        'masterIntranetAddressZone'    => 'MasterIntranetAddressZone',
        'maxParallelQueryDegree'       => 'MaxParallelQueryDegree',
        'odpVersion'                   => 'OdpVersion',
        'parameterTemplate'            => 'ParameterTemplate',
        'payType'                      => 'PayType',
        'primaryZone'                  => 'PrimaryZone',
        'primaryZoneDeployType'        => 'PrimaryZoneDeployType',
        'readOnlyResource'             => 'ReadOnlyResource',
        'recycleBinStatus'             => 'RecycleBinStatus',
        'series'                       => 'Series',
        'status'                       => 'Status',
        'tenantConnections'            => 'TenantConnections',
        'tenantId'                     => 'TenantId',
        'tenantMaxConnections'         => 'TenantMaxConnections',
        'tenantMode'                   => 'TenantMode',
        'tenantName'                   => 'TenantName',
        'tenantResource'               => 'TenantResource',
        'tenantZones'                  => 'TenantZones',
        'timeZone'                     => 'TimeZone',
        'version'                      => 'Version',
        'vpcId'                        => 'VpcId',
    ];

    public function validate()
    {
    }

    public function toMap()
    {
        $res = [];
        if (null !== $this->availableZones) {
            $res['AvailableZones'] = $this->availableZones;
        }
        if (null !== $this->charset) {
            $res['Charset'] = $this->charset;
        }
        if (null !== $this->clogServiceStatus) {
            $res['ClogServiceStatus'] = $this->clogServiceStatus;
        }
        if (null !== $this->collation) {
            $res['Collation'] = $this->collation;
        }
        if (null !== $this->createTime) {
            $res['CreateTime'] = $this->createTime;
        }
        if (null !== $this->dataMergeTime) {
            $res['DataMergeTime'] = $this->dataMergeTime;
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
        if (null !== $this->diskType) {
            $res['DiskType'] = $this->diskType;
        }
        if (null !== $this->enableBinlogService) {
            $res['EnableBinlogService'] = $this->enableBinlogService;
        }
        if (null !== $this->enableClogService) {
            $res['EnableClogService'] = $this->enableClogService;
        }
        if (null !== $this->enableInternetAddressService) {
            $res['EnableInternetAddressService'] = $this->enableInternetAddressService;
        }
        if (null !== $this->enableParallelQuery) {
            $res['EnableParallelQuery'] = $this->enableParallelQuery;
        }
        if (null !== $this->enableReadOnlyReplica) {
            $res['EnableReadOnlyReplica'] = $this->enableReadOnlyReplica;
        }
        if (null !== $this->enableReadWriteSplit) {
            $res['EnableReadWriteSplit'] = $this->enableReadWriteSplit;
        }
        if (null !== $this->instanceType) {
            $res['InstanceType'] = $this->instanceType;
        }
        if (null !== $this->lowerCaseTableNames) {
            $res['LowerCaseTableNames'] = $this->lowerCaseTableNames;
        }
        if (null !== $this->masterIntranetAddressZone) {
            $res['MasterIntranetAddressZone'] = $this->masterIntranetAddressZone;
        }
        if (null !== $this->maxParallelQueryDegree) {
            $res['MaxParallelQueryDegree'] = $this->maxParallelQueryDegree;
        }
        if (null !== $this->odpVersion) {
            $res['OdpVersion'] = $this->odpVersion;
        }
        if (null !== $this->parameterTemplate) {
            $res['ParameterTemplate'] = $this->parameterTemplate;
        }
        if (null !== $this->payType) {
            $res['PayType'] = $this->payType;
        }
        if (null !== $this->primaryZone) {
            $res['PrimaryZone'] = $this->primaryZone;
        }
        if (null !== $this->primaryZoneDeployType) {
            $res['PrimaryZoneDeployType'] = $this->primaryZoneDeployType;
        }
        if (null !== $this->readOnlyResource) {
            $res['ReadOnlyResource'] = null !== $this->readOnlyResource ? $this->readOnlyResource->toMap() : null;
        }
        if (null !== $this->recycleBinStatus) {
            $res['RecycleBinStatus'] = $this->recycleBinStatus;
        }
        if (null !== $this->series) {
            $res['Series'] = $this->series;
        }
        if (null !== $this->status) {
            $res['Status'] = $this->status;
        }
        if (null !== $this->tenantConnections) {
            $res['TenantConnections'] = [];
            if (null !== $this->tenantConnections && \is_array($this->tenantConnections)) {
                $n = 0;
                foreach ($this->tenantConnections as $item) {
                    $res['TenantConnections'][$n++] = null !== $item ? $item->toMap() : $item;
                }
            }
        }
        if (null !== $this->tenantId) {
            $res['TenantId'] = $this->tenantId;
        }
        if (null !== $this->tenantMaxConnections) {
            $res['TenantMaxConnections'] = $this->tenantMaxConnections;
        }
        if (null !== $this->tenantMode) {
            $res['TenantMode'] = $this->tenantMode;
        }
        if (null !== $this->tenantName) {
            $res['TenantName'] = $this->tenantName;
        }
        if (null !== $this->tenantResource) {
            $res['TenantResource'] = null !== $this->tenantResource ? $this->tenantResource->toMap() : null;
        }
        if (null !== $this->tenantZones) {
            $res['TenantZones'] = [];
            if (null !== $this->tenantZones && \is_array($this->tenantZones)) {
                $n = 0;
                foreach ($this->tenantZones as $item) {
                    $res['TenantZones'][$n++] = null !== $item ? $item->toMap() : $item;
                }
            }
        }
        if (null !== $this->timeZone) {
            $res['TimeZone'] = $this->timeZone;
        }
        if (null !== $this->version) {
            $res['Version'] = $this->version;
        }
        if (null !== $this->vpcId) {
            $res['VpcId'] = $this->vpcId;
        }

        return $res;
    }

    /**
     * @param array $map
     *
     * @return tenant
     */
    public static function fromMap($map = [])
    {
        $model = new self();
        if (isset($map['AvailableZones'])) {
            if (!empty($map['AvailableZones'])) {
                $model->availableZones = $map['AvailableZones'];
            }
        }
        if (isset($map['Charset'])) {
            $model->charset = $map['Charset'];
        }
        if (isset($map['ClogServiceStatus'])) {
            $model->clogServiceStatus = $map['ClogServiceStatus'];
        }
        if (isset($map['Collation'])) {
            $model->collation = $map['Collation'];
        }
        if (isset($map['CreateTime'])) {
            $model->createTime = $map['CreateTime'];
        }
        if (isset($map['DataMergeTime'])) {
            $model->dataMergeTime = $map['DataMergeTime'];
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
        if (isset($map['DiskType'])) {
            $model->diskType = $map['DiskType'];
        }
        if (isset($map['EnableBinlogService'])) {
            $model->enableBinlogService = $map['EnableBinlogService'];
        }
        if (isset($map['EnableClogService'])) {
            $model->enableClogService = $map['EnableClogService'];
        }
        if (isset($map['EnableInternetAddressService'])) {
            $model->enableInternetAddressService = $map['EnableInternetAddressService'];
        }
        if (isset($map['EnableParallelQuery'])) {
            $model->enableParallelQuery = $map['EnableParallelQuery'];
        }
        if (isset($map['EnableReadOnlyReplica'])) {
            $model->enableReadOnlyReplica = $map['EnableReadOnlyReplica'];
        }
        if (isset($map['EnableReadWriteSplit'])) {
            $model->enableReadWriteSplit = $map['EnableReadWriteSplit'];
        }
        if (isset($map['InstanceType'])) {
            $model->instanceType = $map['InstanceType'];
        }
        if (isset($map['LowerCaseTableNames'])) {
            $model->lowerCaseTableNames = $map['LowerCaseTableNames'];
        }
        if (isset($map['MasterIntranetAddressZone'])) {
            $model->masterIntranetAddressZone = $map['MasterIntranetAddressZone'];
        }
        if (isset($map['MaxParallelQueryDegree'])) {
            $model->maxParallelQueryDegree = $map['MaxParallelQueryDegree'];
        }
        if (isset($map['OdpVersion'])) {
            $model->odpVersion = $map['OdpVersion'];
        }
        if (isset($map['ParameterTemplate'])) {
            $model->parameterTemplate = $map['ParameterTemplate'];
        }
        if (isset($map['PayType'])) {
            $model->payType = $map['PayType'];
        }
        if (isset($map['PrimaryZone'])) {
            $model->primaryZone = $map['PrimaryZone'];
        }
        if (isset($map['PrimaryZoneDeployType'])) {
            $model->primaryZoneDeployType = $map['PrimaryZoneDeployType'];
        }
        if (isset($map['ReadOnlyResource'])) {
            $model->readOnlyResource = readOnlyResource::fromMap($map['ReadOnlyResource']);
        }
        if (isset($map['RecycleBinStatus'])) {
            $model->recycleBinStatus = $map['RecycleBinStatus'];
        }
        if (isset($map['Series'])) {
            $model->series = $map['Series'];
        }
        if (isset($map['Status'])) {
            $model->status = $map['Status'];
        }
        if (isset($map['TenantConnections'])) {
            if (!empty($map['TenantConnections'])) {
                $model->tenantConnections = [];
                $n                        = 0;
                foreach ($map['TenantConnections'] as $item) {
                    $model->tenantConnections[$n++] = null !== $item ? tenantConnections::fromMap($item) : $item;
                }
            }
        }
        if (isset($map['TenantId'])) {
            $model->tenantId = $map['TenantId'];
        }
        if (isset($map['TenantMaxConnections'])) {
            $model->tenantMaxConnections = $map['TenantMaxConnections'];
        }
        if (isset($map['TenantMode'])) {
            $model->tenantMode = $map['TenantMode'];
        }
        if (isset($map['TenantName'])) {
            $model->tenantName = $map['TenantName'];
        }
        if (isset($map['TenantResource'])) {
            $model->tenantResource = tenantResource::fromMap($map['TenantResource']);
        }
        if (isset($map['TenantZones'])) {
            if (!empty($map['TenantZones'])) {
                $model->tenantZones = [];
                $n                  = 0;
                foreach ($map['TenantZones'] as $item) {
                    $model->tenantZones[$n++] = null !== $item ? tenantZones::fromMap($item) : $item;
                }
            }
        }
        if (isset($map['TimeZone'])) {
            $model->timeZone = $map['TimeZone'];
        }
        if (isset($map['Version'])) {
            $model->version = $map['Version'];
        }
        if (isset($map['VpcId'])) {
            $model->vpcId = $map['VpcId'];
        }

        return $model;
    }
}
