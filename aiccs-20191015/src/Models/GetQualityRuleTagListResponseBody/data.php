<?php

// This file is auto-generated, don't edit it. Thanks.

namespace AlibabaCloud\SDK\Aiccs\V20191015\Models\GetQualityRuleTagListResponseBody;

use AlibabaCloud\Tea\Model;

class data extends Model
{
    /**
     * @var string
     */
    public $ruleTagName;

    /**
     * @var int
     */
    public $ruleTagId;
    protected $_name = [
        'ruleTagName' => 'RuleTagName',
        'ruleTagId'   => 'RuleTagId',
    ];

    public function validate()
    {
    }

    public function toMap()
    {
        $res = [];
        if (null !== $this->ruleTagName) {
            $res['RuleTagName'] = $this->ruleTagName;
        }
        if (null !== $this->ruleTagId) {
            $res['RuleTagId'] = $this->ruleTagId;
        }

        return $res;
    }

    /**
     * @param array $map
     *
     * @return data
     */
    public static function fromMap($map = [])
    {
        $model = new self();
        if (isset($map['RuleTagName'])) {
            $model->ruleTagName = $map['RuleTagName'];
        }
        if (isset($map['RuleTagId'])) {
            $model->ruleTagId = $map['RuleTagId'];
        }

        return $model;
    }
}
