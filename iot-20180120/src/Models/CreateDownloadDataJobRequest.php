<?php

// This file is auto-generated, don't edit it. Thanks.

namespace AlibabaCloud\SDK\Iot\V20180120\Models;

use AlibabaCloud\Tea\Model;

class CreateDownloadDataJobRequest extends Model
{
    /**
     * @var mixed[]
     */
    public $context;

    /**
     * @var string
     */
    public $downloadDataType;

    /**
     * @var int
     */
    public $endTime;

    /**
     * @var mixed[]
     */
    public $fileConfig;

    /**
     * @var string
     */
    public $iotInstanceId;

    /**
     * @var int
     */
    public $startTime;

    /**
     * @var string
     */
    public $tableName;
    protected $_name = [
        'context'          => 'Context',
        'downloadDataType' => 'DownloadDataType',
        'endTime'          => 'EndTime',
        'fileConfig'       => 'FileConfig',
        'iotInstanceId'    => 'IotInstanceId',
        'startTime'        => 'StartTime',
        'tableName'        => 'TableName',
    ];

    public function validate()
    {
        Model::validateRequired('downloadDataType', $this->downloadDataType, true);
        Model::validateRequired('tableName', $this->tableName, true);
    }

    public function toMap()
    {
        $res = [];
        if (null !== $this->context) {
            $res['Context'] = $this->context;
        }
        if (null !== $this->downloadDataType) {
            $res['DownloadDataType'] = $this->downloadDataType;
        }
        if (null !== $this->endTime) {
            $res['EndTime'] = $this->endTime;
        }
        if (null !== $this->fileConfig) {
            $res['FileConfig'] = $this->fileConfig;
        }
        if (null !== $this->iotInstanceId) {
            $res['IotInstanceId'] = $this->iotInstanceId;
        }
        if (null !== $this->startTime) {
            $res['StartTime'] = $this->startTime;
        }
        if (null !== $this->tableName) {
            $res['TableName'] = $this->tableName;
        }

        return $res;
    }

    /**
     * @param array $map
     *
     * @return CreateDownloadDataJobRequest
     */
    public static function fromMap($map = [])
    {
        $model = new self();
        if (isset($map['Context'])) {
            $model->context = $map['Context'];
        }
        if (isset($map['DownloadDataType'])) {
            $model->downloadDataType = $map['DownloadDataType'];
        }
        if (isset($map['EndTime'])) {
            $model->endTime = $map['EndTime'];
        }
        if (isset($map['FileConfig'])) {
            $model->fileConfig = $map['FileConfig'];
        }
        if (isset($map['IotInstanceId'])) {
            $model->iotInstanceId = $map['IotInstanceId'];
        }
        if (isset($map['StartTime'])) {
            $model->startTime = $map['StartTime'];
        }
        if (isset($map['TableName'])) {
            $model->tableName = $map['TableName'];
        }

        return $model;
    }
}
