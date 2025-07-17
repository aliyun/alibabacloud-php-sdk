<?php

// This file is auto-generated, don't edit it. Thanks.

namespace AlibabaCloud\SDK\Dataworkspublic\V20240518\Models;

use AlibabaCloud\SDK\Dataworkspublic\V20240518\Models\GetDataQualityRuleResponseBody\dataQualityRule;
use AlibabaCloud\Tea\Model;

class GetDataQualityRuleResponseBody extends Model
{
    /**
     * @description The information about the rule.
     *
     * @var dataQualityRule
     */
    public $dataQualityRule;

    /**
     * @description The request ID.
     *
     * @example 691CA452-D37A-4ED0-9441
     *
     * @var string
     */
    public $requestId;
    protected $_name = [
        'dataQualityRule' => 'DataQualityRule',
        'requestId' => 'RequestId',
    ];

    public function validate() {}

    public function toMap()
    {
        $res = [];
        if (null !== $this->dataQualityRule) {
            $res['DataQualityRule'] = null !== $this->dataQualityRule ? $this->dataQualityRule->toMap() : null;
        }
        if (null !== $this->requestId) {
            $res['RequestId'] = $this->requestId;
        }

        return $res;
    }

    /**
     * @param array $map
     *
     * @return GetDataQualityRuleResponseBody
     */
    public static function fromMap($map = [])
    {
        $model = new self();
        if (isset($map['DataQualityRule'])) {
            $model->dataQualityRule = dataQualityRule::fromMap($map['DataQualityRule']);
        }
        if (isset($map['RequestId'])) {
            $model->requestId = $map['RequestId'];
        }

        return $model;
    }
}
