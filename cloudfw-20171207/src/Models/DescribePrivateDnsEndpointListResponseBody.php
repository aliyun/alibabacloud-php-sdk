<?php

// This file is auto-generated, don't edit it. Thanks.

namespace AlibabaCloud\SDK\Cloudfw\V20171207\Models;

use AlibabaCloud\SDK\Cloudfw\V20171207\Models\DescribePrivateDnsEndpointListResponseBody\accessInstanceList;
use AlibabaCloud\Tea\Model;

class DescribePrivateDnsEndpointListResponseBody extends Model
{
    /**
     * @var accessInstanceList[]
     */
    public $accessInstanceList;

    /**
     * @example 1
     *
     * @var int
     */
    public $pageNo;

    /**
     * @example 10
     *
     * @var int
     */
    public $pageSize;

    /**
     * @example 850A84D6-0DE4-4797-A1E8-00090****
     *
     * @var string
     */
    public $requestId;

    /**
     * @example 3
     *
     * @var int
     */
    public $totalCount;
    protected $_name = [
        'accessInstanceList' => 'AccessInstanceList',
        'pageNo' => 'PageNo',
        'pageSize' => 'PageSize',
        'requestId' => 'RequestId',
        'totalCount' => 'TotalCount',
    ];

    public function validate() {}

    public function toMap()
    {
        $res = [];
        if (null !== $this->accessInstanceList) {
            $res['AccessInstanceList'] = [];
            if (null !== $this->accessInstanceList && \is_array($this->accessInstanceList)) {
                $n = 0;
                foreach ($this->accessInstanceList as $item) {
                    $res['AccessInstanceList'][$n++] = null !== $item ? $item->toMap() : $item;
                }
            }
        }
        if (null !== $this->pageNo) {
            $res['PageNo'] = $this->pageNo;
        }
        if (null !== $this->pageSize) {
            $res['PageSize'] = $this->pageSize;
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
     * @return DescribePrivateDnsEndpointListResponseBody
     */
    public static function fromMap($map = [])
    {
        $model = new self();
        if (isset($map['AccessInstanceList'])) {
            if (!empty($map['AccessInstanceList'])) {
                $model->accessInstanceList = [];
                $n = 0;
                foreach ($map['AccessInstanceList'] as $item) {
                    $model->accessInstanceList[$n++] = null !== $item ? accessInstanceList::fromMap($item) : $item;
                }
            }
        }
        if (isset($map['PageNo'])) {
            $model->pageNo = $map['PageNo'];
        }
        if (isset($map['PageSize'])) {
            $model->pageSize = $map['PageSize'];
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
