<?php

// This file is auto-generated, don't edit it. Thanks.

namespace AlibabaCloud\SDK\ICE\V20201109\Models;

use AlibabaCloud\SDK\ICE\V20201109\Models\DescribePlayQosListResponseBody\qosInfoList;
use AlibabaCloud\Tea\Model;

class DescribePlayQosListResponseBody extends Model
{
    /**
     * @var int
     */
    public $pageNo;

    /**
     * @var int
     */
    public $pageSize;

    /**
     * @var qosInfoList[]
     */
    public $qosInfoList;

    /**
     * @description Id
     *
     * @var string
     */
    public $requestId;

    /**
     * @var int
     */
    public $totalCount;
    protected $_name = [
        'pageNo'      => 'PageNo',
        'pageSize'    => 'PageSize',
        'qosInfoList' => 'QosInfoList',
        'requestId'   => 'RequestId',
        'totalCount'  => 'TotalCount',
    ];

    public function validate()
    {
    }

    public function toMap()
    {
        $res = [];
        if (null !== $this->pageNo) {
            $res['PageNo'] = $this->pageNo;
        }
        if (null !== $this->pageSize) {
            $res['PageSize'] = $this->pageSize;
        }
        if (null !== $this->qosInfoList) {
            $res['QosInfoList'] = [];
            if (null !== $this->qosInfoList && \is_array($this->qosInfoList)) {
                $n = 0;
                foreach ($this->qosInfoList as $item) {
                    $res['QosInfoList'][$n++] = null !== $item ? $item->toMap() : $item;
                }
            }
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
     * @return DescribePlayQosListResponseBody
     */
    public static function fromMap($map = [])
    {
        $model = new self();
        if (isset($map['PageNo'])) {
            $model->pageNo = $map['PageNo'];
        }
        if (isset($map['PageSize'])) {
            $model->pageSize = $map['PageSize'];
        }
        if (isset($map['QosInfoList'])) {
            if (!empty($map['QosInfoList'])) {
                $model->qosInfoList = [];
                $n                  = 0;
                foreach ($map['QosInfoList'] as $item) {
                    $model->qosInfoList[$n++] = null !== $item ? qosInfoList::fromMap($item) : $item;
                }
            }
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
