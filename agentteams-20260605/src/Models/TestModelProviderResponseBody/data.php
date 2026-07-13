<?php

// This file is auto-generated, don't edit it. Thanks.

namespace AlibabaCloud\SDK\AgentTeams\V20260605\Models\TestModelProviderResponseBody;

use AlibabaCloud\Dara\Model;

class data extends Model
{
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

    /**
     * @var bool
     */
    public $success;
    protected $_name = [
        'errorMessage' => 'ErrorMessage',
        'inputTokens' => 'InputTokens',
        'latencyMs' => 'LatencyMs',
        'outputTokens' => 'OutputTokens',
        'response' => 'Response',
        'status' => 'Status',
        'success' => 'Success',
    ];

    public function validate()
    {
        parent::validate();
    }

    public function toArray($noStream = false)
    {
        $res = [];
        if (null !== $this->errorMessage) {
            $res['ErrorMessage'] = $this->errorMessage;
        }

        if (null !== $this->inputTokens) {
            $res['InputTokens'] = $this->inputTokens;
        }

        if (null !== $this->latencyMs) {
            $res['LatencyMs'] = $this->latencyMs;
        }

        if (null !== $this->outputTokens) {
            $res['OutputTokens'] = $this->outputTokens;
        }

        if (null !== $this->response) {
            $res['Response'] = $this->response;
        }

        if (null !== $this->status) {
            $res['Status'] = $this->status;
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
        if (isset($map['ErrorMessage'])) {
            $model->errorMessage = $map['ErrorMessage'];
        }

        if (isset($map['InputTokens'])) {
            $model->inputTokens = $map['InputTokens'];
        }

        if (isset($map['LatencyMs'])) {
            $model->latencyMs = $map['LatencyMs'];
        }

        if (isset($map['OutputTokens'])) {
            $model->outputTokens = $map['OutputTokens'];
        }

        if (isset($map['Response'])) {
            $model->response = $map['Response'];
        }

        if (isset($map['Status'])) {
            $model->status = $map['Status'];
        }

        if (isset($map['Success'])) {
            $model->success = $map['Success'];
        }

        return $model;
    }
}
