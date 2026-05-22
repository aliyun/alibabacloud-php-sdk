<?php

// This file is auto-generated, don't edit it. Thanks.

namespace AlibabaCloud\SDK\AiSearchEngine\V20260417\Models\QaChatResponseBody;

use AlibabaCloud\Dara\Model;

class data extends Model
{
    /**
     * @var string
     */
    public $data;

    /**
     * @var string
     */
    public $delta;

    /**
     * @var string
     */
    public $errorCode;

    /**
     * @var string
     */
    public $errorText;

    /**
     * @var string
     */
    public $finishReason;

    /**
     * @var string
     */
    public $id;

    /**
     * @var string
     */
    public $requestId;

    /**
     * @var bool
     */
    public $retryable;

    /**
     * @var string
     */
    public $type;
    protected $_name = [
        'data' => 'data',
        'delta' => 'delta',
        'errorCode' => 'errorCode',
        'errorText' => 'errorText',
        'finishReason' => 'finishReason',
        'id' => 'id',
        'requestId' => 'requestId',
        'retryable' => 'retryable',
        'type' => 'type',
    ];

    public function validate()
    {
        parent::validate();
    }

    public function toArray($noStream = false)
    {
        $res = [];
        if (null !== $this->data) {
            $res['data'] = $this->data;
        }

        if (null !== $this->delta) {
            $res['delta'] = $this->delta;
        }

        if (null !== $this->errorCode) {
            $res['errorCode'] = $this->errorCode;
        }

        if (null !== $this->errorText) {
            $res['errorText'] = $this->errorText;
        }

        if (null !== $this->finishReason) {
            $res['finishReason'] = $this->finishReason;
        }

        if (null !== $this->id) {
            $res['id'] = $this->id;
        }

        if (null !== $this->requestId) {
            $res['requestId'] = $this->requestId;
        }

        if (null !== $this->retryable) {
            $res['retryable'] = $this->retryable;
        }

        if (null !== $this->type) {
            $res['type'] = $this->type;
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
        if (isset($map['data'])) {
            $model->data = $map['data'];
        }

        if (isset($map['delta'])) {
            $model->delta = $map['delta'];
        }

        if (isset($map['errorCode'])) {
            $model->errorCode = $map['errorCode'];
        }

        if (isset($map['errorText'])) {
            $model->errorText = $map['errorText'];
        }

        if (isset($map['finishReason'])) {
            $model->finishReason = $map['finishReason'];
        }

        if (isset($map['id'])) {
            $model->id = $map['id'];
        }

        if (isset($map['requestId'])) {
            $model->requestId = $map['requestId'];
        }

        if (isset($map['retryable'])) {
            $model->retryable = $map['retryable'];
        }

        if (isset($map['type'])) {
            $model->type = $map['type'];
        }

        return $model;
    }
}
