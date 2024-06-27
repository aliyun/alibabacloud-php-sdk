<?php

// This file is auto-generated, don't edit it. Thanks.

namespace AlibabaCloud\SDK\Gpdb\V20160503\Models;

use AlibabaCloud\Tea\Model;

class ModifyStreamingDataSourceRequest extends Model
{
    /**
     * @description The instance ID.
     *
     * This parameter is required.
     * @example gp-k2j36a3172b102593
     *
     * @var string
     */
    public $DBInstanceId;

    /**
     * @description The configurations of the data source.
     *
     * @example {"brokers":"broker0:9091,broker1:9091","topic":"topic"}
     *
     * @var string
     */
    public $dataSourceConfig;

    /**
     * @description The description of the data source.
     *
     * @example test-kafka
     *
     * @var string
     */
    public $dataSourceDescription;

    /**
     * @description The data source ID.
     *
     * This parameter is required.
     * @example 57
     *
     * @var string
     */
    public $dataSourceId;

    /**
     * @description The region ID.
     *
     * >  You can call the [DescribeRegions](https://help.aliyun.com/document_detail/86912.html) operation to query the most recent region list.
     * @example cn-beijing
     *
     * @var string
     */
    public $regionId;
    protected $_name = [
        'DBInstanceId'          => 'DBInstanceId',
        'dataSourceConfig'      => 'DataSourceConfig',
        'dataSourceDescription' => 'DataSourceDescription',
        'dataSourceId'          => 'DataSourceId',
        'regionId'              => 'RegionId',
    ];

    public function validate()
    {
    }

    public function toMap()
    {
        $res = [];
        if (null !== $this->DBInstanceId) {
            $res['DBInstanceId'] = $this->DBInstanceId;
        }
        if (null !== $this->dataSourceConfig) {
            $res['DataSourceConfig'] = $this->dataSourceConfig;
        }
        if (null !== $this->dataSourceDescription) {
            $res['DataSourceDescription'] = $this->dataSourceDescription;
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
     * @return ModifyStreamingDataSourceRequest
     */
    public static function fromMap($map = [])
    {
        $model = new self();
        if (isset($map['DBInstanceId'])) {
            $model->DBInstanceId = $map['DBInstanceId'];
        }
        if (isset($map['DataSourceConfig'])) {
            $model->dataSourceConfig = $map['DataSourceConfig'];
        }
        if (isset($map['DataSourceDescription'])) {
            $model->dataSourceDescription = $map['DataSourceDescription'];
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
