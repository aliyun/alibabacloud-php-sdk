<?php

// This file is auto-generated, don't edit it. Thanks.

namespace AlibabaCloud\SDK\Cms\V20190101\Models\PutResourceMetricRulesResponseBody\failedListResult;

use AlibabaCloud\SDK\Cms\V20190101\Models\PutResourceMetricRulesResponseBody\failedListResult\target\result;
use AlibabaCloud\Tea\Model;

class target extends Model
{
    /**
     * @var result
     */
    public $result;

    /**
     * @var string
     */
    public $ruleId;
    protected $_name = [
        'result' => 'Result',
        'ruleId' => 'RuleId',
    ];

    public function validate()
    {
    }

    public function toMap()
    {
        $res = [];
        if (null !== $this->result) {
            $res['Result'] = null !== $this->result ? $this->result->toMap() : null;
        }
        if (null !== $this->ruleId) {
            $res['RuleId'] = $this->ruleId;
        }

        return $res;
    }

    /**
     * @param array $map
     *
     * @return target
     */
    public static function fromMap($map = [])
    {
        $model = new self();
        if (isset($map['Result'])) {
            $model->result = result::fromMap($map['Result']);
        }
        if (isset($map['RuleId'])) {
            $model->ruleId = $map['RuleId'];
        }

        return $model;
    }
}
