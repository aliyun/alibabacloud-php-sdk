<?php

// This file is auto-generated, don't edit it. Thanks.

namespace AlibabaCloud\SDK\MPaaS\V20201028\Models\GetMcubeNebulaTaskDetailResponseBody\getMcubeNebulaTaskDetailResult\nebulaTaskDetail;

use AlibabaCloud\Tea\Model;

class ruleJsonList extends Model
{
    /**
     * @var string
     */
    public $operation;

    /**
     * @var string
     */
    public $ruleElement;

    /**
     * @var string
     */
    public $ruleType;

    /**
     * @var string
     */
    public $value;
    protected $_name = [
        'operation'   => 'Operation',
        'ruleElement' => 'RuleElement',
        'ruleType'    => 'RuleType',
        'value'       => 'Value',
    ];

    public function validate()
    {
    }

    public function toMap()
    {
        $res = [];
        if (null !== $this->operation) {
            $res['Operation'] = $this->operation;
        }
        if (null !== $this->ruleElement) {
            $res['RuleElement'] = $this->ruleElement;
        }
        if (null !== $this->ruleType) {
            $res['RuleType'] = $this->ruleType;
        }
        if (null !== $this->value) {
            $res['Value'] = $this->value;
        }

        return $res;
    }

    /**
     * @param array $map
     *
     * @return ruleJsonList
     */
    public static function fromMap($map = [])
    {
        $model = new self();
        if (isset($map['Operation'])) {
            $model->operation = $map['Operation'];
        }
        if (isset($map['RuleElement'])) {
            $model->ruleElement = $map['RuleElement'];
        }
        if (isset($map['RuleType'])) {
            $model->ruleType = $map['RuleType'];
        }
        if (isset($map['Value'])) {
            $model->value = $map['Value'];
        }

        return $model;
    }
}
