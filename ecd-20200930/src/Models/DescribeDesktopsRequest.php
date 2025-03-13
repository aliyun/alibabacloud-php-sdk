<?php

// This file is auto-generated, don't edit it. Thanks.

namespace AlibabaCloud\SDK\Ecd\V20200930\Models;

use AlibabaCloud\SDK\Ecd\V20200930\Models\DescribeDesktopsRequest\tag;
use AlibabaCloud\Tea\Model;

class DescribeDesktopsRequest extends Model
{
    /**
     * @description The billing method of the cloud computer.
     *
     * Valid values:
     *
     *   Postpaid (default): pay-as-you-go
     *   PrePaid: subscription
     *
     * @example PostPaid
     *
     * @var string
     */
    public $chargeType;

    /**
     * @description The ID of the cloud computer pool. If you specify `OnlyDesktopGroup`, ignore `DesktopGroupId`. If you leave `DesktopId` empty, all IDs of the cloud computers in the cloud computer pool are queried.````
     *
     * @example dg-2i8qxpv6t1a03****
     *
     * @var string
     */
    public $desktopGroupId;

    /**
     * @description The cloud computer IDs. You can specify the IDs of 1 to 100 cloud computers.
     *
     * @example ecd-gx2x1dhsmucyy****
     *
     * @var string[]
     */
    public $desktopId;

    /**
     * @description The cloud computer name.
     *
     * @example testDesktopName
     *
     * @var string
     */
    public $desktopName;

    /**
     * @description The cloud computer status.
     *
     * Valid values:
     *
     *   Stopped
     *   Starting
     *   Rebuilding
     *   Running
     *   Stopping
     *   Expired
     *   Deleted
     *   Pending
     *
     * @example Running
     *
     * @var string
     */
    public $desktopStatus;

    /**
     * @description The list of cloud computer status.
     *
     * @var string[]
     */
    public $desktopStatusList;

    /**
     * @description The cloud computer type. You can call the [DescribeDesktopTypes](https://help.aliyun.com/document_detail/188882.html) operation to query the IDs of all supported types.
     *
     * @example eds.general.2c8g
     *
     * @var string
     */
    public $desktopType;

    /**
     * @description The directory ID, which is the same as the office network ID.
     *
     * @example cn-hangzhou+dir-363353****
     *
     * @var string
     */
    public $directoryId;

    /**
     * @description The authorized users of the cloud computer. You can specify the IDs of 1 to 100 users.
     *
     * >  During a specific period of time, only one user can connect to and use the cloud computer.
     * @example alice
     *
     * @var string[]
     */
    public $endUserId;

    /**
     * @description The list of authorized users that you want to exclude from the cloud computer. You can specify the IDs of 1 to 100 users.
     *
     * @example andy
     *
     * @var string[]
     */
    public $excludedEndUserId;

    /**
     * @description The time when a subscription cloud computer expires.
     *
     * @example 2022-12-31T15:59:59Z
     *
     * @var string
     */
    public $expiredTime;

    /**
     * @description Specifies whether to query the information about the enterprise resource group.
     *
     * @example true
     *
     * @var bool
     */
    public $fillResourceGroup;

    /**
     * @description Specifies whether to exclude pooled cloud computers.
     *
     * Valid values:
     *
     *   true (default)
     *   false
     *
     * @example false
     *
     * @var bool
     */
    public $filterDesktopGroup;

    /**
     * @description The ID of the elastic GPU pool.
     *
     * @example gp-0bm2iz1v6m6nx****
     *
     * @var string
     */
    public $gpuInstanceGroupId;

    /**
     * @description The ID of the cloud computer pool.
     *
     * @example dg-boyczi8enfyc5****
     *
     * @var string
     */
    public $groupId;

    /**
     * @description The IDs of the images.
     *
     * @var string[]
     */
    public $imageId;

    /**
     * @description The flag that is used to manage the cloud desktops.
     *
     * @example NoFlag
     *
     * @var string
     */
    public $managementFlag;

    /**
     * @description The number of entries per page.
     *
     *   Maximum value: 100
     *   Default value: 10
     *
     * @example 10
     *
     * @var int
     */
    public $maxResults;

