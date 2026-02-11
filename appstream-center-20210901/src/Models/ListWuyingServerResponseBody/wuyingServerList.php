<?php

// This file is auto-generated, don't edit it. Thanks.

namespace AlibabaCloud\SDK\Appstreamcenter\V20210901\Models\ListWuyingServerResponseBody;

use AlibabaCloud\Dara\Model;
use AlibabaCloud\SDK\Appstreamcenter\V20210901\Models\ListWuyingServerResponseBody\wuyingServerList\dataDisk;
use AlibabaCloud\SDK\Appstreamcenter\V20210901\Models\ListWuyingServerResponseBody\wuyingServerList\instanceInfoList;
use AlibabaCloud\SDK\Appstreamcenter\V20210901\Models\ListWuyingServerResponseBody\wuyingServerList\serverInstanceTypeInfo;
use AlibabaCloud\SDK\Appstreamcenter\V20210901\Models\ListWuyingServerResponseBody\wuyingServerList\sessions;

class wuyingServerList extends Model
{
    /**
     * @var string
     */
    public $addVirtualNodePoolStatus;

    /**
     * @var int
     */
    public $aliUid;

    /**
     * @var int
     */
    public $bandwidth;

    /**
     * @var string
     */
    public $bizRegionId;

    /**
     * @var string
     */
    public $chargeType;

    /**
     * @var string
     */
    public $createTime;

    /**
     * @var dataDisk[]
     */
    public $dataDisk;

    /**
     * @var string
     */
    public $expiredTime;

    /**
     * @var string
     */
    public $fotaVersion;

    /**
     * @var string
     */
    public $imageId;

    /**
     * @var string
     */
    public $imageName;

    /**
     * @var instanceInfoList[]
     */
    public $instanceInfoList;

    /**
     * @var float
     */
    public $maxPrice;

    /**
     * @var string
     */
    public $networkInterfaceIp;

    /**
     * @var string
     */
    public $officeSiteId;

    /**
     * @var string
     */
    public $officeSiteName;

    /**
     * @var string
     */
    public $officeSiteType;

    /**
     * @var string
     */
    public $osType;

    /**
     * @var string[]
     */
    public $policyGroupIdList;

    /**
     * @var string
     */
    public $resourceSessionStatus;

    /**
     * @var string[]
     */
    public $securityGroupIds;

    /**
     * @var serverInstanceTypeInfo
     */
    public $serverInstanceTypeInfo;

    /**
     * @var sessions[]
     */
    public $sessions;

    /**
     * @var string
     */
    public $status;

    /**
     * @var string
     */
    public $subPayType;

    /**
     * @var string
     */
    public $systemDiskCategory;

    /**
     * @var string
     */
    public $systemDiskId;

    /**
     * @var string
     */
    public $systemDiskPerformanceLevel;

    /**
     * @var int
     */
    public $systemDiskSize;

    /**
     * @var string
     */
    public $timerGroupId;

    /**
     * @var string[]
     */
    public $users;

    /**
     * @var string
     */
    public $virtualKubeletIp;

    /**
     * @var string
     */
    public $virtualNodePoolId;

    /**
     * @var string
     */
    public $wuyingServerId;

    /**
     * @var string
     */
    public $wuyingServerName;
    protected $_name = [
        'addVirtualNodePoolStatus' => 'AddVirtualNodePoolStatus',
        'aliUid' => 'AliUid',
        'bandwidth' => 'Bandwidth',
        'bizRegionId' => 'BizRegionId',
        'chargeType' => 'ChargeType',
        'createTime' => 'CreateTime',
        'dataDisk' => 'DataDisk',
        'expiredTime' => 'ExpiredTime',
        'fotaVersion' => 'FotaVersion',
        'imageId' => 'ImageId',
        'imageName' => 'ImageName',
        'instanceInfoList' => 'InstanceInfoList',
        'maxPrice' => 'MaxPrice',
        'networkInterfaceIp' => 'NetworkInterfaceIp',
        'officeSiteId' => 'OfficeSiteId',
        'officeSiteName' => 'OfficeSiteName',
        'officeSiteType' => 'OfficeSiteType',
        'osType' => 'OsType',
        'policyGroupIdList' => 'PolicyGroupIdList',
        'resourceSessionStatus' => 'ResourceSessionStatus',
        'securityGroupIds' => 'SecurityGroupIds',
        'serverInstanceTypeInfo' => 'ServerInstanceTypeInfo',
        'sessions' => 'Sessions',
        'status' => 'Status',
        'subPayType' => 'SubPayType',
        'systemDiskCategory' => 'SystemDiskCategory',
        'systemDiskId' => 'SystemDiskId',
        'systemDiskPerformanceLevel' => 'SystemDiskPerformanceLevel',
        'systemDiskSize' => 'SystemDiskSize',
        'timerGroupId' => 'TimerGroupId',
        'users' => 'Users',
        'virtualKubeletIp' => 'VirtualKubeletIp',
        'virtualNodePoolId' => 'VirtualNodePoolId',
        'wuyingServerId' => 'WuyingServerId',
        'wuyingServerName' => 'WuyingServerName',
    ];

