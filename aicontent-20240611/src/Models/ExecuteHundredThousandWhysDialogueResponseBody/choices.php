<?php

// This file is auto-generated, don't edit it. Thanks.

namespace AlibabaCloud\SDK\AiContent\V20240611\Models\ExecuteHundredThousandWhysDialogueResponseBody;

use AlibabaCloud\Dara\Model;
use AlibabaCloud\SDK\AiContent\V20240611\Models\ExecuteHundredThousandWhysDialogueResponseBody\choices\delta;

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
    protected $_name = [
        'delta' => 'delta',
        'finishReason' => 'finish_reason',
        'index' => 'index',
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
            $res['delta'] = null !== $this->delta ? $this->delta->toArray($noStream) : $this->delta;
        }

        if (null !== $this->finishReason) {
            $res['finish_reason'] = $this->finishReason;
        }

        if (null !== $this->index) {
            $res['index'] = $this->index;
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
        if (isset($map['delta'])) {
            $model->delta = delta::fromMap($map['delta']);
        }

        if (isset($map['finish_reason'])) {
            $model->finishReason = $map['finish_reason'];
        }

        if (isset($map['index'])) {
            $model->index = $map['index'];
        }

        return $model;
    }
}
