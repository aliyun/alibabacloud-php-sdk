<?php

// This file is auto-generated, don't edit it. Thanks.

namespace AlibabaCloud\SDK\WinNexo\V20260512\Models;

use AlibabaCloud\Dara\Model;

class ConvertDirectConversationToWorkResponseBody extends Model
{
    /**
     * @var string
     */
    public $code;

    /**
     * @var string
     */
    public $conversionId;

    /**
     * @var int
     */
    public $convertedRounds;

    /**
     * @var string
     */
    public $historyScope;

    /**
     * @var string
     */
    public $message;

    /**
     * @var string
     */
    public $requestId;

    /**
     * @var bool
     */
    public $retryable;

    /**
     * @var int
     */
    public $sourceEpoch;

    /**
     * @var string
     */
    public $sourceSessionId;

    /**
     * @var string
     */
    public $status;

    /**
     * @var string
     */
    public $targetSessionId;

    /**
     * @var int
     */
    public $throughSequence;

    /**
     * @var string
     */
    public $workMode;
    protected $_name = [
        'code' => 'code',
        'conversionId' => 'conversionId',
        'convertedRounds' => 'convertedRounds',
        'historyScope' => 'historyScope',
        'message' => 'message',
        'requestId' => 'requestId',
        'retryable' => 'retryable',
        'sourceEpoch' => 'sourceEpoch',
        'sourceSessionId' => 'sourceSessionId',
        'status' => 'status',
        'targetSessionId' => 'targetSessionId',
        'throughSequence' => 'throughSequence',
        'workMode' => 'workMode',
    ];

    public function validate()
    {
        parent::validate();
    }

    public function toArray($noStream = false)
    {
        $res = [];
        if (null !== $this->code) {
            $res['code'] = $this->code;
        }

        if (null !== $this->conversionId) {
            $res['conversionId'] = $this->conversionId;
        }

        if (null !== $this->convertedRounds) {
            $res['convertedRounds'] = $this->convertedRounds;
        }

        if (null !== $this->historyScope) {
            $res['historyScope'] = $this->historyScope;
        }

        if (null !== $this->message) {
            $res['message'] = $this->message;
        }

        if (null !== $this->requestId) {
            $res['requestId'] = $this->requestId;
        }

        if (null !== $this->retryable) {
            $res['retryable'] = $this->retryable;
        }

        if (null !== $this->sourceEpoch) {
            $res['sourceEpoch'] = $this->sourceEpoch;
        }

        if (null !== $this->sourceSessionId) {
            $res['sourceSessionId'] = $this->sourceSessionId;
        }

        if (null !== $this->status) {
            $res['status'] = $this->status;
        }

        if (null !== $this->targetSessionId) {
            $res['targetSessionId'] = $this->targetSessionId;
        }

        if (null !== $this->throughSequence) {
            $res['throughSequence'] = $this->throughSequence;
        }

        if (null !== $this->workMode) {
            $res['workMode'] = $this->workMode;
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
        if (isset($map['code'])) {
            $model->code = $map['code'];
        }

        if (isset($map['conversionId'])) {
            $model->conversionId = $map['conversionId'];
        }

        if (isset($map['convertedRounds'])) {
            $model->convertedRounds = $map['convertedRounds'];
        }

        if (isset($map['historyScope'])) {
            $model->historyScope = $map['historyScope'];
        }

        if (isset($map['message'])) {
            $model->message = $map['message'];
        }

        if (isset($map['requestId'])) {
            $model->requestId = $map['requestId'];
        }

        if (isset($map['retryable'])) {
            $model->retryable = $map['retryable'];
        }

        if (isset($map['sourceEpoch'])) {
            $model->sourceEpoch = $map['sourceEpoch'];
        }

        if (isset($map['sourceSessionId'])) {
            $model->sourceSessionId = $map['sourceSessionId'];
        }

        if (isset($map['status'])) {
            $model->status = $map['status'];
        }

        if (isset($map['targetSessionId'])) {
            $model->targetSessionId = $map['targetSessionId'];
        }

        if (isset($map['throughSequence'])) {
            $model->throughSequence = $map['throughSequence'];
        }

        if (isset($map['workMode'])) {
            $model->workMode = $map['workMode'];
        }

        return $model;
    }
}
