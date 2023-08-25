<?php

// This file is auto-generated, don't edit it. Thanks.

namespace AlibabaCloud\SDK\Adb\V20211201\Models;

use AlibabaCloud\Tea\Model;

class DescribeDiagnosisDimensionsRequest extends Model
{
    /**
     * @example amv-bt6u59zcmd945****
     *
     * @var string
     */
    public $DBClusterId;

    /**
     * @example 1625220213000
     *
     * @var string
     */
    public $endTime;

    /**
     * @example zh-CN
     *
     * @var string
     */
    public $lang;

    /**
     * @example {"Type":"maxCost","Value":"100"}
     *
     * @var string
     */
    public $queryCondition;

    /**
     * @example cn-hangzhou
     *
     * @var string
     */
    public $regionId;

    /**
     * @example 1625220210000
     *
     * @var string
     */
    public $startTime;
    protected $_name = [
        'DBClusterId'    => 'DBClusterId',
        'endTime'        => 'EndTime',
        'lang'           => 'Lang',
        'queryCondition' => 'QueryCondition',
        'regionId'       => 'RegionId',
        'startTime'      => 'StartTime',
    ];

    public function validate()
    {
    }

    public function toMap()
    {
        $res = [];
        if (null !== $this->DBClusterId) {
            $res['DBClusterId'] = $this->DBClusterId;
        }
        if (null !== $this->endTime) {
            $res['EndTime'] = $this->endTime;
        }
        if (null !== $this->lang) {
            $res['Lang'] = $this->lang;
        }
        if (null !== $this->queryCondition) {
            $res['QueryCondition'] = $this->queryCondition;
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
     * @return DescribeDiagnosisDimensionsRequest
     */
    public static function fromMap($map = [])
    {
        $model = new self();
        if (isset($map['DBClusterId'])) {
            $model->DBClusterId = $map['DBClusterId'];
        }
        if (isset($map['EndTime'])) {
            $model->endTime = $map['EndTime'];
        }
        if (isset($map['Lang'])) {
            $model->lang = $map['Lang'];
        }
        if (isset($map['QueryCondition'])) {
            $model->queryCondition = $map['QueryCondition'];
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
