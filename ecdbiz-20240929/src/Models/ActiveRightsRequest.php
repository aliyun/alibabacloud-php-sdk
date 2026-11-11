<?php

// This file is auto-generated, don't edit it. Thanks.

namespace AlibabaCloud\SDK\EcdBiz\V20240929\Models;

use AlibabaCloud\Dara\Model;

class ActiveRightsRequest extends Model
{
    /**
     * @var string
     */
    public $clientIp;

    /**
     * @var string
     */
    public $customImageId;

    /**
     * @var int
     */
    public $dataDiskSize;

    /**
     * @var string
     */
    public $desktopType;

    /**
     * @var string
     */
    public $endTime;

    /**
     * @var int
     */
    public $hibernate;

    /**
     * @var string
     */
    public $language;

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
    public $resourceGroupId;

    /**
     * @var string[]
     */
    public $rightsAssignedUser;

    /**
     * @var string
     */
    public $rightsGpuSpec;

    /**
     * @var string[]
     */
    public $rightsIds;

    /**
     * @var string
     */
    public $rightsResourceArea;

    /**
     * @var string
     */
    public $rightsResourceImageOs;

    /**
     * @var string
     */
    public $rightsResourceRegion;

    /**
     * @var string
     */
    public $rightsResourceType;

    /**
     * @var string
     */
    public $rightsSpec;

    /**
     * @var int
     */
    public $rootDiskSize;

    /**
     * @var string
     */
    public $startTime;

    /**
     * @var string
     */
    public $vSwitchId;

    /**
     * @var string[]
     */
    public $workspaceIds;

    /**
     * @var string[]
     */
    public $wyidList;
    protected $_name = [
        'clientIp' => 'ClientIp',
        'customImageId' => 'CustomImageId',
        'dataDiskSize' => 'DataDiskSize',
        'desktopType' => 'DesktopType',
        'endTime' => 'EndTime',
        'hibernate' => 'Hibernate',
        'language' => 'Language',
        'officeSiteId' => 'OfficeSiteId',
        'policyGroupId' => 'PolicyGroupId',
        'resourceGroupId' => 'ResourceGroupId',
        'rightsAssignedUser' => 'RightsAssignedUser',
        'rightsGpuSpec' => 'RightsGpuSpec',
        'rightsIds' => 'RightsIds',
        'rightsResourceArea' => 'RightsResourceArea',
        'rightsResourceImageOs' => 'RightsResourceImageOs',
        'rightsResourceRegion' => 'RightsResourceRegion',
        'rightsResourceType' => 'RightsResourceType',
        'rightsSpec' => 'RightsSpec',
        'rootDiskSize' => 'RootDiskSize',
        'startTime' => 'StartTime',
        'vSwitchId' => 'VSwitchId',
        'workspaceIds' => 'WorkspaceIds',
        'wyidList' => 'WyidList',
    ];

    public function validate()
    {
        if (\is_array($this->rightsAssignedUser)) {
            Model::validateArray($this->rightsAssignedUser);
        }
        if (\is_array($this->rightsIds)) {
            Model::validateArray($this->rightsIds);
        }
        if (\is_array($this->workspaceIds)) {
            Model::validateArray($this->workspaceIds);
        }
        if (\is_array($this->wyidList)) {
            Model::validateArray($this->wyidList);
        }
        parent::validate();
    }

