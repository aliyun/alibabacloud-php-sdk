<?php

// This file is auto-generated, don't edit it. Thanks.

namespace AlibabaCloud\SDK\OnsMqtt\V20200420\Models;

use AlibabaCloud\SDK\OnsMqtt\V20200420\Models\QueryMqttTraceDeviceResponseBody\deviceInfoList;
use AlibabaCloud\Tea\Model;

class QueryMqttTraceDeviceResponseBody extends Model
{
    /**
     * @var int
     */
    public $currentPage;

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
    public $total;

    /**
     * @var deviceInfoList[]
     */
    public $deviceInfoList;
    protected $_name = [
        'currentPage'    => 'CurrentPage',
        'requestId'      => 'RequestId',
        'pageSize'       => 'PageSize',
        'total'          => 'Total',
        'deviceInfoList' => 'DeviceInfoList',
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
        if (null !== $this->requestId) {
            $res['RequestId'] = $this->requestId;
        }
        if (null !== $this->pageSize) {
            $res['PageSize'] = $this->pageSize;
        }
        if (null !== $this->total) {
            $res['Total'] = $this->total;
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
        if (isset($map['RequestId'])) {
            $model->requestId = $map['RequestId'];
        }
        if (isset($map['PageSize'])) {
            $model->pageSize = $map['PageSize'];
        }
        if (isset($map['Total'])) {
            $model->total = $map['Total'];
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

        return $model;
    }
}
