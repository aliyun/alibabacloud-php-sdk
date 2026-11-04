<?php

// This file is auto-generated, don't edit it. Thanks.

namespace AlibabaCloud\SDK\CCC\V20170705\Models\ListAgentStatesResponseBody\data;

use AlibabaCloud\Dara\Model;
use AlibabaCloud\SDK\CCC\V20170705\Models\ListAgentStatesResponseBody\data\list_\realTimeAgentState;

class list_ extends Model
{
    /**
     * @var realTimeAgentState[]
     */
    public $realTimeAgentState;
    protected $_name = [
        'realTimeAgentState' => 'RealTimeAgentState',
    ];

    public function validate()
    {
        if (\is_array($this->realTimeAgentState)) {
            Model::validateArray($this->realTimeAgentState);
        }
        parent::validate();
    }

    public function toArray($noStream = false)
    {
        $res = [];
        if (null !== $this->realTimeAgentState) {
            if (\is_array($this->realTimeAgentState)) {
                $res['RealTimeAgentState'] = [];
                $n1 = 0;
                foreach ($this->realTimeAgentState as $item1) {
                    $res['RealTimeAgentState'][$n1] = null !== $item1 ? $item1->toArray($noStream) : $item1;
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
        if (isset($map['RealTimeAgentState'])) {
            if (!empty($map['RealTimeAgentState'])) {
                $model->realTimeAgentState = [];
                $n1 = 0;
                foreach ($map['RealTimeAgentState'] as $item1) {
                    $model->realTimeAgentState[$n1] = realTimeAgentState::fromMap($item1);
                    ++$n1;
                }
            }
        }

        return $model;
    }
}
