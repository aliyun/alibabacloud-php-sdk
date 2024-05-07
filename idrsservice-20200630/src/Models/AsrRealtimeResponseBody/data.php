<?php

// This file is auto-generated, don't edit it. Thanks.

namespace AlibabaCloud\SDK\Idrsservice\V20200630\Models\AsrRealtimeResponseBody;

use AlibabaCloud\Tea\Model;

class data extends Model
{
    /**
     * @example 1649952000000
     *
     * @var int
     */
    public $beginTime;

    /**
     * @example OK
     *
     * @var int
     */
    public $code;

    /**
     * @example 0.78
     *
     * @var float
     */
    public $confidence;

    /**
     * @example f3bd31c0-0001-4b4b-977d-7cfa64b5***
     *
     * @var string
     */
    public $id;

    /**
     * @var string
     */
    public $message;

    /**
     * @example default
     *
     * @var string
     */
    public $name;

    /**
     * @var string
     */
    public $result;

    /**
     * @example completed
     *
     * @var string
     */
    public $status;

    /**
     * @example 368cfa55-2364-4d79-aeb4-c0956c4a4***
     *
     * @var string
     */
    public $taskId;

    /**
     * @example 1638243477
     *
     * @var int
     */
    public $time;
    protected $_name = [
        'beginTime'  => 'BeginTime',
        'code'       => 'Code',
        'confidence' => 'Confidence',
        'id'         => 'Id',
        'message'    => 'Message',
        'name'       => 'Name',
        'result'     => 'Result',
        'status'     => 'Status',
        'taskId'     => 'TaskId',
        'time'       => 'Time',
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
        if (null !== $this->code) {
            $res['Code'] = $this->code;
        }
        if (null !== $this->confidence) {
            $res['Confidence'] = $this->confidence;
        }
        if (null !== $this->id) {
            $res['Id'] = $this->id;
        }
        if (null !== $this->message) {
            $res['Message'] = $this->message;
        }
        if (null !== $this->name) {
            $res['Name'] = $this->name;
        }
        if (null !== $this->result) {
            $res['Result'] = $this->result;
        }
        if (null !== $this->status) {
            $res['Status'] = $this->status;
        }
        if (null !== $this->taskId) {
            $res['TaskId'] = $this->taskId;
        }
        if (null !== $this->time) {
            $res['Time'] = $this->time;
        }

        return $res;
    }

    /**
     * @param array $map
     *
     * @return data
     */
    public static function fromMap($map = [])
    {
        $model = new self();
        if (isset($map['BeginTime'])) {
            $model->beginTime = $map['BeginTime'];
        }
        if (isset($map['Code'])) {
            $model->code = $map['Code'];
        }
        if (isset($map['Confidence'])) {
            $model->confidence = $map['Confidence'];
        }
        if (isset($map['Id'])) {
            $model->id = $map['Id'];
        }
        if (isset($map['Message'])) {
            $model->message = $map['Message'];
        }
        if (isset($map['Name'])) {
            $model->name = $map['Name'];
        }
        if (isset($map['Result'])) {
            $model->result = $map['Result'];
        }
        if (isset($map['Status'])) {
            $model->status = $map['Status'];
        }
        if (isset($map['TaskId'])) {
            $model->taskId = $map['TaskId'];
        }
        if (isset($map['Time'])) {
            $model->time = $map['Time'];
        }

        return $model;
    }
}
