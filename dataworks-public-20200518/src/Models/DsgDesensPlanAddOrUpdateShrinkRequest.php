<?php

// This file is auto-generated, don't edit it. Thanks.

namespace AlibabaCloud\SDK\Dataworkspublic\V20200518\Models;

use AlibabaCloud\Dara\Model;

class DsgDesensPlanAddOrUpdateShrinkRequest extends Model
{
    /**
     * @var string
     */
    public $desensRulesShrink;
    protected $_name = [
        'desensRulesShrink' => 'DesensRules',
    ];

    public function validate()
    {
        parent::validate();
    }

    public function toArray($noStream = false)
    {
        $res = [];
        if (null !== $this->desensRulesShrink) {
            $res['DesensRules'] = $this->desensRulesShrink;
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
        if (isset($map['DesensRules'])) {
            $model->desensRulesShrink = $map['DesensRules'];
        }

        return $model;
    }
}
