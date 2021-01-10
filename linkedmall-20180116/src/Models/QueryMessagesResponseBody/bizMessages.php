<?php

// This file is auto-generated, don't edit it. Thanks.

namespace AlibabaCloud\SDK\Linkedmall\V20180116\Models\QueryMessagesResponseBody;

use AlibabaCloud\SDK\Linkedmall\V20180116\Models\QueryMessagesResponseBody\bizMessages\bizMessage;
use AlibabaCloud\Tea\Model;

class bizMessages extends Model
{
    /**
     * @var bizMessage[]
     */
    public $bizMessage;
    protected $_name = [
        'bizMessage' => 'BizMessage',
    ];

    public function validate()
    {
    }

    public function toMap()
    {
        $res = [];
        if (null !== $this->bizMessage) {
            $res['BizMessage'] = [];
            if (null !== $this->bizMessage && \is_array($this->bizMessage)) {
                $n = 0;
                foreach ($this->bizMessage as $item) {
                    $res['BizMessage'][$n++] = null !== $item ? $item->toMap() : $item;
                }
            }
        }

        return $res;
    }

    /**
     * @param array $map
     *
     * @return bizMessages
     */
    public static function fromMap($map = [])
    {
        $model = new self();
        if (isset($map['BizMessage'])) {
            if (!empty($map['BizMessage'])) {
                $model->bizMessage = [];
                $n                 = 0;
                foreach ($map['BizMessage'] as $item) {
                    $model->bizMessage[$n++] = null !== $item ? bizMessage::fromMap($item) : $item;
                }
            }
        }

        return $model;
    }
}
