<?php

// This file is auto-generated, don't edit it. Thanks.

namespace AlibabaCloud\SDK\Quickbipublic\V20220101\Models;

use AlibabaCloud\Dara\Model;

class SetDataLevelPermissionRuleConfigRequest extends Model
{
    /**
     * @var string
     */
    public $ruleModel;
    protected $_name = [
        'ruleModel' => 'RuleModel',
    ];

    public function validate()
    {
        parent::validate();
    }

    public function toArray($noStream = false)
    {
        $res = [];
        if (null !== $this->ruleModel) {
            $res['RuleModel'] = $this->ruleModel;
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
        if (isset($map['RuleModel'])) {
            $model->ruleModel = $map['RuleModel'];
        }

        return $model;
    }
}
