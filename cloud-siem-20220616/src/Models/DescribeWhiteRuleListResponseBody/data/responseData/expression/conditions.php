<?php

// This file is auto-generated, don't edit it. Thanks.

namespace AlibabaCloud\SDK\Cloudsiem\V20220616\Models\DescribeWhiteRuleListResponseBody\data\responseData\expression;

use AlibabaCloud\SDK\Cloudsiem\V20220616\Models\DescribeWhiteRuleListResponseBody\data\responseData\expression\conditions\left;
use AlibabaCloud\SDK\Cloudsiem\V20220616\Models\DescribeWhiteRuleListResponseBody\data\responseData\expression\conditions\right;
use AlibabaCloud\Tea\Model;

class conditions extends Model
{
    /**
     * @description Indicates whether the result is inverted. Valid values:
     *
     *   true
     *   false
     *
     * @example false
     *
     * @var bool
     */
    public $isNot;

    /**
     * @description The ID of the rule condition.
     *
     * @example 1
     *
     * @var int
     */
    public $itemId;

    /**
     * @description The left operand of the rule condition.
     *
     * @var left
     */
    public $left;

    /**
     * @description The logical operator of the rule condition. Valid values:
     *
     *   `=`: equals to
     *   `<>`: does not equal to
     *   `in`: contains
     *   `not in`: does not contain
     *   `REGEXP`: matches a regular expression
     *   `NOT REGEXP`: does not match a regular expression
     *
     * @example REGEXP
     *
     * @var string
     */
    public $operator;

    /**
     * @description The right operand of the rule condition.
     *
     * @var right
     */
    public $right;
    protected $_name = [
        'isNot'    => 'IsNot',
        'itemId'   => 'ItemId',
        'left'     => 'Left',
        'operator' => 'Operator',
        'right'    => 'Right',
    ];

    public function validate()
    {
    }

    public function toMap()
    {
        $res = [];
        if (null !== $this->isNot) {
            $res['IsNot'] = $this->isNot;
        }
        if (null !== $this->itemId) {
            $res['ItemId'] = $this->itemId;
        }
        if (null !== $this->left) {
            $res['Left'] = null !== $this->left ? $this->left->toMap() : null;
        }
        if (null !== $this->operator) {
            $res['Operator'] = $this->operator;
        }
        if (null !== $this->right) {
            $res['Right'] = null !== $this->right ? $this->right->toMap() : null;
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
        if (isset($map['IsNot'])) {
            $model->isNot = $map['IsNot'];
        }
        if (isset($map['ItemId'])) {
            $model->itemId = $map['ItemId'];
        }
        if (isset($map['Left'])) {
            $model->left = left::fromMap($map['Left']);
        }
        if (isset($map['Operator'])) {
            $model->operator = $map['Operator'];
        }
        if (isset($map['Right'])) {
            $model->right = right::fromMap($map['Right']);
        }

        return $model;
    }
}
