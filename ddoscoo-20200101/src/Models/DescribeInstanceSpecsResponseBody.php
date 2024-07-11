<?php

// This file is auto-generated, don't edit it. Thanks.

namespace AlibabaCloud\SDK\Ddoscoo\V20200101\Models;

use AlibabaCloud\SDK\Ddoscoo\V20200101\Models\DescribeInstanceSpecsResponseBody\instanceSpecs;
use AlibabaCloud\Tea\Model;

class DescribeInstanceSpecsResponseBody extends Model
{
    /**
     * @description The details of the specifications of the instance.
     *
     * @var instanceSpecs[]
     */
    public $instanceSpecs;

    /**
     * @description The ID of the request, which is used to locate and troubleshoot issues.
     *
     * @example 4E3A9B5F-5DDB-593D-A1E6-F1F451DB5E0B
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
