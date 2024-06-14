<?php

// This file is auto-generated, don't edit it. Thanks.

namespace AlibabaCloud\SDK\ContactCenterAI\V20240603\Models;

use AlibabaCloud\SDK\ContactCenterAI\V20240603\Models\RunCompletionMessageRequest\messages;
use AlibabaCloud\Tea\Model;

class RunCompletionMessageRequest extends Model
{
    /**
     * @description This parameter is required.
     *
     * @var messages[]
     */
    public $messages;

    /**
     * @example ccai-14b
     *
     * @var string
     */
    public $modelCode;

    /**
     * @example false
     *
     * @var bool
     */
    public $stream;
    protected $_name = [
        'messages'  => 'Messages',
        'modelCode' => 'ModelCode',
        'stream'    => 'Stream',
    ];

    public function validate()
    {
    }

    public function toMap()
    {
        $res = [];
        if (null !== $this->messages) {
            $res['Messages'] = [];
            if (null !== $this->messages && \is_array($this->messages)) {
                $n = 0;
                foreach ($this->messages as $item) {
                    $res['Messages'][$n++] = null !== $item ? $item->toMap() : $item;
                }
            }
        }
        if (null !== $this->modelCode) {
            $res['ModelCode'] = $this->modelCode;
        }
        if (null !== $this->stream) {
            $res['Stream'] = $this->stream;
        }

        return $res;
    }

    /**
     * @param array $map
     *
     * @return RunCompletionMessageRequest
     */
    public static function fromMap($map = [])
    {
        $model = new self();
        if (isset($map['Messages'])) {
            if (!empty($map['Messages'])) {
                $model->messages = [];
                $n               = 0;
                foreach ($map['Messages'] as $item) {
                    $model->messages[$n++] = null !== $item ? messages::fromMap($item) : $item;
                }
            }
        }
        if (isset($map['ModelCode'])) {
            $model->modelCode = $map['ModelCode'];
        }
        if (isset($map['Stream'])) {
            $model->stream = $map['Stream'];
        }

        return $model;
    }
}
