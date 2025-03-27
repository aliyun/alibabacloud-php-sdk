<?php

// This file is auto-generated, don't edit it. Thanks.

namespace AlibabaCloud\SDK\Eas\V20210701\Models;

use AlibabaCloud\Dara\Model;
use AlibabaCloud\SDK\Eas\V20210701\Models\UpdateServiceCronScalerRequest\scaleJobs;

class UpdateServiceCronScalerRequest extends Model
{
    /**
     * @var string[]
     */
    public $excludeDates;

    /**
     * @var scaleJobs[]
     */
    public $scaleJobs;
    protected $_name = [
        'excludeDates' => 'ExcludeDates',
        'scaleJobs' => 'ScaleJobs',
    ];

    public function validate()
    {
        if (\is_array($this->excludeDates)) {
            Model::validateArray($this->excludeDates);
        }
        if (\is_array($this->scaleJobs)) {
            Model::validateArray($this->scaleJobs);
        }
        parent::validate();
    }

    public function toArray($noStream = false)
    {
        $res = [];
        if (null !== $this->excludeDates) {
            if (\is_array($this->excludeDates)) {
                $res['ExcludeDates'] = [];
                $n1 = 0;
                foreach ($this->excludeDates as $item1) {
                    $res['ExcludeDates'][$n1++] = $item1;
                }
            }
        }

        if (null !== $this->scaleJobs) {
            if (\is_array($this->scaleJobs)) {
                $res['ScaleJobs'] = [];
                $n1 = 0;
                foreach ($this->scaleJobs as $item1) {
                    $res['ScaleJobs'][$n1++] = null !== $item1 ? $item1->toArray($noStream) : $item1;
                }
            }
        }

        return $res;
    }

    public function toMap($noStream = false)
    {
        return $this->toArray($noStream);
    }

    public static function fromMap($map = [])
    {
        $model = new self();
        if (isset($map['ExcludeDates'])) {
            if (!empty($map['ExcludeDates'])) {
                $model->excludeDates = [];
                $n1 = 0;
                foreach ($map['ExcludeDates'] as $item1) {
                    $model->excludeDates[$n1++] = $item1;
                }
            }
        }

        if (isset($map['ScaleJobs'])) {
            if (!empty($map['ScaleJobs'])) {
                $model->scaleJobs = [];
                $n1 = 0;
                foreach ($map['ScaleJobs'] as $item1) {
                    $model->scaleJobs[$n1++] = scaleJobs::fromMap($item1);
                }
            }
        }

        return $model;
    }
}
