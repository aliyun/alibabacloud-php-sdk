<?php

// This file is auto-generated, don't edit it. Thanks.

namespace AlibabaCloud\SDK\Ecd\V20200930\Models;

use AlibabaCloud\SDK\Ecd\V20200930\Models\DescribeDesktopGroupsRequest\tag;
use AlibabaCloud\Tea\Model;

class DescribeDesktopGroupsRequest extends Model
{
    /**
     * @description The IDs of the cloud computer templates.
     *
     * @var string[]
     */
    public $bundleId;

    /**
     * @description The ID of the cloud computer share.
     *
     * @example dg-2i8qxpv6t1a03****
     *
     * @var string
     */
    public $desktopGroupId;

    /**
     * @description The IDs of the cloud computer shares.
     *
     * @var string[]
     */
    public $desktopGroupIds;

    /**
     * @description The name of the cloud computer share that you want to query. Fuzzy search is supported.
     *
     * @example testName
     *
     * @var string
     */
    public $desktopGroupName;

    /**
     * @var string
     */
    public $desktopType;

    /**
     * @description The IDs of the users who can access the cloud computer share.
     *
     * @var string[]
     */
    public $endUserIds;

    /**
     * @description The authorized users that you want to exclude.
     *
     * @var string[]
     */
    public $excludedEndUserIds;

    /**
     * @description The IDs of the images.
     *
     * @var string[]
     */
    public $imageId;

    /**
     * @description The number of entries to return on each page. Valid values: 1 to 100. Default value: 10.
     *
     * @example 10
     *
     * @var int
     */
    public $maxResults;

    /**
     * @description Specifies whether the cloud computer share is a many-to-many share.
     *
     * Valid values:
     *
     *   true: The cloud computer share is a many-to-many share.
     *   false: The cloud computer share is a one-to-many share.
     *
     * @example true
     *
     * @var bool
     */
    public $multiResource;

    /**
     * @description The pagination token that is used in the next request to retrieve a new page of results. If the NextToken parameter is empty, no next page exists.
     *
     * @example caeba0bbb2be03f84eb48b699f0a4883
     *
     * @var string
     */
    public $nextToken;

    /**
     * @description The ID of the office network in which the cloud computer share resides.
     *
     * @example cn-hangzhou+dir-467671****
     *
     * @var string
     */
    public $officeSiteId;

    /**
     * @description The type of the cloud computer share.
     *
     * >  This parameter is not publicly available.
     *
     * Valid values:
     *
     *   0: a single-session many-to-many share.
     *   1: a multi-session many-to-many share.
     *
     * @example 0
     *
     * @var int
     */
    public $ownType;

    /**
     * @description The subscription duration of the cloud computer share. The unit is specified by `PeriodUnit`.
     *
     *   Valid values if you set `PeriodUnit` to `Month`:
     *
     *   1
     *   2
     *   3
     *   6
     *
     *   Valid values if you set `PeriodUnit` to `Year`:
     *
     *   1
     *   2
     *   3
     *   4
     *   5
     *
     * @example 1
     *
     * @var int
     */
    public $period;

    /**
     * @description The unit of the subscription duration.
     *
     * @example Month
     *
     * @var string
     */
    public $periodUnit;

    /**
     * @description The ID of the applied policy.
     *
     * @example pg-53iyi2aar0nd6****
     *
     * @var string
     */
    public $policyGroupId;

    /**
     * @description The protocol type.
     *
     * Valid values:
     *
     *   High-definition Experience (HDX)
     *
     * <!-- -->
     *
     * <!-- -->
     *
     * <!-- -->
     *
     *   Adaptive Streaming Protocol (ASP)
     *
     * <!-- -->
     *
     * <!-- -->
     *
     * <!-- -->
     *
     * @example ASP
     *
     * @var string
     */
    public $protocolType;

    /**
     * @description The region ID. You can call the [DescribeRegions](https://help.aliyun.com/document_detail/196646.html) operation to query the regions supported by WUYING Workspace.
     *
     * This parameter is required.
     *
     * @example cn-hangzhou
     *
     * @var string
     */
    public $regionId;

    /**
     * @description The status of the cloud computer share.
     *
     * Valid values:
     *
     *   0: The cloud computer share is unpaid.
     *   1: The cloud computer share is normal.
     *   2: The cloud computer share expired, or your account has an overdue payment.
     *
     * @example 1
     *
     * @var int
     */
    public $status;

