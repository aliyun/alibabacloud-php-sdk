<?php

// This file is auto-generated, don't edit it. Thanks.

namespace AlibabaCloud\SDK\Cms\V20240330\Models\AlertRuleCondition;

use AlibabaCloud\SDK\Cms\V20240330\Models\AlertRuleCondition\compositeEscalation\escalations;
use AlibabaCloud\Tea\Model;

class compositeEscalation extends Model
{
    /**
     * @var escalations[]
     */
    public $escalations;

    /**
     * @var string
     */
    public $level;

    /**
     * @var string
     */
    public $relation;

    /**
     * @var int
     */
    public $times;
    protected $_name = [
        'escalations' => 'escalations',
        'level' => 'level',
        'relation' => 'relation',
        'times' => 'times',
    ];

    public function validate() {}

    public function toMap()
    {
        $res = [];
        if (null !== $this->escalations) {
            $res['escalations'] = [];
            if (null !== $this->escalations && \is_array($this->escalations)) {
                $n = 0;
                foreach ($this->escalations as $item) {
                    $res['escalations'][$n++] = null !== $item ? $item->toMap() : $item;
                }
            }
        }
        if (null !== $this->level) {
            $res['level'] = $this->level;
        }
        if (null !== $this->relation) {
            $res['relation'] = $this->relation;
        }
        if (null !== $this->times) {
            $res['times'] = $this->times;
        }

        return $res;
    }

    /**
     * @param array $map
     *
     * @return compositeEscalation
     */
    public static function fromMap($map = [])
    {
        $model = new self();
        if (isset($map['escalations'])) {
            if (!empty($map['escalations'])) {
                $model->escalations = [];
                $n = 0;
                foreach ($map['escalations'] as $item) {
                    $model->escalations[$n++] = null !== $item ? escalations::fromMap($item) : $item;
                }
            }
        }
        if (isset($map['level'])) {
            $model->level = $map['level'];
        }
        if (isset($map['relation'])) {
            $model->relation = $map['relation'];
        }
        if (isset($map['times'])) {
            $model->times = $map['times'];
        }

        return $model;
    }
}
