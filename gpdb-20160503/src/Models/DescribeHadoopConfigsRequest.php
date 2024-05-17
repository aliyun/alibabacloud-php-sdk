<?php

// This file is auto-generated, don't edit it. Thanks.

namespace AlibabaCloud\SDK\Gpdb\V20160503\Models;

use AlibabaCloud\Tea\Model;

class DescribeHadoopConfigsRequest extends Model
{
    /**
     * @description This parameter is required.
     *
     * @example hdfs-site
     *
     * @var string
     */
    public $configName;

    /**
     * @description This parameter is required.
     *
     * @example gp-xxxxxxx
     *
     * @var string
     */
    public $DBInstanceId;

    /**
     * @description This parameter is required.
     *
     * @example c-xxx
     *
     * @var string
     */
    public $emrInstanceId;

    /**
     * @var string
     */
    public $regionId;
    protected $_name = [
        'configName'    => 'ConfigName',
        'DBInstanceId'  => 'DBInstanceId',
        'emrInstanceId' => 'EmrInstanceId',
        'regionId'      => 'RegionId',
    ];

    public function validate()
    {
    }

    public function toMap()
    {
        $res = [];
        if (null !== $this->configName) {
            $res['ConfigName'] = $this->configName;
        }
        if (null !== $this->DBInstanceId) {
            $res['DBInstanceId'] = $this->DBInstanceId;
        }
        if (null !== $this->emrInstanceId) {
            $res['EmrInstanceId'] = $this->emrInstanceId;
        }
        if (null !== $this->regionId) {
            $res['RegionId'] = $this->regionId;
        }

        return $res;
    }

    /**
     * @param array $map
     *
     * @return DescribeHadoopConfigsRequest
     */
    public static function fromMap($map = [])
    {
        $model = new self();
        if (isset($map['ConfigName'])) {
            $model->configName = $map['ConfigName'];
        }
        if (isset($map['DBInstanceId'])) {
            $model->DBInstanceId = $map['DBInstanceId'];
        }
        if (isset($map['EmrInstanceId'])) {
            $model->emrInstanceId = $map['EmrInstanceId'];
        }
        if (isset($map['RegionId'])) {
            $model->regionId = $map['RegionId'];
        }

        return $model;
    }
}
