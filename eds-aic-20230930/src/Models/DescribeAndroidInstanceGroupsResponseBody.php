<?php

// This file is auto-generated, don't edit it. Thanks.

namespace AlibabaCloud\SDK\Edsaic\V20230930\Models;

use AlibabaCloud\SDK\Edsaic\V20230930\Models\DescribeAndroidInstanceGroupsResponseBody\instanceGroupModel;
use AlibabaCloud\Tea\Model;

class DescribeAndroidInstanceGroupsResponseBody extends Model
{
    /**
     * @var instanceGroupModel[]
     */
    public $instanceGroupModel;

    /**
     * @example AAAAAV3MpHK1AP0pfERHZN5pu6l5V9uONHqPtDLM2U8s****
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
        'instanceGroupModel' => 'InstanceGroupModel',
        'nextToken'          => 'NextToken',
        'requestId'          => 'RequestId',
        'totalCount'         => 'TotalCount',
    ];

    public function validate()
    {
    }

    public function toMap()
    {
        $res = [];
        if (null !== $this->instanceGroupModel) {
            $res['InstanceGroupModel'] = [];
            if (null !== $this->instanceGroupModel && \is_array($this->instanceGroupModel)) {
                $n = 0;
                foreach ($this->instanceGroupModel as $item) {
                    $res['InstanceGroupModel'][$n++] = null !== $item ? $item->toMap() : $item;
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
     * @return DescribeAndroidInstanceGroupsResponseBody
     */
    public static function fromMap($map = [])
    {
        $model = new self();
        if (isset($map['InstanceGroupModel'])) {
            if (!empty($map['InstanceGroupModel'])) {
                $model->instanceGroupModel = [];
                $n                         = 0;
                foreach ($map['InstanceGroupModel'] as $item) {
                    $model->instanceGroupModel[$n++] = null !== $item ? instanceGroupModel::fromMap($item) : $item;
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
