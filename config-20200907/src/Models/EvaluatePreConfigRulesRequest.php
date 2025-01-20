<?php

// This file is auto-generated, don't edit it. Thanks.

namespace AlibabaCloud\SDK\Config\V20200907\Models;

use AlibabaCloud\Dara\Model;
use AlibabaCloud\SDK\Config\V20200907\Models\EvaluatePreConfigRulesRequest\resourceEvaluateItems;

class EvaluatePreConfigRulesRequest extends Model
{
    /**
     * @var bool
     */
    public $enableManagedRules;
    /**
     * @var resourceEvaluateItems[]
     */
    public $resourceEvaluateItems;
    /**
     * @var string
     */
    public $resourceTypeFormat;
    protected $_name = [
        'enableManagedRules'    => 'EnableManagedRules',
        'resourceEvaluateItems' => 'ResourceEvaluateItems',
        'resourceTypeFormat'    => 'ResourceTypeFormat',
    ];

    public function validate()
    {
        if (\is_array($this->resourceEvaluateItems)) {
            Model::validateArray($this->resourceEvaluateItems);
        }
        parent::validate();
    }

    public function toArray($noStream = false)
    {
        $res = [];
        if (null !== $this->enableManagedRules) {
            $res['EnableManagedRules'] = $this->enableManagedRules;
        }

        if (null !== $this->resourceEvaluateItems) {
            if (\is_array($this->resourceEvaluateItems)) {
                $res['ResourceEvaluateItems'] = [];
                $n1                           = 0;
                foreach ($this->resourceEvaluateItems as $item1) {
                    $res['ResourceEvaluateItems'][$n1++] = null !== $item1 ? $item1->toArray($noStream) : $item1;
                }
            }
        }

        if (null !== $this->resourceTypeFormat) {
            $res['ResourceTypeFormat'] = $this->resourceTypeFormat;
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
        if (isset($map['EnableManagedRules'])) {
            $model->enableManagedRules = $map['EnableManagedRules'];
        }

        if (isset($map['ResourceEvaluateItems'])) {
            if (!empty($map['ResourceEvaluateItems'])) {
                $model->resourceEvaluateItems = [];
                $n1                           = 0;
                foreach ($map['ResourceEvaluateItems'] as $item1) {
                    $model->resourceEvaluateItems[$n1++] = resourceEvaluateItems::fromMap($item1);
                }
            }
        }

        if (isset($map['ResourceTypeFormat'])) {
            $model->resourceTypeFormat = $map['ResourceTypeFormat'];
        }

        return $model;
    }
}
