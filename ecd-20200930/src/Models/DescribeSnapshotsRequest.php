<?php

// This file is auto-generated, don't edit it. Thanks.

namespace AlibabaCloud\SDK\Ecd\V20200930\Models;

use AlibabaCloud\Tea\Model;

class DescribeSnapshotsRequest extends Model
{
    /**
     * @var string
     */
    public $desktopId;

    /**
     * @var int
     */
    public $maxResults;

    /**
     * @var string
     */
    public $nextToken;

    /**
     * @var string
     */
    public $regionId;

    /**
     * @var string
     */
    public $snapshotId;
    protected $_name = [
        'desktopId'  => 'DesktopId',
        'maxResults' => 'MaxResults',
        'nextToken'  => 'NextToken',
        'regionId'   => 'RegionId',
        'snapshotId' => 'SnapshotId',
    ];

    public function validate()
    {
    }

    public function toMap()
    {
        $res = [];
        if (null !== $this->desktopId) {
            $res['DesktopId'] = $this->desktopId;
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
        if (isset($map['DesktopId'])) {
            $model->desktopId = $map['DesktopId'];
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

        return $model;
    }
}
