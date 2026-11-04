<?php

// This file is auto-generated, don't edit it. Thanks.

namespace AlibabaCloud\SDK\CCC\V20170705\Models\ListAgentSummaryReportsByIntervalResponseBody\pagedAgentSummaryReport\list_\agentTimeIntervalReport;

use AlibabaCloud\Dara\Model;
use AlibabaCloud\SDK\CCC\V20170705\Models\ListAgentSummaryReportsByIntervalResponseBody\pagedAgentSummaryReport\list_\agentTimeIntervalReport\intervalList\agentSummaryReport;

class intervalList extends Model
{
    /**
     * @var agentSummaryReport[]
     */
    public $agentSummaryReport;
    protected $_name = [
        'agentSummaryReport' => 'AgentSummaryReport',
    ];

    public function validate()
    {
        if (\is_array($this->agentSummaryReport)) {
            Model::validateArray($this->agentSummaryReport);
        }
        parent::validate();
    }

    public function toArray($noStream = false)
    {
        $res = [];
        if (null !== $this->agentSummaryReport) {
            if (\is_array($this->agentSummaryReport)) {
                $res['AgentSummaryReport'] = [];
                $n1 = 0;
                foreach ($this->agentSummaryReport as $item1) {
                    $res['AgentSummaryReport'][$n1] = null !== $item1 ? $item1->toArray($noStream) : $item1;
                    ++$n1;
                }
            }
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
        if (isset($map['AgentSummaryReport'])) {
            if (!empty($map['AgentSummaryReport'])) {
                $model->agentSummaryReport = [];
                $n1 = 0;
                foreach ($map['AgentSummaryReport'] as $item1) {
                    $model->agentSummaryReport[$n1] = agentSummaryReport::fromMap($item1);
                    ++$n1;
                }
            }
        }

        return $model;
    }
}
