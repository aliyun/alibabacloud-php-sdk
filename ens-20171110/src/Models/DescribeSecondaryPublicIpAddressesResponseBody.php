<?php

// This file is auto-generated, don't edit it. Thanks.

namespace AlibabaCloud\SDK\Ens\V20171110\Models;

use AlibabaCloud\SDK\Ens\V20171110\Models\DescribeSecondaryPublicIpAddressesResponseBody\secondaryPublicIpAddresses;
use AlibabaCloud\Tea\Model;

class DescribeSecondaryPublicIpAddressesResponseBody extends Model
{
    /**
     * @description The page number returned.
     *
     * @example 1
     *
     * @var int
     */
    public $pageNumber;

    /**
     * @description The number of entries per page.
     *
     * @example 50
     *
     * @var int
     */
    public $pageSize;

    /**
     * @description The request ID.
     *
     * @example 473469C7-AA6F-4DC5-B3DB-A3DC0DE3C83E
     *
     * @var string
     */
    public $requestId;

    /**
     * @description The array of returned secondary IP addresses.
     *
     * @var secondaryPublicIpAddresses[]
     */
    public $secondaryPublicIpAddresses;

    /**
     * @description The total number of entries returned.
     *
     * @example 13
     *
     * @var int
     */
    public $totalCount;
    protected $_name = [
        'pageNumber' => 'PageNumber',
        'pageSize' => 'PageSize',
        'requestId' => 'RequestId',
        'secondaryPublicIpAddresses' => 'SecondaryPublicIpAddresses',
        'totalCount' => 'TotalCount',
    ];

    public function validate() {}

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
        if (null !== $this->secondaryPublicIpAddresses) {
            $res['SecondaryPublicIpAddresses'] = [];
            if (null !== $this->secondaryPublicIpAddresses && \is_array($this->secondaryPublicIpAddresses)) {
                $n = 0;
                foreach ($this->secondaryPublicIpAddresses as $item) {
                    $res['SecondaryPublicIpAddresses'][$n++] = null !== $item ? $item->toMap() : $item;
                }
            }
        }
        if (null !== $this->totalCount) {
            $res['TotalCount'] = $this->totalCount;
        }

        return $res;
    }

    /**
     * @param array $map
     *
     * @return DescribeSecondaryPublicIpAddressesResponseBody
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
        if (isset($map['SecondaryPublicIpAddresses'])) {
            if (!empty($map['SecondaryPublicIpAddresses'])) {
                $model->secondaryPublicIpAddresses = [];
                $n = 0;
                foreach ($map['SecondaryPublicIpAddresses'] as $item) {
                    $model->secondaryPublicIpAddresses[$n++] = null !== $item ? secondaryPublicIpAddresses::fromMap($item) : $item;
                }
            }
        }
        if (isset($map['TotalCount'])) {
            $model->totalCount = $map['TotalCount'];
        }

        return $model;
    }
}
