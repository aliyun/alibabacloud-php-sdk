<?php

// This file is auto-generated, don't edit it. Thanks.

namespace AlibabaCloud\SDK\Ecd\V20200930\Models;

use AlibabaCloud\Dara\Model;

class RenewDesktopGroupResponseBody extends Model
{
    /**
     * @var string[]
     */
    public $orderId;

    /**
     * @var string
     */
    public $requestId;
    protected $_name = [
        'orderId' => 'OrderId',
        'requestId' => 'RequestId',
    ];

    public function validate()
    {
        if (\is_array($this->orderId)) {
            Model::validateArray($this->orderId);
        }
        parent::validate();
    }

    public function toArray($noStream = false)
    {
        $res = [];
        if (null !== $this->orderId) {
            if (\is_array($this->orderId)) {
                $res['OrderId'] = [];
                $n1 = 0;
                foreach ($this->orderId as $item1) {
                    $res['OrderId'][$n1++] = $item1;
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
        if (isset($map['OrderId'])) {
            if (!empty($map['OrderId'])) {
                $model->orderId = [];
                $n1 = 0;
                foreach ($map['OrderId'] as $item1) {
                    $model->orderId[$n1++] = $item1;
                }
            }
        }

        if (isset($map['RequestId'])) {
            $model->requestId = $map['RequestId'];
        }

        return $model;
    }
}
