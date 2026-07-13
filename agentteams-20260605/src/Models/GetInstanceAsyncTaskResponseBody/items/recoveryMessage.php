<?php

// This file is auto-generated, don't edit it. Thanks.

namespace AlibabaCloud\SDK\AgentTeams\V20260605\Models\GetInstanceAsyncTaskResponseBody\items;

use AlibabaCloud\Dara\Model;

class recoveryMessage extends Model
{
    /**
     * @var string
     */
    public $code;

    /**
     * @var string
     */
    public $message;

    /**
     * @var string
     */
    public $occurredAt;

    /**
     * @var string
     */
    public $recoverySuggestion;

    /**
     * @var bool
     */
    public $retryable;

    /**
     * @var string
     */
    public $source;

    /**
     * @var string
     */
    public $type;
    protected $_name = [
        'code' => 'Code',
        'message' => 'Message',
        'occurredAt' => 'OccurredAt',
        'recoverySuggestion' => 'RecoverySuggestion',
        'retryable' => 'Retryable',
        'source' => 'Source',
        'type' => 'Type',
    ];

    public function validate()
    {
        parent::validate();
    }

    public function toArray($noStream = false)
    {
        $res = [];
        if (null !== $this->code) {
            $res['Code'] = $this->code;
        }

        if (null !== $this->message) {
            $res['Message'] = $this->message;
        }

        if (null !== $this->occurredAt) {
            $res['OccurredAt'] = $this->occurredAt;
        }

        if (null !== $this->recoverySuggestion) {
            $res['RecoverySuggestion'] = $this->recoverySuggestion;
        }

        if (null !== $this->retryable) {
            $res['Retryable'] = $this->retryable;
        }

        if (null !== $this->source) {
            $res['Source'] = $this->source;
        }

        if (null !== $this->type) {
            $res['Type'] = $this->type;
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
        if (isset($map['Code'])) {
            $model->code = $map['Code'];
        }

        if (isset($map['Message'])) {
            $model->message = $map['Message'];
        }

        if (isset($map['OccurredAt'])) {
            $model->occurredAt = $map['OccurredAt'];
        }

        if (isset($map['RecoverySuggestion'])) {
            $model->recoverySuggestion = $map['RecoverySuggestion'];
        }

        if (isset($map['Retryable'])) {
            $model->retryable = $map['Retryable'];
        }

        if (isset($map['Source'])) {
            $model->source = $map['Source'];
        }

        if (isset($map['Type'])) {
            $model->type = $map['Type'];
        }

        return $model;
    }
}
