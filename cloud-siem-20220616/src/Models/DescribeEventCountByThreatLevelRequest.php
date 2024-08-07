<?php

// This file is auto-generated, don't edit it. Thanks.

namespace AlibabaCloud\SDK\Cloudsiem\V20220616\Models;

use AlibabaCloud\Tea\Model;

class DescribeEventCountByThreatLevelRequest extends Model
{
    /**
     * @description The end of the time range to query. Unit: milliseconds.
     *
     * @example 1577808000000
     *
     * @var int
     */
    public $endTime;

    /**
     * @description The region in which the data management center of the threat analysis feature resides. Specify this parameter based on the regions in which your assets reside. Valid values:
     *
     *   cn-hangzhou: Your assets reside in regions in China.
     *   ap-southeast-1: Your assets reside in regions outside China.
     *
     * @example cn-hangzhou
     *
     * @var string
     */
    public $regionId;

    /**
     * @description The ID of the member in the resource directory.
     *
     * @example 113091674488****
     *
     * @var int
     */
    public $roleFor;

    /**
     * @description The type of the view.
     *
     *   0: view of the current Alibaba Cloud account.
     *   1: view of all accounts for the enterprise.
     *
     * @example 1
     *
     * @var int
     */
    public $roleType;

    /**
     * @description The beginning of the time range to query. Unit: milliseconds.
     *
     * @example 1577808000000
     *
     * @var int
     */
    public $startTime;
    protected $_name = [
        'endTime'   => 'EndTime',
        'regionId'  => 'RegionId',
        'roleFor'   => 'RoleFor',
        'roleType'  => 'RoleType',
        'startTime' => 'StartTime',
    ];

    public function validate()
    {
    }

    public function toMap()
    {
        $res = [];
        if (null !== $this->endTime) {
            $res['EndTime'] = $this->endTime;
        }
        if (null !== $this->regionId) {
            $res['RegionId'] = $this->regionId;
        }
        if (null !== $this->roleFor) {
            $res['RoleFor'] = $this->roleFor;
        }
        if (null !== $this->roleType) {
            $res['RoleType'] = $this->roleType;
        }
        if (null !== $this->startTime) {
            $res['StartTime'] = $this->startTime;
        }

        return $res;
    }

    /**
     * @param array $map
     *
     * @return DescribeEventCountByThreatLevelRequest
     */
    public static function fromMap($map = [])
    {
        $model = new self();
        if (isset($map['EndTime'])) {
            $model->endTime = $map['EndTime'];
        }
        if (isset($map['RegionId'])) {
            $model->regionId = $map['RegionId'];
        }
        if (isset($map['RoleFor'])) {
            $model->roleFor = $map['RoleFor'];
        }
        if (isset($map['RoleType'])) {
            $model->roleType = $map['RoleType'];
        }
        if (isset($map['StartTime'])) {
            $model->startTime = $map['StartTime'];
        }

        return $model;
    }
}
