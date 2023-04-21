<?php

// This file is auto-generated, don't edit it. Thanks.

namespace AlibabaCloud\SDK\Ecd\V20200930\Models;

use AlibabaCloud\Tea\Model;

class DescribeSnapshotsRequest extends Model
{
    /**
     * @example Administrator
     *
     * @var string
     */
    public $creator;

    /**
     * @description The ID of the cloud desktop.
     *
     * @example ecd-gx2x1dhsmucyy****
     *
     * @var string
     */
    public $desktopId;

    /**
     * @description The name of the cloud desktop.
     *
     * @example testName
     *
     * @var string
     */
    public $desktopName;

    /**
     * @description The time when you want to stop creating the snapshot. Specify the time in the [ISO 8601](~~25696~~) standard in the yyyy-mm-ddthh:mm:ssz format. The time must be in UTC.
     *
     * @example 2020-11-31T06:32:31Z
     *
     * @var string
     */
    public $endTime;

    /**
     * @description The maximum number of entries to return on each page.
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
     * @description The token that determines the start point of the query. Set the value to the value of NextToken that is returned from the last call.
     *
     * @example 8051af8d01b5479bec9f5ddf02e4a8fbd0ab6e7e43f8****
     *
     * @var string
     */
    public $nextToken;

    /**
     * @description The ID of the region. You can call the [DescribeRegions](~~196646~~) operation to query the most recent region list.
     *
     * @example cn-hangzhou
     *
     * @var string
     */
    public $regionId;

    /**
     * @description The ID of the snapshot.
     *
     * @example s-2ze81owrnv9pity4****
     *
     * @var string
     */
    public $snapshotId;

    /**
     * @description The name of the snapshot. The name must be 2 to 128 characters in length. It can contain letters, digits, colons (:), underscores (\_), and hyphens (-). It must start with a letter and cannot start with `http://` or `https://`.
     *
     * It cannot start with `auto` because snapshots whose names start with auto are recognized as automatic snapshots.
     * @example test data disk
     *
     * @var string
     */
    public $snapshotName;

    /**
     * @description The type of the snapshot. Default value: all.
     *
     * Valid values:
     *
     *   auto: auto snapshot
     *   user: manual snapshot
     *   all: all types of snapshots
     *
     * @example user
     *
     * @var string
     */
    public $snapshotType;

    /**
     * @description The type of the source disk for which you want to create the snapshot. Valid values:
     *
     *   System: system disk
     *   Data: data disk
     *
     * > The value of this parameter is not case-sensitive.
     * @example system
     *
     * @var string
     */
    public $sourceDiskType;

    /**
     * @description The time when you want to create the snapshot. Specify the time in the [ISO 8601](~~25696~~) standard in the yyyy-mm-ddthh:mm:ssz format. The time must be in UTC.
     *
     * @example 2020-11-30T06:32:31Z
     *
     * @var string
     */
    public $startTime;
    protected $_name = [
        'creator'        => 'Creator',
        'desktopId'      => 'DesktopId',
        'desktopName'    => 'DesktopName',
        'endTime'        => 'EndTime',
        'maxResults'     => 'MaxResults',
        'nextToken'      => 'NextToken',
        'regionId'       => 'RegionId',
        'snapshotId'     => 'SnapshotId',
        'snapshotName'   => 'SnapshotName',
        'snapshotType'   => 'SnapshotType',
        'sourceDiskType' => 'SourceDiskType',
        'startTime'      => 'StartTime',
    ];

    public function validate()
    {
    }

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
