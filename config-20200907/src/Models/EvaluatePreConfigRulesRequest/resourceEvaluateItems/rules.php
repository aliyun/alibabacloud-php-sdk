<?php

// This file is auto-generated, don't edit it. Thanks.

namespace AlibabaCloud\SDK\Config\V20200907\Models\EvaluatePreConfigRulesRequest\resourceEvaluateItems;

use AlibabaCloud\Tea\Model;

class rules extends Model
{
    /**
     * @description The identifier of the evaluation rule.
     *
     * For more information about how to obtain the identifier of an evaluation rule, see [ListManagedRules](~~467810~~).
     * @example ecs-instance-deletion-protection-enabled
     *
     * @var string
     */
    public $identifier;

    /**
     * @description The input parameters of the evaluation rule.
     *
     * @example {}
     *
     * @var string
     */
    public $inputParameters;
    protected $_name = [
        'identifier'      => 'Identifier',
        'inputParameters' => 'InputParameters',
    ];

    public function validate()
    {
    }

    public function toMap()
    {
        $res = [];
        if (null !== $this->identifier) {
            $res['Identifier'] = $this->identifier;
        }
        if (null !== $this->inputParameters) {
            $res['InputParameters'] = $this->inputParameters;
        }

        return $res;
    }

    /**
     * @param array $map
     *
     * @return rules
     */
    public static function fromMap($map = [])
    {
        $model = new self();
        if (isset($map['Identifier'])) {
            $model->identifier = $map['Identifier'];
        }
        if (isset($map['InputParameters'])) {
            $model->inputParameters = $map['InputParameters'];
        }

        return $model;
    }
}
