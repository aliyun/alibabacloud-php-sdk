<?php

// This file is auto-generated, don't edit it. Thanks.

namespace AlibabaCloud\SDK\Edsaic\V20230930\Models\DescribeAndroidInstanceGroupsResponseBody;

use AlibabaCloud\SDK\Edsaic\V20230930\Models\DescribeAndroidInstanceGroupsResponseBody\instanceGroupModel\disks;
use AlibabaCloud\Tea\Model;

class instanceGroupModel extends Model
{
    /**
     * @description The ID of the delivery group.
     *
     * @example aig-48xr63m4dybjk****
     *
     * @var string
     */
    public $appInstanceGroupId;

    /**
     * @description The type of the architecture.
     *
     * @example ARM
     *
     * @var string
     */
    public $architectureType;

    /**
     * @description The number of available instances.
     *
     * >  Available instances are those not in the Deleting or Deleted state.
     *
     * @example 5
     *
     * @var int
     */
    public $availableInstanceAmount;

    /**
     * @description The billing method.
     *
     * @example PrePaid
     *
     * @var string
     */
    public $chargeType;

    /**
     * @description The number of vCPUs.
     *
     * @example 8
     *
     * @var string
     */
    public $cpu;

    /**
     * @description The disks.
     *
     * @var disks[]
     */
    public $disks;

    /**
     * @example true
     *
     * @var bool
     */
    public $enableIpv6;

    /**
     * @description The cause of the creation failure.
     *
     * @example 0
     *
     * @var string
     */
    public $errorCode;

    /**
     * @description The time when the instance group was created.
     *
     * @example 2024-02-01 10:56:36
     *
     * @var string
     */
    public $gmtCreate;

    /**
     * @description The time when the subscription instance group expires.
     *
     * @example 2027-06-29 07:25:31
     *
     * @var string
     */
    public $gmtExpired;

    /**
     * @description The time when the instance group was updated.
     *
     * @example 2024-02-01 10:56:36
     *
     * @var string
     */
    public $gmtModified;

    /**
     * @description The ID of the image.
     *
     * @example imgc-06zyt9m93zwax****
     *
     * @var string
     */
    public $imageId;

    /**
     * @description The list of installed applications.
     *
     * @example "TikTok","WeChat"
     *
     * @var string
     */
    public $installedAppList;

    /**
     * @description The ID of the instance group.
     *
     * @example ag-h67a2cs0zprfdh****
     *
     * @var string
     */
    public $instanceGroupId;

    /**
     * @description The name of the instance group.
     *
     * @example defaultInstanceGroup
     *
     * @var string
     */
    public $instanceGroupName;

    /**
     * @description The specifications of the instance group.
     *
     * @example acp.basic.small
     *
     * @var string
     */
    public $instanceGroupSpec;

    /**
     * @description The description of the instance group specifications.
     *
     * @example ARM-2vCPU4GiB 32GiB
     *
     * @var string
     */
    public $instanceGroupSpecDescribe;

    /**
     * @description The status of the instance group.
     *
     * @example RUNNING
     *
     * @var string
     */
    public $instanceGroupStatus;

    /**
     * @example 50
     *
     * @var int
     */
    public $ipv6Bandwidth;

    /**
     * @description The memory size.
     *
     * @example 8
     *
     * @var int
     */
    public $memory;

    /**
     * @description The number of instances in the instance group.
     *
     * @example 10
     *
     * @var string
     */
    public $numberOfInstances;

    /**
     * @description The ID of the network.
     *
     * @example cn-shanghai+dir-030598****
     *
     * @var string
     */
    public $officeSiteId;

    /**
     * @description The ID of the policy.
     *
     * @example pg-c6n38xucps8kl****
     *
     * @var string
     */
    public $policyGroupId;

    /**
     * @description The ID of the region.
     *
     * @example cn-hangzhou
     *
     * @var string
     */
    public $regionId;

    /**
     * @description The rendering mode of the instance group.
     *
     * Valid values:
     *
     *   GPURemote: GPU remote rendering.
     *   CPU: CPU rendering.
     *   GPUocal: GPU local rendering.
     *
     * @example CPU
     *
     * @var string
     */
    public $renderingType;

    /**
     * @description The height of the resolution.
     *
     * @example 1280
     *
     * @var int
     */
    public $resolutionHeight;

    /**
     * @description The width of the resolution.
     *
     * @example 720
     *
     * @var int
     */
    public $resolutionWidth;

    /**
     * @description The sales mode.
     *
     * @example standard
     *
     * @var string
     */
    public $saleMode;

    /**
     * @description The version of the operating system.
     *
     * @example Android 12
     *
     * @var string
     */
    public $systemVersion;

