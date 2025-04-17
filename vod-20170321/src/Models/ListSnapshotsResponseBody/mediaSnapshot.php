<?php

// This file is auto-generated, don't edit it. Thanks.

namespace AlibabaCloud\SDK\Vod\V20170321\Models\ListSnapshotsResponseBody;

use AlibabaCloud\Dara\Model;
use AlibabaCloud\SDK\Vod\V20170321\Models\ListSnapshotsResponseBody\mediaSnapshot\snapshots;

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
     * @var snapshots
     */
    public $snapshots;

    /**
     * @var int
     */
    public $total;
    protected $_name = [
        'creationTime' => 'CreationTime',
        'jobId' => 'JobId',
        'regular' => 'Regular',
        'snapshots' => 'Snapshots',
        'total' => 'Total',
    ];

    public function validate()
    {
        if (null !== $this->snapshots) {
            $this->snapshots->validate();
        }
        parent::validate();
    }

    public function toArray($noStream = false)
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
            $res['Snapshots'] = null !== $this->snapshots ? $this->snapshots->toArray($noStream) : $this->snapshots;
        }

        if (null !== $this->total) {
            $res['Total'] = $this->total;
        }

        return $res;
    }

    public function toMap($noStream = false)
    {
        return $this->toArray($noStream);
    }

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
