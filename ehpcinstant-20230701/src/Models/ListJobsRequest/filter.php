<?php

// This file is auto-generated, don't edit it. Thanks.

namespace AlibabaCloud\SDK\EhpcInstant\V20230701\Models\ListJobsRequest;

use AlibabaCloud\Tea\Model;

class filter extends Model
{
    /**
     * @example job-xxxx
     *
     * @var string
     */
    public $jobId;

    /**
     * @example testJob
     *
     * @var string
     */
    public $jobName;

    /**
     * @example Running
     *
     * @var string
     */
    public $status;

    /**
     * @example 1703819914
     *
     * @var int
     */
    public $timeCreatedAfter;

    /**
     * @example 1703820113
     *
     * @var int
     */
    public $timeCreatedBefore;
    protected $_name = [
        'jobId'             => 'JobId',
        'jobName'           => 'JobName',
        'status'            => 'Status',
        'timeCreatedAfter'  => 'TimeCreatedAfter',
        'timeCreatedBefore' => 'TimeCreatedBefore',
    ];

    public function validate()
    {
    }

    public function toMap()
    {
        $res = [];
        if (null !== $this->jobId) {
            $res['JobId'] = $this->jobId;
        }
        if (null !== $this->jobName) {
            $res['JobName'] = $this->jobName;
        }
        if (null !== $this->status) {
            $res['Status'] = $this->status;
        }
        if (null !== $this->timeCreatedAfter) {
            $res['TimeCreatedAfter'] = $this->timeCreatedAfter;
        }
        if (null !== $this->timeCreatedBefore) {
            $res['TimeCreatedBefore'] = $this->timeCreatedBefore;
        }

        return $res;
    }

    /**
     * @param array $map
     *
     * @return filter
     */
    public static function fromMap($map = [])
    {
        $model = new self();
        if (isset($map['JobId'])) {
            $model->jobId = $map['JobId'];
        }
        if (isset($map['JobName'])) {
            $model->jobName = $map['JobName'];
        }
        if (isset($map['Status'])) {
            $model->status = $map['Status'];
        }
        if (isset($map['TimeCreatedAfter'])) {
            $model->timeCreatedAfter = $map['TimeCreatedAfter'];
        }
        if (isset($map['TimeCreatedBefore'])) {
            $model->timeCreatedBefore = $map['TimeCreatedBefore'];
        }

        return $model;
    }
}
