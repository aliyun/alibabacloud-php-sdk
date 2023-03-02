<?php

// This file is auto-generated, don't edit it. Thanks.

namespace AlibabaCloud\SDK\Iot\V20180120\Models;

use AlibabaCloud\Tea\Model;

class CreateDownloadDataJobRequest extends Model
{
    /**
     * @example TABLE
     *
     * @var string
     */
    public $downloadDataType;

    /**
     * @example 1658406464534
     *
     * @var int
     */
    public $endTime;

    /**
     * @example {"fileName":"fileName01"}
     *
     * @var mixed[]
     */
    public $fileConfig;

    /**
     * @example iot-cn-npk1u******
     *
     * @var string
     */
    public $iotInstanceId;

    /**
     * @example 1658332800000
     *
     * @var int
     */
    public $startTime;

    /**
     * @example product_info
     *
     * @var string
     */
    public $tableName;
    protected $_name = [
        'downloadDataType' => 'DownloadDataType',
        'endTime'          => 'EndTime',
        'fileConfig'       => 'FileConfig',
        'iotInstanceId'    => 'IotInstanceId',
        'startTime'        => 'StartTime',
        'tableName'        => 'TableName',
    ];

    public function validate()
    {
    }

    public function toMap()
    {
        $res = [];
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
