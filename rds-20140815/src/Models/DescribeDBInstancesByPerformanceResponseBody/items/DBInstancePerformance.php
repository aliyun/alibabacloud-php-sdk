<?php

// This file is auto-generated, don't edit it. Thanks.

namespace AlibabaCloud\SDK\Rds\V20140815\Models\DescribeDBInstancesByPerformanceResponseBody\items;

use AlibabaCloud\Tea\Model;

class DBInstancePerformance extends Model
{
    /**
     * @description The CPU utilization of the instance in percentage.
     *
     * @example 0.70
     *
     * @var string
     */
    public $CPUUsage;

    /**
     * @description The name of the instance.
     *
     * @example DatabaseTest
     *
     * @var string
     */
    public $DBInstanceDescription;

    /**
     * @description The ID of the instance.
     *
     * @example rm-uf6wjk5xxxxxx
     *
     * @var string
     */
    public $DBInstanceId;

    /**
     * @description The disk usage of the instance in percentage.
     *
     * @example 14.56
     *
     * @var string
     */
    public $diskUsage;

    /**
     * @description The IOPS usage of the instance in percentage.
     *
     * @example 0.15
     *
     * @var string
     */
    public $IOPSUsage;

    /**
     * @description The number of sessions.
     *
     * @example 0.10
     *
     * @var string
     */
    public $sessionUsage;
    protected $_name = [
        'CPUUsage'              => 'CPUUsage',
        'DBInstanceDescription' => 'DBInstanceDescription',
        'DBInstanceId'          => 'DBInstanceId',
        'diskUsage'             => 'DiskUsage',
        'IOPSUsage'             => 'IOPSUsage',
        'sessionUsage'          => 'SessionUsage',
    ];

    public function validate()
    {
    }

    public function toMap()
    {
        $res = [];
        if (null !== $this->CPUUsage) {
            $res['CPUUsage'] = $this->CPUUsage;
        }
        if (null !== $this->DBInstanceDescription) {
            $res['DBInstanceDescription'] = $this->DBInstanceDescription;
        }
        if (null !== $this->DBInstanceId) {
            $res['DBInstanceId'] = $this->DBInstanceId;
        }
        if (null !== $this->diskUsage) {
            $res['DiskUsage'] = $this->diskUsage;
        }
        if (null !== $this->IOPSUsage) {
            $res['IOPSUsage'] = $this->IOPSUsage;
        }
        if (null !== $this->sessionUsage) {
            $res['SessionUsage'] = $this->sessionUsage;
        }

        return $res;
    }

    /**
     * @param array $map
     *
     * @return DBInstancePerformance
     */
    public static function fromMap($map = [])
    {
        $model = new self();
        if (isset($map['CPUUsage'])) {
            $model->CPUUsage = $map['CPUUsage'];
        }
        if (isset($map['DBInstanceDescription'])) {
            $model->DBInstanceDescription = $map['DBInstanceDescription'];
        }
        if (isset($map['DBInstanceId'])) {
            $model->DBInstanceId = $map['DBInstanceId'];
        }
        if (isset($map['DiskUsage'])) {
            $model->diskUsage = $map['DiskUsage'];
        }
        if (isset($map['IOPSUsage'])) {
            $model->IOPSUsage = $map['IOPSUsage'];
        }
        if (isset($map['SessionUsage'])) {
            $model->sessionUsage = $map['SessionUsage'];
        }

        return $model;
    }
}
