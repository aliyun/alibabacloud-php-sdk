<?php

// This file is auto-generated, don't edit it. Thanks.

namespace AlibabaCloud\SDK\Selectdb\V20230522\Models;

use AlibabaCloud\Tea\Model;

class DescribeDBClusterConfigRequest extends Model
{
    /**
     * @description The configuration file to be modified.
     *
     *   For a compute cluster, set the value to be.conf.
     *   For a frontend (FE) cluster, set the value to fe.conf.
     *
     * This parameter is required.
     * @example be.conf
     *
     * @var string
     */
    public $configKey;

    /**
     * @description The cluster ID.
     *
     * This parameter is required.
     * @example selectdb-cn-7213c8yvv09-be
     *
     * @var string
     */
    public $DBClusterId;

    /**
     * @description The instance ID.
     *
     * This parameter is required.
     * @example selectdb-cn-7213cjv****
     *
     * @var string
     */
    public $DBInstanceId;

    /**
     * @description The region ID.
     *
     * @example cn-hangzhou
     *
     * @var string
     */
    public $regionId;
    protected $_name = [
        'configKey'    => 'ConfigKey',
        'DBClusterId'  => 'DBClusterId',
        'DBInstanceId' => 'DBInstanceId',
        'regionId'     => 'RegionId',
    ];

    public function validate()
    {
    }

    public function toMap()
    {
        $res = [];
        if (null !== $this->configKey) {
            $res['ConfigKey'] = $this->configKey;
        }
        if (null !== $this->DBClusterId) {
            $res['DBClusterId'] = $this->DBClusterId;
        }
        if (null !== $this->DBInstanceId) {
            $res['DBInstanceId'] = $this->DBInstanceId;
        }
        if (null !== $this->regionId) {
            $res['RegionId'] = $this->regionId;
        }

        return $res;
    }

    /**
     * @param array $map
     *
     * @return DescribeDBClusterConfigRequest
     */
    public static function fromMap($map = [])
    {
        $model = new self();
        if (isset($map['ConfigKey'])) {
            $model->configKey = $map['ConfigKey'];
        }
        if (isset($map['DBClusterId'])) {
            $model->DBClusterId = $map['DBClusterId'];
        }
        if (isset($map['DBInstanceId'])) {
            $model->DBInstanceId = $map['DBInstanceId'];
        }
        if (isset($map['RegionId'])) {
            $model->regionId = $map['RegionId'];
        }

        return $model;
    }
}
