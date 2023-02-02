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
     * @example utf8mb4
     *
     * @var string
     */
    public $charset;

    /**
     * @description The enabling status of the Clog service.
     * - ONLINE: The Clog service is running.
     * @example CLOSED
     *
     * @var string
     */
    public $clogServiceStatus;

    /**
     * @example utf8mb4_general_ci
     *
     * @var string
     */
    public $collation;

    /**
     * @description The time when the tenant was created.
     *
     * @example 2021-09-17 15:52:17
     *
     * @var string
     */
    public $createTime;

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
     * @example PayCore business database
     *
     * @var string
     */
    public $description;

    /**
     * @var string
     */
    public $diskType;

    /**
     * @description Indicates whether the Clog service is available. To enable the Clog service, submit a ticket.
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
     * @example false
     *
     * @var bool
     */
    public $enableReadWriteSplit;

    /**
     * @var string
     */
    public $instanceType;

    /**
     * @example cn-hangzhou-h
     *
     * @var string
     */
    public $masterIntranetAddressZone;

    /**
     * @var string
     */
    public $payType;

    /**
     * @description The primary zone of the tenant.
     *
     * @example cn-hangzhou-i
     *
     * @var string
     */
    public $primaryZone;

    /**
     * @example Random
     *
     * @var string
     */
    public $primaryZoneDeployType;

    /**
     * @var string
     */
    public $series;

    /**
     * @description The status of the tenant.
     * - WHITE_LIST_MODIFYING: The whitelist is being modified.
     * @example ONLINE
     *
     * @var string
     */
    public $status;

    /**
     * @description The connection access information of the tenant.
     *
     * @var tenantConnections[]
     */
    public $tenantConnections;

    /**
     * @description The ID of the tenant.
     *
     * @example t33h8y08k****
     *
     * @var string
     */
    public $tenantId;

    /**
     * @description The tenant mode.
     * MySQL
     * @example Oracle
     *
     * @var string
     */
    public $tenantMode;

    /**
     * @description The name of the tenant.
     *
     * @example pay_online
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
     * @description The zone information of the tenant.
     *
     * @var tenantZones[]
     */
    public $tenantZones;

    /**
     * @description The ID of the VPC.
     * If no suitable VPC is available, create a VPC as prompted. For more information, see "What is a VPC".
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
