<?php

// This file is auto-generated, don't edit it. Thanks.

namespace AlibabaCloud\SDK\Edsaic\V20230930\Models\DescribeAndroidInstanceGroupsResponseBody;

use AlibabaCloud\Dara\Model;
use AlibabaCloud\SDK\Edsaic\V20230930\Models\DescribeAndroidInstanceGroupsResponseBody\instanceGroupModel\disks;

class instanceGroupModel extends Model
{
    /**
     * @var string
     */
    public $appInstanceGroupId;
    /**
     * @var string
     */
    public $architectureType;
    /**
     * @var int
     */
    public $availableInstanceAmount;
    /**
     * @var string
     */
    public $chargeType;
    /**
     * @var string
     */
    public $cpu;
    /**
     * @var disks[]
     */
    public $disks;
    /**
     * @var string
     */
    public $errorCode;
    /**
     * @var string
     */
    public $gmtCreate;
    /**
     * @var string
     */
    public $gmtExpired;
    /**
     * @var string
     */
    public $gmtModified;
    /**
     * @var string
     */
    public $imageId;
    /**
     * @var string
     */
    public $installedAppList;
    /**
     * @var string
     */
    public $instanceGroupId;
    /**
     * @var string
     */
    public $instanceGroupName;
    /**
     * @var string
     */
    public $instanceGroupSpec;
    /**
     * @var string
     */
    public $instanceGroupSpecDescribe;
    /**
     * @var string
     */
    public $instanceGroupStatus;
    /**
     * @var int
     */
    public $memory;
    /**
     * @var string
     */
    public $numberOfInstances;
    /**
     * @var string
     */
    public $officeSiteId;
    /**
     * @var string
     */
    public $policyGroupId;
    /**
     * @var string
     */
    public $regionId;
    /**
     * @var string
     */
    public $renderingType;
    /**
     * @var int
     */
    public $resolutionHeight;
    /**
     * @var int
     */
    public $resolutionWidth;
    /**
     * @var string
     */
    public $saleMode;
    /**
     * @var string
     */
    public $systemVersion;
    /**
     * @var string
     */
    public $vSwitchId;
    protected $_name = [
        'appInstanceGroupId'        => 'AppInstanceGroupId',
        'architectureType'          => 'ArchitectureType',
        'availableInstanceAmount'   => 'AvailableInstanceAmount',
        'chargeType'                => 'ChargeType',
        'cpu'                       => 'Cpu',
        'disks'                     => 'Disks',
        'errorCode'                 => 'ErrorCode',
        'gmtCreate'                 => 'GmtCreate',
        'gmtExpired'                => 'GmtExpired',
        'gmtModified'               => 'GmtModified',
        'imageId'                   => 'ImageId',
        'installedAppList'          => 'InstalledAppList',
        'instanceGroupId'           => 'InstanceGroupId',
        'instanceGroupName'         => 'InstanceGroupName',
        'instanceGroupSpec'         => 'InstanceGroupSpec',
        'instanceGroupSpecDescribe' => 'InstanceGroupSpecDescribe',
        'instanceGroupStatus'       => 'InstanceGroupStatus',
        'memory'                    => 'Memory',
        'numberOfInstances'         => 'NumberOfInstances',
        'officeSiteId'              => 'OfficeSiteId',
        'policyGroupId'             => 'PolicyGroupId',
        'regionId'                  => 'RegionId',
        'renderingType'             => 'RenderingType',
        'resolutionHeight'          => 'ResolutionHeight',
        'resolutionWidth'           => 'ResolutionWidth',
        'saleMode'                  => 'SaleMode',
        'systemVersion'             => 'SystemVersion',
        'vSwitchId'                 => 'VSwitchId',
    ];

    public function validate()
    {
        if (\is_array($this->disks)) {
            Model::validateArray($this->disks);
        }
        parent::validate();
    }

    public function toArray($noStream = false)
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
            if (\is_array($this->disks)) {
                $res['Disks'] = [];
                $n1           = 0;
                foreach ($this->disks as $item1) {
                    $res['Disks'][$n1++] = null !== $item1 ? $item1->toArray($noStream) : $item1;
                }
            }
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

    public function toMap($noStream = false)
    {
        return $this->toArray($noStream);
    }

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
                $n1           = 0;
                foreach ($map['Disks'] as $item1) {
                    $model->disks[$n1++] = disks::fromMap($item1);
                }
            }
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
