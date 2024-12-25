<?php

// This file is auto-generated, don't edit it. Thanks.

namespace AlibabaCloud\SDK\DianJin\V20240628\Models\RealTimeDialogResponseBody;

use AlibabaCloud\SDK\DianJin\V20240628\Models\RealTimeDialogResponseBody\choices\delta;
use AlibabaCloud\SDK\DianJin\V20240628\Models\RealTimeDialogResponseBody\choices\message;
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
     * @var message
     */
    public $message;
    protected $_name = [
        'delta'        => 'delta',
        'finishReason' => 'finishReason',
        'index'        => 'index',
        'message'      => 'message',
    ];

    public function validate()
    {
    }

    public function toMap()
    {
        $res = [];
        if (null !== $this->delta) {
            $res['delta'] = null !== $this->delta ? $this->delta->toMap() : null;
        }
        if (null !== $this->finishReason) {
            $res['finishReason'] = $this->finishReason;
        }
        if (null !== $this->index) {
            $res['index'] = $this->index;
        }
        if (null !== $this->message) {
            $res['message'] = null !== $this->message ? $this->message->toMap() : null;
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
        if (isset($map['delta'])) {
            $model->delta = delta::fromMap($map['delta']);
        }
        if (isset($map['finishReason'])) {
            $model->finishReason = $map['finishReason'];
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