    /**
     * @description Specifies whether the shared group is a multi-cloud computer type.
     *
     * - false: a single-cloud computer type.
     * @example false
     *
     * @var bool
     */
    public $multiResource;

    /**
     * @description The token that determines the start point of the next query. If this parameter is left empty, all results are returned.
     *
     * @example caeba0bbb2be03f84eb48b699f0a4883
     *
     * @var string
     */
    public $nextToken;

    /**
     * @description The office network ID.
     *
     * @example cn-hangzhou+dir-363353****
     *
     * @var string
     */
    public $officeSiteId;

    /**
     * @description The office network name.
     *
     * @example testName
     *
     * @var string
     */
    public $officeSiteName;

    /**
     * @description Specifies whether to query pooled cloud computers.
     *
     * @example true
     *
     * @var bool
     */
    public $onlyDesktopGroup;

    /**
     * @description The operating systems (OSs).
     *
     * @var string[]
     */
    public $osTypes;

    /**
     * @description The page number.
     *
     * @example 1
     *
     * @var int
     */
    public $pageNumber;

    /**
     * @description The number of entries returned per page.
     *
     * @example 10
     *
     * @var int
     */
    public $pageSize;

    /**
     * @description The ID of the cloud computer policy.
     *
     * @example system-all-enabled-policy
     *
     * @var string
     */
    public $policyGroupId;

    /**
     * @description The protocol.
     *
     * Valid values:
     *
     *   HDX: High-definition Experience (HDX) protocol
     *   ASP: in-house Adaptive Streaming Protocol (ASP) (recommended)
     *
     * @example ASP
     *
     * @var string
     */
    public $protocolType;

    /**
     * @description The ID of the network throttling rule.
     *
     * @example qos-5605u0gelk200****
     *
     * @var string
     */
    public $qosRuleId;

    /**
     * @description Specifies whether to query the image update information about the cloud computer.
     *
     * Valid values:
     *
     *   true
     *   false (default)
     *
     * @example false
     *
     * @var bool
     */
    public $queryFotaUpdate;

    /**
     * @description The region ID. You can call the [DescribeRegions](~~DescribeRegions~~) operation to query the regions supported by Elastic Desktop Service (EDS).
     *
     * This parameter is required.
     * @example cn-hangzhou
     *
     * @var string
     */
    public $regionId;

    /**
     * @description The ID of the enterprise resource group.
     *
     * @example rg-4hsvzbbmqdzu3s****
     *
     * @var string
     */
    public $resourceGroupId;

    /**
     * @description The ID of the snapshot policy.
     *
     * @example sp-hb12mclyne09xw***
     *
     * @var string
     */
    public $snapshotPolicyId;

    /**
     * @description The billing method of the cloud computer.
     *
     * Valid values:
     *
     *   duration: hourly plan (available for users in the whitelist)
     *   postPaid: pay-as-you-go
     *   monthPackage: monthly subscription (120-hour or 250-hour computing plan)
     *   prePaid: monthly subscription (unlimited-hour computing plan)
     *
     * @example monthPackage
     *
     * @var string
     */
    public $subPayType;

    /**
     * @description The tags that you want to add to the cloud computer. A tag is a key-value pair that consists of a tag key and a tag value. Tags are used to identify resources. You can use tags to manage cloud computers by group. This facilitates search and batch operations. For more information, see [Use tags to manage cloud computers](https://help.aliyun.com/document_detail/203781.html).
     *
     * @var tag[]
     */
    public $tag;

