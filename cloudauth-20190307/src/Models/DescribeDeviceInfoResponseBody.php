<?php

// This file is auto-generated, don't edit it. Thanks.

namespace AlibabaCloud\SDK\Cloudauth\V20190307\Models;

use AlibabaCloud\SDK\Cloudauth\V20190307\Models\DescribeDeviceInfoResponseBody\deviceInfoList;
use AlibabaCloud\Tea\Model;

class DescribeDeviceInfoResponseBody extends Model
{
    /**
     * @var deviceInfoList
     */
    public $deviceInfoList;

    /**
     * @var int
     */
    public $totalCount;

    /**
     * @var string
     */
    public $requestId;

    /**
     * @var int
     */
    public $pageSize;

    /**
     * @var int
     */
    public $currentPage;
    protected $_name = [
        'deviceInfoList' => 'DeviceInfoList',
        'totalCount'     => 'TotalCount',
        'requestId'      => 'RequestId',
        'pageSize'       => 'PageSize',
        'currentPage'    => 'CurrentPage',
    ];

    public function validate()
    {
    }

    public function toMap()
    {
        $res = [];
        if (null !== $this->deviceInfoList) {
            $res['DeviceInfoList'] = null !== $this->deviceInfoList ? $this->deviceInfoList->toMap() : null;
        }
        if (null !== $this->totalCount) {
            $res['TotalCount'] = $this->totalCount;
        }
        if (null !== $this->requestId) {
            $res['RequestId'] = $this->requestId;
        }
        if (null !== $this->pageSize) {
            $res['PageSize'] = $this->pageSize;
        }
        if (null !== $this->currentPage) {
            $res['CurrentPage'] = $this->currentPage;
        }

        return $res;
    }

    /**
     * @param array $map
     *
     * @return DescribeDeviceInfoResponseBody
     */
    public static function fromMap($map = [])
    {
        $model = new self();
        if (isset($map['DeviceInfoList'])) {
            $model->deviceInfoList = deviceInfoList::fromMap($map['DeviceInfoList']);
        }
        if (isset($map['TotalCount'])) {
            $model->totalCount = $map['TotalCount'];
        }
        if (isset($map['RequestId'])) {
            $model->requestId = $map['RequestId'];
        }
        if (isset($map['PageSize'])) {
            $model->pageSize = $map['PageSize'];
        }
        if (isset($map['CurrentPage'])) {
            $model->currentPage = $map['CurrentPage'];
        }

        return $model;
    }
}
