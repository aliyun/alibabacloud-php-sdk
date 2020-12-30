<?php

// This file is auto-generated, don't edit it. Thanks.

namespace AlibabaCloud\SDK\Vod\V20170321\Models\ListSnapshotsResponseBody;

use AlibabaCloud\SDK\Vod\V20170321\Models\ListSnapshotsResponseBody\mediaSnapshot\snapshots;
use AlibabaCloud\Tea\Model;

class mediaSnapshot extends Model
{
    /**
     * @var string
     */
    public $creationTime;

    /**
     * @var string
     */
    public $jobId;

    /**
     * @var string
     */
    public $regular;

    /**
     * @var int
     */
    public $total;

    /**
     * @var snapshots
     */
    public $snapshots;
    protected $_name = [
        'creationTime' => 'CreationTime',
        'jobId'        => 'JobId',
        'regular'      => 'Regular',
        'total'        => 'Total',
        'snapshots'    => 'Snapshots',
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
        if (null !== $this->total) {
            $res['Total'] = $this->total;
        }
        if (null !== $this->snapshots) {
            $res['Snapshots'] = null !== $this->snapshots ? $this->snapshots->toMap() : null;
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
        if (isset($map['Total'])) {
            $model->total = $map['Total'];
        }
        if (isset($map['Snapshots'])) {
            $model->snapshots = snapshots::fromMap($map['Snapshots']);
        }

        return $model;
    }
}
