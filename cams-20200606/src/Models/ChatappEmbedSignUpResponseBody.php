<?php

// This file is auto-generated, don't edit it. Thanks.

namespace AlibabaCloud\SDK\Cams\V20200606\Models;

use AlibabaCloud\SDK\Cams\V20200606\Models\ChatappEmbedSignUpResponseBody\wabas;
use AlibabaCloud\Tea\Model;

class ChatappEmbedSignUpResponseBody extends Model
{
    /**
     * @example OK
     *
     * @var string
     */
    public $code;

    /**
     * @var string
     */
    public $message;

    /**
     * @example 90E63D28-E31D-1EB2-8939-A9486641****
     *
     * @var string
     */
    public $requestId;

    /**
     * @var wabas[]
     */
    public $wabas;
    protected $_name = [
        'code'      => 'Code',
        'message'   => 'Message',
        'requestId' => 'RequestId',
        'wabas'     => 'Wabas',
    ];

    public function validate()
    {
    }

    public function toMap()
    {
        $res = [];
        if (null !== $this->code) {
            $res['Code'] = $this->code;
        }
        if (null !== $this->message) {
            $res['Message'] = $this->message;
        }
        if (null !== $this->requestId) {
            $res['RequestId'] = $this->requestId;
        }
        if (null !== $this->wabas) {
            $res['Wabas'] = [];
            if (null !== $this->wabas && \is_array($this->wabas)) {
                $n = 0;
                foreach ($this->wabas as $item) {
                    $res['Wabas'][$n++] = null !== $item ? $item->toMap() : $item;
                }
            }
        }

        return $res;
    }

    /**
     * @param array $map
     *
     * @return ChatappEmbedSignUpResponseBody
     */
    public static function fromMap($map = [])
    {
        $model = new self();
        if (isset($map['Code'])) {
            $model->code = $map['Code'];
        }
        if (isset($map['Message'])) {
            $model->message = $map['Message'];
        }
        if (isset($map['RequestId'])) {
            $model->requestId = $map['RequestId'];
        }
        if (isset($map['Wabas'])) {
            if (!empty($map['Wabas'])) {
                $model->wabas = [];
                $n            = 0;
                foreach ($map['Wabas'] as $item) {
                    $model->wabas[$n++] = null !== $item ? wabas::fromMap($item) : $item;
                }
            }
        }

        return $model;
    }
}
