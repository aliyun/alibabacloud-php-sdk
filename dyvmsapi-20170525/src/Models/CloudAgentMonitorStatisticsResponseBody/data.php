<?php

// This file is auto-generated, don't edit it. Thanks.

namespace AlibabaCloud\SDK\Dyvmsapi\V20170525\Models\CloudAgentMonitorStatisticsResponseBody;

use AlibabaCloud\Dara\Model;
use AlibabaCloud\SDK\Dyvmsapi\V20170525\Models\CloudAgentMonitorStatisticsResponseBody\data\agentStatistics;

class data extends Model
{
    /**
     * @var agentStatistics[]
     */
    public $agentStatistics;

    /**
     * @var string
     */
    public $date;

    /**
     * @var string
     */
    public $total;
    protected $_name = [
        'agentStatistics' => 'AgentStatistics',
        'date' => 'Date',
        'total' => 'Total',
    ];

    public function validate()
    {
        if (\is_array($this->agentStatistics)) {
            Model::validateArray($this->agentStatistics);
        }
        parent::validate();
    }

    public function toArray($noStream = false)
    {
        $res = [];
        if (null !== $this->agentStatistics) {
            if (\is_array($this->agentStatistics)) {
                $res['AgentStatistics'] = [];
                $n1 = 0;
                foreach ($this->agentStatistics as $item1) {
                    $res['AgentStatistics'][$n1] = null !== $item1 ? $item1->toArray($noStream) : $item1;
                    ++$n1;
                }
            }
        }

        if (null !== $this->date) {
            $res['Date'] = $this->date;
        }

        if (null !== $this->total) {
            $res['Total'] = $this->total;
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
        if (isset($map['AgentStatistics'])) {
            if (!empty($map['AgentStatistics'])) {
                $model->agentStatistics = [];
                $n1 = 0;
                foreach ($map['AgentStatistics'] as $item1) {
                    $model->agentStatistics[$n1] = agentStatistics::fromMap($item1);
                    ++$n1;
                }
            }
        }

        if (isset($map['Date'])) {
            $model->date = $map['Date'];
        }

        if (isset($map['Total'])) {
            $model->total = $map['Total'];
        }

        return $model;
    }
}
