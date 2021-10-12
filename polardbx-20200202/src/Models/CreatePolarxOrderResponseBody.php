<?php

// This file is auto-generated, don't edit it. Thanks.

namespace AlibabaCloud\SDK\Polardbx\V20200202\Models;

use AlibabaCloud\SDK\Polardbx\V20200202\Models\CreatePolarxOrderResponseBody\orderResultList;
use AlibabaCloud\Tea\Model;

class CreatePolarxOrderResponseBody extends Model
{
    /**
     * @var string
     */
    public $requestId;

    /**
     * @var orderResultList[]
     */
    public $orderResultList;
    protected $_name = [
        'requestId'       => 'RequestId',
        'orderResultList' => 'OrderResultList',
    ];

    public function validate()
    {
    }

    public function toMap()
    {
        $res = [];
        if (null !== $this->requestId) {
            $res['RequestId'] = $this->requestId;
        }
        if (null !== $this->orderResultList) {
            $res['OrderResultList'] = [];
            if (null !== $this->orderResultList && \is_array($this->orderResultList)) {
                $n = 0;
                foreach ($this->orderResultList as $item) {
                    $res['OrderResultList'][$n++] = null !== $item ? $item->toMap() : $item;
                }
            }
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
        if (isset($map['RequestId'])) {
            $model->requestId = $map['RequestId'];
        }
        if (isset($map['OrderResultList'])) {
            if (!empty($map['OrderResultList'])) {
                $model->orderResultList = [];
                $n                      = 0;
                foreach ($map['OrderResultList'] as $item) {
                    $model->orderResultList[$n++] = null !== $item ? orderResultList::fromMap($item) : $item;
                }
            }
        }

        return $model;
    }
}
