<?php

// This file is auto-generated, don't edit it. Thanks.

namespace AlibabaCloud\SDK\Rds\V20140815\Models\DescribeDBInstancesByPerformanceResponseBody\items;

use AlibabaCloud\Tea\Model;

class DBInstancePerformance extends Model
{
    /**
     * @var string
     */
    public $CPUUsage;

    /**
     * @var string
     */
    public $DBInstanceDescription;

    /**
     * @var string
     */
    public $DBInstanceId;

    /**
     * @var string
     */
    public $diskUsage;

    /**
     * @var string
     */
    public $IOPSUsage;

    /**
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
