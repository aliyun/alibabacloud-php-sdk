<?php

// This file is auto-generated, don't edit it. Thanks.

namespace AlibabaCloud\SDK\Cloudauth\V20190307\Models\DetectFaceAttributesResponseBody\data\faceInfos\faceAttributesDetectInfo\faceAttributes;

use AlibabaCloud\Tea\Model;

class headpose extends Model
{
    /**
     * @example -1.5683923959732056
     *
     * @var float
     */
    public $pitchAngle;

    /**
     * @example 7.163370132446289
     *
     * @var float
     */
    public $rollAngle;

    /**
     * @example -6.925303936004639
     *
     * @var float
     */
    public $yawAngle;
    protected $_name = [
        'pitchAngle' => 'PitchAngle',
        'rollAngle'  => 'RollAngle',
        'yawAngle'   => 'YawAngle',
    ];

    public function validate()
    {
    }

    public function toMap()
    {
        $res = [];
        if (null !== $this->pitchAngle) {
            $res['PitchAngle'] = $this->pitchAngle;
        }
        if (null !== $this->rollAngle) {
            $res['RollAngle'] = $this->rollAngle;
        }
        if (null !== $this->yawAngle) {
            $res['YawAngle'] = $this->yawAngle;
        }

        return $res;
    }

    /**
     * @param array $map
     *
     * @return headpose
     */
    public static function fromMap($map = [])
    {
        $model = new self();
        if (isset($map['PitchAngle'])) {
            $model->pitchAngle = $map['PitchAngle'];
        }
        if (isset($map['RollAngle'])) {
            $model->rollAngle = $map['RollAngle'];
        }
        if (isset($map['YawAngle'])) {
            $model->yawAngle = $map['YawAngle'];
        }

        return $model;
    }
}