    /**
     * @description The ID of the vSwitch.
     *
     * @example vsw-t4n0yqs009ho024wt****
     *
     * @var string
     */
    public $vSwitchId;
    protected $_name = [
        'appInstanceGroupId' => 'AppInstanceGroupId',
        'architectureType' => 'ArchitectureType',
        'availableInstanceAmount' => 'AvailableInstanceAmount',
        'chargeType' => 'ChargeType',
        'cpu' => 'Cpu',
        'disks' => 'Disks',
        'enableIpv6' => 'EnableIpv6',
        'errorCode' => 'ErrorCode',
        'gmtCreate' => 'GmtCreate',
        'gmtExpired' => 'GmtExpired',
        'gmtModified' => 'GmtModified',
        'imageId' => 'ImageId',
        'installedAppList' => 'InstalledAppList',
        'instanceGroupId' => 'InstanceGroupId',
        'instanceGroupName' => 'InstanceGroupName',
        'instanceGroupSpec' => 'InstanceGroupSpec',
        'instanceGroupSpecDescribe' => 'InstanceGroupSpecDescribe',
        'instanceGroupStatus' => 'InstanceGroupStatus',
        'ipv6Bandwidth' => 'Ipv6Bandwidth',
        'memory' => 'Memory',
        'numberOfInstances' => 'NumberOfInstances',
        'officeSiteId' => 'OfficeSiteId',
        'policyGroupId' => 'PolicyGroupId',
        'regionId' => 'RegionId',
        'renderingType' => 'RenderingType',
        'resolutionHeight' => 'ResolutionHeight',
        'resolutionWidth' => 'ResolutionWidth',
        'saleMode' => 'SaleMode',
        'systemVersion' => 'SystemVersion',
        'vSwitchId' => 'VSwitchId',
    ];

    public function validate() {}

    public function toMap()
    {
        $res = [];
        if (null !== $this->appInstanceGroupId) {
            $res['AppInstanceGroupId'] = $this->appInstanceGroupId;
        }
        if (null !== $this->architectureType) {
            $res['ArchitectureType'] = $this->architectureType;
        }
        if (null !== $this->availableInstanceAmount) {
            $res['AvailableInstanceAmount'] = $this->availableInstanceAmount;
        }
        if (null !== $this->chargeType) {
            $res['ChargeType'] = $this->chargeType;
        }
        if (null !== $this->cpu) {
            $res['Cpu'] = $this->cpu;
        }
        if (null !== $this->disks) {
            $res['Disks'] = [];
            if (null !== $this->disks && \is_array($this->disks)) {
                $n = 0;
                foreach ($this->disks as $item) {
                    $res['Disks'][$n++] = null !== $item ? $item->toMap() : $item;
                }
            }
        }
        if (null !== $this->enableIpv6) {
            $res['EnableIpv6'] = $this->enableIpv6;
        }
        if (null !== $this->errorCode) {
            $res['ErrorCode'] = $this->errorCode;
        }
        if (null !== $this->gmtCreate) {
            $res['GmtCreate'] = $this->gmtCreate;
        }
        if (null !== $this->gmtExpired) {
            $res['GmtExpired'] = $this->gmtExpired;
        }
        if (null !== $this->gmtModified) {
            $res['GmtModified'] = $this->gmtModified;
        }
        if (null !== $this->imageId) {
            $res['ImageId'] = $this->imageId;
        }
        if (null !== $this->installedAppList) {
            $res['InstalledAppList'] = $this->installedAppList;
        }
        if (null !== $this->instanceGroupId) {
            $res['InstanceGroupId'] = $this->instanceGroupId;
        }
        if (null !== $this->instanceGroupName) {
            $res['InstanceGroupName'] = $this->instanceGroupName;
        }
        if (null !== $this->instanceGroupSpec) {
            $res['InstanceGroupSpec'] = $this->instanceGroupSpec;
        }
        if (null !== $this->instanceGroupSpecDescribe) {
            $res['InstanceGroupSpecDescribe'] = $this->instanceGroupSpecDescribe;
        }
        if (null !== $this->instanceGroupStatus) {
            $res['InstanceGroupStatus'] = $this->instanceGroupStatus;
        }
        if (null !== $this->ipv6Bandwidth) {
            $res['Ipv6Bandwidth'] = $this->ipv6Bandwidth;
        }
        if (null !== $this->memory) {
            $res['Memory'] = $this->memory;
        }
        if (null !== $this->numberOfInstances) {
            $res['NumberOfInstances'] = $this->numberOfInstances;
        }
        if (null !== $this->officeSiteId) {
            $res['OfficeSiteId'] = $this->officeSiteId;
        }
        if (null !== $this->policyGroupId) {
            $res['PolicyGroupId'] = $this->policyGroupId;
        }
        if (null !== $this->regionId) {
            $res['RegionId'] = $this->regionId;
        }
        if (null !== $this->renderingType) {
            $res['RenderingType'] = $this->renderingType;
        }
        if (null !== $this->resolutionHeight) {
            $res['ResolutionHeight'] = $this->resolutionHeight;
        }
        if (null !== $this->resolutionWidth) {
            $res['ResolutionWidth'] = $this->resolutionWidth;
        }
        if (null !== $this->saleMode) {
            $res['SaleMode'] = $this->saleMode;
        }
        if (null !== $this->systemVersion) {
            $res['SystemVersion'] = $this->systemVersion;
        }
        if (null !== $this->vSwitchId) {
            $res['VSwitchId'] = $this->vSwitchId;
        }

        return $res;
    }

