<?php

// This file is auto-generated, don't edit it. Thanks.

namespace AlibabaCloud\SDK\Paidlc\V20201203\Models;

use AlibabaCloud\Dara\Model;

class RLSample extends Model
{
    /**
     * @var string
     */
    public $latestDetail;

    /**
     * @var string
     */
    public $latestStage;

    /**
     * @var string
     */
    public $latestStatus;

    /**
     * @var int
     */
    public $latestTimestampMs;

    /**
     * @var string
     */
    public $promptUid;

    /**
     * @var string
     */
    public $sampleIndex;

    /**
     * @var string
     */
    public $terminalState;

    /**
     * @var int
     */
    public $traceCount;
    protected $_name = [
        'latestDetail' => 'LatestDetail',
        'latestStage' => 'LatestStage',
        'latestStatus' => 'LatestStatus',
        'latestTimestampMs' => 'LatestTimestampMs',
        'promptUid' => 'PromptUid',
        'sampleIndex' => 'SampleIndex',
        'terminalState' => 'TerminalState',
        'traceCount' => 'TraceCount',
    ];

    public function validate()
    {
        parent::validate();
    }

    public function toArray($noStream = false)
    {
        $res = [];
        if (null !== $this->latestDetail) {
            $res['LatestDetail'] = $this->latestDetail;
        }

        if (null !== $this->latestStage) {
            $res['LatestStage'] = $this->latestStage;
        }

        if (null !== $this->latestStatus) {
            $res['LatestStatus'] = $this->latestStatus;
        }

        if (null !== $this->latestTimestampMs) {
            $res['LatestTimestampMs'] = $this->latestTimestampMs;
        }

        if (null !== $this->promptUid) {
            $res['PromptUid'] = $this->promptUid;
        }

        if (null !== $this->sampleIndex) {
            $res['SampleIndex'] = $this->sampleIndex;
        }

        if (null !== $this->terminalState) {
            $res['TerminalState'] = $this->terminalState;
        }

        if (null !== $this->traceCount) {
            $res['TraceCount'] = $this->traceCount;
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
        if (isset($map['LatestDetail'])) {
            $model->latestDetail = $map['LatestDetail'];
        }

        if (isset($map['LatestStage'])) {
            $model->latestStage = $map['LatestStage'];
        }

        if (isset($map['LatestStatus'])) {
            $model->latestStatus = $map['LatestStatus'];
        }

        if (isset($map['LatestTimestampMs'])) {
            $model->latestTimestampMs = $map['LatestTimestampMs'];
        }

        if (isset($map['PromptUid'])) {
            $model->promptUid = $map['PromptUid'];
        }

        if (isset($map['SampleIndex'])) {
            $model->sampleIndex = $map['SampleIndex'];
        }

        if (isset($map['TerminalState'])) {
            $model->terminalState = $map['TerminalState'];
        }

        if (isset($map['TraceCount'])) {
            $model->traceCount = $map['TraceCount'];
        }

        return $model;
    }
}
