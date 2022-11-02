<?php

// This file is auto-generated, don't edit it. Thanks.

namespace AlibabaCloud\SDK\Wafopenapi\V20211001\Models;

use AlibabaCloud\SDK\Wafopenapi\V20211001\Models\DescribeVisitTopIpResponseBody\topIp;
use AlibabaCloud\Tea\Model;

class DescribeVisitTopIpResponseBody extends Model
{
    /**
     * @var string
     */
    public $requestId;

    /**
     * @var topIp[]
     */
    public $topIp;
    protected $_name = [
        'requestId' => 'RequestId',
        'topIp'     => 'TopIp',
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
        if (null !== $this->topIp) {
            $res['TopIp'] = [];
            if (null !== $this->topIp && \is_array($this->topIp)) {
                $n = 0;
                foreach ($this->topIp as $item) {
                    $res['TopIp'][$n++] = null !== $item ? $item->toMap() : $item;
                }
            }
        }

        return $res;
    }

    /**
     * @param array $map
     *
     * @return DescribeVisitTopIpResponseBody
     */
    public static function fromMap($map = [])
    {
        $model = new self();
        if (isset($map['RequestId'])) {
            $model->requestId = $map['RequestId'];
        }
        if (isset($map['TopIp'])) {
            if (!empty($map['TopIp'])) {
                $model->topIp = [];
                $n            = 0;
                foreach ($map['TopIp'] as $item) {
                    $model->topIp[$n++] = null !== $item ? topIp::fromMap($item) : $item;
                }
            }
        }

        return $model;
    }
}
