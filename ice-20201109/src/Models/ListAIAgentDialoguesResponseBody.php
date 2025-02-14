<?php

// This file is auto-generated, don't edit it. Thanks.

namespace AlibabaCloud\SDK\ICE\V20201109\Models;

use AlibabaCloud\Dara\Model;
use AlibabaCloud\SDK\ICE\V20201109\Models\ListAIAgentDialoguesResponseBody\dialogues;

class ListAIAgentDialoguesResponseBody extends Model
{
    /**
     * @var dialogues[]
     */
    public $dialogues;
    /**
     * @var string
     */
    public $requestId;
    protected $_name = [
        'dialogues' => 'Dialogues',
        'requestId' => 'RequestId',
    ];

    public function validate()
    {
        if (\is_array($this->dialogues)) {
            Model::validateArray($this->dialogues);
        }
        parent::validate();
    }

    public function toArray($noStream = false)
    {
        $res = [];
        if (null !== $this->dialogues) {
            if (\is_array($this->dialogues)) {
                $res['Dialogues'] = [];
                $n1               = 0;
                foreach ($this->dialogues as $item1) {
                    $res['Dialogues'][$n1++] = null !== $item1 ? $item1->toArray($noStream) : $item1;
                }
            }
        }

        if (null !== $this->requestId) {
            $res['RequestId'] = $this->requestId;
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
        if (isset($map['Dialogues'])) {
            if (!empty($map['Dialogues'])) {
                $model->dialogues = [];
                $n1               = 0;
                foreach ($map['Dialogues'] as $item1) {
                    $model->dialogues[$n1++] = dialogues::fromMap($item1);
                }
            }
        }

        if (isset($map['RequestId'])) {
            $model->requestId = $map['RequestId'];
        }

        return $model;
    }
}