    /**
     * @description The name of the end user.
     *
     * @example Alice
     *
     * @var string
     */
    public $userName;
    protected $_name = [
        'chargeType'         => 'ChargeType',
        'desktopGroupId'     => 'DesktopGroupId',
        'desktopId'          => 'DesktopId',
        'desktopName'        => 'DesktopName',
        'desktopStatus'      => 'DesktopStatus',
        'desktopStatusList'  => 'DesktopStatusList',
        'desktopType'        => 'DesktopType',
        'directoryId'        => 'DirectoryId',
        'endUserId'          => 'EndUserId',
        'excludedEndUserId'  => 'ExcludedEndUserId',
        'expiredTime'        => 'ExpiredTime',
        'fillResourceGroup'  => 'FillResourceGroup',
        'filterDesktopGroup' => 'FilterDesktopGroup',
        'gpuInstanceGroupId' => 'GpuInstanceGroupId',
        'groupId'            => 'GroupId',
        'imageId'            => 'ImageId',
        'managementFlag'     => 'ManagementFlag',
        'maxResults'         => 'MaxResults',
        'multiResource'      => 'MultiResource',
        'nextToken'          => 'NextToken',
        'officeSiteId'       => 'OfficeSiteId',
        'officeSiteName'     => 'OfficeSiteName',
        'onlyDesktopGroup'   => 'OnlyDesktopGroup',
        'osTypes'            => 'OsTypes',
        'pageNumber'         => 'PageNumber',
        'pageSize'           => 'PageSize',
        'policyGroupId'      => 'PolicyGroupId',
        'protocolType'       => 'ProtocolType',
        'qosRuleId'          => 'QosRuleId',
        'queryFotaUpdate'    => 'QueryFotaUpdate',
        'regionId'           => 'RegionId',
        'resourceGroupId'    => 'ResourceGroupId',
        'snapshotPolicyId'   => 'SnapshotPolicyId',
        'subPayType'         => 'SubPayType',
        'tag'                => 'Tag',
        'userName'           => 'UserName',
    ];

    public function validate()
    {
    }

    public function toMap()
    {
        $res = [];
        if (null !== $this->chargeType) {
            $res['ChargeType'] = $this->chargeType;
        }
        if (null !== $this->desktopGroupId) {
            $res['DesktopGroupId'] = $this->desktopGroupId;
        }
        if (null !== $this->desktopId) {
            $res['DesktopId'] = $this->desktopId;
        }
        if (null !== $this->desktopName) {
            $res['DesktopName'] = $this->desktopName;
        }
        if (null !== $this->desktopStatus) {
            $res['DesktopStatus'] = $this->desktopStatus;
        }
        if (null !== $this->desktopStatusList) {
            $res['DesktopStatusList'] = $this->desktopStatusList;
        }
        if (null !== $this->desktopType) {
            $res['DesktopType'] = $this->desktopType;
        }
        if (null !== $this->directoryId) {
            $res['DirectoryId'] = $this->directoryId;
        }
        if (null !== $this->endUserId) {
            $res['EndUserId'] = $this->endUserId;
        }
        if (null !== $this->excludedEndUserId) {
            $res['ExcludedEndUserId'] = $this->excludedEndUserId;
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
            $res['ImageId'] = $this->imageId;
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
            $res['OsTypes'] = $this->osTypes;
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
            $res['Tag'] = [];
            if (null !== $this->tag && \is_array($this->tag)) {
                $n = 0;
                foreach ($this->tag as $item) {
                    $res['Tag'][$n++] = null !== $item ? $item->toMap() : $item;
                }
            }
        }
        if (null !== $this->userName) {
            $res['UserName'] = $this->userName;
        }

        return $res;
    }

    /**
     * @param array $map
     *
     * @return DescribeDesktopsRequest
     */
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
                $model->desktopId = $map['DesktopId'];
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
                $model->desktopStatusList = $map['DesktopStatusList'];
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
                $model->endUserId = $map['EndUserId'];
            }
        }
        if (isset($map['ExcludedEndUserId'])) {
            if (!empty($map['ExcludedEndUserId'])) {
                $model->excludedEndUserId = $map['ExcludedEndUserId'];
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
                $model->imageId = $map['ImageId'];
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
                $model->osTypes = $map['OsTypes'];
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
                $n          = 0;
                foreach ($map['Tag'] as $item) {
                    $model->tag[$n++] = null !== $item ? tag::fromMap($item) : $item;
                }
            }
        }
        if (isset($map['UserName'])) {
            $model->userName = $map['UserName'];
        }

        return $model;
    }
}
