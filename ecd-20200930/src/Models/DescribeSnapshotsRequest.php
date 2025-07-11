<?php

// This file is auto-generated, don't edit it. Thanks.

namespace AlibabaCloud\SDK\Ecd\V20200930\Models;

use AlibabaCloud\Tea\Model;

class DescribeSnapshotsRequest extends Model
{
    /**
     * @description The user who creates the snapshot.
     *
     * @example Administrator
     *
     * @var string
     */
    public $creator;

    /**
     * @description The ID of the cloud computer.
     *
     * @example ecd-gx2x1dhsmucyy****
     *
     * @var string
     */
    public $desktopId;

    /**
     * @description The name of the cloud computer.
     *
     * @example testName
     *
     * @var string
     */
    public $desktopName;

    /**
     * @description The end of the time range to query. Specify the time in the [ISO 8601](https://help.aliyun.com/document_detail/25696.html) standard in the `yyyy-MM-ddTHH:mm:ssZ` format. The time must be in UTC.
     *
     * @example 2020-11-31T06:32:31Z
     *
     * @var string
     */
    public $endTime;

    /**
     * @description The number of entries per page.
     *
     *   Maximum value: 100.
     *   Default value: 10.
     *
     * @example 10
     *
     * @var int
     */
    public $maxResults;

    /**
     * @description The pagination token that is used in the next request to retrieve a new page of results. You must specify the token that is obtained from the previous query as the value of NextToken.
     *
     * @example 8051af8d01b5479bec9f5ddf02e4a8fbd0ab6e7e43f8****
     *
     * @var string
     */
    public $nextToken;

    /**
     * @var string
     */
    public $osType;

    /**
     * @description The region ID. You can call the [DescribeRegions](~~DescribeRegions~~) operation to query the list of regions where Elastic Desktop Service (EDS) Enterprise is available.
     *
     * This parameter is required.
     *
     * @example cn-hangzhou
     *
     * @var string
     */
    public $regionId;

    /**
     * @description The snapshot ID.
     *
     * @example s-2ze81owrnv9pity4****
     *
     * @var string
     */
    public $snapshotId;

    /**
     * @description The name of the snapshot. The name must be 2 to 127 characters in length. The name must start with a letter. The name can contain letters, digits, underscores (_), and hyphens (-). The name cannot start with `auto` because snapshots whose names start with auto are recognized as automatic snapshots.
     *
     * @example test_data_disk
     *
     * @var string
     */
    public $snapshotName;

    /**
     * @description The category of the snapshots.
     *
     * Default value: all. Valid values:
     *
     *   all: all snapshot categories
     *
     * <!-- -->
     *
     * <!-- -->
     *
     * <!-- -->
     *
     *   auto: automatic snapshots
     *
     * <!-- -->
     *
     * <!-- -->
     *
     * <!-- -->
     *
     *   user: manual snapshots
     *
     * <!-- -->
     *
     * <!-- -->
     *
     * <!-- -->
     *
     * @example user
     *
     * @var string
     */
    public $snapshotType;

    /**
     * @description The disk for which you want to create a snapshot.
     *
     * >  The value of this parameter is not case-sensitive.
     *
     * Valid values:
     *
     *   Data: the data disk.
     *   System: the system disk.
     *
     * @example system
     *
     * @var string
     */
    public $sourceDiskType;

    /**
     * @description The beginning of the time range to query. Specify the time in the [ISO 8601](https://help.aliyun.com/document_detail/25696.html) standard in the `yyyy-MM-ddTHH:mm:ssZ` format. The time must be in UTC.
     *
     * @example 2020-11-30T06:32:31Z
     *
     * @var string
     */
    public $startTime;
    protected $_name = [
        'creator' => 'Creator',
        'desktopId' => 'DesktopId',
        'desktopName' => 'DesktopName',
        'endTime' => 'EndTime',
        'maxResults' => 'MaxResults',
        'nextToken' => 'NextToken',
        'osType' => 'OsType',
        'regionId' => 'RegionId',
        'snapshotId' => 'SnapshotId',
        'snapshotName' => 'SnapshotName',
        'snapshotType' => 'SnapshotType',
        'sourceDiskType' => 'SourceDiskType',
        'startTime' => 'StartTime',
    ];

    public function validate() {}

    public function toMap()
    {
        $res = [];
        if (null !== $this->creator) {
            $res['Creator'] = $this->creator;
        }
        if (null !== $this->desktopId) {
            $res['DesktopId'] = $this->desktopId;
        }
        if (null !== $this->desktopName) {
            $res['DesktopName'] = $this->desktopName;
        }
        if (null !== $this->endTime) {
            $res['EndTime'] = $this->endTime;
        }
        if (null !== $this->maxResults) {
            $res['MaxResults'] = $this->maxResults;
        }
        if (null !== $this->nextToken) {
            $res['NextToken'] = $this->nextToken;
        }
        if (null !== $this->osType) {
            $res['OsType'] = $this->osType;
        }
        if (null !== $this->regionId) {
            $res['RegionId'] = $this->regionId;
        }
        if (null !== $this->snapshotId) {
            $res['SnapshotId'] = $this->snapshotId;
        }
        if (null !== $this->snapshotName) {
            $res['SnapshotName'] = $this->snapshotName;
        }
        if (null !== $this->snapshotType) {
            $res['SnapshotType'] = $this->snapshotType;
        }
        if (null !== $this->sourceDiskType) {
            $res['SourceDiskType'] = $this->sourceDiskType;
        }
        if (null !== $this->startTime) {
            $res['StartTime'] = $this->startTime;
        }

        return $res;
    }

    /**
     * @param array $map
     *
     * @return DescribeSnapshotsRequest
     */
    public static function fromMap($map = [])
    {
        $model = new self();
        if (isset($map['Creator'])) {
            $model->creator = $map['Creator'];
        }
        if (isset($map['DesktopId'])) {
            $model->desktopId = $map['DesktopId'];
        }
        if (isset($map['DesktopName'])) {
            $model->desktopName = $map['DesktopName'];
        }
        if (isset($map['EndTime'])) {
            $model->endTime = $map['EndTime'];
        }
        if (isset($map['MaxResults'])) {
            $model->maxResults = $map['MaxResults'];
        }
        if (isset($map['NextToken'])) {
            $model->nextToken = $map['NextToken'];
        }
        if (isset($map['OsType'])) {
            $model->osType = $map['OsType'];
        }
        if (isset($map['RegionId'])) {
            $model->regionId = $map['RegionId'];
        }
        if (isset($map['SnapshotId'])) {
            $model->snapshotId = $map['SnapshotId'];
        }
        if (isset($map['SnapshotName'])) {
            $model->snapshotName = $map['SnapshotName'];
        }
        if (isset($map['SnapshotType'])) {
            $model->snapshotType = $map['SnapshotType'];
        }
        if (isset($map['SourceDiskType'])) {
            $model->sourceDiskType = $map['SourceDiskType'];
        }
        if (isset($map['StartTime'])) {
            $model->startTime = $map['StartTime'];
        }

        return $model;
    }
}
