<?php

// This file is auto-generated, don't edit it. Thanks.

namespace AlibabaCloud\SDK\Linkvisual\V20180120\Models\QueryRecordDownloadJobListResponseBody\data;

use AlibabaCloud\Tea\Model;

class jobList extends Model
{
    /**
     * @var int
     */
    public $beginTime;

    /**
     * @var int
     */
    public $endTime;

    /**
     * @var string
     */
    public $fileName;

    /**
     * @var string
     */
    public $iotId;

    /**
     * @var int
     */
    public $jobErrorCode;

    /**
     * @var string
     */
    public $jobId;

    /**
     * @var int
     */
    public $progress;

    /**
     * @var int
     */
    public $recordType;

    /**
     * @var int
     */
    public $status;

    /**
     * @var int
     */
    public $streamType;

    /**
     * @var int
     */
    public $type;

    /**
     * @var string
     */
    public $url;
    protected $_name = [
        'beginTime'    => 'BeginTime',
        'endTime'      => 'EndTime',
        'fileName'     => 'FileName',
        'iotId'        => 'IotId',
        'jobErrorCode' => 'JobErrorCode',
        'jobId'        => 'JobId',
        'progress'     => 'Progress',
        'recordType'   => 'RecordType',
        'status'       => 'Status',
        'streamType'   => 'StreamType',
        'type'         => 'Type',
        'url'          => 'Url',
    ];

    public function validate()
    {
    }

    public function toMap()
    {
        $res = [];
        if (null !== $this->beginTime) {
            $res['BeginTime'] = $this->beginTime;
        }
        if (null !== $this->endTime) {
            $res['EndTime'] = $this->endTime;
        }
        if (null !== $this->fileName) {
            $res['FileName'] = $this->fileName;
        }
        if (null !== $this->iotId) {
            $res['IotId'] = $this->iotId;
        }
        if (null !== $this->jobErrorCode) {
            $res['JobErrorCode'] = $this->jobErrorCode;
        }
        if (null !== $this->jobId) {
            $res['JobId'] = $this->jobId;
        }
        if (null !== $this->progress) {
            $res['Progress'] = $this->progress;
        }
        if (null !== $this->recordType) {
            $res['RecordType'] = $this->recordType;
        }
        if (null !== $this->status) {
            $res['Status'] = $this->status;
        }
        if (null !== $this->streamType) {
            $res['StreamType'] = $this->streamType;
        }
        if (null !== $this->type) {
            $res['Type'] = $this->type;
        }
        if (null !== $this->url) {
            $res['Url'] = $this->url;
        }

        return $res;
    }

    /**
     * @param array $map
     *
     * @return jobList
     */
    public static function fromMap($map = [])
    {
        $model = new self();
        if (isset($map['BeginTime'])) {
            $model->beginTime = $map['BeginTime'];
        }
        if (isset($map['EndTime'])) {
            $model->endTime = $map['EndTime'];
        }
        if (isset($map['FileName'])) {
            $model->fileName = $map['FileName'];
        }
        if (isset($map['IotId'])) {
            $model->iotId = $map['IotId'];
        }
        if (isset($map['JobErrorCode'])) {
            $model->jobErrorCode = $map['JobErrorCode'];
        }
        if (isset($map['JobId'])) {
            $model->jobId = $map['JobId'];
        }
        if (isset($map['Progress'])) {
            $model->progress = $map['Progress'];
        }
        if (isset($map['RecordType'])) {
            $model->recordType = $map['RecordType'];
        }
        if (isset($map['Status'])) {
            $model->status = $map['Status'];
        }
        if (isset($map['StreamType'])) {
            $model->streamType = $map['StreamType'];
        }
        if (isset($map['Type'])) {
            $model->type = $map['Type'];
        }
        if (isset($map['Url'])) {
            $model->url = $map['Url'];
        }

        return $model;
    }
}
