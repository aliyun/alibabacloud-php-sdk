<?php

// This file is auto-generated, don't edit it. Thanks.

namespace AlibabaCloud\SDK\Cloudauth\V20190307\Models;

use AlibabaCloud\SDK\Cloudauth\V20190307\Models\DescribeDeviceInfoResponse\deviceInfoList;
use AlibabaCloud\Tea\Model;

class DescribeDeviceInfoResponse extends Model
{
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

    /**
     * @var int
     */
    public $totalCount;

    /**
     * @var deviceInfoList
     */
    public $deviceInfoList;
    protected $_name = [
        'requestId'      => 'RequestId',
        'pageSize'       => 'PageSize',
        'currentPage'    => 'CurrentPage',
        'totalCount'     => 'TotalCount',
        'deviceInfoList' => 'DeviceInfoList',
    ];

    public function validate()
    {
        Model::validateRequired('requestId', $this->requestId, true);
        Model::validateRequired('pageSize', $this->pageSize, true);
        Model::validateRequired('currentPage', $this->currentPage, true);
        Model::validateRequired('totalCount', $this->totalCount, true);
        Model::validateRequired('deviceInfoList', $this->deviceInfoList, true);
    }

    public function toMap()
    {
        $res = [];
        if (null !== $this->requestId) {
            $res['RequestId'] = $this->requestId;
        }
        if (null !== $this->pageSize) {
            $res['PageSize'] = $this->pageSize;
        }
        if (null !== $this->currentPage) {
            $res['CurrentPage'] = $this->currentPage;
        }
        if (null !== $this->totalCount) {
            $res['TotalCount'] = $this->totalCount;
        }
        if (null !== $this->deviceInfoList) {
            $res['DeviceInfoList'] = null !== $this->deviceInfoList ? $this->deviceInfoList->toMap() : null;
        }

        return $res;
    }

    /**
     * @param array $map
     *
     * @return DescribeDeviceInfoResponse
     */
    public static function fromMap($map = [])
    {
        $model = new self();
        if (isset($map['RequestId'])) {
            $model->requestId = $map['RequestId'];
        }
        if (isset($map['PageSize'])) {
            $model->pageSize = $map['PageSize'];
        }
        if (isset($map['CurrentPage'])) {
            $model->currentPage = $map['CurrentPage'];
        }
        if (isset($map['TotalCount'])) {
            $model->totalCount = $map['TotalCount'];
        }
        if (isset($map['DeviceInfoList'])) {
            $model->deviceInfoList = deviceInfoList::fromMap($map['DeviceInfoList']);
        }

        return $model;
    }
}
