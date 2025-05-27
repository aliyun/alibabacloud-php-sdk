<?php

// This file is auto-generated, don't edit it. Thanks.

namespace AlibabaCloud\SDK\Cloudsiem\V20220616\Models\DescribeWhiteRuleListResponseBody\data\responseData\expression;

use AlibabaCloud\Dara\Model;
use AlibabaCloud\SDK\Cloudsiem\V20220616\Models\DescribeWhiteRuleListResponseBody\data\responseData\expression\conditions\left;
use AlibabaCloud\SDK\Cloudsiem\V20220616\Models\DescribeWhiteRuleListResponseBody\data\responseData\expression\conditions\right;

class conditions extends Model
{
    /**
     * @var bool
     */
    public $isNot;

    /**
     * @var int
     */
    public $itemId;

    /**
     * @var left
     */
    public $left;

    /**
     * @var string
     */
    public $operator;

    /**
     * @var right
     */
    public $right;
    protected $_name = [
        'isNot' => 'IsNot',
        'itemId' => 'ItemId',
        'left' => 'Left',
        'operator' => 'Operator',
        'right' => 'Right',
    ];

    public function validate()
    {
        if (null !== $this->left) {
            $this->left->validate();
        }
        if (null !== $this->right) {
            $this->right->validate();
        }
        parent::validate();
    }

    public function toArray($noStream = false)
    {
        $res = [];
        if (null !== $this->isNot) {
            $res['IsNot'] = $this->isNot;
        }

        if (null !== $this->itemId) {
            $res['ItemId'] = $this->itemId;
        }

        if (null !== $this->left) {
            $res['Left'] = null !== $this->left ? $this->left->toArray($noStream) : $this->left;
        }

        if (null !== $this->operator) {
            $res['Operator'] = $this->operator;
        }

        if (null !== $this->right) {
            $res['Right'] = null !== $this->right ? $this->right->toArray($noStream) : $this->right;
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
