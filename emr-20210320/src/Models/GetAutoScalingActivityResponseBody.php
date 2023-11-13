<?php

// This file is auto-generated, don't edit it. Thanks.

namespace AlibabaCloud\SDK\Emr\V20210320\Models;

use AlibabaCloud\SDK\Emr\V20210320\Models\GetAutoScalingActivityResponseBody\scalingActivity;
use AlibabaCloud\Tea\Model;

class GetAutoScalingActivityResponseBody extends Model
{
    /**
     * @description The request ID.
     *
     * @example DD6B1B2A-5837-5237-ABE4-FF0C8944****
     *
     * @var string
     */
    public $requestId;

    /**
     * @var scalingActivity
     */
    public $scalingActivity;
    protected $_name = [
        'requestId'       => 'RequestId',
        'scalingActivity' => 'ScalingActivity',
    ];

    public function validate()
    {
    }

    public function toMap()
    {
        $res = [];
        if (null !== $this->requestId) {
            $res['RequestId'] = $this->requestId;
        }
        if (null !== $this->scalingActivity) {
            $res['ScalingActivity'] = null !== $this->scalingActivity ? $this->scalingActivity->toMap() : null;
        }

        return $res;
    }

    /**
     * @param array $map
     *
     * @return GetAutoScalingActivityResponseBody
     */
    public static function fromMap($map = [])
    {
        $model = new self();
        if (isset($map['RequestId'])) {
            $model->requestId = $map['RequestId'];
        }
        if (isset($map['ScalingActivity'])) {
            $model->scalingActivity = scalingActivity::fromMap($map['ScalingActivity']);
        }

        return $model;
    }
}
