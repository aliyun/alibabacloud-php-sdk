<?php

// This file is auto-generated, don't edit it. Thanks.

namespace AlibabaCloud\SDK\Iot\V20180120\Models\QueryEdgeDriverVersionResponseBody;

use AlibabaCloud\SDK\Iot\V20180120\Models\QueryEdgeDriverVersionResponseBody\data\driverVersionList;
use AlibabaCloud\Tea\Model;

class data extends Model
{
    /**
     * @example 1
     *
     * @var int
     */
    public $currentPage;

    /**
     * @var driverVersionList[]
     */
    public $driverVersionList;

    /**
     * @example 15
     *
     * @var int
     */
    public $pageSize;

    /**
     * @example 1
     *
     * @var int
     */
    public $total;
    protected $_name = [
        'currentPage'       => 'CurrentPage',
        'driverVersionList' => 'DriverVersionList',
        'pageSize'          => 'PageSize',
        'total'             => 'Total',
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
        if (null !== $this->driverVersionList) {
            $res['DriverVersionList'] = [];
            if (null !== $this->driverVersionList && \is_array($this->driverVersionList)) {
                $n = 0;
                foreach ($this->driverVersionList as $item) {
                    $res['DriverVersionList'][$n++] = null !== $item ? $item->toMap() : $item;
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
        if (isset($map['DriverVersionList'])) {
            if (!empty($map['DriverVersionList'])) {
                $model->driverVersionList = [];
                $n                        = 0;
                foreach ($map['DriverVersionList'] as $item) {
                    $model->driverVersionList[$n++] = null !== $item ? driverVersionList::fromMap($item) : $item;
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
