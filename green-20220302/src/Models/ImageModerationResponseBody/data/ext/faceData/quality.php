<?php

// This file is auto-generated, don't edit it. Thanks.

namespace AlibabaCloud\SDK\Green\V20220302\Models\ImageModerationResponseBody\data\ext\faceData;

use AlibabaCloud\Tea\Model;

class quality extends Model
{
    /**
     * @description The blur of the face image. Valid values: 0 to 100. The higher the score, the more fuzzy it is.
     * Recommended values: 0 to 25.
     * @example 5.88
     *
     * @var float
     */
    public $blur;

    /**
     * @description The integrity of the human face. Recommended values:80 to 100.
     *
     * @example 100.0
     *
     * @var float
     */
    public $integrity;

    /**
     * @description The head-up or head-down angle of the face.
     * Recommended values:-30 to 30.
     * @example 5.88
     *
     * @var float
     */
    public $pitch;

    /**
     * @description The plane rotation angle of the face.
     * Recommended values:-30 to 30.
     * @example 5.18
     *
     * @var float
     */
    public $roll;

    /**
     * @description The left and right shaking angle of the human face.
     * Recommended values:-30 to 30.
     * @example 5.18
     *
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
    }

    public function toMap()
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

    /**
     * @param array $map
     *
     * @return quality
     */
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
