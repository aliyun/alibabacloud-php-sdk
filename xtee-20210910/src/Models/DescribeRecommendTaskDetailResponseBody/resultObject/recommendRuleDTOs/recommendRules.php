<?php

// This file is auto-generated, don't edit it. Thanks.

namespace AlibabaCloud\SDK\Xtee\V20210910\Models\DescribeRecommendTaskDetailResponseBody\resultObject\recommendRuleDTOs;

use AlibabaCloud\Tea\Model;

class recommendRules extends Model
{
    /**
     * @var string
     */
    public $left;

    /**
     * @var string
     */
    public $operator;

    /**
     * @var string
     */
    public $right;
    protected $_name = [
        'left'     => 'left',
        'operator' => 'operator',
        'right'    => 'right',
    ];

    public function validate()
    {
    }

    public function toMap()
    {
        $res = [];
        if (null !== $this->left) {
            $res['left'] = $this->left;
        }
        if (null !== $this->operator) {
            $res['operator'] = $this->operator;
        }
        if (null !== $this->right) {
            $res['right'] = $this->right;
        }

        return $res;
    }

    /**
     * @param array $map
     *
     * @return recommendRules
     */
    public static function fromMap($map = [])
    {
        $model = new self();
        if (isset($map['left'])) {
            $model->left = $map['left'];
        }
        if (isset($map['operator'])) {
            $model->operator = $map['operator'];
        }
        if (isset($map['right'])) {
            $model->right = $map['right'];
        }

        return $model;
    }
}
