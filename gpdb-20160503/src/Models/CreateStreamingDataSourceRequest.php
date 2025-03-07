<?php

// This file is auto-generated, don't edit it. Thanks.

namespace AlibabaCloud\SDK\Gpdb\V20160503\Models;

use AlibabaCloud\Tea\Model;

class CreateStreamingDataSourceRequest extends Model
{
    /**
     * @description Instance ID.
     *
     * This parameter is required.
     * @example CreateExternalDataSource
     *
     * @var string
     */
    public $DBInstanceId;

    /**
     * @description Data source configuration information.
     *
     * This parameter is required.
     * @example {"broker_list":"broker0:9091,broker1:9091","topic":"topic"}
     *
     * @var string
     */
    public $dataSourceConfig;

    /**
     * @description Data source description.
     *
     * @example test-kafka
     *
     * @var string
     */
    public $dataSourceDescription;

    /**
     * @description Data source name.
     *
     * This parameter is required.
     * @example test-kafka
     *
     * @var string
     */
    public $dataSourceName;

    /**
     * @description Data source type. Values:
     * This parameter is required.
     * @example kafka
     *
     * @var string
     */
    public $dataSourceType;

    /**
     * @description Region ID.
     *
     * > You can view available region IDs through the [DescribeRegions](https://help.aliyun.com/document_detail/86912.html) interface.
     * @example cn-beijing
     *
     * @var string
     */
    public $regionId;

    /**
     * @description Real-time data service ID.
     *
     * This parameter is required.
     * @example 1
     *
     * @var int
     */
    public $serviceId;
    protected $_name = [
        'DBInstanceId'          => 'DBInstanceId',
        'dataSourceConfig'      => 'DataSourceConfig',
        'dataSourceDescription' => 'DataSourceDescription',
        'dataSourceName'        => 'DataSourceName',
        'dataSourceType'        => 'DataSourceType',
        'regionId'              => 'RegionId',
        'serviceId'             => 'ServiceId',
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
        if (null !== $this->dataSourceName) {
            $res['DataSourceName'] = $this->dataSourceName;
        }
        if (null !== $this->dataSourceType) {
            $res['DataSourceType'] = $this->dataSourceType;
        }
        if (null !== $this->regionId) {
            $res['RegionId'] = $this->regionId;
        }
        if (null !== $this->serviceId) {
            $res['ServiceId'] = $this->serviceId;
        }

        return $res;
    }

    /**
     * @param array $map
     *
     * @return CreateStreamingDataSourceRequest
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
        if (isset($map['DataSourceName'])) {
            $model->dataSourceName = $map['DataSourceName'];
        }
        if (isset($map['DataSourceType'])) {
            $model->dataSourceType = $map['DataSourceType'];
        }
        if (isset($map['RegionId'])) {
            $model->regionId = $map['RegionId'];
        }
        if (isset($map['ServiceId'])) {
            $model->serviceId = $map['ServiceId'];
        }

        return $model;
    }
}
