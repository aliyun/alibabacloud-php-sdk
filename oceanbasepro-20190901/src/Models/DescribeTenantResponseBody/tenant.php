<?php

// This file is auto-generated, don't edit it. Thanks.

namespace AlibabaCloud\SDK\OceanBasePro\V20190901\Models\DescribeTenantResponseBody;

use AlibabaCloud\SDK\OceanBasePro\V20190901\Models\DescribeTenantResponseBody\tenant\tenantConnections;
use AlibabaCloud\SDK\OceanBasePro\V20190901\Models\DescribeTenantResponseBody\tenant\tenantResource;
use AlibabaCloud\SDK\OceanBasePro\V20190901\Models\DescribeTenantResponseBody\tenant\tenantZones;
use AlibabaCloud\Tea\Model;

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
    public $enableClogService;

    /**
     * @var bool
     */
    public $enableInternetAddressService;

    /**
     * @var bool
     */
    public $enableReadWriteSplit;

    /**
     * @var string
     */
    public $instanceType;

    /**
     * @var string
     */
    public $masterIntranetAddressZone;

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
    public $vpcId;
    protected $_name = [
        'availableZones'               => 'AvailableZones',
        'charset'                      => 'Charset',
        'clogServiceStatus'            => 'ClogServiceStatus',
        'collation'                    => 'Collation',
        'createTime'                   => 'CreateTime',
        'deployMode'                   => 'DeployMode',
        'deployType'                   => 'DeployType',
        'description'                  => 'Description',
        'diskType'                     => 'DiskType',
        'enableClogService'            => 'EnableClogService',
        'enableInternetAddressService' => 'EnableInternetAddressService',
        'enableReadWriteSplit'         => 'EnableReadWriteSplit',
        'instanceType'                 => 'InstanceType',
        'masterIntranetAddressZone'    => 'MasterIntranetAddressZone',
        'payType'                      => 'PayType',
        'primaryZone'                  => 'PrimaryZone',
        'primaryZoneDeployType'        => 'PrimaryZoneDeployType',
        'series'                       => 'Series',
        'status'                       => 'Status',
        'tenantConnections'            => 'TenantConnections',
        'tenantId'                     => 'TenantId',
        'tenantMode'                   => 'TenantMode',
        'tenantName'                   => 'TenantName',
        'tenantResource'               => 'TenantResource',
        'tenantZones'                  => 'TenantZones',
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
        if (null !== $this->enableClogService) {
            $res['EnableClogService'] = $this->enableClogService;
        }
        if (null !== $this->enableInternetAddressService) {
            $res['EnableInternetAddressService'] = $this->enableInternetAddressService;
        }
        if (null !== $this->enableReadWriteSplit) {
            $res['EnableReadWriteSplit'] = $this->enableReadWriteSplit;
        }
        if (null !== $this->instanceType) {
            $res['InstanceType'] = $this->instanceType;
        }
        if (null !== $this->masterIntranetAddressZone) {
            $res['MasterIntranetAddressZone'] = $this->masterIntranetAddressZone;
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
        if (isset($map['EnableClogService'])) {
            $model->enableClogService = $map['EnableClogService'];
        }
        if (isset($map['EnableInternetAddressService'])) {
            $model->enableInternetAddressService = $map['EnableInternetAddressService'];
        }
        if (isset($map['EnableReadWriteSplit'])) {
            $model->enableReadWriteSplit = $map['EnableReadWriteSplit'];
        }
        if (isset($map['InstanceType'])) {
            $model->instanceType = $map['InstanceType'];
        }
        if (isset($map['MasterIntranetAddressZone'])) {
            $model->masterIntranetAddressZone = $map['MasterIntranetAddressZone'];
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
        if (isset($map['VpcId'])) {
            $model->vpcId = $map['VpcId'];
        }

        return $model;
    }
}
