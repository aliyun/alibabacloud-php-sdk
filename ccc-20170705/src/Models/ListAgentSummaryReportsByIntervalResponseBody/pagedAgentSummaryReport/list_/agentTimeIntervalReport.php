<?php

// This file is auto-generated, don't edit it. Thanks.

namespace AlibabaCloud\SDK\CCC\V20170705\Models\ListAgentSummaryReportsByIntervalResponseBody\pagedAgentSummaryReport\list_;

use AlibabaCloud\Dara\Model;
use AlibabaCloud\SDK\CCC\V20170705\Models\ListAgentSummaryReportsByIntervalResponseBody\pagedAgentSummaryReport\list_\agentTimeIntervalReport\intervalList;

class agentTimeIntervalReport extends Model
{
    /**
     * @var string
     */
    public $agentId;

    /**
     * @var intervalList
     */
    public $intervalList;
    protected $_name = [
        'agentId' => 'AgentId',
        'intervalList' => 'IntervalList',
    ];

    public function validate()
    {
        if (null !== $this->intervalList) {
            $this->intervalList->validate();
        }
        parent::validate();
    }

    public function toArray($noStream = false)
    {
        $res = [];
        if (null !== $this->agentId) {
            $res['AgentId'] = $this->agentId;
        }

        if (null !== $this->intervalList) {
            $res['IntervalList'] = null !== $this->intervalList ? $this->intervalList->toArray($noStream) : $this->intervalList;
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
        if (isset($map['AgentId'])) {
            $model->agentId = $map['AgentId'];
        }

        if (isset($map['IntervalList'])) {
            $model->intervalList = intervalList::fromMap($map['IntervalList']);
        }

        return $model;
    }
}
