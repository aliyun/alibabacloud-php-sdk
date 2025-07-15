<?php

// This file is auto-generated, don't edit it. Thanks.

namespace AlibabaCloud\SDK\Live\V20161101\Models;

use AlibabaCloud\SDK\Live\V20161101\Models\DescribeLivePackageConfigResponseBody\livePackageConfigList;
use AlibabaCloud\Tea\Model;

class DescribeLivePackageConfigResponseBody extends Model
{
    /**
     * @description The live stream encapsulation configurations.
     *
     * @var livePackageConfigList
     */
    public $livePackageConfigList;

    /**
     * @description The sorting order. Valid values:
     *
     *   **asc** (default): ascending order
     *   **desc**: descending order
     *
     * @example asc
     *
     * @var string
     */
    public $order;

    /**
     * @description The page number.
     *
     * @example 1
     *
     * @var int
     */
    public $pageNum;

    /**
     * @description The number of entries per page.
     *
     * @example 10
     *
     * @var int
     */
    public $pageSize;

    /**
     * @description The request ID.
     *
     * @example 1FEDCFD8-4C5D-5CB3-A5A1-0B59E5AE57B0
     *
     * @var string
     */
    public $requestId;

    /**
     * @description The total number of live stream encapsulation configurations.
     *
     * @example 1
     *
     * @var int
     */
    public $totalNum;

    /**
     * @description The total number of pages.
     *
     * @example 10
     *
     * @var int
     */
    public $totalPage;
    protected $_name = [
        'livePackageConfigList' => 'LivePackageConfigList',
        'order' => 'Order',
        'pageNum' => 'PageNum',
        'pageSize' => 'PageSize',
        'requestId' => 'RequestId',
        'totalNum' => 'TotalNum',
        'totalPage' => 'TotalPage',
    ];

    public function validate() {}

    public function toMap()
    {
        $res = [];
        if (null !== $this->livePackageConfigList) {
            $res['LivePackageConfigList'] = null !== $this->livePackageConfigList ? $this->livePackageConfigList->toMap() : null;
        }
        if (null !== $this->order) {
            $res['Order'] = $this->order;
        }
        if (null !== $this->pageNum) {
            $res['PageNum'] = $this->pageNum;
        }
        if (null !== $this->pageSize) {
            $res['PageSize'] = $this->pageSize;
        }
        if (null !== $this->requestId) {
            $res['RequestId'] = $this->requestId;
        }
        if (null !== $this->totalNum) {
            $res['TotalNum'] = $this->totalNum;
        }
        if (null !== $this->totalPage) {
            $res['TotalPage'] = $this->totalPage;
        }

        return $res;
    }

    /**
     * @param array $map
     *
     * @return DescribeLivePackageConfigResponseBody
     */
    public static function fromMap($map = [])
    {
        $model = new self();
        if (isset($map['LivePackageConfigList'])) {
            $model->livePackageConfigList = livePackageConfigList::fromMap($map['LivePackageConfigList']);
        }
        if (isset($map['Order'])) {
            $model->order = $map['Order'];
        }
        if (isset($map['PageNum'])) {
            $model->pageNum = $map['PageNum'];
        }
        if (isset($map['PageSize'])) {
            $model->pageSize = $map['PageSize'];
        }
        if (isset($map['RequestId'])) {
            $model->requestId = $map['RequestId'];
        }
        if (isset($map['TotalNum'])) {
            $model->totalNum = $map['TotalNum'];
        }
        if (isset($map['TotalPage'])) {
            $model->totalPage = $map['TotalPage'];
        }

        return $model;
    }
}
