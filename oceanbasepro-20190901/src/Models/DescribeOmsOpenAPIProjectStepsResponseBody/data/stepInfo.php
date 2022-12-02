<?php

// This file is auto-generated, don't edit it. Thanks.

namespace AlibabaCloud\SDK\OceanBasePro\V20190901\Models\DescribeOmsOpenAPIProjectStepsResponseBody\data;

use AlibabaCloud\SDK\OceanBasePro\V20190901\Models\DescribeOmsOpenAPIProjectStepsResponseBody\data\stepInfo\connectorFullProgressOverview;
use AlibabaCloud\Tea\Model;

class stepInfo extends Model
{
    /**
     * @var int
     */
    public $capacity;

    /**
     * @var string
     */
    public $checkpoint;

    /**
     * @var connectorFullProgressOverview
     */
    public $connectorFullProgressOverview;

    /**
     * @var string
     */
    public $deployId;

    /**
     * @var int
     */
    public $dstIops;

    /**
     * @var int
     */
    public $dstRps;

    /**
     * @var int
     */
    public $dstRpsRef;

    /**
     * @var int
     */
    public $dstRt;

    /**
     * @var int
     */
    public $dstRtRef;

    /**
     * @var int
     */
    public $gmt;

    /**
     * @var int
     */
    public $inconsistencies;

    /**
     * @var int
     */
    public $incrTimestampCheckpoint;

    /**
     * @var string
     */
    public $jobId;

    /**
     * @var int
     */
    public $processedRecords;

    /**
     * @var bool
     */
    public $skipped;

    /**
     * @var int
     */
    public $srcIops;

    /**
     * @var int
     */
    public $srcIopsRef;

    /**
     * @var int
     */
    public $srcRps;

    /**
     * @var int
     */
    public $srcRpsRef;

    /**
     * @var int
     */
    public $srcRt;

    /**
     * @var int
     */
    public $srcRtRef;

    /**
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
