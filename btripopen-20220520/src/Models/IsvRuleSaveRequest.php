<?php

// This file is auto-generated, don't edit it. Thanks.

namespace AlibabaCloud\SDK\BtripOpen\V20220520\Models;

use AlibabaCloud\Dara\Model;
use AlibabaCloud\SDK\BtripOpen\V20220520\Models\IsvRuleSaveRequest\bookuserList;

class IsvRuleSaveRequest extends Model
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
     * @var bookuserList[]
     */
    public $bookuserList;

    /**
     * @var bool
     */
    public $ruleNeed;

    /**
     * @var int
     */
    public $status;

    /**
     * @var string
     */
    public $userId;
    protected $_name = [
        'applyNeed' => 'apply_need',
        'bookType' => 'book_type',
        'bookuserList' => 'bookuser_list',
        'ruleNeed' => 'rule_need',
        'status' => 'status',
        'userId' => 'user_id',
    ];

    public function validate()
    {
        if (\is_array($this->bookuserList)) {
            Model::validateArray($this->bookuserList);
        }
        parent::validate();
    }

    public function toArray($noStream = false)
    {
        $res = [];
        if (null !== $this->applyNeed) {
            $res['apply_need'] = $this->applyNeed;
        }

        if (null !== $this->bookType) {
            $res['book_type'] = $this->bookType;
        }

        if (null !== $this->bookuserList) {
            if (\is_array($this->bookuserList)) {
                $res['bookuser_list'] = [];
                $n1 = 0;
                foreach ($this->bookuserList as $item1) {
                    $res['bookuser_list'][$n1] = null !== $item1 ? $item1->toArray($noStream) : $item1;
                    ++$n1;
                }
            }
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

    public function toMap($noStream = false)
    {
        return $this->toArray($noStream);
    }

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
            if (!empty($map['bookuser_list'])) {
                $model->bookuserList = [];
                $n1 = 0;
                foreach ($map['bookuser_list'] as $item1) {
                    $model->bookuserList[$n1] = bookuserList::fromMap($item1);
                    ++$n1;
                }
            }
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
