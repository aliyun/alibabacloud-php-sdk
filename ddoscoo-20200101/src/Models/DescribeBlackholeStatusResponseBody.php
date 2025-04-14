<?php

// This file is auto-generated, don't edit it. Thanks.

namespace AlibabaCloud\SDK\Ddoscoo\V20200101\Models;

use AlibabaCloud\Dara\Model;
use AlibabaCloud\SDK\Ddoscoo\V20200101\Models\DescribeBlackholeStatusResponseBody\blackholeStatus;

class DescribeBlackholeStatusResponseBody extends Model
{
    /**
     * @var blackholeStatus[]
     */
    public $blackholeStatus;

    /**
     * @var string
     */
    public $requestId;
    protected $_name = [
        'blackholeStatus' => 'BlackholeStatus',
        'requestId' => 'RequestId',
    ];

    public function validate()
    {
        if (\is_array($this->blackholeStatus)) {
            Model::validateArray($this->blackholeStatus);
        }
        parent::validate();
    }

    public function toArray($noStream = false)
    {
        $res = [];
        if (null !== $this->blackholeStatus) {
            if (\is_array($this->blackholeStatus)) {
                $res['BlackholeStatus'] = [];
                $n1 = 0;
                foreach ($this->blackholeStatus as $item1) {
                    $res['BlackholeStatus'][$n1++] = null !== $item1 ? $item1->toArray($noStream) : $item1;
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
        if (isset($map['BlackholeStatus'])) {
            if (!empty($map['BlackholeStatus'])) {
                $model->blackholeStatus = [];
                $n1 = 0;
                foreach ($map['BlackholeStatus'] as $item1) {
                    $model->blackholeStatus[$n1++] = blackholeStatus::fromMap($item1);
                }
            }
        }

        if (isset($map['RequestId'])) {
            $model->requestId = $map['RequestId'];
        }

        return $model;
    }
}
