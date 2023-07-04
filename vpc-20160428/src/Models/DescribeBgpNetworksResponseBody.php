<?php

// This file is auto-generated, don't edit it. Thanks.

namespace AlibabaCloud\SDK\Vpc\V20160428\Models;

use AlibabaCloud\SDK\Vpc\V20160428\Models\DescribeBgpNetworksResponseBody\bgpNetworks;
use AlibabaCloud\Tea\Model;

class DescribeBgpNetworksResponseBody extends Model
{
    /**
     * @description BGP networks.
     *
     * @var bgpNetworks
     */
    public $bgpNetworks;

    /**
     * @description The page number of the returned page.
     *
     * @example 1
     *
     * @var int
     */
    public $pageNumber;

    /**
     * @description The number of entries returned per page.
     *
     * @example 10
     *
     * @var int
     */
    public $pageSize;

    /**
     * @description The ID of the request.
     *
     * @example 6F513A15-669F-419D-B511-08A85292059B
     *
     * @var string
     */
    public $requestId;

    /**
     * @description The total number of advertised BGP networks.
     *
     * @example 2
     *
     * @var int
     */
    public $totalCount;
    protected $_name = [
        'bgpNetworks' => 'BgpNetworks',
        'pageNumber'  => 'PageNumber',
        'pageSize'    => 'PageSize',
        'requestId'   => 'RequestId',
        'totalCount'  => 'TotalCount',
    ];

    public function validate()
    {
    }

    public function toMap()
    {
        $res = [];
        if (null !== $this->bgpNetworks) {
            $res['BgpNetworks'] = null !== $this->bgpNetworks ? $this->bgpNetworks->toMap() : null;
        }
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

        return $res;
    }

    /**
     * @param array $map
     *
     * @return DescribeBgpNetworksResponseBody
     */
    public static function fromMap($map = [])
    {
        $model = new self();
        if (isset($map['BgpNetworks'])) {
            $model->bgpNetworks = bgpNetworks::fromMap($map['BgpNetworks']);
        }
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

        return $model;
    }
}
