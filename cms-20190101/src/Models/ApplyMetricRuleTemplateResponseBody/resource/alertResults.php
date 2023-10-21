<?php

// This file is auto-generated, don't edit it. Thanks.

namespace AlibabaCloud\SDK\Cms\V20190101\Models\ApplyMetricRuleTemplateResponseBody\resource;

use AlibabaCloud\Tea\Model;

class alertResults extends Model
{
    /**
     * @description The response code.
     *
     * >  The HTTP status code 200 indicates that the call succeeds.
     * @example 200
     *
     * @var string
     */
    public $code;

    /**
     * @description The returned information.
     *
     * @example alert rule is creating, please wait a few minutes.
     *
     * @var string
     */
    public $message;

    /**
     * @description The ID of the alert rule.
     *
     * @example applyTemplate8ab74c6b-9f27-47ab-8841-de01dc08****
     *
     * @var string
     */
    public $ruleId;

    /**
     * @description The name of the alert rule.
     *
     * @example test123
     *
     * @var string
     */
    public $ruleName;

    /**
     * @description Indicates whether the call succeeds. Valid values:
     *
     *   true: The call succeeds.
     *   false: The call fails.
     *
     * @example true
     *
     * @var bool
     */
    public $success;
    protected $_name = [
        'code'     => 'Code',
        'message'  => 'Message',
        'ruleId'   => 'RuleId',
        'ruleName' => 'RuleName',
        'success'  => 'Success',
    ];

    public function validate()
    {
    }

    public function toMap()
    {
        $res = [];
        if (null !== $this->code) {
            $res['Code'] = $this->code;
        }
        if (null !== $this->message) {
            $res['Message'] = $this->message;
        }
        if (null !== $this->ruleId) {
            $res['RuleId'] = $this->ruleId;
        }
        if (null !== $this->ruleName) {
            $res['RuleName'] = $this->ruleName;
        }
        if (null !== $this->success) {
            $res['Success'] = $this->success;
        }

        return $res;
    }

    /**
     * @param array $map
     *
     * @return alertResults
     */
    public static function fromMap($map = [])
    {
        $model = new self();
        if (isset($map['Code'])) {
            $model->code = $map['Code'];
        }
        if (isset($map['Message'])) {
            $model->message = $map['Message'];
        }
        if (isset($map['RuleId'])) {
            $model->ruleId = $map['RuleId'];
        }
        if (isset($map['RuleName'])) {
            $model->ruleName = $map['RuleName'];
        }
        if (isset($map['Success'])) {
            $model->success = $map['Success'];
        }

        return $model;
    }
}
