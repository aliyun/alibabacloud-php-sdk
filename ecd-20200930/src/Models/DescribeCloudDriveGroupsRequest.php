<?php

// This file is auto-generated, don't edit it. Thanks.

namespace AlibabaCloud\SDK\Ecd\V20200930\Models;

use AlibabaCloud\Tea\Model;

class DescribeCloudDriveGroupsRequest extends Model
{
    /**
     * @description The ID of the cloud disk in Cloud Drive Service.
     *
     * @example cn-shanghai+cds-135515****
     *
     * @var string
     */
    public $cdsId;

    /**
     * @description The workspace ID.
     *
     * @example cn-hangzhou+dir-jedbpr4sl9l37****
     *
     * @var string
     */
    public $directoryId;

    /**
     * @description The workspace name.
     *
     * @example testDirectoryName
     *
     * @var string
     */
    public $directoryName;

    /**
     * @description The team space status. Valid values:
     *
     *   enabled
     *   disabled
     *
     * Default value: enabled.
     * @example enabled
     *
     * @var string
     */
    public $driveStatus;

    /**
     * @description Specifies whether the space is increased.
     *
     *   binding: increased
     *   unbound: not increased
     *
     * Default value: null. The default value indicates that all spaces are queried.
     * @example binding
     *
     * @var string
     */
    public $driveType;

    /**
     * @description The team ID.
     *
     * @var string[]
     */
    public $groupId;

    /**
     * @description The team name for fuzzy search.
     *
     * @example Test Team 1
     *
     * @var string
     */
    public $groupName;

    /**
     * @description The team type.
     *
     *   org: organizational structure
     *   directory: workspace
     *
     * Default value: null. The default value indicates that all types of teams are queried.
     * @example org
     *
     * @var string
     */
    public $groupType;

    /**
     * @description The number of entries to return on each page.
     *
     *   Valid values: 1 to 100
     *   Default value: 20
     *
     * @example 10
     *
     * @var int
     */
    public $maxResults;

    /**
     * @description The pagination token that is used in the next request to retrieve a new page of results.
     *
     * @example AAAAAV3MpHK1AP0pfERHZN5pu6lY3I2VNHLwy+nIoSXh****
     *
     * @var string
     */
    public $nextToken;

    /**
     * @description The ID of the parent node. If a parent node ID is specified, the subnodes are queried. If you set the value of this parameter to root, the root node is queried.
     *
     * Default value: null. The default value indicates that all nodes are queried.
     * @example cg-e70ga4ixp30ur****
     *
     * @var string
     */
    public $parentGroupId;

    /**
     * @description The region ID.
     *
     * @example cn-hangzhou
     *
     * @var string
     */
    public $regionId;
    protected $_name = [
        'cdsId'         => 'CdsId',
        'directoryId'   => 'DirectoryId',
        'directoryName' => 'DirectoryName',
        'driveStatus'   => 'DriveStatus',
        'driveType'     => 'DriveType',
        'groupId'       => 'GroupId',
        'groupName'     => 'GroupName',
        'groupType'     => 'GroupType',
        'maxResults'    => 'MaxResults',
        'nextToken'     => 'NextToken',
        'parentGroupId' => 'ParentGroupId',
        'regionId'      => 'RegionId',
    ];

    public function validate()
    {
    }

    public function toMap()
    {
        $res = [];
        if (null !== $this->cdsId) {
            $res['CdsId'] = $this->cdsId;
        }
        if (null !== $this->directoryId) {
            $res['DirectoryId'] = $this->directoryId;
        }
        if (null !== $this->directoryName) {
            $res['DirectoryName'] = $this->directoryName;
        }
        if (null !== $this->driveStatus) {
            $res['DriveStatus'] = $this->driveStatus;
        }
        if (null !== $this->driveType) {
            $res['DriveType'] = $this->driveType;
        }
        if (null !== $this->groupId) {
            $res['GroupId'] = $this->groupId;
        }
        if (null !== $this->groupName) {
            $res['GroupName'] = $this->groupName;
        }
        if (null !== $this->groupType) {
            $res['GroupType'] = $this->groupType;
        }
        if (null !== $this->maxResults) {
            $res['MaxResults'] = $this->maxResults;
        }
        if (null !== $this->nextToken) {
            $res['NextToken'] = $this->nextToken;
        }
        if (null !== $this->parentGroupId) {
            $res['ParentGroupId'] = $this->parentGroupId;
        }
        if (null !== $this->regionId) {
            $res['RegionId'] = $this->regionId;
        }

        return $res;
    }

    /**
     * @param array $map
     *
     * @return DescribeCloudDriveGroupsRequest
     */
    public static function fromMap($map = [])
    {
        $model = new self();
        if (isset($map['CdsId'])) {
            $model->cdsId = $map['CdsId'];
        }
        if (isset($map['DirectoryId'])) {
            $model->directoryId = $map['DirectoryId'];
        }
        if (isset($map['DirectoryName'])) {
            $model->directoryName = $map['DirectoryName'];
        }
        if (isset($map['DriveStatus'])) {
            $model->driveStatus = $map['DriveStatus'];
        }
        if (isset($map['DriveType'])) {
            $model->driveType = $map['DriveType'];
        }
        if (isset($map['GroupId'])) {
            if (!empty($map['GroupId'])) {
                $model->groupId = $map['GroupId'];
            }
        }
        if (isset($map['GroupName'])) {
            $model->groupName = $map['GroupName'];
        }
        if (isset($map['GroupType'])) {
            $model->groupType = $map['GroupType'];
        }
        if (isset($map['MaxResults'])) {
            $model->maxResults = $map['MaxResults'];
        }
        if (isset($map['NextToken'])) {
            $model->nextToken = $map['NextToken'];
        }
        if (isset($map['ParentGroupId'])) {
            $model->parentGroupId = $map['ParentGroupId'];
        }
        if (isset($map['RegionId'])) {
            $model->regionId = $map['RegionId'];
        }

        return $model;
    }
}
