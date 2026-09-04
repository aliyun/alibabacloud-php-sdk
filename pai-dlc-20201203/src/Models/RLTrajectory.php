<?php

// This file is auto-generated, don't edit it. Thanks.

namespace AlibabaCloud\SDK\Paidlc\V20201203\Models;

use AlibabaCloud\Dara\Model;

class RLTrajectory extends Model
{
    /**
     * @var int
     */
    public $latestTimestampMs;

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
        'latestTimestampMs' => 'LatestTimestampMs',
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
        if (null !== $this->latestTimestampMs) {
            $res['LatestTimestampMs'] = $this->latestTimestampMs;
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
        if (isset($map['LatestTimestampMs'])) {
            $model->latestTimestampMs = $map['LatestTimestampMs'];
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
