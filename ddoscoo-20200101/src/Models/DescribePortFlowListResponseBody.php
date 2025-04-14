<?php

// This file is auto-generated, don't edit it. Thanks.

namespace AlibabaCloud\SDK\Ddoscoo\V20200101\Models;

use AlibabaCloud\Dara\Model;
use AlibabaCloud\SDK\Ddoscoo\V20200101\Models\DescribePortFlowListResponseBody\portFlowList;

class DescribePortFlowListResponseBody extends Model
{
    /**
     * @var portFlowList[]
     */
    public $portFlowList;

    /**
     * @var string
     */
    public $requestId;
    protected $_name = [
        'portFlowList' => 'PortFlowList',
        'requestId' => 'RequestId',
    ];

    public function validate()
    {
        if (\is_array($this->portFlowList)) {
            Model::validateArray($this->portFlowList);
        }
        parent::validate();
    }

    public function toArray($noStream = false)
    {
        $res = [];
        if (null !== $this->portFlowList) {
            if (\is_array($this->portFlowList)) {
                $res['PortFlowList'] = [];
                $n1 = 0;
                foreach ($this->portFlowList as $item1) {
                    $res['PortFlowList'][$n1++] = null !== $item1 ? $item1->toArray($noStream) : $item1;
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
        if (isset($map['PortFlowList'])) {
            if (!empty($map['PortFlowList'])) {
                $model->portFlowList = [];
                $n1 = 0;
                foreach ($map['PortFlowList'] as $item1) {
                    $model->portFlowList[$n1++] = portFlowList::fromMap($item1);
                }
            }
        }

        if (isset($map['RequestId'])) {
            $model->requestId = $map['RequestId'];
        }

        return $model;
    }
}
