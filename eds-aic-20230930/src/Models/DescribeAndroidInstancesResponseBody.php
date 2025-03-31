<?php

// This file is auto-generated, don't edit it. Thanks.

namespace AlibabaCloud\SDK\Edsaic\V20230930\Models;

use AlibabaCloud\Dara\Model;
use AlibabaCloud\SDK\Edsaic\V20230930\Models\DescribeAndroidInstancesResponseBody\instanceModel;

class DescribeAndroidInstancesResponseBody extends Model
{
    /**
     * @var instanceModel[]
     */
    public $instanceModel;

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
        'instanceModel' => 'InstanceModel',
        'nextToken' => 'NextToken',
        'requestId' => 'RequestId',
        'totalCount' => 'TotalCount',
    ];

    public function validate()
    {
        if (\is_array($this->instanceModel)) {
            Model::validateArray($this->instanceModel);
        }
        parent::validate();
    }

    public function toArray($noStream = false)
    {
        $res = [];
        if (null !== $this->instanceModel) {
            if (\is_array($this->instanceModel)) {
                $res['InstanceModel'] = [];
                $n1 = 0;
                foreach ($this->instanceModel as $item1) {
                    $res['InstanceModel'][$n1++] = null !== $item1 ? $item1->toArray($noStream) : $item1;
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
        if (isset($map['InstanceModel'])) {
            if (!empty($map['InstanceModel'])) {
                $model->instanceModel = [];
                $n1 = 0;
                foreach ($map['InstanceModel'] as $item1) {
                    $model->instanceModel[$n1++] = instanceModel::fromMap($item1);
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
