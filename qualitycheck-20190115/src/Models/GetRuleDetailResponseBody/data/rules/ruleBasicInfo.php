<?php

// This file is auto-generated, don't edit it. Thanks.

namespace AlibabaCloud\SDK\Qualitycheck\V20190115\Models\GetRuleDetailResponseBody\data\rules;

use AlibabaCloud\Dara\Model;
use AlibabaCloud\SDK\Qualitycheck\V20190115\Models\GetRuleDetailResponseBody\data\rules\ruleBasicInfo\businessCategories;
use AlibabaCloud\SDK\Qualitycheck\V20190115\Models\GetRuleDetailResponseBody\data\rules\ruleBasicInfo\triggers;

class ruleBasicInfo extends Model
{
    /**
     * @var businessCategories
     */
    public $businessCategories;
    /**
     * @var string
     */
    public $rid;
    /**
     * @var string
     */
    public $ruleLambda;
    /**
     * @var triggers
     */
    public $triggers;
    protected $_name = [
        'businessCategories' => 'BusinessCategories',
        'rid'                => 'Rid',
        'ruleLambda'         => 'RuleLambda',
        'triggers'           => 'Triggers',
    ];

    public function validate()
    {
        if (null !== $this->businessCategories) {
            $this->businessCategories->validate();
        }
        if (null !== $this->triggers) {
            $this->triggers->validate();
        }
        parent::validate();
    }

    public function toArray($noStream = false)
    {
        $res = [];
        if (null !== $this->businessCategories) {
            $res['BusinessCategories'] = null !== $this->businessCategories ? $this->businessCategories->toArray($noStream) : $this->businessCategories;
        }

        if (null !== $this->rid) {
            $res['Rid'] = $this->rid;
        }

        if (null !== $this->ruleLambda) {
            $res['RuleLambda'] = $this->ruleLambda;
        }

        if (null !== $this->triggers) {
            $res['Triggers'] = null !== $this->triggers ? $this->triggers->toArray($noStream) : $this->triggers;
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
        if (isset($map['BusinessCategories'])) {
            $model->businessCategories = businessCategories::fromMap($map['BusinessCategories']);
        }

        if (isset($map['Rid'])) {
            $model->rid = $map['Rid'];
        }

        if (isset($map['RuleLambda'])) {
            $model->ruleLambda = $map['RuleLambda'];
        }

        if (isset($map['Triggers'])) {
            $model->triggers = triggers::fromMap($map['Triggers']);
        }

        return $model;
    }
}
