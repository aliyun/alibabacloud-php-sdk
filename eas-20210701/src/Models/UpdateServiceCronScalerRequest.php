<?php

// This file is auto-generated, don't edit it. Thanks.

namespace AlibabaCloud\SDK\Eas\V20210701\Models;

use AlibabaCloud\SDK\Eas\V20210701\Models\UpdateServiceCronScalerRequest\scaleJobs;
use AlibabaCloud\Tea\Model;

class UpdateServiceCronScalerRequest extends Model
{
    /**
     * @description The points in time that are excluded when you schedule a CronHPA job. The points in time must be specified by using a cron expression.
     *
     * @var string[]
     */
    public $excludeDates;

    /**
     * @description The description of the CronHPA job.
     *
     * This parameter is required.
     *
     * @var scaleJobs[]
     */
    public $scaleJobs;
    protected $_name = [
        'excludeDates' => 'ExcludeDates',
        'scaleJobs' => 'ScaleJobs',
    ];

    public function validate() {}

    public function toMap()
    {
        $res = [];
        if (null !== $this->excludeDates) {
            $res['ExcludeDates'] = $this->excludeDates;
        }
        if (null !== $this->scaleJobs) {
            $res['ScaleJobs'] = [];
            if (null !== $this->scaleJobs && \is_array($this->scaleJobs)) {
                $n = 0;
                foreach ($this->scaleJobs as $item) {
                    $res['ScaleJobs'][$n++] = null !== $item ? $item->toMap() : $item;
                }
            }
        }

        return $res;
    }

    /**
     * @param array $map
     *
     * @return UpdateServiceCronScalerRequest
     */
    public static function fromMap($map = [])
    {
        $model = new self();
        if (isset($map['ExcludeDates'])) {
            if (!empty($map['ExcludeDates'])) {
                $model->excludeDates = $map['ExcludeDates'];
            }
        }
        if (isset($map['ScaleJobs'])) {
            if (!empty($map['ScaleJobs'])) {
                $model->scaleJobs = [];
                $n = 0;
                foreach ($map['ScaleJobs'] as $item) {
                    $model->scaleJobs[$n++] = null !== $item ? scaleJobs::fromMap($item) : $item;
                }
            }
        }

        return $model;
    }
}
