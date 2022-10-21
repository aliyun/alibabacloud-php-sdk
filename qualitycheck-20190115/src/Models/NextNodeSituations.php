<?php

// This file is auto-generated, don't edit it. Thanks.

namespace AlibabaCloud\SDK\Qualitycheck\V20190115\Models;

use AlibabaCloud\SDK\Qualitycheck\V20190115\Models\NextNodeSituations\conditionGroup;
use AlibabaCloud\Tea\Model;

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
    }

    public function toMap()
    {
        $res = [];
        if (null !== $this->conditionGroup) {
            $res['ConditionGroup'] = [];
            if (null !== $this->conditionGroup && \is_array($this->conditionGroup)) {
                $n = 0;
                foreach ($this->conditionGroup as $item) {
                    $res['ConditionGroup'][$n++] = null !== $item ? $item->toMap() : $item;
                }
            }
        }
        if (null !== $this->type) {
            $res['Type'] = $this->type;
        }

        return $res;
    }

    /**
     * @param array $map
     *
     * @return NextNodeSituations
     */
    public static function fromMap($map = [])
    {
        $model = new self();
        if (isset($map['ConditionGroup'])) {
            if (!empty($map['ConditionGroup'])) {
                $model->conditionGroup = [];
                $n                     = 0;
                foreach ($map['ConditionGroup'] as $item) {
                    $model->conditionGroup[$n++] = null !== $item ? conditionGroup::fromMap($item) : $item;
                }
            }
        }
        if (isset($map['Type'])) {
            $model->type = $map['Type'];
        }

        return $model;
    }
}
