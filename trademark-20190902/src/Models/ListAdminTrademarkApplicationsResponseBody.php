<?php

// This file is auto-generated, don't edit it. Thanks.

namespace AlibabaCloud\SDK\Trademark\V20190902\Models;

use AlibabaCloud\SDK\Trademark\V20190902\Models\ListAdminTrademarkApplicationsResponseBody\trademarkApplications;
use AlibabaCloud\Tea\Model;

class ListAdminTrademarkApplicationsResponseBody extends Model
{
    /**
     * @var int
     */
    public $pageNumber;

    /**
     * @var int
     */
    public $pageSize;

    /**
     * @var string
     */
    public $requestId;

    /**
     * @var int
     */
    public $totalCount;

    /**
     * @var trademarkApplications[]
     */
    public $trademarkApplications;
    protected $_name = [
        'pageNumber'            => 'PageNumber',
        'pageSize'              => 'PageSize',
        'requestId'             => 'RequestId',
        'totalCount'            => 'TotalCount',
        'trademarkApplications' => 'TrademarkApplications',
    ];

    public function validate()
    {
    }

    public function toMap()
    {
        $res = [];
        if (null !== $this->pageNumber) {
            $res['PageNumber'] = $this->pageNumber;
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
        if (null !== $this->trademarkApplications) {
            $res['TrademarkApplications'] = [];
            if (null !== $this->trademarkApplications && \is_array($this->trademarkApplications)) {
                $n = 0;
                foreach ($this->trademarkApplications as $item) {
                    $res['TrademarkApplications'][$n++] = null !== $item ? $item->toMap() : $item;
                }
            }
        }

        return $res;
    }

    /**
     * @param array $map
     *
     * @return ListAdminTrademarkApplicationsResponseBody
     */
    public static function fromMap($map = [])
    {
        $model = new self();
        if (isset($map['PageNumber'])) {
            $model->pageNumber = $map['PageNumber'];
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
        if (isset($map['TrademarkApplications'])) {
            if (!empty($map['TrademarkApplications'])) {
                $model->trademarkApplications = [];
                $n                            = 0;
                foreach ($map['TrademarkApplications'] as $item) {
                    $model->trademarkApplications[$n++] = null !== $item ? trademarkApplications::fromMap($item) : $item;
                }
            }
        }

        return $model;
    }
}
