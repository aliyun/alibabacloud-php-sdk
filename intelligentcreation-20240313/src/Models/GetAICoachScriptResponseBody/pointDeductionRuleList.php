<?php

// This file is auto-generated, don't edit it. Thanks.

namespace AlibabaCloud\SDK\IntelligentCreation\V20240313\Models\GetAICoachScriptResponseBody;

use AlibabaCloud\Tea\Model;

class pointDeductionRuleList extends Model
{
    /**
     * @example demo
     *
     * @var string
     */
    public $description;

    /**
     * @var string[]
     */
    public $punishmentTypes;

    /**
     * @var string
     */
    public $ruleValue;

    /**
     * @example 90
     *
     * @var int
     */
    public $weight;
    protected $_name = [
        'description'     => 'description',
        'punishmentTypes' => 'punishmentTypes',
        'ruleValue'       => 'ruleValue',
        'weight'          => 'weight',
    ];

    public function validate()
    {
    }

    public function toMap()
    {
        $res = [];
        if (null !== $this->description) {
            $res['description'] = $this->description;
        }
        if (null !== $this->punishmentTypes) {
            $res['punishmentTypes'] = $this->punishmentTypes;
        }
        if (null !== $this->ruleValue) {
            $res['ruleValue'] = $this->ruleValue;
        }
        if (null !== $this->weight) {
            $res['weight'] = $this->weight;
        }

        return $res;
    }

    /**
     * @param array $map
     *
     * @return pointDeductionRuleList
     */
    public static function fromMap($map = [])
    {
        $model = new self();
        if (isset($map['description'])) {
            $model->description = $map['description'];
        }
        if (isset($map['punishmentTypes'])) {
            if (!empty($map['punishmentTypes'])) {
                $model->punishmentTypes = $map['punishmentTypes'];
            }
        }
        if (isset($map['ruleValue'])) {
            $model->ruleValue = $map['ruleValue'];
        }
        if (isset($map['weight'])) {
            $model->weight = $map['weight'];
        }

        return $model;
    }
}
