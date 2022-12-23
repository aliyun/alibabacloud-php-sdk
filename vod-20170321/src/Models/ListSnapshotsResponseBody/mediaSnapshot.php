<?php

// This file is auto-generated, don't edit it. Thanks.

namespace AlibabaCloud\SDK\Vod\V20170321\Models\ListSnapshotsResponseBody;

use AlibabaCloud\SDK\Vod\V20170321\Models\ListSnapshotsResponseBody\mediaSnapshot\snapshots;
use AlibabaCloud\Tea\Model;

class mediaSnapshot extends Model
{
    /**
     * @description The time when the snapshot job was created. The time follows the ISO 8601 standard in the *yyyy-MM-dd*T*HH:mm:ss*Z format. The time is displayed in UTC.
     *
     * @example 2017-12-20T12:23:45Z
     *
     * @var string
     */
    public $creationTime;

    /**
     * @description The ID of the snapshot job.
     *
     * @example ad90a501b1b9472374ad005046****
     *
     * @var string
     */
    public $jobId;

    /**
     * @description The rule for generating snapshot URLs.
     *
     * @example http://example.aliyundoc.com/snapshot/sample{SnapshotCount}.jpg
     *
     * @var string
     */
    public $regular;

    /**
     * @description The snapshot data.
     *
     * @var snapshots
     */
    public $snapshots;

    /**
     * @description The total number of snapshots.
     *
     * @example 100
     *
     * @var int
     */
    public $total;
    protected $_name = [
        'creationTime' => 'CreationTime',
        'jobId'        => 'JobId',
        'regular'      => 'Regular',
        'snapshots'    => 'Snapshots',
        'total'        => 'Total',
    ];

    public function validate()
    {
    }

    public function toMap()
    {
        $res = [];
        if (null !== $this->creationTime) {
            $res['CreationTime'] = $this->creationTime;
        }
        if (null !== $this->jobId) {
            $res['JobId'] = $this->jobId;
        }
        if (null !== $this->regular) {
            $res['Regular'] = $this->regular;
        }
        if (null !== $this->snapshots) {
            $res['Snapshots'] = null !== $this->snapshots ? $this->snapshots->toMap() : null;
        }
        if (null !== $this->total) {
            $res['Total'] = $this->total;
        }

        return $res;
    }

    /**
     * @param array $map
     *
     * @return mediaSnapshot
     */
    public static function fromMap($map = [])
    {
        $model = new self();
        if (isset($map['CreationTime'])) {
            $model->creationTime = $map['CreationTime'];
        }
        if (isset($map['JobId'])) {
            $model->jobId = $map['JobId'];
        }
        if (isset($map['Regular'])) {
            $model->regular = $map['Regular'];
        }
        if (isset($map['Snapshots'])) {
            $model->snapshots = snapshots::fromMap($map['Snapshots']);
        }
        if (isset($map['Total'])) {
            $model->total = $map['Total'];
        }

        return $model;
    }
}
