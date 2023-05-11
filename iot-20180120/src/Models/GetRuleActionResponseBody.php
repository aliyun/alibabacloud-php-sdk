<?php

// This file is auto-generated, don't edit it. Thanks.

namespace AlibabaCloud\SDK\Iot\V20180120\Models;

use AlibabaCloud\SDK\Iot\V20180120\Models\GetRuleActionResponseBody\ruleActionInfo;
use AlibabaCloud\Tea\Model;

class GetRuleActionResponseBody extends Model
{
    /**
     * @description The error message returned if the call fails.
     *
     * @example iot.system.SystemException
     *
     * @var string
     */
    public $code;

    /**
     * @description The ID of the request.
     *
     * @var string
     */
    public $errorMessage;

    /**
     * @description Indicates whether the call was successful.
     *
     *   **true**: The call was successful.
     *   **false**: The call failed.
     *
     * @example F2D0755D-F350-40FE-9A6D-491859DB5E5F
     *
     * @var string
     */
    public $requestId;

    /**
     * @description Indicates whether the rule action forwarded error operation data that failed to be forwarded to the destination cloud service. A data forwarding failure indicates that forwarding retries also failed.
     *
     *   **true**: forwards error operation data.
     *   **false**: forwards normal data instead of error operation data.
     *
     * @var ruleActionInfo
     */
    public $ruleActionInfo;

    /**
     * @description The rule action information returned if the call was successful. For more information, see the following parameters.
     *
     * @example true
     *
     * @var bool
     */
    public $success;
    protected $_name = [
        'code'           => 'Code',
        'errorMessage'   => 'ErrorMessage',
        'requestId'      => 'RequestId',
        'ruleActionInfo' => 'RuleActionInfo',
        'success'        => 'Success',
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
        if (null !== $this->errorMessage) {
            $res['ErrorMessage'] = $this->errorMessage;
        }
        if (null !== $this->requestId) {
            $res['RequestId'] = $this->requestId;
        }
        if (null !== $this->ruleActionInfo) {
            $res['RuleActionInfo'] = null !== $this->ruleActionInfo ? $this->ruleActionInfo->toMap() : null;
        }
        if (null !== $this->success) {
            $res['Success'] = $this->success;
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
        if (isset($map['Code'])) {
            $model->code = $map['Code'];
        }
        if (isset($map['ErrorMessage'])) {
            $model->errorMessage = $map['ErrorMessage'];
        }
        if (isset($map['RequestId'])) {
            $model->requestId = $map['RequestId'];
        }
        if (isset($map['RuleActionInfo'])) {
            $model->ruleActionInfo = ruleActionInfo::fromMap($map['RuleActionInfo']);
        }
        if (isset($map['Success'])) {
            $model->success = $map['Success'];
        }

        return $model;
    }
}
