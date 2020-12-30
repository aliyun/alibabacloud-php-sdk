<?php

// This file is auto-generated, don't edit it. Thanks.

namespace AlibabaCloud\SDK\Ddoscoo\V20171228\Models;

use AlibabaCloud\SDK\Ddoscoo\V20171228\Models\DescribeInstanceSpecsResponseBody\instanceSpecs;
use AlibabaCloud\Tea\Model;

class DescribeInstanceSpecsResponseBody extends Model
{
    /**
     * @var string
     */
    public $requestId;

    /**
     * @var instanceSpecs[]
     */
    public $instanceSpecs;
    protected $_name = [
        'requestId'     => 'RequestId',
        'instanceSpecs' => 'InstanceSpecs',
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
        if (null !== $this->instanceSpecs) {
            $res['InstanceSpecs'] = [];
            if (null !== $this->instanceSpecs && \is_array($this->instanceSpecs)) {
                $n = 0;
                foreach ($this->instanceSpecs as $item) {
                    $res['InstanceSpecs'][$n++] = null !== $item ? $item->toMap() : $item;
                }
            }
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
        if (isset($map['RequestId'])) {
            $model->requestId = $map['RequestId'];
        }
        if (isset($map['InstanceSpecs'])) {
            if (!empty($map['InstanceSpecs'])) {
                $model->instanceSpecs = [];
                $n                    = 0;
                foreach ($map['InstanceSpecs'] as $item) {
                    $model->instanceSpecs[$n++] = null !== $item ? instanceSpecs::fromMap($item) : $item;
                }
            }
        }

        return $model;
    }
}
