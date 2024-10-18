<?php

// This file is auto-generated, don't edit it. Thanks.

namespace AlibabaCloud\SDK\EHPC\V20240730\Models\ListJobsRequest;

use AlibabaCloud\SDK\EHPC\V20240730\Models\ListJobsRequest\jobFilter\sortBy;
use AlibabaCloud\Tea\Model;

class jobFilter extends Model
{
    /**
     * @description The time when the job was last updated. The value is a UNIX timestamp representing the number of seconds that have elapsed since 1970-01-01T00:00:00Z.
     *
     * @example 1724123085
     *
     * @var string
     */
    public $createTimeEnd;

    /**
     * @description The time when the job started. The value is a UNIX timestamp representing the number of seconds that have elapsed since 1970-01-01T00:00:00Z.
     *
     * @example 1724122486
     *
     * @var string
     */
    public $createTimeStart;

    /**
     * @description The job name. Fuzzy match is supported.
     *
     * @example testjob
     *
     * @var string
     */
    public $jobName;

    /**
     * @description The job state. Valid values:
     *
     *   all: returns all jobs.
     *   finished: returns completed jobs.
     *   notfinish: returns uncompleted jobs.
     *
     * Default value: all.
     * @example all
     *
     * @var string
     */
    public $jobStatus;

    /**
     * @description The compute nodes that run the jobs.
     *
     * @var string[]
     */
    public $nodes;

    /**
     * @description The queues to which the jobs belong.
     *
     * @var string[]
     */
    public $queues;

    /**
     * @description The result sorting configurations.
     *
     * @var sortBy
     */
    public $sortBy;

    /**
     * @description The users that run the jobs.
     *
     * @var string[]
     */
    public $users;
    protected $_name = [
        'createTimeEnd'   => 'CreateTimeEnd',
        'createTimeStart' => 'CreateTimeStart',
        'jobName'         => 'JobName',
        'jobStatus'       => 'JobStatus',
        'nodes'           => 'Nodes',
        'queues'          => 'Queues',
        'sortBy'          => 'SortBy',
        'users'           => 'Users',
    ];

    public function validate()
    {
    }

    public function toMap()
    {
        $res = [];
        if (null !== $this->createTimeEnd) {
            $res['CreateTimeEnd'] = $this->createTimeEnd;
        }
        if (null !== $this->createTimeStart) {
            $res['CreateTimeStart'] = $this->createTimeStart;
        }
        if (null !== $this->jobName) {
            $res['JobName'] = $this->jobName;
        }
        if (null !== $this->jobStatus) {
            $res['JobStatus'] = $this->jobStatus;
        }
        if (null !== $this->nodes) {
            $res['Nodes'] = $this->nodes;
        }
        if (null !== $this->queues) {
            $res['Queues'] = $this->queues;
        }
        if (null !== $this->sortBy) {
            $res['SortBy'] = null !== $this->sortBy ? $this->sortBy->toMap() : null;
        }
        if (null !== $this->users) {
            $res['Users'] = $this->users;
        }

        return $res;
    }

    /**
     * @param array $map
     *
     * @return jobFilter
     */
    public static function fromMap($map = [])
    {
        $model = new self();
        if (isset($map['CreateTimeEnd'])) {
            $model->createTimeEnd = $map['CreateTimeEnd'];
        }
        if (isset($map['CreateTimeStart'])) {
            $model->createTimeStart = $map['CreateTimeStart'];
        }
        if (isset($map['JobName'])) {
            $model->jobName = $map['JobName'];
        }
        if (isset($map['JobStatus'])) {
            $model->jobStatus = $map['JobStatus'];
        }
        if (isset($map['Nodes'])) {
            if (!empty($map['Nodes'])) {
                $model->nodes = $map['Nodes'];
            }
        }
        if (isset($map['Queues'])) {
            if (!empty($map['Queues'])) {
                $model->queues = $map['Queues'];
            }
        }
        if (isset($map['SortBy'])) {
            $model->sortBy = sortBy::fromMap($map['SortBy']);
        }
        if (isset($map['Users'])) {
            if (!empty($map['Users'])) {
                $model->users = $map['Users'];
            }
        }

        return $model;
    }
}
