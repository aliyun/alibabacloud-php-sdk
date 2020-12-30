<?php

// This file is auto-generated, don't edit it. Thanks.

namespace AlibabaCloud\SDK\Gameshield\V20180305\Models;

use AlibabaCloud\SDK\Gameshield\V20180305\Models\DescribeSourceFailureTopIpResponseBody\topIps;
use AlibabaCloud\Tea\Model;

class DescribeSourceFailureTopIpResponseBody extends Model
{
    /**
     * @var topIps[]
     */
    public $topIps;

    /**
     * @var string
     */
    public $requestId;
    protected $_name = [
        'topIps'    => 'TopIps',
        'requestId' => 'RequestId',
    ];

    public function validate()
    {
    }

    public function toMap()
    {
        $res = [];
        if (null !== $this->topIps) {
            $res['TopIps'] = [];
            if (null !== $this->topIps && \is_array($this->topIps)) {
                $n = 0;
                foreach ($this->topIps as $item) {
                    $res['TopIps'][$n++] = null !== $item ? $item->toMap() : $item;
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
     * @return DescribeSourceFailureTopIpResponseBody
     */
    public static function fromMap($map = [])
    {
        $model = new self();
        if (isset($map['TopIps'])) {
            if (!empty($map['TopIps'])) {
                $model->topIps = [];
                $n             = 0;
                foreach ($map['TopIps'] as $item) {
                    $model->topIps[$n++] = null !== $item ? topIps::fromMap($item) : $item;
                }
            }
        }
        if (isset($map['RequestId'])) {
            $model->requestId = $map['RequestId'];
        }

        return $model;
    }
}
