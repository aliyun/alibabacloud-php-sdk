<?php

// This file is auto-generated, don't edit it. Thanks.

namespace AlibabaCloud\SDK\Qualitycheck\V20190115\Models;

use AlibabaCloud\Dara\Model;
use AlibabaCloud\SDK\Qualitycheck\V20190115\Models\NextNodeSituations\conditionGroup;

class NextNodeSituations extends Model
{
    /**
     * @var conditionGroup[]
     */
    public $conditionGroup;
    /**
     * @var string
     */
    public $type;
    protected $_name = [
        'conditionGroup' => 'ConditionGroup',
        'type'           => 'Type',
    ];

    public function validate()
    {
        if (\is_array($this->conditionGroup)) {
            Model::validateArray($this->conditionGroup);
        }
        parent::validate();
    }

    public function toArray($noStream = false)
    {
        $res = [];
        if (null !== $this->conditionGroup) {
            if (\is_array($this->conditionGroup)) {
                $res['ConditionGroup'] = [];
                $n1                    = 0;
                foreach ($this->conditionGroup as $item1) {
                    $res['ConditionGroup'][$n1++] = null !== $item1 ? $item1->toArray($noStream) : $item1;
                }
            }
        }

        if (null !== $this->type) {
            $res['Type'] = $this->type;
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
        if (isset($map['ConditionGroup'])) {
            if (!empty($map['ConditionGroup'])) {
                $model->conditionGroup = [];
                $n1                    = 0;
                foreach ($map['ConditionGroup'] as $item1) {
                    $model->conditionGroup[$n1++] = conditionGroup::fromMap($item1);
                }
            }
        }

        if (isset($map['Type'])) {
            $model->type = $map['Type'];
        }

        return $model;
    }
}
