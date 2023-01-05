<?php

// This file is auto-generated, don't edit it. Thanks.

namespace AlibabaCloud\SDK\Linkvisual\V20180120\Models\QueryFaceAllDeviceGroupResponseBody;

use AlibabaCloud\SDK\Linkvisual\V20180120\Models\QueryFaceAllDeviceGroupResponseBody\data\deviceGroupList;
use AlibabaCloud\Tea\Model;

class data extends Model
{
    /**
     * @var deviceGroupList[]
     */
    public $deviceGroupList;

    /**
     * @example 1
     *
     * @var int
     */
    public $pageNo;

    /**
     * @example 20
     *
     * @var int
     */
    public $pageSize;

    /**
     * @example 100
     *
     * @var int
     */
    public $total;
    protected $_name = [
        'deviceGroupList' => 'DeviceGroupList',
        'pageNo'          => 'PageNo',
        'pageSize'        => 'PageSize',
        'total'           => 'Total',
    ];

    public function validate()
    {
    }

    public function toMap()
    {
        $res = [];
        if (null !== $this->deviceGroupList) {
            $res['DeviceGroupList'] = [];
            if (null !== $this->deviceGroupList && \is_array($this->deviceGroupList)) {
                $n = 0;
                foreach ($this->deviceGroupList as $item) {
                    $res['DeviceGroupList'][$n++] = null !== $item ? $item->toMap() : $item;
                }
            }
        }
        if (null !== $this->pageNo) {
            $res['PageNo'] = $this->pageNo;
        }
        if (null !== $this->pageSize) {
            $res['PageSize'] = $this->pageSize;
        }
        if (null !== $this->total) {
            $res['Total'] = $this->total;
        }

        return $res;
    }

    /**
     * @param array $map
     *
     * @return data
     */
    public static function fromMap($map = [])
    {
        $model = new self();
        if (isset($map['DeviceGroupList'])) {
            if (!empty($map['DeviceGroupList'])) {
                $model->deviceGroupList = [];
                $n                      = 0;
                foreach ($map['DeviceGroupList'] as $item) {
                    $model->deviceGroupList[$n++] = null !== $item ? deviceGroupList::fromMap($item) : $item;
                }
            }
        }
        if (isset($map['PageNo'])) {
            $model->pageNo = $map['PageNo'];
        }
        if (isset($map['PageSize'])) {
            $model->pageSize = $map['PageSize'];
        }
        if (isset($map['Total'])) {
            $model->total = $map['Total'];
        }

        return $model;
    }
}
