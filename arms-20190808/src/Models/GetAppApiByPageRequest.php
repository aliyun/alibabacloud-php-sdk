<?php

// This file is auto-generated, don't edit it. Thanks.

namespace AlibabaCloud\SDK\ARMS\V20190808\Models;

use AlibabaCloud\Tea\Model;

class GetAppApiByPageRequest extends Model
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
     * @description The end of the time range to query. Unit: milliseconds.
     *
     * @example 1600066800000
     *
     * @var int
     */
    public $endTime;

    /**
     * @description The time interval between the data shards to be queried. Unit: milliseconds. Minimum value: 60000. Maximum value: 2147483647.
     *
     * @example 60000
     *
     * @var int
     */
    public $intervalMills;

    /**
     * @description The process identifier (PID) of the application. For information about how to obtain a PID, see [Obtain the PID of an application](https://www.alibabacloud.com/help/zh/doc-detail/186100.htm?spm=a2cdw.13409063.0.0.7a72281f0bkTfx#title-imy-7gj-qhr).
     *
     * @example a2n80plglh@745eddxxx
     *
     * @var string
     */
    public $PId;

    /**
     * @description The number of entries to return on each page. This parameter is no longer supported. The number of entries to return on each page. Default value: 10.
     *
     * @example 10
     *
     * @var int
     */
    public $pageSize;

    /**
     * @description The ID of the region.
     *
     * @example cn-hangzhou
     *
     * @var string
     */
    public $regionId;

    /**
     * @description The beginning of the time range to query. Unit: milliseconds.
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
