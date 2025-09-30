<?php

// This file is auto-generated, don't edit it. Thanks.

namespace AlibabaCloud\SDK\Gpdb\V20160503\Models\ChatWithKnowledgeBaseStreamResponseBody\chatCompletion;

use AlibabaCloud\Dara\Model;
use AlibabaCloud\SDK\Gpdb\V20160503\Models\ChatWithKnowledgeBaseStreamResponseBody\chatCompletion\choices\message;

class choices extends Model
{
    /**
     * @var string
     */
    public $finishReason;

    /**
     * @var int
     */
    public $index;

    /**
     * @var message
     */
    public $message;
    protected $_name = [
        'finishReason' => 'FinishReason',
        'index' => 'Index',
        'message' => 'Message',
    ];

    public function validate()
    {
        if (null !== $this->message) {
            $this->message->validate();
        }
        parent::validate();
    }

    public function toArray($noStream = false)
    {
        $res = [];
        if (null !== $this->finishReason) {
            $res['FinishReason'] = $this->finishReason;
        }

        if (null !== $this->index) {
            $res['Index'] = $this->index;
        }

        if (null !== $this->message) {
            $res['Message'] = null !== $this->message ? $this->message->toArray($noStream) : $this->message;
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
        if (isset($map['FinishReason'])) {
            $model->finishReason = $map['FinishReason'];
        }

        if (isset($map['Index'])) {
            $model->index = $map['Index'];
        }

        if (isset($map['Message'])) {
            $model->message = message::fromMap($map['Message']);
        }

        return $model;
    }
}
