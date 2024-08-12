<?php

// This file is auto-generated, don't edit it. Thanks.

namespace AlibabaCloud\SDK\Clickhouse\V20191111\Models\DescribeTransferHistoryResponseBody\historyDetails;

use AlibabaCloud\Tea\Model;

class historyDetail extends Model
{
    /**
     * @var string
     */
    public $disableWriteWindows;

    /**
     * @description The progress of the data migration.
     *
     * @example 100%
     *
     * @var string
     */
    public $progress;

    /**
     * @var string
     */
    public $sourceControlVersion;

    /**
     * @description The ID of the source cluster.
     *
     * @example cc-bp108z124a8o7****
     *
     * @var string
     */
    public $sourceDBCluster;

    /**
     * @description The status of the data migration task. Valid values:
     *
     *   **Finished**: The data migration task is complete.
     *   **Processing**: The data migration task is in progress.
     *
     * @example Finished
     *
     * @var string
     */
    public $status;

    /**
     * @var string
     */
    public $targetControlVersion;

    /**
     * @description The ID of the destination cluster.
     *
     * @example cc-bp13zkh9uw523****
     *
     * @var string
     */
    public $targetDBCluster;
    protected $_name = [
        'disableWriteWindows'  => 'DisableWriteWindows',
        'progress'             => 'Progress',
        'sourceControlVersion' => 'SourceControlVersion',
        'sourceDBCluster'      => 'SourceDBCluster',
        'status'               => 'Status',
        'targetControlVersion' => 'TargetControlVersion',
        'targetDBCluster'      => 'TargetDBCluster',
    ];

    public function validate()
    {
    }

    public function toMap()
    {
        $res = [];
        if (null !== $this->disableWriteWindows) {
            $res['DisableWriteWindows'] = $this->disableWriteWindows;
        }
        if (null !== $this->progress) {
            $res['Progress'] = $this->progress;
        }
        if (null !== $this->sourceControlVersion) {
            $res['SourceControlVersion'] = $this->sourceControlVersion;
        }
        if (null !== $this->sourceDBCluster) {
            $res['SourceDBCluster'] = $this->sourceDBCluster;
        }
        if (null !== $this->status) {
            $res['Status'] = $this->status;
        }
        if (null !== $this->targetControlVersion) {
            $res['TargetControlVersion'] = $this->targetControlVersion;
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
        if (isset($map['DisableWriteWindows'])) {
            $model->disableWriteWindows = $map['DisableWriteWindows'];
        }
        if (isset($map['Progress'])) {
            $model->progress = $map['Progress'];
        }
        if (isset($map['SourceControlVersion'])) {
            $model->sourceControlVersion = $map['SourceControlVersion'];
        }
        if (isset($map['SourceDBCluster'])) {
            $model->sourceDBCluster = $map['SourceDBCluster'];
        }
        if (isset($map['Status'])) {
            $model->status = $map['Status'];
        }
        if (isset($map['TargetControlVersion'])) {
            $model->targetControlVersion = $map['TargetControlVersion'];
        }
        if (isset($map['TargetDBCluster'])) {
            $model->targetDBCluster = $map['TargetDBCluster'];
        }

        return $model;
    }
}
