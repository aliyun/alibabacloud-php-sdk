<?php

// This file is auto-generated, don't edit it. Thanks.

namespace AlibabaCloud\SDK\Ess\V20140828\Models;

use AlibabaCloud\Tea\Model;

class DescribeScalingActivityDetailResponseBody extends Model
{
    /**
     * @var string
     */
    public $scalingActivityId;

    /**
     * @var string
     */
    public $detail;
    protected $_name = [
        'scalingActivityId' => 'ScalingActivityId',
        'detail'            => 'Detail',
    ];

    public function validate()
    {
    }

    public function toMap()
    {
        $res = [];
        if (null !== $this->scalingActivityId) {
            $res['ScalingActivityId'] = $this->scalingActivityId;
        }
        if (null !== $this->detail) {
            $res['Detail'] = $this->detail;
        }

        return $res;
    }

    /**
     * @param array $map
     *
     * @return DescribeScalingActivityDetailResponseBody
     */
    public static function fromMap($map = [])
    {
        $model = new self();
        if (isset($map['ScalingActivityId'])) {
            $model->scalingActivityId = $map['ScalingActivityId'];
        }
        if (isset($map['Detail'])) {
            $model->detail = $map['Detail'];
        }

        return $model;
    }
}
