<?php

// This file is auto-generated, don't edit it. Thanks.

namespace AlibabaCloud\SDK\Gpdb\V20160503\Models;

use AlibabaCloud\Tea\Model;

class ModifyStreamingDataSourceRequest extends Model
{
    /**
     * @description This parameter is required.
     *
     * @example gp-k2j36a3172b102593
     *
     * @var string
     */
    public $DBInstanceId;

    /**
     * @example {"brokers":"broker0:9091,broker1:9091","topic":"topic"}
     *
     * @var string
     */
    public $dataSourceConfig;

    /**
     * @example test-kafka
     *
     * @var string
     */
    public $dataSourceDescription;

    /**
     * @description This parameter is required.
     *
     * @example 57
     *
     * @var string
     */
    public $dataSourceId;

    /**
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
