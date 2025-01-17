<?php

// This file is auto-generated, don't edit it. Thanks.

namespace AlibabaCloud\SDK\Sas\V20181203\Models;

use AlibabaCloud\Dara\Model;

class ListSystemClientRuleTypesResponseBody extends Model
{
    /**
     * @var string
     */
    public $requestId;
    /**
     * @var string[]
     */
    public $ruleTypes;
    protected $_name = [
        'requestId' => 'RequestId',
        'ruleTypes' => 'RuleTypes',
    ];

    public function validate()
    {
        if (\is_array($this->ruleTypes)) {
            Model::validateArray($this->ruleTypes);
        }
        parent::validate();
    }

    public function toArray($noStream = false)
    {
        $res = [];
        if (null !== $this->requestId) {
            $res['RequestId'] = $this->requestId;
        }

        if (null !== $this->ruleTypes) {
            if (\is_array($this->ruleTypes)) {
                $res['RuleTypes'] = [];
                $n1               = 0;
                foreach ($this->ruleTypes as $item1) {
                    $res['RuleTypes'][$n1++] = $item1;
                }
            }
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
        if (isset($map['RequestId'])) {
            $model->requestId = $map['RequestId'];
        }

        if (isset($map['RuleTypes'])) {
            if (!empty($map['RuleTypes'])) {
                $model->ruleTypes = [];
                $n1               = 0;
                foreach ($map['RuleTypes'] as $item1) {
                    $model->ruleTypes[$n1++] = $item1;
                }
            }
        }

        return $model;
    }
}
