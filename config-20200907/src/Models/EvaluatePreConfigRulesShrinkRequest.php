<?php

// This file is auto-generated, don't edit it. Thanks.

namespace AlibabaCloud\SDK\Config\V20200907\Models;

use AlibabaCloud\Dara\Model;

class EvaluatePreConfigRulesShrinkRequest extends Model
{
    /**
     * @var bool
     */
    public $enableManagedRules;

    /**
     * @var string
     */
    public $resourceEvaluateItemsShrink;

    /**
     * @var string
     */
    public $resourceTypeFormat;
    protected $_name = [
        'enableManagedRules' => 'EnableManagedRules',
        'resourceEvaluateItemsShrink' => 'ResourceEvaluateItems',
        'resourceTypeFormat' => 'ResourceTypeFormat',
    ];

    public function validate()
    {
        parent::validate();
    }

    public function toArray($noStream = false)
    {
        $res = [];
        if (null !== $this->enableManagedRules) {
            $res['EnableManagedRules'] = $this->enableManagedRules;
        }

        if (null !== $this->resourceEvaluateItemsShrink) {
            $res['ResourceEvaluateItems'] = $this->resourceEvaluateItemsShrink;
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
            $model->resourceEvaluateItemsShrink = $map['ResourceEvaluateItems'];
        }

        if (isset($map['ResourceTypeFormat'])) {
            $model->resourceTypeFormat = $map['ResourceTypeFormat'];
        }

        return $model;
    }
}
