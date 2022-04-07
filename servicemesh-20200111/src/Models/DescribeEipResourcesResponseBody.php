<?php

// This file is auto-generated, don't edit it. Thanks.

namespace AlibabaCloud\SDK\Servicemesh\V20200111\Models;

use AlibabaCloud\SDK\Servicemesh\V20200111\Models\DescribeEipResourcesResponseBody\eipList;
use AlibabaCloud\SDK\Servicemesh\V20200111\Models\DescribeEipResourcesResponseBody\pageResult;
use AlibabaCloud\Tea\Model;

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
        'eipList'    => 'EipList',
        'pageResult' => 'PageResult',
        'requestId'  => 'RequestId',
    ];

    public function validate()
    {
    }

    public function toMap()
    {
        $res = [];
        if (null !== $this->eipList) {
            $res['EipList'] = [];
            if (null !== $this->eipList && \is_array($this->eipList)) {
                $n = 0;
                foreach ($this->eipList as $item) {
                    $res['EipList'][$n++] = null !== $item ? $item->toMap() : $item;
                }
            }
        }
        if (null !== $this->pageResult) {
            $res['PageResult'] = null !== $this->pageResult ? $this->pageResult->toMap() : null;
        }
        if (null !== $this->requestId) {
            $res['RequestId'] = $this->requestId;
        }

        return $res;
    }

    /**
     * @param array $map
     *
     * @return DescribeEipResourcesResponseBody
     */
    public static function fromMap($map = [])
    {
        $model = new self();
        if (isset($map['EipList'])) {
            if (!empty($map['EipList'])) {
                $model->eipList = [];
                $n              = 0;
                foreach ($map['EipList'] as $item) {
                    $model->eipList[$n++] = null !== $item ? eipList::fromMap($item) : $item;
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
