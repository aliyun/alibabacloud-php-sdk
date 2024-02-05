<?php

// This file is auto-generated, don't edit it. Thanks.

namespace AlibabaCloud\SDK\EHPC\V20230701\Models\ListJobsRequest;

use AlibabaCloud\Tea\Model;

class filter extends Model
{
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
     * @var int
     */
    public $timeCreatedAfter;

    /**
     * @var int
     */
    public $timeCreatedBefore;
    protected $_name = [
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
