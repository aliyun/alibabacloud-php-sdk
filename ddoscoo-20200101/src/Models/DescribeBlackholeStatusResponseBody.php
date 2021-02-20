<?php

// This file is auto-generated, don't edit it. Thanks.

namespace AlibabaCloud\SDK\Ddoscoo\V20200101\Models;

use AlibabaCloud\SDK\Ddoscoo\V20200101\Models\DescribeBlackholeStatusResponseBody\blackholeStatus;
use AlibabaCloud\Tea\Model;

class DescribeBlackholeStatusResponseBody extends Model
{
    /**
     * @var string
     */
    public $requestId;

    /**
     * @var blackholeStatus[]
     */
    public $blackholeStatus;
    protected $_name = [
        'requestId'       => 'RequestId',
        'blackholeStatus' => 'BlackholeStatus',
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
        if (null !== $this->blackholeStatus) {
            $res['BlackholeStatus'] = [];
            if (null !== $this->blackholeStatus && \is_array($this->blackholeStatus)) {
                $n = 0;
                foreach ($this->blackholeStatus as $item) {
                    $res['BlackholeStatus'][$n++] = null !== $item ? $item->toMap() : $item;
                }
            }
        }

        return $res;
    }

    /**
     * @param array $map
     *
     * @return DescribeBlackholeStatusResponseBody
     */
    public static function fromMap($map = [])
    {
        $model = new self();
        if (isset($map['RequestId'])) {
            $model->requestId = $map['RequestId'];
        }
        if (isset($map['BlackholeStatus'])) {
            if (!empty($map['BlackholeStatus'])) {
                $model->blackholeStatus = [];
                $n                      = 0;
                foreach ($map['BlackholeStatus'] as $item) {
                    $model->blackholeStatus[$n++] = null !== $item ? blackholeStatus::fromMap($item) : $item;
                }
            }
        }

        return $model;
    }
}
