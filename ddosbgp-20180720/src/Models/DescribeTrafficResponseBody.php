<?php

// This file is auto-generated, don't edit it. Thanks.

namespace AlibabaCloud\SDK\Ddosbgp\V20180720\Models;

use AlibabaCloud\Dara\Model;
use AlibabaCloud\SDK\Ddosbgp\V20180720\Models\DescribeTrafficResponseBody\flowList;

class DescribeTrafficResponseBody extends Model
{
    /**
     * @var flowList[]
     */
    public $flowList;

    /**
     * @var string
     */
    public $requestId;
    protected $_name = [
        'flowList' => 'FlowList',
        'requestId' => 'RequestId',
    ];

    public function validate()
    {
        if (\is_array($this->flowList)) {
            Model::validateArray($this->flowList);
        }
        parent::validate();
    }

    public function toArray($noStream = false)
    {
        $res = [];
        if (null !== $this->flowList) {
            if (\is_array($this->flowList)) {
                $res['FlowList'] = [];
                $n1 = 0;
                foreach ($this->flowList as $item1) {
                    $res['FlowList'][$n1] = null !== $item1 ? $item1->toArray($noStream) : $item1;
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
        if (isset($map['FlowList'])) {
            if (!empty($map['FlowList'])) {
                $model->flowList = [];
                $n1 = 0;
                foreach ($map['FlowList'] as $item1) {
                    $model->flowList[$n1] = flowList::fromMap($item1);
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
