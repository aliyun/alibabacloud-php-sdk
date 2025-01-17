<?php

// This file is auto-generated, don't edit it. Thanks.

namespace AlibabaCloud\SDK\Sas\V20181203\Models;

use AlibabaCloud\Dara\Model;
use AlibabaCloud\SDK\Sas\V20181203\Models\GetInterceptionTargetDetailResponseBody\ruleTarget;

class GetInterceptionTargetDetailResponseBody extends Model
{
    /**
     * @var string
     */
    public $requestId;
    /**
     * @var ruleTarget
     */
    public $ruleTarget;
    protected $_name = [
        'requestId'  => 'RequestId',
        'ruleTarget' => 'RuleTarget',
    ];

    public function validate()
    {
        if (null !== $this->ruleTarget) {
            $this->ruleTarget->validate();
        }
        parent::validate();
    }

    public function toArray($noStream = false)
    {
        $res = [];
        if (null !== $this->requestId) {
            $res['RequestId'] = $this->requestId;
        }

        if (null !== $this->ruleTarget) {
            $res['RuleTarget'] = null !== $this->ruleTarget ? $this->ruleTarget->toArray($noStream) : $this->ruleTarget;
        }

        return $res;
    }

    public function toMap($noStream = false)
    {
        return $this->toArray($noStream);
    }

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
