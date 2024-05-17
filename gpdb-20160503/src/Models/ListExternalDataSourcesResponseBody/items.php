<?php

// This file is auto-generated, don't edit it. Thanks.

namespace AlibabaCloud\SDK\Gpdb\V20160503\Models\ListExternalDataSourcesResponseBody;

use AlibabaCloud\Tea\Model;

class items extends Model
{
    /**
     * @example 2019-09-08T16:00:00Z
     *
     * @var string
     */
    public $createTime;

    /**
     * @example test
     *
     * @var string
     */
    public $dataSourceDescription;

    /**
     * @example HadoopDir
     *
     * @var string
     */
    public $dataSourceDir;

    /**
     * @example 123
     *
     * @var int
     */
    public $dataSourceId;

    /**
     * @example hdfs_pxf
     *
     * @var string
     */
    public $dataSourceName;

    /**
     * @example Running
     *
     * @var string
     */
    public $dataSourceStatus;

    /**
     * @example HDFS
     *
     * @var string
     */
    public $dataSourceType;

    /**
     * @var int
     */
    public $externalDataServiceId;

    /**
     * @example 2019-10-08T16:00:00Z
     *
     * @var string
     */
    public $modifyTime;

    /**
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
