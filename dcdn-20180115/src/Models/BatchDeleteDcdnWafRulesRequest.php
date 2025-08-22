<?php

// This file is auto-generated, don't edit it. Thanks.

namespace AlibabaCloud\SDK\Dcdn\V20180115\Models;

use AlibabaCloud\Dara\Model;

class BatchDeleteDcdnWafRulesRequest extends Model
{
    /**
     * @var string
     */
    public $ruleIds;
    protected $_name = [
        'ruleIds' => 'RuleIds',
    ];

    public function validate()
    {
        parent::validate();
    }

    public function toArray($noStream = false)
    {
        $res = [];
        if (null !== $this->ruleIds) {
            $res['RuleIds'] = $this->ruleIds;
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
        if (isset($map['RuleIds'])) {
            $model->ruleIds = $map['RuleIds'];
        }

        return $model;
    }
}
