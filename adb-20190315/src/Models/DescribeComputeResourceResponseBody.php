<?php

// This file is auto-generated, don't edit it. Thanks.

namespace AlibabaCloud\SDK\Adb\V20190315\Models;

use AlibabaCloud\Dara\Model;
use AlibabaCloud\SDK\Adb\V20190315\Models\DescribeComputeResourceResponseBody\computeResource;

class DescribeComputeResourceResponseBody extends Model
{
    /**
     * @var computeResource[]
     */
    public $computeResource;

    /**
     * @var string
     */
    public $requestId;
    protected $_name = [
        'computeResource' => 'ComputeResource',
        'requestId' => 'RequestId',
    ];

    public function validate()
    {
        if (\is_array($this->computeResource)) {
            Model::validateArray($this->computeResource);
        }
        parent::validate();
    }

    public function toArray($noStream = false)
    {
        $res = [];
        if (null !== $this->computeResource) {
            if (\is_array($this->computeResource)) {
                $res['ComputeResource'] = [];
                $n1 = 0;
                foreach ($this->computeResource as $item1) {
                    $res['ComputeResource'][$n1] = null !== $item1 ? $item1->toArray($noStream) : $item1;
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
        if (isset($map['ComputeResource'])) {
            if (!empty($map['ComputeResource'])) {
                $model->computeResource = [];
                $n1 = 0;
                foreach ($map['ComputeResource'] as $item1) {
                    $model->computeResource[$n1] = computeResource::fromMap($item1);
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
