<?php

// This file is auto-generated, don't edit it. Thanks.

namespace AlibabaCloud\SDK\Gpdb\V20160503\Models;

use AlibabaCloud\Dara\Model;

class DescribeHadoopDataSourceResponseBody extends Model
{
    /**
     * @var string
     */
    public $createTime;
    /**
     * @var string
     */
    public $dataSourceDescription;
    /**
     * @var string
     */
    public $dataSourceDir;
    /**
     * @var string
     */
    public $dataSourceId;
    /**
     * @var string
     */
    public $dataSourceName;
    /**
     * @var string
     */
    public $dataSourceStatus;
    /**
     * @var string
     */
    public $dataSourceType;
    /**
     * @var string
     */
    public $emrInstanceId;
    /**
     * @var string
     */
    public $externalDataServiceId;
    /**
     * @var string
     */
    public $HDFSConf;
    /**
     * @var string
     */
    public $hadoopCoreConf;
    /**
     * @var string
     */
    public $hadoopCreateType;
    /**
     * @var string
     */
    public $hadoopHostsAddress;
    /**
     * @var string
     */
    public $hiveConf;
    /**
     * @var string
     */
    public $mapReduceConf;
    /**
     * @var string
     */
    public $modifyTime;
    /**
     * @var string
     */
    public $requestId;
    /**
     * @var string
     */
    public $statusMessage;
    /**
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
        'externalDataServiceId' => 'ExternalDataServiceId',
        'HDFSConf'              => 'HDFSConf',
        'hadoopCoreConf'        => 'HadoopCoreConf',
        'hadoopCreateType'      => 'HadoopCreateType',
        'hadoopHostsAddress'    => 'HadoopHostsAddress',
        'hiveConf'              => 'HiveConf',
        'mapReduceConf'         => 'MapReduceConf',
        'modifyTime'            => 'ModifyTime',
        'requestId'             => 'RequestId',
        'statusMessage'         => 'StatusMessage',
        'yarnConf'              => 'YarnConf',
    ];

    public function validate()
    {
        parent::validate();
    }

    public function toArray($noStream = false)
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

        if (null !== $this->externalDataServiceId) {
            $res['ExternalDataServiceId'] = $this->externalDataServiceId;
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

        if (null !== $this->modifyTime) {
            $res['ModifyTime'] = $this->modifyTime;
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

    public function toMap($noStream = false)
    {
        return $this->toArray($noStream);
    }

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

        if (isset($map['ExternalDataServiceId'])) {
            $model->externalDataServiceId = $map['ExternalDataServiceId'];
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

        if (isset($map['ModifyTime'])) {
            $model->modifyTime = $map['ModifyTime'];
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
