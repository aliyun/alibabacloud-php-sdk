<?php

// This file is auto-generated, don't edit it. Thanks.

namespace AlibabaCloud\SDK\Emr\V20210320\Models;

use AlibabaCloud\Dara\Model;
use AlibabaCloud\SDK\Emr\V20210320\Models\GetAutoScalingActivityResponseBody\scalingActivity;

class GetAutoScalingActivityResponseBody extends Model
{
    /**
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
        if (null !== $this->scalingActivity) {
            $this->scalingActivity->validate();
        }
        parent::validate();
    }

    public function toArray($noStream = false)
    {
        $res = [];
        if (null !== $this->requestId) {
            $res['RequestId'] = $this->requestId;
        }

        if (null !== $this->scalingActivity) {
            $res['ScalingActivity'] = null !== $this->scalingActivity ? $this->scalingActivity->toArray($noStream) : $this->scalingActivity;
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
        if (isset($map['RequestId'])) {
            $model->requestId = $map['RequestId'];
        }

        if (isset($map['ScalingActivity'])) {
            $model->scalingActivity = scalingActivity::fromMap($map['ScalingActivity']);
        }

        return $model;
    }
}
