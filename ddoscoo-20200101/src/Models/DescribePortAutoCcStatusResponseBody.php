<?php

// This file is auto-generated, don't edit it. Thanks.

namespace AlibabaCloud\SDK\Ddoscoo\V20200101\Models;

use AlibabaCloud\SDK\Ddoscoo\V20200101\Models\DescribePortAutoCcStatusResponseBody\portAutoCcStatus;
use AlibabaCloud\Tea\Model;

class DescribePortAutoCcStatusResponseBody extends Model
{
    /**
     * @var string
     */
    public $requestId;

    /**
     * @var portAutoCcStatus[]
     */
    public $portAutoCcStatus;
    protected $_name = [
        'requestId'        => 'RequestId',
        'portAutoCcStatus' => 'PortAutoCcStatus',
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
        if (null !== $this->portAutoCcStatus) {
            $res['PortAutoCcStatus'] = [];
            if (null !== $this->portAutoCcStatus && \is_array($this->portAutoCcStatus)) {
                $n = 0;
                foreach ($this->portAutoCcStatus as $item) {
                    $res['PortAutoCcStatus'][$n++] = null !== $item ? $item->toMap() : $item;
                }
            }
        }

        return $res;
    }

    /**
     * @param array $map
     *
     * @return DescribePortAutoCcStatusResponseBody
     */
    public static function fromMap($map = [])
    {
        $model = new self();
        if (isset($map['RequestId'])) {
            $model->requestId = $map['RequestId'];
        }
        if (isset($map['PortAutoCcStatus'])) {
            if (!empty($map['PortAutoCcStatus'])) {
                $model->portAutoCcStatus = [];
                $n                       = 0;
                foreach ($map['PortAutoCcStatus'] as $item) {
                    $model->portAutoCcStatus[$n++] = null !== $item ? portAutoCcStatus::fromMap($item) : $item;
                }
            }
        }

        return $model;
    }
}
