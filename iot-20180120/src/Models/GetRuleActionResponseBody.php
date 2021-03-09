<?php

// This file is auto-generated, don't edit it. Thanks.

namespace AlibabaCloud\SDK\Iot\V20180120\Models;

use AlibabaCloud\SDK\Iot\V20180120\Models\GetRuleActionResponseBody\ruleActionInfo;
use AlibabaCloud\Tea\Model;

class GetRuleActionResponseBody extends Model
{
    /**
     * @var string
     */
    public $requestId;

    /**
     * @var bool
     */
    public $success;

    /**
     * @var string
     */
    public $code;

    /**
     * @var string
     */
    public $errorMessage;

    /**
     * @var ruleActionInfo
     */
    public $ruleActionInfo;
    protected $_name = [
        'requestId'      => 'RequestId',
        'success'        => 'Success',
        'code'           => 'Code',
        'errorMessage'   => 'ErrorMessage',
        'ruleActionInfo' => 'RuleActionInfo',
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
        if (null !== $this->success) {
            $res['Success'] = $this->success;
        }
        if (null !== $this->code) {
            $res['Code'] = $this->code;
        }
        if (null !== $this->errorMessage) {
            $res['ErrorMessage'] = $this->errorMessage;
        }
        if (null !== $this->ruleActionInfo) {
            $res['RuleActionInfo'] = null !== $this->ruleActionInfo ? $this->ruleActionInfo->toMap() : null;
        }

        return $res;
    }

    /**
     * @param array $map
     *
     * @return GetRuleActionResponseBody
     */
    public static function fromMap($map = [])
    {
        $model = new self();
        if (isset($map['RequestId'])) {
            $model->requestId = $map['RequestId'];
        }
        if (isset($map['Success'])) {
            $model->success = $map['Success'];
        }
        if (isset($map['Code'])) {
            $model->code = $map['Code'];
        }
        if (isset($map['ErrorMessage'])) {
            $model->errorMessage = $map['ErrorMessage'];
        }
        if (isset($map['RuleActionInfo'])) {
            $model->ruleActionInfo = ruleActionInfo::fromMap($map['RuleActionInfo']);
        }

        return $model;
    }
}
