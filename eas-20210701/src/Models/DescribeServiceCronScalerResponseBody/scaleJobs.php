<?php

// This file is auto-generated, don't edit it. Thanks.

namespace AlibabaCloud\SDK\Eas\V20210701\Models\DescribeServiceCronScalerResponseBody;

use AlibabaCloud\Tea\Model;

class scaleJobs extends Model
{
    /**
     * @description The time when the most recent CronHPA job was created. The time is displayed in UTC.
     *
     * @example 2020-06-24T02:11:30Z
     *
     * @var string
     */
    public $createTime;

    /**
     * @description The time when the most recent CronHPA job ran. The time is displayed in UTC.
     *
     * @example 2022-02-24T06:31:00Z
     *
     * @var string
     */
    public $lastProbeTime;

    /**
     * @description The returned message.
     *
     * @example "cron hpa job scale-jobs-0 executed successfully. current replicas:3, desired replicas:2."
     *
     * @var string
     */
    public $message;

    /**
     * @description The name of the CronHPA job.
     *
     * @example scale-job-1
     *
     * @var string
     */
    public $name;

    /**
     * @description The cron expression that is used to configure the execution time of the CronHPA job.
     *
     * @example 0 18 * * * *
     *
     * @var string
     */
    public $schedule;

    /**
     * @description The status of the most recent CronHPA job.
     *
     * @example Succeed
     *
     * @var string
     */
    public $state;

    /**
     * @description The number of instances that you expect to configure for the CronHPA job.
     *
     * @example 1
     *
     * @var int
     */
    public $targetSize;
    protected $_name = [
        'createTime'    => 'CreateTime',
        'lastProbeTime' => 'LastProbeTime',
        'message'       => 'Message',
        'name'          => 'Name',
        'schedule'      => 'Schedule',
        'state'         => 'State',
        'targetSize'    => 'TargetSize',
    ];

    public function validate()
    {
    }

    public function toMap()
    {
        $res = [];
        if (null !== $this->createTime) {
            $res['CreateTime'] = $this->createTime;
        }
        if (null !== $this->lastProbeTime) {
            $res['LastProbeTime'] = $this->lastProbeTime;
        }
        if (null !== $this->message) {
            $res['Message'] = $this->message;
        }
        if (null !== $this->name) {
            $res['Name'] = $this->name;
        }
        if (null !== $this->schedule) {
            $res['Schedule'] = $this->schedule;
        }
        if (null !== $this->state) {
            $res['State'] = $this->state;
        }
        if (null !== $this->targetSize) {
            $res['TargetSize'] = $this->targetSize;
        }

        return $res;
    }

    /**
     * @param array $map
     *
     * @return scaleJobs
     */
    public static function fromMap($map = [])
    {
        $model = new self();
        if (isset($map['CreateTime'])) {
            $model->createTime = $map['CreateTime'];
        }
        if (isset($map['LastProbeTime'])) {
            $model->lastProbeTime = $map['LastProbeTime'];
        }
        if (isset($map['Message'])) {
            $model->message = $map['Message'];
        }
        if (isset($map['Name'])) {
            $model->name = $map['Name'];
        }
        if (isset($map['Schedule'])) {
            $model->schedule = $map['Schedule'];
        }
        if (isset($map['State'])) {
            $model->state = $map['State'];
        }
        if (isset($map['TargetSize'])) {
            $model->targetSize = $map['TargetSize'];
        }

        return $model;
    }
}
