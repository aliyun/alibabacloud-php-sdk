<?php

// This file is auto-generated, don't edit it. Thanks.

namespace AlibabaCloud\SDK\Gpdb\V20160503\Models\ListStreamingDataSourcesResponseBody;

use AlibabaCloud\Tea\Model;

class dataSourceItems extends Model
{
    /**
     * @example 2019-09-08T16:00:00Z
     *
     * @var string
     */
    public $createTime;

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
     * @example 1
     *
     * @var int
     */
    public $dataSourceId;

    /**
     * @example test-kafka
     *
     * @var string
     */
    public $dataSourceName;

    /**
     * @example kafka
     *
     * @var string
     */
    public $dataSourceType;

    /**
     * @example ""
     *
     * @var string
     */
    public $errorMessage;

    /**
     * @example 2019-09-08T17:00:00Z
     *
     * @var string
     */
    public $modifyTime;

    /**
     * @example 1
     *
     * @var int
     */
    public $serviceId;

    /**
     * @example running
     *
     * @var string
     */
    public $status;
    protected $_name = [
        'createTime'            => 'CreateTime',
        'dataSourceConfig'      => 'DataSourceConfig',
        'dataSourceDescription' => 'DataSourceDescription',
        'dataSourceId'          => 'DataSourceId',
        'dataSourceName'        => 'DataSourceName',
        'dataSourceType'        => 'DataSourceType',
        'errorMessage'          => 'ErrorMessage',
        'modifyTime'            => 'ModifyTime',
        'serviceId'             => 'ServiceId',
        'status'                => 'Status',
    ];

    public function validate()
    {
    }

    public function toMap()
    {
        $res = [];
        if (null !== $this->createTime) {
            $res['CreateTime'] = $this->createTime;
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
        if (null !== $this->dataSourceName) {
            $res['DataSourceName'] = $this->dataSourceName;
        }
        if (null !== $this->dataSourceType) {
            $res['DataSourceType'] = $this->dataSourceType;
        }
        if (null !== $this->errorMessage) {
            $res['ErrorMessage'] = $this->errorMessage;
        }
        if (null !== $this->modifyTime) {
            $res['ModifyTime'] = $this->modifyTime;
        }
        if (null !== $this->serviceId) {
            $res['ServiceId'] = $this->serviceId;
        }
        if (null !== $this->status) {
            $res['Status'] = $this->status;
        }

        return $res;
    }

    /**
     * @param array $map
     *
     * @return dataSourceItems
     */
    public static function fromMap($map = [])
    {
        $model = new self();
        if (isset($map['CreateTime'])) {
            $model->createTime = $map['CreateTime'];
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
        if (isset($map['DataSourceName'])) {
            $model->dataSourceName = $map['DataSourceName'];
        }
        if (isset($map['DataSourceType'])) {
            $model->dataSourceType = $map['DataSourceType'];
        }
        if (isset($map['ErrorMessage'])) {
            $model->errorMessage = $map['ErrorMessage'];
        }
        if (isset($map['ModifyTime'])) {
            $model->modifyTime = $map['ModifyTime'];
        }
        if (isset($map['ServiceId'])) {
            $model->serviceId = $map['ServiceId'];
        }
        if (isset($map['Status'])) {
            $model->status = $map['Status'];
        }

        return $model;
    }
}
