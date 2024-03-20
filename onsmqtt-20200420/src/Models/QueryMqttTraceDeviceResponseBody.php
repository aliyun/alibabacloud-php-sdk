<?php

// This file is auto-generated, don't edit it. Thanks.

namespace AlibabaCloud\SDK\OnsMqtt\V20200420\Models;

use AlibabaCloud\SDK\OnsMqtt\V20200420\Models\QueryMqttTraceDeviceResponseBody\deviceInfoList;
use AlibabaCloud\Tea\Model;

class QueryMqttTraceDeviceResponseBody extends Model
{
    /**
     * @description The page number of the returned page.
     *
     * @example 1
     *
     * @var int
     */
    public $currentPage;

    /**
     * @description The details of the action on the device.
     *
     * @var deviceInfoList[]
     */
    public $deviceInfoList;

    /**
     * @description The number of entries returned per page.
     *
     * @example 2
     *
     * @var int
     */
    public $pageSize;

    /**
     * @description The request ID. You can use the ID to troubleshoot issues. This parameter is a common parameter.
     *
     * @example 317076B7-F946-46BC-A98F-4CF9777C****
     *
     * @var string
     */
    public $requestId;

    /**
     * @description The total number of returned actions on the device.
     *
     * @example 3
     *
     * @var int
     */
    public $total;
    protected $_name = [
        'currentPage'    => 'CurrentPage',
        'deviceInfoList' => 'DeviceInfoList',
        'pageSize'       => 'PageSize',
        'requestId'      => 'RequestId',
        'total'          => 'Total',
    ];

    public function validate()
    {
    }

    public function toMap()
    {
        $res = [];
        if (null !== $this->currentPage) {
            $res['CurrentPage'] = $this->currentPage;
        }
        if (null !== $this->deviceInfoList) {
            $res['DeviceInfoList'] = [];
            if (null !== $this->deviceInfoList && \is_array($this->deviceInfoList)) {
                $n = 0;
                foreach ($this->deviceInfoList as $item) {
                    $res['DeviceInfoList'][$n++] = null !== $item ? $item->toMap() : $item;
                }
            }
        }
        if (null !== $this->pageSize) {
            $res['PageSize'] = $this->pageSize;
        }
        if (null !== $this->requestId) {
            $res['RequestId'] = $this->requestId;
        }
        if (null !== $this->total) {
            $res['Total'] = $this->total;
        }

        return $res;
    }

    /**
     * @param array $map
     *
     * @return QueryMqttTraceDeviceResponseBody
     */
    public static function fromMap($map = [])
    {
        $model = new self();
        if (isset($map['CurrentPage'])) {
            $model->currentPage = $map['CurrentPage'];
        }
        if (isset($map['DeviceInfoList'])) {
            if (!empty($map['DeviceInfoList'])) {
                $model->deviceInfoList = [];
                $n                     = 0;
                foreach ($map['DeviceInfoList'] as $item) {
                    $model->deviceInfoList[$n++] = null !== $item ? deviceInfoList::fromMap($item) : $item;
                }
            }
        }
        if (isset($map['PageSize'])) {
            $model->pageSize = $map['PageSize'];
        }
        if (isset($map['RequestId'])) {
            $model->requestId = $map['RequestId'];
        }
        if (isset($map['Total'])) {
            $model->total = $map['Total'];
        }

        return $model;
    }
}
