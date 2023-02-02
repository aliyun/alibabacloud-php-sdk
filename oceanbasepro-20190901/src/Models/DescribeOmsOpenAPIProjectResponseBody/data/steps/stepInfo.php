<?php

// This file is auto-generated, don't edit it. Thanks.

namespace AlibabaCloud\SDK\OceanBasePro\V20190901\Models\DescribeOmsOpenAPIProjectResponseBody\data\steps;

use AlibabaCloud\SDK\OceanBasePro\V20190901\Models\DescribeOmsOpenAPIProjectResponseBody\data\steps\stepInfo\connectorFullProgressOverview;
use AlibabaCloud\Tea\Model;

class stepInfo extends Model
{
    /**
     * @description The estimated total number of rows.
     *
     * @example 10
     *
     * @var int
     */
    public $capacity;

    /**
     * @description The checkpoint. The value is a unix timestamp in seconds.
     *
     * @example 1
     *
     * @var string
     */
    public $checkpoint;

    /**
     * @description The full synchronization progress.
     *
     * @var connectorFullProgressOverview
     */
    public $connectorFullProgressOverview;

    /**
     * @description The resource deployment ID.
     *
     * @example abcd
     *
     * @var string
     */
    public $deployId;

    /**
     * @description The read/write throughput of the destination data source, in bytes per second.
     *
     * @example 1
     *
     * @var int
     */
    public $dstIops;

    /**
     * @description The read/write RPS of the destination data source.
     *
     * @example 1
     *
     * @var int
     */
    public $dstRps;

    /**
     * @description The read/write RPS baseline of the destination data source.
     *
     * @example 1
     *
     * @var int
     */
    public $dstRpsRef;

    /**
     * @description The read/write RT per record of the destination data source, in ms.
     *
     * @example 1
     *
     * @var int
     */
    public $dstRt;

    /**
     * @description The read/write RT baseline of the destination data source.
     *
     * @example 1
     *
     * @var int
     */
    public $dstRtRef;

    /**
     * @description The checkpoint collection time. The value is a unix timestamp in seconds.
     *
     * @example 1
     *
     * @var int
     */
    public $gmt;

    /**
     * @description The amount of inconsistent data found during full verification.
     *
     * @example 1
     *
     * @var int
     */
    public $inconsistencies;

    /**
     * @description The checkpoint in incremental synchronization. The value is a unix timestamp in seconds.
     *
     * @example 1
     *
     * @var int
     */
    public $incrTimestampCheckpoint;

    /**
     * @description The job ID.
     *
     * @example abcd
     *
     * @var string
     */
    public $jobId;

    /**
     * @description The number of migrated rows.
     *
     * @example 6
     *
     * @var int
     */
    public $processedRecords;

    /**
     * @description A sub-status that indicates whether this step is skipped.
     *
     * @example true
     *
     * @var bool
     */
    public $skipped;

    /**
     * @description The read throughput of the source data source, in bytes per second.
     *
     * @example 1
     *
     * @var int
     */
    public $srcIops;

    /**
     * @description The read throughput baseline of the source data source.
     *
     * @example 1
     *
     * @var int
     */
    public $srcIopsRef;

    /**
     * @description The read requests per second (RPS) of the source data source.
     *
     * @example 1
     *
     * @var int
     */
    public $srcRps;

    /**
     * @description The read RPS baseline of the source data source.
     *
     * @example 1
     *
     * @var int
     */
    public $srcRpsRef;

    /**
     * @description The read response time (RT) per record of the source data source, in ms.
     *
     * @example 1
     *
     * @var int
     */
    public $srcRt;

    /**
     * @description The read RT baseline of the source data source.
     *
     * @example 1
     *
     * @var int
     */
    public $srcRtRef;

    /**
     * @description A sub-status that indicates whether the checker has completed full verification.
     *
     * @example true
     *
     * @var bool
     */
    public $validated;
    protected $_name = [
        'capacity'                      => 'Capacity',
        'checkpoint'                    => 'Checkpoint',
        'connectorFullProgressOverview' => 'ConnectorFullProgressOverview',
        'deployId'                      => 'DeployId',
        'dstIops'                       => 'DstIops',
        'dstRps'                        => 'DstRps',
        'dstRpsRef'                     => 'DstRpsRef',
        'dstRt'                         => 'DstRt',
        'dstRtRef'                      => 'DstRtRef',
        'gmt'                           => 'Gmt',
        'inconsistencies'               => 'Inconsistencies',
        'incrTimestampCheckpoint'       => 'IncrTimestampCheckpoint',
        'jobId'                         => 'JobId',
        'processedRecords'              => 'ProcessedRecords',
        'skipped'                       => 'Skipped',
        'srcIops'                       => 'SrcIops',
        'srcIopsRef'                    => 'SrcIopsRef',
        'srcRps'                        => 'SrcRps',
        'srcRpsRef'                     => 'SrcRpsRef',
        'srcRt'                         => 'SrcRt',
        'srcRtRef'                      => 'SrcRtRef',
        'validated'                     => 'Validated',
    ];

    public function validate()
    {
    }

