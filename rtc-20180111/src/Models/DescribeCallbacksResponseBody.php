<?php

// This file is auto-generated, don't edit it. Thanks.

namespace AlibabaCloud\SDK\Rtc\V20180111\Models;

use AlibabaCloud\Dara\Model;
use AlibabaCloud\SDK\Rtc\V20180111\Models\DescribeCallbacksResponseBody\callbacks;

class DescribeCallbacksResponseBody extends Model
{
    /**
     * @var callbacks[]
     */
    public $callbacks;

    /**
     * @var string
     */
    public $requestId;
    protected $_name = [
        'callbacks' => 'Callbacks',
        'requestId' => 'RequestId',
    ];

    public function validate()
    {
        if (\is_array($this->callbacks)) {
            Model::validateArray($this->callbacks);
        }
        parent::validate();
    }

    public function toArray($noStream = false)
    {
        $res = [];
        if (null !== $this->callbacks) {
            if (\is_array($this->callbacks)) {
                $res['Callbacks'] = [];
                $n1 = 0;
                foreach ($this->callbacks as $item1) {
                    $res['Callbacks'][$n1++] = null !== $item1 ? $item1->toArray($noStream) : $item1;
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
        if (isset($map['Callbacks'])) {
            if (!empty($map['Callbacks'])) {
                $model->callbacks = [];
                $n1 = 0;
                foreach ($map['Callbacks'] as $item1) {
                    $model->callbacks[$n1++] = callbacks::fromMap($item1);
                }
            }
        }

        if (isset($map['RequestId'])) {
            $model->requestId = $map['RequestId'];
        }

        return $model;
    }
}
