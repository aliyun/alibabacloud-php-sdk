<?php

// This file is auto-generated, don't edit it. Thanks.

namespace AlibabaCloud\SDK\Rds\V20140815\Models;

use AlibabaCloud\Dara\Model;
use AlibabaCloud\SDK\Rds\V20140815\Models\DescribeRCNodePoolResponseBody\nodePoolList;

class DescribeRCNodePoolResponseBody extends Model
{
    /**
     * @var nodePoolList[]
     */
    public $nodePoolList;
    /**
     * @var string
     */
    public $requestId;
    protected $_name = [
        'nodePoolList' => 'NodePoolList',
        'requestId'    => 'RequestId',
    ];

    public function validate()
    {
        if (\is_array($this->nodePoolList)) {
            Model::validateArray($this->nodePoolList);
        }
        parent::validate();
    }

    public function toArray($noStream = false)
    {
        $res = [];
        if (null !== $this->nodePoolList) {
            if (\is_array($this->nodePoolList)) {
                $res['NodePoolList'] = [];
                $n1                  = 0;
                foreach ($this->nodePoolList as $item1) {
                    $res['NodePoolList'][$n1++] = null !== $item1 ? $item1->toArray($noStream) : $item1;
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
        if (isset($map['NodePoolList'])) {
            if (!empty($map['NodePoolList'])) {
                $model->nodePoolList = [];
                $n1                  = 0;
                foreach ($map['NodePoolList'] as $item1) {
                    $model->nodePoolList[$n1++] = nodePoolList::fromMap($item1);
                }
            }
        }

        if (isset($map['RequestId'])) {
            $model->requestId = $map['RequestId'];
        }

        return $model;
    }
}