    /**
     * @param array $map
     *
     * @return instanceGroupModel
     */
    public static function fromMap($map = [])
    {
        $model = new self();
        if (isset($map['AppInstanceGroupId'])) {
            $model->appInstanceGroupId = $map['AppInstanceGroupId'];
        }
        if (isset($map['ArchitectureType'])) {
            $model->architectureType = $map['ArchitectureType'];
        }
        if (isset($map['AvailableInstanceAmount'])) {
            $model->availableInstanceAmount = $map['AvailableInstanceAmount'];
        }
        if (isset($map['ChargeType'])) {
            $model->chargeType = $map['ChargeType'];
        }
        if (isset($map['Cpu'])) {
            $model->cpu = $map['Cpu'];
        }
        if (isset($map['Disks'])) {
            if (!empty($map['Disks'])) {
                $model->disks = [];
                $n = 0;
                foreach ($map['Disks'] as $item) {
                    $model->disks[$n++] = null !== $item ? disks::fromMap($item) : $item;
                }
            }
        }
        if (isset($map['EnableIpv6'])) {
            $model->enableIpv6 = $map['EnableIpv6'];
        }
        if (isset($map['ErrorCode'])) {
            $model->errorCode = $map['ErrorCode'];
        }
        if (isset($map['GmtCreate'])) {
            $model->gmtCreate = $map['GmtCreate'];
        }
        if (isset($map['GmtExpired'])) {
            $model->gmtExpired = $map['GmtExpired'];
        }
        if (isset($map['GmtModified'])) {
            $model->gmtModified = $map['GmtModified'];
        }
        if (isset($map['ImageId'])) {
            $model->imageId = $map['ImageId'];
        }
        if (isset($map['InstalledAppList'])) {
            $model->installedAppList = $map['InstalledAppList'];
        }
        if (isset($map['InstanceGroupId'])) {
            $model->instanceGroupId = $map['InstanceGroupId'];
        }
        if (isset($map['InstanceGroupName'])) {
            $model->instanceGroupName = $map['InstanceGroupName'];
        }
        if (isset($map['InstanceGroupSpec'])) {
            $model->instanceGroupSpec = $map['InstanceGroupSpec'];
        }
        if (isset($map['InstanceGroupSpecDescribe'])) {
            $model->instanceGroupSpecDescribe = $map['InstanceGroupSpecDescribe'];
        }
        if (isset($map['InstanceGroupStatus'])) {
            $model->instanceGroupStatus = $map['InstanceGroupStatus'];
        }
        if (isset($map['Ipv6Bandwidth'])) {
            $model->ipv6Bandwidth = $map['Ipv6Bandwidth'];
        }
        if (isset($map['Memory'])) {
            $model->memory = $map['Memory'];
        }
        if (isset($map['NumberOfInstances'])) {
            $model->numberOfInstances = $map['NumberOfInstances'];
        }
        if (isset($map['OfficeSiteId'])) {
            $model->officeSiteId = $map['OfficeSiteId'];
        }
        if (isset($map['PolicyGroupId'])) {
            $model->policyGroupId = $map['PolicyGroupId'];
        }
        if (isset($map['RegionId'])) {
            $model->regionId = $map['RegionId'];
        }
        if (isset($map['RenderingType'])) {
            $model->renderingType = $map['RenderingType'];
        }
        if (isset($map['ResolutionHeight'])) {
            $model->resolutionHeight = $map['ResolutionHeight'];
        }
        if (isset($map['ResolutionWidth'])) {
            $model->resolutionWidth = $map['ResolutionWidth'];
        }
        if (isset($map['SaleMode'])) {
            $model->saleMode = $map['SaleMode'];
        }
        if (isset($map['SystemVersion'])) {
            $model->systemVersion = $map['SystemVersion'];
        }
        if (isset($map['VSwitchId'])) {
            $model->vSwitchId = $map['VSwitchId'];
        }

        return $model;
    }
}
