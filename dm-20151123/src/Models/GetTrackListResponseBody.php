<?php

// This file is auto-generated, don't edit it. Thanks.

namespace AlibabaCloud\SDK\Dm\V20151123\Models;

use AlibabaCloud\SDK\Dm\V20151123\Models\GetTrackListResponseBody\data;
use AlibabaCloud\Tea\Model;

class GetTrackListResponseBody extends Model
{
    /**
     * @description Used for pagination. Not set for the first query, but for subsequent queries, it should be set to the value of OffsetCreateTime from the previous response. (This field is deprecated)
     *
     * @example (This field is deprecated)
     *
     * @var string
     */
    public $offsetCreateTime;

    /**
     * @description (This field is deprecated)
     *
     * @example (This field is deprecated)
     *
     * @var string
     */
    public $offsetCreateTimeDesc;

    /**
     * @description Current page number
     *
     * @example 1
     *
     * @var int
     */
    public $pageNo;

    /**
     * @description Number of items per page
     *
     * @example 10
     *
     * @var int
     */
    public $pageSize;

    /**
     * @description Request ID
     *
     * @example 10A1AD70-E48E-476D-98D9-39BD92193837
     *
     * @var string
     */
    public $requestId;

    /**
     * @description Total number of items
     *
     * @example 100
     *
     * @var int
     */
    public $total;

    /**
     * @var int
     */
    public $totalPages;

    /**
     * @description Tracking data records
     *
     * @var data
     */
    public $data;
    protected $_name = [
        'offsetCreateTime' => 'OffsetCreateTime',
        'offsetCreateTimeDesc' => 'OffsetCreateTimeDesc',
        'pageNo' => 'PageNo',
        'pageSize' => 'PageSize',
        'requestId' => 'RequestId',
        'total' => 'Total',
        'totalPages' => 'TotalPages',
        'data' => 'data',
    ];

    public function validate() {}

    public function toMap()
    {
        $res = [];
        if (null !== $this->offsetCreateTime) {
            $res['OffsetCreateTime'] = $this->offsetCreateTime;
        }
        if (null !== $this->offsetCreateTimeDesc) {
            $res['OffsetCreateTimeDesc'] = $this->offsetCreateTimeDesc;
        }
        if (null !== $this->pageNo) {
            $res['PageNo'] = $this->pageNo;
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
        if (null !== $this->totalPages) {
            $res['TotalPages'] = $this->totalPages;
        }
        if (null !== $this->data) {
            $res['data'] = null !== $this->data ? $this->data->toMap() : null;
        }

        return $res;
    }

    /**
     * @param array $map
     *
     * @return GetTrackListResponseBody
     */
    public static function fromMap($map = [])
    {
        $model = new self();
        if (isset($map['OffsetCreateTime'])) {
            $model->offsetCreateTime = $map['OffsetCreateTime'];
        }
        if (isset($map['OffsetCreateTimeDesc'])) {
            $model->offsetCreateTimeDesc = $map['OffsetCreateTimeDesc'];
        }
        if (isset($map['PageNo'])) {
            $model->pageNo = $map['PageNo'];
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
        if (isset($map['TotalPages'])) {
            $model->totalPages = $map['TotalPages'];
        }
        if (isset($map['data'])) {
            $model->data = data::fromMap($map['data']);
        }

        return $model;
    }
}
