<?php

// This file is auto-generated, don't edit it. Thanks.

namespace AlibabaCloud\SDK\ICE\V20201109\Models;

use AlibabaCloud\SDK\ICE\V20201109\Models\ListAIAgentDialoguesResponseBody\dialogues;
use AlibabaCloud\Tea\Model;

class ListAIAgentDialoguesResponseBody extends Model
{
    /**
     * @var dialogues[]
     */
    public $dialogues;

    /**
     * @example 7B117AF5-***************
     *
     * @var string
     */
    public $requestId;
    protected $_name = [
        'dialogues' => 'Dialogues',
        'requestId' => 'RequestId',
    ];

    public function validate()
    {
    }

    public function toMap()
    {
        $res = [];
        if (null !== $this->dialogues) {
            $res['Dialogues'] = [];
            if (null !== $this->dialogues && \is_array($this->dialogues)) {
                $n = 0;
                foreach ($this->dialogues as $item) {
                    $res['Dialogues'][$n++] = null !== $item ? $item->toMap() : $item;
                }
            }
        }
        if (null !== $this->requestId) {
            $res['RequestId'] = $this->requestId;
        }

        return $res;
    }

    /**
     * @param array $map
     *
     * @return ListAIAgentDialoguesResponseBody
     */
    public static function fromMap($map = [])
    {
        $model = new self();
        if (isset($map['Dialogues'])) {
            if (!empty($map['Dialogues'])) {
                $model->dialogues = [];
                $n                = 0;
                foreach ($map['Dialogues'] as $item) {
                    $model->dialogues[$n++] = null !== $item ? dialogues::fromMap($item) : $item;
                }
            }
        }
        if (isset($map['RequestId'])) {
            $model->requestId = $map['RequestId'];
        }

        return $model;
    }
}
