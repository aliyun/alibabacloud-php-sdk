<?php

// This file is auto-generated, don't edit it. Thanks.

namespace AlibabaCloud\SDK\Eas\V20210701\Models\UpdateServiceCronScalerRequest;

use AlibabaCloud\Tea\Model;

class scaleJobs extends Model
{
    /**
     * @example scale-job-1
     *
     * @var string
     */
    public $name;

    /**
     * @example 0 18 * * * *
     *
     * @var string
     */
    public $schedule;

    /**
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
