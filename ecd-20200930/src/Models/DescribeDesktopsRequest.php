<?php

// This file is auto-generated, don't edit it. Thanks.

namespace AlibabaCloud\SDK\Ecd\V20200930\Models;

use AlibabaCloud\Dara\Model;
use AlibabaCloud\SDK\Ecd\V20200930\Models\DescribeDesktopsRequest\tag;

class DescribeDesktopsRequest extends Model
{
    /**
     * @var string
     */
    public $chargeType;

    /**
     * @var string
     */
    public $desktopGroupId;

    /**
     * @var string[]
     */
    public $desktopId;

    /**
     * @var string
     */
    public $desktopName;

    /**
     * @var string
     */
    public $desktopStatus;

    /**
     * @var string[]
     */
    public $desktopStatusList;

    /**
     * @var string
     */
    public $desktopType;

    /**
     * @var string
     */
    public $directoryId;

    /**
     * @var string[]
     */
    public $endUserId;

    /**
     * @var string[]
     */
    public $excludedEndUserId;

    /**
     * @var string
     */
    public $expiredTime;

    /**
     * @var bool
     */
    public $fillResourceGroup;

    /**
     * @var bool
     */
    public $filterDesktopGroup;

    /**
     * @var string
     */
    public $gpuInstanceGroupId;

    /**
     * @var string
     */
    public $groupId;

    /**
     * @var string[]
     */
    public $imageId;

    /**
     * @var string
     */
    public $managementFlag;

    /**
     * @var int
     */
    public $maxResults;

    /**
     * @var bool
     */
    public $multiResource;

    /**
     * @var string
     */
    public $nextToken;

    /**
     * @var string
     */
    public $officeSiteId;

    /**
     * @var string
     */
    public $officeSiteName;

    /**
     * @var bool
     */
    public $onlyDesktopGroup;

    /**
     * @var string[]
     */
    public $osTypes;

    /**
     * @var int
     */
    public $pageNumber;

    /**
     * @var int
     */
    public $pageSize;

    /**
     * @var string
     */
    public $policyGroupId;

    /**
     * @var string
     */
    public $protocolType;

    /**
     * @var string
     */
    public $qosRuleId;

    /**
     * @var bool
     */
    public $queryFotaUpdate;

    /**
     * @var string
     */
    public $regionId;

    /**
     * @var string
     */
    public $resourceGroupId;

    /**
     * @var string
     */
    public $snapshotPolicyId;

    /**
     * @var string
     */
    public $subPayType;

    /**
     * @var tag[]
     */
    public $tag;

    /**
     * @var string
     */
    public $userName;
    protected $_name = [
        'chargeType' => 'ChargeType',
        'desktopGroupId' => 'DesktopGroupId',
        'desktopId' => 'DesktopId',
        'desktopName' => 'DesktopName',
        'desktopStatus' => 'DesktopStatus',
        'desktopStatusList' => 'DesktopStatusList',
        'desktopType' => 'DesktopType',
        'directoryId' => 'DirectoryId',
        'endUserId' => 'EndUserId',
        'excludedEndUserId' => 'ExcludedEndUserId',
        'expiredTime' => 'ExpiredTime',
        'fillResourceGroup' => 'FillResourceGroup',
        'filterDesktopGroup' => 'FilterDesktopGroup',
        'gpuInstanceGroupId' => 'GpuInstanceGroupId',
        'groupId' => 'GroupId',
        'imageId' => 'ImageId',
        'managementFlag' => 'ManagementFlag',
        'maxResults' => 'MaxResults',
        'multiResource' => 'MultiResource',
        'nextToken' => 'NextToken',
        'officeSiteId' => 'OfficeSiteId',
        'officeSiteName' => 'OfficeSiteName',
        'onlyDesktopGroup' => 'OnlyDesktopGroup',
        'osTypes' => 'OsTypes',
        'pageNumber' => 'PageNumber',
        'pageSize' => 'PageSize',
        'policyGroupId' => 'PolicyGroupId',
        'protocolType' => 'ProtocolType',
        'qosRuleId' => 'QosRuleId',
        'queryFotaUpdate' => 'QueryFotaUpdate',
        'regionId' => 'RegionId',
        'resourceGroupId' => 'ResourceGroupId',
        'snapshotPolicyId' => 'SnapshotPolicyId',
        'subPayType' => 'SubPayType',
        'tag' => 'Tag',
        'userName' => 'UserName',
    ];

