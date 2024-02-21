<?php

// This file is auto-generated, don't edit it. Thanks.

namespace AlibabaCloud\SDK\Ddosbgp\V20180720\Models;

use AlibabaCloud\SDK\Ddosbgp\V20180720\Models\DescribeInstanceSpecsResponseBody\instanceSpecs;
use AlibabaCloud\Tea\Model;

class DescribeInstanceSpecsResponseBody extends Model
{
    /**
     * @description The specifications of the Anti-DDoS Origin Enterprise instance, including whether the unlimited protection feature is enabled, and the numbers of times that the unlimited protection feature can be enabled and has been enabled.
     *
     * @var instanceSpecs[]
     */
    public $instanceSpecs;

    /**
     * @description The ID of the request.
     *
     * @example 5840AB9F-1419-4620-807D-5EA476090247
     *
     * @var string
     */
    public $requestId;
    protected $_name = [
        'instanceSpecs' => 'InstanceSpecs',
        'requestId'     => 'RequestId',
    ];

    public function validate()
    {
    }

    public function toMap()
    {
        $res = [];
        if (null !== $this->instanceSpecs) {
            $res['InstanceSpecs'] = [];
            if (null !== $this->instanceSpecs && \is_array($this->instanceSpecs)) {
                $n = 0;
                foreach ($this->instanceSpecs as $item) {
                    $res['InstanceSpecs'][$n++] = null !== $item ? $item->toMap() : $item;
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
     * @return DescribeInstanceSpecsResponseBody
     */
    public static function fromMap($map = [])
    {
        $model = new self();
        if (isset($map['InstanceSpecs'])) {
            if (!empty($map['InstanceSpecs'])) {
                $model->instanceSpecs = [];
                $n                    = 0;
                foreach ($map['InstanceSpecs'] as $item) {
                    $model->instanceSpecs[$n++] = null !== $item ? instanceSpecs::fromMap($item) : $item;
                }
            }
        }
        if (isset($map['RequestId'])) {
            $model->requestId = $map['RequestId'];
        }

        return $model;
    }
}
