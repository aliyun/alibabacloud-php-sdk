<?php

// This file is auto-generated, don't edit it. Thanks.

namespace AlibabaCloud\SDK\Ecd\V20200930\Models;

use AlibabaCloud\Dara\Model;

class ModifyDesktopSpecResponseBody extends Model
{
    /**
     * @var string
     */
    public $orderId;
    /**
     * @var int[]
     */
    public $orderIds;
    /**
     * @var string
     */
    public $requestId;
    protected $_name = [
        'orderId'   => 'OrderId',
        'orderIds'  => 'OrderIds',
        'requestId' => 'RequestId',
    ];

    public function validate()
    {
        if (\is_array($this->orderIds)) {
            Model::validateArray($this->orderIds);
        }
        parent::validate();
    }

    public function toArray($noStream = false)
    {
        $res = [];
        if (null !== $this->orderId) {
            $res['OrderId'] = $this->orderId;
        }

        if (null !== $this->orderIds) {
            if (\is_array($this->orderIds)) {
                $res['OrderIds'] = [];
                $n1              = 0;
                foreach ($this->orderIds as $item1) {
                    $res['OrderIds'][$n1++] = $item1;
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
            $model->orderId = $map['OrderId'];
        }

        if (isset($map['OrderIds'])) {
            if (!empty($map['OrderIds'])) {
                $model->orderIds = [];
                $n1              = 0;
                foreach ($map['OrderIds'] as $item1) {
                    $model->orderIds[$n1++] = $item1;
                }
            }
        }

        if (isset($map['RequestId'])) {
            $model->requestId = $map['RequestId'];
        }

        return $model;
    }
}
