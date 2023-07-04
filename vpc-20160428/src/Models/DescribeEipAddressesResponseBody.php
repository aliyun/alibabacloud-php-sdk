<?php

// This file is auto-generated, don't edit it. Thanks.

namespace AlibabaCloud\SDK\Vpc\V20160428\Models;

use AlibabaCloud\SDK\Vpc\V20160428\Models\DescribeEipAddressesResponseBody\eipAddresses;
use AlibabaCloud\Tea\Model;

class DescribeEipAddressesResponseBody extends Model
{
    /**
     * @description The metering method that is used after the renewal takes effect. Valid values:
     *
     *   **PayByBandwidth**: pay-by-bandwidth
     *   **PayByTraffic**: pay-by-data-transfer
     *
     * @var eipAddresses
     */
    public $eipAddresses;

    /**
     * @description The description of the EIP.
     *
     * @example 10
     *
     * @var int
     */
    public $pageNumber;

    /**
     * @description The network type. The value is set to **public**, which indicates the Internet.
     *
     * @example 10
     *
     * @var int
     */
    public $pageSize;

    /**
     * @description The billing method of the EIP. Valid values:
     *
     *   **PostPaid**: pay-as-you-go
     *   **PrePaid**: subscription
     *
     * @example 4EC47282-1B74-4534-BD0E-403F3EE64CAF
     *
     * @var string
     */
    public $requestId;

    /**
     * @description The IDs of contiguous EIPs.
     *
     * This value is returned only when you query contiguous EIP groups.
     * @example 1
     *
     * @var int
     */
    public $totalCount;
    protected $_name = [
        'eipAddresses' => 'EipAddresses',
        'pageNumber'   => 'PageNumber',
        'pageSize'     => 'PageSize',
        'requestId'    => 'RequestId',
        'totalCount'   => 'TotalCount',
    ];

    public function validate()
    {
    }

    public function toMap()
    {
        $res = [];
        if (null !== $this->eipAddresses) {
            $res['EipAddresses'] = null !== $this->eipAddresses ? $this->eipAddresses->toMap() : null;
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
     * @return DescribeEipAddressesResponseBody
     */
    public static function fromMap($map = [])
    {
        $model = new self();
        if (isset($map['EipAddresses'])) {
            $model->eipAddresses = eipAddresses::fromMap($map['EipAddresses']);
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
