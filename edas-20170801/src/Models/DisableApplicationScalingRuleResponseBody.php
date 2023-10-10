<?php

// This file is auto-generated, don't edit it. Thanks.

namespace AlibabaCloud\SDK\Edas\V20170801\Models;

use AlibabaCloud\SDK\Edas\V20170801\Models\DisableApplicationScalingRuleResponseBody\appScalingRule;
use AlibabaCloud\Tea\Model;

class DisableApplicationScalingRuleResponseBody extends Model
{
    /**
     * @description The information about the auto scaling policy.
     *
     * @var appScalingRule
     */
    public $appScalingRule;

    /**
     * @description The HTTP status code.
     *
     * @example 200
     *
     * @var int
     */
    public $code;

    /**
     * @description The returned message.
     *
     * @example success
     *
     * @var string
     */
    public $message;

    /**
     * @description The ID of the request.
     *
     * @example 5d6fa0bc-cc3**********
     *
     * @var string
     */
    public $requestId;
    protected $_name = [
        'appScalingRule' => 'AppScalingRule',
        'code'           => 'Code',
        'message'        => 'Message',
        'requestId'      => 'RequestId',
    ];

    public function validate()
    {
    }

    public function toMap()
    {
        $res = [];
        if (null !== $this->appScalingRule) {
            $res['AppScalingRule'] = null !== $this->appScalingRule ? $this->appScalingRule->toMap() : null;
        }
        if (null !== $this->code) {
            $res['Code'] = $this->code;
        }
        if (null !== $this->message) {
            $res['Message'] = $this->message;
        }
        if (null !== $this->requestId) {
            $res['RequestId'] = $this->requestId;
        }

        return $res;
    }

    /**
     * @param array $map
     *
     * @return DisableApplicationScalingRuleResponseBody
     */
    public static function fromMap($map = [])
    {
        $model = new self();
        if (isset($map['AppScalingRule'])) {
            $model->appScalingRule = appScalingRule::fromMap($map['AppScalingRule']);
        }
        if (isset($map['Code'])) {
            $model->code = $map['Code'];
        }
        if (isset($map['Message'])) {
            $model->message = $map['Message'];
        }
        if (isset($map['RequestId'])) {
            $model->requestId = $map['RequestId'];
        }

        return $model;
    }
}
