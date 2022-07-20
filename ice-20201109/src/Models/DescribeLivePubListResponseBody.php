<?php

// This file is auto-generated, don't edit it. Thanks.

namespace AlibabaCloud\SDK\ICE\V20201109\Models;

use AlibabaCloud\SDK\ICE\V20201109\Models\DescribeLivePubListResponseBody\pubInfoList;
use AlibabaCloud\Tea\Model;

class DescribeLivePubListResponseBody extends Model
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
     * @var pubInfoList[]
     */
    public $pubInfoList;

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
        'pubInfoList' => 'PubInfoList',
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
        if (null !== $this->pubInfoList) {
            $res['PubInfoList'] = [];
            if (null !== $this->pubInfoList && \is_array($this->pubInfoList)) {
                $n = 0;
                foreach ($this->pubInfoList as $item) {
                    $res['PubInfoList'][$n++] = null !== $item ? $item->toMap() : $item;
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
     * @return DescribeLivePubListResponseBody
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
        if (isset($map['PubInfoList'])) {
            if (!empty($map['PubInfoList'])) {
                $model->pubInfoList = [];
                $n                  = 0;
                foreach ($map['PubInfoList'] as $item) {
                    $model->pubInfoList[$n++] = null !== $item ? pubInfoList::fromMap($item) : $item;
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
