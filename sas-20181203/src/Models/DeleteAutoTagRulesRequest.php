<?php

// This file is auto-generated, don't edit it. Thanks.

namespace AlibabaCloud\SDK\Sas\V20181203\Models;

use AlibabaCloud\Dara\Model;

class DeleteAutoTagRulesRequest extends Model
{
    /**
     * @var string
     */
    public $ruleIdList;
    protected $_name = [
        'ruleIdList' => 'RuleIdList',
    ];

    public function validate()
    {
        parent::validate();
    }

    public function toArray($noStream = false)
    {
        $res = [];
        if (null !== $this->ruleIdList) {
            $res['RuleIdList'] = $this->ruleIdList;
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
        if (isset($map['RuleIdList'])) {
            $model->ruleIdList = $map['RuleIdList'];
        }

        return $model;
    }
}
