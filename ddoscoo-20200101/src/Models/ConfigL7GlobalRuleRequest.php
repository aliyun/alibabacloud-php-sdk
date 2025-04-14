<?php

// This file is auto-generated, don't edit it. Thanks.

namespace AlibabaCloud\SDK\Ddoscoo\V20200101\Models;

use AlibabaCloud\Dara\Model;

class ConfigL7GlobalRuleRequest extends Model
{
    /**
     * @var string
     */
    public $domain;

    /**
     * @var string
     */
    public $ruleAttr;
    protected $_name = [
        'domain' => 'Domain',
        'ruleAttr' => 'RuleAttr',
    ];

    public function validate()
    {
        parent::validate();
    }

    public function toArray($noStream = false)
    {
        $res = [];
        if (null !== $this->domain) {
            $res['Domain'] = $this->domain;
        }

        if (null !== $this->ruleAttr) {
            $res['RuleAttr'] = $this->ruleAttr;
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
        if (isset($map['Domain'])) {
            $model->domain = $map['Domain'];
        }

        if (isset($map['RuleAttr'])) {
            $model->ruleAttr = $map['RuleAttr'];
        }

        return $model;
    }
}
