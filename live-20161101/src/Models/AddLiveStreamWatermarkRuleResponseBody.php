<?php

// This file is auto-generated, don't edit it. Thanks.

namespace AlibabaCloud\SDK\Live\V20161101\Models;

use AlibabaCloud\Tea\Model;

class AddLiveStreamWatermarkRuleResponseBody extends Model
{
    /**
     * @description The ID of the request.
     *
     * @example 5c6a2a0df228-4a64-af62-20e91b96****
     *
     * @var string
     */
    public $requestId;

    /**
     * @description The ID of the watermark rule.
     *
     * @example 445409ec-7eaa-461d-8f29-4bec2eb9****
     *
     * @var string
     */
    public $ruleId;
    protected $_name = [
        'requestId' => 'RequestId',
        'ruleId' => 'RuleId',
    ];

    public function validate() {}

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
     * @return AddLiveStreamWatermarkRuleResponseBody
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
