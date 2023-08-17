<?php

// This file is auto-generated, don't edit it. Thanks.

namespace AlibabaCloud\SDK\Adb\V20190315\Models;

use AlibabaCloud\SDK\Adb\V20190315\Models\DescribeComputeResourceResponseBody\computeResource;
use AlibabaCloud\Tea\Model;

class DescribeComputeResourceResponseBody extends Model
{
    /**
     * @description Details of computing resource specifications.
     *
     * @var computeResource[]
     */
    public $computeResource;

    /**
     * @description The ID of the request.
     *
     * @example 1AD222E9-E606-4A42-BF6D-8A4442913CEAW
     *
     * @var string
     */
    public $requestId;
    protected $_name = [
        'computeResource' => 'ComputeResource',
        'requestId'       => 'RequestId',
    ];

    public function validate()
    {
    }

    public function toMap()
    {
        $res = [];
        if (null !== $this->computeResource) {
            $res['ComputeResource'] = [];
            if (null !== $this->computeResource && \is_array($this->computeResource)) {
                $n = 0;
                foreach ($this->computeResource as $item) {
                    $res['ComputeResource'][$n++] = null !== $item ? $item->toMap() : $item;
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
     * @return DescribeComputeResourceResponseBody
     */
    public static function fromMap($map = [])
    {
        $model = new self();
        if (isset($map['ComputeResource'])) {
            if (!empty($map['ComputeResource'])) {
                $model->computeResource = [];
                $n                      = 0;
                foreach ($map['ComputeResource'] as $item) {
                    $model->computeResource[$n++] = null !== $item ? computeResource::fromMap($item) : $item;
                }
            }
        }
        if (isset($map['RequestId'])) {
            $model->requestId = $map['RequestId'];
        }

        return $model;
    }
}
