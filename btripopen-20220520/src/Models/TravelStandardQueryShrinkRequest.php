<?php

// This file is auto-generated, don't edit it. Thanks.

namespace AlibabaCloud\SDK\BtripOpen\V20220520\Models;

use AlibabaCloud\Dara\Model;

class TravelStandardQueryShrinkRequest extends Model
{
    /**
     * @var bool
     */
    public $fromGroup;

    /**
     * @var int
     */
    public $ruleCode;

    /**
     * @var string
     */
    public $serviceTypeListShrink;
    protected $_name = [
        'fromGroup' => 'from_group',
        'ruleCode' => 'rule_code',
        'serviceTypeListShrink' => 'service_type_list',
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

        if (null !== $this->ruleCode) {
            $res['rule_code'] = $this->ruleCode;
        }

        if (null !== $this->serviceTypeListShrink) {
            $res['service_type_list'] = $this->serviceTypeListShrink;
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

        if (isset($map['rule_code'])) {
            $model->ruleCode = $map['rule_code'];
        }

        if (isset($map['service_type_list'])) {
            $model->serviceTypeListShrink = $map['service_type_list'];
        }

        return $model;
    }
}
