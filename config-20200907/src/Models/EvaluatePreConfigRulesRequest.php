<?php

// This file is auto-generated, don't edit it. Thanks.

namespace AlibabaCloud\SDK\Config\V20200907\Models;

use AlibabaCloud\SDK\Config\V20200907\Models\EvaluatePreConfigRulesRequest\resourceEvaluateItems;
use AlibabaCloud\Tea\Model;

class EvaluatePreConfigRulesRequest extends Model
{
    /**
     * @description Specifies whether to enable the managed rule. Valid values:
     *
     *   true: enables the managed rule.
     *   false: does not enable the managed rule. This is the default value.
     *
     * >  After you create an evaluation rule, a managed rule that has the same settings as the evaluation rule is created. After you create a resource, the managed rule can be used to continuously check the compliance of the resource.
     * @example false
     *
     * @var bool
     */
    public $enableManagedRules;

    /**
     * @description The resources that you want to evaluate.
     *
     * This parameter is required.
     * @var resourceEvaluateItems[]
     */
    public $resourceEvaluateItems;
    protected $_name = [
        'enableManagedRules'    => 'EnableManagedRules',
        'resourceEvaluateItems' => 'ResourceEvaluateItems',
    ];

    public function validate()
    {
    }

    public function toMap()
    {
        $res = [];
        if (null !== $this->enableManagedRules) {
            $res['EnableManagedRules'] = $this->enableManagedRules;
        }
        if (null !== $this->resourceEvaluateItems) {
            $res['ResourceEvaluateItems'] = [];
            if (null !== $this->resourceEvaluateItems && \is_array($this->resourceEvaluateItems)) {
                $n = 0;
                foreach ($this->resourceEvaluateItems as $item) {
                    $res['ResourceEvaluateItems'][$n++] = null !== $item ? $item->toMap() : $item;
                }
            }
        }

        return $res;
    }

    /**
     * @param array $map
     *
     * @return EvaluatePreConfigRulesRequest
     */
    public static function fromMap($map = [])
    {
        $model = new self();
        if (isset($map['EnableManagedRules'])) {
            $model->enableManagedRules = $map['EnableManagedRules'];
        }
        if (isset($map['ResourceEvaluateItems'])) {
            if (!empty($map['ResourceEvaluateItems'])) {
                $model->resourceEvaluateItems = [];
                $n                            = 0;
                foreach ($map['ResourceEvaluateItems'] as $item) {
                    $model->resourceEvaluateItems[$n++] = null !== $item ? resourceEvaluateItems::fromMap($item) : $item;
                }
            }
        }

        return $model;
    }
}
