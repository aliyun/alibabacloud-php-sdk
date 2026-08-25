<?php

// This file is auto-generated, don't edit it. Thanks.

namespace AlibabaCloud\SDK\AgentCore\V20260804\Models\DebugModelResponseBody;

use AlibabaCloud\Dara\Model;

class data extends Model
{
    /**
     * @var string
     */
    public $connectionId;

    /**
     * @var bool
     */
    public $debugSuccess;

    /**
     * @var string
     */
    public $errorCode;

    /**
     * @var string
     */
    public $errorMessage;

    /**
     * @var int
     */
    public $inputTokens;

    /**
     * @var int
     */
    public $latencyMs;

    /**
     * @var string
     */
    public $modelId;

    /**
     * @var int
     */
    public $outputTokens;

    /**
     * @var string
     */
    public $response;

    /**
     * @var string
     */
    public $status;
    protected $_name = [
        'connectionId' => 'connectionId',
        'debugSuccess' => 'debugSuccess',
        'errorCode' => 'errorCode',
        'errorMessage' => 'errorMessage',
        'inputTokens' => 'inputTokens',
        'latencyMs' => 'latencyMs',
        'modelId' => 'modelId',
        'outputTokens' => 'outputTokens',
        'response' => 'response',
        'status' => 'status',
    ];

    public function validate()
    {
        parent::validate();
    }

    public function toArray($noStream = false)
    {
        $res = [];
        if (null !== $this->connectionId) {
            $res['connectionId'] = $this->connectionId;
        }

        if (null !== $this->debugSuccess) {
            $res['debugSuccess'] = $this->debugSuccess;
        }

        if (null !== $this->errorCode) {
            $res['errorCode'] = $this->errorCode;
        }

        if (null !== $this->errorMessage) {
            $res['errorMessage'] = $this->errorMessage;
        }

        if (null !== $this->inputTokens) {
            $res['inputTokens'] = $this->inputTokens;
        }

        if (null !== $this->latencyMs) {
            $res['latencyMs'] = $this->latencyMs;
        }

        if (null !== $this->modelId) {
            $res['modelId'] = $this->modelId;
        }

        if (null !== $this->outputTokens) {
            $res['outputTokens'] = $this->outputTokens;
        }

        if (null !== $this->response) {
            $res['response'] = $this->response;
        }

        if (null !== $this->status) {
            $res['status'] = $this->status;
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
        if (isset($map['connectionId'])) {
            $model->connectionId = $map['connectionId'];
        }

        if (isset($map['debugSuccess'])) {
            $model->debugSuccess = $map['debugSuccess'];
        }

        if (isset($map['errorCode'])) {
            $model->errorCode = $map['errorCode'];
        }

        if (isset($map['errorMessage'])) {
            $model->errorMessage = $map['errorMessage'];
        }

        if (isset($map['inputTokens'])) {
            $model->inputTokens = $map['inputTokens'];
        }

        if (isset($map['latencyMs'])) {
            $model->latencyMs = $map['latencyMs'];
        }

        if (isset($map['modelId'])) {
            $model->modelId = $map['modelId'];
        }

        if (isset($map['outputTokens'])) {
            $model->outputTokens = $map['outputTokens'];
        }

        if (isset($map['response'])) {
            $model->response = $map['response'];
        }

        if (isset($map['status'])) {
            $model->status = $map['status'];
        }

        return $model;
    }
}
