<?php

// This file is auto-generated, don't edit it. Thanks.

namespace AlibabaCloud\SDK\Vpc\V20160428\Models;

use AlibabaCloud\SDK\Vpc\V20160428\Models\DescribeIpv6AddressesResponseBody\ipv6Addresses;
use AlibabaCloud\Tea\Model;

class DescribeIpv6AddressesResponseBody extends Model
{
    /**
     * @description The details about the IPv6 addresses.
     *
     * @var ipv6Addresses
     */
    public $ipv6Addresses;

    /**
     * @description The number of the returned page. Default value: **1**.
     *
     * @example 1
     *
     * @var int
     */
    public $pageNumber;

    /**
     * @description The number of entries returned on each page. Maximum value: **50**. Default value: **10**.
     *
     * @example 10
     *
     * @var int
     */
    public $pageSize;

    /**
     * @description The ID of the request.
     *
     * @example AA4486A8-B6AE-469E-AB09-820EF8ECFA2B
     *
     * @var string
     */
    public $requestId;

    /**
     * @description The total number of entries returned.
     *
     * @example 2
     *
     * @var int
     */
    public $totalCount;
    protected $_name = [
        'ipv6Addresses' => 'Ipv6Addresses',
        'pageNumber'    => 'PageNumber',
        'pageSize'      => 'PageSize',
        'requestId'     => 'RequestId',
        'totalCount'    => 'TotalCount',
    ];

    public function validate()
    {
    }

    public function toMap()
    {
        $res = [];
        if (null !== $this->ipv6Addresses) {
            $res['Ipv6Addresses'] = null !== $this->ipv6Addresses ? $this->ipv6Addresses->toMap() : null;
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
     * @return DescribeIpv6AddressesResponseBody
     */
    public static function fromMap($map = [])
    {
        $model = new self();
        if (isset($map['Ipv6Addresses'])) {
            $model->ipv6Addresses = ipv6Addresses::fromMap($map['Ipv6Addresses']);
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
