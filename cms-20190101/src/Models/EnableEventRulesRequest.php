<?php

// This file is auto-generated, don't edit it. Thanks.

namespace AlibabaCloud\SDK\Cms\V20190101\Models;

use AlibabaCloud\Tea\Model;

class EnableEventRulesRequest extends Model
{
    /**
     * @var string[]
     */
    public $ruleNames;
    protected $_name = [
        'ruleNames' => 'RuleNames',
    ];

    public function validate()
    {
    }

    public function toMap()
    {
        $res = [];
        if (null !== $this->ruleNames) {
            $res['RuleNames'] = $this->ruleNames;
        }

        return $res;
    }

    /**
     * @param array $map
     *
     * @return EnableEventRulesRequest
     */
    public static function fromMap($map = [])
    {
        $model = new self();
        if (isset($map['RuleNames'])) {
            if (!empty($map['RuleNames'])) {
                $model->ruleNames = $map['RuleNames'];
            }
        }

        return $model;
    }
}
