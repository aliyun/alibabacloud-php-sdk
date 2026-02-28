<?php

// This file is auto-generated, don't edit it. Thanks.

namespace AlibabaCloud\SDK\Iot\V20180120\Models;

use AlibabaCloud\Dara\Model;

class CreateDownloadDataJobRequest extends Model
{
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
        'downloadDataType' => 'DownloadDataType',
        'endTime' => 'EndTime',
        'fileConfig' => 'FileConfig',
        'iotInstanceId' => 'IotInstanceId',
        'startTime' => 'StartTime',
        'tableName' => 'TableName',
    ];

    public function validate()
    {
        if (\is_array($this->fileConfig)) {
            Model::validateArray($this->fileConfig);
        }
        parent::validate();
    }

    public function toArray($noStream = false)
    {
        $res = [];
        if (null !== $this->downloadDataType) {
            $res['DownloadDataType'] = $this->downloadDataType;
        }

        if (null !== $this->endTime) {
            $res['EndTime'] = $this->endTime;
        }

        if (null !== $this->fileConfig) {
            if (\is_array($this->fileConfig)) {
                $res['FileConfig'] = [];
                foreach ($this->fileConfig as $key1 => $value1) {
                    $res['FileConfig'][$key1] = $value1;
                }
            }
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

    public function toMap($noStream = false)
    {
        return $this->toArray($noStream);
    }

    public static function fromMap($map = [])
    {
        $model = new self();
        if (isset($map['DownloadDataType'])) {
            $model->downloadDataType = $map['DownloadDataType'];
        }

        if (isset($map['EndTime'])) {
            $model->endTime = $map['EndTime'];
        }

        if (isset($map['FileConfig'])) {
            if (!empty($map['FileConfig'])) {
                $model->fileConfig = [];
                foreach ($map['FileConfig'] as $key1 => $value1) {
                    $model->fileConfig[$key1] = $value1;
                }
            }
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