    public function validate()
    {
        if (\is_array($this->dataDisk)) {
            Model::validateArray($this->dataDisk);
        }
        if (\is_array($this->instanceInfoList)) {
            Model::validateArray($this->instanceInfoList);
        }
        if (\is_array($this->policyGroupIdList)) {
            Model::validateArray($this->policyGroupIdList);
        }
        if (\is_array($this->securityGroupIds)) {
            Model::validateArray($this->securityGroupIds);
        }
        if (null !== $this->serverInstanceTypeInfo) {
            $this->serverInstanceTypeInfo->validate();
        }
        if (\is_array($this->sessions)) {
            Model::validateArray($this->sessions);
        }
        if (\is_array($this->users)) {
            Model::validateArray($this->users);
        }
        parent::validate();
    }

    public function toArray($noStream = false)
    {
        $res = [];
        if (null !== $this->addVirtualNodePoolStatus) {
            $res['AddVirtualNodePoolStatus'] = $this->addVirtualNodePoolStatus;
        }

        if (null !== $this->aliUid) {
            $res['AliUid'] = $this->aliUid;
        }

        if (null !== $this->bandwidth) {
            $res['Bandwidth'] = $this->bandwidth;
        }

        if (null !== $this->bizRegionId) {
            $res['BizRegionId'] = $this->bizRegionId;
        }

        if (null !== $this->chargeType) {
            $res['ChargeType'] = $this->chargeType;
        }

        if (null !== $this->createTime) {
            $res['CreateTime'] = $this->createTime;
        }

        if (null !== $this->dataDisk) {
            if (\is_array($this->dataDisk)) {
                $res['DataDisk'] = [];
                $n1 = 0;
                foreach ($this->dataDisk as $item1) {
                    $res['DataDisk'][$n1] = null !== $item1 ? $item1->toArray($noStream) : $item1;
                    ++$n1;
                }
            }
        }

        if (null !== $this->expiredTime) {
            $res['ExpiredTime'] = $this->expiredTime;
        }

        if (null !== $this->fotaVersion) {
            $res['FotaVersion'] = $this->fotaVersion;
        }

        if (null !== $this->imageId) {
            $res['ImageId'] = $this->imageId;
        }

        if (null !== $this->imageName) {
            $res['ImageName'] = $this->imageName;
        }

        if (null !== $this->instanceInfoList) {
            if (\is_array($this->instanceInfoList)) {
                $res['InstanceInfoList'] = [];
                $n1 = 0;
                foreach ($this->instanceInfoList as $item1) {
                    $res['InstanceInfoList'][$n1] = null !== $item1 ? $item1->toArray($noStream) : $item1;
                    ++$n1;
                }
            }
        }

        if (null !== $this->maxPrice) {
            $res['MaxPrice'] = $this->maxPrice;
        }

        if (null !== $this->networkInterfaceIp) {
            $res['NetworkInterfaceIp'] = $this->networkInterfaceIp;
        }

        if (null !== $this->officeSiteId) {
            $res['OfficeSiteId'] = $this->officeSiteId;
        }

        if (null !== $this->officeSiteName) {
            $res['OfficeSiteName'] = $this->officeSiteName;
        }

        if (null !== $this->officeSiteType) {
            $res['OfficeSiteType'] = $this->officeSiteType;
        }

        if (null !== $this->osType) {
            $res['OsType'] = $this->osType;
        }

        if (null !== $this->policyGroupIdList) {
            if (\is_array($this->policyGroupIdList)) {
                $res['PolicyGroupIdList'] = [];
                $n1 = 0;
                foreach ($this->policyGroupIdList as $item1) {
                    $res['PolicyGroupIdList'][$n1] = $item1;
                    ++$n1;
                }
            }
        }

        if (null !== $this->resourceSessionStatus) {
            $res['ResourceSessionStatus'] = $this->resourceSessionStatus;
        }

        if (null !== $this->securityGroupIds) {
            if (\is_array($this->securityGroupIds)) {
                $res['SecurityGroupIds'] = [];
                $n1 = 0;
                foreach ($this->securityGroupIds as $item1) {
                    $res['SecurityGroupIds'][$n1] = $item1;
                    ++$n1;
                }
            }
        }

        if (null !== $this->serverInstanceTypeInfo) {
            $res['ServerInstanceTypeInfo'] = null !== $this->serverInstanceTypeInfo ? $this->serverInstanceTypeInfo->toArray($noStream) : $this->serverInstanceTypeInfo;
        }

        if (null !== $this->sessions) {
            if (\is_array($this->sessions)) {
                $res['Sessions'] = [];
                $n1 = 0;
                foreach ($this->sessions as $item1) {
                    $res['Sessions'][$n1] = null !== $item1 ? $item1->toArray($noStream) : $item1;
                    ++$n1;
                }
            }
        }

        if (null !== $this->status) {
            $res['Status'] = $this->status;
        }

        if (null !== $this->subPayType) {
            $res['SubPayType'] = $this->subPayType;
        }

        if (null !== $this->systemDiskCategory) {
            $res['SystemDiskCategory'] = $this->systemDiskCategory;
        }

        if (null !== $this->systemDiskId) {
            $res['SystemDiskId'] = $this->systemDiskId;
        }

        if (null !== $this->systemDiskPerformanceLevel) {
            $res['SystemDiskPerformanceLevel'] = $this->systemDiskPerformanceLevel;
        }

        if (null !== $this->systemDiskSize) {
            $res['SystemDiskSize'] = $this->systemDiskSize;
        }

        if (null !== $this->timerGroupId) {
            $res['TimerGroupId'] = $this->timerGroupId;
        }

        if (null !== $this->users) {
            if (\is_array($this->users)) {
                $res['Users'] = [];
                $n1 = 0;
                foreach ($this->users as $item1) {
                    $res['Users'][$n1] = $item1;
                    ++$n1;
                }
            }
        }

        if (null !== $this->virtualKubeletIp) {
            $res['VirtualKubeletIp'] = $this->virtualKubeletIp;
        }

        if (null !== $this->virtualNodePoolId) {
            $res['VirtualNodePoolId'] = $this->virtualNodePoolId;
        }

        if (null !== $this->wuyingServerId) {
            $res['WuyingServerId'] = $this->wuyingServerId;
        }

        if (null !== $this->wuyingServerName) {
            $res['WuyingServerName'] = $this->wuyingServerName;
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
        if (isset($map['AddVirtualNodePoolStatus'])) {
            $model->addVirtualNodePoolStatus = $map['AddVirtualNodePoolStatus'];
        }

        if (isset($map['AliUid'])) {
            $model->aliUid = $map['AliUid'];
        }

        if (isset($map['Bandwidth'])) {
            $model->bandwidth = $map['Bandwidth'];
        }

        if (isset($map['BizRegionId'])) {
            $model->bizRegionId = $map['BizRegionId'];
        }

        if (isset($map['ChargeType'])) {
            $model->chargeType = $map['ChargeType'];
        }

        if (isset($map['CreateTime'])) {
            $model->createTime = $map['CreateTime'];
        }

        if (isset($map['DataDisk'])) {
            if (!empty($map['DataDisk'])) {
                $model->dataDisk = [];
                $n1 = 0;
                foreach ($map['DataDisk'] as $item1) {
                    $model->dataDisk[$n1] = dataDisk::fromMap($item1);
                    ++$n1;
                }
            }
        }

        if (isset($map['ExpiredTime'])) {
            $model->expiredTime = $map['ExpiredTime'];
        }

        if (isset($map['FotaVersion'])) {
            $model->fotaVersion = $map['FotaVersion'];
        }

        if (isset($map['ImageId'])) {
            $model->imageId = $map['ImageId'];
        }

        if (isset($map['ImageName'])) {
            $model->imageName = $map['ImageName'];
        }

        if (isset($map['InstanceInfoList'])) {
            if (!empty($map['InstanceInfoList'])) {
                $model->instanceInfoList = [];
                $n1 = 0;
                foreach ($map['InstanceInfoList'] as $item1) {
                    $model->instanceInfoList[$n1] = instanceInfoList::fromMap($item1);
                    ++$n1;
                }
            }
        }

        if (isset($map['MaxPrice'])) {
            $model->maxPrice = $map['MaxPrice'];
        }

        if (isset($map['NetworkInterfaceIp'])) {
            $model->networkInterfaceIp = $map['NetworkInterfaceIp'];
        }

        if (isset($map['OfficeSiteId'])) {
            $model->officeSiteId = $map['OfficeSiteId'];
        }

        if (isset($map['OfficeSiteName'])) {
            $model->officeSiteName = $map['OfficeSiteName'];
        }

        if (isset($map['OfficeSiteType'])) {
            $model->officeSiteType = $map['OfficeSiteType'];
        }

        if (isset($map['OsType'])) {
            $model->osType = $map['OsType'];
        }

        if (isset($map['PolicyGroupIdList'])) {
            if (!empty($map['PolicyGroupIdList'])) {
                $model->policyGroupIdList = [];
                $n1 = 0;
                foreach ($map['PolicyGroupIdList'] as $item1) {
                    $model->policyGroupIdList[$n1] = $item1;
                    ++$n1;
                }
            }
        }

        if (isset($map['ResourceSessionStatus'])) {
            $model->resourceSessionStatus = $map['ResourceSessionStatus'];
        }

        if (isset($map['SecurityGroupIds'])) {
            if (!empty($map['SecurityGroupIds'])) {
                $model->securityGroupIds = [];
                $n1 = 0;
                foreach ($map['SecurityGroupIds'] as $item1) {
                    $model->securityGroupIds[$n1] = $item1;
                    ++$n1;
                }
            }
        }

        if (isset($map['ServerInstanceTypeInfo'])) {
            $model->serverInstanceTypeInfo = serverInstanceTypeInfo::fromMap($map['ServerInstanceTypeInfo']);
        }

        if (isset($map['Sessions'])) {
            if (!empty($map['Sessions'])) {
                $model->sessions = [];
                $n1 = 0;
                foreach ($map['Sessions'] as $item1) {
                    $model->sessions[$n1] = sessions::fromMap($item1);
                    ++$n1;
                }
            }
        }

        if (isset($map['Status'])) {
            $model->status = $map['Status'];
        }

        if (isset($map['SubPayType'])) {
            $model->subPayType = $map['SubPayType'];
        }

        if (isset($map['SystemDiskCategory'])) {
            $model->systemDiskCategory = $map['SystemDiskCategory'];
        }

        if (isset($map['SystemDiskId'])) {
            $model->systemDiskId = $map['SystemDiskId'];
        }

        if (isset($map['SystemDiskPerformanceLevel'])) {
            $model->systemDiskPerformanceLevel = $map['SystemDiskPerformanceLevel'];
        }

        if (isset($map['SystemDiskSize'])) {
            $model->systemDiskSize = $map['SystemDiskSize'];
        }

        if (isset($map['TimerGroupId'])) {
            $model->timerGroupId = $map['TimerGroupId'];
        }

        if (isset($map['Users'])) {
            if (!empty($map['Users'])) {
                $model->users = [];
                $n1 = 0;
                foreach ($map['Users'] as $item1) {
                    $model->users[$n1] = $item1;
                    ++$n1;
                }
            }
        }

        if (isset($map['VirtualKubeletIp'])) {
            $model->virtualKubeletIp = $map['VirtualKubeletIp'];
        }

        if (isset($map['VirtualNodePoolId'])) {
            $model->virtualNodePoolId = $map['VirtualNodePoolId'];
        }

        if (isset($map['WuyingServerId'])) {
            $model->wuyingServerId = $map['WuyingServerId'];
        }

        if (isset($map['WuyingServerName'])) {
            $model->wuyingServerName = $map['WuyingServerName'];
        }

        return $model;
    }
}
