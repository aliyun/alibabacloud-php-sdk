<?php

// This file is auto-generated, don't edit it. Thanks.

namespace AlibabaCloud\SDK\MPServerless\V20190615\Models;

use AlibabaCloud\SDK\MPServerless\V20190615\Models\ListFileResponseBody\dataList;
use AlibabaCloud\SDK\MPServerless\V20190615\Models\ListFileResponseBody\paginator;
use AlibabaCloud\Tea\Model;

class ListFileResponseBody extends Model
{
    /**
     * @var string
     */
    public $requestId;

    /**
     * @var paginator
     */
    public $paginator;

    /**
     * @var dataList[]
     */
    public $dataList;
    protected $_name = [
        'requestId' => 'RequestId',
        'paginator' => 'Paginator',
        'dataList'  => 'DataList',
    ];

    public function validate()
    {
    }

    public function toMap()
    {
        $res = [];
        if (null !== $this->requestId) {
            $res['RequestId'] = $this->requestId;
        }
        if (null !== $this->paginator) {
            $res['Paginator'] = null !== $this->paginator ? $this->paginator->toMap() : null;
        }
        if (null !== $this->dataList) {
            $res['DataList'] = [];
            if (null !== $this->dataList && \is_array($this->dataList)) {
                $n = 0;
                foreach ($this->dataList as $item) {
                    $res['DataList'][$n++] = null !== $item ? $item->toMap() : $item;
                }
            }
        }

        return $res;
    }

    /**
     * @param array $map
     *
     * @return ListFileResponseBody
     */
    public static function fromMap($map = [])
    {
        $model = new self();
        if (isset($map['RequestId'])) {
            $model->requestId = $map['RequestId'];
        }
        if (isset($map['Paginator'])) {
            $model->paginator = paginator::fromMap($map['Paginator']);
        }
        if (isset($map['DataList'])) {
            if (!empty($map['DataList'])) {
                $model->dataList = [];
                $n               = 0;
                foreach ($map['DataList'] as $item) {
                    $model->dataList[$n++] = null !== $item ? dataList::fromMap($item) : $item;
                }
            }
        }

        return $model;
    }
}
