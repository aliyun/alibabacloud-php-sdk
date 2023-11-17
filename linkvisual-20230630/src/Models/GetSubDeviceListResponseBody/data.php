<?php

// This file is auto-generated, don't edit it. Thanks.

namespace AlibabaCloud\SDK\Linkvisual\V20230630\Models\GetSubDeviceListResponseBody;

use AlibabaCloud\SDK\Linkvisual\V20230630\Models\GetSubDeviceListResponseBody\data\subDeviceList;
use AlibabaCloud\Tea\Model;

class data extends Model
{
    /**
     * @var int
     */
    public $pageNo;

    /**
     * @var int
     */
    public $pageSize;

    /**
     * @var subDeviceList[]
     */
    public $subDeviceList;

    /**
     * @var int
     */
    public $total;
    protected $_name = [
        'pageNo'        => 'PageNo',
        'pageSize'      => 'PageSize',
        'subDeviceList' => 'SubDeviceList',
        'total'         => 'Total',
    ];

    public function validate()
    {
    }

    public function toMap()
    {
        $res = [];
        if (null !== $this->pageNo) {
            $res['PageNo'] = $this->pageNo;
        }
        if (null !== $this->pageSize) {
            $res['PageSize'] = $this->pageSize;
        }
        if (null !== $this->subDeviceList) {
            $res['SubDeviceList'] = [];
            if (null !== $this->subDeviceList && \is_array($this->subDeviceList)) {
                $n = 0;
                foreach ($this->subDeviceList as $item) {
                    $res['SubDeviceList'][$n++] = null !== $item ? $item->toMap() : $item;
                }
            }
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
        if (isset($map['PageNo'])) {
            $model->pageNo = $map['PageNo'];
        }
        if (isset($map['PageSize'])) {
            $model->pageSize = $map['PageSize'];
        }
        if (isset($map['SubDeviceList'])) {
            if (!empty($map['SubDeviceList'])) {
                $model->subDeviceList = [];
                $n                    = 0;
                foreach ($map['SubDeviceList'] as $item) {
                    $model->subDeviceList[$n++] = null !== $item ? subDeviceList::fromMap($item) : $item;
                }
            }
        }
        if (isset($map['Total'])) {
            $model->total = $map['Total'];
        }

        return $model;
    }
}
