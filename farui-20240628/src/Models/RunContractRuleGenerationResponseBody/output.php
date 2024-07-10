<?php

// This file is auto-generated, don't edit it. Thanks.

namespace AlibabaCloud\SDK\FaRui\V20240628\Models\RunContractRuleGenerationResponseBody;

use AlibabaCloud\SDK\FaRui\V20240628\Models\RunContractRuleGenerationResponseBody\output\rules;
use AlibabaCloud\Tea\Model;

class output extends Model
{
    /**
     * @example b265b416-ca1f-425d-9340-c968f39624e9
     *
     * @var string
     */
    public $ruleTaskId;

    /**
     * @var rules[]
     */
    public $rules;
    protected $_name = [
        'ruleTaskId' => 'ruleTaskId',
        'rules'      => 'rules',
    ];

    public function validate()
    {
    }

    public function toMap()
    {
        $res = [];
        if (null !== $this->ruleTaskId) {
            $res['ruleTaskId'] = $this->ruleTaskId;
        }
        if (null !== $this->rules) {
            $res['rules'] = [];
            if (null !== $this->rules && \is_array($this->rules)) {
                $n = 0;
                foreach ($this->rules as $item) {
                    $res['rules'][$n++] = null !== $item ? $item->toMap() : $item;
                }
            }
        }

        return $res;
    }

    /**
     * @param array $map
     *
     * @return output
     */
    public static function fromMap($map = [])
    {
        $model = new self();
        if (isset($map['ruleTaskId'])) {
            $model->ruleTaskId = $map['ruleTaskId'];
        }
        if (isset($map['rules'])) {
            if (!empty($map['rules'])) {
                $model->rules = [];
                $n            = 0;
                foreach ($map['rules'] as $item) {
                    $model->rules[$n++] = null !== $item ? rules::fromMap($item) : $item;
                }
            }
        }

        return $model;
    }
}
