<?php

// This file is auto-generated, don't edit it. Thanks.

namespace AlibabaCloud\SDK\Cms\V20240330\Models;

use AlibabaCloud\Dara\Model;

class IncidentEscalationPolicyForModify extends Model
{
    /**
     * @var string
     */
    public $description;

    /**
     * @var bool
     */
    public $enable;

    /**
     * @var IncidentEscalationStageForView[]
     */
    public $escalationStageList;

    /**
     * @var string
     */
    public $name;
    protected $_name = [
        'description' => 'description',
        'enable' => 'enable',
        'escalationStageList' => 'escalationStageList',
        'name' => 'name',
    ];

    public function validate()
    {
        if (\is_array($this->escalationStageList)) {
            Model::validateArray($this->escalationStageList);
        }
        parent::validate();
    }

    public function toArray($noStream = false)
    {
        $res = [];
        if (null !== $this->description) {
            $res['description'] = $this->description;
        }

        if (null !== $this->enable) {
            $res['enable'] = $this->enable;
        }

        if (null !== $this->escalationStageList) {
            if (\is_array($this->escalationStageList)) {
                $res['escalationStageList'] = [];
                $n1 = 0;
                foreach ($this->escalationStageList as $item1) {
                    $res['escalationStageList'][$n1] = null !== $item1 ? $item1->toArray($noStream) : $item1;
                    ++$n1;
                }
            }
        }

        if (null !== $this->name) {
            $res['name'] = $this->name;
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
        if (isset($map['description'])) {
            $model->description = $map['description'];
        }

        if (isset($map['enable'])) {
            $model->enable = $map['enable'];
        }

        if (isset($map['escalationStageList'])) {
            if (!empty($map['escalationStageList'])) {
                $model->escalationStageList = [];
                $n1 = 0;
                foreach ($map['escalationStageList'] as $item1) {
                    $model->escalationStageList[$n1] = IncidentEscalationStageForView::fromMap($item1);
                    ++$n1;
                }
            }
        }

        if (isset($map['name'])) {
            $model->name = $map['name'];
        }

        return $model;
    }
}
