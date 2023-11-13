<?php

// This file is auto-generated, don't edit it. Thanks.

namespace AlibabaCloud\SDK\Ddoscoo\V20200101\Models;

use AlibabaCloud\SDK\Ddoscoo\V20200101\Models\DescribePortViewSourceIspsResponseBody\isps;
use AlibabaCloud\Tea\Model;

class DescribePortViewSourceIspsResponseBody extends Model
{
    /**
     * @description An array that consists of the details of the ISP.
     *
     * @var isps[]
     */
    public $isps;

    /**
     * @description The ID of the request.
     *
     * @example C33EB3D5-AF96-43CA-9C7E-37A81BC06A1E
     *
     * @var string
     */
    public $requestId;
    protected $_name = [
        'isps'      => 'Isps',
        'requestId' => 'RequestId',
    ];

    public function validate()
    {
    }

    public function toMap()
    {
        $res = [];
        if (null !== $this->isps) {
            $res['Isps'] = [];
            if (null !== $this->isps && \is_array($this->isps)) {
                $n = 0;
                foreach ($this->isps as $item) {
                    $res['Isps'][$n++] = null !== $item ? $item->toMap() : $item;
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
     * @return DescribePortViewSourceIspsResponseBody
     */
    public static function fromMap($map = [])
    {
        $model = new self();
        if (isset($map['Isps'])) {
            if (!empty($map['Isps'])) {
                $model->isps = [];
                $n           = 0;
                foreach ($map['Isps'] as $item) {
                    $model->isps[$n++] = null !== $item ? isps::fromMap($item) : $item;
                }
            }
        }
        if (isset($map['RequestId'])) {
            $model->requestId = $map['RequestId'];
        }

        return $model;
    }
}
