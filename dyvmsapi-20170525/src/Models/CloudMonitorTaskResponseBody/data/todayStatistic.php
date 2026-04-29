<?php

// This file is auto-generated, don't edit it. Thanks.

namespace AlibabaCloud\SDK\Dyvmsapi\V20170525\Models\CloudMonitorTaskResponseBody\data;

use AlibabaCloud\Dara\Model;
use AlibabaCloud\SDK\Dyvmsapi\V20170525\Models\CloudMonitorTaskResponseBody\data\todayStatistic\ctiLinkTaskProperty;

class todayStatistic extends Model
{
    /**
     * @var int
     */
    public $agentCount;

    /**
     * @var int
     */
    public $answerCount;

    /**
     * @var int
     */
    public $callAgentCount;

    /**
     * @var int
     */
    public $calledCount;

    /**
     * @var ctiLinkTaskProperty
     */
    public $ctiLinkTaskProperty;

    /**
     * @var int
     */
    public $uncalledCount;
    protected $_name = [
        'agentCount' => 'AgentCount',
        'answerCount' => 'AnswerCount',
        'callAgentCount' => 'CallAgentCount',
        'calledCount' => 'CalledCount',
        'ctiLinkTaskProperty' => 'CtiLinkTaskProperty',
        'uncalledCount' => 'UncalledCount',
    ];

    public function validate()
    {
        if (null !== $this->ctiLinkTaskProperty) {
            $this->ctiLinkTaskProperty->validate();
        }
        parent::validate();
    }

    public function toArray($noStream = false)
    {
        $res = [];
        if (null !== $this->agentCount) {
            $res['AgentCount'] = $this->agentCount;
        }

        if (null !== $this->answerCount) {
            $res['AnswerCount'] = $this->answerCount;
        }

        if (null !== $this->callAgentCount) {
            $res['CallAgentCount'] = $this->callAgentCount;
        }

        if (null !== $this->calledCount) {
            $res['CalledCount'] = $this->calledCount;
        }

        if (null !== $this->ctiLinkTaskProperty) {
            $res['CtiLinkTaskProperty'] = null !== $this->ctiLinkTaskProperty ? $this->ctiLinkTaskProperty->toArray($noStream) : $this->ctiLinkTaskProperty;
        }

        if (null !== $this->uncalledCount) {
            $res['UncalledCount'] = $this->uncalledCount;
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
        if (isset($map['AgentCount'])) {
            $model->agentCount = $map['AgentCount'];
        }

        if (isset($map['AnswerCount'])) {
            $model->answerCount = $map['AnswerCount'];
        }

        if (isset($map['CallAgentCount'])) {
            $model->callAgentCount = $map['CallAgentCount'];
        }

        if (isset($map['CalledCount'])) {
            $model->calledCount = $map['CalledCount'];
        }

        if (isset($map['CtiLinkTaskProperty'])) {
            $model->ctiLinkTaskProperty = ctiLinkTaskProperty::fromMap($map['CtiLinkTaskProperty']);
        }

        if (isset($map['UncalledCount'])) {
            $model->uncalledCount = $map['UncalledCount'];
        }

        return $model;
    }
}
