<?php

// This file is auto-generated, don't edit it. Thanks.

namespace AlibabaCloud\SDK\Sls\V20201230\Models;

use AlibabaCloud\Tea\Model;

class ConditionConfiguration extends Model
{
    /**
     * @example cnt > 100
     *
     * @var string
     */
    public $condition;

    /**
     * @example __count__ > 5
     *
     * @var string
     */
    public $countCondition;
    protected $_name = [
        'condition'      => 'condition',
        'countCondition' => 'countCondition',
    ];

    public function validate()
    {
    }

    public function toMap()
    {
        $res = [];
        if (null !== $this->condition) {
            $res['condition'] = $this->condition;
        }
        if (null !== $this->countCondition) {
            $res['countCondition'] = $this->countCondition;
        }

        return $res;
    }

    /**
     * @param array $map
     *
     * @return ConditionConfiguration
     */
    public static function fromMap($map = [])
    {
        $model = new self();
        if (isset($map['condition'])) {
            $model->condition = $map['condition'];
        }
        if (isset($map['countCondition'])) {
            $model->countCondition = $map['countCondition'];
        }

        return $model;
    }
}
