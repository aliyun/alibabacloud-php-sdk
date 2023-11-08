<?php

// This file is auto-generated, don't edit it. Thanks.

namespace AlibabaCloud\SDK\BtripOpen\V20220520\Models;

use AlibabaCloud\Tea\Model;

class IsvRuleSaveShrinkRequest extends Model
{
    /**
     * @var bool
     */
    public $applyNeed;

    /**
     * @var string
     */
    public $bookType;

    /**
     * @var string
     */
    public $bookuserListShrink;

    /**
     * @var bool
     */
    public $ruleNeed;

    /**
     * @example 1
     *
     * @var int
     */
    public $status;

    /**
     * @example 123
     *
     * @var string
     */
    public $userId;
    protected $_name = [
        'applyNeed'          => 'apply_need',
        'bookType'           => 'book_type',
        'bookuserListShrink' => 'bookuser_list',
        'ruleNeed'           => 'rule_need',
        'status'             => 'status',
        'userId'             => 'user_id',
    ];

    public function validate()
    {
    }

    public function toMap()
    {
        $res = [];
        if (null !== $this->applyNeed) {
            $res['apply_need'] = $this->applyNeed;
        }
        if (null !== $this->bookType) {
            $res['book_type'] = $this->bookType;
        }
        if (null !== $this->bookuserListShrink) {
            $res['bookuser_list'] = $this->bookuserListShrink;
        }
        if (null !== $this->ruleNeed) {
            $res['rule_need'] = $this->ruleNeed;
        }
        if (null !== $this->status) {
            $res['status'] = $this->status;
        }
        if (null !== $this->userId) {
            $res['user_id'] = $this->userId;
        }

        return $res;
    }

    /**
     * @param array $map
     *
     * @return IsvRuleSaveShrinkRequest
     */
    public static function fromMap($map = [])
    {
        $model = new self();
        if (isset($map['apply_need'])) {
            $model->applyNeed = $map['apply_need'];
        }
        if (isset($map['book_type'])) {
            $model->bookType = $map['book_type'];
        }
        if (isset($map['bookuser_list'])) {
            $model->bookuserListShrink = $map['bookuser_list'];
        }
        if (isset($map['rule_need'])) {
            $model->ruleNeed = $map['rule_need'];
        }
        if (isset($map['status'])) {
            $model->status = $map['status'];
        }
        if (isset($map['user_id'])) {
            $model->userId = $map['user_id'];
        }

        return $model;
    }
}
