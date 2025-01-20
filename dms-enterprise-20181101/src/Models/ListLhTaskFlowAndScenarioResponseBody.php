<?php

// This file is auto-generated, don't edit it. Thanks.

namespace AlibabaCloud\SDK\Dmsenterprise\V20181101\Models;

use AlibabaCloud\Dara\Model;
use AlibabaCloud\SDK\Dmsenterprise\V20181101\Models\ListLhTaskFlowAndScenarioResponseBody\rawDAGList;
use AlibabaCloud\SDK\Dmsenterprise\V20181101\Models\ListLhTaskFlowAndScenarioResponseBody\scenarioDAGList;

class ListLhTaskFlowAndScenarioResponseBody extends Model
{
    /**
     * @var string
     */
    public $errorCode;
    /**
     * @var string
     */
    public $errorMessage;
    /**
     * @var rawDAGList
     */
    public $rawDAGList;
    /**
     * @var string
     */
    public $requestId;
    /**
     * @var scenarioDAGList
     */
    public $scenarioDAGList;
    /**
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
        if (null !== $this->rawDAGList) {
            $this->rawDAGList->validate();
        }
        if (null !== $this->scenarioDAGList) {
            $this->scenarioDAGList->validate();
        }
        parent::validate();
    }

    public function toArray($noStream = false)
    {
        $res = [];
        if (null !== $this->errorCode) {
            $res['ErrorCode'] = $this->errorCode;
        }

        if (null !== $this->errorMessage) {
            $res['ErrorMessage'] = $this->errorMessage;
        }

        if (null !== $this->rawDAGList) {
            $res['RawDAGList'] = null !== $this->rawDAGList ? $this->rawDAGList->toArray($noStream) : $this->rawDAGList;
        }

        if (null !== $this->requestId) {
            $res['RequestId'] = $this->requestId;
        }

        if (null !== $this->scenarioDAGList) {
            $res['ScenarioDAGList'] = null !== $this->scenarioDAGList ? $this->scenarioDAGList->toArray($noStream) : $this->scenarioDAGList;
        }

        if (null !== $this->success) {
            $res['Success'] = $this->success;
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
