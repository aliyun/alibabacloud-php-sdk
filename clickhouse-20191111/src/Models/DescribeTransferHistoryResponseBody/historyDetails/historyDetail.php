<?php

// This file is auto-generated, don't edit it. Thanks.

namespace AlibabaCloud\SDK\Clickhouse\V20191111\Models\DescribeTransferHistoryResponseBody\historyDetails;

use AlibabaCloud\Dara\Model;

class historyDetail extends Model
{
    /**
     * @var int
     */
    public $bytesPerMinute;
    /**
     * @var string
     */
    public $disableWriteWindows;
    /**
     * @var float
     */
    public $partsPerMinute;
    /**
     * @var string
     */
    public $progress;
    /**
     * @var string
     */
    public $sourceControlVersion;
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
    public $subJob;
    /**
     * @var string
     */
    public $subJobStatus;
    /**
     * @var string
     */
    public $targetControlVersion;
    /**
     * @var string
     */
    public $targetDBCluster;
    /**
     * @var int
     */
    public $unsyncedBytes;
    /**
     * @var int
     */
    public $unsyncedParts;
    protected $_name = [
        'bytesPerMinute'       => 'BytesPerMinute',
        'disableWriteWindows'  => 'DisableWriteWindows',
        'partsPerMinute'       => 'PartsPerMinute',
        'progress'             => 'Progress',
        'sourceControlVersion' => 'SourceControlVersion',
        'sourceDBCluster'      => 'SourceDBCluster',
        'status'               => 'Status',
        'subJob'               => 'SubJob',
        'subJobStatus'         => 'SubJobStatus',
        'targetControlVersion' => 'TargetControlVersion',
        'targetDBCluster'      => 'TargetDBCluster',
        'unsyncedBytes'        => 'UnsyncedBytes',
        'unsyncedParts'        => 'UnsyncedParts',
    ];

    public function validate()
    {
        parent::validate();
    }

    public function toArray($noStream = false)
    {
        $res = [];
        if (null !== $this->bytesPerMinute) {
            $res['BytesPerMinute'] = $this->bytesPerMinute;
        }

        if (null !== $this->disableWriteWindows) {
            $res['DisableWriteWindows'] = $this->disableWriteWindows;
        }

        if (null !== $this->partsPerMinute) {
            $res['PartsPerMinute'] = $this->partsPerMinute;
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

        if (null !== $this->subJob) {
            $res['SubJob'] = $this->subJob;
        }

        if (null !== $this->subJobStatus) {
            $res['SubJobStatus'] = $this->subJobStatus;
        }

        if (null !== $this->targetControlVersion) {
            $res['TargetControlVersion'] = $this->targetControlVersion;
        }

        if (null !== $this->targetDBCluster) {
            $res['TargetDBCluster'] = $this->targetDBCluster;
        }

        if (null !== $this->unsyncedBytes) {
            $res['UnsyncedBytes'] = $this->unsyncedBytes;
        }

        if (null !== $this->unsyncedParts) {
            $res['UnsyncedParts'] = $this->unsyncedParts;
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
        if (isset($map['BytesPerMinute'])) {
            $model->bytesPerMinute = $map['BytesPerMinute'];
        }

        if (isset($map['DisableWriteWindows'])) {
            $model->disableWriteWindows = $map['DisableWriteWindows'];
        }

        if (isset($map['PartsPerMinute'])) {
            $model->partsPerMinute = $map['PartsPerMinute'];
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

        if (isset($map['SubJob'])) {
            $model->subJob = $map['SubJob'];
        }

        if (isset($map['SubJobStatus'])) {
            $model->subJobStatus = $map['SubJobStatus'];
        }

        if (isset($map['TargetControlVersion'])) {
            $model->targetControlVersion = $map['TargetControlVersion'];
        }

        if (isset($map['TargetDBCluster'])) {
            $model->targetDBCluster = $map['TargetDBCluster'];
        }

        if (isset($map['UnsyncedBytes'])) {
            $model->unsyncedBytes = $map['UnsyncedBytes'];
        }

        if (isset($map['UnsyncedParts'])) {
            $model->unsyncedParts = $map['UnsyncedParts'];
        }

        return $model;
    }
}
