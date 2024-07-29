<?php

// This file is auto-generated, don't edit it. Thanks.

namespace AlibabaCloud\SDK\Rtc\V20180111\Models;

use AlibabaCloud\SDK\Rtc\V20180111\Models\DescribeCallbacksResponseBody\callbacks;
use AlibabaCloud\Tea\Model;

class DescribeCallbacksResponseBody extends Model
{
    /**
     * @var callbacks[]
     */
    public $callbacks;

    /**
     * @description Id of the request
     *
     * @example 16A96B9A-F203-4EC5-8E43-CB92E68F4CD8
     *
     * @var string
     */
    public $requestId;
    protected $_name = [
        'callbacks' => 'Callbacks',
        'requestId' => 'RequestId',
    ];

    public function validate()
    {
    }

    public function toMap()
    {
        $res = [];
        if (null !== $this->callbacks) {
            $res['Callbacks'] = [];
            if (null !== $this->callbacks && \is_array($this->callbacks)) {
                $n = 0;
                foreach ($this->callbacks as $item) {
                    $res['Callbacks'][$n++] = null !== $item ? $item->toMap() : $item;
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
     * @return DescribeCallbacksResponseBody
     */
    public static function fromMap($map = [])
    {
        $model = new self();
        if (isset($map['Callbacks'])) {
            if (!empty($map['Callbacks'])) {
                $model->callbacks = [];
                $n                = 0;
                foreach ($map['Callbacks'] as $item) {
                    $model->callbacks[$n++] = null !== $item ? callbacks::fromMap($item) : $item;
                }
            }
        }
        if (isset($map['RequestId'])) {
            $model->requestId = $map['RequestId'];
        }

        return $model;
    }
}
