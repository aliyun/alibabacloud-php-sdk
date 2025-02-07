<?php

// This file is auto-generated, don't edit it. Thanks.

namespace AlibabaCloud\SDK\ESA\V20240910\Models;

use AlibabaCloud\Dara\Model;
use AlibabaCloud\SDK\ESA\V20240910\Models\ListLoadBalancerOriginStatusResponseBody\originStatus;

class ListLoadBalancerOriginStatusResponseBody extends Model
{
    /**
     * @var originStatus[]
     */
    public $originStatus;
    /**
     * @var string
     */
    public $requestId;
    protected $_name = [
        'originStatus' => 'OriginStatus',
        'requestId'    => 'RequestId',
    ];

    public function validate()
    {
        if (\is_array($this->originStatus)) {
            Model::validateArray($this->originStatus);
        }
        parent::validate();
    }

    public function toArray($noStream = false)
    {
        $res = [];
        if (null !== $this->originStatus) {
            if (\is_array($this->originStatus)) {
                $res['OriginStatus'] = [];
                $n1                  = 0;
                foreach ($this->originStatus as $item1) {
                    $res['OriginStatus'][$n1++] = null !== $item1 ? $item1->toArray($noStream) : $item1;
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
        if (isset($map['OriginStatus'])) {
            if (!empty($map['OriginStatus'])) {
                $model->originStatus = [];
                $n1                  = 0;
                foreach ($map['OriginStatus'] as $item1) {
                    $model->originStatus[$n1++] = originStatus::fromMap($item1);
                }
            }
        }

        if (isset($map['RequestId'])) {
            $model->requestId = $map['RequestId'];
        }

        return $model;
    }
}
