<?php

// This file is auto-generated, don't edit it. Thanks.

namespace AlibabaCloud\SDK\Dataworkspublic\V20200518\Models;

use AlibabaCloud\Tea\Model;

class DsgDesensPlanAddOrUpdateShrinkRequest extends Model
{
    /**
     * @description This parameter is required.
     *
     * @var string
     */
    public $desensRulesShrink;
    protected $_name = [
        'desensRulesShrink' => 'DesensRules',
    ];

    public function validate()
    {
    }

    public function toMap()
    {
        $res = [];
        if (null !== $this->desensRulesShrink) {
            $res['DesensRules'] = $this->desensRulesShrink;
        }

        return $res;
    }

    /**
     * @param array $map
     *
     * @return DsgDesensPlanAddOrUpdateShrinkRequest
     */
    public static function fromMap($map = [])
    {
        $model = new self();
        if (isset($map['DesensRules'])) {
            $model->desensRulesShrink = $map['DesensRules'];
        }

        return $model;
    }
}
