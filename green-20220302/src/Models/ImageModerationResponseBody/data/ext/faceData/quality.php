<?php

// This file is auto-generated, don't edit it. Thanks.

namespace AlibabaCloud\SDK\Green\V20220302\Models\ImageModerationResponseBody\data\ext\faceData;

use AlibabaCloud\Dara\Model;

class quality extends Model
{
    /**
     * @var float
     */
    public $blur;
    /**
     * @var float
     */
    public $integrity;
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
        'blur'      => 'Blur',
        'integrity' => 'Integrity',
        'pitch'     => 'Pitch',
        'roll'      => 'Roll',
        'yaw'       => 'Yaw',
    ];

    public function validate()
    {
        parent::validate();
    }

    public function toArray($noStream = false)
    {
        $res = [];
        if (null !== $this->blur) {
            $res['Blur'] = $this->blur;
        }

        if (null !== $this->integrity) {
            $res['Integrity'] = $this->integrity;
        }

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

    public function toMap($noStream = false)
    {
        return $this->toArray($noStream);
    }

    public static function fromMap($map = [])
    {
        $model = new self();
        if (isset($map['Blur'])) {
            $model->blur = $map['Blur'];
        }

        if (isset($map['Integrity'])) {
            $model->integrity = $map['Integrity'];
        }

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
