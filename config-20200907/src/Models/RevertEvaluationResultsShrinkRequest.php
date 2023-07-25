<?php

// This file is auto-generated, don't edit it. Thanks.

namespace AlibabaCloud\SDK\Config\V20200907\Models;

use AlibabaCloud\Tea\Model;

class RevertEvaluationResultsShrinkRequest extends Model
{
    /**
     * @description The rule ID.
     *
     * For more information about how to obtain the ID of a rule, see [ListConfigRules](~~169607~~).
     * @example cr-7e72626622af0051****
     *
     * @var string
     */
    public $configRuleId;

    /**
     * @description The resources that are to be re-evaluated.
     *
     * @var string
     */
    public $resourcesShrink;
    protected $_name = [
        'configRuleId'    => 'ConfigRuleId',
        'resourcesShrink' => 'Resources',
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
        if (null !== $this->resourcesShrink) {
            $res['Resources'] = $this->resourcesShrink;
        }

        return $res;
    }

    /**
     * @param array $map
     *
     * @return RevertEvaluationResultsShrinkRequest
     */
    public static function fromMap($map = [])
    {
        $model = new self();
        if (isset($map['ConfigRuleId'])) {
            $model->configRuleId = $map['ConfigRuleId'];
        }
        if (isset($map['Resources'])) {
            $model->resourcesShrink = $map['Resources'];
        }

        return $model;
    }
}
