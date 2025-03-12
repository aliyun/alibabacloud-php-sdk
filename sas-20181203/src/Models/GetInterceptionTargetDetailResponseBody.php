<?php

// This file is auto-generated, don't edit it. Thanks.

namespace AlibabaCloud\SDK\Sas\V20181203\Models;

use AlibabaCloud\SDK\Sas\V20181203\Models\GetInterceptionTargetDetailResponseBody\ruleTarget;
use AlibabaCloud\Tea\Model;

class GetInterceptionTargetDetailResponseBody extends Model
{
    /**
     * @description The ID of the request, which is used to locate and troubleshoot issues.
     *
     * @example D65AADFC-1D20-5A6A-8F6A-9FA53C0DC1F8
     *
     * @var string
     */
    public $requestId;

    /**
     * @description The information about the network object.
     *
     * @var ruleTarget
     */
    public $ruleTarget;
    protected $_name = [
        'requestId'  => 'RequestId',
        'ruleTarget' => 'RuleTarget',
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
        if (null !== $this->ruleTarget) {
            $res['RuleTarget'] = null !== $this->ruleTarget ? $this->ruleTarget->toMap() : null;
        }

        return $res;
    }

    /**
     * @param array $map
     *
     * @return GetInterceptionTargetDetailResponseBody
     */
    public static function fromMap($map = [])
    {
        $model = new self();
        if (isset($map['RequestId'])) {
            $model->requestId = $map['RequestId'];
        }
        if (isset($map['RuleTarget'])) {
            $model->ruleTarget = ruleTarget::fromMap($map['RuleTarget']);
        }

        return $model;
    }
}
