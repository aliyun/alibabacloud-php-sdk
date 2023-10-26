<?php

// This file is auto-generated, don't edit it. Thanks.

namespace AlibabaCloud\SDK\CCC\V20200701\Models\ListHistoricalAgentSkillGroupReportResponseBody\data\list_;

use AlibabaCloud\Tea\Model;

class internal extends Model
{
    /**
     * @example 100
     *
     * @var int
     */
    public $averageTalkTime;

    /**
     * @example 100
     *
     * @var int
     */
    public $callsAnswered;

    /**
     * @example 100
     *
     * @var int
     */
    public $callsDialed;

    /**
     * @example 100
     *
     * @var int
     */
    public $callsHandled;

    /**
     * @example 100
     *
     * @var int
     */
    public $callsOffered;

    /**
     * @example 100
     *
     * @var int
     */
    public $callsTalk;

    /**
     * @example 100
     *
     * @var int
     */
    public $maxTalkTime;

    /**
     * @example 100
     *
     * @var int
     */
    public $totalTalkTime;
    protected $_name = [
        'averageTalkTime' => 'AverageTalkTime',
        'callsAnswered'   => 'CallsAnswered',
        'callsDialed'     => 'CallsDialed',
        'callsHandled'    => 'CallsHandled',
        'callsOffered'    => 'CallsOffered',
        'callsTalk'       => 'CallsTalk',
        'maxTalkTime'     => 'MaxTalkTime',
        'totalTalkTime'   => 'TotalTalkTime',
    ];

    public function validate()
    {
    }

    public function toMap()
    {
        $res = [];
        if (null !== $this->averageTalkTime) {
            $res['AverageTalkTime'] = $this->averageTalkTime;
        }
        if (null !== $this->callsAnswered) {
            $res['CallsAnswered'] = $this->callsAnswered;
        }
        if (null !== $this->callsDialed) {
            $res['CallsDialed'] = $this->callsDialed;
        }
        if (null !== $this->callsHandled) {
            $res['CallsHandled'] = $this->callsHandled;
        }
        if (null !== $this->callsOffered) {
            $res['CallsOffered'] = $this->callsOffered;
        }
        if (null !== $this->callsTalk) {
            $res['CallsTalk'] = $this->callsTalk;
        }
        if (null !== $this->maxTalkTime) {
            $res['MaxTalkTime'] = $this->maxTalkTime;
        }
        if (null !== $this->totalTalkTime) {
            $res['TotalTalkTime'] = $this->totalTalkTime;
        }

        return $res;
    }

    /**
     * @param array $map
     *
     * @return internal
     */
    public static function fromMap($map = [])
    {
        $model = new self();
        if (isset($map['AverageTalkTime'])) {
            $model->averageTalkTime = $map['AverageTalkTime'];
        }
        if (isset($map['CallsAnswered'])) {
            $model->callsAnswered = $map['CallsAnswered'];
        }
        if (isset($map['CallsDialed'])) {
            $model->callsDialed = $map['CallsDialed'];
        }
        if (isset($map['CallsHandled'])) {
            $model->callsHandled = $map['CallsHandled'];
        }
        if (isset($map['CallsOffered'])) {
            $model->callsOffered = $map['CallsOffered'];
        }
        if (isset($map['CallsTalk'])) {
            $model->callsTalk = $map['CallsTalk'];
        }
        if (isset($map['MaxTalkTime'])) {
            $model->maxTalkTime = $map['MaxTalkTime'];
        }
        if (isset($map['TotalTalkTime'])) {
            $model->totalTalkTime = $map['TotalTalkTime'];
        }

        return $model;
    }
}
