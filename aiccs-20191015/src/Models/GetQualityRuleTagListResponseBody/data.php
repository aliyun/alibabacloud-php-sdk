<?php

// This file is auto-generated, don't edit it. Thanks.

namespace AlibabaCloud\SDK\Aiccs\V20191015\Models\GetQualityRuleTagListResponseBody;

use AlibabaCloud\Tea\Model;

class data extends Model
{
    /**
     * @var int
     */
    public $ruleTagId;

    /**
     * @var string
     */
    public $ruleTagName;
    protected $_name = [
        'ruleTagId'   => 'RuleTagId',
        'ruleTagName' => 'RuleTagName',
    ];

    public function validate()
    {
    }

    public function toMap()
    {
        $res = [];
        if (null !== $this->ruleTagId) {
            $res['RuleTagId'] = $this->ruleTagId;
        }
        if (null !== $this->ruleTagName) {
            $res['RuleTagName'] = $this->ruleTagName;
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
        if (isset($map['RuleTagId'])) {
            $model->ruleTagId = $map['RuleTagId'];
        }
        if (isset($map['RuleTagName'])) {
            $model->ruleTagName = $map['RuleTagName'];
        }

        return $model;
    }
}
