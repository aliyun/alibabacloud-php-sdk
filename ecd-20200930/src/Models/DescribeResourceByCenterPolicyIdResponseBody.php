<?php

// This file is auto-generated, don't edit it. Thanks.

namespace AlibabaCloud\SDK\Ecd\V20200930\Models;

use AlibabaCloud\Dara\Model;
use AlibabaCloud\SDK\Ecd\V20200930\Models\DescribeResourceByCenterPolicyIdResponseBody\resourceModelList;

class DescribeResourceByCenterPolicyIdResponseBody extends Model
{
    /**
     * @var string
     */
    public $count;

    /**
     * @var string
     */
    public $nextToken;

    /**
     * @var string
     */
    public $requestId;

    /**
     * @var resourceModelList[]
     */
    public $resourceModelList;
    protected $_name = [
        'count' => 'Count',
        'nextToken' => 'NextToken',
        'requestId' => 'RequestId',
        'resourceModelList' => 'ResourceModelList',
    ];

    public function validate()
    {
        if (\is_array($this->resourceModelList)) {
            Model::validateArray($this->resourceModelList);
        }
        parent::validate();
    }

    public function toArray($noStream = false)
    {
        $res = [];
        if (null !== $this->count) {
            $res['Count'] = $this->count;
        }

        if (null !== $this->nextToken) {
            $res['NextToken'] = $this->nextToken;
        }

        if (null !== $this->requestId) {
            $res['RequestId'] = $this->requestId;
        }

        if (null !== $this->resourceModelList) {
            if (\is_array($this->resourceModelList)) {
                $res['ResourceModelList'] = [];
                $n1 = 0;
                foreach ($this->resourceModelList as $item1) {
                    $res['ResourceModelList'][$n1] = null !== $item1 ? $item1->toArray($noStream) : $item1;
                    ++$n1;
                }
            }
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
        if (isset($map['Count'])) {
            $model->count = $map['Count'];
        }

        if (isset($map['NextToken'])) {
            $model->nextToken = $map['NextToken'];
        }

        if (isset($map['RequestId'])) {
            $model->requestId = $map['RequestId'];
        }

        if (isset($map['ResourceModelList'])) {
            if (!empty($map['ResourceModelList'])) {
                $model->resourceModelList = [];
                $n1 = 0;
                foreach ($map['ResourceModelList'] as $item1) {
                    $model->resourceModelList[$n1] = resourceModelList::fromMap($item1);
                    ++$n1;
                }
            }
        }

        return $model;
    }
}
