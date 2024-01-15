<?php

// This file is auto-generated, don't edit it. Thanks.

namespace AlibabaCloud\SDK\Qualitycheck\V20190115\Models\GetRuleDetailResponseBody\data\rules;

use AlibabaCloud\SDK\Qualitycheck\V20190115\Models\GetRuleDetailResponseBody\data\rules\ruleBasicInfo\businessCategories;
use AlibabaCloud\SDK\Qualitycheck\V20190115\Models\GetRuleDetailResponseBody\data\rules\ruleBasicInfo\triggers;
use AlibabaCloud\Tea\Model;

class ruleBasicInfo extends Model
{
    /**
     * @var businessCategories
     */
    public $businessCategories;

    /**
     * @example 4
     *
     * @var string
     */
    public $rid;

    /**
     * @example 7&&!8
     *
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
    }

    public function toMap()
    {
        $res = [];
        if (null !== $this->businessCategories) {
            $res['BusinessCategories'] = null !== $this->businessCategories ? $this->businessCategories->toMap() : null;
        }
        if (null !== $this->rid) {
            $res['Rid'] = $this->rid;
        }
        if (null !== $this->ruleLambda) {
            $res['RuleLambda'] = $this->ruleLambda;
        }
        if (null !== $this->triggers) {
            $res['Triggers'] = null !== $this->triggers ? $this->triggers->toMap() : null;
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
