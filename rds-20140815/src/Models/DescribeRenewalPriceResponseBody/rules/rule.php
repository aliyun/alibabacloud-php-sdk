<?php

// This file is auto-generated, don't edit it. Thanks.

namespace AlibabaCloud\SDK\Rds\V20140815\Models\DescribeRenewalPriceResponseBody\rules;

use AlibabaCloud\Tea\Model;

class rule extends Model
{
    /**
     * @description The description of the activity.
     *
     * @example Content
     *
     * @var string
     */
    public $description;

    /**
     * @description The name of the rule.
     *
     * @example test
     *
     * @var string
     */
    public $name;

    /**
     * @description The ID of the promotion rule.
     *
     * @example 1001199213
     *
     * @var int
     */
    public $ruleId;
    protected $_name = [
        'description' => 'Description',
        'name'        => 'Name',
        'ruleId'      => 'RuleId',
    ];

    public function validate()
    {
    }

    public function toMap()
    {
        $res = [];
        if (null !== $this->description) {
            $res['Description'] = $this->description;
        }
        if (null !== $this->name) {
            $res['Name'] = $this->name;
        }
        if (null !== $this->ruleId) {
            $res['RuleId'] = $this->ruleId;
        }

        return $res;
    }

    /**
     * @param array $map
     *
     * @return rule
     */
    public static function fromMap($map = [])
    {
        $model = new self();
        if (isset($map['Description'])) {
            $model->description = $map['Description'];
        }
        if (isset($map['Name'])) {
            $model->name = $map['Name'];
        }
        if (isset($map['RuleId'])) {
            $model->ruleId = $map['RuleId'];
        }

        return $model;
    }
}
