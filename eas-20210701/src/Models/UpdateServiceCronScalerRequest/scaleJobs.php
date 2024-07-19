<?php

// This file is auto-generated, don't edit it. Thanks.

namespace AlibabaCloud\SDK\Eas\V20210701\Models\UpdateServiceCronScalerRequest;

use AlibabaCloud\Tea\Model;

class scaleJobs extends Model
{
    /**
     * @description The name of the CronHPA job.
     *
     * @example scale-job-1
     *
     * @var string
     */
    public $name;

    /**
     * @description The cron expression that is used to configure the execution time of the CronHPA job. For more information about how to configure cron expressions, see **Description of special characters** in this topic.
     *
     * This parameter is required.
     * @example 0 18 * * * *
     *
     * @var string
     */
    public $schedule;

    /**
     * @description The number of instances that you want to configure for the CronHPA job.
     *
     * This parameter is required.
     * @example 2
     *
     * @var int
     */
    public $targetSize;
    protected $_name = [
        'name'       => 'Name',
        'schedule'   => 'Schedule',
        'targetSize' => 'TargetSize',
    ];

    public function validate()
    {
    }

    public function toMap()
    {
        $res = [];
        if (null !== $this->name) {
            $res['Name'] = $this->name;
        }
        if (null !== $this->schedule) {
            $res['Schedule'] = $this->schedule;
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
        if (isset($map['Name'])) {
            $model->name = $map['Name'];
        }
        if (isset($map['Schedule'])) {
            $model->schedule = $map['Schedule'];
        }
        if (isset($map['TargetSize'])) {
            $model->targetSize = $map['TargetSize'];
        }

        return $model;
    }
}
