<?php

// This file is auto-generated, don't edit it. Thanks.

namespace AlibabaCloud\SDK\Gpdb\V20160503\Models;

use AlibabaCloud\Tea\Model;

class DescribeHadoopDataSourceResponseBody extends Model
{
    /**
     * @example 2019-09-08T16:00:00Z
     *
     * @var string
     */
    public $createTime;

    /**
     * @example pxf for hdfs data source
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
     * @var string
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
     * @var string
     */
    public $dataSourceType;

    /**
     * @example c-1234567
     *
     * @var string
     */
    public $emrInstanceId;

    /**
     * @example xxxxxx
     *
     * @var string
     */
    public $HDFSConf;

    /**
     * @example xxxxxx
     *
     * @var string
     */
    public $hadoopCoreConf;

    /**
     * @example HDFS
     *
     * @var string
     */
    public $hadoopCreateType;

    /**
     * @example 127.0.0.1 localhost
     *
     * @var string
     */
    public $hadoopHostsAddress;

    /**
     * @example xxxxxx
     *
     * @var string
     */
    public $hiveConf;

    /**
     * @example xxxxxx
     *
     * @var string
     */
    public $mapReduceConf;

    /**
     * @example B4CAF581-2AC7-41AD-8940-D56DF7AADF5B
     *
     * @var string
     */
    public $requestId;

    /**
     * @example ""
     *
     * @var string
     */
    public $statusMessage;

    /**
     * @example xxxxxx
     *
     * @var string
     */
    public $yarnConf;
    protected $_name = [
        'createTime'            => 'CreateTime',
        'dataSourceDescription' => 'DataSourceDescription',
        'dataSourceDir'         => 'DataSourceDir',
        'dataSourceId'          => 'DataSourceId',
        'dataSourceName'        => 'DataSourceName',
        'dataSourceStatus'      => 'DataSourceStatus',
        'dataSourceType'        => 'DataSourceType',
        'emrInstanceId'         => 'EmrInstanceId',
        'HDFSConf'              => 'HDFSConf',
        'hadoopCoreConf'        => 'HadoopCoreConf',
        'hadoopCreateType'      => 'HadoopCreateType',
        'hadoopHostsAddress'    => 'HadoopHostsAddress',
        'hiveConf'              => 'HiveConf',
        'mapReduceConf'         => 'MapReduceConf',
        'requestId'             => 'RequestId',
        'statusMessage'         => 'StatusMessage',
        'yarnConf'              => 'YarnConf',
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
        if (null !== $this->emrInstanceId) {
            $res['EmrInstanceId'] = $this->emrInstanceId;
        }
        if (null !== $this->HDFSConf) {
            $res['HDFSConf'] = $this->HDFSConf;
        }
        if (null !== $this->hadoopCoreConf) {
            $res['HadoopCoreConf'] = $this->hadoopCoreConf;
        }
        if (null !== $this->hadoopCreateType) {
            $res['HadoopCreateType'] = $this->hadoopCreateType;
        }
        if (null !== $this->hadoopHostsAddress) {
            $res['HadoopHostsAddress'] = $this->hadoopHostsAddress;
        }
        if (null !== $this->hiveConf) {
            $res['HiveConf'] = $this->hiveConf;
        }
        if (null !== $this->mapReduceConf) {
            $res['MapReduceConf'] = $this->mapReduceConf;
        }
        if (null !== $this->requestId) {
            $res['RequestId'] = $this->requestId;
        }
        if (null !== $this->statusMessage) {
            $res['StatusMessage'] = $this->statusMessage;
        }
        if (null !== $this->yarnConf) {
            $res['YarnConf'] = $this->yarnConf;
        }

        return $res;
    }

    /**
     * @param array $map
     *
     * @return DescribeHadoopDataSourceResponseBody
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
        if (isset($map['EmrInstanceId'])) {
            $model->emrInstanceId = $map['EmrInstanceId'];
        }
        if (isset($map['HDFSConf'])) {
            $model->HDFSConf = $map['HDFSConf'];
        }
        if (isset($map['HadoopCoreConf'])) {
            $model->hadoopCoreConf = $map['HadoopCoreConf'];
        }
        if (isset($map['HadoopCreateType'])) {
            $model->hadoopCreateType = $map['HadoopCreateType'];
        }
        if (isset($map['HadoopHostsAddress'])) {
            $model->hadoopHostsAddress = $map['HadoopHostsAddress'];
        }
        if (isset($map['HiveConf'])) {
            $model->hiveConf = $map['HiveConf'];
        }
        if (isset($map['MapReduceConf'])) {
            $model->mapReduceConf = $map['MapReduceConf'];
        }
        if (isset($map['RequestId'])) {
            $model->requestId = $map['RequestId'];
        }
        if (isset($map['StatusMessage'])) {
            $model->statusMessage = $map['StatusMessage'];
        }
        if (isset($map['YarnConf'])) {
            $model->yarnConf = $map['YarnConf'];
        }

        return $model;
    }
}
