<?php

// This file is auto-generated, don't edit it. Thanks.

namespace AlibabaCloud\SDK\Gameshield\V20180305\Models;

use AlibabaCloud\SDK\Gameshield\V20180305\Models\DescribeCcRouteRulesResponseBody\ruleQueryResult;
use AlibabaCloud\Tea\Model;

class DescribeCcRouteRulesResponseBody extends Model
{
    /**
     * @var ruleQueryResult
     */
    public $ruleQueryResult;

    /**
     * @var string
     */
    public $requestId;

    /**
     * @var mixed[]
     */
    public $promptInfo;
    protected $_name = [
        'ruleQueryResult' => 'RuleQueryResult',
        'requestId'       => 'RequestId',
        'promptInfo'      => 'PromptInfo',
    ];

    public function validate()
    {
    }

    public function toMap()
    {
        $res = [];
        if (null !== $this->ruleQueryResult) {
            $res['RuleQueryResult'] = null !== $this->ruleQueryResult ? $this->ruleQueryResult->toMap() : null;
        }
        if (null !== $this->requestId) {
            $res['RequestId'] = $this->requestId;
        }
        if (null !== $this->promptInfo) {
            $res['PromptInfo'] = $this->promptInfo;
        }

        return $res;
    }

    /**
     * @param array $map
     *
     * @return DescribeCcRouteRulesResponseBody
     */
    public static function fromMap($map = [])
    {
        $model = new self();
        if (isset($map['RuleQueryResult'])) {
            $model->ruleQueryResult = ruleQueryResult::fromMap($map['RuleQueryResult']);
        }
        if (isset($map['RequestId'])) {
            $model->requestId = $map['RequestId'];
        }
        if (isset($map['PromptInfo'])) {
            $model->promptInfo = $map['PromptInfo'];
        }

        return $model;
    }
}
