<?php

// This file is auto-generated, don't edit it. Thanks.

namespace AlibabaCloud\SDK\CCC\V20170705\Models\ListSkillGroupStatesResponseBody\data;

use AlibabaCloud\Dara\Model;
use AlibabaCloud\SDK\CCC\V20170705\Models\ListSkillGroupStatesResponseBody\data\list_\realTimeSkillGroupState;

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
        if (\is_array($this->realTimeSkillGroupState)) {
            Model::validateArray($this->realTimeSkillGroupState);
        }
        parent::validate();
    }

    public function toArray($noStream = false)
    {
        $res = [];
        if (null !== $this->realTimeSkillGroupState) {
            if (\is_array($this->realTimeSkillGroupState)) {
                $res['RealTimeSkillGroupState'] = [];
                $n1 = 0;
                foreach ($this->realTimeSkillGroupState as $item1) {
                    $res['RealTimeSkillGroupState'][$n1] = null !== $item1 ? $item1->toArray($noStream) : $item1;
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
        if (isset($map['RealTimeSkillGroupState'])) {
            if (!empty($map['RealTimeSkillGroupState'])) {
                $model->realTimeSkillGroupState = [];
                $n1 = 0;
                foreach ($map['RealTimeSkillGroupState'] as $item1) {
                    $model->realTimeSkillGroupState[$n1] = realTimeSkillGroupState::fromMap($item1);
                    ++$n1;
                }
            }
        }

        return $model;
    }
}
