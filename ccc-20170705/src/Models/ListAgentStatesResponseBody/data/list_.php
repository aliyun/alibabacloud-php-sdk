<?php

// This file is auto-generated, don't edit it. Thanks.

namespace AlibabaCloud\SDK\CCC\V20170705\Models\ListAgentStatesResponseBody\data;

use AlibabaCloud\SDK\CCC\V20170705\Models\ListAgentStatesResponseBody\data\list_\realTimeAgentState;
use AlibabaCloud\Tea\Model;

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
    }

    public function toMap()
    {
        $res = [];
        if (null !== $this->realTimeAgentState) {
            $res['RealTimeAgentState'] = [];
            if (null !== $this->realTimeAgentState && \is_array($this->realTimeAgentState)) {
                $n = 0;
                foreach ($this->realTimeAgentState as $item) {
                    $res['RealTimeAgentState'][$n++] = null !== $item ? $item->toMap() : $item;
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
        if (isset($map['RealTimeAgentState'])) {
            if (!empty($map['RealTimeAgentState'])) {
                $model->realTimeAgentState = [];
                $n                         = 0;
                foreach ($map['RealTimeAgentState'] as $item) {
                    $model->realTimeAgentState[$n++] = null !== $item ? realTimeAgentState::fromMap($item) : $item;
                }
            }
        }

        return $model;
    }
}
