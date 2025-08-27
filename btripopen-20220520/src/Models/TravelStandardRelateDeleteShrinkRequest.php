<?php

// This file is auto-generated, don't edit it. Thanks.

namespace AlibabaCloud\SDK\BtripOpen\V20220520\Models;

use AlibabaCloud\Dara\Model;

class TravelStandardRelateDeleteShrinkRequest extends Model
{
    /**
     * @var bool
     */
    public $fromGroup;

    /**
     * @var string
     */
    public $removeListShrink;

    /**
     * @var int
     */
    public $ruleId;
    protected $_name = [
        'fromGroup' => 'from_group',
        'removeListShrink' => 'remove_list',
        'ruleId' => 'rule_id',
    ];

    public function validate()
    {
        parent::validate();
    }

    public function toArray($noStream = false)
    {
        $res = [];
        if (null !== $this->fromGroup) {
            $res['from_group'] = $this->fromGroup;
        }

        if (null !== $this->removeListShrink) {
            $res['remove_list'] = $this->removeListShrink;
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
            $model->removeListShrink = $map['remove_list'];
        }

        if (isset($map['rule_id'])) {
            $model->ruleId = $map['rule_id'];
        }

        return $model;
    }
}
