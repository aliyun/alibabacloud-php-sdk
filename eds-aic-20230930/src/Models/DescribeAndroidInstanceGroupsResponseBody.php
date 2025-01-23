<?php

// This file is auto-generated, don't edit it. Thanks.

namespace AlibabaCloud\SDK\Edsaic\V20230930\Models;

use AlibabaCloud\Dara\Model;
use AlibabaCloud\SDK\Edsaic\V20230930\Models\DescribeAndroidInstanceGroupsResponseBody\instanceGroupModel;

class DescribeAndroidInstanceGroupsResponseBody extends Model
{
    /**
     * @var instanceGroupModel[]
     */
    public $instanceGroupModel;
    /**
     * @var string
     */
    public $nextToken;
    /**
     * @var string
     */
    public $requestId;
    /**
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
        if (\is_array($this->instanceGroupModel)) {
            Model::validateArray($this->instanceGroupModel);
        }
        parent::validate();
    }

    public function toArray($noStream = false)
    {
        $res = [];
        if (null !== $this->instanceGroupModel) {
            if (\is_array($this->instanceGroupModel)) {
                $res['InstanceGroupModel'] = [];
                $n1                        = 0;
                foreach ($this->instanceGroupModel as $item1) {
                    $res['InstanceGroupModel'][$n1++] = null !== $item1 ? $item1->toArray($noStream) : $item1;
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

    public function toMap($noStream = false)
    {
        return $this->toArray($noStream);
    }

    public static function fromMap($map = [])
    {
        $model = new self();
        if (isset($map['InstanceGroupModel'])) {
            if (!empty($map['InstanceGroupModel'])) {
                $model->instanceGroupModel = [];
                $n1                        = 0;
                foreach ($map['InstanceGroupModel'] as $item1) {
                    $model->instanceGroupModel[$n1++] = instanceGroupModel::fromMap($item1);
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
