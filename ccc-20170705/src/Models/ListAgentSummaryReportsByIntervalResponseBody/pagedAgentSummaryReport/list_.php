<?php

// This file is auto-generated, don't edit it. Thanks.

namespace AlibabaCloud\SDK\CCC\V20170705\Models\ListAgentSummaryReportsByIntervalResponseBody\pagedAgentSummaryReport;

use AlibabaCloud\SDK\CCC\V20170705\Models\ListAgentSummaryReportsByIntervalResponseBody\pagedAgentSummaryReport\list_\agentTimeIntervalReport;
use AlibabaCloud\Tea\Model;

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
    }

    public function toMap()
    {
        $res = [];
        if (null !== $this->agentTimeIntervalReport) {
            $res['AgentTimeIntervalReport'] = [];
            if (null !== $this->agentTimeIntervalReport && \is_array($this->agentTimeIntervalReport)) {
                $n = 0;
                foreach ($this->agentTimeIntervalReport as $item) {
                    $res['AgentTimeIntervalReport'][$n++] = null !== $item ? $item->toMap() : $item;
                }
            }
        }

        return $res;
    }

    /**
     * @param array $map
     *
     * @return list_
     */
    public static function fromMap($map = [])
    {
        $model = new self();
        if (isset($map['AgentTimeIntervalReport'])) {
            if (!empty($map['AgentTimeIntervalReport'])) {
                $model->agentTimeIntervalReport = [];
                $n                              = 0;
                foreach ($map['AgentTimeIntervalReport'] as $item) {
                    $model->agentTimeIntervalReport[$n++] = null !== $item ? agentTimeIntervalReport::fromMap($item) : $item;
                }
            }
        }

        return $model;
    }
}
