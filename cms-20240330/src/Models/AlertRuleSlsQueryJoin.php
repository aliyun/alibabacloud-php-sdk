<?php

// This file is auto-generated, don't edit it. Thanks.

namespace AlibabaCloud\SDK\Cms\V20240330\Models;

use AlibabaCloud\SDK\Cms\V20240330\Models\AlertRuleSlsQueryJoin\conditions;
use AlibabaCloud\Tea\Model;

class AlertRuleSlsQueryJoin extends Model
{
    /**
     * @var conditions[]
     */
    public $conditions;

    /**
     * @description 集合操作类型。
     * ● CrossJoin： 笛卡尔积
     * ● FullJoin：全联
     * ● InnerJoin：内联
     * ● LeftExclude： 左斥
     * ● RightExclude：右斥
     * ● LeftJoin：左联
     * ● RightJoin：右联
     * ● NoJoin：不合并
     * ● Concat： 拼接
     * https://help.aliyun.com/zh/sls/user-guide/set-query-statistics-statement
     *
     * This parameter is required.
     *
     * @var string
     */
    public $type;
    protected $_name = [
        'conditions' => 'conditions',
        'type' => 'type',
    ];

    public function validate() {}

    public function toMap()
    {
        $res = [];
        if (null !== $this->conditions) {
            $res['conditions'] = [];
            if (null !== $this->conditions && \is_array($this->conditions)) {
                $n = 0;
                foreach ($this->conditions as $item) {
                    $res['conditions'][$n++] = null !== $item ? $item->toMap() : $item;
                }
            }
        }
        if (null !== $this->type) {
            $res['type'] = $this->type;
        }

        return $res;
    }

    /**
     * @param array $map
     *
     * @return AlertRuleSlsQueryJoin
     */
    public static function fromMap($map = [])
    {
        $model = new self();
        if (isset($map['conditions'])) {
            if (!empty($map['conditions'])) {
                $model->conditions = [];
                $n = 0;
                foreach ($map['conditions'] as $item) {
                    $model->conditions[$n++] = null !== $item ? conditions::fromMap($item) : $item;
                }
            }
        }
        if (isset($map['type'])) {
            $model->type = $map['type'];
        }

        return $model;
    }
}