    public function toArray($noStream = false)
    {
        $res = [];
        if (null !== $this->clientIp) {
            $res['ClientIp'] = $this->clientIp;
        }

        if (null !== $this->customImageId) {
            $res['CustomImageId'] = $this->customImageId;
        }

        if (null !== $this->dataDiskSize) {
            $res['DataDiskSize'] = $this->dataDiskSize;
        }

        if (null !== $this->desktopType) {
            $res['DesktopType'] = $this->desktopType;
        }

        if (null !== $this->endTime) {
            $res['EndTime'] = $this->endTime;
        }

        if (null !== $this->hibernate) {
            $res['Hibernate'] = $this->hibernate;
        }

        if (null !== $this->language) {
            $res['Language'] = $this->language;
        }

        if (null !== $this->officeSiteId) {
            $res['OfficeSiteId'] = $this->officeSiteId;
        }

        if (null !== $this->policyGroupId) {
            $res['PolicyGroupId'] = $this->policyGroupId;
        }

        if (null !== $this->resourceGroupId) {
            $res['ResourceGroupId'] = $this->resourceGroupId;
        }

        if (null !== $this->rightsAssignedUser) {
            if (\is_array($this->rightsAssignedUser)) {
                $res['RightsAssignedUser'] = [];
                $n1 = 0;
                foreach ($this->rightsAssignedUser as $item1) {
                    $res['RightsAssignedUser'][$n1] = $item1;
                    ++$n1;
                }
            }
        }

        if (null !== $this->rightsGpuSpec) {
            $res['RightsGpuSpec'] = $this->rightsGpuSpec;
        }

        if (null !== $this->rightsIds) {
            if (\is_array($this->rightsIds)) {
                $res['RightsIds'] = [];
                $n1 = 0;
                foreach ($this->rightsIds as $item1) {
                    $res['RightsIds'][$n1] = $item1;
                    ++$n1;
                }
            }
        }

        if (null !== $this->rightsResourceArea) {
            $res['RightsResourceArea'] = $this->rightsResourceArea;
        }

        if (null !== $this->rightsResourceImageOs) {
            $res['RightsResourceImageOs'] = $this->rightsResourceImageOs;
        }

        if (null !== $this->rightsResourceRegion) {
            $res['RightsResourceRegion'] = $this->rightsResourceRegion;
        }

        if (null !== $this->rightsResourceType) {
            $res['RightsResourceType'] = $this->rightsResourceType;
        }

        if (null !== $this->rightsSpec) {
            $res['RightsSpec'] = $this->rightsSpec;
        }

        if (null !== $this->rootDiskSize) {
            $res['RootDiskSize'] = $this->rootDiskSize;
        }

        if (null !== $this->startTime) {
            $res['StartTime'] = $this->startTime;
        }

        if (null !== $this->vSwitchId) {
            $res['VSwitchId'] = $this->vSwitchId;
        }

        if (null !== $this->workspaceIds) {
            if (\is_array($this->workspaceIds)) {
                $res['WorkspaceIds'] = [];
                $n1 = 0;
                foreach ($this->workspaceIds as $item1) {
                    $res['WorkspaceIds'][$n1] = $item1;
                    ++$n1;
                }
            }
        }

        if (null !== $this->wyidList) {
            if (\is_array($this->wyidList)) {
                $res['WyidList'] = [];
                $n1 = 0;
                foreach ($this->wyidList as $item1) {
                    $res['WyidList'][$n1] = $item1;
                    ++$n1;
                }
            }
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
        if (isset($map['ClientIp'])) {
            $model->clientIp = $map['ClientIp'];
        }

        if (isset($map['CustomImageId'])) {
            $model->customImageId = $map['CustomImageId'];
        }

        if (isset($map['DataDiskSize'])) {
            $model->dataDiskSize = $map['DataDiskSize'];
        }

        if (isset($map['DesktopType'])) {
            $model->desktopType = $map['DesktopType'];
        }

        if (isset($map['EndTime'])) {
            $model->endTime = $map['EndTime'];
        }

        if (isset($map['Hibernate'])) {
            $model->hibernate = $map['Hibernate'];
        }

        if (isset($map['Language'])) {
            $model->language = $map['Language'];
        }

        if (isset($map['OfficeSiteId'])) {
            $model->officeSiteId = $map['OfficeSiteId'];
        }

        if (isset($map['PolicyGroupId'])) {
            $model->policyGroupId = $map['PolicyGroupId'];
        }

        if (isset($map['ResourceGroupId'])) {
            $model->resourceGroupId = $map['ResourceGroupId'];
        }

        if (isset($map['RightsAssignedUser'])) {
            if (!empty($map['RightsAssignedUser'])) {
                $model->rightsAssignedUser = [];
                $n1 = 0;
                foreach ($map['RightsAssignedUser'] as $item1) {
                    $model->rightsAssignedUser[$n1] = $item1;
                    ++$n1;
                }
            }
        }

        if (isset($map['RightsGpuSpec'])) {
            $model->rightsGpuSpec = $map['RightsGpuSpec'];
        }

        if (isset($map['RightsIds'])) {
            if (!empty($map['RightsIds'])) {
                $model->rightsIds = [];
                $n1 = 0;
                foreach ($map['RightsIds'] as $item1) {
                    $model->rightsIds[$n1] = $item1;
                    ++$n1;
                }
            }
        }

        if (isset($map['RightsResourceArea'])) {
            $model->rightsResourceArea = $map['RightsResourceArea'];
        }

        if (isset($map['RightsResourceImageOs'])) {
            $model->rightsResourceImageOs = $map['RightsResourceImageOs'];
        }

        if (isset($map['RightsResourceRegion'])) {
            $model->rightsResourceRegion = $map['RightsResourceRegion'];
        }

        if (isset($map['RightsResourceType'])) {
            $model->rightsResourceType = $map['RightsResourceType'];
        }

        if (isset($map['RightsSpec'])) {
            $model->rightsSpec = $map['RightsSpec'];
        }

        if (isset($map['RootDiskSize'])) {
            $model->rootDiskSize = $map['RootDiskSize'];
        }

        if (isset($map['StartTime'])) {
            $model->startTime = $map['StartTime'];
        }

        if (isset($map['VSwitchId'])) {
            $model->vSwitchId = $map['VSwitchId'];
        }

        if (isset($map['WorkspaceIds'])) {
            if (!empty($map['WorkspaceIds'])) {
                $model->workspaceIds = [];
                $n1 = 0;
                foreach ($map['WorkspaceIds'] as $item1) {
                    $model->workspaceIds[$n1] = $item1;
                    ++$n1;
                }
            }
        }

        if (isset($map['WyidList'])) {
            if (!empty($map['WyidList'])) {
                $model->wyidList = [];
                $n1 = 0;
                foreach ($map['WyidList'] as $item1) {
                    $model->wyidList[$n1] = $item1;
                    ++$n1;
                }
            }
        }

        return $model;
    }
}
