<?php

// This file is auto-generated, don't edit it. Thanks.

namespace AlibabaCloud\SDK\Polardb\V20170801\Models;

use AlibabaCloud\SDK\Polardb\V20170801\Models\DescribeDBClusterSSLResponseBody\items;
use AlibabaCloud\Tea\Model;

class DescribeDBClusterSSLResponseBody extends Model
{
    /**
     * @var items[]
     */
    public $items;

    /**
     * @var string
     */
    public $requestId;

    /**
     * @var string
     */
    public $SSLAutoRotate;
    protected $_name = [
        'items'         => 'Items',
        'requestId'     => 'RequestId',
        'SSLAutoRotate' => 'SSLAutoRotate',
    ];

    public function validate()
    {
    }

    public function toMap()
    {
        $res = [];
        if (null !== $this->items) {
            $res['Items'] = [];
            if (null !== $this->items && \is_array($this->items)) {
                $n = 0;
                foreach ($this->items as $item) {
                    $res['Items'][$n++] = null !== $item ? $item->toMap() : $item;
                }
            }
        }
        if (null !== $this->requestId) {
            $res['RequestId'] = $this->requestId;
        }
        if (null !== $this->SSLAutoRotate) {
            $res['SSLAutoRotate'] = $this->SSLAutoRotate;
        }

        return $res;
    }

    /**
     * @param array $map
     *
     * @return DescribeDBClusterSSLResponseBody
     */
    public static function fromMap($map = [])
    {
        $model = new self();
        if (isset($map['Items'])) {
            if (!empty($map['Items'])) {
                $model->items = [];
                $n            = 0;
                foreach ($map['Items'] as $item) {
                    $model->items[$n++] = null !== $item ? items::fromMap($item) : $item;
                }
            }
        }
        if (isset($map['RequestId'])) {
            $model->requestId = $map['RequestId'];
        }
        if (isset($map['SSLAutoRotate'])) {
            $model->SSLAutoRotate = $map['SSLAutoRotate'];
        }

        return $model;
    }
}
