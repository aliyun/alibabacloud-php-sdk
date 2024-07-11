<?php

// This file is auto-generated, don't edit it. Thanks.

namespace AlibabaCloud\SDK\Ddoscoo\V20200101\Models;

use AlibabaCloud\SDK\Ddoscoo\V20200101\Models\DescribePortCcAttackTopIPResponseBody\topIp;
use AlibabaCloud\Tea\Model;

class DescribePortCcAttackTopIPResponseBody extends Model
{
    /**
     * @description The request ID, which is used to locate and troubleshoot issues.
     *
     * @example 24F36D81-5E2D-52E5-9DB6-A3ED23CF271A
     *
     * @var string
     */
    public $requestId;

    /**
     * @description The information about the source IP address of the attack.
     *
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
     * @return DescribePortCcAttackTopIPResponseBody
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
