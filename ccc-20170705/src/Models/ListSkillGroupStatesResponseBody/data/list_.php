<?php

// This file is auto-generated, don't edit it. Thanks.

namespace AlibabaCloud\SDK\CCC\V20170705\Models\ListSkillGroupStatesResponseBody\data;

use AlibabaCloud\SDK\CCC\V20170705\Models\ListSkillGroupStatesResponseBody\data\list_\realTimeSkillGroupState;
use AlibabaCloud\Tea\Model;

class list_ extends Model
{
    /**
     * @var realTimeSkillGroupState[]
     */
    public $realTimeSkillGroupState;
    protected $_name = [
        'realTimeSkillGroupState' => 'RealTimeSkillGroupState',
    ];

    public function validate()
    {
    }

    public function toMap()
    {
        $res = [];
        if (null !== $this->realTimeSkillGroupState) {
            $res['RealTimeSkillGroupState'] = [];
            if (null !== $this->realTimeSkillGroupState && \is_array($this->realTimeSkillGroupState)) {
                $n = 0;
                foreach ($this->realTimeSkillGroupState as $item) {
                    $res['RealTimeSkillGroupState'][$n++] = null !== $item ? $item->toMap() : $item;
                }
            }
        }

        return $res;
    }

    /**
     * @param array $map
     *
     * @return list
     */
    public static function fromMap($map = [])
    {
        $model = new self();
        if (isset($map['RealTimeSkillGroupState'])) {
            if (!empty($map['RealTimeSkillGroupState'])) {
                $model->realTimeSkillGroupState = [];
                $n                              = 0;
                foreach ($map['RealTimeSkillGroupState'] as $item) {
                    $model->realTimeSkillGroupState[$n++] = null !== $item ? realTimeSkillGroupState::fromMap($item) : $item;
                }
            }
        }

        return $model;
    }
}
