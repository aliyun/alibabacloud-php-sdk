<?php

// This file is auto-generated, don't edit it. Thanks.

namespace AlibabaCloud\SDK\Rtc\V20180111\Models;

use AlibabaCloud\Tea\Model;

class CreateAutoLiveStreamRuleResponseBody extends Model
{
    /**
     * @example 760bad53276431c499e30dc36f6b26be
     *
     * @var string
     */
    public $requestId;

    /**
     * @example 12
     *
     * @var int
     */
    public $ruleId;
    protected $_name = [
        'requestId' => 'RequestId',
        'ruleId'    => 'RuleId',
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
        if (null !== $this->ruleId) {
            $res['RuleId'] = $this->ruleId;
        }

        return $res;
    }

    /**
     * @param array $map
     *
     * @return CreateAutoLiveStreamRuleResponseBody
     */
    public static function fromMap($map = [])
    {
        $model = new self();
        if (isset($map['RequestId'])) {
            $model->requestId = $map['RequestId'];
        }
        if (isset($map['RuleId'])) {
            $model->ruleId = $map['RuleId'];
        }

        return $model;
    }
}
