<?php

// This file is auto-generated, don't edit it. Thanks.

namespace AlibabaCloud\SDK\Green\V20220926\Models\LlmStreamChatResponseBody;

use AlibabaCloud\Dara\Model;
use AlibabaCloud\SDK\Green\V20220926\Models\LlmStreamChatResponseBody\choices\delta;

class choices extends Model
{
    /**
     * @var delta
     */
    public $delta;

    /**
     * @var string
     */
    public $finishReason;

    /**
     * @var int
     */
    public $index;

    /**
     * @var string
     */
    public $logprobs;
    protected $_name = [
        'delta' => 'Delta',
        'finishReason' => 'FinishReason',
        'index' => 'Index',
        'logprobs' => 'Logprobs',
    ];

    public function validate()
    {
        if (null !== $this->delta) {
            $this->delta->validate();
        }
        parent::validate();
    }

    public function toArray($noStream = false)
    {
        $res = [];
        if (null !== $this->delta) {
            $res['Delta'] = null !== $this->delta ? $this->delta->toArray($noStream) : $this->delta;
        }

        if (null !== $this->finishReason) {
            $res['FinishReason'] = $this->finishReason;
        }

        if (null !== $this->index) {
            $res['Index'] = $this->index;
        }

        if (null !== $this->logprobs) {
            $res['Logprobs'] = $this->logprobs;
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
        if (isset($map['Delta'])) {
            $model->delta = delta::fromMap($map['Delta']);
        }

        if (isset($map['FinishReason'])) {
            $model->finishReason = $map['FinishReason'];
        }

        if (isset($map['Index'])) {
            $model->index = $map['Index'];
        }

        if (isset($map['Logprobs'])) {
            $model->logprobs = $map['Logprobs'];
        }

        return $model;
    }
}
