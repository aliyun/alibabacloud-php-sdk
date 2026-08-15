<?php

// This file is auto-generated, don't edit it. Thanks.

namespace AlibabaCloud\SDK\Edsaic\V20230930\Models;

use AlibabaCloud\Dara\Model;
use AlibabaCloud\SDK\Edsaic\V20230930\Models\ModifyInstanceGroupSpecResponseBody\orderInfo;

class ModifyInstanceGroupSpecResponseBody extends Model
{
    /**
     * @var orderInfo[]
     */
    public $orderInfo;

    /**
     * @var string
     */
    public $orderTaskId;

    /**
     * @var string
     */
    public $requestId;
    protected $_name = [
        'orderInfo' => 'OrderInfo',
        'orderTaskId' => 'OrderTaskId',
        'requestId' => 'RequestId',
    ];

    public function validate()
    {
        if (\is_array($this->orderInfo)) {
            Model::validateArray($this->orderInfo);
        }
        parent::validate();
    }

    public function toArray($noStream = false)
    {
        $res = [];
        if (null !== $this->orderInfo) {
            if (\is_array($this->orderInfo)) {
                $res['OrderInfo'] = [];
                $n1 = 0;
                foreach ($this->orderInfo as $item1) {
                    $res['OrderInfo'][$n1] = null !== $item1 ? $item1->toArray($noStream) : $item1;
                    ++$n1;
                }
            }
        }

        if (null !== $this->orderTaskId) {
            $res['OrderTaskId'] = $this->orderTaskId;
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
        if (isset($map['OrderInfo'])) {
            if (!empty($map['OrderInfo'])) {
                $model->orderInfo = [];
                $n1 = 0;
                foreach ($map['OrderInfo'] as $item1) {
                    $model->orderInfo[$n1] = orderInfo::fromMap($item1);
                    ++$n1;
                }
            }
        }

        if (isset($map['OrderTaskId'])) {
            $model->orderTaskId = $map['OrderTaskId'];
        }

        if (isset($map['RequestId'])) {
            $model->requestId = $map['RequestId'];
        }

        return $model;
    }
}
