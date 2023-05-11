<?php

// This file is auto-generated, don't edit it. Thanks.

namespace AlibabaCloud\SDK\Iot\V20180120\Models;

use AlibabaCloud\SDK\Iot\V20180120\Models\ListRuleActionsResponseBody\ruleActionList;
use AlibabaCloud\Tea\Model;

class ListRuleActionsResponseBody extends Model
{
    /**
     * @description The error code returned if the call fails. For more information about error codes, see [Error codes](~~87387~~).
     *
     * @example iot.system.SystemException
     *
     * @var string
     */
    public $code;

    /**
     * @description The error message returned if the call fails.
     *
     * @var string
     */
    public $errorMessage;

    /**
     * @description The ID of the request.
     *
     * @example 22254BDB-3DC1-4643-8D1B-EE0437EF09A9
     *
     * @var string
     */
    public $requestId;

    /**
     * @description If the call is successful, all configured data forwarding actions of the specified rule are returned. For more information about the returned data, see the following **RuleActionInfo** parameter.
     *
     * @var ruleActionList
     */
    public $ruleActionList;

    /**
     * @description Indicates whether the call was successful.
     *
     * - **true**: The call was successful.
     * - **false**: The call failed.
     * @example true
     *
     * @var bool
     */
    public $success;
    protected $_name = [
        'code'           => 'Code',
        'errorMessage'   => 'ErrorMessage',
        'requestId'      => 'RequestId',
        'ruleActionList' => 'RuleActionList',
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
        if (null !== $this->ruleActionList) {
            $res['RuleActionList'] = null !== $this->ruleActionList ? $this->ruleActionList->toMap() : null;
        }
        if (null !== $this->success) {
            $res['Success'] = $this->success;
        }

        return $res;
    }

    /**
     * @param array $map
     *
     * @return ListRuleActionsResponseBody
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
        if (isset($map['RuleActionList'])) {
            $model->ruleActionList = ruleActionList::fromMap($map['RuleActionList']);
        }
        if (isset($map['Success'])) {
            $model->success = $map['Success'];
        }

        return $model;
    }
}
