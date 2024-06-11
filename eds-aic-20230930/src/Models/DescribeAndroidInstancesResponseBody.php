<?php

// This file is auto-generated, don't edit it. Thanks.

namespace AlibabaCloud\SDK\Edsaic\V20230930\Models;

use AlibabaCloud\SDK\Edsaic\V20230930\Models\DescribeAndroidInstancesResponseBody\instanceModel;
use AlibabaCloud\Tea\Model;

class DescribeAndroidInstancesResponseBody extends Model
{
    /**
     * @var instanceModel[]
     */
    public $instanceModel;

    /**
     * @example AAAAAV3MpHK1AP0pfERHZN5pu6kmma/xxE9WtwL/ADvZ****
     *
     * @var string
     */
    public $nextToken;

    /**
     * @example F07A1DA1-E1EB-5CCA-8EED-12F85D32****
     *
     * @var string
     */
    public $requestId;

    /**
     * @example 10
     *
     * @var int
     */
    public $totalCount;
    protected $_name = [
        'instanceModel' => 'InstanceModel',
        'nextToken'     => 'NextToken',
        'requestId'     => 'RequestId',
        'totalCount'    => 'TotalCount',
    ];

    public function validate()
    {
    }

    public function toMap()
    {
        $res = [];
        if (null !== $this->instanceModel) {
            $res['InstanceModel'] = [];
            if (null !== $this->instanceModel && \is_array($this->instanceModel)) {
                $n = 0;
                foreach ($this->instanceModel as $item) {
                    $res['InstanceModel'][$n++] = null !== $item ? $item->toMap() : $item;
                }
            }
        }
        if (null !== $this->nextToken) {
            $res['NextToken'] = $this->nextToken;
        }
        if (null !== $this->requestId) {
            $res['RequestId'] = $this->requestId;
        }
        if (null !== $this->totalCount) {
            $res['TotalCount'] = $this->totalCount;
        }

        return $res;
    }

    /**
     * @param array $map
     *
     * @return DescribeAndroidInstancesResponseBody
     */
    public static function fromMap($map = [])
    {
        $model = new self();
        if (isset($map['InstanceModel'])) {
            if (!empty($map['InstanceModel'])) {
                $model->instanceModel = [];
                $n                    = 0;
                foreach ($map['InstanceModel'] as $item) {
                    $model->instanceModel[$n++] = null !== $item ? instanceModel::fromMap($item) : $item;
                }
            }
        }
        if (isset($map['NextToken'])) {
            $model->nextToken = $map['NextToken'];
        }
        if (isset($map['RequestId'])) {
            $model->requestId = $map['RequestId'];
        }
        if (isset($map['TotalCount'])) {
            $model->totalCount = $map['TotalCount'];
        }

        return $model;
    }
}
