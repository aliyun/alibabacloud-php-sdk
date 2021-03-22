<?php

// This file is auto-generated, don't edit it. Thanks.

namespace AlibabaCloud\SDK\Wafopenapi\V20180117\Models\DescribeAclRulesResponseBody\result\aclRules\aclRule;

use AlibabaCloud\SDK\Wafopenapi\V20180117\Models\DescribeAclRulesResponseBody\result\aclRules\aclRule\conditions\condition;
use AlibabaCloud\Tea\Model;

class conditions extends Model
{
    /**
     * @var condition[]
     */
    public $condition;
    protected $_name = [
        'condition' => 'condition',
    ];

    public function validate()
    {
    }

    public function toMap()
    {
        $res = [];
        if (null !== $this->condition) {
            $res['condition'] = [];
            if (null !== $this->condition && \is_array($this->condition)) {
                $n = 0;
                foreach ($this->condition as $item) {
                    $res['condition'][$n++] = null !== $item ? $item->toMap() : $item;
                }
            }
        }

        return $res;
    }

    /**
     * @param array $map
     *
     * @return conditions
     */
    public static function fromMap($map = [])
    {
        $model = new self();
        if (isset($map['condition'])) {
            if (!empty($map['condition'])) {
                $model->condition = [];
                $n                = 0;
                foreach ($map['condition'] as $item) {
                    $model->condition[$n++] = null !== $item ? condition::fromMap($item) : $item;
                }
            }
        }

        return $model;
    }
}
