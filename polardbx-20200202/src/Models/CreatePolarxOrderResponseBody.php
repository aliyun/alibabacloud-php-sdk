<?php

// This file is auto-generated, don't edit it. Thanks.

namespace AlibabaCloud\SDK\Polardbx\V20200202\Models;

use AlibabaCloud\SDK\Polardbx\V20200202\Models\CreatePolarxOrderResponseBody\orderResultList;
use AlibabaCloud\Tea\Model;

class CreatePolarxOrderResponseBody extends Model
{
    /**
     * @var orderResultList[]
     */
    public $orderResultList;

    /**
     * @var string
     */
    public $requestId;
    protected $_name = [
        'orderResultList' => 'OrderResultList',
        'requestId'       => 'RequestId',
    ];

    public function validate()
    {
    }

    public function toMap()
    {
        $res = [];
        if (null !== $this->orderResultList) {
            $res['OrderResultList'] = [];
            if (null !== $this->orderResultList && \is_array($this->orderResultList)) {
                $n = 0;
                foreach ($this->orderResultList as $item) {
                    $res['OrderResultList'][$n++] = null !== $item ? $item->toMap() : $item;
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
     * @return CreatePolarxOrderResponseBody
     */
    public static function fromMap($map = [])
    {
        $model = new self();
        if (isset($map['OrderResultList'])) {
            if (!empty($map['OrderResultList'])) {
                $model->orderResultList = [];
                $n                      = 0;
                foreach ($map['OrderResultList'] as $item) {
                    $model->orderResultList[$n++] = null !== $item ? orderResultList::fromMap($item) : $item;
                }
            }
        }
        if (isset($map['RequestId'])) {
            $model->requestId = $map['RequestId'];
        }

        return $model;
    }
}
