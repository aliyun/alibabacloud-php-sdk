<?php

// This file is auto-generated, don't edit it. Thanks.

namespace AlibabaCloud\SDK\Servicemesh\V20200111\Models;

use AlibabaCloud\SDK\Servicemesh\V20200111\Models\DescribeVMsInServiceMeshResponseBody\VMs;
use AlibabaCloud\Tea\Model;

class DescribeVMsInServiceMeshResponseBody extends Model
{
    /**
     * @description The request ID.
     *
     * @example 4b2c0fe0-6705-4614-8521-6b9d289163c8
     *
     * @var string
     */
    public $requestId;

    /**
     * @description The VMs that are added to the ASM instance.
     *
     * @var VMs[]
     */
    public $VMs;
    protected $_name = [
        'requestId' => 'RequestId',
        'VMs'       => 'VMs',
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
        if (null !== $this->VMs) {
            $res['VMs'] = [];
            if (null !== $this->VMs && \is_array($this->VMs)) {
                $n = 0;
                foreach ($this->VMs as $item) {
                    $res['VMs'][$n++] = null !== $item ? $item->toMap() : $item;
                }
            }
        }

        return $res;
    }

    /**
     * @param array $map
     *
     * @return DescribeVMsInServiceMeshResponseBody
     */
    public static function fromMap($map = [])
    {
        $model = new self();
        if (isset($map['RequestId'])) {
            $model->requestId = $map['RequestId'];
        }
        if (isset($map['VMs'])) {
            if (!empty($map['VMs'])) {
                $model->VMs = [];
                $n          = 0;
                foreach ($map['VMs'] as $item) {
                    $model->VMs[$n++] = null !== $item ? VMs::fromMap($item) : $item;
                }
            }
        }

        return $model;
    }
}
