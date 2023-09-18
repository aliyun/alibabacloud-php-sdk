<?php

// This file is auto-generated, don't edit it. Thanks.

namespace AlibabaCloud\SDK\SWASOPEN\V20200601\Models;

use AlibabaCloud\Tea\Model;

class DescribeDatabaseSlowLogRecordsRequest extends Model
{
    /**
     * @var string
     */
    public $acsProduct;

    /**
     * @description The ID of the Simple Database Service instance.
     *
     * @example db-38263fa955774501a2ae1bdaed6f****
     *
     * @var string
     */
    public $databaseInstanceId;

    /**
     * @description The end of the time range to query. The end time must be later than the start time. The interval between the start time and the end time must be less than 7 days.
     *
     * > The time displayed in the Simple Application Server console is in the format of UTC+8.
     * @example 2022-09-08T04:04:44Z
     *
     * @var string
     */
    public $endTime;

    /**
     * @description The page number.
     *
     * Default value: 1.
     * @example 1
     *
     * @var int
     */
    public $pageNumber;

    /**
     * @description The number of entries per page. Valid values: 30 to 100.
     *
     * Default value: 30.
     * @example 30
     *
     * @var int
     */
    public $pageSize;

    /**
     * @description The region ID of the Simple Database Service instance. You can call the [ListRegions](~~189315~~) operation to query the most recent region list.
     *
     * @example cn-hangzhou
     *
     * @var string
     */
    public $regionId;

    /**
     * @description The beginning of the time range to query.
     *
     * > The time displayed in the Simple Application Server console is in the format of UTC+8.
     * @example 2022-09-07T04:04:44Z
     *
     * @var string
     */
    public $startTime;
    protected $_name = [
        'acsProduct'         => 'AcsProduct',
        'databaseInstanceId' => 'DatabaseInstanceId',
        'endTime'            => 'EndTime',
        'pageNumber'         => 'PageNumber',
        'pageSize'           => 'PageSize',
        'regionId'           => 'RegionId',
        'startTime'          => 'StartTime',
    ];

    public function validate()
    {
    }

    public function toMap()
    {
        $res = [];
        if (null !== $this->acsProduct) {
            $res['AcsProduct'] = $this->acsProduct;
        }
        if (null !== $this->databaseInstanceId) {
            $res['DatabaseInstanceId'] = $this->databaseInstanceId;
        }
        if (null !== $this->endTime) {
            $res['EndTime'] = $this->endTime;
        }
        if (null !== $this->pageNumber) {
            $res['PageNumber'] = $this->pageNumber;
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
     * @return DescribeDatabaseSlowLogRecordsRequest
     */
    public static function fromMap($map = [])
    {
        $model = new self();
        if (isset($map['AcsProduct'])) {
            $model->acsProduct = $map['AcsProduct'];
        }
        if (isset($map['DatabaseInstanceId'])) {
            $model->databaseInstanceId = $map['DatabaseInstanceId'];
        }
        if (isset($map['EndTime'])) {
            $model->endTime = $map['EndTime'];
        }
        if (isset($map['PageNumber'])) {
            $model->pageNumber = $map['PageNumber'];
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
