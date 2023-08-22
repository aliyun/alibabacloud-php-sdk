<?php

// This file is auto-generated, don't edit it. Thanks.

namespace AlibabaCloud\SDK\Cr\V20181201\Models;

use AlibabaCloud\Tea\Model;

class UpdateEventCenterRuleResponseBody extends Model
{
    /**
     * @description The status code.
     *
     * @example 200
     *
     * @var int
     */
    public $code;

    /**
     * @description The ID of the request.
     *
     * @example 031572FA-7D8F-4C05-B790-1071E0E05DE6
     *
     * @var string
     */
    public $requestId;

    /**
     * @description The ID of the event notification rule.
     *
     * @example crecr-n6pbhgjxt*****
     *
     * @var string
     */
    public $ruleId;
    protected $_name = [
        'code'      => 'Code',
        'requestId' => 'RequestId',
        'ruleId'    => 'RuleId',
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
     * @return UpdateEventCenterRuleResponseBody
     */
    public static function fromMap($map = [])
    {
        $model = new self();
        if (isset($map['Code'])) {
            $model->code = $map['Code'];
        }
        if (isset($map['RequestId'])) {
            $model->requestId = $map['RequestId'];
        }
        if (isset($map['RuleId'])) {
            $model->ruleId = $map['RuleId'];
        }

        return $model;
    }
}
