<?php

// This file is auto-generated, don't edit it. Thanks.

namespace AlibabaCloud\SDK\DianJin\V20240628\Models\BizProcessing;

use AlibabaCloud\Dara\Model;
use AlibabaCloud\SDK\DianJin\V20240628\Models\BizProcessing\choices\delta;
use AlibabaCloud\SDK\DianJin\V20240628\Models\BizProcessing\choices\message;

class choices extends Model
{
    /**
     * @var string
     */
    public $finishReason;

    /**
     * @var delta
     */
    public $delta;

    /**
     * @var int
     */
    public $index;

    /**
     * @var message
     */
    public $message;
    protected $_name = [
        'finishReason' => 'finishReason',
        'delta' => 'delta',
        'index' => 'index',
        'message' => 'message',
    ];

    public function validate()
    {
        if (null !== $this->delta) {
            $this->delta->validate();
        }
        if (null !== $this->message) {
            $this->message->validate();
        }
        parent::validate();
    }

    public function toArray($noStream = false)
    {
        $res = [];
        if (null !== $this->finishReason) {
            $res['finishReason'] = $this->finishReason;
        }

        if (null !== $this->delta) {
            $res['delta'] = null !== $this->delta ? $this->delta->toArray($noStream) : $this->delta;
        }

        if (null !== $this->index) {
            $res['index'] = $this->index;
        }

        if (null !== $this->message) {
            $res['message'] = null !== $this->message ? $this->message->toArray($noStream) : $this->message;
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
        if (isset($map['finishReason'])) {
            $model->finishReason = $map['finishReason'];
        }

        if (isset($map['delta'])) {
            $model->delta = delta::fromMap($map['delta']);
        }

        if (isset($map['index'])) {
            $model->index = $map['index'];
        }

        if (isset($map['message'])) {
            $model->message = message::fromMap($map['message']);
        }

        return $model;
    }
}
