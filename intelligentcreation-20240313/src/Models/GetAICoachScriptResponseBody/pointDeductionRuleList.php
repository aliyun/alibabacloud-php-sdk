<?php

// This file is auto-generated, don't edit it. Thanks.

namespace AlibabaCloud\SDK\IntelligentCreation\V20240313\Models\GetAICoachScriptResponseBody;

use AlibabaCloud\Dara\Model;

class pointDeductionRuleList extends Model
{
    /**
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
        if (\is_array($this->punishmentTypes)) {
            Model::validateArray($this->punishmentTypes);
        }
        parent::validate();
    }

    public function toArray($noStream = false)
    {
        $res = [];
        if (null !== $this->description) {
            $res['description'] = $this->description;
        }

        if (null !== $this->punishmentTypes) {
            if (\is_array($this->punishmentTypes)) {
                $res['punishmentTypes'] = [];
                $n1                     = 0;
                foreach ($this->punishmentTypes as $item1) {
                    $res['punishmentTypes'][$n1++] = $item1;
                }
            }
        }

        if (null !== $this->ruleValue) {
            $res['ruleValue'] = $this->ruleValue;
        }

        if (null !== $this->weight) {
            $res['weight'] = $this->weight;
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
        if (isset($map['description'])) {
            $model->description = $map['description'];
        }

        if (isset($map['punishmentTypes'])) {
            if (!empty($map['punishmentTypes'])) {
                $model->punishmentTypes = [];
                $n1                     = 0;
                foreach ($map['punishmentTypes'] as $item1) {
                    $model->punishmentTypes[$n1++] = $item1;
                }
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
