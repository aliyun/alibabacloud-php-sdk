<?php

// This file is auto-generated, don't edit it. Thanks.

namespace AlibabaCloud\SDK\Cloudauth\V20190307\Models\DetectFaceAttributesResponseBody\data\faceInfos\faceAttributesDetectInfo\faceAttributes;

use AlibabaCloud\Dara\Model;

class headpose extends Model
{
    /**
     * @var float
     */
    public $pitchAngle;
    /**
     * @var float
     */
    public $rollAngle;
    /**
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
        parent::validate();
    }

    public function toArray($noStream = false)
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

    public function toMap($noStream = false)
    {
        return $this->toArray($noStream);
    }

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
