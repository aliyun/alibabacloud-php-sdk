<?php

// This file is auto-generated, don't edit it. Thanks.

namespace AlibabaCloud\SDK\Sas\V20181203\Models;

use AlibabaCloud\SDK\Sas\V20181203\Models\ListRuleTargetAllResponseBody\ruleTargetList;
use AlibabaCloud\Tea\Model;

class ListRuleTargetAllResponseBody extends Model
{
    /**
     * @var string
     */
    public $requestId;

    /**
     * @var ruleTargetList[]
     */
    public $ruleTargetList;
    protected $_name = [
        'requestId'      => 'RequestId',
        'ruleTargetList' => 'RuleTargetList',
    ];

    public function validate()
    {
    }

    public function toMap()
    {
        $res = [];
        if (null !== $this->requestId) {
            $res['RequestId'] = $this->requestId;
        }
        if (null !== $this->ruleTargetList) {
            $res['RuleTargetList'] = [];
            if (null !== $this->ruleTargetList && \is_array($this->ruleTargetList)) {
                $n = 0;
                foreach ($this->ruleTargetList as $item) {
                    $res['RuleTargetList'][$n++] = null !== $item ? $item->toMap() : $item;
                }
            }
        }

        return $res;
    }

    /**
     * @param array $map
     *
     * @return ListRuleTargetAllResponseBody
     */
    public static function fromMap($map = [])
    {
        $model = new self();
        if (isset($map['RequestId'])) {
            $model->requestId = $map['RequestId'];
        }
        if (isset($map['RuleTargetList'])) {
            if (!empty($map['RuleTargetList'])) {
                $model->ruleTargetList = [];
                $n                     = 0;
                foreach ($map['RuleTargetList'] as $item) {
                    $model->ruleTargetList[$n++] = null !== $item ? ruleTargetList::fromMap($item) : $item;
                }
            }
        }

        return $model;
    }
}
