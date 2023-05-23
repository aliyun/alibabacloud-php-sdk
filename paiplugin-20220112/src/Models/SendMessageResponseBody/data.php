<?php

// This file is auto-generated, don't edit it. Thanks.

namespace AlibabaCloud\SDK\PaiPlugin\V20220112\Models\SendMessageResponseBody;

use AlibabaCloud\SDK\PaiPlugin\V20220112\Models\SendMessageResponseBody\data\messages;
use AlibabaCloud\Tea\Model;

class data extends Model
{
    /**
     * @description 短信结果列表，列表中手机号的顺序与输入请求手机号顺序一一对应。
     *
     * @var messages[]
     */
    public $messages;

    /**
     * @description 短信批处理Id，可使用ListMessages查询短信状态。
     *
     * @example 62a72a20-8a9b-4060-a510-0c30a9340cba
     *
     * @var string
     */
    public $requestId;
    protected $_name = [
        'messages'  => 'Messages',
        'requestId' => 'RequestId',
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
        if (null !== $this->requestId) {
            $res['RequestId'] = $this->requestId;
        }

        return $res;
    }

    /**
     * @param array $map
     *
     * @return data
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
        if (isset($map['RequestId'])) {
            $model->requestId = $map['RequestId'];
        }

        return $model;
    }
}
