<?php

// This file is auto-generated, don't edit it. Thanks.

namespace AlibabaCloud\SDK\OceanBasePro\V20190901\Models\DescribeTenantResponseBody;

use AlibabaCloud\Dara\Model;
use AlibabaCloud\SDK\OceanBasePro\V20190901\Models\DescribeTenantResponseBody\tenant\readOnlyResource;
use AlibabaCloud\SDK\OceanBasePro\V20190901\Models\DescribeTenantResponseBody\tenant\tenantConnections;
use AlibabaCloud\SDK\OceanBasePro\V20190901\Models\DescribeTenantResponseBody\tenant\tenantResource;
use AlibabaCloud\SDK\OceanBasePro\V20190901\Models\DescribeTenantResponseBody\tenant\tenantZones;

class tenant extends Model
{
    /**
     * @var string[]
     */
    public $availableZones;

    /**
     * @var string
     */
    public $charset;

    /**
     * @var string
     */
    public $clogServiceStatus;

    /**
     * @var string
     */
    public $collation;

    /**
     * @var string
     */
    public $createTime;

    /**
     * @var string
     */
    public $dataMergeTime;

    /**
     * @var string
     */
    public $deployMode;

    /**
     * @var string
     */
    public $deployType;

    /**
     * @var string
     */
    public $description;

    /**
     * @var string
     */
    public $diskType;

    /**
     * @var bool
     */
    public $enableBinlogService;

    /**
     * @var bool
     */
    public $enableClogService;

    /**
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
     * @var bool
     */
    public $enableReadWriteSplit;

    /**
     * @var string
     */
    public $instanceType;

    /**
     * @var int
     */
    public $iops;

    /**
     * @var int
     */
    public $lowerCaseTableNames;

    /**
     * @var string
     */
    public $masterIntranetAddressZone;

    /**
     * @var int
     */
    public $maxParallelQueryDegree;

    /**
     * @var string
     */
    public $odpVersion;

    /**
     * @var string
     */
    public $parameterTemplate;

    /**
     * @var string
     */
    public $payType;

    /**
     * @var string
     */
    public $primaryZone;

    /**
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
     * @var string
     */
    public $series;

    /**
     * @var string
     */
    public $status;

    /**
     * @var tenantConnections[]
     */
    public $tenantConnections;

    /**
     * @var string
     */
    public $tenantId;

    /**
     * @var string
     */
    public $tenantMaxConnections;

    /**
     * @var string
     */
    public $tenantMode;

    /**
     * @var string
     */
    public $tenantName;

    /**
     * @var tenantResource
     */
    public $tenantResource;

    /**
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
     * @var string
     */
    public $vpcId;
    protected $_name = [
        'availableZones' => 'AvailableZones',
        'charset' => 'Charset',
        'clogServiceStatus' => 'ClogServiceStatus',
        'collation' => 'Collation',
        'createTime' => 'CreateTime',
        'dataMergeTime' => 'DataMergeTime',
        'deployMode' => 'DeployMode',
        'deployType' => 'DeployType',
        'description' => 'Description',
        'diskType' => 'DiskType',
        'enableBinlogService' => 'EnableBinlogService',
        'enableClogService' => 'EnableClogService',
        'enableInternetAddressService' => 'EnableInternetAddressService',
        'enableParallelQuery' => 'EnableParallelQuery',
        'enableReadOnlyReplica' => 'EnableReadOnlyReplica',
        'enableReadWriteSplit' => 'EnableReadWriteSplit',
        'instanceType' => 'InstanceType',
        'iops' => 'Iops',
        'lowerCaseTableNames' => 'LowerCaseTableNames',
        'masterIntranetAddressZone' => 'MasterIntranetAddressZone',
        'maxParallelQueryDegree' => 'MaxParallelQueryDegree',
        'odpVersion' => 'OdpVersion',
        'parameterTemplate' => 'ParameterTemplate',
        'payType' => 'PayType',
        'primaryZone' => 'PrimaryZone',
        'primaryZoneDeployType' => 'PrimaryZoneDeployType',
        'readOnlyResource' => 'ReadOnlyResource',
        'recycleBinStatus' => 'RecycleBinStatus',
        'series' => 'Series',
        'status' => 'Status',
        'tenantConnections' => 'TenantConnections',
        'tenantId' => 'TenantId',
        'tenantMaxConnections' => 'TenantMaxConnections',
        'tenantMode' => 'TenantMode',
        'tenantName' => 'TenantName',
        'tenantResource' => 'TenantResource',
        'tenantZones' => 'TenantZones',
        'timeZone' => 'TimeZone',
        'version' => 'Version',
        'vpcId' => 'VpcId',
    ];

    public function validate()
    {
        if (\is_array($this->availableZones)) {
            Model::validateArray($this->availableZones);
        }
        if (null !== $this->readOnlyResource) {
            $this->readOnlyResource->validate();
        }
        if (\is_array($this->tenantConnections)) {
            Model::validateArray($this->tenantConnections);
        }
        if (null !== $this->tenantResource) {
            $this->tenantResource->validate();
        }
        if (\is_array($this->tenantZones)) {
            Model::validateArray($this->tenantZones);
        }
        parent::validate();
    }

    public function toArray($noStream = false)
    {
        $res = [];
        if (null !== $this->availableZones) {
            if (\is_array($this->availableZones)) {
                $res['AvailableZones'] = [];
                $n1 = 0;
                foreach ($this->availableZones as $item1) {
                    $res['AvailableZones'][$n1] = $item1;
                    ++$n1;
                }
            }
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

        if (null !== $this->iops) {
            $res['Iops'] = $this->iops;
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
            $res['ReadOnlyResource'] = null !== $this->readOnlyResource ? $this->readOnlyResource->toArray($noStream) : $this->readOnlyResource;
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
            if (\is_array($this->tenantConnections)) {
                $res['TenantConnections'] = [];
                $n1 = 0;
                foreach ($this->tenantConnections as $item1) {
                    $res['TenantConnections'][$n1] = null !== $item1 ? $item1->toArray($noStream) : $item1;
                    ++$n1;
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
            $res['TenantResource'] = null !== $this->tenantResource ? $this->tenantResource->toArray($noStream) : $this->tenantResource;
        }

        if (null !== $this->tenantZones) {
            if (\is_array($this->tenantZones)) {
                $res['TenantZones'] = [];
                $n1 = 0;
                foreach ($this->tenantZones as $item1) {
                    $res['TenantZones'][$n1] = null !== $item1 ? $item1->toArray($noStream) : $item1;
                    ++$n1;
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

    public function toMap($noStream = false)
    {
        return $this->toArray($noStream);
    }

    public static function fromMap($map = [])
    {
        $model = new self();
        if (isset($map['AvailableZones'])) {
            if (!empty($map['AvailableZones'])) {
                $model->availableZones = [];
                $n1 = 0;
                foreach ($map['AvailableZones'] as $item1) {
                    $model->availableZones[$n1] = $item1;
                    ++$n1;
                }
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

        if (isset($map['Iops'])) {
            $model->iops = $map['Iops'];
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
                $n1 = 0;
                foreach ($map['TenantConnections'] as $item1) {
                    $model->tenantConnections[$n1] = tenantConnections::fromMap($item1);
                    ++$n1;
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
                $n1 = 0;
                foreach ($map['TenantZones'] as $item1) {
                    $model->tenantZones[$n1] = tenantZones::fromMap($item1);
                    ++$n1;
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
