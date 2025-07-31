<?php

// This file is auto-generated, don't edit it. Thanks.

namespace AlibabaCloud\SDK\Dataphinpublic\V20230630\Models\ListDataServiceApiImpactsRequest;

use AlibabaCloud\Tea\Model;

class listQuery extends Model
{
    /**
     * @description This parameter is required.
     *
     * @example 1021
     *
     * @var int
     */
    public $apiId;

    /**
     * @example test
     *
     * @var string
     */
    public $appName;

    /**
     * @description This parameter is required.
     *
     * @example 2025-06-30 20:00:00
     *
     * @var string
     */
    public $endTime;

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
        'apiId' => 'ApiId',
        'appName' => 'AppName',
        'endTime' => 'EndTime',
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
        if (null !== $this->apiId) {
            $res['ApiId'] = $this->apiId;
        }
        if (null !== $this->appName) {
            $res['AppName'] = $this->appName;
        }
        if (null !== $this->endTime) {
            $res['EndTime'] = $this->endTime;
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
        if (isset($map['ApiId'])) {
            $model->apiId = $map['ApiId'];
        }
        if (isset($map['AppName'])) {
            $model->appName = $map['AppName'];
        }
        if (isset($map['EndTime'])) {
            $model->endTime = $map['EndTime'];
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
