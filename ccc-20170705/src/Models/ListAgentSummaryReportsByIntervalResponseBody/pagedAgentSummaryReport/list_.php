<?php

// This file is auto-generated, don't edit it. Thanks.

namespace AlibabaCloud\SDK\CCC\V20170705\Models\ListAgentSummaryReportsByIntervalResponseBody\pagedAgentSummaryReport;

use AlibabaCloud\Dara\Model;
use AlibabaCloud\SDK\CCC\V20170705\Models\ListAgentSummaryReportsByIntervalResponseBody\pagedAgentSummaryReport\list_\agentTimeIntervalReport;

class list_ extends Model
{
    /**
     * @var agentTimeIntervalReport[]
     */
    public $agentTimeIntervalReport;
    protected $_name = [
        'agentTimeIntervalReport' => 'AgentTimeIntervalReport',
    ];

    public function validate()
    {
        if (\is_array($this->agentTimeIntervalReport)) {
            Model::validateArray($this->agentTimeIntervalReport);
        }
        parent::validate();
    }

    public function toArray($noStream = false)
    {
        $res = [];
        if (null !== $this->agentTimeIntervalReport) {
            if (\is_array($this->agentTimeIntervalReport)) {
                $res['AgentTimeIntervalReport'] = [];
                $n1 = 0;
                foreach ($this->agentTimeIntervalReport as $item1) {
                    $res['AgentTimeIntervalReport'][$n1] = null !== $item1 ? $item1->toArray($noStream) : $item1;
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
        if (isset($map['AgentTimeIntervalReport'])) {
            if (!empty($map['AgentTimeIntervalReport'])) {
                $model->agentTimeIntervalReport = [];
                $n1 = 0;
                foreach ($map['AgentTimeIntervalReport'] as $item1) {
                    $model->agentTimeIntervalReport[$n1] = agentTimeIntervalReport::fromMap($item1);
                    ++$n1;
                }
            }
        }

        return $model;
    }
}
