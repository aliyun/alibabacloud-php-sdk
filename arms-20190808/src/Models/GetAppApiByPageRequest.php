<?php

// This file is auto-generated, don't edit it. Thanks.

namespace AlibabaCloud\SDK\ARMS\V20190808\Models;

use AlibabaCloud\Tea\Model;

class GetAppApiByPageRequest extends Model
{
    /**
     * @var string
     */
    public $regionId;

    /**
     * @var int
     */
    public $startTime;

    /**
     * @var int
     */
    public $endTime;

    /**
     * @var int
     */
    public $currentPage;

    /**
     * @var int
     */
    public $pageSize;

    /**
     * @var int
     */
    public $intervalMills;

    /**
     * @var string
     */
    public $PId;
    protected $_name = [
        'regionId'      => 'RegionId',
        'startTime'     => 'StartTime',
        'endTime'       => 'EndTime',
        'currentPage'   => 'CurrentPage',
        'pageSize'      => 'PageSize',
        'intervalMills' => 'IntervalMills',
        'PId'           => 'PId',
    ];

    public function validate()
    {
    }

    public function toMap()
    {
        $res = [];
        if (null !== $this->regionId) {
            $res['RegionId'] = $this->regionId;
        }
        if (null !== $this->startTime) {
            $res['StartTime'] = $this->startTime;
        }
        if (null !== $this->endTime) {
            $res['EndTime'] = $this->endTime;
        }
        if (null !== $this->currentPage) {
            $res['CurrentPage'] = $this->currentPage;
        }
        if (null !== $this->pageSize) {
            $res['PageSize'] = $this->pageSize;
        }
        if (null !== $this->intervalMills) {
            $res['IntervalMills'] = $this->intervalMills;
        }
        if (null !== $this->PId) {
            $res['PId'] = $this->PId;
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
        if (isset($map['RegionId'])) {
            $model->regionId = $map['RegionId'];
        }
        if (isset($map['StartTime'])) {
            $model->startTime = $map['StartTime'];
        }
        if (isset($map['EndTime'])) {
            $model->endTime = $map['EndTime'];
        }
        if (isset($map['CurrentPage'])) {
            $model->currentPage = $map['CurrentPage'];
        }
        if (isset($map['PageSize'])) {
            $model->pageSize = $map['PageSize'];
        }
        if (isset($map['IntervalMills'])) {
            $model->intervalMills = $map['IntervalMills'];
        }
        if (isset($map['PId'])) {
            $model->PId = $map['PId'];
        }

        return $model;
    }
}
