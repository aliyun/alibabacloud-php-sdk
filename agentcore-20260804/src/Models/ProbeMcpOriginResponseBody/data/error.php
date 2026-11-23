<?php

// This file is auto-generated, don't edit it. Thanks.

namespace AlibabaCloud\SDK\AgentCore\V20260804\Models\ProbeMcpOriginResponseBody\data;

use AlibabaCloud\Dara\Model;

class error extends Model
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
    public $stage;
    protected $_name = [
        'code' => 'code',
        'message' => 'message',
        'retryable' => 'retryable',
        'source' => 'source',
        'stage' => 'stage',
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

        if (null !== $this->message) {
            $res['message'] = $this->message;
        }

        if (null !== $this->retryable) {
            $res['retryable'] = $this->retryable;
        }

        if (null !== $this->source) {
            $res['source'] = $this->source;
        }

        if (null !== $this->stage) {
            $res['stage'] = $this->stage;
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

        if (isset($map['message'])) {
            $model->message = $map['message'];
        }

        if (isset($map['retryable'])) {
            $model->retryable = $map['retryable'];
        }

        if (isset($map['source'])) {
            $model->source = $map['source'];
        }

        if (isset($map['stage'])) {
            $model->stage = $map['stage'];
        }

        return $model;
    }
}
