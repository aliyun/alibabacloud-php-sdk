<?php

// This file is auto-generated, don't edit it. Thanks.

namespace AlibabaCloud\SDK\Cdn\V20180510\Models;

use AlibabaCloud\SDK\Cdn\V20180510\Models\DescribeIpStatusResponseBody\ipStatus;
use AlibabaCloud\Tea\Model;

class DescribeIpStatusResponseBody extends Model
{
    /**
     * @var ipStatus[]
     */
    public $ipStatus;

    /**
     * @var string
     */
    public $requestId;
    protected $_name = [
        'ipStatus'  => 'IpStatus',
        'requestId' => 'RequestId',
    ];

    public function validate()
    {
    }

    public function toMap()
    {
        $res = [];
        if (null !== $this->ipStatus) {
            $res['IpStatus'] = [];
            if (null !== $this->ipStatus && \is_array($this->ipStatus)) {
                $n = 0;
                foreach ($this->ipStatus as $item) {
                    $res['IpStatus'][$n++] = null !== $item ? $item->toMap() : $item;
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
     * @return DescribeIpStatusResponseBody
     */
    public static function fromMap($map = [])
    {
        $model = new self();
        if (isset($map['IpStatus'])) {
            if (!empty($map['IpStatus'])) {
                $model->ipStatus = [];
                $n               = 0;
                foreach ($map['IpStatus'] as $item) {
                    $model->ipStatus[$n++] = null !== $item ? ipStatus::fromMap($item) : $item;
                }
            }
        }
        if (isset($map['RequestId'])) {
            $model->requestId = $map['RequestId'];
        }

        return $model;
    }
}
