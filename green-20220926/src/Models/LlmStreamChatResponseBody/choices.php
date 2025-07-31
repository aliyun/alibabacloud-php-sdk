<?php

// This file is auto-generated, don't edit it. Thanks.

namespace AlibabaCloud\SDK\Green\V20220926\Models\LlmStreamChatResponseBody;

use AlibabaCloud\SDK\Green\V20220926\Models\LlmStreamChatResponseBody\choices\delta;
use AlibabaCloud\Tea\Model;

class choices extends Model
{
    /**
     * @var delta
     */
    public $delta;

    /**
     * @example stop
     *
     * @var string
     */
    public $finishReason;

    /**
     * @example 0
     *
     * @var int
     */
    public $index;

    /**
     * @example null
     *
     * @var string
     */
    public $logprobs;
    protected $_name = [
        'delta' => 'Delta',
        'finishReason' => 'FinishReason',
        'index' => 'Index',
        'logprobs' => 'Logprobs',
    ];

    public function validate() {}

    public function toMap()
    {
        $res = [];
        if (null !== $this->delta) {
            $res['Delta'] = null !== $this->delta ? $this->delta->toMap() : null;
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

    /**
     * @param array $map
     *
     * @return choices
     */
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
