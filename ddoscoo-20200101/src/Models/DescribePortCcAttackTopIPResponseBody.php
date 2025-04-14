<?php

// This file is auto-generated, don't edit it. Thanks.

namespace AlibabaCloud\SDK\Ddoscoo\V20200101\Models;

use AlibabaCloud\Dara\Model;
use AlibabaCloud\SDK\Ddoscoo\V20200101\Models\DescribePortCcAttackTopIPResponseBody\topIp;

class DescribePortCcAttackTopIPResponseBody extends Model
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
        'topIp' => 'TopIp',
    ];

    public function validate()
    {
        if (\is_array($this->topIp)) {
            Model::validateArray($this->topIp);
        }
        parent::validate();
    }

    public function toArray($noStream = false)
    {
        $res = [];
        if (null !== $this->requestId) {
            $res['RequestId'] = $this->requestId;
        }

        if (null !== $this->topIp) {
            if (\is_array($this->topIp)) {
                $res['TopIp'] = [];
                $n1 = 0;
                foreach ($this->topIp as $item1) {
                    $res['TopIp'][$n1++] = null !== $item1 ? $item1->toArray($noStream) : $item1;
                }
            }
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
        if (isset($map['RequestId'])) {
            $model->requestId = $map['RequestId'];
        }

        if (isset($map['TopIp'])) {
            if (!empty($map['TopIp'])) {
                $model->topIp = [];
                $n1 = 0;
                foreach ($map['TopIp'] as $item1) {
                    $model->topIp[$n1++] = topIp::fromMap($item1);
                }
            }
        }

        return $model;
    }
}
