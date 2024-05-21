<?php

// This file is auto-generated, don't edit it. Thanks.

namespace AlibabaCloud\SDK\Quickbipublic\V20220101\Models;

use AlibabaCloud\Tea\Model;

class SetDataLevelPermissionRuleConfigRequest extends Model
{
    /**
     * @description This parameter is required.
     *
     * @var string
     */
    public $ruleModel;
    protected $_name = [
        'ruleModel' => 'RuleModel',
    ];

    public function validate()
    {
    }

    public function toMap()
    {
        $res = [];
        if (null !== $this->ruleModel) {
            $res['RuleModel'] = $this->ruleModel;
        }

        return $res;
    }

    /**
     * @param array $map
     *
     * @return SetDataLevelPermissionRuleConfigRequest
     */
    public static function fromMap($map = [])
    {
        $model = new self();
        if (isset($map['RuleModel'])) {
            $model->ruleModel = $map['RuleModel'];
        }

        return $model;
    }
}