    /**
     * @description The tags that you want to add to the cloud computer share. You can specify 1 to 20 tags.
     *
     * @var tag[]
     */
    public $tag;
    protected $_name = [
        'bundleId' => 'BundleId',
        'desktopGroupId' => 'DesktopGroupId',
        'desktopGroupIds' => 'DesktopGroupIds',
        'desktopGroupName' => 'DesktopGroupName',
        'desktopType' => 'DesktopType',
        'endUserIds' => 'EndUserIds',
        'excludedEndUserIds' => 'ExcludedEndUserIds',
        'imageId' => 'ImageId',
        'maxResults' => 'MaxResults',
        'multiResource' => 'MultiResource',
        'nextToken' => 'NextToken',
        'officeSiteId' => 'OfficeSiteId',
        'ownType' => 'OwnType',
        'period' => 'Period',
        'periodUnit' => 'PeriodUnit',
        'policyGroupId' => 'PolicyGroupId',
        'protocolType' => 'ProtocolType',
        'regionId' => 'RegionId',
        'status' => 'Status',
        'tag' => 'Tag',
    ];

    public function validate() {}

    public function toMap()
    {
        $res = [];
        if (null !== $this->bundleId) {
            $res['BundleId'] = $this->bundleId;
        }
        if (null !== $this->desktopGroupId) {
            $res['DesktopGroupId'] = $this->desktopGroupId;
        }
        if (null !== $this->desktopGroupIds) {
            $res['DesktopGroupIds'] = $this->desktopGroupIds;
        }
        if (null !== $this->desktopGroupName) {
            $res['DesktopGroupName'] = $this->desktopGroupName;
        }
        if (null !== $this->desktopType) {
            $res['DesktopType'] = $this->desktopType;
        }
        if (null !== $this->endUserIds) {
            $res['EndUserIds'] = $this->endUserIds;
        }
        if (null !== $this->excludedEndUserIds) {
            $res['ExcludedEndUserIds'] = $this->excludedEndUserIds;
        }
        if (null !== $this->imageId) {
            $res['ImageId'] = $this->imageId;
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
        if (null !== $this->ownType) {
            $res['OwnType'] = $this->ownType;
        }
        if (null !== $this->period) {
            $res['Period'] = $this->period;
        }
        if (null !== $this->periodUnit) {
            $res['PeriodUnit'] = $this->periodUnit;
        }
        if (null !== $this->policyGroupId) {
            $res['PolicyGroupId'] = $this->policyGroupId;
        }
        if (null !== $this->protocolType) {
            $res['ProtocolType'] = $this->protocolType;
        }
        if (null !== $this->regionId) {
            $res['RegionId'] = $this->regionId;
        }
        if (null !== $this->status) {
            $res['Status'] = $this->status;
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

        return $res;
    }

    /**
     * @param array $map
     *
     * @return DescribeDesktopGroupsRequest
     */
    public static function fromMap($map = [])
    {
        $model = new self();
        if (isset($map['BundleId'])) {
            if (!empty($map['BundleId'])) {
                $model->bundleId = $map['BundleId'];
            }
        }
        if (isset($map['DesktopGroupId'])) {
            $model->desktopGroupId = $map['DesktopGroupId'];
        }
        if (isset($map['DesktopGroupIds'])) {
            if (!empty($map['DesktopGroupIds'])) {
                $model->desktopGroupIds = $map['DesktopGroupIds'];
            }
        }
        if (isset($map['DesktopGroupName'])) {
            $model->desktopGroupName = $map['DesktopGroupName'];
        }
        if (isset($map['DesktopType'])) {
            $model->desktopType = $map['DesktopType'];
        }
        if (isset($map['EndUserIds'])) {
            if (!empty($map['EndUserIds'])) {
                $model->endUserIds = $map['EndUserIds'];
            }
        }
        if (isset($map['ExcludedEndUserIds'])) {
            if (!empty($map['ExcludedEndUserIds'])) {
                $model->excludedEndUserIds = $map['ExcludedEndUserIds'];
            }
        }
        if (isset($map['ImageId'])) {
            if (!empty($map['ImageId'])) {
                $model->imageId = $map['ImageId'];
            }
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
        if (isset($map['OwnType'])) {
            $model->ownType = $map['OwnType'];
        }
        if (isset($map['Period'])) {
            $model->period = $map['Period'];
        }
        if (isset($map['PeriodUnit'])) {
            $model->periodUnit = $map['PeriodUnit'];
        }
        if (isset($map['PolicyGroupId'])) {
            $model->policyGroupId = $map['PolicyGroupId'];
        }
        if (isset($map['ProtocolType'])) {
            $model->protocolType = $map['ProtocolType'];
        }
        if (isset($map['RegionId'])) {
            $model->regionId = $map['RegionId'];
        }
        if (isset($map['Status'])) {
            $model->status = $map['Status'];
        }
        if (isset($map['Tag'])) {
            if (!empty($map['Tag'])) {
                $model->tag = [];
                $n = 0;
                foreach ($map['Tag'] as $item) {
                    $model->tag[$n++] = null !== $item ? tag::fromMap($item) : $item;
                }
            }
        }

        return $model;
    }
}
