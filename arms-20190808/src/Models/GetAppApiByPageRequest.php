<?php

// This file is auto-generated, don't edit it. Thanks.

namespace AlibabaCloud\SDK\ARMS\V20190808\Models;

use AlibabaCloud\Tea\Model;

class GetAppApiByPageRequest extends Model
{
    /**
     * @description The number of entries to return on each page.
     *
     * @example 1
     *
     * @var int
     */
    public $currentPage;

    /**
     * @description The operation that you want to perform. Set the value to `GetAppApiByPage`.
     *
     * @example 1600066800000
     *
     * @var int
     */
    public $endTime;

    /**
     * @description The time interval between the data shards to be queried. Unit: milliseconds. Minimum value: 60000.
     *
     * @example 60000
     *
     * @var int
     */
    public $intervalMills;

    /**
     * @description The ID of the region.
     *
     * @example a2n80plglh@745eddxxx
     *
     * @var string
     */
    public $PId;

    /**
     * @description The message returned.
     *
     * @example 10
     *
     * @var int
     */
    public $pageSize;

    /**
     * @description The process identifier (PID) of the application. For more information about how to obtain the PID, see [Obtain the PID of an application](https://www.alibabacloud.com/help/zh/doc-detail/186100.htm?spm=a2cdw.13409063.0.0.7a72281f0bkTfx#title-imy-7gj-qhr).
     *
     * @example cn-hangzhou
     *
     * @var string
     */
    public $regionId;

    /**
     * @description The HTTP status code returned for the request. Valid values:
     *
     *   2XX: The request is successful.
     *   3XX: A redirection message is returned.
     *   4XX: The request is invalid.
     *   5XX: A server error occurs.
     *
     * @example 1600063200000
     *
     * @var int
     */
    public $startTime;
    protected $_name = [
        'currentPage'   => 'CurrentPage',
        'endTime'       => 'EndTime',
        'intervalMills' => 'IntervalMills',
        'PId'           => 'PId',
        'pageSize'      => 'PageSize',
        'regionId'      => 'RegionId',
        'startTime'     => 'StartTime',
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
        if (null !== $this->endTime) {
            $res['EndTime'] = $this->endTime;
        }
        if (null !== $this->intervalMills) {
            $res['IntervalMills'] = $this->intervalMills;
        }
        if (null !== $this->PId) {
            $res['PId'] = $this->PId;
        }
        if (null !== $this->pageSize) {
            $res['PageSize'] = $this->pageSize;
        }
        if (null !== $this->regionId) {
            $res['RegionId'] = $this->regionId;
        }
        if (null !== $this->startTime) {
            $res['StartTime'] = $this->startTime;
        }

        return $res;
    }

    /**
     * @param array $map
     *
     * @return GetAppApiByPageRequest
     */
    public static function fromMap($map = [])
    {
        $model = new self();
        if (isset($map['CurrentPage'])) {
            $model->currentPage = $map['CurrentPage'];
        }
        if (isset($map['EndTime'])) {
            $model->endTime = $map['EndTime'];
        }
        if (isset($map['IntervalMills'])) {
            $model->intervalMills = $map['IntervalMills'];
        }
        if (isset($map['PId'])) {
            $model->PId = $map['PId'];
        }
        if (isset($map['PageSize'])) {
            $model->pageSize = $map['PageSize'];
        }
        if (isset($map['RegionId'])) {
            $model->regionId = $map['RegionId'];
        }
        if (isset($map['StartTime'])) {
            $model->startTime = $map['StartTime'];
        }

        return $model;
    }
}
