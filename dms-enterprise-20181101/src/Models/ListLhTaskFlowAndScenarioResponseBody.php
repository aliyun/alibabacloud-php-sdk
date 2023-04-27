<?php

// This file is auto-generated, don't edit it. Thanks.

namespace AlibabaCloud\SDK\Dmsenterprise\V20181101\Models;

use AlibabaCloud\SDK\Dmsenterprise\V20181101\Models\ListLhTaskFlowAndScenarioResponseBody\rawDAGList;
use AlibabaCloud\SDK\Dmsenterprise\V20181101\Models\ListLhTaskFlowAndScenarioResponseBody\scenarioDAGList;
use AlibabaCloud\Tea\Model;

class ListLhTaskFlowAndScenarioResponseBody extends Model
{
    /**
     * @example UnknownError
     *
     * @var string
     */
    public $errorCode;

    /**
     * @example UnknownError
     *
     * @var string
     */
    public $errorMessage;

    /**
     * @description The extended field. No meaning is specified for this field.
     *
     * @var rawDAGList
     */
    public $rawDAGList;

    /**
     * @example 48602B78-0DDF-414C-8688-70CAB6070115
     *
     * @var string
     */
    public $requestId;

    /**
     * @var scenarioDAGList
     */
    public $scenarioDAGList;

    /**
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