    public function toMap()
    {
        $res = [];
        if (null !== $this->capacity) {
            $res['Capacity'] = $this->capacity;
        }
        if (null !== $this->checkpoint) {
            $res['Checkpoint'] = $this->checkpoint;
        }
        if (null !== $this->connectorFullProgressOverview) {
            $res['ConnectorFullProgressOverview'] = null !== $this->connectorFullProgressOverview ? $this->connectorFullProgressOverview->toMap() : null;
        }
        if (null !== $this->deployId) {
            $res['DeployId'] = $this->deployId;
        }
        if (null !== $this->dstIops) {
            $res['DstIops'] = $this->dstIops;
        }
        if (null !== $this->dstRps) {
            $res['DstRps'] = $this->dstRps;
        }
        if (null !== $this->dstRpsRef) {
            $res['DstRpsRef'] = $this->dstRpsRef;
        }
        if (null !== $this->dstRt) {
            $res['DstRt'] = $this->dstRt;
        }
        if (null !== $this->dstRtRef) {
            $res['DstRtRef'] = $this->dstRtRef;
        }
        if (null !== $this->gmt) {
            $res['Gmt'] = $this->gmt;
        }
        if (null !== $this->inconsistencies) {
            $res['Inconsistencies'] = $this->inconsistencies;
        }
        if (null !== $this->incrTimestampCheckpoint) {
            $res['IncrTimestampCheckpoint'] = $this->incrTimestampCheckpoint;
        }
        if (null !== $this->jobId) {
            $res['JobId'] = $this->jobId;
        }
        if (null !== $this->processedRecords) {
            $res['ProcessedRecords'] = $this->processedRecords;
        }
        if (null !== $this->skipped) {
            $res['Skipped'] = $this->skipped;
        }
        if (null !== $this->srcIops) {
            $res['SrcIops'] = $this->srcIops;
        }
        if (null !== $this->srcIopsRef) {
            $res['SrcIopsRef'] = $this->srcIopsRef;
        }
        if (null !== $this->srcRps) {
            $res['SrcRps'] = $this->srcRps;
        }
        if (null !== $this->srcRpsRef) {
            $res['SrcRpsRef'] = $this->srcRpsRef;
        }
        if (null !== $this->srcRt) {
            $res['SrcRt'] = $this->srcRt;
        }
        if (null !== $this->srcRtRef) {
            $res['SrcRtRef'] = $this->srcRtRef;
        }
        if (null !== $this->validated) {
            $res['Validated'] = $this->validated;
        }

        return $res;
    }

    /**
     * @param array $map
     *
     * @return stepInfo
     */
    public static function fromMap($map = [])
    {
        $model = new self();
        if (isset($map['Capacity'])) {
            $model->capacity = $map['Capacity'];
        }
        if (isset($map['Checkpoint'])) {
            $model->checkpoint = $map['Checkpoint'];
        }
        if (isset($map['ConnectorFullProgressOverview'])) {
            $model->connectorFullProgressOverview = connectorFullProgressOverview::fromMap($map['ConnectorFullProgressOverview']);
        }
        if (isset($map['DeployId'])) {
            $model->deployId = $map['DeployId'];
        }
        if (isset($map['DstIops'])) {
            $model->dstIops = $map['DstIops'];
        }
        if (isset($map['DstRps'])) {
            $model->dstRps = $map['DstRps'];
        }
        if (isset($map['DstRpsRef'])) {
            $model->dstRpsRef = $map['DstRpsRef'];
        }
        if (isset($map['DstRt'])) {
            $model->dstRt = $map['DstRt'];
        }
        if (isset($map['DstRtRef'])) {
            $model->dstRtRef = $map['DstRtRef'];
        }
        if (isset($map['Gmt'])) {
            $model->gmt = $map['Gmt'];
        }
        if (isset($map['Inconsistencies'])) {
            $model->inconsistencies = $map['Inconsistencies'];
        }
        if (isset($map['IncrTimestampCheckpoint'])) {
            $model->incrTimestampCheckpoint = $map['IncrTimestampCheckpoint'];
        }
        if (isset($map['JobId'])) {
            $model->jobId = $map['JobId'];
        }
        if (isset($map['ProcessedRecords'])) {
            $model->processedRecords = $map['ProcessedRecords'];
        }
        if (isset($map['Skipped'])) {
            $model->skipped = $map['Skipped'];
        }
        if (isset($map['SrcIops'])) {
            $model->srcIops = $map['SrcIops'];
        }
        if (isset($map['SrcIopsRef'])) {
            $model->srcIopsRef = $map['SrcIopsRef'];
        }
        if (isset($map['SrcRps'])) {
            $model->srcRps = $map['SrcRps'];
        }
        if (isset($map['SrcRpsRef'])) {
            $model->srcRpsRef = $map['SrcRpsRef'];
        }
        if (isset($map['SrcRt'])) {
            $model->srcRt = $map['SrcRt'];
        }
        if (isset($map['SrcRtRef'])) {
            $model->srcRtRef = $map['SrcRtRef'];
        }
        if (isset($map['Validated'])) {
            $model->validated = $map['Validated'];
        }

        return $model;
    }
}
