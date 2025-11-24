<?php

// This file is auto-generated, don't edit it. Thanks.

namespace AlibabaCloud\SDK\Servicemesh\V20200111\Models;

use AlibabaCloud\Dara\Model;
use AlibabaCloud\SDK\Servicemesh\V20200111\Models\DescribeEipResourcesResponseBody\eipList;
use AlibabaCloud\SDK\Servicemesh\V20200111\Models\DescribeEipResourcesResponseBody\pageResult;

class DescribeEipResourcesResponseBody extends Model
{
    /**
     * @var eipList[]
     */
    public $eipList;

    /**
     * @var pageResult
     */
    public $pageResult;

    /**
     * @var string
     */
    public $requestId;
    protected $_name = [
        'eipList' => 'EipList',
        'pageResult' => 'PageResult',
        'requestId' => 'RequestId',
    ];

    public function validate()
    {
        if (\is_array($this->eipList)) {
            Model::validateArray($this->eipList);
        }
        if (null !== $this->pageResult) {
            $this->pageResult->validate();
        }
        parent::validate();
    }

    public function toArray($noStream = false)
    {
        $res = [];
        if (null !== $this->eipList) {
            if (\is_array($this->eipList)) {
                $res['EipList'] = [];
                $n1 = 0;
                foreach ($this->eipList as $item1) {
                    $res['EipList'][$n1] = null !== $item1 ? $item1->toArray($noStream) : $item1;
                    ++$n1;
                }
            }
        }

        if (null !== $this->pageResult) {
            $res['PageResult'] = null !== $this->pageResult ? $this->pageResult->toArray($noStream) : $this->pageResult;
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
        if (isset($map['EipList'])) {
            if (!empty($map['EipList'])) {
                $model->eipList = [];
                $n1 = 0;
                foreach ($map['EipList'] as $item1) {
                    $model->eipList[$n1] = eipList::fromMap($item1);
                    ++$n1;
                }
            }
        }

        if (isset($map['PageResult'])) {
            $model->pageResult = pageResult::fromMap($map['PageResult']);
        }

        if (isset($map['RequestId'])) {
            $model->requestId = $map['RequestId'];
        }

        return $model;
    }
}
