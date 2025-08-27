<?php

// This file is auto-generated, don't edit it. Thanks.

namespace AlibabaCloud\SDK\BtripOpen\V20220520\Models;

use AlibabaCloud\Dara\Model;
use AlibabaCloud\SDK\BtripOpen\V20220520\Models\TravelStandardRelateDeleteRequest\removeList;

class TravelStandardRelateDeleteRequest extends Model
{
    /**
     * @var bool
     */
    public $fromGroup;

    /**
     * @var removeList[]
     */
    public $removeList;

    /**
     * @var int
     */
    public $ruleId;
    protected $_name = [
        'fromGroup' => 'from_group',
        'removeList' => 'remove_list',
        'ruleId' => 'rule_id',
    ];

    public function validate()
    {
        if (\is_array($this->removeList)) {
            Model::validateArray($this->removeList);
        }
        parent::validate();
    }

    public function toArray($noStream = false)
    {
        $res = [];
        if (null !== $this->fromGroup) {
            $res['from_group'] = $this->fromGroup;
        }

        if (null !== $this->removeList) {
            if (\is_array($this->removeList)) {
                $res['remove_list'] = [];
                $n1 = 0;
                foreach ($this->removeList as $item1) {
                    $res['remove_list'][$n1] = null !== $item1 ? $item1->toArray($noStream) : $item1;
                    ++$n1;
                }
            }
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
        if (isset($map['from_group'])) {
            $model->fromGroup = $map['from_group'];
        }

        if (isset($map['remove_list'])) {
            if (!empty($map['remove_list'])) {
                $model->removeList = [];
                $n1 = 0;
                foreach ($map['remove_list'] as $item1) {
                    $model->removeList[$n1] = removeList::fromMap($item1);
                    ++$n1;
                }
            }
        }

        if (isset($map['rule_id'])) {
            $model->ruleId = $map['rule_id'];
        }

        return $model;
    }
}
