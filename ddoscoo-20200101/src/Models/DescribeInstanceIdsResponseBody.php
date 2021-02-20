<?php

// This file is auto-generated, don't edit it. Thanks.

namespace AlibabaCloud\SDK\Ddoscoo\V20200101\Models;

use AlibabaCloud\SDK\Ddoscoo\V20200101\Models\DescribeInstanceIdsResponseBody\instanceIds;
use AlibabaCloud\Tea\Model;

class DescribeInstanceIdsResponseBody extends Model
{
    /**
     * @var string
     */
    public $requestId;

    /**
     * @var instanceIds[]
     */
    public $instanceIds;
    protected $_name = [
        'requestId'   => 'RequestId',
        'instanceIds' => 'InstanceIds',
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
        if (null !== $this->instanceIds) {
            $res['InstanceIds'] = [];
            if (null !== $this->instanceIds && \is_array($this->instanceIds)) {
                $n = 0;
                foreach ($this->instanceIds as $item) {
                    $res['InstanceIds'][$n++] = null !== $item ? $item->toMap() : $item;
                }
            }
        }

        return $res;
    }

    /**
     * @param array $map
     *
     * @return DescribeInstanceIdsResponseBody
     */
    public static function fromMap($map = [])
    {
        $model = new self();
        if (isset($map['RequestId'])) {
            $model->requestId = $map['RequestId'];
        }
        if (isset($map['InstanceIds'])) {
            if (!empty($map['InstanceIds'])) {
                $model->instanceIds = [];
                $n                  = 0;
                foreach ($map['InstanceIds'] as $item) {
                    $model->instanceIds[$n++] = null !== $item ? instanceIds::fromMap($item) : $item;
                }
            }
        }

        return $model;
    }
}
