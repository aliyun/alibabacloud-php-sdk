<?php

// This file is auto-generated, don't edit it. Thanks.

namespace AlibabaCloud\SDK\Mnsopen\V20220119\Models;

use AlibabaCloud\Dara\Model;

class CreateEventRuleShrinkRequest extends Model
{
    /**
     * @var string
     */
    public $endpointsShrink;

    /**
     * @var string
     */
    public $eventTypesShrink;

    /**
     * @var string
     */
    public $matchRulesShrink;

    /**
     * @var string
     */
    public $productName;

    /**
     * @var string
     */
    public $ruleName;
    protected $_name = [
        'endpointsShrink' => 'Endpoints',
        'eventTypesShrink' => 'EventTypes',
        'matchRulesShrink' => 'MatchRules',
        'productName' => 'ProductName',
        'ruleName' => 'RuleName',
    ];

    public function validate()
    {
        parent::validate();
    }

    public function toArray($noStream = false)
    {
        $res = [];
        if (null !== $this->endpointsShrink) {
            $res['Endpoints'] = $this->endpointsShrink;
        }

        if (null !== $this->eventTypesShrink) {
            $res['EventTypes'] = $this->eventTypesShrink;
        }

        if (null !== $this->matchRulesShrink) {
            $res['MatchRules'] = $this->matchRulesShrink;
        }

        if (null !== $this->productName) {
            $res['ProductName'] = $this->productName;
        }

        if (null !== $this->ruleName) {
            $res['RuleName'] = $this->ruleName;
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
        if (isset($map['Endpoints'])) {
            $model->endpointsShrink = $map['Endpoints'];
        }

        if (isset($map['EventTypes'])) {
            $model->eventTypesShrink = $map['EventTypes'];
        }

        if (isset($map['MatchRules'])) {
            $model->matchRulesShrink = $map['MatchRules'];
        }

        if (isset($map['ProductName'])) {
            $model->productName = $map['ProductName'];
        }

        if (isset($map['RuleName'])) {
            $model->ruleName = $map['RuleName'];
        }

        return $model;
    }
}
