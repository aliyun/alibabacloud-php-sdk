<?php

// This file is auto-generated, don't edit it. Thanks.

namespace AlibabaCloud\SDK\Gpdb\V20160503\Models;

use AlibabaCloud\Tea\Model;

class CheckHadoopDataSourceRequest extends Model
{
    /**
     * @description The Hadoop path that you want to check.
     *
     * This parameter is required.
     * @example tmp
     *
     * @var string
     */
    public $checkDir;

    /**
     * @description The instance ID.
     *
     * This parameter is required.
     * @example gp-xxxxxxx
     *
     * @var string
     */
    public $DBInstanceId;

    /**
     * @description The data source ID.
     *
     * This parameter is required.
     * @example 123
     *
     * @var string
     */
    public $dataSourceId;

    /**
     * @description The region ID.
     *
     * >  You can call the [DescribeRegions](https://help.aliyun.com/document_detail/86912.html) operation to query the most recent region list.
     * @example cn-hangzhou
     *
     * @var string
     */
    public $regionId;
    protected $_name = [
        'checkDir'     => 'CheckDir',
        'DBInstanceId' => 'DBInstanceId',
        'dataSourceId' => 'DataSourceId',
        'regionId'     => 'RegionId',
    ];

    public function validate()
    {
    }

    public function toMap()
    {
        $res = [];
        if (null !== $this->checkDir) {
            $res['CheckDir'] = $this->checkDir;
        }
        if (null !== $this->DBInstanceId) {
            $res['DBInstanceId'] = $this->DBInstanceId;
        }
        if (null !== $this->dataSourceId) {
            $res['DataSourceId'] = $this->dataSourceId;
        }
        if (null !== $this->regionId) {
            $res['RegionId'] = $this->regionId;
        }

        return $res;
    }

    /**
     * @param array $map
     *
     * @return CheckHadoopDataSourceRequest
     */
    public static function fromMap($map = [])
    {
        $model = new self();
        if (isset($map['CheckDir'])) {
            $model->checkDir = $map['CheckDir'];
        }
        if (isset($map['DBInstanceId'])) {
            $model->DBInstanceId = $map['DBInstanceId'];
        }
        if (isset($map['DataSourceId'])) {
            $model->dataSourceId = $map['DataSourceId'];
        }
        if (isset($map['RegionId'])) {
            $model->regionId = $map['RegionId'];
        }

        return $model;
    }
}
