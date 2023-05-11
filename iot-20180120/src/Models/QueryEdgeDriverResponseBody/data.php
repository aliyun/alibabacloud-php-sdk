<?php

// This file is auto-generated, don't edit it. Thanks.

namespace AlibabaCloud\SDK\Iot\V20180120\Models\QueryEdgeDriverResponseBody;

use AlibabaCloud\SDK\Iot\V20180120\Models\QueryEdgeDriverResponseBody\data\driverList;
use AlibabaCloud\Tea\Model;

class data extends Model
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
     * @description The information about each driver.
     *
     * @var driverList[]
     */
    public $driverList;

    /**
     * @description The number of entries returned per page.
     *
     * @example 15
     *
     * @var int
     */
    public $pageSize;

    /**
     * @description The total number of official or custom drivers found.
     *
     *   If the value of Type is 0, the value of this parameter is the total number of official drivers found.
     *   If the value of Type is 1, the value of this parameter is the total number of custom drivers found.
     *
     * @example 1
     *
     * @var int
     */
    public $total;
    protected $_name = [
        'currentPage' => 'CurrentPage',
        'driverList'  => 'DriverList',
        'pageSize'    => 'PageSize',
        'total'       => 'Total',
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
        if (null !== $this->driverList) {
            $res['DriverList'] = [];
            if (null !== $this->driverList && \is_array($this->driverList)) {
                $n = 0;
                foreach ($this->driverList as $item) {
                    $res['DriverList'][$n++] = null !== $item ? $item->toMap() : $item;
                }
            }
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
        if (isset($map['CurrentPage'])) {
            $model->currentPage = $map['CurrentPage'];
        }
        if (isset($map['DriverList'])) {
            if (!empty($map['DriverList'])) {
                $model->driverList = [];
                $n                 = 0;
                foreach ($map['DriverList'] as $item) {
                    $model->driverList[$n++] = null !== $item ? driverList::fromMap($item) : $item;
                }
            }
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
