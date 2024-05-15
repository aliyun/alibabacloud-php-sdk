<?php

// This file is auto-generated, don't edit it. Thanks.

namespace AlibabaCloud\SDK\DAS\V20200116\Models;

use AlibabaCloud\Tea\Model;

class GetDeadLockDetailListRequest extends Model
{
    /**
     * @description The database name list.
     *
     * @example school1,school2
     *
     * @var string
     */
    public $dbNameList;

    /**
     * @description The end of the time range to query. Set this parameter to a UNIX timestamp representing the number of milliseconds that have elapsed since January 1, 1970, 00:00:00 UTC.
     *
     * This parameter is required.
     * @example 1702360530292
     *
     * @var string
     */
    public $endTime;

    /**
     * @description The instance ID.
     *
     * This parameter is required.
     * @example rm-2ze2016723b328gs2
     *
     * @var string
     */
    public $instanceId;

    /**
     * @description The page number. The value must be an integer that is greater than 0. Default value: 1.
     *
     * @example 1
     *
     * @var string
     */
    public $pageNo;

    /**
     * @description The number of entries per page. Default value: 10.
     *
     * @example 5
     *
     * @var string
     */
    public $pageSize;

    /**
     * @description The beginning of the time range to query. Set this parameter to a UNIX timestamp representing the number of milliseconds that have elapsed since January 1, 1970, 00:00:00 UTC.
     *
     * This parameter is required.
     * @example 1701755730292
     *
     * @var string
     */
    public $startTime;
    protected $_name = [
        'dbNameList' => 'DbNameList',
        'endTime'    => 'EndTime',
        'instanceId' => 'InstanceId',
        'pageNo'     => 'PageNo',
        'pageSize'   => 'PageSize',
        'startTime'  => 'StartTime',
    ];

    public function validate()
    {
    }

    public function toMap()
    {
        $res = [];
        if (null !== $this->dbNameList) {
            $res['DbNameList'] = $this->dbNameList;
        }
        if (null !== $this->endTime) {
            $res['EndTime'] = $this->endTime;
        }
        if (null !== $this->instanceId) {
            $res['InstanceId'] = $this->instanceId;
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
     * @return GetDeadLockDetailListRequest
     */
    public static function fromMap($map = [])
    {
        $model = new self();
        if (isset($map['DbNameList'])) {
            $model->dbNameList = $map['DbNameList'];
        }
        if (isset($map['EndTime'])) {
            $model->endTime = $map['EndTime'];
        }
        if (isset($map['InstanceId'])) {
            $model->instanceId = $map['InstanceId'];
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
