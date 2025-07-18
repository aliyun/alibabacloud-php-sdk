<?php

// This file is auto-generated, don't edit it. Thanks.

namespace AlibabaCloud\SDK\Gpdb\V20160503\Models;

use AlibabaCloud\Tea\Model;

class DescribeStreamingDataSourceResponseBody extends Model
{
    /**
     * @description Creation time.
     *
     * @example 2019-09-08T16:00:00Z
     *
     * @var string
     */
    public $createTime;

    /**
     * @description Data source configuration information.
     *
     * @example {"brokers":"broker0:9091,broker1:9091","topic":"topic"}
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
     * @description Data source ID.
     *
     * @example 1
     *
     * @var string
     */
    public $dataSourceId;

    /**
     * @description Data source name.
     *
     * @example test-kafka
     *
     * @var string
     */
    public $dataSourceName;

    /**
     * @description Data source type, values include:
     * -  kafka
     *
     * @example kafka
     *
     * @var string
     */
    public $dataSourceType;

    /**
     * @description Service status message, for example, in case of an exception, it will show the reason for the exception. In normal Running state, this value is empty.
     *
     * @example ""
     *
     * @var string
     */
    public $errorMessage;

    /**
     * @description Request ID.
     *
     * @example B4CAF581-2AC7-41AD-8940-D56DF7AADF5B
     *
     * @var string
     */
    public $requestId;

    /**
     * @description External data service ID.
     *
     * @example 1
     *
     * @var int
     */
    public $serviceId;

    /**
     * @description Service status:
     *
     * - Initializing init
     *
     * - Running running
     *
     * - Exception exception
     *
     * @example running
     *
     * @var string
     */
    public $status;
    protected $_name = [
        'createTime' => 'CreateTime',
        'dataSourceConfig' => 'DataSourceConfig',
        'dataSourceDescription' => 'DataSourceDescription',
        'dataSourceId' => 'DataSourceId',
        'dataSourceName' => 'DataSourceName',
        'dataSourceType' => 'DataSourceType',
        'errorMessage' => 'ErrorMessage',
        'requestId' => 'RequestId',
        'serviceId' => 'ServiceId',
        'status' => 'Status',
    ];

    public function validate() {}

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
        if (null !== $this->requestId) {
            $res['RequestId'] = $this->requestId;
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
     * @return DescribeStreamingDataSourceResponseBody
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
        if (isset($map['RequestId'])) {
            $model->requestId = $map['RequestId'];
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
