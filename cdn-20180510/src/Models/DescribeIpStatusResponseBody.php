<?php

// This file is auto-generated, don't edit it. Thanks.

namespace AlibabaCloud\SDK\Cdn\V20180510\Models;

use AlibabaCloud\Dara\Model;
use AlibabaCloud\SDK\Cdn\V20180510\Models\DescribeIpStatusResponseBody\ipStatus;

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
        'ipStatus' => 'IpStatus',
        'requestId' => 'RequestId',
    ];

    public function validate()
    {
        if (\is_array($this->ipStatus)) {
            Model::validateArray($this->ipStatus);
        }
        parent::validate();
    }

    public function toArray($noStream = false)
    {
        $res = [];
        if (null !== $this->ipStatus) {
            if (\is_array($this->ipStatus)) {
                $res['IpStatus'] = [];
                $n1 = 0;
                foreach ($this->ipStatus as $item1) {
                    $res['IpStatus'][$n1] = null !== $item1 ? $item1->toArray($noStream) : $item1;
                    ++$n1;
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
        if (isset($map['IpStatus'])) {
            if (!empty($map['IpStatus'])) {
                $model->ipStatus = [];
                $n1 = 0;
                foreach ($map['IpStatus'] as $item1) {
                    $model->ipStatus[$n1] = ipStatus::fromMap($item1);
                    ++$n1;
                }
            }
        }

        if (isset($map['RequestId'])) {
            $model->requestId = $map['RequestId'];
        }

        return $model;
    }
}
