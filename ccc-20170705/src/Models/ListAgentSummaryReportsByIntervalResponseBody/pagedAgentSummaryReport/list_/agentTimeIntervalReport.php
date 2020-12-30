<?php

// This file is auto-generated, don't edit it. Thanks.

namespace AlibabaCloud\SDK\CCC\V20170705\Models\ListAgentSummaryReportsByIntervalResponseBody\pagedAgentSummaryReport\list_;

use AlibabaCloud\SDK\CCC\V20170705\Models\ListAgentSummaryReportsByIntervalResponseBody\pagedAgentSummaryReport\list_\agentTimeIntervalReport\intervalList;
use AlibabaCloud\Tea\Model;

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
        'agentId'      => 'AgentId',
        'intervalList' => 'IntervalList',
    ];

    public function validate()
    {
    }

    public function toMap()
    {
        $res = [];
        if (null !== $this->agentId) {
            $res['AgentId'] = $this->agentId;
        }
        if (null !== $this->intervalList) {
            $res['IntervalList'] = null !== $this->intervalList ? $this->intervalList->toMap() : null;
        }

        return $res;
    }

    /**
     * @param array $map
     *
     * @return agentTimeIntervalReport
     */
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
