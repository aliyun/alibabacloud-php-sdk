<?php

// This file is auto-generated, don't edit it. Thanks.

namespace AlibabaCloud\SDK\Config\V20200907\Models;

use AlibabaCloud\SDK\Config\V20200907\Models\RevertEvaluationResultsRequest\resources;
use AlibabaCloud\Tea\Model;

class RevertEvaluationResultsRequest extends Model
{
    /**
     * @description The ID of the rule.
     *
     * For more information about how to obtain the ID of a rule, see [ListConfigRules](~~169607~~).
     * @example cr-7e72626622af0051****
     *
     * @var string
     */
    public $configRuleId;

    /**
     * @description The resources that are to be reevaluated.
     *
     * @var resources[]
     */
    public $resources;
    protected $_name = [
        'configRuleId' => 'ConfigRuleId',
        'resources'    => 'Resources',
    ];

    public function validate()
    {
    }

    public function toMap()
    {
        $res = [];
        if (null !== $this->configRuleId) {
            $res['ConfigRuleId'] = $this->configRuleId;
        }
        if (null !== $this->resources) {
            $res['Resources'] = [];
            if (null !== $this->resources && \is_array($this->resources)) {
                $n = 0;
                foreach ($this->resources as $item) {
                    $res['Resources'][$n++] = null !== $item ? $item->toMap() : $item;
                }
            }
        }

        return $res;
    }

    /**
     * @param array $map
     *
     * @return RevertEvaluationResultsRequest
     */
    public static function fromMap($map = [])
    {
        $model = new self();
        if (isset($map['ConfigRuleId'])) {
            $model->configRuleId = $map['ConfigRuleId'];
        }
        if (isset($map['Resources'])) {
            if (!empty($map['Resources'])) {
                $model->resources = [];
                $n                = 0;
                foreach ($map['Resources'] as $item) {
                    $model->resources[$n++] = null !== $item ? resources::fromMap($item) : $item;
                }
            }
        }

        return $model;
    }
}
