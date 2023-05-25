<?php

// This file is auto-generated, don't edit it. Thanks.

namespace AlibabaCloud\SDK\Dmsenterprise\V20181101\Models;

use AlibabaCloud\SDK\Dmsenterprise\V20181101\Models\ListLhTaskFlowAndScenarioResponseBody\rawDAGList;
use AlibabaCloud\SDK\Dmsenterprise\V20181101\Models\ListLhTaskFlowAndScenarioResponseBody\scenarioDAGList;
use AlibabaCloud\Tea\Model;

class ListLhTaskFlowAndScenarioResponseBody extends Model
{
    /**
     * @description The error code returned if the request fails.
     *
     * @example UnknownError
     *
     * @var string
     */
    public $errorCode;

    /**
     * @description The error message returned if the request fails.
     *
     * @example UnknownError
     *
     * @var string
     */
    public $errorMessage;

    /**
     * @description The task flows in the default business scenario.
     *
     * @var rawDAGList
     */
    public $rawDAGList;

    /**
     * @description The ID of the request.
     *
     * @example 48602B78-0DDF-414C-8688-70CAB6070115
     *
     * @var string
     */
    public $requestId;

    /**
     * @description The task flows in other business scenarios.
     *
     * @var scenarioDAGList
     */
    public $scenarioDAGList;

    /**
     * @description Indicates whether the request is successful. Valid values:
     *
     * - **true**: The request is successful.
     * - **false**: The request fails.
     * @example true
     *
     * @var bool
     */
    public $success;
    protected $_name = [
        'errorCode'       => 'ErrorCode',
        'errorMessage'    => 'ErrorMessage',
        'rawDAGList'      => 'RawDAGList',
        'requestId'       => 'RequestId',
        'scenarioDAGList' => 'ScenarioDAGList',
        'success'         => 'Success',
    ];

    public function validate()
    {
    }

    public function toMap()
    {
        $res = [];
        if (null !== $this->errorCode) {
            $res['ErrorCode'] = $this->errorCode;
        }
        if (null !== $this->errorMessage) {
            $res['ErrorMessage'] = $this->errorMessage;
        }
        if (null !== $this->rawDAGList) {
            $res['RawDAGList'] = null !== $this->rawDAGList ? $this->rawDAGList->toMap() : null;
        }
        if (null !== $this->requestId) {
            $res['RequestId'] = $this->requestId;
        }
        if (null !== $this->scenarioDAGList) {
            $res['ScenarioDAGList'] = null !== $this->scenarioDAGList ? $this->scenarioDAGList->toMap() : null;
        }
        if (null !== $this->success) {
            $res['Success'] = $this->success;
        }

        return $res;
    }

    /**
     * @param array $map
     *
     * @return ListLhTaskFlowAndScenarioResponseBody
     */
    public static function fromMap($map = [])
    {
        $model = new self();
        if (isset($map['ErrorCode'])) {
            $model->errorCode = $map['ErrorCode'];
        }
        if (isset($map['ErrorMessage'])) {
            $model->errorMessage = $map['ErrorMessage'];
        }
        if (isset($map['RawDAGList'])) {
            $model->rawDAGList = rawDAGList::fromMap($map['RawDAGList']);
        }
        if (isset($map['RequestId'])) {
            $model->requestId = $map['RequestId'];
        }
        if (isset($map['ScenarioDAGList'])) {
            $model->scenarioDAGList = scenarioDAGList::fromMap($map['ScenarioDAGList']);
        }
        if (isset($map['Success'])) {
            $model->success = $map['Success'];
        }

        return $model;
    }
}
