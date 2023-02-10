<?php

// This file is auto-generated, don't edit it. Thanks.

namespace AlibabaCloud\SDK\Iot\V20180120\Models\ListJobResponseBody\data;

use AlibabaCloud\Tea\Model;

class data extends Model
{
    /**
     * @example TestDescription
     *
     * @var string
     */
    public $description;

    /**
     * @example Z20nyanW5****010001
     *
     * @var string
     */
    public $jobId;

    /**
     * @example MyTestJobOEfwJN
     *
     * @var string
     */
    public $jobName;

    /**
     * @example 1557062301656
     *
     * @var int
     */
    public $scheduledTime;

    /**
     * @example COMPLETED
     *
     * @var string
     */
    public $status;

    /**
     * @example CUSTOM_JOB
     *
     * @var string
     */
    public $type;

    /**
     * @example 2019-05-21T11:45:37.000Z
     *
     * @var string
     */
    public $utcCreate;

    /**
     * @example 2019-05-21T17:15:46.000Z
     *
     * @var string
     */
    public $utcModified;
    protected $_name = [
        'description'   => 'Description',
        'jobId'         => 'JobId',
        'jobName'       => 'JobName',
        'scheduledTime' => 'ScheduledTime',
        'status'        => 'Status',
        'type'          => 'Type',
        'utcCreate'     => 'UtcCreate',
        'utcModified'   => 'UtcModified',
    ];

    public function validate()
    {
    }

    public function toMap()
    {
        $res = [];
        if (null !== $this->description) {
            $res['Description'] = $this->description;
        }
        if (null !== $this->jobId) {
            $res['JobId'] = $this->jobId;
        }
        if (null !== $this->jobName) {
            $res['JobName'] = $this->jobName;
        }
        if (null !== $this->scheduledTime) {
            $res['ScheduledTime'] = $this->scheduledTime;
        }
        if (null !== $this->status) {
            $res['Status'] = $this->status;
        }
        if (null !== $this->type) {
            $res['Type'] = $this->type;
        }
        if (null !== $this->utcCreate) {
            $res['UtcCreate'] = $this->utcCreate;
        }
        if (null !== $this->utcModified) {
            $res['UtcModified'] = $this->utcModified;
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
        if (isset($map['Description'])) {
            $model->description = $map['Description'];
        }
        if (isset($map['JobId'])) {
            $model->jobId = $map['JobId'];
        }
        if (isset($map['JobName'])) {
            $model->jobName = $map['JobName'];
        }
        if (isset($map['ScheduledTime'])) {
            $model->scheduledTime = $map['ScheduledTime'];
        }
        if (isset($map['Status'])) {
            $model->status = $map['Status'];
        }
        if (isset($map['Type'])) {
            $model->type = $map['Type'];
        }
        if (isset($map['UtcCreate'])) {
            $model->utcCreate = $map['UtcCreate'];
        }
        if (isset($map['UtcModified'])) {
            $model->utcModified = $map['UtcModified'];
        }

        return $model;
    }
}
