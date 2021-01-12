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
    public $IOPSUsage;

    /**
     * @var string
     */
    public $diskUsage;

    /**
     * @var string
     */
    public $sessionUsage;

    /**
     * @var string
     */
    public $DBInstanceId;

    /**
     * @var string
     */
    public $DBInstanceDescription;
    protected $_name = [
        'CPUUsage'              => 'CPUUsage',
        'IOPSUsage'             => 'IOPSUsage',
        'diskUsage'             => 'DiskUsage',
        'sessionUsage'          => 'SessionUsage',
        'DBInstanceId'          => 'DBInstanceId',
        'DBInstanceDescription' => 'DBInstanceDescription',
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
        if (null !== $this->IOPSUsage) {
            $res['IOPSUsage'] = $this->IOPSUsage;
        }
        if (null !== $this->diskUsage) {
            $res['DiskUsage'] = $this->diskUsage;
        }
        if (null !== $this->sessionUsage) {
            $res['SessionUsage'] = $this->sessionUsage;
        }
        if (null !== $this->DBInstanceId) {
            $res['DBInstanceId'] = $this->DBInstanceId;
        }
        if (null !== $this->DBInstanceDescription) {
            $res['DBInstanceDescription'] = $this->DBInstanceDescription;
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
        if (isset($map['IOPSUsage'])) {
            $model->IOPSUsage = $map['IOPSUsage'];
        }
        if (isset($map['DiskUsage'])) {
            $model->diskUsage = $map['DiskUsage'];
        }
        if (isset($map['SessionUsage'])) {
            $model->sessionUsage = $map['SessionUsage'];
        }
        if (isset($map['DBInstanceId'])) {
            $model->DBInstanceId = $map['DBInstanceId'];
        }
        if (isset($map['DBInstanceDescription'])) {
            $model->DBInstanceDescription = $map['DBInstanceDescription'];
        }

        return $model;
    }
}
