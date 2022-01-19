<?php

// This file is auto-generated, don't edit it. Thanks.

namespace AlibabaCloud\SDK\Clickhouse\V20191111\Models\DescribeTransferHistoryResponseBody\historyDetails;

use AlibabaCloud\Tea\Model;

class historyDetail extends Model
{
    /**
     * @var string
     */
    public $progress;

    /**
     * @var string
     */
    public $sourceDBCluster;

    /**
     * @var string
     */
    public $status;

    /**
     * @var string
     */
    public $targetDBCluster;
    protected $_name = [
        'progress'        => 'Progress',
        'sourceDBCluster' => 'SourceDBCluster',
        'status'          => 'Status',
        'targetDBCluster' => 'TargetDBCluster',
    ];

    public function validate()
    {
    }

    public function toMap()
    {
        $res = [];
        if (null !== $this->progress) {
            $res['Progress'] = $this->progress;
        }
        if (null !== $this->sourceDBCluster) {
            $res['SourceDBCluster'] = $this->sourceDBCluster;
        }
        if (null !== $this->status) {
            $res['Status'] = $this->status;
        }
        if (null !== $this->targetDBCluster) {
            $res['TargetDBCluster'] = $this->targetDBCluster;
        }

        return $res;
    }

    /**
     * @param array $map
     *
     * @return historyDetail
     */
    public static function fromMap($map = [])
    {
        $model = new self();
        if (isset($map['Progress'])) {
            $model->progress = $map['Progress'];
        }
        if (isset($map['SourceDBCluster'])) {
            $model->sourceDBCluster = $map['SourceDBCluster'];
        }
        if (isset($map['Status'])) {
            $model->status = $map['Status'];
        }
        if (isset($map['TargetDBCluster'])) {
            $model->targetDBCluster = $map['TargetDBCluster'];
        }

        return $model;
    }
}
