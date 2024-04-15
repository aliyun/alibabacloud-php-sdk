<?php

// This file is auto-generated, don't edit it. Thanks.

namespace AlibabaCloud\SDK\Ecd\V20200930\Models;

use AlibabaCloud\SDK\Ecd\V20200930\Models\DescribeDesktopsRequest\tag;
use AlibabaCloud\Tea\Model;

class DescribeDesktopsRequest extends Model
{
    /**
     * @description The billing method of the cloud desktop.
     *
     * @example PostPaid
     *
     * @var string
     */
    public $chargeType;

    /**
     * @description The ID of the desktop group. If you specify the `DesktopId` parameter, ignore the `DesktopGroupId` parameter. If you do not specify the `DesktopId` parameter, specify the `DesktopGroupId` parameter in the call to request all IDs of the cloud desktops in the specified desktop group.
     *
     * @example dg-2i8qxpv6t1a03****
     *
     * @var string
     */
    public $desktopGroupId;

    /**
     * @description The IDs of the cloud desktops. You can specify 1 to 100 cloud desktop IDs.
     *
     * @example ecd-gx2x1dhsmucyy****
     *
     * @var string[]
     */
    public $desktopId;

    /**
     * @description The name of the cloud desktop.
     *
     * @example testDesktopName
     *
     * @var string
     */
    public $desktopName;

    /**
     * @description The status of the cloud desktop.
     *
     * @example Running
     *
     * @var string
     */
    public $desktopStatus;

    /**
     * @description The list of desktop status.
     *
     * @var string[]
     */
    public $desktopStatusList;

    /**
     * @description The new desktop type. You can call the [DescribeDesktopTypes](~~DescribeDesktopTypes~~) operation to query the IDs of supported desktop types.
     *
     * @example eds.general.2c8g
     *
     * @var string
     */
    public $desktopType;

    /**
     * @description The ID of the directory, The ID is the same as the workspace ID.
     *
     * @example cn-hangzhou+dir-363353****
     *
     * @var string
     */
    public $directoryId;

    /**
     * @description The IDs of the end users that are assigned the cloud desktop. You can specify 1 to 100 end user IDs.
     *
     * > Only one end user can use the cloud desktop at a time.
     * @example alice
     *
     * @var string[]
     */
    public $endUserId;

    /**
     * @description The IDs of the end users that are excluded from the end users that are assigned the cloud desktop. You can specify 1 to 100 end user IDs.
     *
     * @example andy
     *
     * @var string[]
     */
    public $excludedEndUserId;

    /**
     * @description The time when the subscription cloud desktop expires.
     *
     * @example 2022-12-31T15:59:59Z
     *
     * @var string
     */
    public $expiredTime;

    /**
     * @description Specifies whether to filter cloud desktops in the desktop group.
     *
     * @example false
     *
     * @var bool
     */
    public $filterDesktopGroup;

    /**
     * @description The ID of the desktop group.
     *
     * > The desktop group feature is in invitational preview. If you want to use this feature, submit a ticket.
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
     * @description The token that determines the start point of the next query. If this parameter is left empty, all results are returned.
     *
     * @example caeba0bbb2be03f84eb48b699f0a4883
     *
     * @var string
     */
    public $nextToken;

    /**
     * @description The ID of the workspace.
     *
     * @example cn-hangzhou+dir-363353****
     *
     * @var string
     */
    public $officeSiteId;

    /**
     * @description The name of the workspace.
     *
     * @example testName
     *
     * @var string
     */
    public $officeSiteName;

    /**
     * @description The progress when the cloud desktop was created.
     *
     * @example true
     *
     * @var bool
     */
    public $onlyDesktopGroup;

    /**
     * @description The types of the OSs.
     *
     * @var string[]
     */
    public $osTypes;

    /**
     * @description The ID of the policy.
     *
     * @example system-all-enabled-policy
     *
     * @var string
     */
    public $policyGroupId;

    /**
     * @description The type of the protocol.
     *
     * @example ASP
     *
     * @var string
     */
    public $protocolType;

    /**
     * @description Specifies whether to query the information about image update of the cloud desktop.
     *
     * @example false
     *
     * @var bool
     */
    public $queryFotaUpdate;

    /**
     * @description The ID of the region. You can call the [DescribeRegions](~~DescribeRegions~~) operation to query the most recent region list.
     *
     * @example cn-hangzhou
     *
     * @var string
     */
    public $regionId;

    /**
     * @description The ID of the snapshot policy.
     *
     * @example sp-hb12mclyne09xw***
     *
     * @var string
     */
    public $snapshotPolicyId;

    /**
     * @description The tags. A tag is a key-value pair that consists of a tag key and a tag value. Tags are used to identify resources. You can use tags to manage cloud desktops by group for easy searching and batch operations. For more information, see [Use tags to manage cloud desktops](~~203781~~).
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
        'filterDesktopGroup' => 'FilterDesktopGroup',
        'groupId'            => 'GroupId',
        'imageId'            => 'ImageId',
        'managementFlag'     => 'ManagementFlag',
        'maxResults'         => 'MaxResults',
        'nextToken'          => 'NextToken',
        'officeSiteId'       => 'OfficeSiteId',
        'officeSiteName'     => 'OfficeSiteName',
        'onlyDesktopGroup'   => 'OnlyDesktopGroup',
        'osTypes'            => 'OsTypes',
        'policyGroupId'      => 'PolicyGroupId',
        'protocolType'       => 'ProtocolType',
        'queryFotaUpdate'    => 'QueryFotaUpdate',
        'regionId'           => 'RegionId',
        'snapshotPolicyId'   => 'SnapshotPolicyId',
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
        if (null !== $this->filterDesktopGroup) {
            $res['FilterDesktopGroup'] = $this->filterDesktopGroup;
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
        if (null !== $this->policyGroupId) {
            $res['PolicyGroupId'] = $this->policyGroupId;
        }
        if (null !== $this->protocolType) {
            $res['ProtocolType'] = $this->protocolType;
        }
        if (null !== $this->queryFotaUpdate) {
            $res['QueryFotaUpdate'] = $this->queryFotaUpdate;
        }
        if (null !== $this->regionId) {
            $res['RegionId'] = $this->regionId;
        }
        if (null !== $this->snapshotPolicyId) {
            $res['SnapshotPolicyId'] = $this->snapshotPolicyId;
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
        if (isset($map['FilterDesktopGroup'])) {
            $model->filterDesktopGroup = $map['FilterDesktopGroup'];
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
        if (isset($map['PolicyGroupId'])) {
            $model->policyGroupId = $map['PolicyGroupId'];
        }
        if (isset($map['ProtocolType'])) {
            $model->protocolType = $map['ProtocolType'];
        }
        if (isset($map['QueryFotaUpdate'])) {
            $model->queryFotaUpdate = $map['QueryFotaUpdate'];
        }
        if (isset($map['RegionId'])) {
            $model->regionId = $map['RegionId'];
        }
        if (isset($map['SnapshotPolicyId'])) {
            $model->snapshotPolicyId = $map['SnapshotPolicyId'];
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
