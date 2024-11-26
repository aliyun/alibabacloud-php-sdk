<?php

// This file is auto-generated, don't edit it. Thanks.

namespace AlibabaCloud\SDK\Qianzhou\V20211111\Models;

use AlibabaCloud\SDK\Qianzhou\V20211111\Models\AICreateSessionMessageResponseBody\reference;
use AlibabaCloud\Tea\Model;

class AICreateSessionMessageResponseBody extends Model
{
    /**
     * @var string
     */
    public $answer;

    /**
     * @var int
     */
    public $code;

    /**
     * @var string
     */
    public $data;

    /**
     * @var string
     */
    public $msg;

    /**
     * @var reference[]
     */
    public $reference;

    /**
     * @var string
     */
    public $requestId;

    /**
     * @var string
     */
    public $sessionId;
    protected $_name = [
        'answer'    => 'answer',
        'code'      => 'code',
        'data'      => 'data',
        'msg'       => 'msg',
        'reference' => 'reference',
        'requestId' => 'requestId',
        'sessionId' => 'session_id',
    ];

    public function validate()
    {
    }

    public function toMap()
    {
        $res = [];
        if (null !== $this->answer) {
            $res['answer'] = $this->answer;
        }
        if (null !== $this->code) {
            $res['code'] = $this->code;
        }
        if (null !== $this->data) {
            $res['data'] = $this->data;
        }
        if (null !== $this->msg) {
            $res['msg'] = $this->msg;
        }
        if (null !== $this->reference) {
            $res['reference'] = [];
            if (null !== $this->reference && \is_array($this->reference)) {
                $n = 0;
                foreach ($this->reference as $item) {
                    $res['reference'][$n++] = null !== $item ? $item->toMap() : $item;
                }
            }
        }
        if (null !== $this->requestId) {
            $res['requestId'] = $this->requestId;
        }
        if (null !== $this->sessionId) {
            $res['session_id'] = $this->sessionId;
        }

        return $res;
    }

    /**
     * @param array $map
     *
     * @return AICreateSessionMessageResponseBody
     */
    public static function fromMap($map = [])
    {
        $model = new self();
        if (isset($map['answer'])) {
            $model->answer = $map['answer'];
        }
        if (isset($map['code'])) {
            $model->code = $map['code'];
        }
        if (isset($map['data'])) {
            $model->data = $map['data'];
        }
        if (isset($map['msg'])) {
            $model->msg = $map['msg'];
        }
        if (isset($map['reference'])) {
            if (!empty($map['reference'])) {
                $model->reference = [];
                $n                = 0;
                foreach ($map['reference'] as $item) {
                    $model->reference[$n++] = null !== $item ? reference::fromMap($item) : $item;
                }
            }
        }
        if (isset($map['requestId'])) {
            $model->requestId = $map['requestId'];
        }
        if (isset($map['session_id'])) {
            $model->sessionId = $map['session_id'];
        }

        return $model;
    }
}
