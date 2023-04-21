<?php

// This file is auto-generated, don't edit it. Thanks.

namespace AlibabaCloud\SDK\Ecd\V20200930\Models;

use AlibabaCloud\Tea\Model;

class DescribeDesktopGroupsRequest extends Model
{
    /**
     * @var string[]
     */
    public $bundleId;

    /**
     * @description The ID of the desktop group.
     *
     * @example dg-2i8qxpv6t1a03****
     *
     * @var string
     */
    public $desktopGroupId;

    /**
     * @description The name of the desktop group that you want to query. Fuzzy search is supported.
     *
     * @example testName
     *
     * @var string
     */
    public $desktopGroupName;

    /**
     * @description The IDs of the end users who have the permissions on the desktop group.
     *
     * @var string[]
     */
    public $endUserIds;

    /**
     * @description The IDs of the end users that you want to exclude. The end users have the permissions on the desktop group.
     *
     * @var string[]
     */
    public $excludedEndUserIds;

    /**
     * @var string[]
     */
    public $imageId;

    /**
     * @description The maximum number of entries to return on each page. Maximum value: 100. Default value: 10.
     *
     * @example 10
     *
     * @var int
     */
    public $maxResults;

    /**
     * @description The pagination token that is used in the next request to retrieve a new page of results. You do not need to specify this parameter for the first request.
     *
     * @example caeba0bbb2be03f84eb48b699f0a4883
     *
     * @var string
     */
    public $nextToken;

    /**
     * @description The workspace ID of the desktop groups that you want to query.
     *
     * @example cn-hangzhou+dir-467671****
     *
     * @var string
     */
    public $officeSiteId;

    /**
     * @description The type of the desktop group.
     *
     * Valid values:
     *
     *   0
     *
     * <!-- -->
     *
     *   1
     *
     * .
     * @example 0
     *
     * @var int
     */
    public $ownType;

    /**
     * @description The validity period of the desktop group. The unit is specified by the PeriodUnit parameter.
     *
     * @example 1
     *
     * @var int
     */
    public $period;

    /**
     * @description The unit of the validity period of the desktop group.
     *
     * Valid values:
     *
     *   Month
     *
     * <!-- -->
     *
     *   Year
     *
     * <!-- -->
     *
     *   Day
     *
     * <!-- -->
     * @example Month
     *
     * @var string
     */
    public $periodUnit;

    /**
     * @description The ID of the policy with which you want to associate the desktop group.
     *
     * @example pg-53iyi2aar0nd6****
     *
     * @var string
     */
    public $policyGroupId;

    /**
     * @description The type of the protocol. Valid values:
     *
     *   ASP
     *   HDX
     *
     * @example ASP
     *
     * @var string
     */
    public $protocolType;

    /**
     * @description The region ID of the desktop groups that you want to query.
     *
     * @example cn-hangzhou
     *
     * @var string
     */
    public $regionId;

    /**
     * @description The payment status of the desktop group.
     *
     * Valid values:
     *
     *   0
     *
     * .
     *
     *   1
     *
     * .
     *
     *   2
     *
     * .
     * @example 1
     *
     * @var int
     */
    public $status;
    protected $_name = [
        'bundleId'           => 'BundleId',
        'desktopGroupId'     => 'DesktopGroupId',
        'desktopGroupName'   => 'DesktopGroupName',
        'endUserIds'         => 'EndUserIds',
        'excludedEndUserIds' => 'ExcludedEndUserIds',
        'imageId'            => 'ImageId',
        'maxResults'         => 'MaxResults',
        'nextToken'          => 'NextToken',
        'officeSiteId'       => 'OfficeSiteId',
        'ownType'            => 'OwnType',
        'period'             => 'Period',
        'periodUnit'         => 'PeriodUnit',
        'policyGroupId'      => 'PolicyGroupId',
        'protocolType'       => 'ProtocolType',
        'regionId'           => 'RegionId',
        'status'             => 'Status',
    ];

    public function validate()
    {
    }

    public function toMap()
    {
        $res = [];
        if (null !== $this->bundleId) {
            $res['BundleId'] = $this->bundleId;
        }
        if (null !== $this->desktopGroupId) {
            $res['DesktopGroupId'] = $this->desktopGroupId;
        }
        if (null !== $this->desktopGroupName) {
            $res['DesktopGroupName'] = $this->desktopGroupName;
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
        if (isset($map['DesktopGroupName'])) {
            $model->desktopGroupName = $map['DesktopGroupName'];
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

        return $model;
    }
}
