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
     * @description DescribeTenant
     *
     * @var string[]
     */
    public $availableZones;

    /**
     * @description The number of CPU cores in each resource unit of the tenant.
     *
     * @example utf8mb4
     *
     * @var string
     */
    public $charset;

    /**
     * @description 地址类型
     *
     * @example CLOSED
     *
     * @var string
     */
    public $clogServiceStatus;

    /**
     * @description The request ID.
     *
     * @example utf8mb4_general_ci
     *
     * @var string
     */
    public $collation;

    /**
     * @description You can call this operation to create a single tenant in a specific cluster.
     *
     * @example 2021-09-17 15:52:17
     *
     * @var string
     */
    public $createTime;

    /**
     * @var string
     */
    public $dataMergeTime;

    /**
     * @description The list of zones.
     *
     * @example 1-1-1
     *
     * @var string
     */
    public $deployMode;

    /**
     * @description The series of the instance.
     *
     * @example multiple
     *
     * @var string
     */
    public $deployType;

    /**
     * @description Indicates whether to enable read/write splitting endpoint.
     *
     * @example The information of the tenant.
     *
     * @var string
     */
    public $description;

    /**
     * @description You can call this operation to query the information of a specific tenant in a specific cluster.
     *
     * @example cloud_essd_pl1
     *
     * @var string
     */
    public $diskType;

    /**
     * @description 是否可以申请Binlog服务
     *
     * @var bool
     */
    public $enableBinlogService;

    /**
     * @description The intranet address for accessing the tenant.
     *
     * @example false
     *
     * @var bool
     */
    public $enableClogService;

    /**
     * @description The deployment type of the primary zone.
     *
     * @example true
     *
     * @var bool
     */
    public $enableInternetAddressService;

    /**
     * @var bool
     */
    public $enableParallelQuery;

    /**
     * @var bool
     */
    public $enableReadOnlyReplica;

    /**
     * @example false
     *
     * @var bool
     */
    public $enableReadWriteSplit;

    /**
     * @description {
     * "Tenant": {
     * "TenantId": "t33h8y08k****",
     * "TenantMode": "Oracle",
     * "VpcId": "vpc-bp1d2q3mhg9i23ofi****",
     * "ConnectionRole": "ReadWrite",
     * "IntranetAddress": "t32a7ru5u****.oceanbase.aliyuncs.com",
     * "IntranetPort": 3306,
     * "InternetAddress": "t32a7ru5u****mo.oceanbase.aliyuncs.com",
     * "InternetPort": 3306,
     * "VpcId": "vpc-bp1qiail1asmfe23t****",
     * "VSwitchId": "vsw-bp11k1aypnzu1l3whi****",
     * }
     * @example KAFKA_PUBLIC
     *
     * @var string
     */
    public $instanceType;

    /**
     * @var int[]
     */
    public $lowerCaseTableNames;

    /**
     * @description ```
     * http(s)://[Endpoint]/?Action=DescribeTenant
     * &InstanceId=ob317v4uif****
     * &TenantId=ob2mr3oae0****
     * ```
     * @example cn-hangzhou-h
     *
     * @var string
     */
    public $masterIntranetAddressZone;

    /**
     * @example 32
     *
     * @var int
     */
    public $maxParallelQueryDegree;

    /**
     * @example POSTPAY
     *
     * @var string
     */
    public $payType;

    /**
     * @description The type of the payment.
     *
     * @example cn-hangzhou-i
     *
     * @var string
     */
    public $primaryZone;

    /**
     * @description Example 1
     *
     * @example RANDOM
     *
     * @var string
     */
    public $primaryZoneDeployType;

    /**
     * @var readOnlyResource
     */
    public $readOnlyResource;

    /**
     * @var string
     */
    public $recycleBinStatus;

    /**
     * @description <DescribeTenantResponse>
     * <Tenant>
     * <TenantId>t33h8y08k****</TenantId>
     * <TenantMode>Oracle</TenantMode>
     * <VpcId>vpc-bp1d2q3mhg9i23ofi****</VpcId>
     * <ConnectionRole>ReadWrite</ConnectionRole>
     * <IntranetAddress>t32a7ru5u****.oceanbase.aliyuncs.com</IntranetAddress>
     * <IntranetPort>3306</IntranetPort>
     * <InternetAddress>t32a7ru5u****mo.oceanbase.aliyuncs.com</InternetAddress>
     * <InternetPort>3306</InternetPort>
     * <VpcId>vpc-bp1qiail1asmfe23t****</VpcId>
     * <VSwitchId>vsw-bp11k1aypnzu1l3whi****</VSwitchId>
     * </DescribeTenantResponse>
     * @example normal
     *
     * @var string
     */
    public $series;

    /**
     * @description The character set.
     *
     * @example ONLINE
     *
     * @var string
     */
    public $status;

    /**
     * @description The status of the tenant.
     * - WHITE_LIST_MODIFYING: The whitelist is being modified.
     * @var tenantConnections[]
     */
    public $tenantConnections;

    /**
     * @description The region where the zone of the tenant resides.
     *
     * @example t33h8y08k****
     *
     * @var string
     */
    public $tenantId;

    /**
     * @description The enabling status of the clog service.
     * - ONLINE: The clog service is running.
     * @example Oracle
     *
     * @var string
     */
    public $tenantMode;

    /**
     * @description The request type of the zone of the tenant.  ReadWrite: The zone supports data reads and writes. ReadOnly: The zone supports only data reads. For a high availability cluster with multiple IDCs, the primary zone provides ReadWrite services, and the standby zone provides ReadOnly services. For a high availability cluster with a single IDC, all zones provide ReadWrite services.
     *
     * @example pay_online
     *
     * @var string
     */
    public $tenantName;

    /**
     * @description It is an online CLI tool that allows you to quickly retrieve and debug APIs. It can dynamically generate executable SDK code samples.
     *
     * @var tenantResource
     */
    public $tenantResource;

    /**
     * @description The standby zone corresponding to the address for accessing the tenant.
     *
     * @var tenantZones[]
     */
    public $tenantZones;

    /**
     * @var string
     */
    public $timeZone;

    /**
     * @var string
     */
    public $version;

    /**
     * @description Indicates whether the clog service is available. To enable the clog service, submit a ticket.
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
        'payType'                      => 'PayType',
        'primaryZone'                  => 'PrimaryZone',
        'primaryZoneDeployType'        => 'PrimaryZoneDeployType',
        'readOnlyResource'             => 'ReadOnlyResource',
        'recycleBinStatus'             => 'RecycleBinStatus',
        'series'                       => 'Series',
        'status'                       => 'Status',
        'tenantConnections'            => 'TenantConnections',
        'tenantId'                     => 'TenantId',
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
