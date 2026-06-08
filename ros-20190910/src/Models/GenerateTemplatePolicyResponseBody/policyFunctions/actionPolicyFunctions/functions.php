<?php

// This file is auto-generated, don't edit it. Thanks.

namespace AlibabaCloud\SDK\ROS\V20190910\Models\GenerateTemplatePolicyResponseBody\policyFunctions\actionPolicyFunctions;

use AlibabaCloud\Dara\Model;

class functions extends Model
{
    /**
     * @var string
     */
    public $function;

    /**
     * @var string
     */
    public $operationType;

    /**
     * @var string[]
     */
    public $relatedProperties;

    /**
     * @var string
     */
    public $requirementLevel;
    protected $_name = [
        'function' => 'Function',
        'operationType' => 'OperationType',
        'relatedProperties' => 'RelatedProperties',
        'requirementLevel' => 'RequirementLevel',
    ];

    public function validate()
    {
        if (\is_array($this->relatedProperties)) {
            Model::validateArray($this->relatedProperties);
        }
        parent::validate();
    }

    public function toArray($noStream = false)
    {
        $res = [];
        if (null !== $this->function) {
            $res['Function'] = $this->function;
        }

        if (null !== $this->operationType) {
            $res['OperationType'] = $this->operationType;
        }

        if (null !== $this->relatedProperties) {
            if (\is_array($this->relatedProperties)) {
                $res['RelatedProperties'] = [];
                $n1 = 0;
                foreach ($this->relatedProperties as $item1) {
                    $res['RelatedProperties'][$n1] = $item1;
                    ++$n1;
                }
            }
        }

        if (null !== $this->requirementLevel) {
            $res['RequirementLevel'] = $this->requirementLevel;
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
        if (isset($map['Function'])) {
            $model->function = $map['Function'];
        }

        if (isset($map['OperationType'])) {
            $model->operationType = $map['OperationType'];
        }

        if (isset($map['RelatedProperties'])) {
            if (!empty($map['RelatedProperties'])) {
                $model->relatedProperties = [];
                $n1 = 0;
                foreach ($map['RelatedProperties'] as $item1) {
                    $model->relatedProperties[$n1] = $item1;
                    ++$n1;
                }
            }
        }

        if (isset($map['RequirementLevel'])) {
            $model->requirementLevel = $map['RequirementLevel'];
        }

        return $model;
    }
}
