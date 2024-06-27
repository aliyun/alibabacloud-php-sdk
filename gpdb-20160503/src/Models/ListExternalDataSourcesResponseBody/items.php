<?php

// This file is auto-generated, don't edit it. Thanks.

namespace AlibabaCloud\SDK\Gpdb\V20160503\Models\ListExternalDataSourcesResponseBody;

use AlibabaCloud\Tea\Model;

class items extends Model
{
    /**
     * @description The time when the service was created.
     *
     * @example 2019-09-08T16:00:00Z
     *
     * @var string
     */
    public $createTime;

    /**
     * @description The description of the data source.
     *
     * @example test
     *
     * @var string
     */
    public $dataSourceDescription;

    /**
     * @description The service directory in which Hadoop-related configuration files are stored.
     *
     * @example HadoopDir
     *
     * @var string
     */
    public $dataSourceDir;

    /**
     * @description The service ID.
     *
     * @example 123
     *
     * @var int
     */
    public $dataSourceId;

    /**
     * @description The name of the service.
     *
     * @example hdfs_pxf
     *
     * @var string
     */
    public $dataSourceName;

    /**
     * @description The status of the service. Valid values:
     *
     *   init
     *   running
     *   exception
     *
     * @example Running
     *
     * @var string
     */
    public $dataSourceStatus;

    /**
     * @description The type of the data source.
     *
     * @example HDFS
     *
     * @var string
     */
    public $dataSourceType;

    /**
     * @example 123
     *
     * @var int
     */
    public $externalDataServiceId;

    /**
     * @description The time when the service was last modified.
     *
     * @example 2019-10-08T16:00:00Z
     *
     * @var string
     */
    public $modifyTime;

    /**
     * @description The information about the service status. For example, if the service is in the exception state, the cause of the exception is displayed. If the service is in the running state, this parameter is left empty.
     *
     * @example ""
     *
     * @var string
     */
    public $statusMessage;
    protected $_name = [
        'createTime'            => 'CreateTime',
        'dataSourceDescription' => 'DataSourceDescription',
        'dataSourceDir'         => 'DataSourceDir',
        'dataSourceId'          => 'DataSourceId',
        'dataSourceName'        => 'DataSourceName',
        'dataSourceStatus'      => 'DataSourceStatus',
        'dataSourceType'        => 'DataSourceType',
        'externalDataServiceId' => 'ExternalDataServiceId',
        'modifyTime'            => 'ModifyTime',
        'statusMessage'         => 'StatusMessage',
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
        if (null !== $this->dataSourceDescription) {
            $res['DataSourceDescription'] = $this->dataSourceDescription;
        }
        if (null !== $this->dataSourceDir) {
            $res['DataSourceDir'] = $this->dataSourceDir;
        }
        if (null !== $this->dataSourceId) {
            $res['DataSourceId'] = $this->dataSourceId;
        }
        if (null !== $this->dataSourceName) {
            $res['DataSourceName'] = $this->dataSourceName;
        }
        if (null !== $this->dataSourceStatus) {
            $res['DataSourceStatus'] = $this->dataSourceStatus;
        }
        if (null !== $this->dataSourceType) {
            $res['DataSourceType'] = $this->dataSourceType;
        }
        if (null !== $this->externalDataServiceId) {
            $res['ExternalDataServiceId'] = $this->externalDataServiceId;
        }
        if (null !== $this->modifyTime) {
            $res['ModifyTime'] = $this->modifyTime;
        }
        if (null !== $this->statusMessage) {
            $res['StatusMessage'] = $this->statusMessage;
        }

        return $res;
    }

    /**
     * @param array $map
     *
     * @return items
     */
    public static function fromMap($map = [])
    {
        $model = new self();
        if (isset($map['CreateTime'])) {
            $model->createTime = $map['CreateTime'];
        }
        if (isset($map['DataSourceDescription'])) {
            $model->dataSourceDescription = $map['DataSourceDescription'];
        }
        if (isset($map['DataSourceDir'])) {
            $model->dataSourceDir = $map['DataSourceDir'];
        }
        if (isset($map['DataSourceId'])) {
            $model->dataSourceId = $map['DataSourceId'];
        }
        if (isset($map['DataSourceName'])) {
            $model->dataSourceName = $map['DataSourceName'];
        }
        if (isset($map['DataSourceStatus'])) {
            $model->dataSourceStatus = $map['DataSourceStatus'];
        }
        if (isset($map['DataSourceType'])) {
            $model->dataSourceType = $map['DataSourceType'];
        }
        if (isset($map['ExternalDataServiceId'])) {
            $model->externalDataServiceId = $map['ExternalDataServiceId'];
        }
        if (isset($map['ModifyTime'])) {
            $model->modifyTime = $map['ModifyTime'];
        }
        if (isset($map['StatusMessage'])) {
            $model->statusMessage = $map['StatusMessage'];
        }

        return $model;
    }
}