    public function validate()
    {
        if (\is_array($this->desktopId)) {
            Model::validateArray($this->desktopId);
        }
        if (\is_array($this->desktopStatusList)) {
            Model::validateArray($this->desktopStatusList);
        }
        if (\is_array($this->endUserId)) {
            Model::validateArray($this->endUserId);
        }
        if (\is_array($this->excludedEndUserId)) {
            Model::validateArray($this->excludedEndUserId);
        }
        if (\is_array($this->imageId)) {
            Model::validateArray($this->imageId);
        }
        if (\is_array($this->osTypes)) {
            Model::validateArray($this->osTypes);
        }
        if (\is_array($this->tag)) {
            Model::validateArray($this->tag);
        }
        parent::validate();
    }

    public function toArray($noStream = false)
    {
        $res = [];
        if (null !== $this->chargeType) {
            $res['ChargeType'] = $this->chargeType;
        }

        if (null !== $this->desktopGroupId) {
            $res['DesktopGroupId'] = $this->desktopGroupId;
        }

        if (null !== $this->desktopId) {
            if (\is_array($this->desktopId)) {
                $res['DesktopId'] = [];
                $n1 = 0;
                foreach ($this->desktopId as $item1) {
                    $res['DesktopId'][$n1] = $item1;
                    ++$n1;
                }
            }
        }

        if (null !== $this->desktopName) {
            $res['DesktopName'] = $this->desktopName;
        }

        if (null !== $this->desktopStatus) {
            $res['DesktopStatus'] = $this->desktopStatus;
        }

        if (null !== $this->desktopStatusList) {
            if (\is_array($this->desktopStatusList)) {
                $res['DesktopStatusList'] = [];
                $n1 = 0;
                foreach ($this->desktopStatusList as $item1) {
                    $res['DesktopStatusList'][$n1] = $item1;
                    ++$n1;
                }
            }
        }

        if (null !== $this->desktopType) {
            $res['DesktopType'] = $this->desktopType;
        }

        if (null !== $this->directoryId) {
            $res['DirectoryId'] = $this->directoryId;
        }

        if (null !== $this->endUserId) {
            if (\is_array($this->endUserId)) {
                $res['EndUserId'] = [];
                $n1 = 0;
                foreach ($this->endUserId as $item1) {
                    $res['EndUserId'][$n1] = $item1;
                    ++$n1;
                }
            }
        }

        if (null !== $this->excludedEndUserId) {
            if (\is_array($this->excludedEndUserId)) {
                $res['ExcludedEndUserId'] = [];
                $n1 = 0;
                foreach ($this->excludedEndUserId as $item1) {
                    $res['ExcludedEndUserId'][$n1] = $item1;
                    ++$n1;
                }
            }
        }

        if (null !== $this->expiredTime) {
            $res['ExpiredTime'] = $this->expiredTime;
        }

        if (null !== $this->fillResourceGroup) {
            $res['FillResourceGroup'] = $this->fillResourceGroup;
        }

        if (null !== $this->filterDesktopGroup) {
            $res['FilterDesktopGroup'] = $this->filterDesktopGroup;
        }

        if (null !== $this->gpuInstanceGroupId) {
            $res['GpuInstanceGroupId'] = $this->gpuInstanceGroupId;
        }

        if (null !== $this->groupId) {
            $res['GroupId'] = $this->groupId;
        }

        if (null !== $this->imageId) {
            if (\is_array($this->imageId)) {
                $res['ImageId'] = [];
                $n1 = 0;
                foreach ($this->imageId as $item1) {
                    $res['ImageId'][$n1] = $item1;
                    ++$n1;
                }
            }
        }

        if (null !== $this->managementFlag) {
            $res['ManagementFlag'] = $this->managementFlag;
        }

        if (null !== $this->maxResults) {
            $res['MaxResults'] = $this->maxResults;
        }

        if (null !== $this->multiResource) {
            $res['MultiResource'] = $this->multiResource;
        }

        if (null !== $this->nextToken) {
            $res['NextToken'] = $this->nextToken;
        }

        if (null !== $this->officeSiteId) {
            $res['OfficeSiteId'] = $this->officeSiteId;
        }

        if (null !== $this->officeSiteName) {
            $res['OfficeSiteName'] = $this->officeSiteName;
        }

        if (null !== $this->onlyDesktopGroup) {
            $res['OnlyDesktopGroup'] = $this->onlyDesktopGroup;
        }

        if (null !== $this->osTypes) {
            if (\is_array($this->osTypes)) {
                $res['OsTypes'] = [];
                $n1 = 0;
                foreach ($this->osTypes as $item1) {
                    $res['OsTypes'][$n1] = $item1;
                    ++$n1;
                }
            }
        }

        if (null !== $this->pageNumber) {
            $res['PageNumber'] = $this->pageNumber;
        }

        if (null !== $this->pageSize) {
            $res['PageSize'] = $this->pageSize;
        }

        if (null !== $this->policyGroupId) {
            $res['PolicyGroupId'] = $this->policyGroupId;
        }

        if (null !== $this->protocolType) {
            $res['ProtocolType'] = $this->protocolType;
        }

        if (null !== $this->qosRuleId) {
            $res['QosRuleId'] = $this->qosRuleId;
        }

        if (null !== $this->queryFotaUpdate) {
            $res['QueryFotaUpdate'] = $this->queryFotaUpdate;
        }

        if (null !== $this->regionId) {
            $res['RegionId'] = $this->regionId;
        }

        if (null !== $this->resourceGroupId) {
            $res['ResourceGroupId'] = $this->resourceGroupId;
        }

        if (null !== $this->snapshotPolicyId) {
            $res['SnapshotPolicyId'] = $this->snapshotPolicyId;
        }

        if (null !== $this->subPayType) {
            $res['SubPayType'] = $this->subPayType;
        }

        if (null !== $this->tag) {
            if (\is_array($this->tag)) {
                $res['Tag'] = [];
                $n1 = 0;
                foreach ($this->tag as $item1) {
                    $res['Tag'][$n1] = null !== $item1 ? $item1->toArray($noStream) : $item1;
                    ++$n1;
                }
            }
        }

        if (null !== $this->userName) {
            $res['UserName'] = $this->userName;
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
        if (isset($map['ChargeType'])) {
            $model->chargeType = $map['ChargeType'];
        }

        if (isset($map['DesktopGroupId'])) {
            $model->desktopGroupId = $map['DesktopGroupId'];
        }

        if (isset($map['DesktopId'])) {
            if (!empty($map['DesktopId'])) {
                $model->desktopId = [];
                $n1 = 0;
                foreach ($map['DesktopId'] as $item1) {
                    $model->desktopId[$n1] = $item1;
                    ++$n1;
                }
            }
        }

        if (isset($map['DesktopName'])) {
            $model->desktopName = $map['DesktopName'];
        }

        if (isset($map['DesktopStatus'])) {
            $model->desktopStatus = $map['DesktopStatus'];
        }

        if (isset($map['DesktopStatusList'])) {
            if (!empty($map['DesktopStatusList'])) {
                $model->desktopStatusList = [];
                $n1 = 0;
                foreach ($map['DesktopStatusList'] as $item1) {
                    $model->desktopStatusList[$n1] = $item1;
                    ++$n1;
                }
            }
        }

        if (isset($map['DesktopType'])) {
            $model->desktopType = $map['DesktopType'];
        }

        if (isset($map['DirectoryId'])) {
            $model->directoryId = $map['DirectoryId'];
        }

        if (isset($map['EndUserId'])) {
            if (!empty($map['EndUserId'])) {
                $model->endUserId = [];
                $n1 = 0;
                foreach ($map['EndUserId'] as $item1) {
                    $model->endUserId[$n1] = $item1;
                    ++$n1;
                }
            }
        }

        if (isset($map['ExcludedEndUserId'])) {
            if (!empty($map['ExcludedEndUserId'])) {
                $model->excludedEndUserId = [];
                $n1 = 0;
                foreach ($map['ExcludedEndUserId'] as $item1) {
                    $model->excludedEndUserId[$n1] = $item1;
                    ++$n1;
                }
            }
        }

        if (isset($map['ExpiredTime'])) {
            $model->expiredTime = $map['ExpiredTime'];
        }

        if (isset($map['FillResourceGroup'])) {
            $model->fillResourceGroup = $map['FillResourceGroup'];
        }

        if (isset($map['FilterDesktopGroup'])) {
            $model->filterDesktopGroup = $map['FilterDesktopGroup'];
        }

        if (isset($map['GpuInstanceGroupId'])) {
            $model->gpuInstanceGroupId = $map['GpuInstanceGroupId'];
        }

        if (isset($map['GroupId'])) {
            $model->groupId = $map['GroupId'];
        }

        if (isset($map['ImageId'])) {
            if (!empty($map['ImageId'])) {
                $model->imageId = [];
                $n1 = 0;
                foreach ($map['ImageId'] as $item1) {
                    $model->imageId[$n1] = $item1;
                    ++$n1;
                }
            }
        }

        if (isset($map['ManagementFlag'])) {
            $model->managementFlag = $map['ManagementFlag'];
        }

        if (isset($map['MaxResults'])) {
            $model->maxResults = $map['MaxResults'];
        }

        if (isset($map['MultiResource'])) {
            $model->multiResource = $map['MultiResource'];
        }

        if (isset($map['NextToken'])) {
            $model->nextToken = $map['NextToken'];
        }

        if (isset($map['OfficeSiteId'])) {
            $model->officeSiteId = $map['OfficeSiteId'];
        }

        if (isset($map['OfficeSiteName'])) {
            $model->officeSiteName = $map['OfficeSiteName'];
        }

        if (isset($map['OnlyDesktopGroup'])) {
            $model->onlyDesktopGroup = $map['OnlyDesktopGroup'];
        }

        if (isset($map['OsTypes'])) {
            if (!empty($map['OsTypes'])) {
                $model->osTypes = [];
                $n1 = 0;
                foreach ($map['OsTypes'] as $item1) {
                    $model->osTypes[$n1] = $item1;
                    ++$n1;
                }
            }
        }

        if (isset($map['PageNumber'])) {
            $model->pageNumber = $map['PageNumber'];
        }

        if (isset($map['PageSize'])) {
            $model->pageSize = $map['PageSize'];
        }

        if (isset($map['PolicyGroupId'])) {
            $model->policyGroupId = $map['PolicyGroupId'];
        }

        if (isset($map['ProtocolType'])) {
            $model->protocolType = $map['ProtocolType'];
        }

        if (isset($map['QosRuleId'])) {
            $model->qosRuleId = $map['QosRuleId'];
        }

        if (isset($map['QueryFotaUpdate'])) {
            $model->queryFotaUpdate = $map['QueryFotaUpdate'];
        }

        if (isset($map['RegionId'])) {
            $model->regionId = $map['RegionId'];
        }

        if (isset($map['ResourceGroupId'])) {
            $model->resourceGroupId = $map['ResourceGroupId'];
        }

        if (isset($map['SnapshotPolicyId'])) {
            $model->snapshotPolicyId = $map['SnapshotPolicyId'];
        }

        if (isset($map['SubPayType'])) {
            $model->subPayType = $map['SubPayType'];
        }

        if (isset($map['Tag'])) {
            if (!empty($map['Tag'])) {
                $model->tag = [];
                $n1 = 0;
                foreach ($map['Tag'] as $item1) {
                    $model->tag[$n1] = tag::fromMap($item1);
                    ++$n1;
                }
            }
        }

        if (isset($map['UserName'])) {
            $model->userName = $map['UserName'];
        }

        return $model;
    }
}
