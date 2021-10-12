<?php

// This file is auto-generated, don't edit it. Thanks.

namespace AlibabaCloud\SDK\Polardbx\V20200202\Models;

use AlibabaCloud\Tea\Model;

class DescribeInstanceDbPerformanceRequest extends Model
{
    /**
     * @var string
     */
    public $regionId;

    /**
     * @var string
     */
    public $dbInstanceName;

    /**
     * @var string
     */
    public $keys;

    /**
     * @var string
     */
    public $startTime;

    /**
     * @var string
     */
    public $endTime;

    /**
     * @var string
     */
    public $dbName;
    protected $_name = [
        'regionId'       => 'RegionId',
        'dbInstanceName' => 'DbInstanceName',
        'keys'           => 'Keys',
        'startTime'      => 'StartTime',
        'endTime'        => 'EndTime',
        'dbName'         => 'DbName',
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
        if (null !== $this->dbInstanceName) {
            $res['DbInstanceName'] = $this->dbInstanceName;
        }
        if (null !== $this->keys) {
            $res['Keys'] = $this->keys;
        }
        if (null !== $this->startTime) {
            $res['StartTime'] = $this->startTime;
        }
        if (null !== $this->endTime) {
            $res['EndTime'] = $this->endTime;
        }
        if (null !== $this->dbName) {
            $res['DbName'] = $this->dbName;
        }

        return $res;
    }

    /**
     * @param array $map
     *
     * @return DescribeInstanceDbPerformanceRequest
     */
    public static function fromMap($map = [])
    {
        $model = new self();
        if (isset($map['RegionId'])) {
            $model->regionId = $map['RegionId'];
        }
        if (isset($map['DbInstanceName'])) {
            $model->dbInstanceName = $map['DbInstanceName'];
        }
        if (isset($map['Keys'])) {
            $model->keys = $map['Keys'];
        }
        if (isset($map['StartTime'])) {
            $model->startTime = $map['StartTime'];
        }
        if (isset($map['EndTime'])) {
            $model->endTime = $map['EndTime'];
        }
        if (isset($map['DbName'])) {
            $model->dbName = $map['DbName'];
        }

        return $model;
    }
}
