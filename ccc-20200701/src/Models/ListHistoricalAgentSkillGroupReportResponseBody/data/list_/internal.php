<?php

// This file is auto-generated, don't edit it. Thanks.

namespace AlibabaCloud\SDK\CCC\V20200701\Models\ListHistoricalAgentSkillGroupReportResponseBody\data\list_;

use AlibabaCloud\Dara\Model;

class internal extends Model
{
    /**
     * @var int
     */
    public $averageTalkTime;

    /**
     * @var int
     */
    public $callsAnswered;

    /**
     * @var int
     */
    public $callsDialed;

    /**
     * @var int
     */
    public $callsHandled;

    /**
     * @var int
     */
    public $callsOffered;

    /**
     * @var int
     */
    public $callsTalk;

    /**
     * @var int
     */
    public $callsTalked;

    /**
     * @var int
     */
    public $maxTalkTime;

    /**
     * @var int
     */
    public $totalTalkTime;
    protected $_name = [
        'averageTalkTime' => 'AverageTalkTime',
        'callsAnswered' => 'CallsAnswered',
        'callsDialed' => 'CallsDialed',
        'callsHandled' => 'CallsHandled',
        'callsOffered' => 'CallsOffered',
        'callsTalk' => 'CallsTalk',
        'callsTalked' => 'CallsTalked',
        'maxTalkTime' => 'MaxTalkTime',
        'totalTalkTime' => 'TotalTalkTime',
    ];

    public function validate()
    {
        parent::validate();
    }

    public function toArray($noStream = false)
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

        if (null !== $this->callsTalked) {
            $res['CallsTalked'] = $this->callsTalked;
        }

        if (null !== $this->maxTalkTime) {
            $res['MaxTalkTime'] = $this->maxTalkTime;
        }

        if (null !== $this->totalTalkTime) {
            $res['TotalTalkTime'] = $this->totalTalkTime;
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

        if (isset($map['CallsTalked'])) {
            $model->callsTalked = $map['CallsTalked'];
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
