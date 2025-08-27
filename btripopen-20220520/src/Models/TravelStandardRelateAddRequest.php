<?php

// This file is auto-generated, don't edit it. Thanks.

namespace AlibabaCloud\SDK\BtripOpen\V20220520\Models;

use AlibabaCloud\Dara\Model;
use AlibabaCloud\SDK\BtripOpen\V20220520\Models\TravelStandardRelateAddRequest\addList;

class TravelStandardRelateAddRequest extends Model
{
    /**
     * @var addList[]
     */
    public $addList;

    /**
     * @var bool
     */
    public $fromGroup;

    /**
     * @var int
     */
    public $ruleId;
    protected $_name = [
        'addList' => 'add_list',
        'fromGroup' => 'from_group',
        'ruleId' => 'rule_id',
    ];

    public function validate()
    {
        if (\is_array($this->addList)) {
            Model::validateArray($this->addList);
        }
        parent::validate();
    }

    public function toArray($noStream = false)
    {
        $res = [];
        if (null !== $this->addList) {
            if (\is_array($this->addList)) {
                $res['add_list'] = [];
                $n1 = 0;
                foreach ($this->addList as $item1) {
                    $res['add_list'][$n1] = null !== $item1 ? $item1->toArray($noStream) : $item1;
                    ++$n1;
                }
            }
        }

        if (null !== $this->fromGroup) {
            $res['from_group'] = $this->fromGroup;
        }

        if (null !== $this->ruleId) {
            $res['rule_id'] = $this->ruleId;
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
        if (isset($map['add_list'])) {
            if (!empty($map['add_list'])) {
                $model->addList = [];
                $n1 = 0;
                foreach ($map['add_list'] as $item1) {
                    $model->addList[$n1] = addList::fromMap($item1);
                    ++$n1;
                }
            }
        }

        if (isset($map['from_group'])) {
            $model->fromGroup = $map['from_group'];
        }

        if (isset($map['rule_id'])) {
            $model->ruleId = $map['rule_id'];
        }

        return $model;
    }
}
