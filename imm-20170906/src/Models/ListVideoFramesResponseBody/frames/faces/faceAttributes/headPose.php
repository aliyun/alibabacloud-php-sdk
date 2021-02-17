<?php

// This file is auto-generated, don't edit it. Thanks.

namespace AlibabaCloud\SDK\Imm\V20170906\Models\ListVideoFramesResponseBody\frames\faces\faceAttributes;

use AlibabaCloud\Tea\Model;

class headPose extends Model
{
    /**
     * @var float
     */
    public $pitch;

    /**
     * @var float
     */
    public $roll;

    /**
     * @var float
     */
    public $yaw;
    protected $_name = [
        'pitch' => 'Pitch',
        'roll'  => 'Roll',
        'yaw'   => 'Yaw',
    ];

    public function validate()
    {
    }

    public function toMap()
    {
        $res = [];
        if (null !== $this->pitch) {
            $res['Pitch'] = $this->pitch;
        }
        if (null !== $this->roll) {
            $res['Roll'] = $this->roll;
        }
        if (null !== $this->yaw) {
            $res['Yaw'] = $this->yaw;
        }

        return $res;
    }

    /**
     * @param array $map
     *
     * @return headPose
     */
    public static function fromMap($map = [])
    {
        $model = new self();
        if (isset($map['Pitch'])) {
            $model->pitch = $map['Pitch'];
        }
        if (isset($map['Roll'])) {
            $model->roll = $map['Roll'];
        }
        if (isset($map['Yaw'])) {
            $model->yaw = $map['Yaw'];
        }

        return $model;
    }
}
