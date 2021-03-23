<?php

// This file is auto-generated, don't edit it. Thanks.

namespace AlibabaCloud\SDK\Iovcc\V20180501\Models;

use AlibabaCloud\SDK\Iovcc\V20180501\Models\ListAssistDevicesResponseBody\devices;
use AlibabaCloud\Tea\Model;

class ListAssistDevicesResponseBody extends Model
{
    /**
     * @var string
     */
    public $requestId;

    /**
     * @var int
     */
    public $pageIndex;

    /**
     * @var int
     */
    public $perPage;

    /**
     * @var int
     */
    public $totalCount;

    /**
     * @var devices[]
     */
    public $devices;
    protected $_name = [
        'requestId'  => 'RequestId',
        'pageIndex'  => 'PageIndex',
        'perPage'    => 'PerPage',
        'totalCount' => 'TotalCount',
        'devices'    => 'Devices',
    ];

    public function validate()
    {
    }

    public function toMap()
    {
        $res = [];
        if (null !== $this->requestId) {
            $res['RequestId'] = $this->requestId;
        }
        if (null !== $this->pageIndex) {
            $res['PageIndex'] = $this->pageIndex;
        }
        if (null !== $this->perPage) {
            $res['PerPage'] = $this->perPage;
        }
        if (null !== $this->totalCount) {
            $res['TotalCount'] = $this->totalCount;
        }
        if (null !== $this->devices) {
            $res['Devices'] = [];
            if (null !== $this->devices && \is_array($this->devices)) {
                $n = 0;
                foreach ($this->devices as $item) {
                    $res['Devices'][$n++] = null !== $item ? $item->toMap() : $item;
                }
            }
        }

        return $res;
    }

    /**
     * @param array $map
     *
     * @return ListAssistDevicesResponseBody
     */
    public static function fromMap($map = [])
    {
        $model = new self();
        if (isset($map['RequestId'])) {
            $model->requestId = $map['RequestId'];
        }
        if (isset($map['PageIndex'])) {
            $model->pageIndex = $map['PageIndex'];
        }
        if (isset($map['PerPage'])) {
            $model->perPage = $map['PerPage'];
        }
        if (isset($map['TotalCount'])) {
            $model->totalCount = $map['TotalCount'];
        }
        if (isset($map['Devices'])) {
            if (!empty($map['Devices'])) {
                $model->devices = [];
                $n              = 0;
                foreach ($map['Devices'] as $item) {
                    $model->devices[$n++] = null !== $item ? devices::fromMap($item) : $item;
                }
            }
        }

        return $model;
    }
}
