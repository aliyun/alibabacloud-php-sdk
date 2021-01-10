<?php

// This file is auto-generated, don't edit it. Thanks.

namespace AlibabaCloud\SDK\Qualitycheck\V20190115\Models\GetRuleDetailResponseBody\data\rules;

use AlibabaCloud\SDK\Qualitycheck\V20190115\Models\GetRuleDetailResponseBody\data\rules\ruleBasicInfo\businessCategories;
use AlibabaCloud\SDK\Qualitycheck\V20190115\Models\GetRuleDetailResponseBody\data\rules\ruleBasicInfo\triggers;
use AlibabaCloud\Tea\Model;

class ruleBasicInfo extends Model
{
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

    /**
     * @var businessCategories
     */
    public $businessCategories;
    protected $_name = [
        'rid'                => 'Rid',
        'ruleLambda'         => 'RuleLambda',
        'triggers'           => 'Triggers',
        'businessCategories' => 'BusinessCategories',
    ];

    public function validate()
    {
    }

    public function toMap()
    {
        $res = [];
        if (null !== $this->rid) {
            $res['Rid'] = $this->rid;
        }
        if (null !== $this->ruleLambda) {
            $res['RuleLambda'] = $this->ruleLambda;
        }
        if (null !== $this->triggers) {
            $res['Triggers'] = null !== $this->triggers ? $this->triggers->toMap() : null;
        }
        if (null !== $this->businessCategories) {
            $res['BusinessCategories'] = null !== $this->businessCategories ? $this->businessCategories->toMap() : null;
        }

        return $res;
    }

    /**
     * @param array $map
     *
     * @return ruleBasicInfo
     */
    public static function fromMap($map = [])
    {
        $model = new self();
        if (isset($map['Rid'])) {
            $model->rid = $map['Rid'];
        }
        if (isset($map['RuleLambda'])) {
            $model->ruleLambda = $map['RuleLambda'];
        }
        if (isset($map['Triggers'])) {
            $model->triggers = triggers::fromMap($map['Triggers']);
        }
        if (isset($map['BusinessCategories'])) {
            $model->businessCategories = businessCategories::fromMap($map['BusinessCategories']);
        }

        return $model;
    }
}
