<?php

// This file is auto-generated, don't edit it. Thanks.

namespace AlibabaCloud\SDK\Dataphinpublic\V20230630\Models\ListDataServiceApiCallStatisticsRequest;

use AlibabaCloud\Tea\Model;

class listQuery extends Model
{
    /**
     * @description This parameter is required.
     *
     * @example 2025-06-30 20:00:00
     *
     * @var string
     */
    public $endTime;

    /**
     * @example test
     *
     * @var string
     */
    public $keyword;

    /**
     * @example CALL_COUNT
     *
     * @var string
     */
    public $orderColumn;

    /**
     * @example 1
     *
     * @var int
     */
    public $orderType;

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
     * @description This parameter is required.
     *
     * @example 2025-06-30 08:00:00
     *
     * @var string
     */
    public $startTime;
    protected $_name = [
        'endTime' => 'EndTime',
        'keyword' => 'Keyword',
        'orderColumn' => 'OrderColumn',
        'orderType' => 'OrderType',
        'pageNo' => 'PageNo',
        'pageSize' => 'PageSize',
        'startTime' => 'StartTime',
    ];

    public function validate() {}

    public function toMap()
    {
        $res = [];
        if (null !== $this->endTime) {
            $res['EndTime'] = $this->endTime;
        }
        if (null !== $this->keyword) {
            $res['Keyword'] = $this->keyword;
        }
        if (null !== $this->orderColumn) {
            $res['OrderColumn'] = $this->orderColumn;
        }
        if (null !== $this->orderType) {
            $res['OrderType'] = $this->orderType;
        }
        if (null !== $this->pageNo) {
            $res['PageNo'] = $this->pageNo;
        }
        if (null !== $this->pageSize) {
            $res['PageSize'] = $this->pageSize;
        }
        if (null !== $this->startTime) {
            $res['StartTime'] = $this->startTime;
        }

        return $res;
    }

    /**
     * @param array $map
     *
     * @return listQuery
     */
    public static function fromMap($map = [])
    {
        $model = new self();
        if (isset($map['EndTime'])) {
            $model->endTime = $map['EndTime'];
        }
        if (isset($map['Keyword'])) {
            $model->keyword = $map['Keyword'];
        }
        if (isset($map['OrderColumn'])) {
            $model->orderColumn = $map['OrderColumn'];
        }
        if (isset($map['OrderType'])) {
            $model->orderType = $map['OrderType'];
        }
        if (isset($map['PageNo'])) {
            $model->pageNo = $map['PageNo'];
        }
        if (isset($map['PageSize'])) {
            $model->pageSize = $map['PageSize'];
        }
        if (isset($map['StartTime'])) {
            $model->startTime = $map['StartTime'];
        }

        return $model;
    }
}
