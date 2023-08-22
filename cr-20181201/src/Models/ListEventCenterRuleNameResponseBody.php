<?php

// This file is auto-generated, don't edit it. Thanks.

namespace AlibabaCloud\SDK\Cr\V20181201\Models;

use AlibabaCloud\SDK\Cr\V20181201\Models\ListEventCenterRuleNameResponseBody\ruleNames;
use AlibabaCloud\Tea\Model;

class ListEventCenterRuleNameResponseBody extends Model
{
    /**
     * @description The return value.
     *
     * @example success
     *
     * @var string
     */
    public $code;

    /**
     * @description Indicates whether the request is successful.
     *
     * @example true
     *
     * @var bool
     */
    public $isSuccess;

    /**
     * @description The ID of the request.
     *
     * @example 031572FA-7D8F-4C05-B790-1071E0E05DE6
     *
     * @var string
     */
    public $requestId;

    /**
     * @description The list of names of event notification rules.
     *
     * @example [{\"RuleName\": \"mlf\", \"RuleId\": \"crecr-73q93pgljm1pc2fp\"}]
     *
     * @var ruleNames[]
     */
    public $ruleNames;
    protected $_name = [
        'code'      => 'Code',
        'isSuccess' => 'IsSuccess',
        'requestId' => 'RequestId',
        'ruleNames' => 'RuleNames',
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
        if (null !== $this->isSuccess) {
            $res['IsSuccess'] = $this->isSuccess;
        }
        if (null !== $this->requestId) {
            $res['RequestId'] = $this->requestId;
        }
        if (null !== $this->ruleNames) {
            $res['RuleNames'] = [];
            if (null !== $this->ruleNames && \is_array($this->ruleNames)) {
                $n = 0;
                foreach ($this->ruleNames as $item) {
                    $res['RuleNames'][$n++] = null !== $item ? $item->toMap() : $item;
                }
            }
        }

        return $res;
    }

    /**
     * @param array $map
     *
     * @return ListEventCenterRuleNameResponseBody
     */
    public static function fromMap($map = [])
    {
        $model = new self();
        if (isset($map['Code'])) {
            $model->code = $map['Code'];
        }
        if (isset($map['IsSuccess'])) {
            $model->isSuccess = $map['IsSuccess'];
        }
        if (isset($map['RequestId'])) {
            $model->requestId = $map['RequestId'];
        }
        if (isset($map['RuleNames'])) {
            if (!empty($map['RuleNames'])) {
                $model->ruleNames = [];
                $n                = 0;
                foreach ($map['RuleNames'] as $item) {
                    $model->ruleNames[$n++] = null !== $item ? ruleNames::fromMap($item) : $item;
                }
            }
        }

        return $model;
    }
}
