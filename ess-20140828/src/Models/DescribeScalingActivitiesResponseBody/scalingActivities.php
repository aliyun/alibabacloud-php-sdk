<?php

// This file is auto-generated, don't edit it. Thanks.

namespace AlibabaCloud\SDK\Ess\V20140828\Models\DescribeScalingActivitiesResponseBody;

use AlibabaCloud\SDK\Ess\V20140828\Models\DescribeScalingActivitiesResponseBody\scalingActivities\scalingActivity;
use AlibabaCloud\Tea\Model;

class scalingActivities extends Model
{
    /**
     * @var scalingActivity[]
     */
    public $scalingActivity;
    protected $_name = [
        'scalingActivity' => 'ScalingActivity',
    ];

    public function validate()
    {
    }

    public function toMap()
    {
        $res = [];
        if (null !== $this->scalingActivity) {
            $res['ScalingActivity'] = [];
            if (null !== $this->scalingActivity && \is_array($this->scalingActivity)) {
                $n = 0;
                foreach ($this->scalingActivity as $item) {
                    $res['ScalingActivity'][$n++] = null !== $item ? $item->toMap() : $item;
                }
            }
        }

        return $res;
    }

    /**
     * @param array $map
     *
     * @return scalingActivities
     */
    public static function fromMap($map = [])
    {
        $model = new self();
        if (isset($map['ScalingActivity'])) {
            if (!empty($map['ScalingActivity'])) {
                $model->scalingActivity = [];
                $n                      = 0;
                foreach ($map['ScalingActivity'] as $item) {
                    $model->scalingActivity[$n++] = null !== $item ? scalingActivity::fromMap($item) : $item;
                }
            }
        }

        return $model;
    }
}
