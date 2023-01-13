<?php

// This file is auto-generated, don't edit it. Thanks.

namespace AlibabaCloud\SDK\Iot\V20180120\Models;

use AlibabaCloud\Tea\Model;

class CreateDownloadDataJobShrinkRequest extends Model
{
    /**
     * @var string
     */
    public $contextShrink;

    /**
     * @var string
     */
    public $downloadDataType;

    /**
     * @var int
     */
    public $endTime;

    /**
     * @var string
     */
    public $fileConfigShrink;

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
        'contextShrink'    => 'Context',
        'downloadDataType' => 'DownloadDataType',
        'endTime'          => 'EndTime',
        'fileConfigShrink' => 'FileConfig',
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
        if (null !== $this->contextShrink) {
            $res['Context'] = $this->contextShrink;
        }
        if (null !== $this->downloadDataType) {
            $res['DownloadDataType'] = $this->downloadDataType;
        }
        if (null !== $this->endTime) {
            $res['EndTime'] = $this->endTime;
        }
        if (null !== $this->fileConfigShrink) {
            $res['FileConfig'] = $this->fileConfigShrink;
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
     * @return CreateDownloadDataJobShrinkRequest
     */
    public static function fromMap($map = [])
    {
        $model = new self();
        if (isset($map['Context'])) {
            $model->contextShrink = $map['Context'];
        }
        if (isset($map['DownloadDataType'])) {
            $model->downloadDataType = $map['DownloadDataType'];
        }
        if (isset($map['EndTime'])) {
            $model->endTime = $map['EndTime'];
        }
        if (isset($map['FileConfig'])) {
            $model->fileConfigShrink = $map['FileConfig'];
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
